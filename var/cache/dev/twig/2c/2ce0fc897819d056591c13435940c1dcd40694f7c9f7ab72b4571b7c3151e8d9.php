<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_174376863586a79050b47df4a6b6ab30859007811b6cb4d65ef81fbab1ad17f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1cce4cd7f3735df04bf8713b4ead317ee879e3b609fdb2d2003f21f0986f4e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cce4cd7f3735df04bf8713b4ead317ee879e3b609fdb2d2003f21f0986f4e2c->enter($__internal_1cce4cd7f3735df04bf8713b4ead317ee879e3b609fdb2d2003f21f0986f4e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5cea6ad5165c7309f256a673913a9c874080c2628d1be6abf382b12ec7d2394d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea6ad5165c7309f256a673913a9c874080c2628d1be6abf382b12ec7d2394d->enter($__internal_5cea6ad5165c7309f256a673913a9c874080c2628d1be6abf382b12ec7d2394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cce4cd7f3735df04bf8713b4ead317ee879e3b609fdb2d2003f21f0986f4e2c->leave($__internal_1cce4cd7f3735df04bf8713b4ead317ee879e3b609fdb2d2003f21f0986f4e2c_prof);

        
        $__internal_5cea6ad5165c7309f256a673913a9c874080c2628d1be6abf382b12ec7d2394d->leave($__internal_5cea6ad5165c7309f256a673913a9c874080c2628d1be6abf382b12ec7d2394d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_010d2fd3b41f70c8e2506cfed39df980dcefd68774f5e7b078676221f773a7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010d2fd3b41f70c8e2506cfed39df980dcefd68774f5e7b078676221f773a7df->enter($__internal_010d2fd3b41f70c8e2506cfed39df980dcefd68774f5e7b078676221f773a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e311ee9350cb808350021b643fffe43fab4069f83c5b7039fa920b703f3c5dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e311ee9350cb808350021b643fffe43fab4069f83c5b7039fa920b703f3c5dea->enter($__internal_e311ee9350cb808350021b643fffe43fab4069f83c5b7039fa920b703f3c5dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<h3>S'inscrire</h3>
<br>
";
        // line 6
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        
        $__internal_e311ee9350cb808350021b643fffe43fab4069f83c5b7039fa920b703f3c5dea->leave($__internal_e311ee9350cb808350021b643fffe43fab4069f83c5b7039fa920b703f3c5dea_prof);

        
        $__internal_010d2fd3b41f70c8e2506cfed39df980dcefd68774f5e7b078676221f773a7df->leave($__internal_010d2fd3b41f70c8e2506cfed39df980dcefd68774f5e7b078676221f773a7df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
<h3>S'inscrire</h3>
<br>
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
