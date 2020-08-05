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

/* emails/contact.html.twig */
class __TwigTemplate_99f22be52da9619a0aab44fbb5969b9bef61477bd7db5909aca4d7b1b9715c91 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html>

<head>
    <title> Bonjour AgenceImmo </title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Alice\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
        @import url(https://fonts.googleapis.com/css?family=Alice);
    </style>

    <style type=\"text/css\">
        @media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }

            .mj-column-px-570 {
                width: 570px !important;
                max-width: 570px;
            }

            .mj-column-px-300 {
                width: 300px !important;
                max-width: 300px;
            }

            .mj-column-per-60 {
                width: 60% !important;
                max-width: 60%;
            }

            .mj-column-per-55 {
                width: 55% !important;
                max-width: 55%;
            }

            .mj-column-per-45 {
                width: 45% !important;
                max-width: 45%;
            }

            .mj-column-per-40 {
                width: 40% !important;
                max-width: 40%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width: 480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>

<body style=\"background-color:#EAE8E5;\">
<div style=\"background-color:#EAE8E5;\">

    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0 0 0;text-align:center;\">

                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"center\" style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                                       style=\"border-collapse:collapse;border-spacing:0px;\">
                                                    <tbody>
                                                    <tr>
                                                        <td style=\"width:600px;\"><img alt=\"\" height=\"auto\"
                                                                                      src=\"http://nimus.de/share/tpl-realestate/box-head.png\"
                                                                                      style=\"border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\"
                                                                                      width=\"600\"/></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;padding-top:40px;text-align:center;\">

                    <div class=\"mj-column-px-570 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px;word-break:break-word;\">
                                                <div style=\"font-family:Alice, Helvetica, Arial, sans-serif;font-size:36px;font-weight:400;line-height:40px;text-align:left;color:#1D83A8;\">
                                                    Mon agenceImmo
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:left;color:#000000;\">
                                                    <strong><span style=\"font-size: 40px;\">⚊</span></strong><br/><br/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">

                    <div class=\"mj-column-px-300 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px 30px 20px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:left;color:#000000;\">
                                                    <strong>Demande de contact ";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 209, $this->source); })()), "propriete", [], "any", false, false, false, 209), "titre", [], "any", false, false, false, 209), "html", null, true);
        echo "</div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:30px;text-align:center;\">
                    <div class=\"mj-column-per-60 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr><td align=\"center\"
                                                style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\"
                                                >Une nouvelle personne souhaiterais obtenir plus d'information à propos
                                                    du bien <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("propriete.show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 243, $this->source); })()), "propriete", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243), "slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 243, $this->source); })()), "propriete", [], "any", false, false, false, 243), "slug", [], "any", false, false, false, 243)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 243, $this->source); })()), "propriete", [], "any", false, false, false, 243), "titre", [], "any", false, false, false, 243), "html", null, true);
        echo "</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px;text-align:center;\">
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0 20px;text-align:center;\">
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"center\"
                                                style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                                <div style=\"font-family:Alice, Helvetica, Arial, sans-serif;font-size:26px;font-weight:400;line-height:30px;text-align:center;color:#000000;\">
                                                    Le contact
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-size:0px;padding:20px 0;word-break:break-word;\">
                                                <p style=\"border-top:solid 2px #000000;font-size:1;margin:0px auto;width:20px;\"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                                                <div>
                                                   <table style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">
                                                       <tr>
                                                           <td>Prénom :</td>
                                                           <td>";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 307, $this->source); })()), "firstname", [], "any", false, false, false, 307), "html", null, true);
        echo "</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Nom :</td>
                                                           <td>";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 311, $this->source); })()), "lastname", [], "any", false, false, false, 311), "html", null, true);
        echo "</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Téléphone :</td>
                                                           <td>";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 315, $this->source); })()), "phone", [], "any", false, false, false, 315), "html", null, true);
        echo "</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Email :</td>
                                                           <td>";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 319, $this->source); })()), "email", [], "any", false, false, false, 319), "html", null, true);
        echo "</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Message :</td>
                                                           <td>";
        // line 323
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 323, $this->source); })()), "message", [], "any", false, false, false, 323), "html", null, true));
        echo "</td>
                                                       </tr>
                                                   </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0 30px 30px;text-align:center;\">
                    <div class=\"mj-column-per-55 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 323,  380 => 319,  373 => 315,  366 => 311,  359 => 307,  290 => 243,  253 => 209,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>

