<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_aa82893f76cea775c0e7bbe05268c2f2693097533094262ded8147abe3172e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eff053922ab679b49824617d6df42618e8332d708f214fcd192f9dd3d54f5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eff053922ab679b49824617d6df42618e8332d708f214fcd192f9dd3d54f5f1->enter($__internal_7eff053922ab679b49824617d6df42618e8332d708f214fcd192f9dd3d54f5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_7efde6d3f2fa4e19f755ffb988d5083cf1d7a7fe8ebb6067ce51552004802b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efde6d3f2fa4e19f755ffb988d5083cf1d7a7fe8ebb6067ce51552004802b34->enter($__internal_7efde6d3f2fa4e19f755ffb988d5083cf1d7a7fe8ebb6067ce51552004802b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7eff053922ab679b49824617d6df42618e8332d708f214fcd192f9dd3d54f5f1->leave($__internal_7eff053922ab679b49824617d6df42618e8332d708f214fcd192f9dd3d54f5f1_prof);

        
        $__internal_7efde6d3f2fa4e19f755ffb988d5083cf1d7a7fe8ebb6067ce51552004802b34->leave($__internal_7efde6d3f2fa4e19f755ffb988d5083cf1d7a7fe8ebb6067ce51552004802b34_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_00d03b963120af054cb76d0a03038b73ec05ce3bdf02404d8c2751174eb5ae16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d03b963120af054cb76d0a03038b73ec05ce3bdf02404d8c2751174eb5ae16->enter($__internal_00d03b963120af054cb76d0a03038b73ec05ce3bdf02404d8c2751174eb5ae16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_eb51965e508f310199bdc0cbcd4ceb0610eb98b621b9e9ac8b83a73d32d985f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb51965e508f310199bdc0cbcd4ceb0610eb98b621b9e9ac8b83a73d32d985f9->enter($__internal_eb51965e508f310199bdc0cbcd4ceb0610eb98b621b9e9ac8b83a73d32d985f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_eb51965e508f310199bdc0cbcd4ceb0610eb98b621b9e9ac8b83a73d32d985f9->leave($__internal_eb51965e508f310199bdc0cbcd4ceb0610eb98b621b9e9ac8b83a73d32d985f9_prof);

        
        $__internal_00d03b963120af054cb76d0a03038b73ec05ce3bdf02404d8c2751174eb5ae16->leave($__internal_00d03b963120af054cb76d0a03038b73ec05ce3bdf02404d8c2751174eb5ae16_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5dc005ba29f9bc251a4f2a4a4ecbfd5d69ca14fad248df88eca76114437bbc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc005ba29f9bc251a4f2a4a4ecbfd5d69ca14fad248df88eca76114437bbc33->enter($__internal_5dc005ba29f9bc251a4f2a4a4ecbfd5d69ca14fad248df88eca76114437bbc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_89504fdd194c3eae4fed5ae2a16b1e8a2356a6ae4be4459d8f55aab4661b4f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89504fdd194c3eae4fed5ae2a16b1e8a2356a6ae4be4459d8f55aab4661b4f7e->enter($__internal_89504fdd194c3eae4fed5ae2a16b1e8a2356a6ae4be4459d8f55aab4661b4f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_89504fdd194c3eae4fed5ae2a16b1e8a2356a6ae4be4459d8f55aab4661b4f7e->leave($__internal_89504fdd194c3eae4fed5ae2a16b1e8a2356a6ae4be4459d8f55aab4661b4f7e_prof);

        
        $__internal_5dc005ba29f9bc251a4f2a4a4ecbfd5d69ca14fad248df88eca76114437bbc33->leave($__internal_5dc005ba29f9bc251a4f2a4a4ecbfd5d69ca14fad248df88eca76114437bbc33_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a1b8c9210a4bf7ec7987f5ac6a4207c26c93b5d3d55d6cd0922732c9fadeb6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b8c9210a4bf7ec7987f5ac6a4207c26c93b5d3d55d6cd0922732c9fadeb6b1->enter($__internal_a1b8c9210a4bf7ec7987f5ac6a4207c26c93b5d3d55d6cd0922732c9fadeb6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ba8e878a04e23fe1ede25076b192a93fb1d8850dda5062b990827b37f1d82f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8e878a04e23fe1ede25076b192a93fb1d8850dda5062b990827b37f1d82f48->enter($__internal_ba8e878a04e23fe1ede25076b192a93fb1d8850dda5062b990827b37f1d82f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ba8e878a04e23fe1ede25076b192a93fb1d8850dda5062b990827b37f1d82f48->leave($__internal_ba8e878a04e23fe1ede25076b192a93fb1d8850dda5062b990827b37f1d82f48_prof);

        
        $__internal_a1b8c9210a4bf7ec7987f5ac6a4207c26c93b5d3d55d6cd0922732c9fadeb6b1->leave($__internal_a1b8c9210a4bf7ec7987f5ac6a4207c26c93b5d3d55d6cd0922732c9fadeb6b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
