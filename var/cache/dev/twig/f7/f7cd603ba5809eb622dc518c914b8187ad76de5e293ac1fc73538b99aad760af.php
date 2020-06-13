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
        $__internal_03ae097635597175d5213c2283b08d0c184a9d49fa6c7e0122b2c1c4d8b0d134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ae097635597175d5213c2283b08d0c184a9d49fa6c7e0122b2c1c4d8b0d134->enter($__internal_03ae097635597175d5213c2283b08d0c184a9d49fa6c7e0122b2c1c4d8b0d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/apropos.html.twig"));

        $__internal_808f16e75582dd3cdb3689b0ab6132e3b252c4ab042050b40f0a4d11fb6918bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808f16e75582dd3cdb3689b0ab6132e3b252c4ab042050b40f0a4d11fb6918bc->enter($__internal_808f16e75582dd3cdb3689b0ab6132e3b252c4ab042050b40f0a4d11fb6918bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/apropos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ae097635597175d5213c2283b08d0c184a9d49fa6c7e0122b2c1c4d8b0d134->leave($__internal_03ae097635597175d5213c2283b08d0c184a9d49fa6c7e0122b2c1c4d8b0d134_prof);

        
        $__internal_808f16e75582dd3cdb3689b0ab6132e3b252c4ab042050b40f0a4d11fb6918bc->leave($__internal_808f16e75582dd3cdb3689b0ab6132e3b252c4ab042050b40f0a4d11fb6918bc_prof);

    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        $__internal_2f430329e07a5d885b93c538cdba31a047db5b30bb1cb1aa17d4c5404d3b2f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f430329e07a5d885b93c538cdba31a047db5b30bb1cb1aa17d4c5404d3b2f3a->enter($__internal_2f430329e07a5d885b93c538cdba31a047db5b30bb1cb1aa17d4c5404d3b2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_90ef90e224b9102caab7984110cd21050aa0538bdaf658b18cf237284d08f290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ef90e224b9102caab7984110cd21050aa0538bdaf658b18cf237284d08f290->enter($__internal_90ef90e224b9102caab7984110cd21050aa0538bdaf658b18cf237284d08f290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 4
        echo "<br></br></br></br>
<h1><center>À-propos<center></h1>
</br></br>
<h1 align=\"center\"><img class=\"rounded-circle img-fluid\" src=\"../../../../ap.jpg\"></h1>
<br></br>
<h3 align=\"center\">Un cabinet médical est un local où est exercée une profession libérale liée aux soins de santé (exemples : médecin spécialiste, chirurgien-dentiste, pneumologue, radiologue, etc.) Ce médecin proposera dans ses locaux des consultations liés à sa spécialité. Ainsi, un médecin gynécologue par exemple, offrira uniquement des consultations en gynécologie. Un cabinet médical sera toujours constitué d'au moins une salle de consultation (qui fera parfois office de bureau pour le médecin spécialiste), d'une salle d'attente pour les patients, et parfois d'un accueil/secrétariat où un/une secrétaire médical(e) sera présente pour renseigner, prendre les rendez vous des patients.</h3>

";
        
        $__internal_90ef90e224b9102caab7984110cd21050aa0538bdaf658b18cf237284d08f290->leave($__internal_90ef90e224b9102caab7984110cd21050aa0538bdaf658b18cf237284d08f290_prof);

        
        $__internal_2f430329e07a5d885b93c538cdba31a047db5b30bb1cb1aa17d4c5404d3b2f3a->leave($__internal_2f430329e07a5d885b93c538cdba31a047db5b30bb1cb1aa17d4c5404d3b2f3a_prof);

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
