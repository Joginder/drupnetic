<?php

declare(strict_types=1);

namespace Drupal\Tests\gemini_provider\Kernel\Plugin\AiProvider;

use Drupal\ai\Plugin\ProviderProxy;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests GeminiProvider plugin discovery and Drupal integration.
 *
 * @coversDefaultClass \Drupal\gemini_provider\Plugin\AiProvider\GeminiProvider
 * @group gemini_provider
 */
class GeminiProviderKernelTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'ai',
    'key',
    'gemini_provider',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->installConfig(['gemini_provider']);
  }

  /**
   * Tests that the Gemini plugin is discovered and can be instantiated.
   *
   * The AI module wraps all providers in a ProviderProxy. Verifying we get
   * a proxy back confirms the plugin was discovered, instantiated, and
   * wrapped without error.
   *
   * @covers ::__construct
   */
  public function testPluginDiscovery(): void {
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');
    $this->assertInstanceOf(ProviderProxy::class, $provider);
  }

  /**
   * Tests that isUsable() returns FALSE when no API key is configured.
   *
   * The default installed config has an empty api_key. The provider should
   * report itself as not usable until a key is set.
   *
   * @covers ::isUsable
   */
  public function testIsUsableWithoutApiKey(): void {
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');
    $this->assertFalse($provider->isUsable());
  }

  /**
   * Tests that isUsable() returns TRUE when an API key is configured.
   *
   * @covers ::isUsable
   */
  public function testIsUsableWithApiKey(): void {
    $this->config('gemini_provider.settings')->set('api_key', 'test-key')->save();
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');
    $this->assertTrue($provider->isUsable());
  }

  /**
   * Tests that isUsable() checks supported operation types.
   *
   * @covers ::isUsable
   */
  public function testIsUsableWithOperationType(): void {
    $this->config('gemini_provider.settings')->set('api_key', 'test-key')->save();
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');
    $this->assertTrue($provider->isUsable('chat'));
    $this->assertTrue($provider->isUsable('embeddings'));
    $this->assertTrue($provider->isUsable('text_to_image'));
    $this->assertTrue($provider->isUsable('speech_to_text'));
  }

  /**
   * Tests that safety settings round-trip correctly through config.
   *
   * Verifies that saving safety settings via the config API and
   * retrieving them preserves values for each category.
   */
  public function testSafetySettingsConfigRoundTrip(): void {
    $safety_settings = [
      'HARM_CATEGORY_HARASSMENT' => 'BLOCK_LOW_AND_ABOVE',
      'HARM_CATEGORY_HATE_SPEECH' => 'BLOCK_MEDIUM_AND_ABOVE',
      'HARM_CATEGORY_SEXUALLY_EXPLICIT' => 'BLOCK_ONLY_HIGH',
      'HARM_CATEGORY_DANGEROUS_CONTENT' => 'BLOCK_NONE',
    ];

    $this->config('gemini_provider.settings')
      ->set('safety_settings', $safety_settings)
      ->save();

    $loaded = $this->config('gemini_provider.settings')->get('safety_settings');
    $this->assertSame($safety_settings, $loaded);
  }

  /**
   * Tests that empty safety settings config does not break the provider.
   *
   * When no safety settings are configured, the provider should still
   * instantiate and report as usable.
   */
  public function testEmptySafetySettingsDoNotBreakProvider(): void {
    $this->config('gemini_provider.settings')->set('api_key', 'test-key')->save();
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');

    // No safety settings configured — provider should still be usable.
    $this->assertNull($this->config('gemini_provider.settings')->get('safety_settings'));
    $this->assertTrue($provider->isUsable());
  }

  /**
   * Tests that partially configured safety settings are preserved.
   *
   * When only some categories have thresholds set and others are empty,
   * only the configured values should be stored.
   */
  public function testPartialSafetySettingsConfig(): void {
    $safety_settings = [
      'HARM_CATEGORY_HARASSMENT' => 'BLOCK_LOW_AND_ABOVE',
      'HARM_CATEGORY_HATE_SPEECH' => '',
      'HARM_CATEGORY_SEXUALLY_EXPLICIT' => 'OFF',
      'HARM_CATEGORY_DANGEROUS_CONTENT' => '',
    ];

    $this->config('gemini_provider.settings')
      ->set('safety_settings', $safety_settings)
      ->save();

    $loaded = $this->config('gemini_provider.settings')->get('safety_settings');
    $this->assertSame('BLOCK_LOW_AND_ABOVE', $loaded['HARM_CATEGORY_HARASSMENT']);
    $this->assertSame('', $loaded['HARM_CATEGORY_HATE_SPEECH']);
    $this->assertSame('OFF', $loaded['HARM_CATEGORY_SEXUALLY_EXPLICIT']);
  }

  /**
   * Tests that setConfiguration() normalizes Gemini-specific config values.
   *
   * Verifies three behaviors:
   * - stopSequences string is split into an array
   * - responseSchema and responseMimeType are removed
   * - Other configuration values are preserved.
   *
   * @covers ::setConfiguration
   */
  public function testSetConfiguration(): void {
    $provider = \Drupal::service('ai.provider')->createInstance('gemini');
    $provider->setConfiguration([
      'temperature' => 0.7,
      'maxOutputTokens' => 2048,
      'stopSequences' => 'END,STOP,DONE',
      'responseSchema' => '{"type":"object"}',
      'responseMimeType' => 'application/json',
    ]);

    $config = $provider->getConfiguration();

    // stopSequences string should be split into an array.
    $this->assertSame(['END', 'STOP', 'DONE'], $config['stopSequences']);

    // responseSchema and responseMimeType should be stripped.
    $this->assertArrayNotHasKey('responseSchema', $config);
    $this->assertArrayNotHasKey('responseMimeType', $config);

    // Other values should be preserved.
    $this->assertSame(0.7, $config['temperature']);
    $this->assertSame(2048, $config['maxOutputTokens']);
  }

}
