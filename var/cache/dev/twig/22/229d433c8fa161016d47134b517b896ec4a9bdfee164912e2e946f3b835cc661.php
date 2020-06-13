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
        $__internal_3ee63b313aca3f71e6bb9baad5a1a3dd4438f2760793dd08fcbfa4deaf31cc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee63b313aca3f71e6bb9baad5a1a3dd4438f2760793dd08fcbfa4deaf31cc48->enter($__internal_3ee63b313aca3f71e6bb9baad5a1a3dd4438f2760793dd08fcbfa4deaf31cc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/contact.html.twig"));

        $__internal_c9a768a844d1ad94a6d55661dedf535ed73bfcb6b52f8d6fd50b520249f95cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a768a844d1ad94a6d55661dedf535ed73bfcb6b52f8d6fd50b520249f95cc9->enter($__internal_c9a768a844d1ad94a6d55661dedf535ed73bfcb6b52f8d6fd50b520249f95cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee63b313aca3f71e6bb9baad5a1a3dd4438f2760793dd08fcbfa4deaf31cc48->leave($__internal_3ee63b313aca3f71e6bb9baad5a1a3dd4438f2760793dd08fcbfa4deaf31cc48_prof);

        
        $__internal_c9a768a844d1ad94a6d55661dedf535ed73bfcb6b52f8d6fd50b520249f95cc9->leave($__internal_c9a768a844d1ad94a6d55661dedf535ed73bfcb6b52f8d6fd50b520249f95cc9_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_e4e0dc3b768c9349589d8576f8ceb2adc271ff223d5aad4e5a2b498b34053ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e0dc3b768c9349589d8576f8ceb2adc271ff223d5aad4e5a2b498b34053ecf->enter($__internal_e4e0dc3b768c9349589d8576f8ceb2adc271ff223d5aad4e5a2b498b34053ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_54bca48414ea027ba0aea580239df218bc8662c0d72fd665773d666530df9cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bca48414ea027ba0aea580239df218bc8662c0d72fd665773d666530df9cdb->enter($__internal_54bca48414ea027ba0aea580239df218bc8662c0d72fd665773d666530df9cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_54bca48414ea027ba0aea580239df218bc8662c0d72fd665773d666530df9cdb->leave($__internal_54bca48414ea027ba0aea580239df218bc8662c0d72fd665773d666530df9cdb_prof);

        
        $__internal_e4e0dc3b768c9349589d8576f8ceb2adc271ff223d5aad4e5a2b498b34053ecf->leave($__internal_e4e0dc3b768c9349589d8576f8ceb2adc271ff223d5aad4e5a2b498b34053ecf_prof);

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
