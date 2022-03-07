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
class __TwigTemplate_f56eceb88566b86ab4038d04ff867ef14e503c0a56cb5c78250f5ef8edb5323f extends Template
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
        // line 32
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
                            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Cours de musique</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Emprunts instruments</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Autres</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Portfolio Grid-->
        <!--<section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div style=\"color: #cc1f1f;\" class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Threads</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
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
        <!-- About--
        <section class=\"page-section\" id=\"about\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">About</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/1.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>2009-2011</h4>
                                <h4 class=\"subheading\">Our Humble Beginnings</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/2.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>March 2011</h4>
                                <h4 class=\"subheading\">An Agency is Born</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/3.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>December 2015</h4>
                                <h4 class=\"subheading\">Transition to Full Service</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/4.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>July 2020</h4>
                                <h4 class=\"subheading\">Phase Two Expansion</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team--
        <section class=\"page-section bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"...\" />
                            <h4>Parveen Anand</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"...\" />
                            <h4>Diana Petersen</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"...\" />
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\"><p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <!--<section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!--
                <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                    <div class=\"row align-items-stretch mb-5\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <!-- Name input--
                                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                            </div>
                            <div class=\"form-group\">
                                <!-- Email address input--
                                <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" data-sb-validations=\"required,email\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                            </div>
                            <div class=\"form-group mb-md-0\">
                                <!-- Phone number input--
                                <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-textarea mb-md-0\">
                                <!-- Message input--
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" data-sb-validations=\"required\"></textarea>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted--
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center text-white mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message--
                    <!---->
                    <!-- This is what your users will see when there is--
                    <!-- an error submitting the form--
                    <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3\">Error sending message!</div></div>
                    <!-- Submit Button--
                    <div class=\"text-center\"><button class=\"btn btn-primary btn-xl text-uppercase disabled\" id=\"submitButton\" type=\"submit\">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
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
        // line 359
        $this->displayBlock('javascripts', $context, $blocks);
        // line 381
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

    // line 359
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 360
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
        <!-- Core theme JS-->
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>


        <script src=\"https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js\"></script>
        
        <script>
        particlesJS.load('particles-js', 'json/particles.json', 
            function() {

                console.log('callback - particles.js config loaded');
            }
        );
        </script>
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
        return array (  465 => 360,  458 => 359,  449 => 18,  439 => 11,  436 => 10,  429 => 9,  416 => 8,  407 => 381,  405 => 359,  75 => 32,  66 => 25,  64 => 24,  58 => 20,  56 => 9,  52 => 8,  43 => 1,);
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
                            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Cours de musique</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Emprunts instruments</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class=\"col-md-4\">
                        <span class=\"fa-stack fa-4x\">
                            <i style=\"color: #ff8800;\" class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
                        </span>
                        <h4 class=\"my-3\">Autres</h4>
                        <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Portfolio Grid-->
        <!--<section class=\"page-section bg-light\" id=\"portfolio\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 1--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div style=\"color: #cc1f1f;\" class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/1.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Threads</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 2--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/2.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Explore</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4\">
                        <!-- Portfolio item 3--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/3.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Finish</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-lg-0\">
                        <!-- Portfolio item 4--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/4.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Lines</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 mb-4 mb-sm-0\">
                        <!-- Portfolio item 5--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/5.jpg\" alt=\"...\" />
                            </a>
                            <div class=\"portfolio-caption\">
                                <div class=\"portfolio-caption-heading\">Southwest</div>
                                <div class=\"portfolio-caption-subheading text-muted\">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <!-- Portfolio item 6--
                        <div class=\"portfolio-item\">
                            <a class=\"portfolio-link\" data-bs-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>
                                </div>
                                <img class=\"img-fluid\" src=\"assets/img/portfolio/6.jpg\" alt=\"...\" />
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
        <!-- About--
        <section class=\"page-section\" id=\"about\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">About</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/1.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>2009-2011</h4>
                                <h4 class=\"subheading\">Our Humble Beginnings</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/2.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>March 2011</h4>
                                <h4 class=\"subheading\">An Agency is Born</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/3.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>December 2015</h4>
                                <h4 class=\"subheading\">Transition to Full Service</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\"><img class=\"rounded-circle img-fluid\" src=\"assets/img/about/4.jpg\" alt=\"...\" /></div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>July 2020</h4>
                                <h4 class=\"subheading\">Phase Two Expansion</h4>
                            </div>
                            <div class=\"timeline-body\"><p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team--
        <section class=\"page-section bg-light\" id=\"team\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/1.jpg\" alt=\"...\" />
                            <h4>Parveen Anand</h4>
                            <p class=\"text-muted\">Lead Designer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/2.jpg\" alt=\"...\" />
                            <h4>Diana Petersen</h4>
                            <p class=\"text-muted\">Lead Marketer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"team-member\">
                            <img class=\"mx-auto rounded-circle\" src=\"assets/img/team/3.jpg\" alt=\"...\" />
                            <h4>Larry Parker</h4>
                            <p class=\"text-muted\">Lead Developer</p>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-dark btn-social mx-2\" href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto text-center\"><p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <!--<section class=\"page-section\" id=\"contact\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                    <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!--
                <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                    <div class=\"row align-items-stretch mb-5\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <!-- Name input--
                                <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">A name is required.</div>
                            </div>
                            <div class=\"form-group\">
                                <!-- Email address input--
                                <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" data-sb-validations=\"required,email\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">An email is required.</div>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">Email is not valid.</div>
                            </div>
                            <div class=\"form-group mb-md-0\">
                                <!-- Phone number input--
                                <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" data-sb-validations=\"required\" />
                                <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">A phone number is required.</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group form-group-textarea mb-md-0\">
                                <!-- Message input--
                                <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" data-sb-validations=\"required\"></textarea>
                                <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted--
                    <div class=\"d-none\" id=\"submitSuccessMessage\">
                        <div class=\"text-center text-white mb-3\">
                            <div class=\"fw-bolder\">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message--
                    <!---->
                    <!-- This is what your users will see when there is--
                    <!-- an error submitting the form--
                    <div class=\"d-none\" id=\"submitErrorMessage\"><div class=\"text-center text-danger mb-3\">Error sending message!</div></div>
                    <!-- Submit Button--
                    <div class=\"text-center\"><button class=\"btn btn-primary btn-xl text-uppercase disabled\" id=\"submitButton\" type=\"submit\">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
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
        <script src=\"js/scripts.js\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>


        <script src=\"https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js\"></script>
        
        <script>
        particlesJS.load('particles-js', 'json/particles.json', 
            function() {

                console.log('callback - particles.js config loaded');
            }
        );
        </script>
        {% endblock %}
    </body>
</html>
", "Accueil/accueil.html.twig", "D:\\wamp64\\www\\EMusicK\\templates\\Accueil\\accueil.html.twig");
    }
}
