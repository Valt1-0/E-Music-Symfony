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
class __TwigTemplate_946a475e5085a023344cd055833fa9ee2a20dfbb519f0f2da75e43082bd6b3cf extends Template
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
        echo "        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" /></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars ms-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerClasseInstrument");
        echo "\">Instrument</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Emprunt</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>

                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">D&#xE9;connexion</a></li>
                        ";
        } else {
            // line 28
            echo "                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>
                        ";
        }
        // line 30
        echo "
                    </ul>
                </div>
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
        return array (  91 => 30,  85 => 28,  79 => 26,  77 => 25,  62 => 13,  57 => 11,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <a href=\"{{ path('index') }}\"><img class=\"logo\" src=\"{{ asset('assets/img/logo.png') }}\" /></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    Menu
                    <i class=\"fas fa-bars ms-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ms-auto py-4 py-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('index') }}\">Accueil</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('listerClasseInstrument') }}\">Instrument</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#services\">Services</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#portfolio\">Emprunt</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#team\">Team</a></li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#contact\">Contact</a></li>

                        {% if app.user %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_logout') }}\">D&#xE9;connexion</a></li>
                        {% else %}
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a></li>
                        {% endif %}

                    </ul>
                </div>
            </div>
        </nav>", "Navigation/navigation.html.twig", "D:\\wamp64\\www\\EMusicK\\templates\\Navigation\\navigation.html.twig");
    }
}
