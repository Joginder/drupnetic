<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/drupnetic/templates/layout/page.html.twig */
class __TwigTemplate_fbee5c847204380962f29e80d61a2c1c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        // line 65
        yield "
    ";
        // line 70
        yield "
      ";
        // line 84
        yield "
  ";
        // line 90
        yield "
";
        // line 92
        yield "
";
        // line 94
        yield "
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Drupnetic - Frontend Drupal Developer Portfolio</title>
  ";
        // line 102
        yield "</head>
<body>

  <!-- Skip Link -->
  <a href=\"#main-content\" class=\"skip-link\">Skip to main content</a>

  <!-- Header -->
  <header role=\"banner\">
    <nav aria-label=\"Main navigation\">
      <div class=\"logo\" aria-label=\"Personal site logo\">Drupnetic</div>
      <ul class=\"nav-links\">
        <li><a href=\"#about\">About Me</a></li>
        <li><a href=\"#skills\">Skills</a></li>
        <li><a href=\"#projects\">Projects</a></li>
        <li><a href=\"#contact\">Contact Me</a></li>
      </ul>
      <button id=\"darkModeToggle\" aria-pressed=\"false\" aria-label=\"Toggle dark mode\">🌙 Dark Mode</button>
      <button class=\"btn\" aria-label=\"Download Resume\">Resume</button>
    </nav>
  </header>

  <!-- Main Content -->
  <main id=\"main-content\">

    <!-- Hero Section -->
    <section class=\"hero\" aria-labelledby=\"hero-title\">
      <h1 id=\"hero-title\">Hello, I'm <strong>Joginder Singh</strong>. <br> A Frontend Drupal Developer Based In <strong>India</strong>.</h1>
      <p>Your trusted partner for frontend development and interactive, accessible web experiences.</p>
      <div class=\"social-icons\" aria-label=\"Social media links\">
        <a href=\"#\" aria-label=\"Facebook\">FB</a>
        <a href=\"#\" aria-label=\"Twitter\">TW</a>
        <a href=\"https://linkedin.com/in/joginderpc\" aria-label=\"LinkedIn\">LN</a>
      </div>
      <img src=\"Boy.jpg\" alt=\"Illustration of Evren Shah sitting with a laptop\" role=\"img\">
    </section>

    <!-- Skills Section -->
    <section id=\"skills\" aria-labelledby=\"skills-title\">
      <h2 id=\"skills-title\">My <strong>Skills</strong></h2>
      <ul class=\"skills-grid\">
        <li>Git</li>
        <li>JavaScript</li>
        <li>Sass/SCSS</li>
        <li>NodeJS</li>
        <li>Storybook</li>
        <li>ReactJS</li>
        <li>GitHub</li>
        <li>Styled Components</li>
      </ul>
    </section>

    <!-- Experience Section -->
    <section id=\"experience\" aria-labelledby=\"experience-title\">
      <h2 id=\"experience-title\">My <strong>Experience</strong></h2>
      <article class=\"experience-item\">
        <h3>Lead Software Engineer at Google</h3>
        <p><time datetime=\"2021-01\">2021</time> – Present</p>
        <p>Led frontend engineering projects, promoting best practices and accessibility standards.</p>
      </article>
      <article class=\"experience-item\">
        <h3>Software Engineer at YouTube</h3>
        <p><time datetime=\"2017-06\">2017</time> – <time datetime=\"2020-12\">2020</time></p>
        <p>Implemented scalable UI components with a focus on WCAG compliance and performance.</p>
      </article>
      <article class=\"experience-item\">
        <h3>Junior Software Engineer at Apple</h3>
        <p><time datetime=\"2015-01\">2015</time> – <time datetime=\"2017-06\">2017</time></p>
        <p>Collaborated with UX teams to develop inclusive, user-friendly web applications.</p>
      </article>
    </section>

    <!-- About Section -->
    <section id=\"about\" aria-labelledby=\"about-title\">
      <h2 id=\"about-title\">About <strong>Me</strong></h2>
      <img src=\"Boy.jpg\" alt=\"Evren Shah portrait illustration\" role=\"img\">
      <p>I'm a passionate frontend developer creating accessible, performant, and beautiful web experiences for users around the world.</p>
    </section>

    <!-- Projects Section -->
    <section id=\"projects\" aria-labelledby=\"projects-title\">
      <h2 id=\"projects-title\">My <strong>Projects</strong></h2>
      <article class=\"project-item\">
        <img src=\"project1.jpg\" alt=\"Screenshot of Crypto Screener Application\">
        <h3>01. Crypto Screener Application</h3>
        <p>A real-time cryptocurrency screening tool with responsive and accessible UI components.</p>
      </article>
      <article class=\"project-item\">
        <img src=\"project2.jpg\" alt=\"Screenshot of Ecommerce Website Template\">
        <h3>02. Ecommerce Website Template</h3>
        <p>Template for modern, accessible online stores built with React and Styled Components.</p>
      </article>
      <article class=\"project-item\">
        <img src=\"project3.jpg\" alt=\"Screenshot of Blog Website Template\">
        <h3>03. Blog Website Template</h3>
        <p>Clean, accessible blogging platform template focusing on readability and accessibility.</p>
      </article>
    </section>

    <!-- Testimonials Section -->
    <section id=\"testimonials\" aria-labelledby=\"testimonials-title\">
      <h2 id=\"testimonials-title\">My <strong>Testimonials</strong></h2>
      <blockquote class=\"testimonial-item\">
        <p>“Evren's work ethic and dedication to quality are unmatched. Highly recommended!”</p>
        <cite>— Evren Blah, Google</cite>
      </blockquote>
      <blockquote class=\"testimonial-item\">
        <p>“A fantastic developer who always prioritizes accessibility and clean code.”</p>
        <cite>— Pro Blacon, YouTube</cite>
      </blockquote>
      <blockquote class=\"testimonial-item\">
        <p>“Evren delivers projects that perform and shine across devices and users.”</p>
        <cite>— Evren Blah, Apple</cite>
      </blockquote>
    </section>

    <!-- Contact Section -->
    <section id=\"contact\" aria-labelledby=\"contact-title\">
      <h2 id=\"contact-title\">Let's <strong>Talk</strong> for Something Special</h2>
      <form aria-label=\"Contact form\">
        <label for=\"name\">Name</label>
        <input id=\"name\" type=\"text\" name=\"name\" required>

        <label for=\"email\">Email</label>
        <input id=\"email\" type=\"email\" name=\"email\" required>

        <label for=\"message\">Message</label>
        <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>

        <button type=\"submit\">Get In Touch</button>
      </form>
      <p><a href=\"mailto:joginderpc@gmail.com\">joginderpc@gmail.com</a> | <a href=\"tel:+919873251584\">+91 9873251584</a></p>
    </section>

  </main>

  <!-- Footer -->
  <footer role=\"contentinfo\">
    <p>&copy; 2025 Drupnetic | Made with ❤️</p>
  </footer>

  <script src=\"script.js\"></script>
</body>
</html>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupnetic/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 102,  61 => 94,  58 => 92,  55 => 90,  52 => 84,  49 => 70,  46 => 65,  44 => 64,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupnetic/templates/layout/page.html.twig", "/home/drupnwhq/public_html/themes/custom/drupnetic/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
