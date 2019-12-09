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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit_org/partials/home/mainslider.htm */
class __TwigTemplate_7cb29b13999e613dbc6043c499cc9086d0b654e09fafbe4fa20f538998e2e29a extends \Twig\Template
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
        if ((( !($context["slideshow"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, false, 1) == null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1) == "Example"))) {
            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            $context["_slideshow"] = ["id" => 2, "name" => "Header", "created_at" => "2016-05-23 10:22:39", "updated_at" => "2016-05-23 10:52:46", "slides" => [0 => ["id" => 4, "name" => "1", "description" => "<h1>Welcome</h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.</p>", "link" => "", "sort_order" => 4, "created_at" => "2016-05-23 10:52:10", "updated_at" => "2016-05-25 09:10:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_1.jpg")]], 1 => ["id" => 5, "name" => "2", "description" => "", "link" => "", "sort_order" => 5, "created_at" => "2016-05-23 10:52:32", "updated_at" => "2016-05-23 10:52:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_2.jpg")]], 2 => ["id" => 6, "name" => "3", "description" => "", "link" => "", "sort_order" => 6, "created_at" => "2016-05-23 10:52:42", "updated_at" => "2016-05-23 10:52:42", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => ["path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_3.jpg")]]]];
        } else {
            // line 62
            echo "    ";
            $context["_slideshow"] = twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", [], "any", false, false, false, 62);
        }
        // line 64
        echo "
<section id=\"slider\">
    ";
        // line 66
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['slideshow'] = ($context["_slideshow"] ?? null)        ;
        $context['__cms_partial_params']['id'] = "carousel-top-header"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/slideshow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/mainslider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 67,  54 => 66,  50 => 64,  46 => 62,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not slideshow or slideshow.slideshow == null or slideshow.slideshow.name == 'Example' %}

    {# placeholder slidehsow if no slideshow is set #}
    {% set _slideshow = {
           \"id\":2,
           \"name\":\"Header\",
           \"created_at\":\"2016-05-23 10:22:39\",
           \"updated_at\":\"2016-05-23 10:52:46\",
           \"slides\":[
              {
                 \"id\":4,
                 \"name\":\"1\",
                 \"description\":\"<h1>Welcome<\\/h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.<\\/p>\",
                 \"link\":\"\",
                 \"sort_order\":4,
                 \"created_at\":\"2016-05-23 10:52:10\",
                 \"updated_at\":\"2016-05-25 09:10:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_1.jpg\" | theme
                 }
              },
              {
                 \"id\":5,
                 \"name\":\"2\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":5,
                 \"created_at\":\"2016-05-23 10:52:32\",
                 \"updated_at\":\"2016-05-23 10:52:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_2.jpg\" | theme
                 }
              },
              {
                 \"id\":6,
                 \"name\":\"3\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":6,
                 \"created_at\":\"2016-05-23 10:52:42\",
                 \"updated_at\":\"2016-05-23 10:52:42\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_3.jpg\" | theme
                 }
              }
           ]
        }
    %}
{% else %}
    {% set _slideshow = slideshow.slideshow %}
{% endif %}

<section id=\"slider\">
    {% partial 'home/slideshow' slideshow=_slideshow id='carousel-top-header' %}
</section>", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit_org/partials/home/mainslider.htm", "");
    }
}
