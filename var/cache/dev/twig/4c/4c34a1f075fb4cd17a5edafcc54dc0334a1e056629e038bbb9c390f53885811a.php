<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_1d68aee27e88faa8cf73ef71b43f2663eac0f4c7fcfe16eff7c976a84557e066 extends Twig_Template
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
        $__internal_b7e1a066b100c35cabb619db908faebcc5a927d403198a1328533fe8d95a2b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e1a066b100c35cabb619db908faebcc5a927d403198a1328533fe8d95a2b11->enter($__internal_b7e1a066b100c35cabb619db908faebcc5a927d403198a1328533fe8d95a2b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_95fa03f2daca49070fed90d31c8676e9cdf4f1697cb466a7752ed8590f5ad3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fa03f2daca49070fed90d31c8676e9cdf4f1697cb466a7752ed8590f5ad3c3->enter($__internal_95fa03f2daca49070fed90d31c8676e9cdf4f1697cb466a7752ed8590f5ad3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_b7e1a066b100c35cabb619db908faebcc5a927d403198a1328533fe8d95a2b11->leave($__internal_b7e1a066b100c35cabb619db908faebcc5a927d403198a1328533fe8d95a2b11_prof);

        
        $__internal_95fa03f2daca49070fed90d31c8676e9cdf4f1697cb466a7752ed8590f5ad3c3->leave($__internal_95fa03f2daca49070fed90d31c8676e9cdf4f1697cb466a7752ed8590f5ad3c3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_string.html.twig");
    }
}
