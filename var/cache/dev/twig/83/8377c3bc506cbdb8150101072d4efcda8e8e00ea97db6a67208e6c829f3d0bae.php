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

/* Site/include/headerNavBar.html.twig */
class __TwigTemplate_0459e53ffa395890e547f106267dbbd9b9b2daeb2d416af5e54658d1012cd51d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/headerNavBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/headerNavBar.html.twig"));

        // line 1
        echo "<div class=\"main-header-area\" id=\"stickyHeader\">
    <div class=\"classy-nav-container breakpoint-off\">
        <!-- Classy Menu -->
        <nav class=\"classy-navbar justify-content-between\" id=\"southNav\">

            <!-- Logo -->
            <a class=\"nav-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/core-img/logo.42c18874.png"), "html", null, true);
        echo "\" alt=\"\"></a>

            <!-- Navbar Toggler -->
            <div class=\"classy-navbar-toggler\">
                <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class=\"classy-menu\">

                <!-- close btn -->
                <div class=\"classycloseIcon\">
                    <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                </div>

                <!-- Nav Start -->
                <div class=\"classynav\">
                    <ul>
                        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "\">accueil</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_properties_index");
        echo "\">Propriétés</a></li>
";
        // line 34
        echo "                        <li><a href=\"#\">Gestion locative</a></li>
                        <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_contact_index");
        echo "\">Contact</a></li>
                    </ul>

";
        // line 45
        echo "
                    <!-- Connexion Button -->
                    <a href=\"#\" ><i class=\"fa fa-user connexionBtn\"></i></a>
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/headerNavBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  85 => 35,  82 => 34,  78 => 26,  74 => 25,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-header-area\" id=\"stickyHeader\">
    <div class=\"classy-nav-container breakpoint-off\">
        <!-- Classy Menu -->
        <nav class=\"classy-navbar justify-content-between\" id=\"southNav\">

            <!-- Logo -->
            <a class=\"nav-brand\" href=\"{{ path('site_index') }}\"><img src=\"{{asset('build/images/core-img/logo.42c18874.png')}}\" alt=\"\"></a>

            <!-- Navbar Toggler -->
            <div class=\"classy-navbar-toggler\">
                <span class=\"navbarToggler\"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class=\"classy-menu\">

                <!-- close btn -->
                <div class=\"classycloseIcon\">
                    <div class=\"cross-wrap\"><span class=\"top\"></span><span class=\"bottom\"></span></div>
                </div>

                <!-- Nav Start -->
                <div class=\"classynav\">
                    <ul>
                        <li><a href=\"{{ path('site_index') }}\">accueil</a></li>
                        <li><a href=\"{{ path('site_properties_index') }}\">Propriétés</a></li>
{#                        <li><a href=\"#\">Propriétés</a>#}
{#                            <ul class=\"dropdown\">#}
{#                                <li><a href=\"#\">Achat</a></li>#}
{#                                <li><a href=\"#\">Location</a></li>#}
{#                                <li><a href=\"#\">Programme neuf</a></li>#}
{#                            </ul>#}
{#                        </li>#}
                        <li><a href=\"#\">Gestion locative</a></li>
                        <li><a href=\"{{ path('site_contact_index') }}\">Contact</a></li>
                    </ul>

{#                    <!-- Search Form -->#}
{#                    <div class=\"south-search-form\">#}
{#                        <form action=\"#\" method=\"post\">#}
{#                            <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Search Anything ...\">#}
{#                            <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>#}
{#                        </form>#}
{#                    </div>#}

                    <!-- Connexion Button -->
                    <a href=\"#\" ><i class=\"fa fa-user connexionBtn\"></i></a>
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
", "Site/include/headerNavBar.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/headerNavBar.html.twig");
    }
}
