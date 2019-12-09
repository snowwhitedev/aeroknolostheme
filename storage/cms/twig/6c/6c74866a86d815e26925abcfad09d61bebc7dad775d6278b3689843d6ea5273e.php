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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/home/counter.htm */
class __TwigTemplate_ed95c7ef575b2ba86aa59062380f260a3b80e6e07904e6fb7d6e7dba10b6fa90 extends \Twig\Template
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
        echo "<section class=\"section counter green-background\">
\t<div class=\"container \">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-globe-americas text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">87</span> %</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">of electricity is still generated from fossil fuel</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fab fa-pagelines text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">13</span> %</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">of electricity is generated from renewable energy</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-sync-alt text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\">\$<span class=\"counter-stat font-weight-bold \">80</span> </h3>
\t\t\t\t\t<p class=\"text-white counter-text\">million being invested into green power in 2015</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-lightbulb text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">1300</span> +</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">happy partners of ecoenergy</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/counter.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section Counter Start #}
<section class=\"section counter green-background\">
\t<div class=\"container \">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-globe-americas text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">87</span> %</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">of electricity is still generated from fossil fuel</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fab fa-pagelines text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">13</span> %</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">of electricity is generated from renewable energy</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-sync-alt text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\">\$<span class=\"counter-stat font-weight-bold \">80</span> </h3>
\t\t\t\t\t<p class=\"text-white counter-text\">million being invested into green power in 2015</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h1><i class=\"fas fa-lightbulb text-white\"></i></h1>
\t\t\t\t\t<h3 class=\"mb-0 text-white\"><span class=\"counter-stat font-weight-bold \">1300</span> +</h3>
\t\t\t\t\t<p class=\"text-white counter-text\">happy partners of ecoenergy</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section Counter End #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/counter.htm", "");
    }
}
