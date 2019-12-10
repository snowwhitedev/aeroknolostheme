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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit/partials/site/footer.htm */
class __TwigTemplate_f6e33f4551868f9110e6f7317031e8a46f1218bc066ee7522aa64265f2440f2f extends \Twig\Template
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
        echo "<footer class=\"footer section\">
\t<div class=\"row bg-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">

\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Company</h4>

\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Terms &amp; Conditions</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Privacy Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">

\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Quick Links</h4>

\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t\t<li>";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "</li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"text-white\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t\t<h3 class=\"text-white\">Aero<span class=\"text-white\">Knolos.</span></h3>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h6><a href=\"tel:+23-345-67890\" class=\"text-white\">+40 762 333 131</a></h6>
\t\t\t\t\t\t<h4><a href=\"mailto:contact@aero.org.ro\" class=\"text-white\">contact@aero.org.ro</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-btm pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\" style=\"align-items: center;\">
\t\t\t
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-6\">
\t\t\t\t\t<div class=\"copyright\">© ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "-<span class=\"text-color\">Aero.Knolos</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\"><i class=\"ti-facebook mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com\"><i class=\"ti-twitter mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com\"><i class=\"ti-linkedin mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</footer>

<p>";
        // line 68
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 68,  102 => 47,  78 => 25,  68 => 24,  62 => 23,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{##} {# Footer Start #}
<footer class=\"footer section\">
\t<div class=\"row bg-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">

\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Company</h4>

\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Terms &amp; Conditions</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"text-white\">Privacy Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">

\t\t\t\t\t\t<h4 class=\"text-capitalize mb-4 text-white\">Quick Links</h4>

\t\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t\t<li>{% for item in main.menuItems %}</li>
\t\t\t\t\t\t\t<li><a href=\"{{ item.url }}\" class=\"text-white\">{{ item.title }}</a></li>
\t\t\t\t\t\t\t<li>{% endfor %}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-sm-4 col-12 text-center\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t\t<h3 class=\"text-white\">Aero<span class=\"text-white\">Knolos.</span></h3>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h6><a href=\"tel:+23-345-67890\" class=\"text-white\">+40 762 333 131</a></h6>
\t\t\t\t\t\t<h4><a href=\"mailto:contact@aero.org.ro\" class=\"text-white\">contact@aero.org.ro</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-btm pt-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\" style=\"align-items: center;\">
\t\t\t
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-6\">
\t\t\t\t\t<div class=\"copyright\">© {{ \"now\"|date(\"Y\") }}-<span class=\"text-color\">Aero.Knolos</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com\"><i class=\"ti-facebook mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com\"><i class=\"ti-twitter mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com\"><i class=\"ti-linkedin mr-2 color-one\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</footer>

<p>{# Footer Close #}</p>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/footer.htm", "");
    }
}
