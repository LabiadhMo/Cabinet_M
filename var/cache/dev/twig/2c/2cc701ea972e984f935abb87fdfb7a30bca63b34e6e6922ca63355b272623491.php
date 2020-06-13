<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_143f30a9ca119323866e23b64f0d339f3a8b68894bbb9221f81db68db9730103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_90c659b519beb9b82a3280334f175b5f1b9300b7fe1e0d7f556cdca8d8e7c844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c659b519beb9b82a3280334f175b5f1b9300b7fe1e0d7f556cdca8d8e7c844->enter($__internal_90c659b519beb9b82a3280334f175b5f1b9300b7fe1e0d7f556cdca8d8e7c844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_762b775e852faab94d6daf5837b3775d3aa8267ef34ef18e37f59223f330502c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762b775e852faab94d6daf5837b3775d3aa8267ef34ef18e37f59223f330502c->enter($__internal_762b775e852faab94d6daf5837b3775d3aa8267ef34ef18e37f59223f330502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c659b519beb9b82a3280334f175b5f1b9300b7fe1e0d7f556cdca8d8e7c844->leave($__internal_90c659b519beb9b82a3280334f175b5f1b9300b7fe1e0d7f556cdca8d8e7c844_prof);

        
        $__internal_762b775e852faab94d6daf5837b3775d3aa8267ef34ef18e37f59223f330502c->leave($__internal_762b775e852faab94d6daf5837b3775d3aa8267ef34ef18e37f59223f330502c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7706381e658cb6b9f9c85c53daaceb82610d7314e35c125be74facc6f65f4e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7706381e658cb6b9f9c85c53daaceb82610d7314e35c125be74facc6f65f4e5d->enter($__internal_7706381e658cb6b9f9c85c53daaceb82610d7314e35c125be74facc6f65f4e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3689f1a08f6f97faf274912e48709190600122735c389665873c35568c5b413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3689f1a08f6f97faf274912e48709190600122735c389665873c35568c5b413->enter($__internal_b3689f1a08f6f97faf274912e48709190600122735c389665873c35568c5b413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<h3>Connexion</h3>
\t<br>
    ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
";
        
        $__internal_b3689f1a08f6f97faf274912e48709190600122735c389665873c35568c5b413->leave($__internal_b3689f1a08f6f97faf274912e48709190600122735c389665873c35568c5b413_prof);

        
        $__internal_7706381e658cb6b9f9c85c53daaceb82610d7314e35c125be74facc6f65f4e5d->leave($__internal_7706381e658cb6b9f9c85c53daaceb82610d7314e35c125be74facc6f65f4e5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h3>Connexion</h3>
\t<br>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
