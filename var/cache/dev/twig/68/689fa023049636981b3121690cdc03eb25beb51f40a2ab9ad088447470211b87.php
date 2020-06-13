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
        $__internal_370f101e1508ef050a604b0def2918870cebd0d712ac9a6508c240b7e424624f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370f101e1508ef050a604b0def2918870cebd0d712ac9a6508c240b7e424624f->enter($__internal_370f101e1508ef050a604b0def2918870cebd0d712ac9a6508c240b7e424624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_a9b674dd7afbb80bf7ef2405f6930e0dac4abb52a695e963924b149f4235a046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b674dd7afbb80bf7ef2405f6930e0dac4abb52a695e963924b149f4235a046->enter($__internal_a9b674dd7afbb80bf7ef2405f6930e0dac4abb52a695e963924b149f4235a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_370f101e1508ef050a604b0def2918870cebd0d712ac9a6508c240b7e424624f->leave($__internal_370f101e1508ef050a604b0def2918870cebd0d712ac9a6508c240b7e424624f_prof);

        
        $__internal_a9b674dd7afbb80bf7ef2405f6930e0dac4abb52a695e963924b149f4235a046->leave($__internal_a9b674dd7afbb80bf7ef2405f6930e0dac4abb52a695e963924b149f4235a046_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a4ea638fe28813ec3476dc415e1988af0fbddf8fc8ef06bf6bc434984dc412fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ea638fe28813ec3476dc415e1988af0fbddf8fc8ef06bf6bc434984dc412fc->enter($__internal_a4ea638fe28813ec3476dc415e1988af0fbddf8fc8ef06bf6bc434984dc412fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_23ceb11d6159988748b1912d1b10271284feb59be3f363335fec6017b6cfc660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ceb11d6159988748b1912d1b10271284feb59be3f363335fec6017b6cfc660->enter($__internal_23ceb11d6159988748b1912d1b10271284feb59be3f363335fec6017b6cfc660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_23ceb11d6159988748b1912d1b10271284feb59be3f363335fec6017b6cfc660->leave($__internal_23ceb11d6159988748b1912d1b10271284feb59be3f363335fec6017b6cfc660_prof);

        
        $__internal_a4ea638fe28813ec3476dc415e1988af0fbddf8fc8ef06bf6bc434984dc412fc->leave($__internal_a4ea638fe28813ec3476dc415e1988af0fbddf8fc8ef06bf6bc434984dc412fc_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_9f99d38e6c16cab302fb170a69d508450811fe121a5716123c298fbf4ba8b02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f99d38e6c16cab302fb170a69d508450811fe121a5716123c298fbf4ba8b02e->enter($__internal_9f99d38e6c16cab302fb170a69d508450811fe121a5716123c298fbf4ba8b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_a69e5e47d7de5fcb175a6e5e8ce5766fe512884b908aebd553022b9f037e6d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69e5e47d7de5fcb175a6e5e8ce5766fe512884b908aebd553022b9f037e6d75->enter($__internal_a69e5e47d7de5fcb175a6e5e8ce5766fe512884b908aebd553022b9f037e6d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_a69e5e47d7de5fcb175a6e5e8ce5766fe512884b908aebd553022b9f037e6d75->leave($__internal_a69e5e47d7de5fcb175a6e5e8ce5766fe512884b908aebd553022b9f037e6d75_prof);

        
        $__internal_9f99d38e6c16cab302fb170a69d508450811fe121a5716123c298fbf4ba8b02e->leave($__internal_9f99d38e6c16cab302fb170a69d508450811fe121a5716123c298fbf4ba8b02e_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_58d1547e839f8967aa95d6386a4d0aab9170a01f77efbc1300e9285d1e67214f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d1547e839f8967aa95d6386a4d0aab9170a01f77efbc1300e9285d1e67214f->enter($__internal_58d1547e839f8967aa95d6386a4d0aab9170a01f77efbc1300e9285d1e67214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_d233d4ec0338aee823765b54f6b5bc966ef463d981f9145417cfc0dea05790c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d233d4ec0338aee823765b54f6b5bc966ef463d981f9145417cfc0dea05790c7->enter($__internal_d233d4ec0338aee823765b54f6b5bc966ef463d981f9145417cfc0dea05790c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_d233d4ec0338aee823765b54f6b5bc966ef463d981f9145417cfc0dea05790c7->leave($__internal_d233d4ec0338aee823765b54f6b5bc966ef463d981f9145417cfc0dea05790c7_prof);

        
        $__internal_58d1547e839f8967aa95d6386a4d0aab9170a01f77efbc1300e9285d1e67214f->leave($__internal_58d1547e839f8967aa95d6386a4d0aab9170a01f77efbc1300e9285d1e67214f_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_33b40500a97cf614899a1c8e84b2f2c7892ace670f9e846f901ebd0bdba0a8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b40500a97cf614899a1c8e84b2f2c7892ace670f9e846f901ebd0bdba0a8e5->enter($__internal_33b40500a97cf614899a1c8e84b2f2c7892ace670f9e846f901ebd0bdba0a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_009cfe600afe55efec9036da4c142e7ffc9ff39ae0ee2af4b3f4b8460810cebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009cfe600afe55efec9036da4c142e7ffc9ff39ae0ee2af4b3f4b8460810cebb->enter($__internal_009cfe600afe55efec9036da4c142e7ffc9ff39ae0ee2af4b3f4b8460810cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_009cfe600afe55efec9036da4c142e7ffc9ff39ae0ee2af4b3f4b8460810cebb->leave($__internal_009cfe600afe55efec9036da4c142e7ffc9ff39ae0ee2af4b3f4b8460810cebb_prof);

        
        $__internal_33b40500a97cf614899a1c8e84b2f2c7892ace670f9e846f901ebd0bdba0a8e5->leave($__internal_33b40500a97cf614899a1c8e84b2f2c7892ace670f9e846f901ebd0bdba0a8e5_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_6fc46210a3d33348cd1482d4d7d7e9baf51961110f8b70604d5531b407685ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc46210a3d33348cd1482d4d7d7e9baf51961110f8b70604d5531b407685ee0->enter($__internal_6fc46210a3d33348cd1482d4d7d7e9baf51961110f8b70604d5531b407685ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_2cefa2431c19d0d593160a44a8ccf56d8314f78adaaa21237cffc0f571a78b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cefa2431c19d0d593160a44a8ccf56d8314f78adaaa21237cffc0f571a78b4c->enter($__internal_2cefa2431c19d0d593160a44a8ccf56d8314f78adaaa21237cffc0f571a78b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_2cefa2431c19d0d593160a44a8ccf56d8314f78adaaa21237cffc0f571a78b4c->leave($__internal_2cefa2431c19d0d593160a44a8ccf56d8314f78adaaa21237cffc0f571a78b4c_prof);

        
        $__internal_6fc46210a3d33348cd1482d4d7d7e9baf51961110f8b70604d5531b407685ee0->leave($__internal_6fc46210a3d33348cd1482d4d7d7e9baf51961110f8b70604d5531b407685ee0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5fe1094401220772837333bdfe89fb1f61bcd9b084bf2c4dad6cea527e9546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5fe1094401220772837333bdfe89fb1f61bcd9b084bf2c4dad6cea527e9546->enter($__internal_5d5fe1094401220772837333bdfe89fb1f61bcd9b084bf2c4dad6cea527e9546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4905ed86b8f97b6295db0695af0db3beeb5715bf0e69f3e726e61ba032db5a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4905ed86b8f97b6295db0695af0db3beeb5715bf0e69f3e726e61ba032db5a0a->enter($__internal_4905ed86b8f97b6295db0695af0db3beeb5715bf0e69f3e726e61ba032db5a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4905ed86b8f97b6295db0695af0db3beeb5715bf0e69f3e726e61ba032db5a0a->leave($__internal_4905ed86b8f97b6295db0695af0db3beeb5715bf0e69f3e726e61ba032db5a0a_prof);

        
        $__internal_5d5fe1094401220772837333bdfe89fb1f61bcd9b084bf2c4dad6cea527e9546->leave($__internal_5d5fe1094401220772837333bdfe89fb1f61bcd9b084bf2c4dad6cea527e9546_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_268c05c9841b2d460a8258182c0fcabe2739779e43ae6b6b12579ed680394e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268c05c9841b2d460a8258182c0fcabe2739779e43ae6b6b12579ed680394e84->enter($__internal_268c05c9841b2d460a8258182c0fcabe2739779e43ae6b6b12579ed680394e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_cac52251b7e2f012beeddeca7653b47ba1610d5b92030a1a7a78f9cdf4d366a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac52251b7e2f012beeddeca7653b47ba1610d5b92030a1a7a78f9cdf4d366a2->enter($__internal_cac52251b7e2f012beeddeca7653b47ba1610d5b92030a1a7a78f9cdf4d366a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_cac52251b7e2f012beeddeca7653b47ba1610d5b92030a1a7a78f9cdf4d366a2->leave($__internal_cac52251b7e2f012beeddeca7653b47ba1610d5b92030a1a7a78f9cdf4d366a2_prof);

        
        $__internal_268c05c9841b2d460a8258182c0fcabe2739779e43ae6b6b12579ed680394e84->leave($__internal_268c05c9841b2d460a8258182c0fcabe2739779e43ae6b6b12579ed680394e84_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_876821976d000ac8d2aef33de9651ba266ef5fcf8b9693fa22185ec026e4c01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876821976d000ac8d2aef33de9651ba266ef5fcf8b9693fa22185ec026e4c01b->enter($__internal_876821976d000ac8d2aef33de9651ba266ef5fcf8b9693fa22185ec026e4c01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_dae40cc65a9fb8399bf9008b6210869d3dfa75480fc22f61a5f0b577900b254f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae40cc65a9fb8399bf9008b6210869d3dfa75480fc22f61a5f0b577900b254f->enter($__internal_dae40cc65a9fb8399bf9008b6210869d3dfa75480fc22f61a5f0b577900b254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_dae40cc65a9fb8399bf9008b6210869d3dfa75480fc22f61a5f0b577900b254f->leave($__internal_dae40cc65a9fb8399bf9008b6210869d3dfa75480fc22f61a5f0b577900b254f_prof);

        
        $__internal_876821976d000ac8d2aef33de9651ba266ef5fcf8b9693fa22185ec026e4c01b->leave($__internal_876821976d000ac8d2aef33de9651ba266ef5fcf8b9693fa22185ec026e4c01b_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_4316eafd06a55311db1e263195fa28f9fff465d9129230a661cd9bcf77cc2a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4316eafd06a55311db1e263195fa28f9fff465d9129230a661cd9bcf77cc2a7d->enter($__internal_4316eafd06a55311db1e263195fa28f9fff465d9129230a661cd9bcf77cc2a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_c195d6b681bddb029f1bb0e8e302adbc5836ff4fc8e877455654648d71154838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c195d6b681bddb029f1bb0e8e302adbc5836ff4fc8e877455654648d71154838->enter($__internal_c195d6b681bddb029f1bb0e8e302adbc5836ff4fc8e877455654648d71154838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_c195d6b681bddb029f1bb0e8e302adbc5836ff4fc8e877455654648d71154838->leave($__internal_c195d6b681bddb029f1bb0e8e302adbc5836ff4fc8e877455654648d71154838_prof);

        
        $__internal_4316eafd06a55311db1e263195fa28f9fff465d9129230a661cd9bcf77cc2a7d->leave($__internal_4316eafd06a55311db1e263195fa28f9fff465d9129230a661cd9bcf77cc2a7d_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_98bfdf66caa782f74428409fabb7c24926074be4a854776de373524bebbad0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bfdf66caa782f74428409fabb7c24926074be4a854776de373524bebbad0eb->enter($__internal_98bfdf66caa782f74428409fabb7c24926074be4a854776de373524bebbad0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4c3703fc16fb1b7282ca8fbcdadf8720b1474a033e9e0cbe6cad9f4c47124d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3703fc16fb1b7282ca8fbcdadf8720b1474a033e9e0cbe6cad9f4c47124d99->enter($__internal_4c3703fc16fb1b7282ca8fbcdadf8720b1474a033e9e0cbe6cad9f4c47124d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4c3703fc16fb1b7282ca8fbcdadf8720b1474a033e9e0cbe6cad9f4c47124d99->leave($__internal_4c3703fc16fb1b7282ca8fbcdadf8720b1474a033e9e0cbe6cad9f4c47124d99_prof);

        
        $__internal_98bfdf66caa782f74428409fabb7c24926074be4a854776de373524bebbad0eb->leave($__internal_98bfdf66caa782f74428409fabb7c24926074be4a854776de373524bebbad0eb_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_01b176268bda1d7166e9d72101fcd5ba30f7fece0025f71d826da126dbf6bd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b176268bda1d7166e9d72101fcd5ba30f7fece0025f71d826da126dbf6bd50->enter($__internal_01b176268bda1d7166e9d72101fcd5ba30f7fece0025f71d826da126dbf6bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_00449e4a616ff42f8484563833a69e12dfd60c5a628c361fabb56d4f610291e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00449e4a616ff42f8484563833a69e12dfd60c5a628c361fabb56d4f610291e5->enter($__internal_00449e4a616ff42f8484563833a69e12dfd60c5a628c361fabb56d4f610291e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_00449e4a616ff42f8484563833a69e12dfd60c5a628c361fabb56d4f610291e5->leave($__internal_00449e4a616ff42f8484563833a69e12dfd60c5a628c361fabb56d4f610291e5_prof);

        
        $__internal_01b176268bda1d7166e9d72101fcd5ba30f7fece0025f71d826da126dbf6bd50->leave($__internal_01b176268bda1d7166e9d72101fcd5ba30f7fece0025f71d826da126dbf6bd50_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_0967616d33405d5562f8919d96c0a1afc99b63f6b20dac4e93a6c1258a4955a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0967616d33405d5562f8919d96c0a1afc99b63f6b20dac4e93a6c1258a4955a3->enter($__internal_0967616d33405d5562f8919d96c0a1afc99b63f6b20dac4e93a6c1258a4955a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_231f28f4da81f93c2d170a9188bb0cc496fa8b79cb1ad3a9ed1c1b431e91e4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231f28f4da81f93c2d170a9188bb0cc496fa8b79cb1ad3a9ed1c1b431e91e4ea->enter($__internal_231f28f4da81f93c2d170a9188bb0cc496fa8b79cb1ad3a9ed1c1b431e91e4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_231f28f4da81f93c2d170a9188bb0cc496fa8b79cb1ad3a9ed1c1b431e91e4ea->leave($__internal_231f28f4da81f93c2d170a9188bb0cc496fa8b79cb1ad3a9ed1c1b431e91e4ea_prof);

        
        $__internal_0967616d33405d5562f8919d96c0a1afc99b63f6b20dac4e93a6c1258a4955a3->leave($__internal_0967616d33405d5562f8919d96c0a1afc99b63f6b20dac4e93a6c1258a4955a3_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_2d41695326359dd74b66f4ae417d0f28b95fd7100b97c3a4be7d2caba8b0cacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d41695326359dd74b66f4ae417d0f28b95fd7100b97c3a4be7d2caba8b0cacc->enter($__internal_2d41695326359dd74b66f4ae417d0f28b95fd7100b97c3a4be7d2caba8b0cacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_8cc10a8df2543a32522585502e6af6a294315767573a6c453ed1007bfcb0eafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc10a8df2543a32522585502e6af6a294315767573a6c453ed1007bfcb0eafc->enter($__internal_8cc10a8df2543a32522585502e6af6a294315767573a6c453ed1007bfcb0eafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_8cc10a8df2543a32522585502e6af6a294315767573a6c453ed1007bfcb0eafc->leave($__internal_8cc10a8df2543a32522585502e6af6a294315767573a6c453ed1007bfcb0eafc_prof);

        
        $__internal_2d41695326359dd74b66f4ae417d0f28b95fd7100b97c3a4be7d2caba8b0cacc->leave($__internal_2d41695326359dd74b66f4ae417d0f28b95fd7100b97c3a4be7d2caba8b0cacc_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_72338efa1fb49a0c3e0f1bd63ecfb723ba079c916ff60f355c7c03e4f30f0e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72338efa1fb49a0c3e0f1bd63ecfb723ba079c916ff60f355c7c03e4f30f0e79->enter($__internal_72338efa1fb49a0c3e0f1bd63ecfb723ba079c916ff60f355c7c03e4f30f0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_79848d3b22962bd6606e971be4f35a528dc2dbb5f2d67078446f548da0d4a54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79848d3b22962bd6606e971be4f35a528dc2dbb5f2d67078446f548da0d4a54f->enter($__internal_79848d3b22962bd6606e971be4f35a528dc2dbb5f2d67078446f548da0d4a54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_79848d3b22962bd6606e971be4f35a528dc2dbb5f2d67078446f548da0d4a54f->leave($__internal_79848d3b22962bd6606e971be4f35a528dc2dbb5f2d67078446f548da0d4a54f_prof);

        
        $__internal_72338efa1fb49a0c3e0f1bd63ecfb723ba079c916ff60f355c7c03e4f30f0e79->leave($__internal_72338efa1fb49a0c3e0f1bd63ecfb723ba079c916ff60f355c7c03e4f30f0e79_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ce518464c3a90b37e34ab82e20269a96a286884ec0f18926eab8622aa1c1c41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce518464c3a90b37e34ab82e20269a96a286884ec0f18926eab8622aa1c1c41a->enter($__internal_ce518464c3a90b37e34ab82e20269a96a286884ec0f18926eab8622aa1c1c41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_615c80489e4cbbf72a02a37c40eaf60b64bb373ac43b70fe0fab8fd6901d1362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c80489e4cbbf72a02a37c40eaf60b64bb373ac43b70fe0fab8fd6901d1362->enter($__internal_615c80489e4cbbf72a02a37c40eaf60b64bb373ac43b70fe0fab8fd6901d1362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_615c80489e4cbbf72a02a37c40eaf60b64bb373ac43b70fe0fab8fd6901d1362->leave($__internal_615c80489e4cbbf72a02a37c40eaf60b64bb373ac43b70fe0fab8fd6901d1362_prof);

        
        $__internal_ce518464c3a90b37e34ab82e20269a96a286884ec0f18926eab8622aa1c1c41a->leave($__internal_ce518464c3a90b37e34ab82e20269a96a286884ec0f18926eab8622aa1c1c41a_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_d4c12f74963ee91b62531082ced0b43076241d42bdb5d7dfd5c72e7d76906cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c12f74963ee91b62531082ced0b43076241d42bdb5d7dfd5c72e7d76906cf6->enter($__internal_d4c12f74963ee91b62531082ced0b43076241d42bdb5d7dfd5c72e7d76906cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_8c6b53f62b8d7be35072156bcd000afd686905340b9f3abd44a259db790ae306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6b53f62b8d7be35072156bcd000afd686905340b9f3abd44a259db790ae306->enter($__internal_8c6b53f62b8d7be35072156bcd000afd686905340b9f3abd44a259db790ae306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_8c6b53f62b8d7be35072156bcd000afd686905340b9f3abd44a259db790ae306->leave($__internal_8c6b53f62b8d7be35072156bcd000afd686905340b9f3abd44a259db790ae306_prof);

        
        $__internal_d4c12f74963ee91b62531082ced0b43076241d42bdb5d7dfd5c72e7d76906cf6->leave($__internal_d4c12f74963ee91b62531082ced0b43076241d42bdb5d7dfd5c72e7d76906cf6_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_04c47d6b71b73ae08d8a598a2dd63dade4763fe067b87500b421e851ebf1dd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c47d6b71b73ae08d8a598a2dd63dade4763fe067b87500b421e851ebf1dd6e->enter($__internal_04c47d6b71b73ae08d8a598a2dd63dade4763fe067b87500b421e851ebf1dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7788b57311afa1a1fdbb8af34e5309266cfec8519e2cfba64c50929caf257a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7788b57311afa1a1fdbb8af34e5309266cfec8519e2cfba64c50929caf257a5f->enter($__internal_7788b57311afa1a1fdbb8af34e5309266cfec8519e2cfba64c50929caf257a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7788b57311afa1a1fdbb8af34e5309266cfec8519e2cfba64c50929caf257a5f->leave($__internal_7788b57311afa1a1fdbb8af34e5309266cfec8519e2cfba64c50929caf257a5f_prof);

        
        $__internal_04c47d6b71b73ae08d8a598a2dd63dade4763fe067b87500b421e851ebf1dd6e->leave($__internal_04c47d6b71b73ae08d8a598a2dd63dade4763fe067b87500b421e851ebf1dd6e_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_b6be8b87bf55eff99857ccb89de3d2faf14f033fc752229821fd4d5d0aafe8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6be8b87bf55eff99857ccb89de3d2faf14f033fc752229821fd4d5d0aafe8ce->enter($__internal_b6be8b87bf55eff99857ccb89de3d2faf14f033fc752229821fd4d5d0aafe8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_65ae5103c33738198ff096889e78d92918019ea0e1ede64324b77fba2c7fd9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ae5103c33738198ff096889e78d92918019ea0e1ede64324b77fba2c7fd9c3->enter($__internal_65ae5103c33738198ff096889e78d92918019ea0e1ede64324b77fba2c7fd9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_65ae5103c33738198ff096889e78d92918019ea0e1ede64324b77fba2c7fd9c3->leave($__internal_65ae5103c33738198ff096889e78d92918019ea0e1ede64324b77fba2c7fd9c3_prof);

        
        $__internal_b6be8b87bf55eff99857ccb89de3d2faf14f033fc752229821fd4d5d0aafe8ce->leave($__internal_b6be8b87bf55eff99857ccb89de3d2faf14f033fc752229821fd4d5d0aafe8ce_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9ca744f156eb0620a3530a3c38122a79db417e3429b9422e943547cb309719aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca744f156eb0620a3530a3c38122a79db417e3429b9422e943547cb309719aa->enter($__internal_9ca744f156eb0620a3530a3c38122a79db417e3429b9422e943547cb309719aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_c86a9e8e6e5bcaef7debd1c733ec06b5221e249eee79acbd1387ca47afeb1242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86a9e8e6e5bcaef7debd1c733ec06b5221e249eee79acbd1387ca47afeb1242->enter($__internal_c86a9e8e6e5bcaef7debd1c733ec06b5221e249eee79acbd1387ca47afeb1242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_c86a9e8e6e5bcaef7debd1c733ec06b5221e249eee79acbd1387ca47afeb1242->leave($__internal_c86a9e8e6e5bcaef7debd1c733ec06b5221e249eee79acbd1387ca47afeb1242_prof);

        
        $__internal_9ca744f156eb0620a3530a3c38122a79db417e3429b9422e943547cb309719aa->leave($__internal_9ca744f156eb0620a3530a3c38122a79db417e3429b9422e943547cb309719aa_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_71e9d69cd5643b7dae4f73a634fea9ed70de1aa2fd8bcafffc5aa4f0b3dfb1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e9d69cd5643b7dae4f73a634fea9ed70de1aa2fd8bcafffc5aa4f0b3dfb1ba->enter($__internal_71e9d69cd5643b7dae4f73a634fea9ed70de1aa2fd8bcafffc5aa4f0b3dfb1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_0de63184c6c45ff5b5818dfe0f8033043c14d34f6ee102652c3373540c7e079c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de63184c6c45ff5b5818dfe0f8033043c14d34f6ee102652c3373540c7e079c->enter($__internal_0de63184c6c45ff5b5818dfe0f8033043c14d34f6ee102652c3373540c7e079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_0de63184c6c45ff5b5818dfe0f8033043c14d34f6ee102652c3373540c7e079c->leave($__internal_0de63184c6c45ff5b5818dfe0f8033043c14d34f6ee102652c3373540c7e079c_prof);

        
        $__internal_71e9d69cd5643b7dae4f73a634fea9ed70de1aa2fd8bcafffc5aa4f0b3dfb1ba->leave($__internal_71e9d69cd5643b7dae4f73a634fea9ed70de1aa2fd8bcafffc5aa4f0b3dfb1ba_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_8d2c285ab3cb7089aeebabbb8683c05321b7c64e50a5662e780061e6bdc50738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2c285ab3cb7089aeebabbb8683c05321b7c64e50a5662e780061e6bdc50738->enter($__internal_8d2c285ab3cb7089aeebabbb8683c05321b7c64e50a5662e780061e6bdc50738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_ae46801e7e891331a43848dd7e83ad14f460290bfe674f93794ac2424ceb70eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae46801e7e891331a43848dd7e83ad14f460290bfe674f93794ac2424ceb70eb->enter($__internal_ae46801e7e891331a43848dd7e83ad14f460290bfe674f93794ac2424ceb70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_ae46801e7e891331a43848dd7e83ad14f460290bfe674f93794ac2424ceb70eb->leave($__internal_ae46801e7e891331a43848dd7e83ad14f460290bfe674f93794ac2424ceb70eb_prof);

        
        $__internal_8d2c285ab3cb7089aeebabbb8683c05321b7c64e50a5662e780061e6bdc50738->leave($__internal_8d2c285ab3cb7089aeebabbb8683c05321b7c64e50a5662e780061e6bdc50738_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_983a4fee9039be94746018df07d4675d0eacae6263ab9c8835cdb1f665de599a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983a4fee9039be94746018df07d4675d0eacae6263ab9c8835cdb1f665de599a->enter($__internal_983a4fee9039be94746018df07d4675d0eacae6263ab9c8835cdb1f665de599a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0bdbc730f7b2118775d2b8adcb8ebf2bc99df27828cea62473770ad4a1285334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdbc730f7b2118775d2b8adcb8ebf2bc99df27828cea62473770ad4a1285334->enter($__internal_0bdbc730f7b2118775d2b8adcb8ebf2bc99df27828cea62473770ad4a1285334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0bdbc730f7b2118775d2b8adcb8ebf2bc99df27828cea62473770ad4a1285334->leave($__internal_0bdbc730f7b2118775d2b8adcb8ebf2bc99df27828cea62473770ad4a1285334_prof);

        
        $__internal_983a4fee9039be94746018df07d4675d0eacae6263ab9c8835cdb1f665de599a->leave($__internal_983a4fee9039be94746018df07d4675d0eacae6263ab9c8835cdb1f665de599a_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_24105b151cf3befc8f02ee39d04d9857282bb806972288973b07774bea2256f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24105b151cf3befc8f02ee39d04d9857282bb806972288973b07774bea2256f2->enter($__internal_24105b151cf3befc8f02ee39d04d9857282bb806972288973b07774bea2256f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_66685fafebec27d71978b78e5133fd78d45329ab8855cd13f9caae003833c25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66685fafebec27d71978b78e5133fd78d45329ab8855cd13f9caae003833c25e->enter($__internal_66685fafebec27d71978b78e5133fd78d45329ab8855cd13f9caae003833c25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_66685fafebec27d71978b78e5133fd78d45329ab8855cd13f9caae003833c25e->leave($__internal_66685fafebec27d71978b78e5133fd78d45329ab8855cd13f9caae003833c25e_prof);

        
        $__internal_24105b151cf3befc8f02ee39d04d9857282bb806972288973b07774bea2256f2->leave($__internal_24105b151cf3befc8f02ee39d04d9857282bb806972288973b07774bea2256f2_prof);

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
