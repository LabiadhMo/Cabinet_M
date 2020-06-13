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
        $__internal_fc99cc2063f83ff5e70ec46f043d8f4956447240e797f0caa205969d65c06376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc99cc2063f83ff5e70ec46f043d8f4956447240e797f0caa205969d65c06376->enter($__internal_fc99cc2063f83ff5e70ec46f043d8f4956447240e797f0caa205969d65c06376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/home.html.twig"));

        $__internal_27db6ca906c74df027e8704d8059fcbf3550339b6b56279aa1850feb64084782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27db6ca906c74df027e8704d8059fcbf3550339b6b56279aa1850feb64084782->enter($__internal_27db6ca906c74df027e8704d8059fcbf3550339b6b56279aa1850feb64084782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/home.html.twig"));

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
        
        $__internal_fc99cc2063f83ff5e70ec46f043d8f4956447240e797f0caa205969d65c06376->leave($__internal_fc99cc2063f83ff5e70ec46f043d8f4956447240e797f0caa205969d65c06376_prof);

        
        $__internal_27db6ca906c74df027e8704d8059fcbf3550339b6b56279aa1850feb64084782->leave($__internal_27db6ca906c74df027e8704d8059fcbf3550339b6b56279aa1850feb64084782_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_26e8ec354f4402b33b7696d8db018b8620a9e75868bbc2192a9492017b58cd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e8ec354f4402b33b7696d8db018b8620a9e75868bbc2192a9492017b58cd4f->enter($__internal_26e8ec354f4402b33b7696d8db018b8620a9e75868bbc2192a9492017b58cd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_149b6f9164e6e2e33be8198388ddb39d7d538335efd911aabb2aa6c23c6966e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149b6f9164e6e2e33be8198388ddb39d7d538335efd911aabb2aa6c23c6966e1->enter($__internal_149b6f9164e6e2e33be8198388ddb39d7d538335efd911aabb2aa6c23c6966e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cabinet Medicale";
        
        $__internal_149b6f9164e6e2e33be8198388ddb39d7d538335efd911aabb2aa6c23c6966e1->leave($__internal_149b6f9164e6e2e33be8198388ddb39d7d538335efd911aabb2aa6c23c6966e1_prof);

        
        $__internal_26e8ec354f4402b33b7696d8db018b8620a9e75868bbc2192a9492017b58cd4f->leave($__internal_26e8ec354f4402b33b7696d8db018b8620a9e75868bbc2192a9492017b58cd4f_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41598bc39ce9ad69eff3a25e423a11563efaca23d3dae8495775268aa374b36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41598bc39ce9ad69eff3a25e423a11563efaca23d3dae8495775268aa374b36b->enter($__internal_41598bc39ce9ad69eff3a25e423a11563efaca23d3dae8495775268aa374b36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b42fea20769be407a55f4584e55e1846b7d9ae173b975be7f876926b2a84993d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42fea20769be407a55f4584e55e1846b7d9ae173b975be7f876926b2a84993d->enter($__internal_b42fea20769be407a55f4584e55e1846b7d9ae173b975be7f876926b2a84993d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b42fea20769be407a55f4584e55e1846b7d9ae173b975be7f876926b2a84993d->leave($__internal_b42fea20769be407a55f4584e55e1846b7d9ae173b975be7f876926b2a84993d_prof);

        
        $__internal_41598bc39ce9ad69eff3a25e423a11563efaca23d3dae8495775268aa374b36b->leave($__internal_41598bc39ce9ad69eff3a25e423a11563efaca23d3dae8495775268aa374b36b_prof);

    }

    // line 164
    public function block_left($context, array $blocks = array())
    {
        $__internal_280c853e731cef9b204dde1e4a068fd0b59cce98eda34b6b1c1ff7644214e560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280c853e731cef9b204dde1e4a068fd0b59cce98eda34b6b1c1ff7644214e560->enter($__internal_280c853e731cef9b204dde1e4a068fd0b59cce98eda34b6b1c1ff7644214e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_b2f2ce9a6b34ca4bfe1fc760ae6addce7547303583b5c5e09556fb22c7001726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f2ce9a6b34ca4bfe1fc760ae6addce7547303583b5c5e09556fb22c7001726->enter($__internal_b2f2ce9a6b34ca4bfe1fc760ae6addce7547303583b5c5e09556fb22c7001726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 165
        echo "            <div><h3><i class=\"fas fa-calendar-check\"></i> Rendez-vous</h3><p>Prenez votre rendez-vous depuis n'importe quel place et profitez de notre guidage bien automatisé </br></br></p><img src=\"../../../../pr.jpg\", class=\"img-thumbnail\" ></div>
          ";
        
        $__internal_b2f2ce9a6b34ca4bfe1fc760ae6addce7547303583b5c5e09556fb22c7001726->leave($__internal_b2f2ce9a6b34ca4bfe1fc760ae6addce7547303583b5c5e09556fb22c7001726_prof);

        
        $__internal_280c853e731cef9b204dde1e4a068fd0b59cce98eda34b6b1c1ff7644214e560->leave($__internal_280c853e731cef9b204dde1e4a068fd0b59cce98eda34b6b1c1ff7644214e560_prof);

    }

    // line 169
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ae2718cb72f63bafe70e8f6f0ac7b98171628c9c327179822c22b33d93c9c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae2718cb72f63bafe70e8f6f0ac7b98171628c9c327179822c22b33d93c9c22->enter($__internal_3ae2718cb72f63bafe70e8f6f0ac7b98171628c9c327179822c22b33d93c9c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f95810e8ff4e363eb10f4f304b33addf4975b45554bdfe6b9b0403de856571b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f95810e8ff4e363eb10f4f304b33addf4975b45554bdfe6b9b0403de856571b->enter($__internal_5f95810e8ff4e363eb10f4f304b33addf4975b45554bdfe6b9b0403de856571b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 170
        echo "            <div><h3><i class=\"fas fa-user-md\"></i> Consultation</h3><p>Consultez votre fiche médicale et le workflow de votre traitement et tous les informations personnels en toutes sécurité<br></br></p><img src=\"../../../../fm.jpg\", class=\"img-thumbnail\" ></div>
          ";
        
        $__internal_5f95810e8ff4e363eb10f4f304b33addf4975b45554bdfe6b9b0403de856571b->leave($__internal_5f95810e8ff4e363eb10f4f304b33addf4975b45554bdfe6b9b0403de856571b_prof);

        
        $__internal_3ae2718cb72f63bafe70e8f6f0ac7b98171628c9c327179822c22b33d93c9c22->leave($__internal_3ae2718cb72f63bafe70e8f6f0ac7b98171628c9c327179822c22b33d93c9c22_prof);

    }

    // line 174
    public function block_right($context, array $blocks = array())
    {
        $__internal_a34442d4d3ef43fd04aebaca7b4ed82cfb638d4ca99de872ff6671ac76f5e087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34442d4d3ef43fd04aebaca7b4ed82cfb638d4ca99de872ff6671ac76f5e087->enter($__internal_a34442d4d3ef43fd04aebaca7b4ed82cfb638d4ca99de872ff6671ac76f5e087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_1215edb0df478d551f0a1cadf82d04f339e04ac519cc41b77de250c78b55b3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1215edb0df478d551f0a1cadf82d04f339e04ac519cc41b77de250c78b55b3f5->enter($__internal_1215edb0df478d551f0a1cadf82d04f339e04ac519cc41b77de250c78b55b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 175
        echo "              <div><h3><i class=\"fas fa-headset\"></i> Service Client</h3><p>Profitez de notre service clients pour trouver les réponses à toutes vos questions <br></br></br></p><img src=\"../../../../sc.jpg\", class=\"img-thumbnail\" ></div>
            ";
        
        $__internal_1215edb0df478d551f0a1cadf82d04f339e04ac519cc41b77de250c78b55b3f5->leave($__internal_1215edb0df478d551f0a1cadf82d04f339e04ac519cc41b77de250c78b55b3f5_prof);

        
        $__internal_a34442d4d3ef43fd04aebaca7b4ed82cfb638d4ca99de872ff6671ac76f5e087->leave($__internal_a34442d4d3ef43fd04aebaca7b4ed82cfb638d4ca99de872ff6671ac76f5e087_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b8ef33467a257611b932673d5122c7545423e53d7988faebd28416fbbcea963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8ef33467a257611b932673d5122c7545423e53d7988faebd28416fbbcea963->enter($__internal_0b8ef33467a257611b932673d5122c7545423e53d7988faebd28416fbbcea963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_70c6349eb42f035f6469702925674ebc489f56bb4e156f01b7729f1273b8ace5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c6349eb42f035f6469702925674ebc489f56bb4e156f01b7729f1273b8ace5->enter($__internal_70c6349eb42f035f6469702925674ebc489f56bb4e156f01b7729f1273b8ace5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "     ";
        
        $__internal_70c6349eb42f035f6469702925674ebc489f56bb4e156f01b7729f1273b8ace5->leave($__internal_70c6349eb42f035f6469702925674ebc489f56bb4e156f01b7729f1273b8ace5_prof);

        
        $__internal_0b8ef33467a257611b932673d5122c7545423e53d7988faebd28416fbbcea963->leave($__internal_0b8ef33467a257611b932673d5122c7545423e53d7988faebd28416fbbcea963_prof);

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
