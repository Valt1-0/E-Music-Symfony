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
class __TwigTemplate_27a150d62b0b72099033d06720e1f7da1a45e55790334d08621b0b9f9df4b832 extends Template
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


            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
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
                                        <li>
                                               <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerLesInterventionsInstrument", ["idInstrument" => twig_get_attribute($this->env, $this->source, (isset($context["consInstru"]) || array_key_exists("consInstru", $context) ? $context["consInstru"] : (function () { throw new RuntimeError('Variable "consInstru" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">Intervention</a>
                                        </li>       
                                    </ul>
                                    
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
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
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

        echo "E-Music";
        
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

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 98
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
        return array (  230 => 98,  226 => 96,  219 => 95,  210 => 18,  200 => 11,  197 => 10,  190 => 9,  177 => 8,  169 => 105,  167 => 95,  136 => 67,  130 => 64,  124 => 61,  118 => 58,  112 => 55,  106 => 52,  94 => 44,  92 => 43,  88 => 42,  84 => 41,  65 => 24,  63 => 23,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
        <title>{% block title %}E-Music{% endblock %}</title>
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


            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
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
                                        <li>
                                               <a href=\"{{ path('listerLesInterventionsInstrument', {'idInstrument': consInstru.id})}}\">Intervention</a>
                                        </li>       
                                    </ul>
                                    
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
</html>", "Instrument/consulterInstrument.html.twig", "D:\\wamp64\\www\\EMusicK\\templates\\Instrument\\consulterInstrument.html.twig");
    }
}
