<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d3d2dc5700062206cc6677871c708812183e57c0c826dfe1e6b5c542ed579246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7510b33a3da971d60503b3cf3608765cafe9a9541a83421efcbf7904feff09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7510b33a3da971d60503b3cf3608765cafe9a9541a83421efcbf7904feff09f->enter($__internal_c7510b33a3da971d60503b3cf3608765cafe9a9541a83421efcbf7904feff09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_dea82de1ab102912cba70d3bb5387869b2b56b21f44844cf5a044f573ad7fc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea82de1ab102912cba70d3bb5387869b2b56b21f44844cf5a044f573ad7fc2f->enter($__internal_dea82de1ab102912cba70d3bb5387869b2b56b21f44844cf5a044f573ad7fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7510b33a3da971d60503b3cf3608765cafe9a9541a83421efcbf7904feff09f->leave($__internal_c7510b33a3da971d60503b3cf3608765cafe9a9541a83421efcbf7904feff09f_prof);

        
        $__internal_dea82de1ab102912cba70d3bb5387869b2b56b21f44844cf5a044f573ad7fc2f->leave($__internal_dea82de1ab102912cba70d3bb5387869b2b56b21f44844cf5a044f573ad7fc2f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_12eca725c17ab99795727a77e4f059c3b77c1b50ebc00e52459decabb276f36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12eca725c17ab99795727a77e4f059c3b77c1b50ebc00e52459decabb276f36d->enter($__internal_12eca725c17ab99795727a77e4f059c3b77c1b50ebc00e52459decabb276f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06cd3069042e43e1d52976ed33e6386e41acce3700783463dac076eb5476ecac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cd3069042e43e1d52976ed33e6386e41acce3700783463dac076eb5476ecac->enter($__internal_06cd3069042e43e1d52976ed33e6386e41acce3700783463dac076eb5476ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        <div>
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
";
        
        $__internal_06cd3069042e43e1d52976ed33e6386e41acce3700783463dac076eb5476ecac->leave($__internal_06cd3069042e43e1d52976ed33e6386e41acce3700783463dac076eb5476ecac_prof);

        
        $__internal_12eca725c17ab99795727a77e4f059c3b77c1b50ebc00e52459decabb276f36d->leave($__internal_12eca725c17ab99795727a77e4f059c3b77c1b50ebc00e52459decabb276f36d_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b815df767ba371e347b6864ef09a77317fafca9815745c1c46eccd3a86dbfb5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b815df767ba371e347b6864ef09a77317fafca9815745c1c46eccd3a86dbfb5c->enter($__internal_b815df767ba371e347b6864ef09a77317fafca9815745c1c46eccd3a86dbfb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_257153293f62e699602359c79b2d70173056b53884c6effbb48eff0dd84e6a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257153293f62e699602359c79b2d70173056b53884c6effbb48eff0dd84e6a51->enter($__internal_257153293f62e699602359c79b2d70173056b53884c6effbb48eff0dd84e6a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_257153293f62e699602359c79b2d70173056b53884c6effbb48eff0dd84e6a51->leave($__internal_257153293f62e699602359c79b2d70173056b53884c6effbb48eff0dd84e6a51_prof);

        
        $__internal_b815df767ba371e347b6864ef09a77317fafca9815745c1c46eccd3a86dbfb5c->leave($__internal_b815df767ba371e347b6864ef09a77317fafca9815745c1c46eccd3a86dbfb5c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  109 => 18,  97 => 20,  95 => 18,  91 => 16,  88 => 15,  82 => 14,  73 => 11,  68 => 10,  63 => 9,  58 => 8,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
