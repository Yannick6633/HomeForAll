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

/* Site/body.html.twig */
class __TwigTemplate_59deeeed0e38187339a135e26f4fbf657b20734263ea8644f41916786679a651 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/body.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/body.html.twig"));

        // line 1
        echo "<!-- Page Content -->
<div id=\"page-content\">

    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "
    <section id=\"our-services\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Our Services</h2></header>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-folder\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>Wide Range of Properties</h3></header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href=\"properties-listing.html\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-users\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>14 Agents for Your Service</h3></header>
                            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                            <a href=\"agents-listing.html\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-money\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>Best Price Guarantee!</h3></header>
                            <p>Phasellus non viverra tortor, id auctor leo. Suspendisse id nibh placerat</p>
                            <a href=\"#\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#our-services -->


    <!-- Bloc -->


    <section id=\"price-drop\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\">
                <h2>Price Drop</h2>
                <a href=\"properties-listing.html\" class=\"link-arrow\">All Properties</a>
            </header>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 11,000</div>
                                    <h3>3398 Lodgeville Road</h3>
                                    <figure>Golden Valley, MN 55427</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 38,000</div>
                                    <h3>2186 Rinehart Road</h3>
                                    <figure>Doral, FL 33178 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 325,000</div>
                                    <h3>3705 Brighton Circle Road</h3>
                                    <figure>Glenwood, MN 56334</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 16,000</div>
                                    <h3>362 Lynn Ogden Lane</h3>
                                    <figure>Galveston, TX 77550</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section><!-- /#price-drop -->
    <aside id=\"advertising\" class=\"block\">
        <div class=\"container\">
            <a href=\"submit.html\">
                <div class=\"banner\">
                    <div class=\"wrapper\">
                        <span class=\"title\">Do you want your property to be listed here?</span>
                        <span class=\"submit\">Submit it now! <i class=\"fa fa-plus-square\"></i></span>
                    </div>
                </div><!-- /.banner-->
            </a>
        </div>
    </aside><!-- /#adveritsing-->



    <!-- Nouvelle Propiété-->

    <section id=\"new-properties\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\">
                <h2>New Properties for You</h2>
                <a href=\"properties-listing.html\" class=\"link-arrow\">All Properties</a>
            </header>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 11,000</div>
                                    <h3>3398 Lodgeville Road</h3>
                                    <figure>Golden Valley, MN 55427</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 38,000</div>
                                    <h3>2186 Rinehart Road</h3>
                                    <figure>Doral, FL 33178 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 325,000</div>
                                    <h3>3705 Brighton Circle Road</h3>
                                    <figure>Glenwood, MN 56334</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 16,000</div>
                                    <h3>362 Lynn Ogden Lane</h3>
                                    <figure>Galveston, TX 77550</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 18,000</div>
                                    <h3>2506 B Street</h3>
                                    <figure>New Brighton, MN 55112</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>280m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 136,000</div>
                                    <h3>3990 Late Avenue</h3>
                                    <figure>Kingfisher, OK 73750</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>30m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 12,680</div>
                                    <h3>297 Marie Street</h3>
                                    <figure>Towson, MD 21204 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 12,800</div>
                                    <h3>64 Timberbrook Lane</h3>
                                    <figure>Denver, CO 80202</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /#new-properties-->
    <section id=\"testimonials\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Testimonials</h2></header>
            <div class=\"owl-carousel testimonials-carousel\">
                <blockquote class=\"testimonial\">
                    <figure>
                        <div class=\"image\">
                            <img alt=\"\" src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                        </div>
                    </figure>
                    <aside class=\"cite\">
                        <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                        <footer>Natalie Jenkins</footer>
                    </aside>
                </blockquote>
                <blockquote class=\"testimonial\">
                    <figure>
                        <div class=\"image\">
                            <img alt=\"\" src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                        </div>
                    </figure>
                    <aside class=\"cite\">
                        <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                        <footer>Natalie Jenkins</footer>
                    </aside>
                </blockquote>
            </div><!-- /.testimonials-carousel -->
        </div><!-- /.container -->
    </section><!-- /#testimonials -->
    <section id=\"partners\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Our Partners</h2></header>
            <div class=\"logos\">
                <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo-partner-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo-partner-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo-partner-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo-partner-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo-partner-01.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
            </div>
        </div><!-- /.container -->
    </section><!-- /#partners -->
