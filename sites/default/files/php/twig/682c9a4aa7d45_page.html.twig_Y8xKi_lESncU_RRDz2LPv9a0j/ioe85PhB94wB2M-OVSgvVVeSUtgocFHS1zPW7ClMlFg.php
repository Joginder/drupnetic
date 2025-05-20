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
        // line 48
        yield "<div class=\"container p-4 mx-auto\">

\t<header role=\"banner\">
\t\t";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), "html", null, true);
        yield "
\t\t\t<button id=\"darkModeToggle\" aria-pressed=\"false\" aria-label=\"Toggle dark mode\">🌙 Dark Mode</button>
\t\t\t<button class=\"btn\" aria-label=\"Download Resume\">Resume</button>
\t\t</nav>
\t</header>

\t";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 57), "html", null, true);
        yield "
\t";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 58), "html", null, true);
        yield "

\t";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 60), "html", null, true);
        yield "

\t";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62), "html", null, true);
        yield "

\t";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 64), "html", null, true);
        yield "

\t<main role=\"main\" id=\"main-content\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\tlink is in html.html.twig

\t\t<div class=\"-mx-4 md:flex\">
\t\t\t<div class=\"p-4 md:flex-1\">
\t\t\t\t";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 72), "html", null, true);
        yield "
\t\t\t\t<!-- Hero Section -->
\t\t\t\t<section class=\"hero\" aria-labelledby=\"hero-title\">
\t\t\t\t\t<h1 id=\"hero-title\">Hello, I'm
\t\t\t\t\t\t<strong>Joginder Singh</strong>.
\t\t\t\t\t\t<br>
\t\t\t\t\t\tA Frontend Drupal Developer Based In
\t\t\t\t\t\t<strong>India</strong>.</h1>
\t\t\t\t\t<p>Your trusted partner for frontend development and interactive, accessible web experiences.</p>
\t\t\t\t\t<div class=\"social-icons\" aria-label=\"Social media links\">
\t\t\t\t\t\t<a href=\"#\" aria-label=\"Facebook\">FB</a>
\t\t\t\t\t\t<a href=\"#\" aria-label=\"Twitter\">TW</a>
\t\t\t\t\t\t<a href=\"https://linkedin.com/in/joginderpc\" aria-label=\"LinkedIn\">LN</a>
\t\t\t\t\t</div>
\t\t\t\t\t<img src=\"Boy.jpg\" alt=\"Illustration of Evren Shah sitting with a laptop\" role=\"img\">
\t\t\t\t</section>

\t\t\t\t<!-- Skills Section -->
\t\t\t\t<section id=\"skills\" aria-labelledby=\"skills-title\">
\t\t\t\t\t<h2 id=\"skills-title\">My
\t\t\t\t\t\t<strong>Skills</strong>
\t\t\t\t\t</h2>
\t\t\t\t\t<ul class=\"skills-grid\">
\t\t\t\t\t\t<li>Git</li>
\t\t\t\t\t\t<li>JavaScript</li>
\t\t\t\t\t\t<li>Sass/SCSS</li>
\t\t\t\t\t\t<li>NodeJS</li>
\t\t\t\t\t\t<li>Storybook</li>
\t\t\t\t\t\t<li>ReactJS</li>
\t\t\t\t\t\t<li>GitHub</li>
\t\t\t\t\t\t<li>Styled Components</li>
\t\t\t\t\t</ul>
\t\t\t\t</section>

\t\t\t\t<!-- Experience Section -->
\t\t\t\t<section id=\"experience\" aria-labelledby=\"experience-title\">
\t\t\t\t\t<h2 id=\"experience-title\">My
\t\t\t\t\t\t<strong>Experience</strong>
\t\t\t\t\t</h2>
\t\t\t\t\t<article class=\"experience-item\">
\t\t\t\t\t\t<h3>Lead Software Engineer at Google</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<time datetime=\"2021-01\">2021</time>
\t\t\t\t\t\t\t– Present</p>
\t\t\t\t\t\t<p>Led frontend engineering projects, promoting best practices and accessibility standards.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"experience-item\">
\t\t\t\t\t\t<h3>Software Engineer at YouTube</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<time datetime=\"2017-06\">2017</time>
\t\t\t\t\t\t\t–
\t\t\t\t\t\t\t<time datetime=\"2020-12\">2020</time>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>Implemented scalable UI components with a focus on WCAG compliance and performance.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"experience-item\">
\t\t\t\t\t\t<h3>Junior Software Engineer at Apple</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<time datetime=\"2015-01\">2015</time>
\t\t\t\t\t\t\t–
\t\t\t\t\t\t\t<time datetime=\"2017-06\">2017</time>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>Collaborated with UX teams to develop inclusive, user-friendly web applications.</p>
\t\t\t\t\t</article>
\t\t\t\t</section>

\t\t\t\t<!-- About Section -->
\t\t\t\t<section id=\"about\" aria-labelledby=\"about-title\">
\t\t\t\t\t<h2 id=\"about-title\">About
\t\t\t\t\t\t<strong>Me</strong>
\t\t\t\t\t</h2>
\t\t\t\t\t<img src=\"Boy.jpg\" alt=\"Evren Shah portrait illustration\" role=\"img\">
\t\t\t\t\t<p>I'm a passionate frontend developer creating accessible, performant, and beautiful web experiences for users around the world.</p>
\t\t\t\t</section>

