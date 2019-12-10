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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit/partials/site/navbar-items.htm */
class __TwigTemplate_166209094b90a68564ebed1ffe66e06f08cb0f1d74647ad02955011468fc9b90 extends \Twig\Template
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
        echo "<ul class=\"navbar-nav ml-auto\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
      <li class=\"nav-item active dropdown\">
        ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) {
                // line 5
                echo "          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 8
                    echo "                    <li><a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, false, 8), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, false, 8), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            </ul>
        ";
            } else {
                // line 13
                echo "          <a class=\"nav-link dropdown-toggle\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 13), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13), "html", null, true);
                echo "</a>
        ";
            }
            // line 15
            echo "       </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/navbar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  83 => 15,  75 => 13,  71 => 11,  59 => 8,  55 => 7,  49 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav ml-auto\">
  {% for item in items %}  
      <li class=\"nav-item active dropdown\">
        {% if item.items %}
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{item.title}}</a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                {% for subitem in item.items%}
                    <li><a class=\"dropdown-item\" href=\"{{ subitem.url }}\">{{subitem.title}}</a>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
          <a class=\"nav-link dropdown-toggle\" href=\"{{ item.url }}\">{{item.title}}</a>
        {% endif %}
       </li>
  {%endfor%}
</ul>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/site/navbar-items.htm", "");
    }
}
