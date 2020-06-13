<?php

/* Cabinet/apropos.html.twig */
class __TwigTemplate_3eb4e3c20cf726ff745dcf1fe431fafcf021ee6cc8f95c15440f913fa1e5993c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/apropos.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_467297c73466d4da9a5beb3a417fe354956b5d671013b64786002c01e1de1278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467297c73466d4da9a5beb3a417fe354956b5d671013b64786002c01e1de1278->enter($__internal_467297c73466d4da9a5beb3a417fe354956b5d671013b64786002c01e1de1278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/apropos.html.twig"));

        $__internal_a81d00f0bfb47f27b7795a578e99393d39dc0e553f02a1a83c9e880f5b2a4832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81d00f0bfb47f27b7795a578e99393d39dc0e553f02a1a83c9e880f5b2a4832->enter($__internal_a81d00f0bfb47f27b7795a578e99393d39dc0e553f02a1a83c9e880f5b2a4832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467297c73466d4da9a5beb3a417fe354956b5d671013b64786002c01e1de1278->leave($__internal_467297c73466d4da9a5beb3a417fe354956b5d671013b64786002c01e1de1278_prof);

        
        $__internal_a81d00f0bfb47f27b7795a578e99393d39dc0e553f02a1a83c9e880f5b2a4832->leave($__internal_a81d00f0bfb47f27b7795a578e99393d39dc0e553f02a1a83c9e880f5b2a4832_prof);

    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        $__internal_5bc9a267dc4aebd028a5729565a433827892f2c331930499635e15083898ab5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc9a267dc4aebd028a5729565a433827892f2c331930499635e15083898ab5b->enter($__internal_5bc9a267dc4aebd028a5729565a433827892f2c331930499635e15083898ab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f00ecc970a4a7e4ed1e8cce8bb9329d1f0969027ea013bd96f69de3d9a1bd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f00ecc970a4a7e4ed1e8cce8bb9329d1f0969027ea013bd96f69de3d9a1bd36->enter($__internal_6f00ecc970a4a7e4ed1e8cce8bb9329d1f0969027ea013bd96f69de3d9a1bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 4
        echo "<br></br></br></br>
<h1><center>À-propos<center></h1>
</br></br>
<h1 align=\"center\"><img class=\"rounded-circle img-fluid\" src=\"../../../../ap.jpg\"></h1>
<br></br>
<h3 align=\"center\">Un cabinet médical est un local où est exercée une profession libérale liée aux soins de santé (exemples : médecin spécialiste, chirurgien-dentiste, pneumologue, radiologue, etc.) Ce médecin proposera dans ses locaux des consultations liés à sa spécialité. Ainsi, un médecin gynécologue par exemple, offrira uniquement des consultations en gynécologie. Un cabinet médical sera toujours constitué d'au moins une salle de consultation (qui fera parfois office de bureau pour le médecin spécialiste), d'une salle d'attente pour les patients, et parfois d'un accueil/secrétariat où un/une secrétaire médical(e) sera présente pour renseigner, prendre les rendez vous des patients.</h3>

";
        
        $__internal_6f00ecc970a4a7e4ed1e8cce8bb9329d1f0969027ea013bd96f69de3d9a1bd36->leave($__internal_6f00ecc970a4a7e4ed1e8cce8bb9329d1f0969027ea013bd96f69de3d9a1bd36_prof);

        
        $__internal_5bc9a267dc4aebd028a5729565a433827892f2c331930499635e15083898ab5b->leave($__internal_5bc9a267dc4aebd028a5729565a433827892f2c331930499635e15083898ab5b_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block table %}
<br></br></br></br>
<h1><center>À-propos<center></h1>
</br></br>
<h1 align=\"center\"><img class=\"rounded-circle img-fluid\" src=\"../../../../ap.jpg\"></h1>
<br></br>
<h3 align=\"center\">Un cabinet médical est un local où est exercée une profession libérale liée aux soins de santé (exemples : médecin spécialiste, chirurgien-dentiste, pneumologue, radiologue, etc.) Ce médecin proposera dans ses locaux des consultations liés à sa spécialité. Ainsi, un médecin gynécologue par exemple, offrira uniquement des consultations en gynécologie. Un cabinet médical sera toujours constitué d'au moins une salle de consultation (qui fera parfois office de bureau pour le médecin spécialiste), d'une salle d'attente pour les patients, et parfois d'un accueil/secrétariat où un/une secrétaire médical(e) sera présente pour renseigner, prendre les rendez vous des patients.</h3>

{% endblock %}", "Cabinet/apropos.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\apropos.html.twig");
    }
}
