<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be657b7677fd117bb19911f57b94b042b315d90532fb726d8d6b7a55fcce4ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bd9b904246c8bb70d844330d3d8bc82786c86447341d7fc3d79b42c378ccecae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9b904246c8bb70d844330d3d8bc82786c86447341d7fc3d79b42c378ccecae->enter($__internal_bd9b904246c8bb70d844330d3d8bc82786c86447341d7fc3d79b42c378ccecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5f85b5f032ff8feee7b3233e7561a727819d38c3e4abcae8adbc937db3f8d200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f85b5f032ff8feee7b3233e7561a727819d38c3e4abcae8adbc937db3f8d200->enter($__internal_5f85b5f032ff8feee7b3233e7561a727819d38c3e4abcae8adbc937db3f8d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd9b904246c8bb70d844330d3d8bc82786c86447341d7fc3d79b42c378ccecae->leave($__internal_bd9b904246c8bb70d844330d3d8bc82786c86447341d7fc3d79b42c378ccecae_prof);

        
        $__internal_5f85b5f032ff8feee7b3233e7561a727819d38c3e4abcae8adbc937db3f8d200->leave($__internal_5f85b5f032ff8feee7b3233e7561a727819d38c3e4abcae8adbc937db3f8d200_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0118664b567ff6088cad18005ac30529571d2592a3f28d7dc96326566e46da7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0118664b567ff6088cad18005ac30529571d2592a3f28d7dc96326566e46da7c->enter($__internal_0118664b567ff6088cad18005ac30529571d2592a3f28d7dc96326566e46da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf96b7a1925420a1ee237cba910cbc108afb3633f810d029d898f38b06951fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf96b7a1925420a1ee237cba910cbc108afb3633f810d029d898f38b06951fa2->enter($__internal_cf96b7a1925420a1ee237cba910cbc108afb3633f810d029d898f38b06951fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf96b7a1925420a1ee237cba910cbc108afb3633f810d029d898f38b06951fa2->leave($__internal_cf96b7a1925420a1ee237cba910cbc108afb3633f810d029d898f38b06951fa2_prof);

        
        $__internal_0118664b567ff6088cad18005ac30529571d2592a3f28d7dc96326566e46da7c->leave($__internal_0118664b567ff6088cad18005ac30529571d2592a3f28d7dc96326566e46da7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_64b37f98a6c12575f6e928f29b7b6da1b3d4fa3abefda9871be711ff9aafa3fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b37f98a6c12575f6e928f29b7b6da1b3d4fa3abefda9871be711ff9aafa3fe->enter($__internal_64b37f98a6c12575f6e928f29b7b6da1b3d4fa3abefda9871be711ff9aafa3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_095c45aa22b87c027686af112f0ed471d68fb2f602557e1ba6c56b2b7114ca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095c45aa22b87c027686af112f0ed471d68fb2f602557e1ba6c56b2b7114ca63->enter($__internal_095c45aa22b87c027686af112f0ed471d68fb2f602557e1ba6c56b2b7114ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_095c45aa22b87c027686af112f0ed471d68fb2f602557e1ba6c56b2b7114ca63->leave($__internal_095c45aa22b87c027686af112f0ed471d68fb2f602557e1ba6c56b2b7114ca63_prof);

        
        $__internal_64b37f98a6c12575f6e928f29b7b6da1b3d4fa3abefda9871be711ff9aafa3fe->leave($__internal_64b37f98a6c12575f6e928f29b7b6da1b3d4fa3abefda9871be711ff9aafa3fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_695a3e06a42a863749d579fd289ece4c479d74c5957654eced96891c3972d28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695a3e06a42a863749d579fd289ece4c479d74c5957654eced96891c3972d28b->enter($__internal_695a3e06a42a863749d579fd289ece4c479d74c5957654eced96891c3972d28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1615229767b83e20637878100cafcba865d78017a036319cdc20e6905120c413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1615229767b83e20637878100cafcba865d78017a036319cdc20e6905120c413->enter($__internal_1615229767b83e20637878100cafcba865d78017a036319cdc20e6905120c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1615229767b83e20637878100cafcba865d78017a036319cdc20e6905120c413->leave($__internal_1615229767b83e20637878100cafcba865d78017a036319cdc20e6905120c413_prof);

        
        $__internal_695a3e06a42a863749d579fd289ece4c479d74c5957654eced96891c3972d28b->leave($__internal_695a3e06a42a863749d579fd289ece4c479d74c5957654eced96891c3972d28b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
