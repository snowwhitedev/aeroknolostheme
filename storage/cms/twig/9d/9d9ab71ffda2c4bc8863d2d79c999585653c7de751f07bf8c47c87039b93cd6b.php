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

/* D:\Upwork\20191205Nikita_alex_laravel_october\work\aero/themes/mehedi-megakit/partials/home/team.htm */
class __TwigTemplate_4dc8625c16bfd91efd3f5fc436a759e5105bca063fbb051e80ff91b2a90d3e3d extends \Twig\Template
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
        echo "<section class=\"section counter\" style=\"padding: 30px;\">
\t<div class=\"container\">

\t\t<h2 class=\"mb-5\" style=\"text-align: left;\">Our Team</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/Team4-0-0-0-0-1575770537.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Robert Woods</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">CEO</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/team-1-390x390-0-0-0-0-1575775334.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Marcelia Prinston</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Partnership Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/Team4-0-0-0-0-1575770537.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Lionel Green</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Financial Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div></div></div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/team-1-390x390-0-0-0-0-1575775334.jpg\" style=\"width: 214px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Earl Marshall</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Accounting Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div></div></div></div></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/home/team.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{##} {# Section Counter Start #}
<section class=\"section counter\" style=\"padding: 30px;\">
\t<div class=\"container\">

\t\t<h2 class=\"mb-5\" style=\"text-align: left;\">Our Team</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/Team4-0-0-0-0-1575770537.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Robert Woods</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">CEO</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/team-1-390x390-0-0-0-0-1575775334.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Marcelia Prinston</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Partnership Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/Team4-0-0-0-0-1575770537.jpg\" style=\"width: 226px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Lionel Green</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Financial Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div></div></div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item d-flex justify-content-center mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"width-fit-content\"><img src=\"http://localhost/storage/app/media/cropped-images/team-1-390x390-0-0-0-0-1575775334.jpg\" style=\"width: 214px;\" class=\"fr-fic fr-dib fr-fil\">

\t\t\t\t\t\t<h3 class=\"mb-0\" style=\"text-align: left;\">Earl Marshall</h3>

\t\t\t\t\t\t<p class=\"text-color\" style=\"text-align: left;\">Accounting Director</p>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<p class=\"text-muted\" style=\"text-align: left; max-width: 226px;\">Ut enim ad minim veniam, quis nostrud exer tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t</div></div></div></div></div>
</section>

{# Section Counter End #}", "D:\\Upwork\\20191205Nikita_alex_laravel_october\\work\\aero/themes/mehedi-megakit/partials/home/team.htm", "");
    }
}
