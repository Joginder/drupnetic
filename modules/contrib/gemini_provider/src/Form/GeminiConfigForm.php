<?php

declare(strict_types=1);

namespace Drupal\gemini_provider\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Enums\HarmCategory;

/**
 * Configure Gemini Provider settings.
 */
class GeminiConfigForm extends ConfigFormBase {

  /**
   * Config settings.
   */
  const CONFIG_NAME = 'gemini_provider.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'gemini_provider_gemini_config';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['gemini_provider.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config(static::CONFIG_NAME);

    $form['api_key'] = [
      '#type' => 'key_select',
      '#title' => $this->t('Gemini API Key'),
      '#description' => $this->t('The Gemini API Key.'),
      '#default_value' => $config->get('api_key'),
    ];

    $form['safety_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Safety settings'),
      '#description' => $this->t('Read more about the safety settings <a href=":url" target="_blank">here (Google AI documentation)</a>.', [':url' => 'https://ai.google.dev/api/generate-content#safetysetting']),
      '#tree' => TRUE,
    ];

    // Build threshold options with human-readable labels.
    $threshold_options = [];
    foreach (HarmBlockThreshold::cases() as $threshold) {
      // Skip the UNSPECIFIED value as it's not useful for admins.
      if ($threshold === HarmBlockThreshold::HARM_BLOCK_THRESHOLD_UNSPECIFIED) {
        continue;
      }
      $threshold_options[$threshold->value] = ucwords(strtolower(str_replace('_', ' ', $threshold->name)));
    }

    $safety_settings = $config->get('safety_settings') ?? [];
    foreach (HarmCategory::cases() as $category) {
      // Skip the UNSPECIFIED value as it's not useful for admins.
      if ($category === HarmCategory::HARM_CATEGORY_UNSPECIFIED) {
        continue;
      }
      // Build a human-readable label by stripping the HARM_CATEGORY_ prefix.
      $label = ucwords(strtolower(str_replace('_', ' ', str_replace('HARM_CATEGORY_', '', $category->name))));
      $form['safety_settings'][$category->name] = [
        '#type' => 'select',
        '#title' => $label,
        '#options' => $threshold_options,
        '#empty_option' => $this->t('- Not configured -'),
        '#default_value' => $safety_settings[$category->name] ?? '',
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config(static::CONFIG_NAME)
      ->set('api_key', $form_state->getValue('api_key'))
      ->set('safety_settings', $form_state->getValue('safety_settings'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
