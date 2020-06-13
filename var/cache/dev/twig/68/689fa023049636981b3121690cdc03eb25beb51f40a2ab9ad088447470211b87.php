<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_568034e460f18f20f4d5f4dee2d6b4b3c95304bd30233615ddde611cb0257b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0722b55723e38442256d08dc0b4f1cea21a63a07fd9f95215acd4dfd24d919eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0722b55723e38442256d08dc0b4f1cea21a63a07fd9f95215acd4dfd24d919eb->enter($__internal_0722b55723e38442256d08dc0b4f1cea21a63a07fd9f95215acd4dfd24d919eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_e4d4a70de86e61ecff6d3e3476235d2de826bb6d7ec9cf812161b250b650247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d4a70de86e61ecff6d3e3476235d2de826bb6d7ec9cf812161b250b650247a->enter($__internal_e4d4a70de86e61ecff6d3e3476235d2de826bb6d7ec9cf812161b250b650247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_0722b55723e38442256d08dc0b4f1cea21a63a07fd9f95215acd4dfd24d919eb->leave($__internal_0722b55723e38442256d08dc0b4f1cea21a63a07fd9f95215acd4dfd24d919eb_prof);

        
        $__internal_e4d4a70de86e61ecff6d3e3476235d2de826bb6d7ec9cf812161b250b650247a->leave($__internal_e4d4a70de86e61ecff6d3e3476235d2de826bb6d7ec9cf812161b250b650247a_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ff8b55b6bb7e9aff6f67ae85043bdd5cc46153e433823a5d332839eb42159706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8b55b6bb7e9aff6f67ae85043bdd5cc46153e433823a5d332839eb42159706->enter($__internal_ff8b55b6bb7e9aff6f67ae85043bdd5cc46153e433823a5d332839eb42159706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_61be08c2fd36c3ed67c3639d7bf89c3db16674792c555b0af7f9a5d6d669a174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61be08c2fd36c3ed67c3639d7bf89c3db16674792c555b0af7f9a5d6d669a174->enter($__internal_61be08c2fd36c3ed67c3639d7bf89c3db16674792c555b0af7f9a5d6d669a174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_61be08c2fd36c3ed67c3639d7bf89c3db16674792c555b0af7f9a5d6d669a174->leave($__internal_61be08c2fd36c3ed67c3639d7bf89c3db16674792c555b0af7f9a5d6d669a174_prof);

        
        $__internal_ff8b55b6bb7e9aff6f67ae85043bdd5cc46153e433823a5d332839eb42159706->leave($__internal_ff8b55b6bb7e9aff6f67ae85043bdd5cc46153e433823a5d332839eb42159706_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_c185eca9a6582b9429572a3518c2cd24a5571f0784061af6bd1dc033f3427fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c185eca9a6582b9429572a3518c2cd24a5571f0784061af6bd1dc033f3427fc1->enter($__internal_c185eca9a6582b9429572a3518c2cd24a5571f0784061af6bd1dc033f3427fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_409dc520c3a94512fbdf4b8f936e0be6878984cc0bad88e2d6b8b16ce7f599d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409dc520c3a94512fbdf4b8f936e0be6878984cc0bad88e2d6b8b16ce7f599d8->enter($__internal_409dc520c3a94512fbdf4b8f936e0be6878984cc0bad88e2d6b8b16ce7f599d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_409dc520c3a94512fbdf4b8f936e0be6878984cc0bad88e2d6b8b16ce7f599d8->leave($__internal_409dc520c3a94512fbdf4b8f936e0be6878984cc0bad88e2d6b8b16ce7f599d8_prof);

        
        $__internal_c185eca9a6582b9429572a3518c2cd24a5571f0784061af6bd1dc033f3427fc1->leave($__internal_c185eca9a6582b9429572a3518c2cd24a5571f0784061af6bd1dc033f3427fc1_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_6dfbd21cddfae0f8965355be9df532ab875284fb38e3372c21b966aacf2d2a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfbd21cddfae0f8965355be9df532ab875284fb38e3372c21b966aacf2d2a38->enter($__internal_6dfbd21cddfae0f8965355be9df532ab875284fb38e3372c21b966aacf2d2a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_da7f668dec04f827509a0b73e8f630905f18738805d961ffdc72fb290f4fc631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7f668dec04f827509a0b73e8f630905f18738805d961ffdc72fb290f4fc631->enter($__internal_da7f668dec04f827509a0b73e8f630905f18738805d961ffdc72fb290f4fc631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_da7f668dec04f827509a0b73e8f630905f18738805d961ffdc72fb290f4fc631->leave($__internal_da7f668dec04f827509a0b73e8f630905f18738805d961ffdc72fb290f4fc631_prof);

        
        $__internal_6dfbd21cddfae0f8965355be9df532ab875284fb38e3372c21b966aacf2d2a38->leave($__internal_6dfbd21cddfae0f8965355be9df532ab875284fb38e3372c21b966aacf2d2a38_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_c21cd98fde8b276492c3d5c4af3c53ff0d7cbd87d6af24a693818fb87071b5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21cd98fde8b276492c3d5c4af3c53ff0d7cbd87d6af24a693818fb87071b5c9->enter($__internal_c21cd98fde8b276492c3d5c4af3c53ff0d7cbd87d6af24a693818fb87071b5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_49042a417b808ab8d55b9a1557556deabe847bcc3cfbcd8146e5b7048cf79f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49042a417b808ab8d55b9a1557556deabe847bcc3cfbcd8146e5b7048cf79f42->enter($__internal_49042a417b808ab8d55b9a1557556deabe847bcc3cfbcd8146e5b7048cf79f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_49042a417b808ab8d55b9a1557556deabe847bcc3cfbcd8146e5b7048cf79f42->leave($__internal_49042a417b808ab8d55b9a1557556deabe847bcc3cfbcd8146e5b7048cf79f42_prof);

        
        $__internal_c21cd98fde8b276492c3d5c4af3c53ff0d7cbd87d6af24a693818fb87071b5c9->leave($__internal_c21cd98fde8b276492c3d5c4af3c53ff0d7cbd87d6af24a693818fb87071b5c9_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_cd162786fa338bc1cfbd48cf32caa1a737a3165578a70231b10ff4625b70abe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd162786fa338bc1cfbd48cf32caa1a737a3165578a70231b10ff4625b70abe5->enter($__internal_cd162786fa338bc1cfbd48cf32caa1a737a3165578a70231b10ff4625b70abe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_86ac402508da0bdfebdf8126254c1c106ce8800540770dac5c8acb15d77de51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ac402508da0bdfebdf8126254c1c106ce8800540770dac5c8acb15d77de51b->enter($__internal_86ac402508da0bdfebdf8126254c1c106ce8800540770dac5c8acb15d77de51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_86ac402508da0bdfebdf8126254c1c106ce8800540770dac5c8acb15d77de51b->leave($__internal_86ac402508da0bdfebdf8126254c1c106ce8800540770dac5c8acb15d77de51b_prof);

        
        $__internal_cd162786fa338bc1cfbd48cf32caa1a737a3165578a70231b10ff4625b70abe5->leave($__internal_cd162786fa338bc1cfbd48cf32caa1a737a3165578a70231b10ff4625b70abe5_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_28ba016259e1fa6abd8cadae5d32c5ce569b5274b07c2a9bbdfd14456ad40bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ba016259e1fa6abd8cadae5d32c5ce569b5274b07c2a9bbdfd14456ad40bf0->enter($__internal_28ba016259e1fa6abd8cadae5d32c5ce569b5274b07c2a9bbdfd14456ad40bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee87a0e96a37b2628c4940dade4d07f88361194172eb25187736db453ce5bd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee87a0e96a37b2628c4940dade4d07f88361194172eb25187736db453ce5bd90->enter($__internal_ee87a0e96a37b2628c4940dade4d07f88361194172eb25187736db453ce5bd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_ee87a0e96a37b2628c4940dade4d07f88361194172eb25187736db453ce5bd90->leave($__internal_ee87a0e96a37b2628c4940dade4d07f88361194172eb25187736db453ce5bd90_prof);

        
        $__internal_28ba016259e1fa6abd8cadae5d32c5ce569b5274b07c2a9bbdfd14456ad40bf0->leave($__internal_28ba016259e1fa6abd8cadae5d32c5ce569b5274b07c2a9bbdfd14456ad40bf0_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fcf66284638eba51aac33d0524b7f10b4ffe225a4a9fbfa2c4972ee8b44f2372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf66284638eba51aac33d0524b7f10b4ffe225a4a9fbfa2c4972ee8b44f2372->enter($__internal_fcf66284638eba51aac33d0524b7f10b4ffe225a4a9fbfa2c4972ee8b44f2372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f67ac4aa8e27ebe99e6e06b16f13842a98f9c29853d2543e16202bb48dec59fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67ac4aa8e27ebe99e6e06b16f13842a98f9c29853d2543e16202bb48dec59fc->enter($__internal_f67ac4aa8e27ebe99e6e06b16f13842a98f9c29853d2543e16202bb48dec59fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f67ac4aa8e27ebe99e6e06b16f13842a98f9c29853d2543e16202bb48dec59fc->leave($__internal_f67ac4aa8e27ebe99e6e06b16f13842a98f9c29853d2543e16202bb48dec59fc_prof);

        
        $__internal_fcf66284638eba51aac33d0524b7f10b4ffe225a4a9fbfa2c4972ee8b44f2372->leave($__internal_fcf66284638eba51aac33d0524b7f10b4ffe225a4a9fbfa2c4972ee8b44f2372_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6c1354d09c0f900b5bcac3e2d32105724dfe7277414527f3b5decd832cbcaa08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1354d09c0f900b5bcac3e2d32105724dfe7277414527f3b5decd832cbcaa08->enter($__internal_6c1354d09c0f900b5bcac3e2d32105724dfe7277414527f3b5decd832cbcaa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_493619b977465df1272892d8b16bfc352ef48a3f54e0d7a5964e90ef05037ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493619b977465df1272892d8b16bfc352ef48a3f54e0d7a5964e90ef05037ea9->enter($__internal_493619b977465df1272892d8b16bfc352ef48a3f54e0d7a5964e90ef05037ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_493619b977465df1272892d8b16bfc352ef48a3f54e0d7a5964e90ef05037ea9->leave($__internal_493619b977465df1272892d8b16bfc352ef48a3f54e0d7a5964e90ef05037ea9_prof);

        
        $__internal_6c1354d09c0f900b5bcac3e2d32105724dfe7277414527f3b5decd832cbcaa08->leave($__internal_6c1354d09c0f900b5bcac3e2d32105724dfe7277414527f3b5decd832cbcaa08_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_23ef99e224022d7b50544f5ec0cb80683e6bbd9a6b04a5c0937d1e6a0d502e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ef99e224022d7b50544f5ec0cb80683e6bbd9a6b04a5c0937d1e6a0d502e70->enter($__internal_23ef99e224022d7b50544f5ec0cb80683e6bbd9a6b04a5c0937d1e6a0d502e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_39f9e9f0f44f3ac4e07eda14b7320b3021e52ab8cd7c91045e1052f9b6877a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f9e9f0f44f3ac4e07eda14b7320b3021e52ab8cd7c91045e1052f9b6877a32->enter($__internal_39f9e9f0f44f3ac4e07eda14b7320b3021e52ab8cd7c91045e1052f9b6877a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_39f9e9f0f44f3ac4e07eda14b7320b3021e52ab8cd7c91045e1052f9b6877a32->leave($__internal_39f9e9f0f44f3ac4e07eda14b7320b3021e52ab8cd7c91045e1052f9b6877a32_prof);

        
        $__internal_23ef99e224022d7b50544f5ec0cb80683e6bbd9a6b04a5c0937d1e6a0d502e70->leave($__internal_23ef99e224022d7b50544f5ec0cb80683e6bbd9a6b04a5c0937d1e6a0d502e70_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_5533d4718a1fe7354a74415636b0ba6f73e16d0ea464e35923d6e6a57c57ee43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5533d4718a1fe7354a74415636b0ba6f73e16d0ea464e35923d6e6a57c57ee43->enter($__internal_5533d4718a1fe7354a74415636b0ba6f73e16d0ea464e35923d6e6a57c57ee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e334f1607ed2032dc41dcb1cb7fb7958af59b11b01684288e7f202b26439321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e334f1607ed2032dc41dcb1cb7fb7958af59b11b01684288e7f202b26439321e->enter($__internal_e334f1607ed2032dc41dcb1cb7fb7958af59b11b01684288e7f202b26439321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_e334f1607ed2032dc41dcb1cb7fb7958af59b11b01684288e7f202b26439321e->leave($__internal_e334f1607ed2032dc41dcb1cb7fb7958af59b11b01684288e7f202b26439321e_prof);

        
        $__internal_5533d4718a1fe7354a74415636b0ba6f73e16d0ea464e35923d6e6a57c57ee43->leave($__internal_5533d4718a1fe7354a74415636b0ba6f73e16d0ea464e35923d6e6a57c57ee43_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_4d8ba911afbf6676b475b9e0b6a7a7f71241cb2ad466aee48eb7c06c5de2ac95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8ba911afbf6676b475b9e0b6a7a7f71241cb2ad466aee48eb7c06c5de2ac95->enter($__internal_4d8ba911afbf6676b475b9e0b6a7a7f71241cb2ad466aee48eb7c06c5de2ac95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_31d0b123566616224d13036f9a7bddb4826993baa7d94fd7f28d9079c3b1ddb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d0b123566616224d13036f9a7bddb4826993baa7d94fd7f28d9079c3b1ddb4->enter($__internal_31d0b123566616224d13036f9a7bddb4826993baa7d94fd7f28d9079c3b1ddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_31d0b123566616224d13036f9a7bddb4826993baa7d94fd7f28d9079c3b1ddb4->leave($__internal_31d0b123566616224d13036f9a7bddb4826993baa7d94fd7f28d9079c3b1ddb4_prof);

        
        $__internal_4d8ba911afbf6676b475b9e0b6a7a7f71241cb2ad466aee48eb7c06c5de2ac95->leave($__internal_4d8ba911afbf6676b475b9e0b6a7a7f71241cb2ad466aee48eb7c06c5de2ac95_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_fea678fee7cbd122b13ddc74bf7134d1dfb19f02e2580440fff8080bb1fdcae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea678fee7cbd122b13ddc74bf7134d1dfb19f02e2580440fff8080bb1fdcae2->enter($__internal_fea678fee7cbd122b13ddc74bf7134d1dfb19f02e2580440fff8080bb1fdcae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_323fc5ba0b64706042ba0709e957c7ab9346d464df423c9d227179f99e78c129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323fc5ba0b64706042ba0709e957c7ab9346d464df423c9d227179f99e78c129->enter($__internal_323fc5ba0b64706042ba0709e957c7ab9346d464df423c9d227179f99e78c129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_323fc5ba0b64706042ba0709e957c7ab9346d464df423c9d227179f99e78c129->leave($__internal_323fc5ba0b64706042ba0709e957c7ab9346d464df423c9d227179f99e78c129_prof);

        
        $__internal_fea678fee7cbd122b13ddc74bf7134d1dfb19f02e2580440fff8080bb1fdcae2->leave($__internal_fea678fee7cbd122b13ddc74bf7134d1dfb19f02e2580440fff8080bb1fdcae2_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_e09dde1b379716f983488ee28f643f06c0c271a5765f52b18ae388abcc95b615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09dde1b379716f983488ee28f643f06c0c271a5765f52b18ae388abcc95b615->enter($__internal_e09dde1b379716f983488ee28f643f06c0c271a5765f52b18ae388abcc95b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_46e46a01ce16b336754fff96ec0f524dc095aa6ad8f9353680cc36e3746a622f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e46a01ce16b336754fff96ec0f524dc095aa6ad8f9353680cc36e3746a622f->enter($__internal_46e46a01ce16b336754fff96ec0f524dc095aa6ad8f9353680cc36e3746a622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_46e46a01ce16b336754fff96ec0f524dc095aa6ad8f9353680cc36e3746a622f->leave($__internal_46e46a01ce16b336754fff96ec0f524dc095aa6ad8f9353680cc36e3746a622f_prof);

        
        $__internal_e09dde1b379716f983488ee28f643f06c0c271a5765f52b18ae388abcc95b615->leave($__internal_e09dde1b379716f983488ee28f643f06c0c271a5765f52b18ae388abcc95b615_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_123082310feea36f94985e88ad7f1ef7f75672a719e7ca5e874e5644db9e3fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123082310feea36f94985e88ad7f1ef7f75672a719e7ca5e874e5644db9e3fb1->enter($__internal_123082310feea36f94985e88ad7f1ef7f75672a719e7ca5e874e5644db9e3fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_b06cf2880687b9c97b97d5c4f97fd75408ccc7cf7627f0e57bd5913fa16dcb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06cf2880687b9c97b97d5c4f97fd75408ccc7cf7627f0e57bd5913fa16dcb6f->enter($__internal_b06cf2880687b9c97b97d5c4f97fd75408ccc7cf7627f0e57bd5913fa16dcb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_b06cf2880687b9c97b97d5c4f97fd75408ccc7cf7627f0e57bd5913fa16dcb6f->leave($__internal_b06cf2880687b9c97b97d5c4f97fd75408ccc7cf7627f0e57bd5913fa16dcb6f_prof);

        
        $__internal_123082310feea36f94985e88ad7f1ef7f75672a719e7ca5e874e5644db9e3fb1->leave($__internal_123082310feea36f94985e88ad7f1ef7f75672a719e7ca5e874e5644db9e3fb1_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7ae26225addbab4e44779e4d8e0248b2658aa8749ee2d5005e85edf4349a730d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae26225addbab4e44779e4d8e0248b2658aa8749ee2d5005e85edf4349a730d->enter($__internal_7ae26225addbab4e44779e4d8e0248b2658aa8749ee2d5005e85edf4349a730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_552adbdd0ab51a1103d35ac2a446251c9db0527534708462ad33ca66f8c35a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552adbdd0ab51a1103d35ac2a446251c9db0527534708462ad33ca66f8c35a67->enter($__internal_552adbdd0ab51a1103d35ac2a446251c9db0527534708462ad33ca66f8c35a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_552adbdd0ab51a1103d35ac2a446251c9db0527534708462ad33ca66f8c35a67->leave($__internal_552adbdd0ab51a1103d35ac2a446251c9db0527534708462ad33ca66f8c35a67_prof);

        
        $__internal_7ae26225addbab4e44779e4d8e0248b2658aa8749ee2d5005e85edf4349a730d->leave($__internal_7ae26225addbab4e44779e4d8e0248b2658aa8749ee2d5005e85edf4349a730d_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c6550d531f3ebfe21b324f791b6a9467d541afc0569781ec324f38b7f2f5dd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6550d531f3ebfe21b324f791b6a9467d541afc0569781ec324f38b7f2f5dd3a->enter($__internal_c6550d531f3ebfe21b324f791b6a9467d541afc0569781ec324f38b7f2f5dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_e4de56779997bfa06edf035d549e7774293159ede197d00e966b665cb0d3503a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4de56779997bfa06edf035d549e7774293159ede197d00e966b665cb0d3503a->enter($__internal_e4de56779997bfa06edf035d549e7774293159ede197d00e966b665cb0d3503a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_e4de56779997bfa06edf035d549e7774293159ede197d00e966b665cb0d3503a->leave($__internal_e4de56779997bfa06edf035d549e7774293159ede197d00e966b665cb0d3503a_prof);

        
        $__internal_c6550d531f3ebfe21b324f791b6a9467d541afc0569781ec324f38b7f2f5dd3a->leave($__internal_c6550d531f3ebfe21b324f791b6a9467d541afc0569781ec324f38b7f2f5dd3a_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cd5076c698f563cd1e7b07929f6547ece907a752b2c016ce4a74c176074a76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd5076c698f563cd1e7b07929f6547ece907a752b2c016ce4a74c176074a76c->enter($__internal_8cd5076c698f563cd1e7b07929f6547ece907a752b2c016ce4a74c176074a76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b50d7c2f30846bebe35681fa0a0136ac99d23e4c57ac6b9caec0b41e1419bdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50d7c2f30846bebe35681fa0a0136ac99d23e4c57ac6b9caec0b41e1419bdcc->enter($__internal_b50d7c2f30846bebe35681fa0a0136ac99d23e4c57ac6b9caec0b41e1419bdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_b50d7c2f30846bebe35681fa0a0136ac99d23e4c57ac6b9caec0b41e1419bdcc->leave($__internal_b50d7c2f30846bebe35681fa0a0136ac99d23e4c57ac6b9caec0b41e1419bdcc_prof);

        
        $__internal_8cd5076c698f563cd1e7b07929f6547ece907a752b2c016ce4a74c176074a76c->leave($__internal_8cd5076c698f563cd1e7b07929f6547ece907a752b2c016ce4a74c176074a76c_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_4fbbe23466437be27181da3ac118f888c003a5150e4c7810ec26963b4cd26ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbbe23466437be27181da3ac118f888c003a5150e4c7810ec26963b4cd26ef8->enter($__internal_4fbbe23466437be27181da3ac118f888c003a5150e4c7810ec26963b4cd26ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_45b3a241d2fb35b10aeeb87b895503d50c64e2d7adf8b6ec967d88e86050016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b3a241d2fb35b10aeeb87b895503d50c64e2d7adf8b6ec967d88e86050016c->enter($__internal_45b3a241d2fb35b10aeeb87b895503d50c64e2d7adf8b6ec967d88e86050016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_45b3a241d2fb35b10aeeb87b895503d50c64e2d7adf8b6ec967d88e86050016c->leave($__internal_45b3a241d2fb35b10aeeb87b895503d50c64e2d7adf8b6ec967d88e86050016c_prof);

        
        $__internal_4fbbe23466437be27181da3ac118f888c003a5150e4c7810ec26963b4cd26ef8->leave($__internal_4fbbe23466437be27181da3ac118f888c003a5150e4c7810ec26963b4cd26ef8_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8b16defbb08f78c4f747703dec1018842956088b8668b8e42cc025bbb4d0c74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b16defbb08f78c4f747703dec1018842956088b8668b8e42cc025bbb4d0c74e->enter($__internal_8b16defbb08f78c4f747703dec1018842956088b8668b8e42cc025bbb4d0c74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_b7c280842c5bf2deb79b3e1ce009b1876866a91752c47884d52d4beae6d92678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c280842c5bf2deb79b3e1ce009b1876866a91752c47884d52d4beae6d92678->enter($__internal_b7c280842c5bf2deb79b3e1ce009b1876866a91752c47884d52d4beae6d92678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_b7c280842c5bf2deb79b3e1ce009b1876866a91752c47884d52d4beae6d92678->leave($__internal_b7c280842c5bf2deb79b3e1ce009b1876866a91752c47884d52d4beae6d92678_prof);

        
        $__internal_8b16defbb08f78c4f747703dec1018842956088b8668b8e42cc025bbb4d0c74e->leave($__internal_8b16defbb08f78c4f747703dec1018842956088b8668b8e42cc025bbb4d0c74e_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ec6340b7d7ba4a6bd82384c0aeff072cf2c1e01429757178371aece26085df08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6340b7d7ba4a6bd82384c0aeff072cf2c1e01429757178371aece26085df08->enter($__internal_ec6340b7d7ba4a6bd82384c0aeff072cf2c1e01429757178371aece26085df08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c1624286c4ee2d73fc75cb2a87147051f0fa18b5bc4eebda74ee579c56415d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1624286c4ee2d73fc75cb2a87147051f0fa18b5bc4eebda74ee579c56415d4c->enter($__internal_c1624286c4ee2d73fc75cb2a87147051f0fa18b5bc4eebda74ee579c56415d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c1624286c4ee2d73fc75cb2a87147051f0fa18b5bc4eebda74ee579c56415d4c->leave($__internal_c1624286c4ee2d73fc75cb2a87147051f0fa18b5bc4eebda74ee579c56415d4c_prof);

        
        $__internal_ec6340b7d7ba4a6bd82384c0aeff072cf2c1e01429757178371aece26085df08->leave($__internal_ec6340b7d7ba4a6bd82384c0aeff072cf2c1e01429757178371aece26085df08_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_bb4a73c0221b001451a48ee1cc4f71c32ef8e0e80794f3828d17c750fc2b8789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4a73c0221b001451a48ee1cc4f71c32ef8e0e80794f3828d17c750fc2b8789->enter($__internal_bb4a73c0221b001451a48ee1cc4f71c32ef8e0e80794f3828d17c750fc2b8789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_149b105ff562e3c1b81fb762b83acbe8708161ab0f365f0c71ca59f00e928e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149b105ff562e3c1b81fb762b83acbe8708161ab0f365f0c71ca59f00e928e3a->enter($__internal_149b105ff562e3c1b81fb762b83acbe8708161ab0f365f0c71ca59f00e928e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_149b105ff562e3c1b81fb762b83acbe8708161ab0f365f0c71ca59f00e928e3a->leave($__internal_149b105ff562e3c1b81fb762b83acbe8708161ab0f365f0c71ca59f00e928e3a_prof);

        
        $__internal_bb4a73c0221b001451a48ee1cc4f71c32ef8e0e80794f3828d17c750fc2b8789->leave($__internal_bb4a73c0221b001451a48ee1cc4f71c32ef8e0e80794f3828d17c750fc2b8789_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_dae0e24a73758e9d8b185fbdd70294aa9aa93883b38b863e8e6bbaffbaf82f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae0e24a73758e9d8b185fbdd70294aa9aa93883b38b863e8e6bbaffbaf82f29->enter($__internal_dae0e24a73758e9d8b185fbdd70294aa9aa93883b38b863e8e6bbaffbaf82f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_89f958223969005c3ea2acbdebf0f03a60e16f29bce141a23975dd3f9884ca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f958223969005c3ea2acbdebf0f03a60e16f29bce141a23975dd3f9884ca63->enter($__internal_89f958223969005c3ea2acbdebf0f03a60e16f29bce141a23975dd3f9884ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_89f958223969005c3ea2acbdebf0f03a60e16f29bce141a23975dd3f9884ca63->leave($__internal_89f958223969005c3ea2acbdebf0f03a60e16f29bce141a23975dd3f9884ca63_prof);

        
        $__internal_dae0e24a73758e9d8b185fbdd70294aa9aa93883b38b863e8e6bbaffbaf82f29->leave($__internal_dae0e24a73758e9d8b185fbdd70294aa9aa93883b38b863e8e6bbaffbaf82f29_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_66891fcd8b421d3190829e6340954d9865ccdf11e6240e3998efb5bdb331683c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66891fcd8b421d3190829e6340954d9865ccdf11e6240e3998efb5bdb331683c->enter($__internal_66891fcd8b421d3190829e6340954d9865ccdf11e6240e3998efb5bdb331683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_e3f95671ac21f89b7f6ab4bcf45b55baf97b91d479f58c7e163ee04aec05aa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f95671ac21f89b7f6ab4bcf45b55baf97b91d479f58c7e163ee04aec05aa03->enter($__internal_e3f95671ac21f89b7f6ab4bcf45b55baf97b91d479f58c7e163ee04aec05aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_e3f95671ac21f89b7f6ab4bcf45b55baf97b91d479f58c7e163ee04aec05aa03->leave($__internal_e3f95671ac21f89b7f6ab4bcf45b55baf97b91d479f58c7e163ee04aec05aa03_prof);

        
        $__internal_66891fcd8b421d3190829e6340954d9865ccdf11e6240e3998efb5bdb331683c->leave($__internal_66891fcd8b421d3190829e6340954d9865ccdf11e6240e3998efb5bdb331683c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 160,  768 => 153,  758 => 149,  751 => 145,  747 => 143,  744 => 142,  735 => 141,  706 => 139,  697 => 138,  684 => 134,  675 => 133,  664 => 154,  662 => 153,  657 => 150,  654 => 141,  652 => 138,  648 => 136,  645 => 133,  636 => 132,  625 => 125,  623 => 122,  621 => 121,  612 => 120,  601 => 127,  599 => 120,  596 => 119,  587 => 118,  577 => 104,  571 => 101,  568 => 100,  566 => 99,  559 => 97,  556 => 96,  547 => 95,  537 => 108,  532 => 105,  530 => 95,  521 => 89,  516 => 86,  511 => 84,  508 => 83,  506 => 82,  502 => 81,  499 => 80,  497 => 79,  491 => 77,  482 => 76,  470 => 109,  468 => 76,  464 => 74,  461 => 73,  452 => 72,  439 => 66,  430 => 65,  421 => 64,  409 => 112,  407 => 72,  402 => 69,  400 => 64,  393 => 60,  389 => 58,  380 => 57,  369 => 156,  367 => 132,  362 => 129,  360 => 118,  355 => 115,  353 => 57,  350 => 56,  341 => 55,  308 => 53,  297 => 165,  288 => 163,  284 => 162,  281 => 161,  279 => 160,  275 => 158,  273 => 55,  263 => 53,  254 => 52,  233 => 30,  224 => 29,  212 => 43,  209 => 42,  206 => 29,  197 => 28,  182 => 25,  179 => 24,  170 => 23,  157 => 15,  151 => 13,  142 => 12,  124 => 10,  113 => 167,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
