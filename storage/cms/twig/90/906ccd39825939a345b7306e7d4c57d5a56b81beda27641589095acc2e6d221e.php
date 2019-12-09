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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/home/intro.htm */
class __TwigTemplate_c3babd5ddf091b9daccb4131979df99990e2939d2f06adec9ff8326fb9ef7797 extends \Twig\Template
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
        echo "<section class=\"section intro\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-12 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\"> 
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-desktop color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecosystem</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0 text-center\">
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-medall color-one\"></i></div> 
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Awards</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 text-center\">
\t\t\t\t<div class=\"intro-item\">
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-layers-alt color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecoenergy</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-12 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\"> 
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-desktop color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecosystem</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/intro.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section Intro Start #}
<section class=\"section intro\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-12 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\"> 
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-desktop color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecosystem</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0 text-center\">
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-medall color-one\"></i></div> 
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Awards</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 text-center\">
\t\t\t\t<div class=\"intro-item\">
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-layers-alt color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecoenergy</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-12 text-center\">
\t\t\t\t<div class=\"intro-item mb-5 mb-lg-0\"> 
\t\t\t\t\t<div class=\"d-flex\"><i class=\"ti-desktop color-one\"></i></div>
\t\t\t\t\t<h3 class=\"mt-4 mb-3\">Ecosystem</h3>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<a href=\"#\" class=\"lnmore\">Learn more</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section Intro End #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/intro.htm", "");
    }
}
