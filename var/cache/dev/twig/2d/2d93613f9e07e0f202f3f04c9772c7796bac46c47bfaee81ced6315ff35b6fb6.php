<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_732a7049570a89ea54a026211f12efcdb81a303e054f78f28d3cd43ac46514cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a96a0ffc16daa0686cd418da1ea7ab385f5ab9f104b23e018f469e2d9c90174b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96a0ffc16daa0686cd418da1ea7ab385f5ab9f104b23e018f469e2d9c90174b->enter($__internal_a96a0ffc16daa0686cd418da1ea7ab385f5ab9f104b23e018f469e2d9c90174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_256c8660fcdb07e15d9eb7a63a148a97e54b2c5b4584c513abbab7c7eec7084b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256c8660fcdb07e15d9eb7a63a148a97e54b2c5b4584c513abbab7c7eec7084b->enter($__internal_256c8660fcdb07e15d9eb7a63a148a97e54b2c5b4584c513abbab7c7eec7084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96a0ffc16daa0686cd418da1ea7ab385f5ab9f104b23e018f469e2d9c90174b->leave($__internal_a96a0ffc16daa0686cd418da1ea7ab385f5ab9f104b23e018f469e2d9c90174b_prof);

        
        $__internal_256c8660fcdb07e15d9eb7a63a148a97e54b2c5b4584c513abbab7c7eec7084b->leave($__internal_256c8660fcdb07e15d9eb7a63a148a97e54b2c5b4584c513abbab7c7eec7084b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6588308235a1c4c4b601a07828c62c52228856d7c2638119e62b0946e236ba29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6588308235a1c4c4b601a07828c62c52228856d7c2638119e62b0946e236ba29->enter($__internal_6588308235a1c4c4b601a07828c62c52228856d7c2638119e62b0946e236ba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8b7b0d1c4c70f0ad8d5fcafee47adf84d9e067544236a8e3aae5f12fd1969ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b7b0d1c4c70f0ad8d5fcafee47adf84d9e067544236a8e3aae5f12fd1969ed->enter($__internal_d8b7b0d1c4c70f0ad8d5fcafee47adf84d9e067544236a8e3aae5f12fd1969ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d8b7b0d1c4c70f0ad8d5fcafee47adf84d9e067544236a8e3aae5f12fd1969ed->leave($__internal_d8b7b0d1c4c70f0ad8d5fcafee47adf84d9e067544236a8e3aae5f12fd1969ed_prof);

        
        $__internal_6588308235a1c4c4b601a07828c62c52228856d7c2638119e62b0946e236ba29->leave($__internal_6588308235a1c4c4b601a07828c62c52228856d7c2638119e62b0946e236ba29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
