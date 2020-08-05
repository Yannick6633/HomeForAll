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

/* Site/HomePage.html.twig */
class __TwigTemplate_da17d3023d30614da2cc04da0d7b98bb57a8aae709ef1316c254c06f1a58b9e1 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/HomePage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/HomePage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Site/HomePage.html.twig", 1);
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
        $this->loadTemplate("Site/include/headerTop.html.twig", "Site/HomePage.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->loadTemplate("Site/include/headerNavBar.html.twig", "Site/HomePage.html.twig", 11)->display($context);
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
        $this->loadTemplate("Site/include/searchForm.html.twig", "Site/HomePage.html.twig", 32)->display($context);
        // line 33
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area End -->

    <!-- Services Area Start -->
    <section>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\">
                        <h2>Profitez de notre savoir-faire</h2>
                        <p>Que votre projet immobilier porte sur une transaction, une location, ou une délégation de gestion locative,
                            <br>notre agence Immobilière est a votre écoute.</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                ";
        // line 53
        $this->loadTemplate("Site/include/_cardService.html.twig", "Site/HomePage.html.twig", 53)->display($context);
        // line 54
        echo "            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- Card Properties Area Start -->
    <section class=\" section-padding-50-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\">
                        <h2>Des nouveaux biens pour vous</h2>
                        <p>Vous souhaitez louer ou acheter une maison, une appartement, un commerce ? Parcourez nos annonces. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Card Properties -->
                ";
        // line 72
        $this->loadTemplate("Site/include/_CardProperty.html.twig", "Site/HomePage.html.twig", 72)->display($context);
        // line 73
        echo "            </div>
        </div>
    </section>
    <!-- Card Properties Area End  -->

    <!-- Section éstimation -->
    <section class=\"call-to-action-area bg-fixed bg-overlay-black\" style=\"background-image: url(";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/cta.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container h-100\">
            <div class=\"row align-items-center h-100\">
                <div class=\"col-12\">
                    <div class=\"cta-content text-center\">
                        <h1 style=\"color:white\" class=\"wow fadeInUp\" data-wow-delay=\"300ms\">Vous désirez une éstimation de votre bien immobilier.</h1>
                        <a href=\"#\" class=\"btn south-btn mt-50 wow fadeInUp\" data-wow-delay=\"500ms\">estimer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section éstimation End -->

    <!-- Testimonials Area Start -->
    <section class=\"south-testimonials-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\" data-wow-delay=\"250ms\">
                        <h2>Témoignages</h2>
                        <p>Nos clients nous font confiance et ils nous l'écrivent</p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"testimonials-slides-one owl-carousel wow fadeInUp\" data-wow-delay=\"500ms\">
                        <!-- Card Testimonial Slide -->
                        ";
        // line 109
        $this->loadTemplate("Site/include/_CardTestimonial-one.html.twig", "Site/HomePage.html.twig", 109)->display($context);
        // line 110
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->


    <!-- bouton plus Footer Area Start -->
    <div class=\"d-flex justify-content-center btn-footer-hide\">
        <button type=\"button\" onclick=\"btnFooterHide();return false;\"><i class=\"btn-hide fa fa-plus\"></i></button>
    </div>

    <!-- Footer Area Start -->
    <footer class=\"footer-area section-padding-20 bg-img gradient-background-overlay\">

        <div class=\"js-footer-hide\">
            <!-- footer Text -->
            ";
        // line 128
        $this->loadTemplate("Site/include/footer/_footer_1.html.twig", "Site/HomePage.html.twig", 128)->display($context);
        // line 129
        echo "        </div>

        <!-- Copywrite Text -->
        ";
        // line 132
        $this->loadTemplate("Site/include/_bottomCopyright.html.twig", "Site/HomePage.html.twig", 132)->display($context);
        // line 133
        echo "    </footer>
    <!-- Footer Area End  -->

    ";
        // line 136
        $this->loadTemplate("Site/include/js-footer-hide.html.twig", "Site/HomePage.html.twig", 136)->display($context);
        // line 137
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Site/HomePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 137,  229 => 136,  224 => 133,  222 => 132,  217 => 129,  215 => 128,  195 => 110,  193 => 109,  160 => 79,  152 => 73,  150 => 72,  130 => 54,  128 => 53,  106 => 33,  104 => 32,  82 => 12,  79 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
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

    <!-- Services Area Start -->
    <section>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\">
                        <h2>Profitez de notre savoir-faire</h2>
                        <p>Que votre projet immobilier porte sur une transaction, une location, ou une délégation de gestion locative,
                            <br>notre agence Immobilière est a votre écoute.</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                {% include 'Site/include/_cardService.html.twig' %}
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- Card Properties Area Start -->
    <section class=\" section-padding-50-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\">
                        <h2>Des nouveaux biens pour vous</h2>
                        <p>Vous souhaitez louer ou acheter une maison, une appartement, un commerce ? Parcourez nos annonces. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Card Properties -->
                {% include 'Site/include/_CardProperty.html.twig' %}
            </div>
        </div>
    </section>
    <!-- Card Properties Area End  -->

    <!-- Section éstimation -->
    <section class=\"call-to-action-area bg-fixed bg-overlay-black\" style=\"background-image: url({{asset('build/images/bg-img/cta.jpg')}})\">
        <div class=\"container h-100\">
            <div class=\"row align-items-center h-100\">
                <div class=\"col-12\">
                    <div class=\"cta-content text-center\">
                        <h1 style=\"color:white\" class=\"wow fadeInUp\" data-wow-delay=\"300ms\">Vous désirez une éstimation de votre bien immobilier.</h1>
                        <a href=\"#\" class=\"btn south-btn mt-50 wow fadeInUp\" data-wow-delay=\"500ms\">estimer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section éstimation End -->

    <!-- Testimonials Area Start -->
    <section class=\"south-testimonials-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section-heading wow fadeInUp\" data-wow-delay=\"250ms\">
                        <h2>Témoignages</h2>
                        <p>Nos clients nous font confiance et ils nous l'écrivent</p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"testimonials-slides-one owl-carousel wow fadeInUp\" data-wow-delay=\"500ms\">
                        <!-- Card Testimonial Slide -->
                        {% include 'Site/include/_CardTestimonial-one.html.twig' %}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->


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

{% endblock %}", "Site/HomePage.html.twig", "/var/www/MonAgenceImmo/templates/Site/HomePage.html.twig");
    }
}
