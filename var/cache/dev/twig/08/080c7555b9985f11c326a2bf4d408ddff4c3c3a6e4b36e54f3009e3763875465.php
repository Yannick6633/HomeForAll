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

/* Site/Properties.html.twig */
class __TwigTemplate_bc678e0ff64498b46f597a1ac01fb2eb1503a57ae20d5a7e41c127985dc67c9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_site.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Properties.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Properties.html.twig"));

        $this->parent = $this->loadTemplate("base_site.html.twig", "Site/Properties.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"south-load\"></div>
    </div>

    <!-- Top and NavBar -->
    <header class=\"header-area\">
        ";
        // line 10
        $this->loadTemplate("Site/include/headerTop.html.twig", "Site/Properties.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate("Site/include/headerNavBar.html.twig", "Site/Properties.html.twig", 11)->display($context);
        // line 12
        echo "    </header>


    <!-- Carousel -->
    <section class=\"hero-area\">
        <div class=\"header-slide-parallax\" ></div>
    </section>


    <!-- Search Area -->
    <section class=\"south-search-area\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"advanced-search-form\" style=\"\">
                        <!-- Search Title -->
                        <div class=\"search-title\">
                            <p>Trouver la maison de vos rêves</p>
                        </div>
                        <!-- Search Form -->
                        ";
        // line 32
        $this->loadTemplate("Site/include/searchForm.html.twig", "Site/Properties.html.twig", 32)->display($context);
        // line 33
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area End -->

    <!-- Card Properties Area Start -->
    <section class=\" section-padding-50-50\">
        <div class=\"container\">
";
        // line 51
        echo "            <div class=\"row\">
                <!-- Card Properties -->
                ";
        // line 53
        $this->loadTemplate("Site/include/_CardProperty.html.twig", "Site/Properties.html.twig", 53)->display($context);
        // line 54
        echo "            </div>
        </div>
    </section>
    <!-- Card Properties Area End  -->

    <!-- bouton plus Footer Area Start -->
    <div class=\"d-flex justify-content-center btn-footer-hide\">
        <button type=\"button\" onclick=\"btnFooterHide();return false;\"><i class=\"btn-hide fa fa-plus\"></i></button>
    </div>

    <!-- Footer Area Start -->
    <footer class=\"footer-area section-padding-20 bg-img gradient-background-overlay\">

        <div class=\"js-footer-hide\">
            <!-- footer Text -->
            ";
        // line 69
        $this->loadTemplate("Site/include/footer/_footer_1.html.twig", "Site/Properties.html.twig", 69)->display($context);
        // line 70
        echo "        </div>

        <!-- Copywrite Text -->
        ";
        // line 73
        $this->loadTemplate("Site/include/_bottomCopyright.html.twig", "Site/Properties.html.twig", 73)->display($context);
        // line 74
        echo "    </footer>
    <!-- Footer Area End  -->

    ";
        // line 77
        $this->loadTemplate("Site/include/js-footer-hide.html.twig", "Site/Properties.html.twig", 77)->display($context);
        // line 78
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Site/Properties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 78,  155 => 77,  150 => 74,  148 => 73,  143 => 70,  141 => 69,  124 => 54,  122 => 53,  118 => 51,  106 => 33,  104 => 32,  82 => 12,  79 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_site.html.twig' %}
{% block body %}
    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"south-load\"></div>
    </div>

    <!-- Top and NavBar -->
    <header class=\"header-area\">
        {% include 'Site/include/headerTop.html.twig' %}
        {% include 'Site/include/headerNavBar.html.twig' %}
    </header>


    <!-- Carousel -->
    <section class=\"hero-area\">
        <div class=\"header-slide-parallax\" ></div>
    </section>


    <!-- Search Area -->
    <section class=\"south-search-area\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"advanced-search-form\" style=\"\">
                        <!-- Search Title -->
                        <div class=\"search-title\">
                            <p>Trouver la maison de vos rêves</p>
                        </div>
                        <!-- Search Form -->
                        {% include 'Site/include/searchForm.html.twig' %}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area End -->

    <!-- Card Properties Area Start -->
    <section class=\" section-padding-50-50\">
        <div class=\"container\">
{#            <div class=\"row\">#}
{#                <div class=\"col-12\">#}
{#                    <div class=\"section-heading wow fadeInUp\">#}
{#                        <h2>Des nouveaux biens pour vous</h2>#}
{#                        <p>Vous souhaitez louer ou acheter une maison, une appartement, un commerce ? Parcourez nos annonces. </p>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
            <div class=\"row\">
                <!-- Card Properties -->
                {% include 'Site/include/_CardProperty.html.twig' %}
            </div>
        </div>
    </section>
    <!-- Card Properties Area End  -->

    <!-- bouton plus Footer Area Start -->
    <div class=\"d-flex justify-content-center btn-footer-hide\">
        <button type=\"button\" onclick=\"btnFooterHide();return false;\"><i class=\"btn-hide fa fa-plus\"></i></button>
    </div>

    <!-- Footer Area Start -->
    <footer class=\"footer-area section-padding-20 bg-img gradient-background-overlay\">

        <div class=\"js-footer-hide\">
            <!-- footer Text -->
            {% include 'Site/include/footer/_footer_1.html.twig' %}
        </div>

        <!-- Copywrite Text -->
        {% include 'Site/include/_bottomCopyright.html.twig' %}
    </footer>
    <!-- Footer Area End  -->

    {% include 'Site/include/js-footer-hide.html.twig' %}

{% endblock %}", "Site/Properties.html.twig", "/var/www/MonAgenceImmo/templates/Site/Properties.html.twig");
    }
}
