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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit/partials/home/banner.htm */
class __TwigTemplate_63005ea9f83d1dd098985818cc7e92940a32bd779589f85109915c2d21c8584e extends \Twig\Template
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
        // line 1
        echo " ";
        // line 2
        echo "<section class=\"banner\">
</section>
<p>";
        // line 4
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/home/banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{##} {# Slider Start #}
<section class=\"banner\">
</section>
<p>{# Slider End #}</p>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/home/banner.htm", "");
    }
}
