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

/* themes/custom/drupnetic/templates/layout/page--404.html.twig */
class __TwigTemplate_02e2d07d8d20c9c9aee6ebc100675c13 extends Template
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
        // line 1
        yield "<style>
\t@import url(\"https://fonts.googleapis.com/css?family=Bungee\");
\t.page-403 {
\t\tbackground: #1b1b1b;
\t\tcolor: white;
\t\tfont-family: \"Bungee\", cursive;
\t\ttext-align: center;
    min-height: 100vh;
    display: grid;
    place-items: center;
\t}
\t.page-403 a {
\t\tcolor: #2aa7cc;
\t\ttext-decoration: none;
\t}
\t.page-403 a:hover {
\t\tcolor: white;
\t}
\t.page-403 svg {
\t\twidth: 50vw;
\t}
\t.page-403 .lightblue {
\t\tfill: #444;
\t}
\t.page-403 .eye {
\t\tcx: calc(115px + 30px * var(--mouse-x));
\t\tcy: calc(50px + 30px * var(--mouse-y));
\t}
\t.page-403 #eye-wrap {
\t\toverflow: hidden;
\t}
\t.error-text {
\t\tfont-size: 120px;
\t}
\t.page-403 .alarm {
\t\tanimation: alarmOn 0.5s infinite;
\t}
\t@keyframes alarmOn {
\t\tto {
\t\t\tfill: darkred;
\t\t}
\t}
</style>
<article class=\"page-403\">
  <div class=\"page-403-inner\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"robot-error\" viewBox=\"0 0 260 118.9\">
      <defs>
        <clipPath id=\"white-clip\">
          <circle id=\"white-eye\" fill=\"#cacaca\" cx=\"130\" cy=\"65\" r=\"20\" />
        </clipPath>
        <text id=\"text-s\" class=\"error-text\" y=\"106\"> 404</text>
      </defs>
      <path class=\"alarm\" fill=\"#e62326\" d=\"M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6\" />
      <use xlink:href=\"#text-s\" x=\"-0.5px\" y=\"-1px\" fill=\"black\"></use>
      <use xlink:href=\"#text-s\" fill=\"#2b2b2b\"></use>
      <g id=\"robot\">
        <g id=\"eye-wrap\">
          <use xlink:href=\"#white-eye\"></use>
          <circle id=\"eyef\" class=\"eye\" clip-path=\"url(#white-clip)\" fill=\"#000\" stroke=\"#2aa7cc\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"130\" cy=\"65\" r=\"11\" />
          <ellipse id=\"white-eye\" fill=\"#2b2b2b\" cx=\"130\" cy=\"40\" rx=\"18\" ry=\"12\" />
        </g>
        <circle class=\"lightblue\" cx=\"105\" cy=\"32\" r=\"2.5\" id=\"tornillo\" />
        <use xlink:href=\"#tornillo\" x=\"50\"></use>
        <use xlink:href=\"#tornillo\" x=\"50\" y=\"60\"></use>
        <use xlink:href=\"#tornillo\" y=\"60\"></use>
      </g>
    </svg>
    <h1>Forbidden 404</h1>
    <p>Oops! The page you're looking for doesn't exist. Maybe you mistyped the address, or the page has moved.</p>
    <p>Try searching for what you need, or head back to the homepage.</p>
    <a href=\"/\">BACK TO HOME PAGE</a>
  </div>
  <script>
    var root = document.documentElement;
    var eyef = document.getElementById('eyef');
    var cx = document.getElementById(\"eyef\").getAttribute(\"cx\");
    var cy = document.getElementById(\"eyef\").getAttribute(\"cy\");
    document.addEventListener(\"mousemove\", evt => {
      let x = evt.clientX / innerWidth;
      let y = evt.clientY / innerHeight;
      root.style.setProperty(\"--mouse-x\", x);
      root.style.setProperty(\"--mouse-y\", y);
      cx = 115 + 30 * x;
      cy = 50 + 30 * y;
      eyef.setAttribute(\"cx\", cx);
      eyef.setAttribute(\"cy\", cy);
    });
    document.addEventListener(\"touchmove\", touchHandler => {
      let x = touchHandler.touches[0].clientX / innerWidth;
      let y = touchHandler.touches[0].clientY / innerHeight;
      root.style.setProperty(\"--mouse-x\", x);
      root.style.setProperty(\"--mouse-y\", y);
    });
  </script>
</article>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupnetic/templates/layout/page--404.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupnetic/templates/layout/page--404.html.twig", "/home/drupnwhq/public_html/themes/custom/drupnetic/templates/layout/page--404.html.twig");
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
