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

/* Site/include/searchForm.html.twig */
class __TwigTemplate_97f5fc2ffbf3d921fe2690d38ce8008d9fe9f037f508be68eb3f8d3e4d318060 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/searchForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Site/include/searchForm.html.twig"));

        // line 1
        echo "<form action=\"#\" method=\"post\" id=\"advanceSearch\">
    <div class=\"row\">

        <!-- Type de projet -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <select class=\"form-control\">
                <option>Type de Projet</option>
                <option>Acheter</option>
                <option>Louer</option>
            </select>
        </div>

        <!-- Localisation -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Localisation\">
        </div>

        <!-- Etendre -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Etendre à .. km\">
        </div>

        <div class=\"col-12 col-md-4 col-lg-3\">
            <select class=\"form-control\">
                <option>Type de bien</option>
                <option>Maison</option>
                <option>Appartement</option>
                <option>Terrain</option>
                <option>Immeuble</option>
                <option>Local</option>
            </select>
        </div>

        <!-- Budget-->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Budget max\">
        </div>

        <!-- Surface -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Surface min\">
        </div>

        <!-- Pièce -->
        <div class=\"col-12 col-md-4 col-lg-3\">
                <select class=\"form-control\">
                    <option>Pièces</option>
                    <option>1 pièce</option>
                    <option>2 pièces</option>
                    <option>3 pièces</option>
                    <option>4 pièces</option>
                    <option>5 pièces et +</option>
                </select>
        </div>

        <!-- Plus de critère -->
        <div class=\"col-12 search-form-second-steps\">
            <div class=\"row\">

                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Affinez votre recherche</p>
                    </div>
                </div>

                <div class=\"col-12 mb-20\" style=\"\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"programme\" name=\"programme\">
                        <label class=\"border-switch-control-indicator\" for=\"programme\"></label>
                        <span >Programmes neufs</span>
                    </div>
                </div>

                <!-- Pièce -->
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <select class=\"form-control\">
                        <option>Chambres</option>
                        <option>1 chambre</option>
                        <option>2 chambres</option>
                        <option>3 chambres</option>
                        <option>4 chambres</option>
                        <option>5 chambres</option>
                        <option>6 chambres et +</option>
                    </select>
                </div>

                <div class=\"col-12 col-md-4 col-lg-3\">
                    <select class=\"form-control\">
                        <option>Etage</option>
                        <option>RDC</option>
                        <option>1er étage</option>
                        <option>2ds étage</option>
                        <option>3eme étage</option>
                        <option>4eme +</option>
                        <option>dernier étage</option>
                    </select>
                </div>

                <!-- Aménagement -->
                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Aménagements</p>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"ascenseur\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"ascenseur\"></label>
                        <span >Ascenseur</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"cheminee\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"cheminee\"></label>
                        <span >Cheminée</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"meuble\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"meuble\"></label>
                        <span >Meublé</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"climatisation\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"climatisation\"></label>
                        <span >Climatisation</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"colocation\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"colocation\"></label>
                        <span >Colocation</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"interphone\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"interphone\"></label>
                        <span >Interphone</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"gardien\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"gardien\"></label>
                        <span >Gardien</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"digicode\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"digicode\"></label>
                        <span >Digicode</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"alarme\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"alarme\"></label>
                        <span >Alarme</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"piscine\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"piscine\"></label>
                        <span >Piscine</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"terrasse\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"terrasse\"></label>
                        <span >Terrasse</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"balcon\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"balcon\"></label>
                        <span >Balcon</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"jardin\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"jardin\"></label>
                        <span >Jardin</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"stationnement\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"stationnement\"></label>
                        <span >Stationnement</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"plainpied\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"plainpied\"></label>
                        <span >Plain Pied</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"pmr\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"pmr\"></label>
                        <span >PMR</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"garage\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"garage\"></label>
                        <span >Garage</span>
                    </div>
                </div>


                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"cave\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"cave\"></label>
                        <span >Cave</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"veranda\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"veranda\"></label>
                        <span >Véranda</span>
                    </div>
                </div>


        <!-- Aménagement -->
                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Orientation</p>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"nord\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"nord\"></label>
                        <span >Nord</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"sud\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"sud\"></label>
                        <span >Sud</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"est\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"est\"></label>
                        <span >Est</span>
                    </div>
                </div>

                <div class=\"col-4 col-md-3 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"ouest\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"ouest\"></label>
                        <span >Ouest</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 d-flex justify-content-between align-items-end\">
            <!-- More Filter -->
            <div class=\"more-filter\">
                <a href=\"#\" id=\"moreFilter\">Plus de Critères</a>
            </div>
            <!-- Submit -->
            <div class=\"form-group mb-0\">
                <button type=\"submit\" class=\"btn south-btn\" >Rechercher</button>
            </div>
        </div>
    </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Site/include/searchForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"#\" method=\"post\" id=\"advanceSearch\">
    <div class=\"row\">

        <!-- Type de projet -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <select class=\"form-control\">
                <option>Type de Projet</option>
                <option>Acheter</option>
                <option>Louer</option>
            </select>
        </div>

        <!-- Localisation -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Localisation\">
        </div>

        <!-- Etendre -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Etendre à .. km\">
        </div>

        <div class=\"col-12 col-md-4 col-lg-3\">
            <select class=\"form-control\">
                <option>Type de bien</option>
                <option>Maison</option>
                <option>Appartement</option>
                <option>Terrain</option>
                <option>Immeuble</option>
                <option>Local</option>
            </select>
        </div>

        <!-- Budget-->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Budget max\">
        </div>

        <!-- Surface -->
        <div class=\"col-12 col-md-4 col-lg-3\">
            <input type=\"input\" class=\"form-control\" name=\"input\" placeholder=\"Surface min\">
        </div>

        <!-- Pièce -->
        <div class=\"col-12 col-md-4 col-lg-3\">
                <select class=\"form-control\">
                    <option>Pièces</option>
                    <option>1 pièce</option>
                    <option>2 pièces</option>
                    <option>3 pièces</option>
                    <option>4 pièces</option>
                    <option>5 pièces et +</option>
                </select>
        </div>

        <!-- Plus de critère -->
        <div class=\"col-12 search-form-second-steps\">
            <div class=\"row\">

                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Affinez votre recherche</p>
                    </div>
                </div>

                <div class=\"col-12 mb-20\" style=\"\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"programme\" name=\"programme\">
                        <label class=\"border-switch-control-indicator\" for=\"programme\"></label>
                        <span >Programmes neufs</span>
                    </div>
                </div>

                <!-- Pièce -->
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <select class=\"form-control\">
                        <option>Chambres</option>
                        <option>1 chambre</option>
                        <option>2 chambres</option>
                        <option>3 chambres</option>
                        <option>4 chambres</option>
                        <option>5 chambres</option>
                        <option>6 chambres et +</option>
                    </select>
                </div>

                <div class=\"col-12 col-md-4 col-lg-3\">
                    <select class=\"form-control\">
                        <option>Etage</option>
                        <option>RDC</option>
                        <option>1er étage</option>
                        <option>2ds étage</option>
                        <option>3eme étage</option>
                        <option>4eme +</option>
                        <option>dernier étage</option>
                    </select>
                </div>

                <!-- Aménagement -->
                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Aménagements</p>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"ascenseur\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"ascenseur\"></label>
                        <span >Ascenseur</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"cheminee\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"cheminee\"></label>
                        <span >Cheminée</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"meuble\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"meuble\"></label>
                        <span >Meublé</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"climatisation\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"climatisation\"></label>
                        <span >Climatisation</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"colocation\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"colocation\"></label>
                        <span >Colocation</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"interphone\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"interphone\"></label>
                        <span >Interphone</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"gardien\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"gardien\"></label>
                        <span >Gardien</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"digicode\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"digicode\"></label>
                        <span >Digicode</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"alarme\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"alarme\"></label>
                        <span >Alarme</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"piscine\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"piscine\"></label>
                        <span >Piscine</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"terrasse\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"terrasse\"></label>
                        <span >Terrasse</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"balcon\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"balcon\"></label>
                        <span >Balcon</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"jardin\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"jardin\"></label>
                        <span >Jardin</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"stationnement\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"stationnement\"></label>
                        <span >Stationnement</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"plainpied\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"plainpied\"></label>
                        <span >Plain Pied</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"pmr\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"pmr\"></label>
                        <span >PMR</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"garage\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"garage\"></label>
                        <span >Garage</span>
                    </div>
                </div>


                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"cave\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"cave\"></label>
                        <span >Cave</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"veranda\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"veranda\"></label>
                        <span >Véranda</span>
                    </div>
                </div>


        <!-- Aménagement -->
                <div class=\"col-12\">
                    <div class=\"search-form-titre\">
                        <p>Orientation</p>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"nord\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"nord\"></label>
                        <span >Nord</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"sud\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"sud\"></label>
                        <span >Sud</span>
                    </div>
                </div>

                <div class=\"col-6 col-md-4 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"est\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"est\"></label>
                        <span >Est</span>
                    </div>
                </div>

                <div class=\"col-4 col-md-3 col-lg-3 mb-20\">
                    <div class=\"custom-control border-switch\">
                        <input type=\"checkbox\" class=\"border-switch-control-input\" id=\"ouest\" name=\"example\">
                        <label class=\"border-switch-control-indicator\" for=\"ouest\"></label>
                        <span >Ouest</span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-12 d-flex justify-content-between align-items-end\">
            <!-- More Filter -->
            <div class=\"more-filter\">
                <a href=\"#\" id=\"moreFilter\">Plus de Critères</a>
            </div>
            <!-- Submit -->
            <div class=\"form-group mb-0\">
                <button type=\"submit\" class=\"btn south-btn\" >Rechercher</button>
            </div>
        </div>
    </div>
</form>", "Site/include/searchForm.html.twig", "/var/www/MonAgenceImmo/templates/Site/include/searchForm.html.twig");
    }
}
