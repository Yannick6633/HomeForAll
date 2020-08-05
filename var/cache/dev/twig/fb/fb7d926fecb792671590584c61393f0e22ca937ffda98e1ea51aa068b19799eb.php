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

/* Header/include/_header_top.html.twig */
class __TwigTemplate_17bf8eba391e10146fa08bb9c272af47605c00eeb0c240c1667dabc646a71703 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Header/include/_header_top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Header/include/_header_top.html.twig"));

        // line 1
        echo "<div class=\"header_top d-none d-md-flex\">
    <div class=\"container d-flex align-items-center justify-content-between justify-content-xxl-start\">
        <div class=\"first_bloc d-flex align-items-center\">
            <span class=\"base_color_2 font-weight-bold margin-texte first\">Mon Agence Immobiliere </span>
            <span class=\"color_white font-weight-bold texte\"> l'expérience e-commerce</span>
        </div>
        <div class=\"second_bloc d-none d-lg-flex align-items-center\">
            <span class=\"d-none d-xl-flex icon-users base_color_2\"></span>
            <span class=\"base_color_2 font-weight-bold  margin-texte\">Un réseau</span>
            <span class=\"color_white font-weight-bold margin-texte \">national</span>
        </div>
        <div class=\"third_bloc d-flex align-items-center\">
            <span class=\"d-none d-xl-flex icon-phone base_color_2 mr-2\"></span>
            <span class=\"color_white font-weight-bold text-uppercase margin-texte\">Besoin d'un conseil ?</span>
            <span class=\"mr-2\">  </span>
            <span class=\"d-none d-xl-flex base_color_2 font-weight-bold mr-5\"> 05 00 00 00 00</span>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Header/include/_header_top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header_top d-none d-md-flex\">
    <div class=\"container d-flex align-items-center justify-content-between justify-content-xxl-start\">
        <div class=\"first_bloc d-flex align-items-center\">
            <span class=\"base_color_2 font-weight-bold margin-texte first\">Mon Agence Immobiliere </span>
            <span class=\"color_white font-weight-bold texte\"> l'expérience e-commerce</span>
        </div>
        <div class=\"second_bloc d-none d-lg-flex align-items-center\">
            <span class=\"d-none d-xl-flex icon-users base_color_2\"></span>
            <span class=\"base_color_2 font-weight-bold  margin-texte\">Un réseau</span>
            <span class=\"color_white font-weight-bold margin-texte \">national</span>
        </div>
        <div class=\"third_bloc d-flex align-items-center\">
            <span class=\"d-none d-xl-flex icon-phone base_color_2 mr-2\"></span>
            <span class=\"color_white font-weight-bold text-uppercase margin-texte\">Besoin d'un conseil ?</span>
            <span class=\"mr-2\">  </span>
            <span class=\"d-none d-xl-flex base_color_2 font-weight-bold mr-5\"> 05 00 00 00 00</span>
        </div>
    </div>
</div>", "Header/include/_header_top.html.twig", "/var/www/MonAgenceImmo/templates/Header/include/_header_top.html.twig");
    }
}
