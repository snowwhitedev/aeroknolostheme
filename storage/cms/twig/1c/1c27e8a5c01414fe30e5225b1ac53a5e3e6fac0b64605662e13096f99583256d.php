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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit/partials/site/header.htm */
class __TwigTemplate_2cd6863c107d426a7eddca87bb0107af277677c2de4b460b60592683cae30a6c extends \Twig\Template
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
\t<nav class=\"navbar navbar-expand-lg\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t  \t<img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/logo.png");
        echo "\">
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars color-one\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t
\t\t\t";
        // line 16
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, false, 16)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navbar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 18
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
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  63 => 17,  58 => 16,  46 => 7,  42 => 6,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Header Start #}
<header class=\"navigation\">
\t<nav class=\"navbar navbar-expand-lg\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t  \t<img src=\"{{'/assets/images/logo.png' | theme}}\">
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars color-one\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t
\t\t\t{% partial 'site/navbar-items' items=main.menuItems %}
\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"{{ 'contact-us'|page }}\" class=\"btn btn-solid-border btn-round-full color-one\"><strong>Get a Quote</strong></a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
{# Header Close #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/header.htm", "");
    }
}
