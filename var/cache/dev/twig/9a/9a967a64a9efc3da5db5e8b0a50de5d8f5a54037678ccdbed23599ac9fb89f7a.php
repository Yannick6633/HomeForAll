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

/* Site/include/headerTop.html.twig */
class __TwigTemplate_e1ac4c8e1f1d012051a43a25e54f70b34dec64824d0fa49df35ecf16a67a2482 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/headerTop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/headerTop.html.twig"));

        // line 1
        echo "<div class=\"top-header-area\">
    <div class=\"h-100 d-md-flex justify-content-between align-items-center\">
        <div class=\"d-flex justify-content-center icon-social \">
            <a class=\"fa fa-facebook-f\" href=\"\"></a>
            <a class=\"fa fa-twitter\" href=\"\"></a>
            <a class=\"fa fa-linkedin\" href=\"\"></a>
        </div>
        <div class=\"phone-number d-flex\">
            <div class=\"icon\">
                <i class=\"fa fa-phone\"></i>
            </div>
            <div class=\"number\">
                <a href=\"tel:+45 677 8993000 223\">05 56 00 00 00</a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/headerTop.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-header-area\">
    <div class=\"h-100 d-md-flex justify-content-between align-items-center\">
        <div class=\"d-flex justify-content-center icon-social \">
            <a class=\"fa fa-facebook-f\" href=\"\"></a>
            <a class=\"fa fa-twitter\" href=\"\"></a>
            <a class=\"fa fa-linkedin\" href=\"\"></a>
        </div>
        <div class=\"phone-number d-flex\">
            <div class=\"icon\">
                <i class=\"fa fa-phone\"></i>
            </div>
            <div class=\"number\">
                <a href=\"tel:+45 677 8993000 223\">05 56 00 00 00</a>
            </div>
        </div>
    </div>
</div>", "Site/include/headerTop.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/headerTop.html.twig");
    }
}
