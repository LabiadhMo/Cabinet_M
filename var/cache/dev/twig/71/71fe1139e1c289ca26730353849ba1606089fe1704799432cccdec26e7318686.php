<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_eb4f3f3ae9cf0d102aed8034bb067c30c993ca3fb9840da93dc4fa27cbd7f65b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea7ddea898382a1ce435301300be5952de304b63c3da0e31c731e49dc8b8f93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7ddea898382a1ce435301300be5952de304b63c3da0e31c731e49dc8b8f93b->enter($__internal_ea7ddea898382a1ce435301300be5952de304b63c3da0e31c731e49dc8b8f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        $__internal_7dcd3da0f22f99be565a90a27fde10faced2158673c76a43ec6a79829ebb530a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcd3da0f22f99be565a90a27fde10faced2158673c76a43ec6a79829ebb530a->enter($__internal_7dcd3da0f22f99be565a90a27fde10faced2158673c76a43ec6a79829ebb530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_ea7ddea898382a1ce435301300be5952de304b63c3da0e31c731e49dc8b8f93b->leave($__internal_ea7ddea898382a1ce435301300be5952de304b63c3da0e31c731e49dc8b8f93b_prof);

        
        $__internal_7dcd3da0f22f99be565a90a27fde10faced2158673c76a43ec6a79829ebb530a->leave($__internal_7dcd3da0f22f99be565a90a27fde10faced2158673c76a43ec6a79829ebb530a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_empty.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\label_empty.html.twig");
    }
}
