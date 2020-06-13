<?php

/* Cabinet/contact.html.twig */
class __TwigTemplate_e23db4ed2861b824c406e6e597a882efffce824c5ac0b02d840b2d53aebf3c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/contact.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e670072dc8b39d11ec1398751e66fe2f8b264f7046628e2ed0ce7821967dedac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e670072dc8b39d11ec1398751e66fe2f8b264f7046628e2ed0ce7821967dedac->enter($__internal_e670072dc8b39d11ec1398751e66fe2f8b264f7046628e2ed0ce7821967dedac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/contact.html.twig"));

        $__internal_b64b3028222f7c084ec04e9c2e4f3f6907dce58dcf87df4e264d242105f33b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64b3028222f7c084ec04e9c2e4f3f6907dce58dcf87df4e264d242105f33b49->enter($__internal_b64b3028222f7c084ec04e9c2e4f3f6907dce58dcf87df4e264d242105f33b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e670072dc8b39d11ec1398751e66fe2f8b264f7046628e2ed0ce7821967dedac->leave($__internal_e670072dc8b39d11ec1398751e66fe2f8b264f7046628e2ed0ce7821967dedac_prof);

        
        $__internal_b64b3028222f7c084ec04e9c2e4f3f6907dce58dcf87df4e264d242105f33b49->leave($__internal_b64b3028222f7c084ec04e9c2e4f3f6907dce58dcf87df4e264d242105f33b49_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_a40df3e31e2a030fa1568a3900c50a6fc860866e4d36f792e6c63d877cb82c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40df3e31e2a030fa1568a3900c50a6fc860866e4d36f792e6c63d877cb82c3b->enter($__internal_a40df3e31e2a030fa1568a3900c50a6fc860866e4d36f792e6c63d877cb82c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_9e22853096c250686fd6261746c41ce8785b814f48f7edb8230c7a45e99ad2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e22853096c250686fd6261746c41ce8785b814f48f7edb8230c7a45e99ad2f2->enter($__internal_9e22853096c250686fd6261746c41ce8785b814f48f7edb8230c7a45e99ad2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<br></br>
<br></br>
<h1 class=\"page-header\"> Contactez-nous </h1>
<br></br>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    <div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'widget');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
    </div>
    <div>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 27
        echo "    <div style=\"display:none\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    
    <input class=\"btn btn-success\" type=\"submit\" value=\"Submit\">
    
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
          <div align=\"center\">
            <i class=\"fa fa-phone fa-3x mb-3 sr-contact\"></i>
            <p>123-456-6789</p>
          </div>
";
        
        $__internal_9e22853096c250686fd6261746c41ce8785b814f48f7edb8230c7a45e99ad2f2->leave($__internal_9e22853096c250686fd6261746c41ce8785b814f48f7edb8230c7a45e99ad2f2_prof);

        
        $__internal_a40df3e31e2a030fa1568a3900c50a6fc860866e4d36f792e6c63d877cb82c3b->leave($__internal_a40df3e31e2a030fa1568a3900c50a6fc860866e4d36f792e6c63d877cb82c3b_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  104 => 28,  101 => 27,  95 => 23,  91 => 22,  85 => 19,  81 => 18,  75 => 15,  71 => 14,  65 => 11,  61 => 10,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
{% block table %}
<br></br>
<br></br>
<h1 class=\"page-header\"> Contactez-nous </h1>
<br></br>
{{ form_start(form) }}

    <div>
        {{ form_widget(form.subject) }}
        {{ form_errors(form.subject) }}
    </div>
    <div>
        {{ form_widget(form.name) }}
        {{ form_errors(form.name) }}
    </div>
    <div>
        {{ form_widget(form.email) }}
        {{ form_errors(form.email) }}
    </div>
    <div>
        {{ form_widget(form.message) }}
        {{ form_errors(form.message) }}
    </div>

    {# Render CSRF token etc .#}
    <div style=\"display:none\">
        {{ form_rest(form) }}
    </div>
    
    <input class=\"btn btn-success\" type=\"submit\" value=\"Submit\">
    
{{ form_end(form) }}
          <div align=\"center\">
            <i class=\"fa fa-phone fa-3x mb-3 sr-contact\"></i>
            <p>123-456-6789</p>
          </div>
{% endblock %}", "Cabinet/contact.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\contact.html.twig");
    }
}
