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

/* Instrument/listerAllInstrument.html.twig */
class __TwigTemplate_a95944062f7c7ecd391ee118a4371ad62737ebb04d639d3d2073ac3636770a1c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Instrument/listerAllInstrument.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "\t</head>
\t<body id=\"page-top\">

\t\t";
        // line 27
        $this->loadTemplate("Navigation/navigation.html.twig", "Instrument/listerAllInstrument.html.twig", 27)->display($context);
        // line 28
        echo "
\t\t<!-- Masthead-->
\t\t<header class=\"masthead\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"masthead-heading\">Liste de tout les Instruments</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- Portfolio Grid-->
\t\t<section class=\"page-section bg-light\" id=\"portfolio\">
\t\t\t<div class=\"container\">
\t\t\t\t<input type=\"text\" id=\"search_instrument\" placeholder=\" Recherche ... \" onkeyup=\"search_instrument()\" class=\"search\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 40
        $context["i"] = 1;
        // line 41
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pAllInstrument"]) || array_key_exists("pAllInstrument", $context) ? $context["pAllInstrument"] : (function () { throw new RuntimeError('Variable "pAllInstrument" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 42
            echo "\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 42, $this->source); })()) + 1);
            // line 43
            echo "\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 mb-4\">
\t\t\t\t\t\t\t<!-- Portfolio item 1-->
\t\t\t\t\t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t\t";
            // line 46
            $context["photo"] = (("assets/img/instru/" . twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 46)) . ".jpg");
            // line 47
            echo "\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["photo"]) || array_key_exists("photo", $context) ? $context["photo"] : (function () { throw new RuntimeError('Variable "photo" does not exist.', 47, $this->source); })()))), "html", null, true);
            echo "\" alt=\"...\"/>
\t\t\t\t\t\t\t\t<ul class=\"portfolio-caption\" style=\"list-style-type : none;\">
\t\t\t\t\t\t\t\t\t<li><div class=\"portfolio-caption-heading instrument\" id='instrument_";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "intitule", [], "any", false, false, false, 49), "html", null, true);
            echo "</div></li>
\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t<li><a class=\"btn btn-cons btn-m\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterInstrument", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Consulter</a> <a class=\"btn btn-primary btn-m\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierInstrument", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Modifier</a></li>
\t\t\t\t\t\t\t\t\t<!--<a class=\"btn btn-sup btn-m\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerInstrument", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete\">Supprimer</a>-->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Aucun Instrument n'a été trouvé.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t</div>
\t\t\t\t<a class=\"btn btn-primary btn-l\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerClasseInstrument");
        echo "\">Précédent</a>
\t\t\t</div>
\t\t</section>



\t\t<!--Footer-->
\t\t<footer class=\"footer py-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav (Amine El Hankouri, Kevin Malle, Valentin Lainé, Matisse Chaillou), All right reserved.</div>
\t\t\t\t\t<div class=\"col-lg-4 my-3 my-lg-0\">
\t\t\t\t\t\t<a class=\"btn btn-dark btn-social mx-2\" href=\"https://github.com/KevinMalle/EMusic_Amine_Kevin_Matisse_Valentin\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 text-lg-end\">
\t\t\t\t\t\t<a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
\t\t\t\t\t\t<a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- Bootstrap core JS-->
\t\t";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-Music - Liste Instruments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t<!-- Favicon-->
\t\t\t<link
\t\t\trel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Music.ico"), "html", null, true);
        echo "\"/>
\t\t\t<!-- Font Awesome icons (free version)-->
\t\t\t<script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Google fonts-->
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t\t<!-- Core theme CSS (includes Bootstrap)-->
\t\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "            <script>
                window.onload = () -> {

                    let modal = new Modal('#validationSuppression');

                }
            </script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"js/bootstrap.min.js\"></script>
