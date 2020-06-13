<?php

/* Cabinet/home.html.twig */
class __TwigTemplate_1633abea1c054e69503bf2bc730fc83365f4f5b00a868b4b9cb58bff28f77e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8233898078dd819f676c1b49aef210b7d342bd84ec92bffcf578533999bce7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8233898078dd819f676c1b49aef210b7d342bd84ec92bffcf578533999bce7f9->enter($__internal_8233898078dd819f676c1b49aef210b7d342bd84ec92bffcf578533999bce7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/home.html.twig"));

        $__internal_63d8f1584514aaa9f064a278ab66b5c92334dd4b7ee9eec368631ee173a69a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d8f1584514aaa9f064a278ab66b5c92334dd4b7ee9eec368631ee173a69a6e->enter($__internal_63d8f1584514aaa9f064a278ab66b5c92334dd4b7ee9eec368631ee173a69a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

  <head>

  <style>
    C1 { color: #000000; }
    C2 { color: #FFFFFF; }
  </style>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../icon.ico\">

    <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icon.ico"), "html", null, true);
        echo "\" />

    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/full-slider.css"), "html", null, true);
        echo "\" >
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-datetimepicker-standalone.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-light navbar-expand-lg fixed-top\" style=\"background-color: #cccccc;\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\"><img src=\"../../../../icon.ico\"> Cabinet Médicale </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">

            ";
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 49
            echo "             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/\">Accueil
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/apropos\">À-propos</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Contact</a> 
            </li>                  
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"/PrendreRDV\"><i class=\"far fa-calendar-check\"> Rendez-vous</i></a>
              <a class=\"dropdown-item\" href=\"/voirmafiche\"><i class=\"far fa-file-alt\"> Ma fiche</i></a>
            </div>
            </li> 

            ";
        } else {
            // line 69
            echo "
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/\">Accueil
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/apropos\">À-propos</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Contact</a> 
            </li>

            ";
        }
        // line 83
        echo "
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li>
          <C1>
            ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                <h5><i class=\"fas fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
                <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-secondary\"> Déconnexion <i class=\"fas fa-sign-out-alt\"></i>
                </a></h5>
            ";
        } else {
            // line 97
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-secondary\">
                  S'inscrire
                </a>
            ";
        }
        // line 102
        echo "          </C1> 
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url(../../../../slide1.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Actualité à votre main</h3>
              <p>vérifiez votre processus avec les détails</p>
            </C1>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(../../../../slide2.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Services clients</h3>
              <p>Une équipe proffesionel à votre service</p>
            </C1>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(../../../../slide3.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Portabilité</h3>
              <p>réservez un rendez-vous de n'importe où</p>
            </C1>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class=\"py-5\">
      <div class=\"container\">
          <br></br>
        <p><h2><center>Profitez de nos services spécialement conçus pour votre détente</center><h2></p>
      </div>
    </section>
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
          ";
        // line 164
        $this->displayBlock('left', $context, $blocks);
        // line 167
        echo "          </div>
          <div class=\"col-md-4\">
          ";
        // line 169
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "          </div>
          <div class=\"col-md-4\">
            ";
        // line 174
        $this->displayBlock('right', $context, $blocks);
        // line 177
        echo "          </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"py-5\" style=\"background-color: #cccccc;\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <center>
            <h6><span class=\"copyright\">Copyright &copy; Labiadh&Miledi company 2020</span></h6>
          </center>
          </div>
          <div class=\"col-md-4\">
            <center><C1>
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://twitter.com\"><i class=\"fab fa-twitter\"></i></a><h5>
              </li>
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://facebook.com\"><i class=\"fab fa-facebook-f\"></i></a></h5>
              </li>
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://linkedin.com\"><i class=\"fab fa-linkedin-in\"></i></a><h5>
              </li>
            </ul>
          </C1></center>
          </div>
          <div class=\"col-md-4\">
            <center>
            <ul class=\"list-inline quicklinks\">
              <li class=\"list-inline-item\">
                <h6>Privacy Policy</h6>
              </li>
              <li class=\"list-inline-item\">
                <h6>Terms of Use</h6>
              </li>
            </ul>
          </center>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"../../assets/js/vendor/popper.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"../../assets/js/vendor/holder.min.js\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
     ";
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 231
        echo "  </body>
</html>";
        
        $__internal_8233898078dd819f676c1b49aef210b7d342bd84ec92bffcf578533999bce7f9->leave($__internal_8233898078dd819f676c1b49aef210b7d342bd84ec92bffcf578533999bce7f9_prof);

        
        $__internal_63d8f1584514aaa9f064a278ab66b5c92334dd4b7ee9eec368631ee173a69a6e->leave($__internal_63d8f1584514aaa9f064a278ab66b5c92334dd4b7ee9eec368631ee173a69a6e_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_86213f003d79394e98374c8fb8232c58eefd8e07f02bc0697625623e05497302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86213f003d79394e98374c8fb8232c58eefd8e07f02bc0697625623e05497302->enter($__internal_86213f003d79394e98374c8fb8232c58eefd8e07f02bc0697625623e05497302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0f8593ecec017d4c7537f2079e020ac5eb3bf7e453a04f89cb612856255b2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f8593ecec017d4c7537f2079e020ac5eb3bf7e453a04f89cb612856255b2cf->enter($__internal_c0f8593ecec017d4c7537f2079e020ac5eb3bf7e453a04f89cb612856255b2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cabinet Medicale";
        
        $__internal_c0f8593ecec017d4c7537f2079e020ac5eb3bf7e453a04f89cb612856255b2cf->leave($__internal_c0f8593ecec017d4c7537f2079e020ac5eb3bf7e453a04f89cb612856255b2cf_prof);

        
        $__internal_86213f003d79394e98374c8fb8232c58eefd8e07f02bc0697625623e05497302->leave($__internal_86213f003d79394e98374c8fb8232c58eefd8e07f02bc0697625623e05497302_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99b46384db19ad68d20377c8fd5765f8765490be6ec299b167f04d8295149f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b46384db19ad68d20377c8fd5765f8765490be6ec299b167f04d8295149f36->enter($__internal_99b46384db19ad68d20377c8fd5765f8765490be6ec299b167f04d8295149f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_249be27c606186896483cba0d1e3c6dc2c7be0448b06be2219b953536256a538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249be27c606186896483cba0d1e3c6dc2c7be0448b06be2219b953536256a538->enter($__internal_249be27c606186896483cba0d1e3c6dc2c7be0448b06be2219b953536256a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_249be27c606186896483cba0d1e3c6dc2c7be0448b06be2219b953536256a538->leave($__internal_249be27c606186896483cba0d1e3c6dc2c7be0448b06be2219b953536256a538_prof);

        
        $__internal_99b46384db19ad68d20377c8fd5765f8765490be6ec299b167f04d8295149f36->leave($__internal_99b46384db19ad68d20377c8fd5765f8765490be6ec299b167f04d8295149f36_prof);

    }

    // line 164
    public function block_left($context, array $blocks = array())
    {
        $__internal_7fbb971175465c3b0cbdcd531c4b9b0bb8ae1e062d546748161791d7c8a8d134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb971175465c3b0cbdcd531c4b9b0bb8ae1e062d546748161791d7c8a8d134->enter($__internal_7fbb971175465c3b0cbdcd531c4b9b0bb8ae1e062d546748161791d7c8a8d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_6527f3de9d6d883aa78a63a9e82e6a5ddf08387ece95f33f44b6e184b006b396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6527f3de9d6d883aa78a63a9e82e6a5ddf08387ece95f33f44b6e184b006b396->enter($__internal_6527f3de9d6d883aa78a63a9e82e6a5ddf08387ece95f33f44b6e184b006b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 165
        echo "            <div><h3><i class=\"fas fa-calendar-check\"></i> Rendez-vous</h3><p>Prenez votre rendez-vous depuis n'importe quel place et profitez de notre guidage bien automatisé </br></br></p><img src=\"../../../../pr.jpg\", class=\"img-thumbnail\" ></div>
          ";
        
        $__internal_6527f3de9d6d883aa78a63a9e82e6a5ddf08387ece95f33f44b6e184b006b396->leave($__internal_6527f3de9d6d883aa78a63a9e82e6a5ddf08387ece95f33f44b6e184b006b396_prof);

        
        $__internal_7fbb971175465c3b0cbdcd531c4b9b0bb8ae1e062d546748161791d7c8a8d134->leave($__internal_7fbb971175465c3b0cbdcd531c4b9b0bb8ae1e062d546748161791d7c8a8d134_prof);

    }

    // line 169
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e809c9996ac43bc7307305972e87782437d1bead86e8cdd65231ca77db37419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e809c9996ac43bc7307305972e87782437d1bead86e8cdd65231ca77db37419->enter($__internal_7e809c9996ac43bc7307305972e87782437d1bead86e8cdd65231ca77db37419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2645b0a76951716daa7f4730edae449c397b26bcaa3b11c01ccc1ff73f1d34f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2645b0a76951716daa7f4730edae449c397b26bcaa3b11c01ccc1ff73f1d34f8->enter($__internal_2645b0a76951716daa7f4730edae449c397b26bcaa3b11c01ccc1ff73f1d34f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 170
        echo "            <div><h3><i class=\"fas fa-user-md\"></i> Consultation</h3><p>Consultez votre fiche médicale et le workflow de votre traitement et tous les informations personnels en toutes sécurité<br></br></p><img src=\"../../../../fm.jpg\", class=\"img-thumbnail\" ></div>
          ";
        
        $__internal_2645b0a76951716daa7f4730edae449c397b26bcaa3b11c01ccc1ff73f1d34f8->leave($__internal_2645b0a76951716daa7f4730edae449c397b26bcaa3b11c01ccc1ff73f1d34f8_prof);

        
        $__internal_7e809c9996ac43bc7307305972e87782437d1bead86e8cdd65231ca77db37419->leave($__internal_7e809c9996ac43bc7307305972e87782437d1bead86e8cdd65231ca77db37419_prof);

    }

    // line 174
    public function block_right($context, array $blocks = array())
    {
        $__internal_695adab6eccb53ea0c7d9773d10e97a66495fce7411a0b3e6df09e98911a312a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695adab6eccb53ea0c7d9773d10e97a66495fce7411a0b3e6df09e98911a312a->enter($__internal_695adab6eccb53ea0c7d9773d10e97a66495fce7411a0b3e6df09e98911a312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_57a2fd3e27c8992d0aed7653c63afa0d90e5e027dca40d85485adc4c48114509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a2fd3e27c8992d0aed7653c63afa0d90e5e027dca40d85485adc4c48114509->enter($__internal_57a2fd3e27c8992d0aed7653c63afa0d90e5e027dca40d85485adc4c48114509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 175
        echo "              <div><h3><i class=\"fas fa-headset\"></i> Service Client</h3><p>Profitez de notre service clients pour trouver les réponses à toutes vos questions <br></br></br></p><img src=\"../../../../sc.jpg\", class=\"img-thumbnail\" ></div>
            ";
        
        $__internal_57a2fd3e27c8992d0aed7653c63afa0d90e5e027dca40d85485adc4c48114509->leave($__internal_57a2fd3e27c8992d0aed7653c63afa0d90e5e027dca40d85485adc4c48114509_prof);

        
        $__internal_695adab6eccb53ea0c7d9773d10e97a66495fce7411a0b3e6df09e98911a312a->leave($__internal_695adab6eccb53ea0c7d9773d10e97a66495fce7411a0b3e6df09e98911a312a_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a70fb2d8ee2e88ae45bbf63e2ce29dd15d55009d096c5e2cd7237c8f1542cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a70fb2d8ee2e88ae45bbf63e2ce29dd15d55009d096c5e2cd7237c8f1542cd0->enter($__internal_7a70fb2d8ee2e88ae45bbf63e2ce29dd15d55009d096c5e2cd7237c8f1542cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95aec1e48eefd2760259cf4125b2574299ed83c81a18ffed058bbcf9bfd82ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aec1e48eefd2760259cf4125b2574299ed83c81a18ffed058bbcf9bfd82ab4->enter($__internal_95aec1e48eefd2760259cf4125b2574299ed83c81a18ffed058bbcf9bfd82ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "     ";
        
        $__internal_95aec1e48eefd2760259cf4125b2574299ed83c81a18ffed058bbcf9bfd82ab4->leave($__internal_95aec1e48eefd2760259cf4125b2574299ed83c81a18ffed058bbcf9bfd82ab4_prof);

        
        $__internal_7a70fb2d8ee2e88ae45bbf63e2ce29dd15d55009d096c5e2cd7237c8f1542cd0->leave($__internal_7a70fb2d8ee2e88ae45bbf63e2ce29dd15d55009d096c5e2cd7237c8f1542cd0_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 230,  434 => 229,  423 => 175,  414 => 174,  403 => 170,  394 => 169,  383 => 165,  374 => 164,  357 => 32,  339 => 17,  328 => 231,  326 => 229,  322 => 228,  318 => 227,  266 => 177,  264 => 174,  260 => 172,  258 => 169,  254 => 167,  252 => 164,  188 => 102,  181 => 98,  174 => 97,  168 => 94,  163 => 93,  161 => 92,  150 => 83,  134 => 69,  112 => 49,  110 => 48,  93 => 33,  91 => 32,  86 => 30,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  49 => 17,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

  <head>

  <style>
    C1 { color: #000000; }
    C2 { color: #FFFFFF; }
  </style>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../../../icon.ico\">

    <title>{% block title %}Cabinet Medicale{% endblock %}</title>

    
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\" >
    <link rel=\"stylesheet\" href=\"{{ asset('fontawesome-free-5.3.1-web/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fontawesome-free-5.3.1-web/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('fontawesome-free-5.3.1-web/css/all.min.css') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('icon.ico') }}\" />

    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/full-slider.css') }}\" >
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-datetimepicker-standalone.min.css') }}\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">

{% block stylesheets %}{% endblock %}

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-light navbar-expand-lg fixed-top\" style=\"background-color: #cccccc;\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\"><img src=\"../../../../icon.ico\"> Cabinet Médicale </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">

            {% if is_granted(\"ROLE_USER\") %}
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/\">Accueil
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/apropos\">À-propos</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Contact</a> 
            </li>                  
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"/PrendreRDV\"><i class=\"far fa-calendar-check\"> Rendez-vous</i></a>
              <a class=\"dropdown-item\" href=\"/voirmafiche\"><i class=\"far fa-file-alt\"> Ma fiche</i></a>
            </div>
            </li> 

            {% else %}

            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/\">Accueil
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/apropos\">À-propos</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Contact</a> 
            </li>

            {% endif %}

            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li>
          <C1>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <h5><i class=\"fas fa-user\"></i> {{ app.user.username }} 
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-secondary\"> Déconnexion <i class=\"fas fa-sign-out-alt\"></i>
                </a></h5>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-info\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-secondary\">
                  S'inscrire
                </a>
            {% endif %}
          </C1> 
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url(../../../../slide1.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Actualité à votre main</h3>
              <p>vérifiez votre processus avec les détails</p>
            </C1>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(../../../../slide2.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Services clients</h3>
              <p>Une équipe proffesionel à votre service</p>
            </C1>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url(../../../../slide3.jpg)\">
            <div class=\"carousel-caption d-none d-md-block\">
            <C1><h3>Portabilité</h3>
              <p>réservez un rendez-vous de n'importe où</p>
            </C1>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class=\"py-5\">
      <div class=\"container\">
          <br></br>
        <p><h2><center>Profitez de nos services spécialement conçus pour votre détente</center><h2></p>
      </div>
    </section>
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
          {% block left %}
            <div><h3><i class=\"fas fa-calendar-check\"></i> Rendez-vous</h3><p>Prenez votre rendez-vous depuis n'importe quel place et profitez de notre guidage bien automatisé </br></br></p><img src=\"../../../../pr.jpg\", class=\"img-thumbnail\" ></div>
          {% endblock %}
          </div>
          <div class=\"col-md-4\">
          {% block body %}
            <div><h3><i class=\"fas fa-user-md\"></i> Consultation</h3><p>Consultez votre fiche médicale et le workflow de votre traitement et tous les informations personnels en toutes sécurité<br></br></p><img src=\"../../../../fm.jpg\", class=\"img-thumbnail\" ></div>
          {% endblock %}
          </div>
          <div class=\"col-md-4\">
            {% block right %}
              <div><h3><i class=\"fas fa-headset\"></i> Service Client</h3><p>Profitez de notre service clients pour trouver les réponses à toutes vos questions <br></br></br></p><img src=\"../../../../sc.jpg\", class=\"img-thumbnail\" ></div>
            {% endblock %}
          </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"py-5\" style=\"background-color: #cccccc;\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <center>
            <h6><span class=\"copyright\">Copyright &copy; Labiadh&Miledi company 2020</span></h6>
          </center>
          </div>
          <div class=\"col-md-4\">
            <center><C1>
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://twitter.com\"><i class=\"fab fa-twitter\"></i></a><h5>
              </li>
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://facebook.com\"><i class=\"fab fa-facebook-f\"></i></a></h5>
              </li>
              <li class=\"list-inline-item\">
                  <h5><a class=\"btn btn-dark\" href=\"http://linkedin.com\"><i class=\"fab fa-linkedin-in\"></i></a><h5>
              </li>
            </ul>
          </C1></center>
          </div>
          <div class=\"col-md-4\">
            <center>
            <ul class=\"list-inline quicklinks\">
              <li class=\"list-inline-item\">
                <h6>Privacy Policy</h6>
              </li>
              <li class=\"list-inline-item\">
                <h6>Terms of Use</h6>
              </li>
            </ul>
          </center>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"../../assets/js/vendor/popper.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src=\"../../assets/js/vendor/holder.min.js\"></script>
    <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
     {% block javascripts %}
     {% endblock %}
  </body>
</html>", "Cabinet/home.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\home.html.twig");
    }
}
