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

/* Instrument/listerClasse.html.twig */
class __TwigTemplate_a84159029b4b0d143f1d5bf9310f04a0afce841c325bcfdbf23983978ae69e6a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Instrument/listerClasse.html.twig"));

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
        $this->loadTemplate("Navigation/navigation.html.twig", "Instrument/listerClasse.html.twig", 23)->display($context);
        // line 24
        echo "
        <!-- Masthead-->
        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"masthead-heading\">Classe d'Instrument</div>
            </div>
        </header>

<!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div style=\"color: #cc1f1f;\" class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/1.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Clavier</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/2.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/3.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/4.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/5.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/6.jpg"), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Window</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; Your Website 2021</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        ";
        // line 360
        $this->displayBlock('javascripts', $context, $blocks);
        // line 370
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/Music.ico\" />
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

    // line 360
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 361
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 363
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
        return "Instrument/listerClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 363,  478 => 361,  471 => 360,  462 => 18,  452 => 10,  445 => 9,  432 => 8,  423 => 370,  421 => 360,  176 => 118,  158 => 103,  140 => 88,  122 => 73,  104 => 58,  86 => 43,  65 => 24,  63 => 23,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/Music.ico\" />
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
                <div class=\"masthead-heading\">Classe d'Instrument</div>
            </div>
        </header>

<!-- Portfolio Grid-->
        <section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div style=\"color: #cc1f1f;\" class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/1.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Clavier</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/2.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/3.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/4.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/5.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6-->
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/portfolio/6.jpg') }}\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Window</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class=\"footer py-4\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-4 text-lg-start\">Copyright &copy; Your Website 2021</div>
                    <div class=\"col-lg-4 my-3 my-lg-0\">
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                    <div class=\"col-lg-4 text-lg-end\">
                        <a class=\"link-dark text-decoration-none me-3\" href=\"#!\">Privacy Policy</a>
                        <a class=\"link-dark text-decoration-none\" href=\"#!\">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"close-modal\" data-bs-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"modal-body\">
                                    <!-- Project details-->
                                    <h2 class=\"text-uppercase\">Project Name</h2>
                                    <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class=\"list-inline\">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class=\"btn btn-primary btn-xl text-uppercase\" data-bs-dismiss=\"modal\" type=\"button\">
                                        <i class=\"fas fa-times me-1\"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</html>
", "Instrument/listerClasse.html.twig", "D:\\wamp64\\www\\EMusicK\\templates\\Instrument\\listerClasse.html.twig");
    }
}
