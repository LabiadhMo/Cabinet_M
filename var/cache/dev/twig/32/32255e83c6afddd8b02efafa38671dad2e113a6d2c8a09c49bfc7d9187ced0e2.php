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
        $__internal_0c3b941cfc318cc79bba6743a9cd492967f49e657273ba9e316524b618e9a158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3b941cfc318cc79bba6743a9cd492967f49e657273ba9e316524b618e9a158->enter($__internal_0c3b941cfc318cc79bba6743a9cd492967f49e657273ba9e316524b618e9a158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5ee1699782f2eb4b9033a8219d89ea624cdd863a124e9e246e7e4bf93f32d682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee1699782f2eb4b9033a8219d89ea624cdd863a124e9e246e7e4bf93f32d682->enter($__internal_5ee1699782f2eb4b9033a8219d89ea624cdd863a124e9e246e7e4bf93f32d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0c3b941cfc318cc79bba6743a9cd492967f49e657273ba9e316524b618e9a158->leave($__internal_0c3b941cfc318cc79bba6743a9cd492967f49e657273ba9e316524b618e9a158_prof);

        
        $__internal_5ee1699782f2eb4b9033a8219d89ea624cdd863a124e9e246e7e4bf93f32d682->leave($__internal_5ee1699782f2eb4b9033a8219d89ea624cdd863a124e9e246e7e4bf93f32d682_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_879db18768f95e86fd6367b0311dfebb37975f7655b4eb4a6eb756e6292423bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879db18768f95e86fd6367b0311dfebb37975f7655b4eb4a6eb756e6292423bb->enter($__internal_879db18768f95e86fd6367b0311dfebb37975f7655b4eb4a6eb756e6292423bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a9b64ae870a864dd08e727d6d70ebc549e210f8eeb39e655881916fb8a7d7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9b64ae870a864dd08e727d6d70ebc549e210f8eeb39e655881916fb8a7d7e6->enter($__internal_6a9b64ae870a864dd08e727d6d70ebc549e210f8eeb39e655881916fb8a7d7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6a9b64ae870a864dd08e727d6d70ebc549e210f8eeb39e655881916fb8a7d7e6->leave($__internal_6a9b64ae870a864dd08e727d6d70ebc549e210f8eeb39e655881916fb8a7d7e6_prof);

        
        $__internal_879db18768f95e86fd6367b0311dfebb37975f7655b4eb4a6eb756e6292423bb->leave($__internal_879db18768f95e86fd6367b0311dfebb37975f7655b4eb4a6eb756e6292423bb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e4cad4c4de8a4119079cd3393837ae25049fc9d67c12e289cc8963628cd18d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4cad4c4de8a4119079cd3393837ae25049fc9d67c12e289cc8963628cd18d1->enter($__internal_6e4cad4c4de8a4119079cd3393837ae25049fc9d67c12e289cc8963628cd18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95bbcfbcd08b3ed3225c72a018b9e066a018aa0e653e36e87a1cdf88248b2116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bbcfbcd08b3ed3225c72a018b9e066a018aa0e653e36e87a1cdf88248b2116->enter($__internal_95bbcfbcd08b3ed3225c72a018b9e066a018aa0e653e36e87a1cdf88248b2116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_95bbcfbcd08b3ed3225c72a018b9e066a018aa0e653e36e87a1cdf88248b2116->leave($__internal_95bbcfbcd08b3ed3225c72a018b9e066a018aa0e653e36e87a1cdf88248b2116_prof);

        
        $__internal_6e4cad4c4de8a4119079cd3393837ae25049fc9d67c12e289cc8963628cd18d1->leave($__internal_6e4cad4c4de8a4119079cd3393837ae25049fc9d67c12e289cc8963628cd18d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f15d86c87028e5ec1bf151d08354f997d2a42287d3b011fa35069a2c302ecfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f15d86c87028e5ec1bf151d08354f997d2a42287d3b011fa35069a2c302ecfa->enter($__internal_6f15d86c87028e5ec1bf151d08354f997d2a42287d3b011fa35069a2c302ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5604b71979ed9fa5cbbbfc0a9146ab57284161a04dbba5f530911ce0fbb04e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5604b71979ed9fa5cbbbfc0a9146ab57284161a04dbba5f530911ce0fbb04e6->enter($__internal_d5604b71979ed9fa5cbbbfc0a9146ab57284161a04dbba5f530911ce0fbb04e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5604b71979ed9fa5cbbbfc0a9146ab57284161a04dbba5f530911ce0fbb04e6->leave($__internal_d5604b71979ed9fa5cbbbfc0a9146ab57284161a04dbba5f530911ce0fbb04e6_prof);

        
        $__internal_6f15d86c87028e5ec1bf151d08354f997d2a42287d3b011fa35069a2c302ecfa->leave($__internal_6f15d86c87028e5ec1bf151d08354f997d2a42287d3b011fa35069a2c302ecfa_prof);

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
