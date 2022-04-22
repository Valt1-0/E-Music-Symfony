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

/* Navigation/navigation.html.twig */
class __TwigTemplate_422d66b54e1e959c24908e1ffd5f4fccb75040977e3c3966c55c29ffdacd556f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Navigation/navigation.html.twig"));

        // line 1
        echo "             <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" /></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars ms-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav  ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a></li>

                        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "\t\t\t\t\t\t        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerClasseInstrument");
                echo "\">Instrument</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 17
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerEleve");
                echo "\">Eleve</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerPret");
                echo "\">Emprunt</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerCours");
                echo "\">Cours</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 23
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerProfesseur");
                echo "\">Professeur</a></li>
\t\t\t\t
\t\t\t\t                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerInscription");
                echo "\">Inscription</a></li>

                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROF")) {
                // line 28
                echo "
                                 <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerClasseInstrument");
                echo "\">Instrument</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerEleve");
                echo "\">Eleve</a></li>
                                
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerCours");
                echo "\">Cours</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerProfesseur");
                echo "\">Professeur</a></li>

                                

                            ";
            } else {
                // line 40
                echo "
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerClasseInstrument");
                echo "\">Instrument</a></li>
                            
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerCours");
                echo "\">Cours</a></li>


                            ";
            }
            // line 47
            echo "                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">D&#xE9;connexion</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterProfil");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></li>
                        ";
        } else {
            // line 50
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                        ";
        }
        // line 52
        echo "                    </ul>
                </div>
        </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Navigation/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  152 => 50,  145 => 48,  140 => 47,  133 => 43,  128 => 41,  125 => 40,  117 => 35,  112 => 33,  107 => 31,  102 => 29,  99 => 28,  93 => 25,  88 => 23,  83 => 21,  78 => 19,  73 => 17,  67 => 15,  64 => 14,  62 => 13,  57 => 11,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("             <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a href=\"{{ path('app_home') }}\"><img class=\"logo\" src=\"{{ asset('assets/img/logo.png') }}\" /></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars ms-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav  ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a></li>

                        {% if app.user %}
                            {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerClasseInstrument') }}\">Instrument</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerEleve') }}\">Eleve</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerPret') }}\">Emprunt</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerCours') }}\">Cours</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerProfesseur') }}\">Professeur</a></li>
\t\t\t\t
\t\t\t\t                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerInscription') }}\">Inscription</a></li>

                            {% elseif is_granted('ROLE_PROF')  %}

                                 <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerClasseInstrument') }}\">Instrument</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerEleve') }}\">Eleve</a></li>
                                
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerCours') }}\">Cours</a></li>

                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerProfesseur') }}\">Professeur</a></li>

                                

                            {% else %}

                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerClasseInstrument') }}\">Instrument</a></li>
                            
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerCours') }}\">Cours</a></li>


                            {% endif %}
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_logout') }}\">D&#xE9;connexion</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('consulterProfil') }}\">{{ app.user.username }}</a></li>
                        {% else %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a></li>
                        {% endif %}
                    </ul>
                </div>
        </nav>", "Navigation/navigation.html.twig", "D:\\Logiciel\\WampServer\\www\\EMusicK\\templates\\Navigation\\navigation.html.twig");
    }
}
