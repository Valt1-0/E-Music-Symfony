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

/* Accueil/accueil.html.twig */
class __TwigTemplate_b66bec085d13e5fc41d730cac226c1fa949849352f8c0ee293b367735f9f5b36 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Accueil/accueil.html.twig"));

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
        $this->loadTemplate("Navigation/navigation.html.twig", "Accueil/accueil.html.twig", 24)->display($context);
        // line 25
        echo "
        <!-- Masthead-->
        <div id=\"particles-js\"></div>
        <header class=\"masthead\">
                <div class=\"container\">
                    <div class=\"masthead-heading \">Bienvenue chez E-MUSIC</div>
                    
                    <!--<div class=\"masthead-subheading\">Pour en découvrir plus sur nous, cliquez sur le bouton ci-dessous : </div>
                    <a class=\"btn btn-primary btn-xl text-uppercase\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">À propos de nous </a>-->
                </div>
        </header>

        <!-- Services-->
        <section class=\"page-section\" id=\"services\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading\">Services</h2><br>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i> 
                            <i class=\"fas fa-users fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Cours de musique</h4>
                        <p class=\"text-muted\">Accédez à des cours de musique spécialisés, fait par des musiciens passionnés pour des musiciens passionnés.
                        Nos cours permettent à chacun de s'intégrer et d'apprendre en groupe.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-guitar fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Emprunts d'instruments</h4>
                        <p class=\"text-muted\">Empruntez des instruments pour apprendre chez nous, ou chez vous. E-Music offre une gamme d'instrument débordante, qui va à coup sûr 
                        vous faire trouver instrument à son joueur.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-globe fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Un grand nombre de fonctionnalités</h4>
                        <p class=\"text-muted\">E-Music propose plus que cela, découvrez l'intégralité de nos services en parcourant notre site Internet.</p>
                    </div>
                </div>
            </div>
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
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
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

        echo "E-Music - Accueil";
        
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

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
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
        return "Accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 92,  190 => 91,  181 => 18,  171 => 11,  168 => 10,  161 => 9,  148 => 8,  139 => 101,  137 => 91,  76 => 33,  66 => 25,  64 => 24,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
        <title>{% block title %}E-Music - Accueil{% endblock %}</title>
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
        <div id=\"particles-js\"></div>
        <header class=\"masthead\">
                <div class=\"container\">
                    <div class=\"masthead-heading \">Bienvenue chez E-MUSIC</div>
                    
                    <!--<div class=\"masthead-subheading\">Pour en découvrir plus sur nous, cliquez sur le bouton ci-dessous : </div>
                    <a class=\"btn btn-primary btn-xl text-uppercase\" href=\"{{ path('index')}}\">À propos de nous </a>-->
                </div>
        </header>

        <!-- Services-->
        <section class=\"page-section\" id=\"services\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading\">Services</h2><br>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i> 
                            <i class=\"fas fa-users fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Cours de musique</h4>
                        <p class=\"text-muted\">Accédez à des cours de musique spécialisés, fait par des musiciens passionnés pour des musiciens passionnés.
                        Nos cours permettent à chacun de s'intégrer et d'apprendre en groupe.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-guitar fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Emprunts d'instruments</h4>
                        <p class=\"text-muted\">Empruntez des instruments pour apprendre chez nous, ou chez vous. E-Music offre une gamme d'instrument débordante, qui va à coup sûr 
                        vous faire trouver instrument à son joueur.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-globe fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Un grand nombre de fonctionnalités</h4>
                        <p class=\"text-muted\">E-Music propose plus que cela, découvrez l'intégralité de nos services en parcourant notre site Internet.</p>
                    </div>
                </div>
            </div>
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
", "Accueil/accueil.html.twig", "/var/www/html/EMusicK/templates/Accueil/accueil.html.twig");
    }
}