</div>
<!-- end Page Content -->
<!-- Page Footer -->
<footer id=\"page-footer\">
    <div class=\"inner\">
        <aside id=\"footer-main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>About Us</h3>
                            <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum
                                primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio
                                id, ornare tortor
                            </p>
                            <hr>
                            <a href=\"#\" class=\"link-arrow\">Read More</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Recent Properties</h3>
                            <div class=\"property small\">
                                <a href=\"property-detail.html\">
                                    <div class=\"property-image\">
                                        <img alt=\"\" src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                </a>
                                <div class=\"info\">
                                    <a href=\"property-detail.html\"><h4>2186 Rinehart Road</h4></a>
                                    <figure>Doral, FL 33178 </figure>
                                    <div class=\"tag price\">\$ 72,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class=\"property small\">
                                <a href=\"property-detail.html\">
                                    <div class=\"property-image\">
                                        <img alt=\"\" src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/architecture-1867187_640.ef1b34b4.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                </a>
                                <div class=\"info\">
                                    <a href=\"property-detail.html\"><h4>2479 Murphy Court</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class=\"tag price\">\$ 36,000</div>
                                </div>
                            </div><!-- /.property -->
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Contact</h3>
                            <address>
                                <strong>Your Company</strong><br>
                                4877 Spruce Drive<br>
                                West Newton, PA 15089
                            </address>
                            +1 (734) 123-4567<br>
                            <a href=\"#\">hello@example.com</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Useful Links</h3>
                            <ul class=\"list-unstyled list-links\">
                                <li><a href=\"#\">All Properties</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Login and Register Account</a></li>
                                <li><a href=\"#\">FAQ</a></li>
                                <li><a href=\"#\">Terms and Conditions</a></li>
                            </ul>
                        </article>
                    </div><!-- /.col-sm-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </aside><!-- /#footer-main -->
        <aside id=\"footer-thumbnails\" class=\"footer-thumbnails\"></aside><!-- /#footer-thumbnails -->
        <aside id=\"footer-copyright\">
            <div class=\"container\">
                <span>Copyright © 2013. All Rights Reserved.</span>
                <span class=\"pull-right\"><a href=\"#page-top\" class=\"roll\">Go to top</a></span>
            </div>
        </aside>
    </div><!-- /.inner -->
</footer>
<!-- end Page Footer -->


