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
        $__internal_6471d7e1dee7de0b339746fadaea57a32e51b6135fe15405b84c9fe0b6e3e21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6471d7e1dee7de0b339746fadaea57a32e51b6135fe15405b84c9fe0b6e3e21a->enter($__internal_6471d7e1dee7de0b339746fadaea57a32e51b6135fe15405b84c9fe0b6e3e21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f57b93f8af64055af2c37e27f6370a3a934fb707cbab21954f77444786051609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57b93f8af64055af2c37e27f6370a3a934fb707cbab21954f77444786051609->enter($__internal_f57b93f8af64055af2c37e27f6370a3a934fb707cbab21954f77444786051609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6471d7e1dee7de0b339746fadaea57a32e51b6135fe15405b84c9fe0b6e3e21a->leave($__internal_6471d7e1dee7de0b339746fadaea57a32e51b6135fe15405b84c9fe0b6e3e21a_prof);

        
        $__internal_f57b93f8af64055af2c37e27f6370a3a934fb707cbab21954f77444786051609->leave($__internal_f57b93f8af64055af2c37e27f6370a3a934fb707cbab21954f77444786051609_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15b1d0a1b53ae05e0d80a86245359469af74d326f93d53cd566e084a2f0da1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b1d0a1b53ae05e0d80a86245359469af74d326f93d53cd566e084a2f0da1be->enter($__internal_15b1d0a1b53ae05e0d80a86245359469af74d326f93d53cd566e084a2f0da1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_76afd2ed362d2724f6b45e8cfd978eb5eb16f5fa6571b71b3a52ccc1887edc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76afd2ed362d2724f6b45e8cfd978eb5eb16f5fa6571b71b3a52ccc1887edc98->enter($__internal_76afd2ed362d2724f6b45e8cfd978eb5eb16f5fa6571b71b3a52ccc1887edc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76afd2ed362d2724f6b45e8cfd978eb5eb16f5fa6571b71b3a52ccc1887edc98->leave($__internal_76afd2ed362d2724f6b45e8cfd978eb5eb16f5fa6571b71b3a52ccc1887edc98_prof);

        
        $__internal_15b1d0a1b53ae05e0d80a86245359469af74d326f93d53cd566e084a2f0da1be->leave($__internal_15b1d0a1b53ae05e0d80a86245359469af74d326f93d53cd566e084a2f0da1be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd901f960706b3879312ef9d4fd5aac86cfa69e5e2a462e071d60906c7f308a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd901f960706b3879312ef9d4fd5aac86cfa69e5e2a462e071d60906c7f308a3->enter($__internal_cd901f960706b3879312ef9d4fd5aac86cfa69e5e2a462e071d60906c7f308a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e31b4254bfb16af46eca8649e360423dded3a4f2d691d277b58a4dc2bc4a0658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31b4254bfb16af46eca8649e360423dded3a4f2d691d277b58a4dc2bc4a0658->enter($__internal_e31b4254bfb16af46eca8649e360423dded3a4f2d691d277b58a4dc2bc4a0658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e31b4254bfb16af46eca8649e360423dded3a4f2d691d277b58a4dc2bc4a0658->leave($__internal_e31b4254bfb16af46eca8649e360423dded3a4f2d691d277b58a4dc2bc4a0658_prof);

        
        $__internal_cd901f960706b3879312ef9d4fd5aac86cfa69e5e2a462e071d60906c7f308a3->leave($__internal_cd901f960706b3879312ef9d4fd5aac86cfa69e5e2a462e071d60906c7f308a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a7e02012a0ea03b6c4316ee5adf0aa02dd7a35b73e103a7e900d1a57ddab875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7e02012a0ea03b6c4316ee5adf0aa02dd7a35b73e103a7e900d1a57ddab875->enter($__internal_3a7e02012a0ea03b6c4316ee5adf0aa02dd7a35b73e103a7e900d1a57ddab875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49cb172fe1f794d44d294568b26b03b7387d9b5b98c7a02abc1c980048cbba96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cb172fe1f794d44d294568b26b03b7387d9b5b98c7a02abc1c980048cbba96->enter($__internal_49cb172fe1f794d44d294568b26b03b7387d9b5b98c7a02abc1c980048cbba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49cb172fe1f794d44d294568b26b03b7387d9b5b98c7a02abc1c980048cbba96->leave($__internal_49cb172fe1f794d44d294568b26b03b7387d9b5b98c7a02abc1c980048cbba96_prof);

        
        $__internal_3a7e02012a0ea03b6c4316ee5adf0aa02dd7a35b73e103a7e900d1a57ddab875->leave($__internal_3a7e02012a0ea03b6c4316ee5adf0aa02dd7a35b73e103a7e900d1a57ddab875_prof);

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