\t\t\t<script src=\"js/bootstrap.js\"></script>
\t\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Core theme JS-->
\t\t\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
\t\t\t<!-- * *                               SB Forms JS                               * *-->
\t\t\t<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
\t\t\t<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"> </script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Instrument/listerAllInstrument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 100,  242 => 98,  230 => 88,  223 => 87,  214 => 22,  203 => 14,  199 => 12,  192 => 11,  179 => 9,  170 => 108,  168 => 87,  141 => 63,  138 => 62,  129 => 58,  119 => 53,  113 => 52,  105 => 49,  99 => 47,  97 => 46,  92 => 43,  89 => 42,  83 => 41,  81 => 40,  67 => 28,  65 => 27,  60 => 24,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\t{% block title %}E-Music - Liste Instruments{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<!-- Favicon-->
\t\t\t<link
\t\t\trel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/Music.ico') }}\"/>
\t\t\t<!-- Font Awesome icons (free version)-->
\t\t\t<script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Google fonts-->
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t\t<!-- Core theme CSS (includes Bootstrap)-->
\t\t\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
\t\t{% endblock %}
\t</head>
\t<body id=\"page-top\">

\t\t{% include 'Navigation/navigation.html.twig' %}

\t\t<!-- Masthead-->
\t\t<header class=\"masthead\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"masthead-heading\">Liste de tout les Instruments</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- Portfolio Grid-->
\t\t<section class=\"page-section bg-light\" id=\"portfolio\">
\t\t\t<div class=\"container\">
\t\t\t\t<input type=\"text\" id=\"search_instrument\" placeholder=\" Recherche ... \" onkeyup=\"search_instrument()\" class=\"search\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t{% for a in pAllInstrument %}
\t\t\t\t\t\t{% set i = i + 1 %}
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-6 mb-4\">
\t\t\t\t\t\t\t<!-- Portfolio item 1-->
\t\t\t\t\t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t\t{% set photo = 'assets/img/instru/'~ a.id ~'.jpg' %}
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset(photo | trans )}}\" alt=\"...\"/>
\t\t\t\t\t\t\t\t<ul class=\"portfolio-caption\" style=\"list-style-type : none;\">
\t\t\t\t\t\t\t\t\t<li><div class=\"portfolio-caption-heading instrument\" id='instrument_{{i}}'>{{a.intitule}}</div></li>
\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t<li><a class=\"btn btn-cons btn-m\" href=\"{{ path('consulterInstrument', {'id': a.id} ) }}\">Consulter</a> <a class=\"btn btn-primary btn-m\" href=\"{{ path('modifierInstrument', {'id': a.id} ) }}\">Modifier</a></li>
\t\t\t\t\t\t\t\t\t<!--<a class=\"btn btn-sup btn-m\" href=\"{{ path('supprimerInstrument', {'id': a.id} ) }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-delete\">Supprimer</a>-->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Aucun Instrument n'a été trouvé.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<a class=\"btn btn-primary btn-l\" href=\"{{ path('listerClasseInstrument')}}\">Précédent</a>
\t\t\t</div>
\t\t</section>



\t\t<!--Footer-->
\t\t<footer class=\"footer py-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav (Amine El Hankouri, Kevin Malle, Valentin Lainé, Matisse Chaillou), All right reserved.</div>
\t\t\t\t\t<div class=\"col-lg-4 my-3 my-lg-0\">
\t\t\t\t\t\t<a class=\"btn btn-dark btn-social mx-2\" href=\"https://github.com/KevinMalle/EMusic_Amine_Kevin_Matisse_Valentin\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 text-lg-end\">
\t\t\t\t\t\t<a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
\t\t\t\t\t\t<a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- Bootstrap core JS-->
\t\t{% block javascripts %}
            <script>
                window.onload = () -> {

                    let modal = new Modal('#validationSuppression');

                }
            </script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"js/bootstrap.min.js\"></script>
\t\t\t<script src=\"js/bootstrap.js\"></script>
\t\t\t<script src=\"{{ asset('js/search.js') }}\"></script>
\t\t\t<!-- Core theme JS-->
\t\t\t<script src=\"{{ asset('js/scripts.js') }}\"></script>
\t\t\t<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
\t\t\t<!-- * *                               SB Forms JS                               * *-->
\t\t\t<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
\t\t\t<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"> </script>
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "Instrument/listerAllInstrument.html.twig", "D:\\Logiciel\\WampServer\\www\\EMusicK\\templates\\Instrument\\listerAllInstrument.html.twig");
    }
}
