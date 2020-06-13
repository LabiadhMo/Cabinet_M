<?php

/* base.html.twig */
class __TwigTemplate_02e25a49a6dbb2812a9310e4f4c318ed8aee0a40744a854fbc644a191c9d8bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'table' => array($this, 'block_table'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'downleft' => array($this, 'block_downleft'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e9cd78a0e9dcc76b0d2eca31b3206951d42933accf079908eb08068e1e6086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e9cd78a0e9dcc76b0d2eca31b3206951d42933accf079908eb08068e1e6086->enter($__internal_29e9cd78a0e9dcc76b0d2eca31b3206951d42933accf079908eb08068e1e6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cd10f7999f11ea478834fa33ddc1ecde55260a3aa928e28da33dde3bb9bb32dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd10f7999f11ea478834fa33ddc1ecde55260a3aa928e28da33dde3bb9bb32dd->enter($__internal_cd10f7999f11ea478834fa33ddc1ecde55260a3aa928e28da33dde3bb9bb32dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.3.1-web/css/all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("icon.ico"), "html", null, true);
        echo "\" />

    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/full-slider.css"), "html", null, true);
        echo "\" >
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-datetimepicker-standalone.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">


";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
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
              <p align=\"right\">
            ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 50
            echo "
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li> 
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"btn btn-secondary\" href=\"/Cabinet/Administration\"><i class=\"fas fa-home\"></i></a>
            </li>                   
            <li class=\"nav-item\">

            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ASSISTANT")) {
            // line 66
            echo "
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li> 
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"btn btn-secondary\" href=\"/Cabinet/Administration\"><i class=\"fas fa-home\"></i></a>
            </li>                   
            <li class=\"nav-item\">

            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 81
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
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"/PrendreRDV\"><i class=\"far fa-calendar-check\"> Rendez-vous</i></a>
              <a class=\"dropdown-item\" href=\"/voirmafiche\"><i class=\"far fa-file-alt\"> Ma fiche</i></a>
            </div>
            </li>  

            ";
        } else {
            // line 103
            echo "
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/\">Accueil</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/apropos\">À-propos</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Contact</a> 
            </li>

            ";
        }
        // line 115
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
        // line 124
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 125
            echo "                <h5><i class=\"fas fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
                <a href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-secondary\">
                     Déconnexion <i class=\"fas fa-sign-out-alt\"></i>
                </a></h5>
            ";
        } else {
            // line 130
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-secondary\">
                  S'inscrire
                </a>
            ";
        }
        // line 135
        echo "          </C1>   
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <header>

    </header>

    <!-- Page Content -->
    <section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
              <br></br>
              ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 153
            echo "              <center><div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div></center>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "              ";
        $this->displayBlock('table', $context, $blocks);
        echo " 
            </div>
        </div> 
    </div>
    </section>
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
          ";
        // line 164
        $this->displayBlock('left', $context, $blocks);
        // line 165
        echo "          </div>
          <div class=\"col-md-4\">
            
            ";
        // line 168
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "          </div>
          <div class=\"col-md-4\">
            ";
        // line 171
        $this->displayBlock('right', $context, $blocks);
        // line 172
        echo "          </div>
        </div>
    </section>
        ";
        // line 175
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 176
            echo "    <section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
            ";
            // line 180
            $this->displayBlock('downleft', $context, $blocks);
            echo "     
            </div>
        </div>
    </div>
    </section>
    ";
        }
        // line 186
        echo "        <section class=\"py-5\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"col-md-4\"> 
      </div>
   </div>  

        <div class=\"row\">
            <div class=\"col-md-4\"> 
            </div>
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
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\">
    </script>
    <script>
      \$('#confirm-delete').on('show.bs.modal', function(e) {
      \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
      });
    </script> 
     ";
        // line 253
        $this->displayBlock('javascripts', $context, $blocks);
        // line 255
        echo "  
  </body>
