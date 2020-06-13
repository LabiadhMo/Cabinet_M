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
        $__internal_ffb06cb8d4f59b28908111b485bd184c686eae10ce2f01e11aa9da3fcd4dde45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb06cb8d4f59b28908111b485bd184c686eae10ce2f01e11aa9da3fcd4dde45->enter($__internal_ffb06cb8d4f59b28908111b485bd184c686eae10ce2f01e11aa9da3fcd4dde45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2a96aa7d03acf1f73bd56496bdbbdeca7669a2f1ffb6baad4f78d87ffe9176fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a96aa7d03acf1f73bd56496bdbbdeca7669a2f1ffb6baad4f78d87ffe9176fd->enter($__internal_2a96aa7d03acf1f73bd56496bdbbdeca7669a2f1ffb6baad4f78d87ffe9176fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb06cb8d4f59b28908111b485bd184c686eae10ce2f01e11aa9da3fcd4dde45->leave($__internal_ffb06cb8d4f59b28908111b485bd184c686eae10ce2f01e11aa9da3fcd4dde45_prof);

        
        $__internal_2a96aa7d03acf1f73bd56496bdbbdeca7669a2f1ffb6baad4f78d87ffe9176fd->leave($__internal_2a96aa7d03acf1f73bd56496bdbbdeca7669a2f1ffb6baad4f78d87ffe9176fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fb3c773c1ec4256fbb34894a3bfdc3170e8d0034031c512592fa79552103b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb3c773c1ec4256fbb34894a3bfdc3170e8d0034031c512592fa79552103b9f->enter($__internal_3fb3c773c1ec4256fbb34894a3bfdc3170e8d0034031c512592fa79552103b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e96dc08d3711ebef26ed65ef1baa65bfc77cf60db1e65212baddb6d0c6f665b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96dc08d3711ebef26ed65ef1baa65bfc77cf60db1e65212baddb6d0c6f665b5->enter($__internal_e96dc08d3711ebef26ed65ef1baa65bfc77cf60db1e65212baddb6d0c6f665b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e96dc08d3711ebef26ed65ef1baa65bfc77cf60db1e65212baddb6d0c6f665b5->leave($__internal_e96dc08d3711ebef26ed65ef1baa65bfc77cf60db1e65212baddb6d0c6f665b5_prof);

        
        $__internal_3fb3c773c1ec4256fbb34894a3bfdc3170e8d0034031c512592fa79552103b9f->leave($__internal_3fb3c773c1ec4256fbb34894a3bfdc3170e8d0034031c512592fa79552103b9f_prof);

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
