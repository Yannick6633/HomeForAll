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

/* Site/include/js-footer-hide.html.twig */
class __TwigTemplate_ce00b4aa984c4f761208c87c3a35825e68206297b14320171744476b7aa97b8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/js-footer-hide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/js-footer-hide.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function btnFooterHide(){
        if(\$('.js-footer-hide').hasClass('opened')){
            \$('.js-footer-hide').removeClass('opened');
            \$('.btn-hide').removeClass('fa-minus');
            \$('.btn-hide').addClass('fa-plus');


        }else{
            \$('.js-footer-hide').addClass('opened');
            \$('.btn-hide').removeClass('fa-plus');
            \$('.btn-hide').addClass('fa-minus');
        }
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/js-footer-hide.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    function btnFooterHide(){
        if(\$('.js-footer-hide').hasClass('opened')){
            \$('.js-footer-hide').removeClass('opened');
            \$('.btn-hide').removeClass('fa-minus');
            \$('.btn-hide').addClass('fa-plus');


        }else{
            \$('.js-footer-hide').addClass('opened');
            \$('.btn-hide').removeClass('fa-plus');
            \$('.btn-hide').addClass('fa-minus');
        }
    }
</script>", "Site/include/js-footer-hide.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/js-footer-hide.html.twig");
    }
}