<div id=\"overlay\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 579,  675 => 567,  643 => 538,  639 => 537,  635 => 536,  631 => 535,  627 => 534,  609 => 519,  595 => 508,  552 => 468,  515 => 434,  478 => 400,  441 => 366,  402 => 330,  365 => 296,  328 => 262,  291 => 228,  227 => 167,  190 => 133,  153 => 99,  116 => 65,  60 => 11,  58 => 10,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page Content -->
<div id=\"page-content\">

    {#                <section id=\"banner\">#}
    {#                    <div class=\"block has-dark-background background-color-default-darker center text-banner\">#}
    {#                        <div class=\"container\">#}
    {#                            <h1 class=\"no-bottom-margin no-border\">Zoner Is Fully Loaded Real Estate Template with <a href=\"#\" class=\"text-underline\">Tons of Features</a>!</h1>#}
    {#                        </div>#}
    {#                    </div>#}
    {#                </section><!-- /#banner -->#}

    <section id=\"our-services\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Our Services</h2></header>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-folder\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>Wide Range of Properties</h3></header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href=\"properties-listing.html\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-users\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>14 Agents for Your Service</h3></header>
                            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                            <a href=\"agents-listing.html\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
                <div class=\"col-md-4 col-sm-4\">
                    <div class=\"feature-box equal-height\">
                        <figure class=\"icon\"><i class=\"fa fa-money\"></i></figure>
                        <aside class=\"description\">
                            <header><h3>Best Price Guarantee!</h3></header>
                            <p>Phasellus non viverra tortor, id auctor leo. Suspendisse id nibh placerat</p>
                            <a href=\"#\" class=\"link-arrow\">Read More</a>
                        </aside>
                    </div><!-- /.feature-box -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#our-services -->


    <!-- Bloc -->


    <section id=\"price-drop\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\">
                <h2>Price Drop</h2>
                <a href=\"properties-listing.html\" class=\"link-arrow\">All Properties</a>
            </header>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 11,000</div>
                                    <h3>3398 Lodgeville Road</h3>
                                    <figure>Golden Valley, MN 55427</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 38,000</div>
                                    <h3>2186 Rinehart Road</h3>
                                    <figure>Doral, FL 33178 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 325,000</div>
                                    <h3>3705 Brighton Circle Road</h3>
                                    <figure>Glenwood, MN 56334</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 16,000</div>
                                    <h3>362 Lynn Ogden Lane</h3>
                                    <figure>Galveston, TX 77550</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section><!-- /#price-drop -->
    <aside id=\"advertising\" class=\"block\">
        <div class=\"container\">
            <a href=\"submit.html\">
                <div class=\"banner\">
                    <div class=\"wrapper\">
                        <span class=\"title\">Do you want your property to be listed here?</span>
                        <span class=\"submit\">Submit it now! <i class=\"fa fa-plus-square\"></i></span>
                    </div>
                </div><!-- /.banner-->
            </a>
        </div>
    </aside><!-- /#adveritsing-->



    <!-- Nouvelle Propiété-->

    <section id=\"new-properties\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\">
                <h2>New Properties for You</h2>
                <a href=\"properties-listing.html\" class=\"link-arrow\">All Properties</a>
            </header>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 11,000</div>
                                    <h3>3398 Lodgeville Road</h3>
                                    <figure>Golden Valley, MN 55427</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 38,000</div>
                                    <h3>2186 Rinehart Road</h3>
                                    <figure>Doral, FL 33178 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 325,000</div>
                                    <h3>3705 Brighton Circle Road</h3>
                                    <figure>Glenwood, MN 56334</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 16,000</div>
                                    <h3>362 Lynn Ogden Lane</h3>
                                    <figure>Galveston, TX 77550</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 18,000</div>
                                    <h3>2506 B Street</h3>
                                    <figure>New Brighton, MN 55112</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>280m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>2</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 136,000</div>
                                    <h3>3990 Late Avenue</h3>
                                    <figure>Kingfisher, OK 73750</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>30m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>0</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 12,680</div>
                                    <h3>297 Marie Street</h3>
                                    <figure>Towson, MD 21204 </figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"property\">
                        <a href=\"property-detail.html\">
                            <div class=\"property-image\">
                                <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                            </div>
                            <div class=\"overlay\">
                                <div class=\"info\">
                                    <div class=\"tag price\">\$ 12,800</div>
                                    <h3>64 Timberbrook Lane</h3>
                                    <figure>Denver, CO 80202</figure>
                                </div>
                                <ul class=\"additional-info\">
                                    <li>
                                        <header>Area:</header>
                                        <figure>240m<sup>2</sup></figure>
                                    </li>
                                    <li>
                                        <header>Beds:</header>
                                        <figure>3</figure>
                                    </li>
                                    <li>
                                        <header>Baths:</header>
                                        <figure>1</figure>
                                    </li>
                                    <li>
                                        <header>Garages:</header>
                                        <figure>1</figure>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row-->
        </div><!-- /.container-->
    </section><!-- /#new-properties-->
    <section id=\"testimonials\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Testimonials</h2></header>
            <div class=\"owl-carousel testimonials-carousel\">
                <blockquote class=\"testimonial\">
                    <figure>
                        <div class=\"image\">
                            <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                        </div>
                    </figure>
                    <aside class=\"cite\">
                        <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                        <footer>Natalie Jenkins</footer>
                    </aside>
                </blockquote>
                <blockquote class=\"testimonial\">
                    <figure>
                        <div class=\"image\">
                            <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                        </div>
                    </figure>
                    <aside class=\"cite\">
                        <p>Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                        <footer>Natalie Jenkins</footer>
                    </aside>
                </blockquote>
            </div><!-- /.testimonials-carousel -->
        </div><!-- /.container -->
    </section><!-- /#testimonials -->
    <section id=\"partners\" class=\"block\">
        <div class=\"container\">
            <header class=\"section-title\"><h2>Our Partners</h2></header>
            <div class=\"logos\">
                <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('build/logo-partner-01.png') }}\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('build/logo-partner-01.png') }}\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('build/logo-partner-01.png') }}\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('build/logo-partner-01.png') }}\" alt=\"\"></a></div>
                <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('build/logo-partner-01.png') }}\" alt=\"\"></a></div>
            </div>
        </div><!-- /.container -->
    </section><!-- /#partners -->
