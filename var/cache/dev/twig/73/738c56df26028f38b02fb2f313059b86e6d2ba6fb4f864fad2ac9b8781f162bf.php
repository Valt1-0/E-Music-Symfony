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

/* Instrument/consulterInstrument.html.twig */
class __TwigTemplate_95ef7f05a3432559b06d913635366c6a8f8abc0d3226b15ebf31beb41b556d6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Instrument/consulterInstrument.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body id=\"page-top\">

        ";
        // line 23
        $this->loadTemplate("Navigation/navigation.html.twig", "Instrument/consulterInstrument.html.twig", 23)->display($context);
        // line 24
        echo "
     
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"masthead-heading\"> Détails de l'instrument</div>
            </div>
        </header>


            <div class=\"test-dialog\">
                <div class=\"test-content\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"test-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 41, $this->source); })()), "intitule", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
                                    <p class=\"list-inline\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 42, $this->source); })()), "marque", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                                    ";
        // line 43
        $context["photo"] = (("assets/img/instru/" . twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)) . ".jpg");
        // line 44
        echo "                                    <img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 44, $this->source); })()))), "html", null, true);
        echo "\"  alt=\"...\" />
                                    <br>
                                    <a> Détails de l'instrument : </a>
                                    <br>
                                    <br>
                                    
                                    <ul class=\"list-inline\">
                                        <li>
                                                <strong>Nom : </strong>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 52, $this->source); })()), "intitule", [], "any", false, false, false, 52), "html", null, true);
        echo "
                                        </li>
                                        <li>
                                                <strong>Couleur : </strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 55, $this->source); })()), "couleurDominante", [], "any", false, false, false, 55), "html", null, true);
        echo "
                                        </li>    
                                        <li>
                                                <strong>Numéro de Série : </strong>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 58, $this->source); })()), "NumeroSerie", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                        </li>        
                                        <li>
                                                <strong>Utilisation de l'instrument : </strong>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 61, $this->source); })()), "utilisation", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                        </li>        
                                        <li>
                                                <strong>Prix d'Achat : </strong>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 64, $this->source); })()), "prixAchat", [], "any", false, false, false, 64), "html", null, true);
        echo "
                                        </li>
                                        <br>
                                        <a class=\"btn btn-cons btn-m\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerLesInterventionsInstrument", ["idInstrument" => twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">Intervention</a>
                                        <a class=\"btn btn-cons btn-m\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerLesAccessoiresInstrument", ["idInstrument" => twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">Accessoires</a>
                                        <a class=\"btn btn-primary btn-m\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierInstrument", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">Modifier</a>
                                        <button class=\"btn btn-sup btn-m\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete\">Supprimer</button>
                                    </ul>

                                        
                                        
                                        <div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" aria-labelledby=\"delete\" aria-hidden=\"true\">
\t\t\t                                <div class=\"modal-dialog\">
\t\t\t\t                            <div class=\"modal-content\">
\t\t\t\t\t                            <div class=\"modal-header\">
\t\t\t\t\t\t                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Instrument</h5>
\t\t\t\t\t\t                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t                            </div>
\t\t\t\t\t                            <div class=\"modal-body btn-m\" id=\"model-delete\">
                                                    Êtes-vous sûr de vouloir supprimer cet Instrument : ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 83, $this->source); })()), "intitule", [], "any", false, false, false, 83), "html", null, true);
        echo " ?
\t\t\t\t\t                            </div>
\t\t\t\t\t                            <div class=\"modal-footer\">
\t\t\t\t\t\t                            <button type=\"button\" class=\"btn btn-cons btn-m\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <a class=\"btn btn-sup btn-m\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerInstrument", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\">Supprimer</a>
\t\t\t\t\t                            </div>
\t\t\t\t                            </div>
                                            </div>
