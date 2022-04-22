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

/* Eleve/listerEleve.html.twig */
class __TwigTemplate_447f866cbcf42d560887b4b42a70935827eb549222e11261425451eb268f2ef2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Eleve/listerEleve.html.twig"));

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
        // line 24
        $this->loadTemplate("Navigation/navigation.html.twig", "Eleve/listerEleve.html.twig", 24)->display($context);
        // line 25
        echo "        
        <!-- Masthead-->
        <header class=\"masthead\">
                <div class=\"container\">
                    <div class=\"masthead-heading \">Liste des Elèves</div>
                </div>
        </header>
        
        
        <section>
        <div class=\"tbl-header\">
            <table class=\"table-striped\">
                <thead>
                    <tr><th>Nom Responsable</th>
                        <th>Prenom Responsable</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de Naissance</th>
                        <th>Rue</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Fonctions</th>

                    </tr>
                </thead>
            </table>
        </div>
         <FONT face=\"arial\">
        <div class=\"tbl-content\">
            <table class=\"table-striped\">
                <tbody>            
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pEleves"]) || array_key_exists("pEleves", $context) ? $context["pEleves"] : (function () { throw new RuntimeError('Variable "pEleves" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 57
            echo "                    <tr :nth-of-type> 
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["el"], "responsable", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["el"], "responsable", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "prenom", [], "any", false, false, false, 61), "html", null, true);
            echo "</td> 
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "dateNaiss", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true);
            echo "</td> 
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "rue", [], "any", false, false, false, 63), "html", null, true);
            echo "</td> 
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "ville", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "codePostal", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Eleve_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["el"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')\">Supprimer un élève</a>|
                            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierEleve", ["id" => twig_get_attribute($this->env, $this->source, $context["el"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Modifier l'élève</a> </td>
                        </FONT>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "\t\t            <tr>
\t\t                <td>Aucun etudiant n'a été trouvé.</td>
\t\t            </tr>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
        </div>
        <br>   
         <a class=\"btn btn-add btn-l\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterEleve");
        echo "\">Ajouter un élève </a>
         <a class=\"btn btn-primary btn-l\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Précédent</a>         
    </section>

 

        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav (Amine El Hankouri, Kevin Malle, Valentin Lainé, Matisse Chaillou), All right reserved.</div>
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
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-Music - Elèves";
        
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

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
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
        return "Eleve/listerEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 102,  248 => 101,  239 => 18,  229 => 11,  226 => 10,  219 => 9,  206 => 8,  197 => 111,  195 => 101,  171 => 80,  167 => 79,  161 => 75,  152 => 71,  143 => 67,  139 => 66,  135 => 65,  131 => 64,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  104 => 57,  99 => 56,  66 => 25,  64 => 24,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
        <title>{% block title %}E-Music - Elèves{% endblock %}</title>
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
                    <div class=\"masthead-heading \">Liste des Elèves</div>
                </div>
        </header>
        
        
        <section>
        <div class=\"tbl-header\">
            <table class=\"table-striped\">
                <thead>
                    <tr><th>Nom Responsable</th>
                        <th>Prenom Responsable</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de Naissance</th>
                        <th>Rue</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Fonctions</th>

                    </tr>
                </thead>
            </table>
        </div>
         <FONT face=\"arial\">
        <div class=\"tbl-content\">
            <table class=\"table-striped\">
                <tbody>            
                {% for el in pEleves %}
                    <tr :nth-of-type> 
                        <td>{{ el.responsable.nom}}</td>
                        <td>{{ el.responsable.prenom}}</td>
                        <td>{{ el.nom}}</td>
                        <td>{{ el.prenom }}</td> 
                        <td>{{ el.dateNaiss|date('d/m/Y') }}</td> 
                        <td>{{ el.rue}}</td> 
                        <td>{{el.ville}}</td>
                        <td>{{ el.codePostal}}</td>
                        <td><a href=\"{{ path('Eleve_delete', {'id':el.id}) }}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')\">Supprimer un élève</a>|
                            <a href=\"{{ path('modifierEleve', {'id': el.id} ) }}\">Modifier l'élève</a> </td>
                        </FONT>
                    </tr>
                {% else %}
\t\t            <tr>
\t\t                <td>Aucun etudiant n'a été trouvé.</td>
\t\t            </tr>
\t            {% endfor %}
                </tbody>
            </table>
        </div>
        <br>   
         <a class=\"btn btn-add btn-l\" href=\"{{ path('ajouterEleve')}}\">Ajouter un élève </a>
         <a class=\"btn btn-primary btn-l\" href=\"{{ path('index')}}\">Précédent</a>         
    </section>

 

        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; 2021 Kamikav (Amine El Hankouri, Kevin Malle, Valentin Lainé, Matisse Chaillou), All right reserved.</div>
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
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        {% endblock %}
    </body>
</html>
", "Eleve/listerEleve.html.twig", "D:\\Logiciel\\WampServer\\www\\EMusicK\\templates\\Eleve\\listerEleve.html.twig");
    }
}
