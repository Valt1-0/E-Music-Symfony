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

/* Cours/ajouterCours.html.twig */
class __TwigTemplate_1fc35613303e98cd832be066d13675184f41cee2a331fb32785d587384808c95 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cours/ajouterCours.html.twig"));

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
        $this->loadTemplate("Navigation/navigation.html.twig", "Cours/ajouterCours.html.twig", 24)->display($context);
        // line 25
        echo "        
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                
            ";
        // line 30
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", [0 => "_route"], "method", false, false, false, 30), "ajouterCours"))) {
            // line 31
            echo "
                    <div class=\"masthead-heading\">Ajout d'un Cours</div>
                    
            ";
        } else {
            // line 35
            echo "
               <div class=\"masthead-heading\">Modification d'un Cours</div>

            ";
        }
        // line 39
        echo "            </div>
        </header>
        <center>
        ";
        // line 43
        echo "        <br>
        <br>
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 45, $this->source); })()), 'form_start');
        echo "

\t\t\t    <div class=\"container\">
\t\t\t\t    <div class=\"row\">   
\t\t\t            <div class=\"col-lg-4 col-sm-6 mb-4 form-ajout\">
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 50, $this->source); })()), "libelle", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo " <br>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 51, $this->source); })()), "ageMini", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "<br>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 52, $this->source); })()), "ageMaxi", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo "<br>
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 53, $this->source); })()), "nbPlaceMaxi", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control"]]);
        echo "<br>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 54, $this->source); })()), "jour", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control"]]);
        echo "<br>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 55, $this->source); })()), "professeur", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        echo "<br>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 56, $this->source); })()), "typeInstrument", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                <br>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 58, $this->source); })()), "enregistrer", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control btn-primary"]]);
        echo "
                        </div>
                    </div>
                </div>
            


        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
        <br>
        <br>

        <!--Footer-->
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
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
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

        echo "E-Music - Ajout d'un cours";
        
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

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 88
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
        return "Cours/ajouterCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 88,  225 => 86,  218 => 85,  209 => 18,  199 => 11,  196 => 10,  189 => 9,  176 => 8,  168 => 95,  166 => 85,  143 => 65,  133 => 58,  128 => 56,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 51,  104 => 50,  96 => 45,  92 => 43,  87 => 39,  81 => 35,  75 => 31,  73 => 30,  66 => 25,  64 => 24,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
        <title>{% block title %}E-Music - Ajout d'un cours{% endblock %}</title>
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
                
            {% if app.request.get('_route') == 'ajouterCours' %}

                    <div class=\"masthead-heading\">Ajout d'un Cours</div>
                    
            {% else %}

               <div class=\"masthead-heading\">Modification d'un Cours</div>

            {% endif %}
            </div>
        </header>
        <center>
        {# templates/Cours/ajouterCours.html.twig #}
        <br>
        <br>
        {{ form_start(formCours) }}

\t\t\t    <div class=\"container\">
\t\t\t\t    <div class=\"row\">   
\t\t\t            <div class=\"col-lg-4 col-sm-6 mb-4 form-ajout\">
                                {{ form_row(formCours.libelle,{'attr' : {'class' : 'form-control'}}  ) }} <br>
                                {{ form_row(formCours.ageMini,{'attr' : {'class' : 'form-control'}}  ) }}<br>
                                {{ form_row(formCours.ageMaxi,{'attr' : {'class' : 'form-control'}}  ) }}<br>
                                {{ form_row(formCours.nbPlaceMaxi,{'attr' : {'class' : 'form-control'}}  ) }}<br>
                                {{ form_row(formCours.jour,{'attr' : {'class' : 'form-control'}}  ) }}<br>
                                {{ form_row(formCours.professeur,{'attr' : {'class' : 'form-control'}}  ) }}<br>
                                {{ form_row(formCours.typeInstrument,{'attr' : {'class' : 'form-control'}}  ) }}
                                <br>
                                {{ form_row(formCours.enregistrer,{'attr' : {'class' : 'form-control btn-primary'}}  ) }}
                        </div>
                    </div>
                </div>
            


        {{ form_end(formCours) }}
        <br>
        <br>

        <!--Footer-->
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
        <script src=\"{{ asset('js/scripts.js') }}\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
        {% endblock %}
    </body>
</html>", "Cours/ajouterCours.html.twig", "/var/www/html/EMusicK/templates/Cours/ajouterCours.html.twig");
    }
}
