<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_99c419a5968f1ff8c37c6453d82e2ec29422ed41dc0894ba83f11edc015e5d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff80ac6edc3e5d7d9cae9645d22ced71d0c351bf97ef2692b51bb89a0438f61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff80ac6edc3e5d7d9cae9645d22ced71d0c351bf97ef2692b51bb89a0438f61d->enter($__internal_ff80ac6edc3e5d7d9cae9645d22ced71d0c351bf97ef2692b51bb89a0438f61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_506152b00c2bd07811b3ce63587584c54f8a14bc4ab41f9288f81cb12ae8ea67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506152b00c2bd07811b3ce63587584c54f8a14bc4ab41f9288f81cb12ae8ea67->enter($__internal_506152b00c2bd07811b3ce63587584c54f8a14bc4ab41f9288f81cb12ae8ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff80ac6edc3e5d7d9cae9645d22ced71d0c351bf97ef2692b51bb89a0438f61d->leave($__internal_ff80ac6edc3e5d7d9cae9645d22ced71d0c351bf97ef2692b51bb89a0438f61d_prof);

        
        $__internal_506152b00c2bd07811b3ce63587584c54f8a14bc4ab41f9288f81cb12ae8ea67->leave($__internal_506152b00c2bd07811b3ce63587584c54f8a14bc4ab41f9288f81cb12ae8ea67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_463ff8bb8509b801a6605911d43e1fa6a48114340e1c080045688c29325dff64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463ff8bb8509b801a6605911d43e1fa6a48114340e1c080045688c29325dff64->enter($__internal_463ff8bb8509b801a6605911d43e1fa6a48114340e1c080045688c29325dff64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6000eb638d7f97cb1ce93d9e013aae0fbc657b1b438d9a8caef06e61735a228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6000eb638d7f97cb1ce93d9e013aae0fbc657b1b438d9a8caef06e61735a228->enter($__internal_e6000eb638d7f97cb1ce93d9e013aae0fbc657b1b438d9a8caef06e61735a228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e6000eb638d7f97cb1ce93d9e013aae0fbc657b1b438d9a8caef06e61735a228->leave($__internal_e6000eb638d7f97cb1ce93d9e013aae0fbc657b1b438d9a8caef06e61735a228_prof);

        
        $__internal_463ff8bb8509b801a6605911d43e1fa6a48114340e1c080045688c29325dff64->leave($__internal_463ff8bb8509b801a6605911d43e1fa6a48114340e1c080045688c29325dff64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43673b23f9371787087869f16bfaae9fe4278f87605eddda3836ecf17cd21391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43673b23f9371787087869f16bfaae9fe4278f87605eddda3836ecf17cd21391->enter($__internal_43673b23f9371787087869f16bfaae9fe4278f87605eddda3836ecf17cd21391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_281da5931a7187be466299793f818bc7d0c24f8a77a7984b90df9a65c9effe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281da5931a7187be466299793f818bc7d0c24f8a77a7984b90df9a65c9effe0f->enter($__internal_281da5931a7187be466299793f818bc7d0c24f8a77a7984b90df9a65c9effe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_281da5931a7187be466299793f818bc7d0c24f8a77a7984b90df9a65c9effe0f->leave($__internal_281da5931a7187be466299793f818bc7d0c24f8a77a7984b90df9a65c9effe0f_prof);

        
        $__internal_43673b23f9371787087869f16bfaae9fe4278f87605eddda3836ecf17cd21391->leave($__internal_43673b23f9371787087869f16bfaae9fe4278f87605eddda3836ecf17cd21391_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac936b5069acc6592e36e7dee990252be97b597d09111ab010a44f55ecbfe6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac936b5069acc6592e36e7dee990252be97b597d09111ab010a44f55ecbfe6d3->enter($__internal_ac936b5069acc6592e36e7dee990252be97b597d09111ab010a44f55ecbfe6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99ae46adaf6156bc2e3bbb095c8bace44488572333505613679b0cbd01915543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ae46adaf6156bc2e3bbb095c8bace44488572333505613679b0cbd01915543->enter($__internal_99ae46adaf6156bc2e3bbb095c8bace44488572333505613679b0cbd01915543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_99ae46adaf6156bc2e3bbb095c8bace44488572333505613679b0cbd01915543->leave($__internal_99ae46adaf6156bc2e3bbb095c8bace44488572333505613679b0cbd01915543_prof);

        
        $__internal_ac936b5069acc6592e36e7dee990252be97b597d09111ab010a44f55ecbfe6d3->leave($__internal_ac936b5069acc6592e36e7dee990252be97b597d09111ab010a44f55ecbfe6d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
