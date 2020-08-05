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

/* Header/include/_navbar.twig */
class __TwigTemplate_1365f5da5e8104fb6857e356d0ee5b54ca2f9057cbba934f15c1b025b9d45f7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Header/include/_navbar.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Header/include/_navbar.twig"));

        // line 1
        echo "<div class=\"nav_bar\">

    <div class=\"container d-flex align-items-center justify-content-between\">

        <!-- Icon Menu Burger -->
        <nav class=\"d-lg-none\">
            <span class=\"icon-enlarge block_btn\"></span>
        </nav>

        <!-- Logo-->
        <a class=\"navbar-brand\" href=\"#\">Mon Agence</a>
";
        // line 17
        echo "
        <!-- Text link-->
        <nav class=\"second-menu-bloc d-none d-lg-flex\">
            <a href=\"#\" aria-label=\"accueil\" class=\"text_link_menu text-uppercase\">Accueil</a>
            <a href=\"#\" aria-label=\"nos services\" class=\"text_link_menu text-uppercase\">Nos Services</a>
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propriete");
        echo "\" aria-label=\"nos biens\" class=\"text_link_menu text-uppercase\">Nos biens</a>
            <a href=\"#\" aria-label=\"contact\" class=\"text_link_menu text-uppercase\">Contact</a>
            ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
            echo "\" aria-label=\"administration\" class=\"text_link_menu text-uppercase\">Administration</a>
            ";
        }
        // line 27
        echo "        </nav>

        <!-- icon link-->
        <nav>
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" title=\"Connectez-vous\"  class=\" d-none d-flex align-items-center justify-content-center\" data-tooltip=\"tooltip\" data-placement=\"top\">
                <span class=\"icon-menu-size icon-user base_color_1 \"></span>
            </a>




        </nav>

    </div>
</div>

<!-- Text link Menu Burger-->
<div class=\"menu_burger block_hidden\">
    <a href=\"#\" class=\"text-uppercase\">Accueil</a>
    <a href=\"#\" class=\"text-uppercase\">Nos Services</a>
    <a href=\"#\" class=\"text-uppercase\">Nos biens</a>
    <a href=\"#\" class=\"text-uppercase\">Contact</a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Header/include/_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  76 => 27,  70 => 25,  68 => 24,  63 => 22,  56 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav_bar\">

    <div class=\"container d-flex align-items-center justify-content-between\">

        <!-- Icon Menu Burger -->
        <nav class=\"d-lg-none\">
            <span class=\"icon-enlarge block_btn\"></span>
        </nav>

        <!-- Logo-->
        <a class=\"navbar-brand\" href=\"#\">Mon Agence</a>
{#        <nav class=\"d-none d-lg-flex\">#}
{#            <a title=\"\" href=\"#\" aria-label=\"cocuou\">#}
{#                    <span class=\"base_color_1\"><img src=\"{{ asset('build/images/houseLogo.3c82a393.png') }}\" height=\"45px\" width=\"45px\" alt=\"\"></span>#}
{#            </a>#}
{#        </nav>#}

        <!-- Text link-->
        <nav class=\"second-menu-bloc d-none d-lg-flex\">
            <a href=\"#\" aria-label=\"accueil\" class=\"text_link_menu text-uppercase\">Accueil</a>
            <a href=\"#\" aria-label=\"nos services\" class=\"text_link_menu text-uppercase\">Nos Services</a>
            <a href=\"{{ path('propriete') }}\" aria-label=\"nos biens\" class=\"text_link_menu text-uppercase\">Nos biens</a>
            <a href=\"#\" aria-label=\"contact\" class=\"text_link_menu text-uppercase\">Contact</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('easyadmin') }}\" aria-label=\"administration\" class=\"text_link_menu text-uppercase\">Administration</a>
            {% endif %}
        </nav>

        <!-- icon link-->
        <nav>
            <a href=\"{{ path('login') }}\" title=\"Connectez-vous\"  class=\" d-none d-flex align-items-center justify-content-center\" data-tooltip=\"tooltip\" data-placement=\"top\">
                <span class=\"icon-menu-size icon-user base_color_1 \"></span>
            </a>




        </nav>

    </div>
</div>

<!-- Text link Menu Burger-->
<div class=\"menu_burger block_hidden\">
    <a href=\"#\" class=\"text-uppercase\">Accueil</a>
    <a href=\"#\" class=\"text-uppercase\">Nos Services</a>
    <a href=\"#\" class=\"text-uppercase\">Nos biens</a>
    <a href=\"#\" class=\"text-uppercase\">Contact</a>
</div>", "Header/include/_navbar.twig", "/var/www/MonAgenceImmo/templates/Header/include/_navbar.twig");
    }
}
