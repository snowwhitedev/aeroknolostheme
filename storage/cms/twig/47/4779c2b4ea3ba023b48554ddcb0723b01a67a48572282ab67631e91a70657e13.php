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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/home/slideshow.htm */
class __TwigTemplate_169a00856dbe8e3be1002145615d77161a966aef9355d1bc177e686137d65adb extends \Twig\Template
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
        echo "<!--[viewBag] == -->
";
        // line 2
        if ((($context["slideshow"] ?? null) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slideshow"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["slides"] ?? null) : null))) {
            // line 3
            echo "<div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
  <div class=\"carousel-inner\" role=\"listbox\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slideshow"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["slides"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                echo " ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 5), "path", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "    <div class=\"carousel-item";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) {
                        echo " active";
                    }
                    echo "\">
     
      <div class=\"carousel-image-background\" style=\"background-image: url('";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 8), "path", [], "any", false, false, false, 8), "html", null, true);
                    echo "');\"
        alt=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
                    echo "\"></div>
      ";
                    // line 10
                    if (((twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 10) || twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 10)) || twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 10))) {
                        // line 11
                        echo "      <div class=\"carousel-caption clearfix white-caption\">
        ";
                        // line 12
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 12)) {
                            // line 13
                            echo "          <h2 class=\"carousel-caption-title\"><strong>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 13), "html", null, true);
                            echo "</strong></h2>
        ";
                        }
                        // line 14
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 14)) {
                            // line 15
                            echo "        <span class=\"slider-caption\"><p>";
                            echo twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 15);
                            echo "</p></span><br/><br/>
        ";
                        }
                        // line 16
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 16)) {
                            echo "<a
          class=\"btn btn-default btn-custom-main btn-slider\"
          href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", [], "any", false, false, false, 18), "html", null, true);
                            echo "\"
          target=\"_blank\"
          >Learn more</a
        >";
                        }
                        // line 22
                        echo "      </div>
      ";
                    }
                    // line 24
                    echo "    </div>
    ";
                }
                // line 25
                echo " ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 26,  126 => 25,  122 => 24,  118 => 22,  111 => 18,  105 => 16,  99 => 15,  96 => 14,  90 => 13,  88 => 12,  85 => 11,  83 => 10,  79 => 9,  75 => 8,  67 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--[viewBag] == -->
{% if slideshow and slideshow['slides'] %}
<div id=\"{{id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for i, slide in slideshow['slides'] %} {% if slide.image.path %}
    <div class=\"carousel-item{% if loop.first %} active{% endif %}\">
     
      <div class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\"
        alt=\"{{ slide.image.title }}\"></div>
      {% if slide.title or slide.description or slide.link %}
      <div class=\"carousel-caption clearfix white-caption\">
        {% if slide.title %}
          <h2 class=\"carousel-caption-title\"><strong>{{ slide.title }}</strong></h2>
        {% endif %} {% if slide.description %}
        <span class=\"slider-caption\"><p>{{ slide.description|raw }}</p></span><br/><br/>
        {% endif %} {% if slide.link %}<a
          class=\"btn btn-default btn-custom-main btn-slider\"
          href=\"{{ slide.link }}\"
          target=\"_blank\"
          >Learn more</a
        >{% endif %}
      </div>
      {% endif %}
    </div>
    {% endif %} {% endfor %}
  </div>
</div>
{% endif %}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/slideshow.htm", "");
    }
}
