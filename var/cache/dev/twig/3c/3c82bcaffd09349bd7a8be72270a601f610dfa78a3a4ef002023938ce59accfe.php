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

/* Site/Contact.html.twig */
class __TwigTemplate_1c6a7cf4366979a9b730045c8fd48ebf21cbe2bd2e894c8fee46137c579fbc65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Site/Contact.html.twig", 1);
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
        echo "
    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"south-load\"></div>
    </div>

    <!-- Top and NavBar -->
    <header class=\"header-area\">
        ";
        // line 11
        $this->loadTemplate("Site/include/headerTop.html.twig", "Site/Contact.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate("Site/include/headerNavBar.html.twig", "Site/Contact.html.twig", 12)->display($context);
        // line 13
        echo "    </header>


    <!-- slide-->
    <section class=\"breadcumb-area bg-img\" style=\"background-image: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/hero1.a92d7773.jpg"), "html", null, true);
        echo "\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"breadcumb-content\">
                        <h3 class=\"breadcumb-title\">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"south-contact-area section-padding-100\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12 col-lg-4\">
                    <div class=\"content-sidebar\">
                        <!-- Office Hours -->
                        <div class=\"weekly-office-hours\">
                            <ul>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Lundi - Vendredi</span> <span>09h00 - 12h30 / 14h00 - 19h00</span></li>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Samedi</span> <span>09h - 14h</span></li>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Dimanche</span> <span>Fermé</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class=\"address mt-30\">
                            <h6><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/phone-call.c70b72d0.png"), "html", null, true);
        echo "\" alt=\"\">05 56 00 00 00</h6>
                            <h6><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/envelope.2899d2b1.png"), "html", null, true);
        echo "\" alt=\"\">hello@agence.com</h6>
                            <h6><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/location.3758247b.png"), "html", null, true);
        echo "\" alt=\"\">Avenue de la libération 33000 Bordeaux</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class=\"col-12 col-lg-8\">
                    <div class=\"contact-form\">
                        <form action=\"#\" method=\"post\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"text\" id=\"contact-name\" placeholder=\"Votre Nom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"text\" id=\"contact-phone\" placeholder=\"Téléphone\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"contact-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" id=\"contact-message\" cols=\"30\" rows=\"10\" placeholder=\"Votre Message\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn south-btn\">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Editor Area  -->
    <section class=\"south-editor-area d-flex align-items-center\">
        <!-- Editor Content -->
        ";
        // line 79
        $this->loadTemplate("Site/include/edito.html.twig", "Site/Contact.html.twig", 79)->display($context);
        // line 80
        echo "    </section>

    <div class=\"d-flex justify-content-center btn-footer-hide\">
        <button type=\"button\" onclick=\"btnFooterHide();return false;\"><i class=\"btn-hide fa fa-plus\"></i></button>
    </div>

    <!-- Footer Area Start -->
    <footer class=\"footer-area section-padding-20 bg-img gradient-background-overlay\">

        <div class=\"js-footer-hide\">
            <!-- footer Text -->
            ";
        // line 91
        $this->loadTemplate("Site/include/footer/_footer_1.html.twig", "Site/Contact.html.twig", 91)->display($context);
        // line 92
        echo "        </div>

        <!-- Copywrite Text -->
        ";
        // line 95
        $this->loadTemplate("Site/include/_bottomCopyright.html.twig", "Site/Contact.html.twig", 95)->display($context);
        // line 96
        echo "    </footer>
    <!-- Footer Area End  -->

    ";
        // line 99
        $this->loadTemplate("Site/include/js-footer-hide.html.twig", "Site/Contact.html.twig", 99)->display($context);
        // line 100
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Site/Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 100,  192 => 99,  187 => 96,  185 => 95,  180 => 92,  178 => 91,  165 => 80,  163 => 79,  128 => 47,  124 => 46,  120 => 45,  89 => 17,  83 => 13,  80 => 12,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
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


    <!-- slide-->
    <section class=\"breadcumb-area bg-img\" style=\"background-image: url({{ asset('build/images/bg-img/hero1.a92d7773.jpg') }}\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"breadcumb-content\">
                        <h3 class=\"breadcumb-title\">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"south-contact-area section-padding-100\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-12 col-lg-4\">
                    <div class=\"content-sidebar\">
                        <!-- Office Hours -->
                        <div class=\"weekly-office-hours\">
                            <ul>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Lundi - Vendredi</span> <span>09h00 - 12h30 / 14h00 - 19h00</span></li>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Samedi</span> <span>09h - 14h</span></li>
                                <li class=\"d-flex align-items-center justify-content-between\"><span>Dimanche</span> <span>Fermé</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class=\"address mt-30\">
                            <h6><img src=\"{{ asset('build/images/icons/phone-call.c70b72d0.png') }}\" alt=\"\">05 56 00 00 00</h6>
                            <h6><img src=\"{{ asset('build/images/icons/envelope.2899d2b1.png') }}\" alt=\"\">hello@agence.com</h6>
                            <h6><img src=\"{{ asset('build/images/icons/location.3758247b.png') }}\" alt=\"\">Avenue de la libération 33000 Bordeaux</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class=\"col-12 col-lg-8\">
                    <div class=\"contact-form\">
                        <form action=\"#\" method=\"post\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"text\" id=\"contact-name\" placeholder=\"Votre Nom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"text\" id=\"contact-phone\" placeholder=\"Téléphone\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"contact-email\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" id=\"contact-message\" cols=\"30\" rows=\"10\" placeholder=\"Votre Message\"></textarea>
                            </div>
                            <button type=\"submit\" class=\"btn south-btn\">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Editor Area  -->
    <section class=\"south-editor-area d-flex align-items-center\">
        <!-- Editor Content -->
        {% include 'Site/include/edito.html.twig' %}
    </section>

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


{% endblock %}", "Site/Contact.html.twig", "/var/www/MonAgenceImmo/templates/Site/Contact.html.twig");
    }
}