\t\t\t                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 


        <!--Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav, All right reserved.</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"https://github.com/KevinMalle/EMusic_Amine_Kevin_Matisse_Valentin\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-Music - Détails Instrument";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Music.ico"), "html", null, true);
        echo "\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Instrument/consulterInstrument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 120,  260 => 118,  253 => 117,  244 => 18,  234 => 11,  231 => 10,  224 => 9,  211 => 8,  203 => 127,  201 => 117,  168 => 87,  161 => 83,  144 => 69,  140 => 68,  136 => 67,  130 => 64,  124 => 61,  118 => 58,  112 => 55,  106 => 52,  94 => 44,  92 => 43,  88 => 42,  84 => 41,  65 => 24,  63 => 23,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>{% block title %}E-Music - Détails Instrument{% endblock %}</title>
        {% block stylesheets %}
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/Music.ico') }}\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body id=\"page-top\">

        {% include 'Navigation/navigation.html.twig' %}

     
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"masthead-heading\"> Détails de l'instrument</div>
            </div>
        </header>


            <div class=\"test-dialog\">
                <div class=\"test-content\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"test-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">{{consInstru.intitule}}</h2>
                                    <p class=\"list-inline\">{{consInstru.marque}}</p>
                                    {% set photo = 'assets/img/instru/'~ consInstru.id ~'.jpg' %}
                                    <img class=\"img-fluid\" src=\"{{ asset(photo | trans )}}\"  alt=\"...\" />
                                    <br>
                                    <a> Détails de l'instrument : </a>
                                    <br>
                                    <br>
                                    
                                    <ul class=\"list-inline\">
                                        <li>
                                                <strong>Nom : </strong>{{consInstru.intitule}}
                                        </li>
                                        <li>
                                                <strong>Couleur : </strong>{{consInstru.couleurDominante}}
                                        </li>    
                                        <li>
                                                <strong>Numéro de Série : </strong>{{consInstru.NumeroSerie}}
                                        </li>        
                                        <li>
                                                <strong>Utilisation de l'instrument : </strong>{{consInstru.utilisation}}
                                        </li>        
                                        <li>
                                                <strong>Prix d'Achat : </strong>{{consInstru.prixAchat}}
                                        </li>
                                        <br>
                                        <a class=\"btn btn-cons btn-m\" href=\"{{ path('listerLesInterventionsInstrument', {'idInstrument': consInstru.id})}}\">Intervention</a>
                                        <a class=\"btn btn-cons btn-m\" href=\"{{ path('listerLesAccessoiresInstrument', {'idInstrument': consInstru.id})}}\">Accessoires</a>
                                        <a class=\"btn btn-primary btn-m\" href=\"{{ path('modifierInstrument', {'id': consInstru.id} ) }}\">Modifier</a>
                                        <button class=\"btn btn-sup btn-m\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete\">Supprimer</button>
                                    </ul>

                                        
                                        
                                        <div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" aria-labelledby=\"delete\" aria-hidden=\"true\">
\t\t\t                                <div class=\"modal-dialog\">
\t\t\t\t                            <div class=\"modal-content\">
\t\t\t\t\t                            <div class=\"modal-header\">
\t\t\t\t\t\t                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Instrument</h5>
\t\t\t\t\t\t                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t                            </div>
\t\t\t\t\t                            <div class=\"modal-body btn-m\" id=\"model-delete\">
                                                    Êtes-vous sûr de vouloir supprimer cet Instrument : {{consInstru.intitule}} ?
\t\t\t\t\t                            </div>
\t\t\t\t\t                            <div class=\"modal-footer\">
\t\t\t\t\t\t                            <button type=\"button\" class=\"btn btn-cons btn-m\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <a class=\"btn btn-sup btn-m\" href=\"{{ path('supprimerInstrument', {'id': consInstru.id} ) }}\">Supprimer</a>
\t\t\t\t\t                            </div>
\t\t\t\t                            </div>
                                            </div>
\t\t\t                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 


        <!--Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav, All right reserved.</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"https://github.com/KevinMalle/EMusic_Amine_Kevin_Matisse_Valentin\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"{{ asset('js/scripts.js') }}\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        {% endblock %}
    </body>
</html>", "Instrument/consulterInstrument.html.twig", "D:\\Logiciel\\WampServer\\www\\EMusicK\\templates\\Instrument\\consulterInstrument.html.twig");
    }
}
