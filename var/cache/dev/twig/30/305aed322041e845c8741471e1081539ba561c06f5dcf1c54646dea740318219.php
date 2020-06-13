<?php

/* Cabinet/CabinetAdmin.html.twig */
class __TwigTemplate_a37433dcc4fde812817af0d8a543f2ae108a9e484683723f147c1332bb63390d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/CabinetAdmin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'downleft' => array($this, 'block_downleft'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3426a995339f4d8dd9bd694cbf511738417c42879b8e92f205e649c042b593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3426a995339f4d8dd9bd694cbf511738417c42879b8e92f205e649c042b593->enter($__internal_cf3426a995339f4d8dd9bd694cbf511738417c42879b8e92f205e649c042b593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/CabinetAdmin.html.twig"));

        $__internal_986b1c235067ccb014ac1bb64b5d904609f8c089ddddb15e47df3f54d5656a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986b1c235067ccb014ac1bb64b5d904609f8c089ddddb15e47df3f54d5656a66->enter($__internal_986b1c235067ccb014ac1bb64b5d904609f8c089ddddb15e47df3f54d5656a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/CabinetAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3426a995339f4d8dd9bd694cbf511738417c42879b8e92f205e649c042b593->leave($__internal_cf3426a995339f4d8dd9bd694cbf511738417c42879b8e92f205e649c042b593_prof);

        
        $__internal_986b1c235067ccb014ac1bb64b5d904609f8c089ddddb15e47df3f54d5656a66->leave($__internal_986b1c235067ccb014ac1bb64b5d904609f8c089ddddb15e47df3f54d5656a66_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df28ee97cfef216d24fe1a99b03163987fc8d1b6bc19b88473a6c52cb02630dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df28ee97cfef216d24fe1a99b03163987fc8d1b6bc19b88473a6c52cb02630dd->enter($__internal_df28ee97cfef216d24fe1a99b03163987fc8d1b6bc19b88473a6c52cb02630dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fb48f91ac5b16d39727e049a3154a7971593933a8eb5d6a67c28781ef6fec1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb48f91ac5b16d39727e049a3154a7971593933a8eb5d6a67c28781ef6fec1d9->enter($__internal_fb48f91ac5b16d39727e049a3154a7971593933a8eb5d6a67c28781ef6fec1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fb48f91ac5b16d39727e049a3154a7971593933a8eb5d6a67c28781ef6fec1d9->leave($__internal_fb48f91ac5b16d39727e049a3154a7971593933a8eb5d6a67c28781ef6fec1d9_prof);

        
        $__internal_df28ee97cfef216d24fe1a99b03163987fc8d1b6bc19b88473a6c52cb02630dd->leave($__internal_df28ee97cfef216d24fe1a99b03163987fc8d1b6bc19b88473a6c52cb02630dd_prof);

    }

    // line 6
    public function block_left($context, array $blocks = array())
    {
        $__internal_b103b9bda75e7598636f1c57175851f4b7e9dff71be1a5db6071df9d90d84ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b103b9bda75e7598636f1c57175851f4b7e9dff71be1a5db6071df9d90d84ca3->enter($__internal_b103b9bda75e7598636f1c57175851f4b7e9dff71be1a5db6071df9d90d84ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_2d83b0f3ced1ba9132c3b4fc266287476ed2b408619b3fead103473811667c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d83b0f3ced1ba9132c3b4fc266287476ed2b408619b3fead103473811667c6a->enter($__internal_2d83b0f3ced1ba9132c3b4fc266287476ed2b408619b3fead103473811667c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 7
        echo "<a href=\"/Cabinet/Administration/Gestionrdv\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des rendez-vous <center><img src=\"../../../../gestionrdv.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_2d83b0f3ced1ba9132c3b4fc266287476ed2b408619b3fead103473811667c6a->leave($__internal_2d83b0f3ced1ba9132c3b4fc266287476ed2b408619b3fead103473811667c6a_prof);

        
        $__internal_b103b9bda75e7598636f1c57175851f4b7e9dff71be1a5db6071df9d90d84ca3->leave($__internal_b103b9bda75e7598636f1c57175851f4b7e9dff71be1a5db6071df9d90d84ca3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32628d7f34d12cca8b141ad9a459f78e6849aff2bdf8eac2a055e838a513a3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32628d7f34d12cca8b141ad9a459f78e6849aff2bdf8eac2a055e838a513a3e4->enter($__internal_32628d7f34d12cca8b141ad9a459f78e6849aff2bdf8eac2a055e838a513a3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_512fae9892431c4bd34626711cc1aee8f1d3fb6bd77204b4cdfc03be73b79302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512fae9892431c4bd34626711cc1aee8f1d3fb6bd77204b4cdfc03be73b79302->enter($__internal_512fae9892431c4bd34626711cc1aee8f1d3fb6bd77204b4cdfc03be73b79302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<a href=\"/Cabinet/Administration/Gestionmutuelle\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des mutuelles <center><img src=\"../../../../gestionmutuelle.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_512fae9892431c4bd34626711cc1aee8f1d3fb6bd77204b4cdfc03be73b79302->leave($__internal_512fae9892431c4bd34626711cc1aee8f1d3fb6bd77204b4cdfc03be73b79302_prof);

        
        $__internal_32628d7f34d12cca8b141ad9a459f78e6849aff2bdf8eac2a055e838a513a3e4->leave($__internal_32628d7f34d12cca8b141ad9a459f78e6849aff2bdf8eac2a055e838a513a3e4_prof);

    }

    // line 14
    public function block_right($context, array $blocks = array())
    {
        $__internal_f4bb0db1a96bbf74141446600cca867e0c18a2ba4adaa87ce96775a19e43f85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bb0db1a96bbf74141446600cca867e0c18a2ba4adaa87ce96775a19e43f85a->enter($__internal_f4bb0db1a96bbf74141446600cca867e0c18a2ba4adaa87ce96775a19e43f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_56fd895f0ec950f11d1670b95f448fa3a54e69b3a21169c60aca057c5171abcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fd895f0ec950f11d1670b95f448fa3a54e69b3a21169c60aca057c5171abcc->enter($__internal_56fd895f0ec950f11d1670b95f448fa3a54e69b3a21169c60aca057c5171abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 15
        echo "<a href=\"/Cabinet/Administration/Gestionfiche\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des fiches <center><img src=\"../../../../gestionfiche.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_56fd895f0ec950f11d1670b95f448fa3a54e69b3a21169c60aca057c5171abcc->leave($__internal_56fd895f0ec950f11d1670b95f448fa3a54e69b3a21169c60aca057c5171abcc_prof);

        
        $__internal_f4bb0db1a96bbf74141446600cca867e0c18a2ba4adaa87ce96775a19e43f85a->leave($__internal_f4bb0db1a96bbf74141446600cca867e0c18a2ba4adaa87ce96775a19e43f85a_prof);

    }

    // line 18
    public function block_downleft($context, array $blocks = array())
    {
        $__internal_4da12fd1e45389cc0997161307ea67e4ba73d86a54568f4568e9a25de1628614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da12fd1e45389cc0997161307ea67e4ba73d86a54568f4568e9a25de1628614->enter($__internal_4da12fd1e45389cc0997161307ea67e4ba73d86a54568f4568e9a25de1628614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        $__internal_df8f594c972522a35f8adc08117e65019f0d9f27a2f78b511ad8da04843433d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8f594c972522a35f8adc08117e65019f0d9f27a2f78b511ad8da04843433d6->enter($__internal_df8f594c972522a35f8adc08117e65019f0d9f27a2f78b511ad8da04843433d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        // line 19
        echo "<a href=\"/Cabinet/Administration/Gestionconsultation\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des consultations <center><img src=\"../../../../gestionconsult.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_df8f594c972522a35f8adc08117e65019f0d9f27a2f78b511ad8da04843433d6->leave($__internal_df8f594c972522a35f8adc08117e65019f0d9f27a2f78b511ad8da04843433d6_prof);

        
        $__internal_4da12fd1e45389cc0997161307ea67e4ba73d86a54568f4568e9a25de1628614->leave($__internal_4da12fd1e45389cc0997161307ea67e4ba73d86a54568f4568e9a25de1628614_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/CabinetAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 19,  121 => 18,  110 => 15,  101 => 14,  90 => 11,  81 => 10,  70 => 7,  61 => 6,  44 => 3,  11 => 1,);
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

{% block stylesheets %}
{% endblock %}

{% block left %}
<a href=\"/Cabinet/Administration/Gestionrdv\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des rendez-vous <center><img src=\"../../../../gestionrdv.png\", class=\"img-thumbnail\" ></center> </a>
{% endblock %}

{% block body %}
<a href=\"/Cabinet/Administration/Gestionmutuelle\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des mutuelles <center><img src=\"../../../../gestionmutuelle.png\", class=\"img-thumbnail\" ></center> </a>
{% endblock %}

{% block right %}
<a href=\"/Cabinet/Administration/Gestionfiche\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des fiches <center><img src=\"../../../../gestionfiche.png\", class=\"img-thumbnail\" ></center> </a>
{% endblock %}

{% block downleft %}
<a href=\"/Cabinet/Administration/Gestionconsultation\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des consultations <center><img src=\"../../../../gestionconsult.png\", class=\"img-thumbnail\" ></center> </a>
{% endblock %}", "Cabinet/CabinetAdmin.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\CabinetAdmin.html.twig");
    }
}