<head>
    <title> Bonjour AgenceImmo </title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Alice\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
        @import url(https://fonts.googleapis.com/css?family=Alice);
    </style>

    <style type=\"text/css\">
        @media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }

            .mj-column-px-570 {
                width: 570px !important;
                max-width: 570px;
            }

            .mj-column-px-300 {
                width: 300px !important;
                max-width: 300px;
            }

            .mj-column-per-60 {
                width: 60% !important;
                max-width: 60%;
            }

            .mj-column-per-55 {
                width: 55% !important;
                max-width: 55%;
            }

            .mj-column-per-45 {
                width: 45% !important;
                max-width: 45%;
            }

            .mj-column-per-40 {
                width: 40% !important;
                max-width: 40%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width: 480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>

<body style=\"background-color:#EAE8E5;\">
<div style=\"background-color:#EAE8E5;\">

    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px 0 0 0;text-align:center;\">

                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"center\" style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                                       style=\"border-collapse:collapse;border-spacing:0px;\">
                                                    <tbody>
                                                    <tr>
                                                        <td style=\"width:600px;\"><img alt=\"\" height=\"auto\"
                                                                                      src=\"http://nimus.de/share/tpl-realestate/box-head.png\"
                                                                                      style=\"border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\"
                                                                                      width=\"600\"/></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;padding-top:40px;text-align:center;\">

                    <div class=\"mj-column-px-570 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px;word-break:break-word;\">
                                                <div style=\"font-family:Alice, Helvetica, Arial, sans-serif;font-size:36px;font-weight:400;line-height:40px;text-align:left;color:#1D83A8;\">
                                                    Mon agenceImmo
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:left;color:#000000;\">
                                                    <strong><span style=\"font-size: 40px;\">⚊</span></strong><br/><br/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">

                    <div class=\"mj-column-px-300 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0 20px 30px 20px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:left;color:#000000;\">
                                                    <strong>Demande de contact {{ contact.propriete.titre }}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:30px;text-align:center;\">
                    <div class=\"mj-column-per-60 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr><td align=\"center\"
                                                style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                                                <div style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\"
                                                >Une nouvelle personne souhaiterais obtenir plus d'information à propos
                                                    du bien <a href=\"{{ url('propriete.show', {id: contact.propriete.id, slug: contact.propriete.slug}) }}\">{{ contact.propriete.titre }}</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:20px;text-align:center;\">
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0 20px;text-align:center;\">
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                        <tr>
                                            <td align=\"center\"
                                                style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                                <div style=\"font-family:Alice, Helvetica, Arial, sans-serif;font-size:26px;font-weight:400;line-height:30px;text-align:center;color:#000000;\">
                                                    Le contact
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"font-size:0px;padding:20px 0;word-break:break-word;\">
                                                <p style=\"border-top:solid 2px #000000;font-size:1;margin:0px auto;width:20px;\"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\" style=\"font-size:0px;padding:0 40px;word-break:break-word;\">
                                                <div>
                                                   <table style=\"font-family:Roboto, Helvetica, Arial, sans-serif;font-size:14px;font-weight:400;line-height:21px;text-align:center;color:#000000;\">
                                                       <tr>
                                                           <td>Prénom :</td>
                                                           <td>{{ contact.firstname }}</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Nom :</td>
                                                           <td>{{ contact.lastname }}</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Téléphone :</td>
                                                           <td>{{ contact.phone }}</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Email :</td>
                                                           <td>{{ contact.email }}</td>
                                                       </tr>
                                                       <tr>
                                                           <td>Message :</td>
                                                           <td>{{ contact.message | nl2br }}</td>
                                                       </tr>
                                                   </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
               style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0 30px 30px;text-align:center;\">
                    <div class=\"mj-column-per-55 mj-outlook-group-fix\"
                         style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"vertical-align:top;padding:0px;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\"
                                           width=\"100%\">
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>", "emails/contact.html.twig", "/var/www/MonAgenceImmo/templates/emails/contact.html.twig");
    }
}