\t\t\t\t<!-- Projects Section -->
\t\t\t\t<section id=\"projects\" aria-labelledby=\"projects-title\">
\t\t\t\t\t<h2 id=\"projects-title\">My
\t\t\t\t\t\t<strong>Projects</strong>
\t\t\t\t\t</h2>
\t\t\t\t\t<article class=\"project-item\">
\t\t\t\t\t\t<img src=\"project1.jpg\" alt=\"Screenshot of Crypto Screener Application\">
\t\t\t\t\t\t<h3>01. Crypto Screener Application</h3>
\t\t\t\t\t\t<p>A real-time cryptocurrency screening tool with responsive and accessible UI components.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"project-item\">
\t\t\t\t\t\t<img src=\"project2.jpg\" alt=\"Screenshot of Ecommerce Website Template\">
\t\t\t\t\t\t<h3>02. Ecommerce Website Template</h3>
\t\t\t\t\t\t<p>Template for modern, accessible online stores built with React and Styled Components.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"project-item\">
\t\t\t\t\t\t<img src=\"project3.jpg\" alt=\"Screenshot of Blog Website Template\">
\t\t\t\t\t\t<h3>03. Blog Website Template</h3>
\t\t\t\t\t\t<p>Clean, accessible blogging platform template focusing on readability and accessibility.</p>
\t\t\t\t\t</article>
\t\t\t\t</section>

\t\t\t\t<!-- Testimonials Section -->
\t\t\t\t<section id=\"testimonials\" aria-labelledby=\"testimonials-title\">
\t\t\t\t\t<h2 id=\"testimonials-title\">My
\t\t\t\t\t\t<strong>Testimonials</strong>
\t\t\t\t\t</h2>
\t\t\t\t\t<blockquote class=\"testimonial-item\">
\t\t\t\t\t\t<p>“Evren's work ethic and dedication to quality are unmatched. Highly recommended!”</p>
\t\t\t\t\t\t<cite>— Evren Blah, Google</cite>
\t\t\t\t\t</blockquote>
\t\t\t\t\t<blockquote class=\"testimonial-item\">
\t\t\t\t\t\t<p>“A fantastic developer who always prioritizes accessibility and clean code.”</p>
\t\t\t\t\t\t<cite>— Pro Blacon, YouTube</cite>
\t\t\t\t\t</blockquote>
\t\t\t\t\t<blockquote class=\"testimonial-item\">
\t\t\t\t\t\t<p>“Evren delivers projects that perform and shine across devices and users.”</p>
\t\t\t\t\t\t<cite>— Evren Blah, Apple</cite>
\t\t\t\t\t</blockquote>
\t\t\t\t</section>

\t\t\t\t<!-- Contact Section -->
\t\t\t\t<section id=\"contact\" aria-labelledby=\"contact-title\">
\t\t\t\t\t<h2 id=\"contact-title\">Let's
\t\t\t\t\t\t<strong>Talk</strong>
\t\t\t\t\t\tfor Something Special</h2>
\t\t\t\t\t<form aria-label=\"Contact form\">
\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t<input id=\"name\" type=\"text\" name=\"name\" required>

\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t<input id=\"email\" type=\"email\" name=\"email\" required>

\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t<textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>

\t\t\t\t\t\t<button type=\"submit\">Get In Touch</button>
\t\t\t\t\t</form>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"mailto:joginderpc@gmail.com\">joginderpc@gmail.com</a>
\t\t\t\t\t\t|
\t\t\t\t\t\t<a href=\"tel:+919873251584\">+91 9873251584</a>
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t/.layout-content

\t\t\t";
        // line 214
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 214)) {
            // line 215
            yield "\t\t\t\t<aside class=\"p-4 md:w-1/4\" role=\"complementary\">
\t\t\t\t\t";
            // line 216
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 216), "html", null, true);
            yield "
\t\t\t\t</aside>
\t\t\t";
        }
        // line 219
        yield "
\t\t\t";
        // line 220
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 220)) {
            // line 221
            yield "\t\t\t\t<aside class=\"md:w-1/4\" role=\"complementary\">
\t\t\t\t\t";
            // line 222
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 222), "html", null, true);
            yield "
\t\t\t\t</aside>
\t\t\t";
        }
        // line 225
        yield "\t\t</div>
\t</main>

\t";
        // line 228
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 228)) {
            // line 229
            yield "\t\t<footer role=\"contentinfo\">
\t\t\t";
            // line 230
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 230), "html", null, true);
            yield "
      <p>&copy; 2025 Drupnetic | Made with ❤️ By Joginder Singh</p>
\t\t</footer>
\t";
        }
        // line 234
        yield "
\t</div> 
  ";
        // line 237
        yield "


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  279 => 237,  275 => 234,  268 => 230,  265 => 229,  263 => 228,  258 => 225,  252 => 222,  249 => 221,  247 => 220,  244 => 219,  238 => 216,  235 => 215,  233 => 214,  88 => 72,  77 => 64,  72 => 62,  67 => 60,  62 => 58,  58 => 57,  49 => 51,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupnetic/templates/layout/page.html.twig", "/var/www/html/themes/custom/drupnetic/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 214];
        static $filters = ["escape" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
