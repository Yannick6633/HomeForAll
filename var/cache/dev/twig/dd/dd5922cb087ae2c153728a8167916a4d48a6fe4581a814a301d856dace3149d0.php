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

/* Site/include/footer/_footer_1.html.twig */
class __TwigTemplate_7094fdb766b5e0791850d5f1aa015bd3eaea2310dc58e4e2712ae84e5327441b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/footer/_footer_1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/footer/_footer_1.html.twig"));

        // line 1
        echo "<!-- Main Footer Area -->
<div class=\"main-footer-area\">
    <div class=\"container-fluid\" style=\"margin: 0px 60px 0px 60px\">
        <div class=\"d-flex justify-content-between\">

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>Qui sommes-nous</h6>
                    </div>
                    <div class=\"footer-logo my-4\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/core-img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <p>L’agence immobilière de tous vos projets !
                        Rendez-vous dans votre agence pour discuter et échanger sur votre projet.
                        Notre équipe d’experts se tient à votre disposition pour répondre à tous vos besoins immobiliers.
                        Que vous souhaitiez vendre, acheter, louer, investir ou faire gérer, nous sommes formés pour
                        vous accompagner. Retrouvez-nous en agence !</p>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>horaire d'ouverture</h6>
                    </div>
                    <!-- Office Hours -->
                    <div class=\"weekly-office-hours\">
                        <ul>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Lundi - Vendredi</span> <span>09h00 - 12h30 / 14h00 - 19h00</span></li>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Samedi</span> <span>09h - 14h</span></li>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Dimanche</span> <span>Fermé</span></li>
                        </ul>
                    </div>
                    <!-- Address -->
                    <div class=\"address\">
                        <h6><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/phone-call.c70b72d0.png"), "html", null, true);
        echo "\" alt=\"\"> 05 56 00 00 00</h6>
                        <h6><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/envelope.2899d2b1.png"), "html", null, true);
        echo "\" alt=\"\"> hello@agence.com</h6>
                        <h6><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/location.3758247b.png"), "html", null, true);
        echo "\" alt=\"\"> Avenue de la libération 33000 Bordeaux</h6>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>liens utiles</h6>
                    </div>
                    <!-- Nav -->
                    <ul class=\"useful-links-nav d-flex align-items-center\">
                        <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "\">Accueil</a></li>
                        <li><a href=\"#\">Services</a></li>
                        <li><a href=\"#\">Vente</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_properties_index");
        echo "\">Propriétés</a></li>
                        <li><a href=\"#\">Location</a></li>
                        <li><a href=\"#\">Programme neuf</a></li>
                        <li><a href=\"#\">Estimation</a></li>
                        <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_contact_index");
        echo "\">Contact</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">CGV</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/footer/_footer_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 64,  119 => 60,  113 => 57,  96 => 43,  92 => 42,  88 => 41,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main Footer Area -->
<div class=\"main-footer-area\">
    <div class=\"container-fluid\" style=\"margin: 0px 60px 0px 60px\">
        <div class=\"d-flex justify-content-between\">

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>Qui sommes-nous</h6>
                    </div>
                    <div class=\"footer-logo my-4\">
                        <img src=\"{{asset('build/images/core-img/logo.png')}}\" alt=\"\">
                    </div>
                    <p>L’agence immobilière de tous vos projets !
                        Rendez-vous dans votre agence pour discuter et échanger sur votre projet.
                        Notre équipe d’experts se tient à votre disposition pour répondre à tous vos besoins immobiliers.
                        Que vous souhaitiez vendre, acheter, louer, investir ou faire gérer, nous sommes formés pour
                        vous accompagner. Retrouvez-nous en agence !</p>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>horaire d'ouverture</h6>
                    </div>
                    <!-- Office Hours -->
                    <div class=\"weekly-office-hours\">
                        <ul>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Lundi - Vendredi</span> <span>09h00 - 12h30 / 14h00 - 19h00</span></li>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Samedi</span> <span>09h - 14h</span></li>
                            <li class=\"d-flex align-items-center justify-content-between\"><span>Dimanche</span> <span>Fermé</span></li>
                        </ul>
                    </div>
                    <!-- Address -->
                    <div class=\"address\">
                        <h6><img src=\"{{asset('build/images/icons/phone-call.c70b72d0.png')}}\" alt=\"\"> 05 56 00 00 00</h6>
                        <h6><img src=\"{{asset('build/images/icons/envelope.2899d2b1.png')}}\" alt=\"\"> hello@agence.com</h6>
                        <h6><img src=\"{{asset('build/images/icons/location.3758247b.png')}}\" alt=\"\"> Avenue de la libération 33000 Bordeaux</h6>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget-area \">
                    <!-- Widget Title -->
                    <div class=\"widget-title\">
                        <h6>liens utiles</h6>
                    </div>
                    <!-- Nav -->
                    <ul class=\"useful-links-nav d-flex align-items-center\">
                        <li><a href=\"{{ path('site_index') }}\">Accueil</a></li>
                        <li><a href=\"#\">Services</a></li>
                        <li><a href=\"#\">Vente</a></li>
                        <li><a href=\"{{ path('site_properties_index') }}\">Propriétés</a></li>
                        <li><a href=\"#\">Location</a></li>
                        <li><a href=\"#\">Programme neuf</a></li>
                        <li><a href=\"#\">Estimation</a></li>
                        <li><a href=\"{{ path('site_contact_index') }}\">Contact</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">CGV</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
", "Site/include/footer/_footer_1.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/footer/_footer_1.html.twig");
    }
}
