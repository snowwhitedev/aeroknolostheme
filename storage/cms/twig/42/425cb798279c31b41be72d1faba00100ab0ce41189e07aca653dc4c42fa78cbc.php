<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/site/header.htm */
class __TwigTemplate_f4facbc71f18ceab171848ffa79bf9e828708420e8541bc62127c5c6275c1766 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<header class=\"navigation\">
\t
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t  \t<img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/logo.png");
        echo "\">
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars color-one\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-solid-border btn-round-full color-one\"><strong>Get a Quote</strong></a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  72 => 24,  68 => 23,  60 => 18,  47 => 8,  43 => 7,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Header Start #}
<header class=\"navigation\">
\t
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t  \t<img src=\"{{'/assets/images/logo.png' | theme}}\">
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars color-one\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'about'|page }}\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'pricing'|page }}\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'services'|page }}\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'contact-us'|page }}\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"{{ 'contact-us'|page }}\" class=\"btn btn-solid-border btn-round-full color-one\"><strong>Get a Quote</strong></a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
{# Header Close #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/site/header.htm", "");
    }
}
