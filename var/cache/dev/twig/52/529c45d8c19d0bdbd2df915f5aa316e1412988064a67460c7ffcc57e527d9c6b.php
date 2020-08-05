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

/* propriete/index.html.twig */
class __TwigTemplate_5e4dfed8564ee94e8d7e6ef46e79d690bc625e7b391722bc71d7555309fd4fde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "propriete/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tous nos biens";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron text-center\">
        <div class=\"container\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-row align-items-end\">
                <div class=\"col\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "minSurface", [], "any", false, false, false, 10), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "maxPrice", [], "any", false, false, false, 13), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "criteres", [], "any", false, false, false, 16), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "city", [], "any", false, false, false, 19), 'row');
        echo "
                </div>
                <div class=\"col\">
                    <div class=\"form-group\">
                    <button class=\"btn btn-default\">Rechercher</button>
                    </div>
                </div>
            </div>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"container\">
        <h2>Les derniers biens</h2>
        <div class=\"row flex\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proprietes"]) || array_key_exists("proprietes", $context) ? $context["proprietes"] : (function () { throw new RuntimeError('Variable "proprietes" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
            // line 35
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["propriete"], "imagename", [], "any", false, false, false, 37)) {
                // line 38
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["propriete"], "imageFile"), "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                        ";
            } else {
                // line 40
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/proprietes/empty.jpg", "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                        ";
            }
            // line 42
            echo "                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propriete.show", ["id" => twig_get_attribute($this->env, $this->source, $context["propriete"], "id", [], "any", false, false, false, 44), "slug" => twig_get_attribute($this->env, $this->source, $context["propriete"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
                            </h5>
                            <p class=\"card-text\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["propriete"], "description", [], "any", false, false, false, 46);
            echo "</p>
                            <p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "surface", [], "any", false, false, false, 47), "html", null, true);
            echo " m2 - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "ville", [], "any", false, false, false, 47), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "codePostal", [], "any", false, false, false, 47), "html", null, true);
            echo ")</p>
                            <div class=\"text-danger\"
                                 style=\"font-weight: bold; font-size: 2rem\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "formattedPrix", [], "any", false, false, false, 49), "html", null, true);
            echo " €
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>

        <div class=\"pagination\">
        ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["proprietes"]) || array_key_exists("proprietes", $context) ? $context["proprietes"] : (function () { throw new RuntimeError('Variable "proprietes" does not exist.', 58, $this->source); })()));
        echo "
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propriete/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  195 => 55,  183 => 49,  174 => 47,  170 => 46,  163 => 44,  159 => 42,  153 => 40,  147 => 38,  145 => 37,  141 => 35,  137 => 34,  127 => 27,  116 => 19,  110 => 16,  104 => 13,  98 => 10,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title 'Tous nos biens' %}
{% block body %}
    <div class=\"jumbotron text-center\">
        <div class=\"container\">
            {{ form_start(form) }}
            <div class=\"form-row align-items-end\">
                <div class=\"col\">
                    {{ form_row(form.minSurface) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.maxPrice) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.criteres) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.city) }}
                </div>
                <div class=\"col\">
                    <div class=\"form-group\">
                    <button class=\"btn btn-default\">Rechercher</button>
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>

    <div class=\"container\">
        <h2>Les derniers biens</h2>
        <div class=\"row flex\">
            {% for propriete in proprietes %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        {% if propriete.imagename %}
                            <img src=\"{{ vich_uploader_asset(propriete, 'imageFile') | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                        {% else %}
                            <img src=\"{{ '/proprietes/empty.jpg' | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                        {% endif %}
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <a href=\"{{ path('propriete.show', {id: propriete.id, slug: propriete.slug}) }}\">{{ propriete.titre }}</a>
                            </h5>
                            <p class=\"card-text\">{{ propriete.description  | raw }}</p>
                            <p class=\"card-text\">{{ propriete.surface }} m2 - {{ propriete.ville }} ({{ propriete.codePostal }})</p>
                            <div class=\"text-danger\"
                                 style=\"font-weight: bold; font-size: 2rem\">{{ propriete.formattedPrix }} €
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"pagination\">
        {{ knp_pagination_render(proprietes) }}
    </div>
    </div>

{% endblock %}
", "propriete/index.html.twig", "/var/www/MonAgenceImmo/templates/propriete/index.html.twig");
    }
}
