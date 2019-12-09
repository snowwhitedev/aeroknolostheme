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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/site/footer.htm */
class __TwigTemplate_c76ad58e3a3e2f48c5c1bf5e69299830178971351afefaef1d834fef8ff04355 extends \Twig\Template
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
        echo "<footer class=\"footer\">
\t<div class=\"row bg-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Info</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Rules and Accreditation</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Current Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Previous Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Quarterly Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Annual Audit</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Marketing Guidelines</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Relevant Legislation</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">About us</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">What is Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Why Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Green Power Generators</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">How Green Power Works</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Who is behind Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Who uses Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Where Are Green Power Generators?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Audits And Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Energy saving tips</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Fact Sheets</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Accessibility</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Links</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Business Center</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Rules and Accreditation</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Current Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Previous Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Quarterly Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Annual Audit</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Marketing Guidelines</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Relevant Legislation</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Green Power for</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Business</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Events</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-btm pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; ";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Copyright Reserved to <span class=\"text-color\">Aero</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\">
\t\t\t\t\t\t\t\t<i class=\"ti-facebook mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\">
\t\t\t\t\t\t\t\t<i class=\"ti-twitter mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com/themefisher/\">
\t\t\t\t\t\t\t\t<i class=\"ti-linkedin mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
</footer>
";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 72,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Footer Start #}
<footer class=\"footer\">
\t<div class=\"row bg-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Info</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Rules and Accreditation</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Current Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Previous Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Quarterly Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Annual Audit</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Marketing Guidelines</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Relevant Legislation</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">About us</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">What is Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Why Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Green Power Generators</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">How Green Power Works</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Who is behind Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Who uses Green Power?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Where Are Green Power Generators?</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Audits And Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Energy saving tips</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Fact Sheets</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Accessibility</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Links</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Business Center</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Rules and Accreditation</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Current Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Previous Consultations</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Quarterly Reports</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Annual Audit</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Marketing Guidelines</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Relevant Legislation</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Green Power for</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-30\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Business</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Events</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-btm pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; {{ \"now\"|date(\"Y\") }} - Copyright Reserved to <span class=\"text-color\">Aero</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\">
\t\t\t\t\t\t\t\t<i class=\"ti-facebook mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\">
\t\t\t\t\t\t\t\t<i class=\"ti-twitter mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com/themefisher/\">
\t\t\t\t\t\t\t\t<i class=\"ti-linkedin mr-2 color-one\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
</footer>
{# Footer Close #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/site/footer.htm", "");
    }
}
