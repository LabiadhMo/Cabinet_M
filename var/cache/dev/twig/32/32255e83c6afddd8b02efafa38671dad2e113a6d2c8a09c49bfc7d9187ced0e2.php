<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b89bbfc9453b86c385578895fe542bed08857d16d802d5d0be028bb04ce70f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fdac9f6ec887cb3b86e16ad349e611de92765e673b3b7e6dfb049ff6eda94ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdac9f6ec887cb3b86e16ad349e611de92765e673b3b7e6dfb049ff6eda94ce->enter($__internal_8fdac9f6ec887cb3b86e16ad349e611de92765e673b3b7e6dfb049ff6eda94ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4628a93f6267af80e874c2b6d7ff093158a68f957c6b6cd1043cbdd87d5bccd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4628a93f6267af80e874c2b6d7ff093158a68f957c6b6cd1043cbdd87d5bccd6->enter($__internal_4628a93f6267af80e874c2b6d7ff093158a68f957c6b6cd1043cbdd87d5bccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8fdac9f6ec887cb3b86e16ad349e611de92765e673b3b7e6dfb049ff6eda94ce->leave($__internal_8fdac9f6ec887cb3b86e16ad349e611de92765e673b3b7e6dfb049ff6eda94ce_prof);

        
        $__internal_4628a93f6267af80e874c2b6d7ff093158a68f957c6b6cd1043cbdd87d5bccd6->leave($__internal_4628a93f6267af80e874c2b6d7ff093158a68f957c6b6cd1043cbdd87d5bccd6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f5de53c68ecf03b8e2d21b563f7a2298e01321400eae83ab8926e6baac4a061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5de53c68ecf03b8e2d21b563f7a2298e01321400eae83ab8926e6baac4a061->enter($__internal_9f5de53c68ecf03b8e2d21b563f7a2298e01321400eae83ab8926e6baac4a061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8efa4bb3d5ae164779618d2a5152e41d488ca75b928e4adfa9c2fadb5ae1004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8efa4bb3d5ae164779618d2a5152e41d488ca75b928e4adfa9c2fadb5ae1004->enter($__internal_a8efa4bb3d5ae164779618d2a5152e41d488ca75b928e4adfa9c2fadb5ae1004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a8efa4bb3d5ae164779618d2a5152e41d488ca75b928e4adfa9c2fadb5ae1004->leave($__internal_a8efa4bb3d5ae164779618d2a5152e41d488ca75b928e4adfa9c2fadb5ae1004_prof);

        
        $__internal_9f5de53c68ecf03b8e2d21b563f7a2298e01321400eae83ab8926e6baac4a061->leave($__internal_9f5de53c68ecf03b8e2d21b563f7a2298e01321400eae83ab8926e6baac4a061_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e46fb3496e79d61940d9caf16a2e0fe0c7b7fc737cd0083dcd07f2c325ada5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46fb3496e79d61940d9caf16a2e0fe0c7b7fc737cd0083dcd07f2c325ada5e5->enter($__internal_e46fb3496e79d61940d9caf16a2e0fe0c7b7fc737cd0083dcd07f2c325ada5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c924bfe95f49e3e5c615e22eec137a58593d6dadd6c74ec9acedc8c6e3eb631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c924bfe95f49e3e5c615e22eec137a58593d6dadd6c74ec9acedc8c6e3eb631->enter($__internal_3c924bfe95f49e3e5c615e22eec137a58593d6dadd6c74ec9acedc8c6e3eb631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3c924bfe95f49e3e5c615e22eec137a58593d6dadd6c74ec9acedc8c6e3eb631->leave($__internal_3c924bfe95f49e3e5c615e22eec137a58593d6dadd6c74ec9acedc8c6e3eb631_prof);

        
        $__internal_e46fb3496e79d61940d9caf16a2e0fe0c7b7fc737cd0083dcd07f2c325ada5e5->leave($__internal_e46fb3496e79d61940d9caf16a2e0fe0c7b7fc737cd0083dcd07f2c325ada5e5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ca9bcbdca59d88d8e6e7aa2bccc98110e83cd66e501ae893283085b374572f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ca9bcbdca59d88d8e6e7aa2bccc98110e83cd66e501ae893283085b374572f->enter($__internal_90ca9bcbdca59d88d8e6e7aa2bccc98110e83cd66e501ae893283085b374572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e28e620b2ebb4884babef058bcf17aa710dcd91f7a93e9154767eec2e5921402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28e620b2ebb4884babef058bcf17aa710dcd91f7a93e9154767eec2e5921402->enter($__internal_e28e620b2ebb4884babef058bcf17aa710dcd91f7a93e9154767eec2e5921402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e28e620b2ebb4884babef058bcf17aa710dcd91f7a93e9154767eec2e5921402->leave($__internal_e28e620b2ebb4884babef058bcf17aa710dcd91f7a93e9154767eec2e5921402_prof);

        
        $__internal_90ca9bcbdca59d88d8e6e7aa2bccc98110e83cd66e501ae893283085b374572f->leave($__internal_90ca9bcbdca59d88d8e6e7aa2bccc98110e83cd66e501ae893283085b374572f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