</div>
<!-- end Page Content -->
<!-- Page Footer -->
<footer id=\"page-footer\">
    <div class=\"inner\">
        <aside id=\"footer-main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>About Us</h3>
                            <p>Vel fermentum ipsum. Suspendisse quis molestie odio. Interdum et malesuada fames ac ante ipsum
                                primis in faucibus. Quisque aliquet a metus in aliquet. Praesent ut turpis posuere, commodo odio
                                id, ornare tortor
                            </p>
                            <hr>
                            <a href=\"#\" class=\"link-arrow\">Read More</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Recent Properties</h3>
                            <div class=\"property small\">
                                <a href=\"property-detail.html\">
                                    <div class=\"property-image\">
                                        <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                                    </div>
                                </a>
                                <div class=\"info\">
                                    <a href=\"property-detail.html\"><h4>2186 Rinehart Road</h4></a>
                                    <figure>Doral, FL 33178 </figure>
                                    <div class=\"tag price\">\$ 72,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class=\"property small\">
                                <a href=\"property-detail.html\">
                                    <div class=\"property-image\">
                                        <img alt=\"\" src=\"{{ asset('build/images/architecture-1867187_640.ef1b34b4.jpg') }}\">
                                    </div>
                                </a>
                                <div class=\"info\">
                                    <a href=\"property-detail.html\"><h4>2479 Murphy Court</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class=\"tag price\">\$ 36,000</div>
                                </div>
                            </div><!-- /.property -->
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Contact</h3>
                            <address>
                                <strong>Your Company</strong><br>
                                4877 Spruce Drive<br>
                                West Newton, PA 15089
                            </address>
                            +1 (734) 123-4567<br>
                            <a href=\"#\">hello@example.com</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class=\"col-md-3 col-sm-3\">
                        <article>
                            <h3>Useful Links</h3>
                            <ul class=\"list-unstyled list-links\">
                                <li><a href=\"#\">All Properties</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Login and Register Account</a></li>
                                <li><a href=\"#\">FAQ</a></li>
                                <li><a href=\"#\">Terms and Conditions</a></li>
                            </ul>
                        </article>
                    </div><!-- /.col-sm-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </aside><!-- /#footer-main -->
        <aside id=\"footer-thumbnails\" class=\"footer-thumbnails\"></aside><!-- /#footer-thumbnails -->
        <aside id=\"footer-copyright\">
            <div class=\"container\">
                <span>Copyright © 2013. All Rights Reserved.</span>
                <span class=\"pull-right\"><a href=\"#page-top\" class=\"roll\">Go to top</a></span>
            </div>
        </aside>
    </div><!-- /.inner -->
</footer>
<!-- end Page Footer -->


<div id=\"overlay\"></div>", "Site/body.html.twig", "/var/www/MonAgenceImmo/templates/Site/body.html.twig");
    }
}