</html>
";
        
        $__internal_29e9cd78a0e9dcc76b0d2eca31b3206951d42933accf079908eb08068e1e6086->leave($__internal_29e9cd78a0e9dcc76b0d2eca31b3206951d42933accf079908eb08068e1e6086_prof);

        
        $__internal_cd10f7999f11ea478834fa33ddc1ecde55260a3aa928e28da33dde3bb9bb32dd->leave($__internal_cd10f7999f11ea478834fa33ddc1ecde55260a3aa928e28da33dde3bb9bb32dd_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_1848bb991b2ab48dbd7c61be84843654369e838122497c85a8b612810358e023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1848bb991b2ab48dbd7c61be84843654369e838122497c85a8b612810358e023->enter($__internal_1848bb991b2ab48dbd7c61be84843654369e838122497c85a8b612810358e023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69e9d011f9ba0f67de4a0dc8a1a369772a236a983da41b0d657b8db355f482d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e9d011f9ba0f67de4a0dc8a1a369772a236a983da41b0d657b8db355f482d1->enter($__internal_69e9d011f9ba0f67de4a0dc8a1a369772a236a983da41b0d657b8db355f482d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cabinet Medicale";
        
        $__internal_69e9d011f9ba0f67de4a0dc8a1a369772a236a983da41b0d657b8db355f482d1->leave($__internal_69e9d011f9ba0f67de4a0dc8a1a369772a236a983da41b0d657b8db355f482d1_prof);

        
        $__internal_1848bb991b2ab48dbd7c61be84843654369e838122497c85a8b612810358e023->leave($__internal_1848bb991b2ab48dbd7c61be84843654369e838122497c85a8b612810358e023_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f19e51c664763e174743c1b0d8299bd0d0a247bc3cdedc681d6aa6c899712a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19e51c664763e174743c1b0d8299bd0d0a247bc3cdedc681d6aa6c899712a31->enter($__internal_f19e51c664763e174743c1b0d8299bd0d0a247bc3cdedc681d6aa6c899712a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea52559a88e7ad96021ad844ddaf20817e4193155db1cedad19493f5877859f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea52559a88e7ad96021ad844ddaf20817e4193155db1cedad19493f5877859f5->enter($__internal_ea52559a88e7ad96021ad844ddaf20817e4193155db1cedad19493f5877859f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea52559a88e7ad96021ad844ddaf20817e4193155db1cedad19493f5877859f5->leave($__internal_ea52559a88e7ad96021ad844ddaf20817e4193155db1cedad19493f5877859f5_prof);

        
        $__internal_f19e51c664763e174743c1b0d8299bd0d0a247bc3cdedc681d6aa6c899712a31->leave($__internal_f19e51c664763e174743c1b0d8299bd0d0a247bc3cdedc681d6aa6c899712a31_prof);

    }

    // line 155
    public function block_table($context, array $blocks = array())
    {
        $__internal_6da1348117aea1637960f327095b070d622ae450624ee5298e2a3cde56f7dca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da1348117aea1637960f327095b070d622ae450624ee5298e2a3cde56f7dca2->enter($__internal_6da1348117aea1637960f327095b070d622ae450624ee5298e2a3cde56f7dca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_4584dfa5e350a64aae1c02e6df23dd05c76ff8838bc99c539f58ae8e75123571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4584dfa5e350a64aae1c02e6df23dd05c76ff8838bc99c539f58ae8e75123571->enter($__internal_4584dfa5e350a64aae1c02e6df23dd05c76ff8838bc99c539f58ae8e75123571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_4584dfa5e350a64aae1c02e6df23dd05c76ff8838bc99c539f58ae8e75123571->leave($__internal_4584dfa5e350a64aae1c02e6df23dd05c76ff8838bc99c539f58ae8e75123571_prof);

        
        $__internal_6da1348117aea1637960f327095b070d622ae450624ee5298e2a3cde56f7dca2->leave($__internal_6da1348117aea1637960f327095b070d622ae450624ee5298e2a3cde56f7dca2_prof);

    }

    // line 164
    public function block_left($context, array $blocks = array())
    {
        $__internal_a573f6d0a9bcd248e6c7e73bc1e8b230e30c93f54065bb05bc0c08ff4c1f48f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a573f6d0a9bcd248e6c7e73bc1e8b230e30c93f54065bb05bc0c08ff4c1f48f5->enter($__internal_a573f6d0a9bcd248e6c7e73bc1e8b230e30c93f54065bb05bc0c08ff4c1f48f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_f98dad65180e60ececab2f7dae4823a43c331d5525efd1ee40a8f4f5b4fafa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98dad65180e60ececab2f7dae4823a43c331d5525efd1ee40a8f4f5b4fafa85->enter($__internal_f98dad65180e60ececab2f7dae4823a43c331d5525efd1ee40a8f4f5b4fafa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        
        $__internal_f98dad65180e60ececab2f7dae4823a43c331d5525efd1ee40a8f4f5b4fafa85->leave($__internal_f98dad65180e60ececab2f7dae4823a43c331d5525efd1ee40a8f4f5b4fafa85_prof);

        
        $__internal_a573f6d0a9bcd248e6c7e73bc1e8b230e30c93f54065bb05bc0c08ff4c1f48f5->leave($__internal_a573f6d0a9bcd248e6c7e73bc1e8b230e30c93f54065bb05bc0c08ff4c1f48f5_prof);

    }

    // line 168
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f98635ccc43edc02f246058a0fd2afdace549d071d791473537fa040a24221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f98635ccc43edc02f246058a0fd2afdace549d071d791473537fa040a24221->enter($__internal_a9f98635ccc43edc02f246058a0fd2afdace549d071d791473537fa040a24221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8d6046c8984dd73fe47cae995d481078b174288b51f5dbb7c466bf3b914c0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6046c8984dd73fe47cae995d481078b174288b51f5dbb7c466bf3b914c0bd->enter($__internal_a8d6046c8984dd73fe47cae995d481078b174288b51f5dbb7c466bf3b914c0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8d6046c8984dd73fe47cae995d481078b174288b51f5dbb7c466bf3b914c0bd->leave($__internal_a8d6046c8984dd73fe47cae995d481078b174288b51f5dbb7c466bf3b914c0bd_prof);

        
        $__internal_a9f98635ccc43edc02f246058a0fd2afdace549d071d791473537fa040a24221->leave($__internal_a9f98635ccc43edc02f246058a0fd2afdace549d071d791473537fa040a24221_prof);

    }

    // line 171
    public function block_right($context, array $blocks = array())
    {
        $__internal_d186d445ce63b1d30c25f2b108edfb05311003ab79311a7117d60ebdf1c2554a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d186d445ce63b1d30c25f2b108edfb05311003ab79311a7117d60ebdf1c2554a->enter($__internal_d186d445ce63b1d30c25f2b108edfb05311003ab79311a7117d60ebdf1c2554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_ccf9ead3f5240a4fbc695966d7f2e6a1c6f118cc87a2e5fd786802dbc5906be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf9ead3f5240a4fbc695966d7f2e6a1c6f118cc87a2e5fd786802dbc5906be1->enter($__internal_ccf9ead3f5240a4fbc695966d7f2e6a1c6f118cc87a2e5fd786802dbc5906be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_ccf9ead3f5240a4fbc695966d7f2e6a1c6f118cc87a2e5fd786802dbc5906be1->leave($__internal_ccf9ead3f5240a4fbc695966d7f2e6a1c6f118cc87a2e5fd786802dbc5906be1_prof);

        
        $__internal_d186d445ce63b1d30c25f2b108edfb05311003ab79311a7117d60ebdf1c2554a->leave($__internal_d186d445ce63b1d30c25f2b108edfb05311003ab79311a7117d60ebdf1c2554a_prof);

    }

    // line 180
    public function block_downleft($context, array $blocks = array())
    {
        $__internal_eede360e89b88cb482b6f7285fd889740aed9133af6a9347a0d48ff863517c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eede360e89b88cb482b6f7285fd889740aed9133af6a9347a0d48ff863517c95->enter($__internal_eede360e89b88cb482b6f7285fd889740aed9133af6a9347a0d48ff863517c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        $__internal_450cadda6e1e2b6bbf98f5ce03ad3bf62508434a01854ba96259e52cbe54ed26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450cadda6e1e2b6bbf98f5ce03ad3bf62508434a01854ba96259e52cbe54ed26->enter($__internal_450cadda6e1e2b6bbf98f5ce03ad3bf62508434a01854ba96259e52cbe54ed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        
        $__internal_450cadda6e1e2b6bbf98f5ce03ad3bf62508434a01854ba96259e52cbe54ed26->leave($__internal_450cadda6e1e2b6bbf98f5ce03ad3bf62508434a01854ba96259e52cbe54ed26_prof);

        
        $__internal_eede360e89b88cb482b6f7285fd889740aed9133af6a9347a0d48ff863517c95->leave($__internal_eede360e89b88cb482b6f7285fd889740aed9133af6a9347a0d48ff863517c95_prof);

    }

    // line 253
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abbad75d446f9f8278be58e88fae654c050eb1c6bbefbfa9f4174ff4d9145551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbad75d446f9f8278be58e88fae654c050eb1c6bbefbfa9f4174ff4d9145551->enter($__internal_abbad75d446f9f8278be58e88fae654c050eb1c6bbefbfa9f4174ff4d9145551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1af9732b70d71129b00b528506f1406c694e87bb65129ae0f1b56895e53ef85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af9732b70d71129b00b528506f1406c694e87bb65129ae0f1b56895e53ef85b->enter($__internal_1af9732b70d71129b00b528506f1406c694e87bb65129ae0f1b56895e53ef85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        echo "     ";
        
        $__internal_1af9732b70d71129b00b528506f1406c694e87bb65129ae0f1b56895e53ef85b->leave($__internal_1af9732b70d71129b00b528506f1406c694e87bb65129ae0f1b56895e53ef85b_prof);

        
        $__internal_abbad75d446f9f8278be58e88fae654c050eb1c6bbefbfa9f4174ff4d9145551->leave($__internal_abbad75d446f9f8278be58e88fae654c050eb1c6bbefbfa9f4174ff4d9145551_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 254,  528 => 253,  511 => 180,  494 => 171,  477 => 168,  460 => 164,  443 => 155,  426 => 32,  408 => 17,  395 => 255,  393 => 253,  383 => 246,  379 => 245,  374 => 243,  370 => 242,  366 => 241,  309 => 186,  300 => 180,  294 => 176,  292 => 175,  287 => 172,  285 => 171,  281 => 169,  279 => 168,  274 => 165,  272 => 164,  259 => 155,  250 => 153,  246 => 152,  227 => 135,  220 => 131,  213 => 130,  206 => 126,  201 => 125,  199 => 124,  188 => 115,  174 => 103,  150 => 81,  132 => 66,  114 => 50,  112 => 49,  95 => 34,  93 => 32,  87 => 29,  83 => 28,  79 => 27,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  51 => 17,  33 => 1,);
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


{% block stylesheets %}
{% endblock %}

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
              <p align=\"right\">
            {% if is_granted(\"ROLE_DOCTOR\") %}

            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li> 
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"btn btn-secondary\" href=\"/Cabinet/Administration\"><i class=\"fas fa-home\"></i></a>
            </li>                   
            <li class=\"nav-item\">

            {% elseif is_granted(\"ROLE_ASSISTANT\") %}

            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li> 
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"btn btn-secondary\" href=\"/Cabinet/Administration\"><i class=\"fas fa-home\"></i></a>
            </li>                   
            <li class=\"nav-item\">

            {% elseif is_granted(\"ROLE_USER\") %} 

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
              <a class=\"nav-link\" href=\"/\">Accueil</a>
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
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-secondary\">
                     Déconnexion <i class=\"fas fa-sign-out-alt\"></i>
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

    </header>

    <!-- Page Content -->
    <section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
              <br></br>
              {% for flash_message in app.session.flashbag.get('notice') %}
              <center><div class=\"alert alert-info\">{{flash_message}}</div></center>
              {% endfor %}
              {% block table %}{% endblock %} 
            </div>
        </div> 
    </div>
    </section>
    <section class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
          {% block left %}{% endblock %}
          </div>
          <div class=\"col-md-4\">
            
            {% block body %}{% endblock %}
          </div>
          <div class=\"col-md-4\">
            {% block right %}{% endblock %}
          </div>
        </div>
    </section>
        {% if is_granted(\"ROLE_DOCTOR\") %}
    <section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
            {% block downleft %}{% endblock %}     
            </div>
        </div>
    </div>
    </section>
    {% endif %}
        <section class=\"py-5\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"col-md-4\"> 
      </div>
   </div>  

        <div class=\"row\">
            <div class=\"col-md-4\"> 
            </div>
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
    <script src=\"{{ asset('jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('assets/js/jquery-3.1.1.min.js') }}\">
    </script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('assets/js/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('assets/js/bootstrap.min.js') }}\">
    </script>
    <script>
      \$('#confirm-delete').on('show.bs.modal', function(e) {
      \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
      });
    </script> 
     {% block javascripts %}
     {% endblock %}
  
  </body>
</html>
", "base.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\base.html.twig");
    }
}
