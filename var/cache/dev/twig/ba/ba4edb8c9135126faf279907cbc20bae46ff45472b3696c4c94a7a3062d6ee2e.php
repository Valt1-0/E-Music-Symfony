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

/* Professeur/ajouterProfesseur.html.twig */
class __TwigTemplate_80abbe1fdb54c2ba5c12309b9ce5630b3322dc866c5d1a12b6af3b9761325b0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Professeur/ajouterProfesseur.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body id=\"page-top\">


        ";
        // line 23
        $this->loadTemplate("Navigation/navigation.html.twig", "Professeur/ajouterProfesseur.html.twig", 23)->display($context);
        // line 24
        echo "        
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                
            ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), "ajouterProfesseur"))) {
            // line 30
            echo "
                    <title>E-Music - Ajout d'un professeur</title>
                    <div class=\"masthead-heading\">Ajout d'un Professeur</div>
                    
            ";
        } else {
            // line 35
            echo "                    <title>E-Music - Modification d'un professeur</title>
                    <div class=\"masthead-heading\">Modification d'un Professeur</div>
            ";
        }
        // line 38
        echo "            </div>
        </header>
        <center>
        ";
        // line 42
        echo "        <br>
        <br>
        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 44, $this->source); })()), 'form_start');
        echo "

\t\t\t    <div class=\"container\">
\t\t\t\t    <div class=\"row\">   
\t\t\t            <div class=\"col-lg-4 col-sm-6 mb-4 form-ajout\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        echo " 
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                <br>
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 53, $this->source); })()), "enregistrer", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control btn-primary"]]);
        echo "
                        </div>
                    </div>
                </div>
            


        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfesseur"]) || array_key_exists("formProfesseur", $context) ? $context["formProfesseur"] : (function () { throw new RuntimeError('Variable "formProfesseur" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

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
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Music.ico"), "html", null, true);
        echo "\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 81
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
        return "Professeur/ajouterProfesseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 81,  189 => 79,  182 => 78,  173 => 17,  163 => 10,  160 => 9,  153 => 8,  145 => 88,  143 => 78,  122 => 60,  112 => 53,  107 => 51,  103 => 50,  99 => 49,  91 => 44,  87 => 42,  82 => 38,  77 => 35,  70 => 30,  68 => 29,  61 => 24,  59 => 23,  53 => 19,  51 => 8,  42 => 1,);
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
                
            {% if app.request.get('_route') == 'ajouterProfesseur' %}

                    <title>E-Music - Ajout d'un professeur</title>
                    <div class=\"masthead-heading\">Ajout d'un Professeur</div>
                    
            {% else %}
                    <title>E-Music - Modification d'un professeur</title>
                    <div class=\"masthead-heading\">Modification d'un Professeur</div>
            {% endif %}
            </div>
        </header>
        <center>
        {# templates/Professeur/ajouterProfesseur.html.twig #}
        <br>
        <br>
        {{ form_start(formProfesseur) }}

\t\t\t    <div class=\"container\">
\t\t\t\t    <div class=\"row\">   
\t\t\t            <div class=\"col-lg-4 col-sm-6 mb-4 form-ajout\">
                                {{ form_row(formProfesseur.nom,{'attr' : {'class' : 'form-control'}}  ) }} 
                                {{ form_row(formProfesseur.prenom,{'attr' : {'class' : 'form-control'}}  ) }}
                                {{ form_row(formProfesseur.email,{'attr' : {'class' : 'form-control'}}  ) }}
                                <br>
                                {{ form_row(formProfesseur.enregistrer,{'attr' : {'class' : 'form-control btn-primary'}}  ) }}
                        </div>
                    </div>
                </div>
            


        {{ form_end(formProfesseur) }}

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
</html>", "Professeur/ajouterProfesseur.html.twig", "D:\\Logiciel\\WampServer\\www\\EMusicK\\templates\\Professeur\\ajouterProfesseur.html.twig");
    }
}
