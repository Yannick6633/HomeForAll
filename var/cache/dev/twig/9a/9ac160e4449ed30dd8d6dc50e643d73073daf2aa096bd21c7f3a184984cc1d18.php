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

/* Site/include/_slide.html.twig */
class __TwigTemplate_d8ea95cc19c6a6f60250fcc23dda4b3e8e6910467e321f805d971e5c7d0fa884 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_slide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_slide.html.twig"));

        // line 1
        echo "<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/hero1.jpg"), "html", null, true);
        echo "\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your home</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/hero2.jpg"), "html", null, true);
        echo "\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your dream house</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url(";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/hero3.jpg"), "html", null, true);
        echo "\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your perfect house</h2>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/_slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  61 => 14,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url({{asset('build/images/bg-img/hero1.jpg')}}\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your home</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url({{asset('build/images/bg-img/hero2.jpg')}}\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your dream house</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Hero Slide -->
<div class=\"single-hero-slide bg-img\" style=\"background-image: url({{asset('build/images/bg-img/hero3.jpg')}}\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"hero-slides-content\">
                    <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Find your perfect house</h2>
                </div>
            </div>
        </div>
    </div>
</div>", "Site/include/_slide.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/_slide.html.twig");
    }
}
