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

/* propriete/show.html.twig */
class __TwigTemplate_fafca8efe8b0187315e59d114bbacb25eefb8b39eaafaad5a7a2a05b9417444f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/show.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "propriete/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <div class=\"alert alert-danger\">
                    Erreur ! veuillez entrer une adresse mail valide
                </div>
            ";
        }
        // line 20
        echo "
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div data-slider>
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 24, $this->source); })()), "imagename", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 25, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\"
                             alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                    ";
        } else {
            // line 28
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/uploads/images/proprietes/empty.jpg", "medium"), "html", null, true);
            echo "\"
                             alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                    ";
        }
        // line 31
        echo "                </div>
            </div>
                <div class=\"col-md-4\">
                    <h1>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 35, $this->source); })()), "pieces", [], "any", false, false, false, 35), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 35, $this->source); })()), "surface", [], "any", false, false, false, 35), "html", null, true);
        echo " m2</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold; font-size: 2rem\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 36, $this->source); })()), "formattedPrix", [], "any", false, false, false, 36), "html", null, true);
        echo "€
                    </div>
                    <a href=\"#\" class=\"btn btn-default\" id=\"contactButton\"";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "submitted", [], "any", false, false, false, 38)) {
            echo " style=\"display: none;\"";
        }
        echo ">Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\"";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "submitted", [], "any", false, false, false, 39)) {
            echo " style=\"display: block;\"";
        }
        echo ">
                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "firstname", [], "any", false, false, false, 42), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lastname", [], "any", false, false, false, 43), 'row');
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "phone", [], "any", false, false, false, 46), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'row');
        echo "</div>
                        </div>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'rest');
        echo "
                        <div class=\"form-group\">
                            <button class=\"btn btn-default\">Envoyer</button>
                        </div>
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <div class=\"col-md-12\">
            <p>
                ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62);
        echo "
            </p>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 72, $this->source); })()), "surface", [], "any", false, false, false, 72), "html", null, true);
        echo " m2</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 76, $this->source); })()), "pieces", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 80, $this->source); })()), "chambres", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Étage</td>
                        <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 84, $this->source); })()), "etages", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 88, $this->source); })()), "chauffage", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Critères</h2>
                <ul class=\"list-group\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["propriete"]) || array_key_exists("propriete", $context) ? $context["propriete"] : (function () { throw new RuntimeError('Variable "propriete" does not exist.', 95, $this->source); })()), "criteres", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["critere"]) {
            // line 96
            echo "                        <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critere"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propriete/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 98,  272 => 96,  268 => 95,  258 => 88,  251 => 84,  244 => 80,  237 => 76,  230 => 72,  217 => 62,  205 => 53,  198 => 49,  193 => 47,  189 => 46,  183 => 43,  179 => 42,  174 => 40,  168 => 39,  162 => 38,  157 => 36,  151 => 35,  147 => 34,  142 => 31,  135 => 28,  128 => 25,  126 => 24,  120 => 20,  114 => 16,  112 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title propriete.titre %}

{% block body %}
    <div class=\"jumbotron\">
        <div class=\"container\">

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            {% if not form.vars.valid %}
                <div class=\"alert alert-danger\">
                    Erreur ! veuillez entrer une adresse mail valide
                </div>
            {% endif %}

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div data-slider>
                    {% if propriete.imagename %}
                        <img src=\"{{ vich_uploader_asset(propriete, 'imageFile') | imagine_filter('medium') }}\"
                             alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                    {% else %}
                        <img src=\"{{ '/uploads/images/proprietes/empty.jpg' | imagine_filter('medium') }}\"
                             alt=\"card-img-top\" style=\"width: 100%; height: auto\">
                    {% endif %}
                </div>
            </div>
                <div class=\"col-md-4\">
                    <h1>{{ propriete.titre }}</h1>
                    <h2>{{ propriete.pieces }} pièces - {{ propriete.surface }} m2</h2>
                    <div class=\"text-danger\" style=\"font-weight: bold; font-size: 2rem\">{{ propriete.formattedPrix }}€
                    </div>
                    <a href=\"#\" class=\"btn btn-default\" id=\"contactButton\"{% if form.vars.submitted %} style=\"display: none;\"{% endif %}>Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\"{% if not form.vars.submitted %} style=\"display: block;\"{% endif %}>
                        {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col\">{{ form_row(form.firstname) }}</div>
                            <div class=\"col\">{{ form_row(form.lastname) }}</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">{{ form_row(form.phone) }}</div>
                            <div class=\"col\">{{ form_row(form.email) }}</div>
                        </div>
                        {{ form_rest(form) }}
                        <div class=\"form-group\">
                            <button class=\"btn btn-default\">Envoyer</button>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <div class=\"col-md-12\">
            <p>
                {{ propriete.description | raw }}
            </p>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ propriete.surface }} m2</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ propriete.pieces }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ propriete.chambres }}</td>
                    </tr>
                    <tr>
                        <td>Étage</td>
                        <td>{{ propriete.etages }}</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>{{ propriete.chauffage }}</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Critères</h2>
                <ul class=\"list-group\">
                    {% for critere in propriete.criteres %}
                        <li class=\"list-group-item\">{{ critere.name }}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "propriete/show.html.twig", "/var/www/MonAgenceImmo/templates/propriete/show.html.twig");
    }
}
