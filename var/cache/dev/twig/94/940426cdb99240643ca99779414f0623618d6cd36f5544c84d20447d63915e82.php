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

/* Site/include/_CardTestimonial-one.html.twig */
class __TwigTemplate_b6a1fcd69a40b2fbfa90d0bafe399ca842d8c14abc0cba3f096c41d99f76cebd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardTestimonial-one.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardTestimonial-one.html.twig"));

        // line 1
        echo "<div class=\"single-testimonial-slide\">
    <div class=\"col-2 testimonial-avatar\">
        <img alt=\"\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar/AvatarBoy.png"), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-8 testimonial-post\">
        <p class=\"testimonial-author-post\">
            La qualité de service était exceptionnelle. Mon conseiller était là pour me guider.
            J’avais besoin d’une vente très rapide pour acheter une maison en Angleterre.
            Il a trouvé un très bon acheteur en une semaine au prix souhaité.
        </p>
        <p class=\"testimonial-author-info\">_CROCHET Xavier</p>
    </div>
</div>

<div class=\"single-testimonial-slide\">
    <div class=\"col-2 testimonial-avatar\">
        <img alt=\"\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar/AvatarGirl.png"), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-8 testimonial-post\">
        <p class=\"testimonial-author-post\">
            Une agence très professionnelle avec une réelle motivation dans la gestion de mon projet immobilier.
            Je la recommande.
        </p>
        <p class=\"testimonial-author-info\">_ARNAUD Frédérique</p>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/_CardTestimonial-one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"single-testimonial-slide\">
    <div class=\"col-2 testimonial-avatar\">
        <img alt=\"\" src=\"{{ asset('images/avatar/AvatarBoy.png') }}\">
    </div>
    <div class=\"col-8 testimonial-post\">
        <p class=\"testimonial-author-post\">
            La qualité de service était exceptionnelle. Mon conseiller était là pour me guider.
            J’avais besoin d’une vente très rapide pour acheter une maison en Angleterre.
            Il a trouvé un très bon acheteur en une semaine au prix souhaité.
        </p>
        <p class=\"testimonial-author-info\">_CROCHET Xavier</p>
    </div>
</div>

<div class=\"single-testimonial-slide\">
    <div class=\"col-2 testimonial-avatar\">
        <img alt=\"\" src=\"{{ asset('images/avatar/AvatarGirl.png') }}\">
    </div>
    <div class=\"col-8 testimonial-post\">
        <p class=\"testimonial-author-post\">
            Une agence très professionnelle avec une réelle motivation dans la gestion de mon projet immobilier.
            Je la recommande.
        </p>
        <p class=\"testimonial-author-info\">_ARNAUD Frédérique</p>
    </div>
</div>
", "Site/include/_CardTestimonial-one.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/_CardTestimonial-one.html.twig");
    }
}
