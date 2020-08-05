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
class __TwigTemplate_2350c70a05b0469baf65a2abfa22a6ee3d122bc721668c96f53911baa387aeea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardProperty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/_CardProperty.html.twig"));

        // line 1
        echo "<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature1.90201ff9.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 20
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature2.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>A LOUER</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 61
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\" style=\"color: #947056\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature3.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 102
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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


<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature4.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 144
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature5.b1a30f2c.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>VENDU</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 185
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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


<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature6.jpg"), "html", null, true);
        echo "\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
";
        // line 227
        echo "            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/_CardProperty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 227,  277 => 213,  247 => 185,  231 => 171,  202 => 144,  186 => 130,  156 => 102,  140 => 88,  111 => 61,  95 => 47,  66 => 20,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature1.90201ff9.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Venez découvrir cette belle maison fonctionnelle située dans une rue calme.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature2.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>A LOUER</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\" style=\"color: #947056\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature3.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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


<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature4.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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

<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature5.b1a30f2c.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>VENDU</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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


<!-- Single Featured Property -->
<div class=\"col-12 col-md-6 col-xl-4\">
    <div class=\"single-featured mb-50 wow fadeInUp\" data-wow-delay=\"100ms\">
        <!-- Property Thumbnail -->
        <div class=\"property-thumb\">
            <img src=\"{{asset('build/images/bg-img/feature6.jpg')}}\" alt=\"\">

            <div class=\"tag\">
                <span>A VENDRE</span>
            </div>
            <div class=\"list-price\">
                <p>945 679€</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class=\"property-content\">
            <h5>Bordeaux</h5>
            <p class=\"location\"> <i class=\"fa fa-map-marker\" style=\"color: #947056; font-size: 20px\"></i> &nbsp périphérique</p>
{#            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>#}
            <div class=\"property-meta-data d-flex align-items-end justify-content-between\">
                <div class=\"space\">
                    <i class=\"fa fa-object-group\"></i>
                    <span>350m²</span>
                </div>
                <div class=\"bathroom\">
                    <i class=\"fa fa-bed\"></i>
                    <span>2</span>
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
</div>", "Site/include/_CardProperty.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/_CardProperty.html.twig");
    }
}
