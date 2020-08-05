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

/* Site/include/_cardService.html.twig */
class __TwigTemplate_0f89b145c99b794f32aa3a0fe940d3f8d48030976c21e255df8bbfd4f9190be2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_cardService.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_cardService.html.twig"));

        // line 1
        echo "<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-folder\"></i></figure>
            <aside class=\"description\">
                <header><h3>Gestion de vos biens immobilier</h3></header>
                <p>Nous vous proposons, une gamme complète de services personnalisés, assortis d'engagements clairs</p>
            </aside>
            <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->


<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-users\"></i></figure>
            <aside class=\"description\">
                <header><h3>14 agents pour votre service</h3></header>
                <p>Les professionnels de notre réseau sont à votre disposition pour vous présenter l'ensemble de notre prestation. </p>
                <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
            </aside>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->

<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-home\"></i></figure>
            <aside class=\"description\">
                <header><h3>Confier nous votre projet</h3></header>
                <p>Et bénéficiez de l'expérience nos agences pour la gestion de votre projet </p>
                <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
            </aside>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/_cardService.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-folder\"></i></figure>
            <aside class=\"description\">
                <header><h3>Gestion de vos biens immobilier</h3></header>
                <p>Nous vous proposons, une gamme complète de services personnalisés, assortis d'engagements clairs</p>
            </aside>
            <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->


<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-users\"></i></figure>
            <aside class=\"description\">
                <header><h3>14 agents pour votre service</h3></header>
                <p>Les professionnels de notre réseau sont à votre disposition pour vous présenter l'ensemble de notre prestation. </p>
                <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
            </aside>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->

<div class=\"col-12 col-md-6 col-xl-4 card-service\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <div class=\"service_box\">
            <figure class=\"icon_box\"><i class=\"fa fa-home\"></i></figure>
            <aside class=\"description\">
                <header><h3>Confier nous votre projet</h3></header>
                <p>Et bénéficiez de l'expérience nos agences pour la gestion de votre projet </p>
                <a href=\"#\" class=\"link-arrow\">En savoir plus <i class=\"fa fa-arrow-circle-o-right\"></i></a>
            </aside>
        </div><!-- /.service_box -->
    </div>
</div><!-- /.col-md-4 -->
", "Site/include/_cardService.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/_cardService.html.twig");
    }
}
