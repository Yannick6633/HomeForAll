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

/* Site/include/_CardProperty.html.twig */
class __TwigTemplate_ccfd9a7a20d2a1a9b868326c8ad15f6661366139d983c8748460e147d6f91bfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardProperty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardProperty.html.twig"));

        // line 1
        echo "<!-- Single Featured Property -->
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proprietes"]) || array_key_exists("proprietes", $context) ? $context["proprietes"] : (function () { throw new RuntimeError('Variable "proprietes" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
            // line 4
            echo "        <div class=\"col-12 col-md-6 col-xl-4\">
            <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
                <!-- Property Thumbnail -->
                <div class=\"property-thumb\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["propriete"], "imageFile"), "thumb"), "html", null, true);
            echo "\"
                         alt=\"card-img-top\" style=\"width: 100%; height: auto\">

                    <div class=\"tag\">
                        <span>A VENDRE</span>
                    </div>
                    <div class=\"list-price\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propriete.show2", ["id" => twig_get_attribute($this->env, $this->source, $context["propriete"], "id", [], "any", false, false, false, 15), "slug" => twig_get_attribute($this->env, $this->source, $context["propriete"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "formattedPrix", [], "any", false, false, false, 15), "html", null, true);
            echo " €</p></a>
                    </div>
                </div>

                <!-- Property Content -->
                <div class=\"property-content\">
                    <h4>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "titre", [], "any", false, false, false, 21), "html", null, true);
            echo "</h4>
                    <h5>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "ville", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
                    <p class=\"location\"><i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i>
                        &nbsp périphérique</p>
                    ";
            // line 26
            echo "                    <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                        <div class=\"space\">
                            <i class=\"fa fa-object-group\"></i>
                            <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "surface", [], "any", false, false, false, 29), "html", null, true);
            echo " m2 </span>
                        </div>
                        <div class=\"bathroom\">
                            <i class=\"fa fa-bed\"></i>
                            <span>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "chambres", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"bathroom\">
                            <i class=\"fa fa-bathtub\"></i>
                            <span>2</span>
                        </div>
                        <div class=\"garage\">
                            <i class=\"fa fa-automobile\"></i>
                            <span>2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    <div class=\"pagination\">
        ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["proprietes"]) || array_key_exists("proprietes", $context) ? $context["proprietes"] : (function () { throw new RuntimeError('Variable "proprietes" does not exist.', 50, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/_CardProperty.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  141 => 48,  120 => 33,  113 => 29,  108 => 26,  102 => 22,  98 => 21,  87 => 15,  77 => 8,  71 => 4,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Single Featured Property -->
{% block body %}
    {% for propriete in proprietes %}
        <div class=\"col-12 col-md-6 col-xl-4\">
            <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
                <!-- Property Thumbnail -->
                <div class=\"property-thumb\">
                    <img src=\"{{ vich_uploader_asset(propriete, 'imageFile') | imagine_filter('thumb') }}\"
                         alt=\"card-img-top\" style=\"width: 100%; height: auto\">

                    <div class=\"tag\">
                        <span>A VENDRE</span>
                    </div>
                    <div class=\"list-price\">
                        <a href=\"{{ path('propriete.show2', {id: propriete.id, slug: propriete.slug}) }}\"><p>{{ propriete.formattedPrix }} €</p></a>
                    </div>
                </div>

                <!-- Property Content -->
                <div class=\"property-content\">
                    <h4>{{ propriete.titre }}</h4>
                    <h5>{{ propriete.ville }}</h5>
                    <p class=\"location\"><i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i>
                        &nbsp périphérique</p>
                    {#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
                    <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                        <div class=\"space\">
                            <i class=\"fa fa-object-group\"></i>
                            <span>{{ propriete.surface }} m2 </span>
                        </div>
                        <div class=\"bathroom\">
                            <i class=\"fa fa-bed\"></i>
                            <span>{{ propriete.chambres }}</span>
                        </div>
                        <div class=\"bathroom\">
                            <i class=\"fa fa-bathtub\"></i>
                            <span>2</span>
                        </div>
                        <div class=\"garage\">
                            <i class=\"fa fa-automobile\"></i>
                            <span>2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

    <div class=\"pagination\">
        {{ knp_pagination_render(proprietes) }}
    </div>

{% endblock %}", "Site/include/_CardProperty.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/_CardProperty.html.twig");
    }
}
