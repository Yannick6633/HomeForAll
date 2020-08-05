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

/* Site/Property.html.twig */
class __TwigTemplate_14f34e27bb93eb30f65ab43d3fd29b8208d421e7f3e6d9725ec27511944359a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Property.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/Property.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Site/Property.html.twig", 1);
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
    <style>

        .property-gallery{
            padding: 0px;
            max-width: 900px;
        }

        .property-gallery-slide {
            /*border: 3px solid red;*/

            background-position: center center;
            background-repeat: no-repeat;
            height: 572px;
            position: relative;
            display: none;
        }

        .Thumbnails {
            /*border: #5f3f3f 3px solid;*/
            position: relative;
            display: flex;
            flex-direction: column;
            /*justify-content: center;*/
            flex-wrap: wrap;
            height: 600px;
            /*overflow: scroll;*/

        }

        .Thumbnails img {
            /*display: none;*/
            max-width: 100px;

            opacity: 0.6;
        }

        .Thumbnails img:hover {
            /*display: none;*/
            max-width: 100px;
            opacity: 1;

        }

        /*.property-thumbnail {*/
        /*    margin: 0px;*/
        /*}*/

        .property-thumbnail {
            cursor: pointer;
            margin:5px;
        }

        .property-gallery a,
        .property-gallery:hover{
            color: white;
            font-weight: bold;
            font-size: 20px;
        }



        /* Next & previous buttons */
        .property-prev,
        .property-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the \"next button\" to the right */
        .property-next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .property-prev:hover,
        .property-next:hover {
            background-color: rgba(148, 112, 84, 0.8);
        }

        .property-slide-parallax {
            min-height: 400px;
            background-attachment: fixed;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }


    </style>


    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"south-load\"></div>
    </div>

    <!-- Top and NavBar -->
    <header class=\"header-area\">
        ";
        // line 110
        $this->loadTemplate("Site/include/headerTop.html.twig", "Site/Property.html.twig", 110)->display($context);
        // line 111
        echo "        ";
        $this->loadTemplate("Site/include/headerNavBar.html.twig", "Site/Property.html.twig", 111)->display($context);
        // line 112
        echo "    </header>

    <!-- Side -->
    <section class=\"hero-area section-padding-0-100\">
        <div class=\"property-slide-parallax \" style=\"background-image: url('";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature1.90201ff9.jpg"), "html", null, true);
        echo "');\"></div>
    </section>

    <!-- Search Area -->
    <section class=\"south-search-area\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"advanced-search-form\" style=\"top:-300px\">
                        <div class=\"container-fluid \" style=\"margin-top: 20px\" >
                            <div class=\"row justify-content-center\">
                                <div class=\"col-10 property-gallery\" style=\"\">
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature1.90201ff9.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature8.965af860.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature3.4bed2344.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature4.ef4ca563.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature5.b1a30f2c.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature6.2191f756.jpg"), "html", null, true);
        echo "');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature7.f3787324.jpg"), "html", null, true);
        echo "');\"></div>

                                    <a class=\"property-prev\" onclick=\"plusSlides(-1)\">❮</a>
                                    <a class=\"property-next\" onclick=\"plusSlides(1)\">❯</a>
                                </div>

                                <div class=\"col-1 Thumbnails\" style=\"margin-right: 33px; \">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature1.90201ff9.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(1)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature8.965af860.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(2)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature3.4bed2344.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(3)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature4.ef4ca563.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(4)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature5.b1a30f2c.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(5)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature6.2191f756.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(6)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bg-img/feature7.f3787324.jpg"), "html", null, true);
        echo "\" onclick=\"currentSlide(7)\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area End -->


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {

            let slides = document.getElementsByClassName(\"property-gallery-slide\");
            let dots = document.getElementsByClassName(\"property-thumbnail\");

            if (n > slides.length) {slideIndex = 1}

            if (n < 1) {slideIndex = slides.length}

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }

            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }
    </script>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Site/Property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 147,  257 => 146,  253 => 145,  249 => 144,  245 => 143,  241 => 142,  237 => 141,  227 => 134,  223 => 133,  219 => 132,  215 => 131,  211 => 130,  207 => 129,  203 => 128,  188 => 116,  182 => 112,  179 => 111,  177 => 110,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <style>

        .property-gallery{
            padding: 0px;
            max-width: 900px;
        }

        .property-gallery-slide {
            /*border: 3px solid red;*/

            background-position: center center;
            background-repeat: no-repeat;
            height: 572px;
            position: relative;
            display: none;
        }

        .Thumbnails {
            /*border: #5f3f3f 3px solid;*/
            position: relative;
            display: flex;
            flex-direction: column;
            /*justify-content: center;*/
            flex-wrap: wrap;
            height: 600px;
            /*overflow: scroll;*/

        }

        .Thumbnails img {
            /*display: none;*/
            max-width: 100px;

            opacity: 0.6;
        }

        .Thumbnails img:hover {
            /*display: none;*/
            max-width: 100px;
            opacity: 1;

        }

        /*.property-thumbnail {*/
        /*    margin: 0px;*/
        /*}*/

        .property-thumbnail {
            cursor: pointer;
            margin:5px;
        }

        .property-gallery a,
        .property-gallery:hover{
            color: white;
            font-weight: bold;
            font-size: 20px;
        }



        /* Next & previous buttons */
        .property-prev,
        .property-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the \"next button\" to the right */
        .property-next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .property-prev:hover,
        .property-next:hover {
            background-color: rgba(148, 112, 84, 0.8);
        }

        .property-slide-parallax {
            min-height: 400px;
            background-attachment: fixed;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }


    </style>


    <!-- Preloader -->
    <div id=\"preloader\">
        <div class=\"south-load\"></div>
    </div>

    <!-- Top and NavBar -->
    <header class=\"header-area\">
        {% include 'Site/include/headerTop.html.twig' %}
        {% include 'Site/include/headerNavBar.html.twig' %}
    </header>

    <!-- Side -->
    <section class=\"hero-area section-padding-0-100\">
        <div class=\"property-slide-parallax \" style=\"background-image: url('{{asset('build/images/bg-img/feature1.90201ff9.jpg')}}');\"></div>
    </section>

    <!-- Search Area -->
    <section class=\"south-search-area\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"advanced-search-form\" style=\"top:-300px\">
                        <div class=\"container-fluid \" style=\"margin-top: 20px\" >
                            <div class=\"row justify-content-center\">
                                <div class=\"col-10 property-gallery\" style=\"\">
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature1.90201ff9.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature8.965af860.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature3.4bed2344.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature4.ef4ca563.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature5.b1a30f2c.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature6.2191f756.jpg')}}');\"></div>
                                    <div class=\"property-gallery-slide\" style=\"background-image: url('{{asset('build/images/bg-img/feature7.f3787324.jpg')}}');\"></div>

                                    <a class=\"property-prev\" onclick=\"plusSlides(-1)\">❮</a>
                                    <a class=\"property-next\" onclick=\"plusSlides(1)\">❯</a>
                                </div>

                                <div class=\"col-1 Thumbnails\" style=\"margin-right: 33px; \">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature1.90201ff9.jpg')}}\" onclick=\"currentSlide(1)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature8.965af860.jpg')}}\" onclick=\"currentSlide(2)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature3.4bed2344.jpg')}}\" onclick=\"currentSlide(3)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature4.ef4ca563.jpg')}}\" onclick=\"currentSlide(4)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature5.b1a30f2c.jpg')}}\" onclick=\"currentSlide(5)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature6.2191f756.jpg')}}\" onclick=\"currentSlide(6)\" alt=\"\">
                                    <img class=\"property-thumbnail\" src=\"{{asset('build/images/bg-img/feature7.f3787324.jpg')}}\" onclick=\"currentSlide(7)\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area End -->


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {

            let slides = document.getElementsByClassName(\"property-gallery-slide\");
            let dots = document.getElementsByClassName(\"property-thumbnail\");

            if (n > slides.length) {slideIndex = 1}

            if (n < 1) {slideIndex = slides.length}

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }

            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }
    </script>






{% endblock %}", "Site/Property.html.twig", "/var/www/MonAgenceImmo/templates/Site/Property.html.twig");
    }
}
