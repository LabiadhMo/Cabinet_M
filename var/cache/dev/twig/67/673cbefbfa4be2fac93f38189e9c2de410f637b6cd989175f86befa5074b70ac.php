<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bf85986647eaf0f6ffdeb697c3e76d429a7f35eabaef0b0726a49b50ad1b8a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_047ea4b8b95a144e6906f1e8bba97929495cfaf23a7d60f35f49b83bb7155337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047ea4b8b95a144e6906f1e8bba97929495cfaf23a7d60f35f49b83bb7155337->enter($__internal_047ea4b8b95a144e6906f1e8bba97929495cfaf23a7d60f35f49b83bb7155337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ff6b7fa9f3abda24e4cc0fe5c6da503f09ae1d17602cbc981dc0dcc94e97eca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6b7fa9f3abda24e4cc0fe5c6da503f09ae1d17602cbc981dc0dcc94e97eca8->enter($__internal_ff6b7fa9f3abda24e4cc0fe5c6da503f09ae1d17602cbc981dc0dcc94e97eca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047ea4b8b95a144e6906f1e8bba97929495cfaf23a7d60f35f49b83bb7155337->leave($__internal_047ea4b8b95a144e6906f1e8bba97929495cfaf23a7d60f35f49b83bb7155337_prof);

        
        $__internal_ff6b7fa9f3abda24e4cc0fe5c6da503f09ae1d17602cbc981dc0dcc94e97eca8->leave($__internal_ff6b7fa9f3abda24e4cc0fe5c6da503f09ae1d17602cbc981dc0dcc94e97eca8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84c5eac748cad60416a200ba63cba79b8d98dcde432733bfe9829488cb15e82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c5eac748cad60416a200ba63cba79b8d98dcde432733bfe9829488cb15e82f->enter($__internal_84c5eac748cad60416a200ba63cba79b8d98dcde432733bfe9829488cb15e82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_11696165b1f652c828f69e9a77b85c1e7c40f491b8c5e3211998fdb26be63278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11696165b1f652c828f69e9a77b85c1e7c40f491b8c5e3211998fdb26be63278->enter($__internal_11696165b1f652c828f69e9a77b85c1e7c40f491b8c5e3211998fdb26be63278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_11696165b1f652c828f69e9a77b85c1e7c40f491b8c5e3211998fdb26be63278->leave($__internal_11696165b1f652c828f69e9a77b85c1e7c40f491b8c5e3211998fdb26be63278_prof);

        
        $__internal_84c5eac748cad60416a200ba63cba79b8d98dcde432733bfe9829488cb15e82f->leave($__internal_84c5eac748cad60416a200ba63cba79b8d98dcde432733bfe9829488cb15e82f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
