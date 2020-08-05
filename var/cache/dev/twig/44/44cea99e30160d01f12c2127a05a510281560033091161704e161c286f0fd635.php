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

/* Site/include/edito.html.twig */
class __TwigTemplate_83e0657d7c3c091a3ff9a19fbb7d6780895d8fc8652e839c7a32b3ce7d924ba6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/edito.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/edito.html.twig"));

        // line 1
        echo "<div class=\"editor-content-area\">
    <!-- Section Heading -->
    <div class=\"section-heading wow fadeInUp\" data-wow-delay=\"250ms\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/prize.d9e47432.png"), "html", null, true);
        echo "\" alt=\"\">
        <h2>jeremy Scott</h2>
        <p>Directeur</p>
    </div>
    <p class=\"wow fadeInUp\" data-wow-delay=\"500ms\">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
    <div class=\"address wow fadeInUp\" data-wow-delay=\"750ms\">
        <h6><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/phone-call.c70b72d0.png"), "html", null, true);
        echo "\" alt=\"\"> 06 82 00 00 00</h6>
        <h6><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/envelope.2899d2b1.png"), "html", null, true);
        echo "\" alt=\"\">jeremy.scott@agence.com</h6>
    </div>
    <div class=\"signature mt-50 wow fadeInUp\" data-wow-delay=\"1000ms\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/core-img/signature.b9b958b9.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
</div>

<!-- Editor Thumbnail -->
<div class=\"editor-thumbnail\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/editor.c9cc8dd8.jpg"), "html", null, true);
        echo "\" alt=\"\">
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/edito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  67 => 14,  61 => 11,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"editor-content-area\">
    <!-- Section Heading -->
    <div class=\"section-heading wow fadeInUp\" data-wow-delay=\"250ms\">
        <img src=\"{{asset('build/images/icons/prize.d9e47432.png')}}\" alt=\"\">
        <h2>jeremy Scott</h2>
        <p>Directeur</p>
    </div>
    <p class=\"wow fadeInUp\" data-wow-delay=\"500ms\">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
    <div class=\"address wow fadeInUp\" data-wow-delay=\"750ms\">
        <h6><img src=\"{{asset('build/images/icons/phone-call.c70b72d0.png')}}\" alt=\"\"> 06 82 00 00 00</h6>
        <h6><img src=\"{{asset('build/images/icons/envelope.2899d2b1.png')}}\" alt=\"\">jeremy.scott@agence.com</h6>
    </div>
    <div class=\"signature mt-50 wow fadeInUp\" data-wow-delay=\"1000ms\">
        <img src=\"{{asset('build/images/core-img/signature.b9b958b9.png')}}\" alt=\"\">
    </div>
</div>

<!-- Editor Thumbnail -->
<div class=\"editor-thumbnail\">
    <img src=\"{{asset('build/images/bg-img/editor.c9cc8dd8.jpg')}}\" alt=\"\">
</div>

", "Site/include/edito.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/edito.html.twig");
    }
}
