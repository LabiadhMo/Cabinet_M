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
        $__internal_60b3d34f95635577348c6bcec905f42d73862487a7e49012aa404bd2e58bfe75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b3d34f95635577348c6bcec905f42d73862487a7e49012aa404bd2e58bfe75->enter($__internal_60b3d34f95635577348c6bcec905f42d73862487a7e49012aa404bd2e58bfe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/CabinetAdmin.html.twig"));

        $__internal_5f2f908e387ea8297ae03895c602b539eac1dc6e20e568b001e85b58da2ba44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f908e387ea8297ae03895c602b539eac1dc6e20e568b001e85b58da2ba44b->enter($__internal_5f2f908e387ea8297ae03895c602b539eac1dc6e20e568b001e85b58da2ba44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/CabinetAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b3d34f95635577348c6bcec905f42d73862487a7e49012aa404bd2e58bfe75->leave($__internal_60b3d34f95635577348c6bcec905f42d73862487a7e49012aa404bd2e58bfe75_prof);

        
        $__internal_5f2f908e387ea8297ae03895c602b539eac1dc6e20e568b001e85b58da2ba44b->leave($__internal_5f2f908e387ea8297ae03895c602b539eac1dc6e20e568b001e85b58da2ba44b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_286a1fdaf8f204eab885793a699c91cc3357b7faf6234ef165ffa919580e3546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286a1fdaf8f204eab885793a699c91cc3357b7faf6234ef165ffa919580e3546->enter($__internal_286a1fdaf8f204eab885793a699c91cc3357b7faf6234ef165ffa919580e3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62db5052e4998fd48cb0eaf4acf79bb60b6020fd2b51c3e54554ec472ba8c102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62db5052e4998fd48cb0eaf4acf79bb60b6020fd2b51c3e54554ec472ba8c102->enter($__internal_62db5052e4998fd48cb0eaf4acf79bb60b6020fd2b51c3e54554ec472ba8c102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62db5052e4998fd48cb0eaf4acf79bb60b6020fd2b51c3e54554ec472ba8c102->leave($__internal_62db5052e4998fd48cb0eaf4acf79bb60b6020fd2b51c3e54554ec472ba8c102_prof);

        
        $__internal_286a1fdaf8f204eab885793a699c91cc3357b7faf6234ef165ffa919580e3546->leave($__internal_286a1fdaf8f204eab885793a699c91cc3357b7faf6234ef165ffa919580e3546_prof);

    }

    // line 6
    public function block_left($context, array $blocks = array())
    {
        $__internal_21946cd82274672c539536d35bfa0d21d252927ce7d5ef8ecb85e0562013d6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21946cd82274672c539536d35bfa0d21d252927ce7d5ef8ecb85e0562013d6a8->enter($__internal_21946cd82274672c539536d35bfa0d21d252927ce7d5ef8ecb85e0562013d6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_24d8bcbcedfc81830c7c65b274bd40a415df0acec7260ea46444ae82cb303633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d8bcbcedfc81830c7c65b274bd40a415df0acec7260ea46444ae82cb303633->enter($__internal_24d8bcbcedfc81830c7c65b274bd40a415df0acec7260ea46444ae82cb303633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 7
        echo "<a href=\"/Cabinet/Administration/Gestionrdv\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des rendez-vous <center><img src=\"../../../../gestionrdv.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_24d8bcbcedfc81830c7c65b274bd40a415df0acec7260ea46444ae82cb303633->leave($__internal_24d8bcbcedfc81830c7c65b274bd40a415df0acec7260ea46444ae82cb303633_prof);

        
        $__internal_21946cd82274672c539536d35bfa0d21d252927ce7d5ef8ecb85e0562013d6a8->leave($__internal_21946cd82274672c539536d35bfa0d21d252927ce7d5ef8ecb85e0562013d6a8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f302ad883904c16f1e6412930ac34f4d9d472e1e78a57a239f4c8558872145e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f302ad883904c16f1e6412930ac34f4d9d472e1e78a57a239f4c8558872145e->enter($__internal_7f302ad883904c16f1e6412930ac34f4d9d472e1e78a57a239f4c8558872145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a18f1bd82eeb700cdcc59a73b9f0b6c91ab54fe835ed955c5f88e4761d8ba8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18f1bd82eeb700cdcc59a73b9f0b6c91ab54fe835ed955c5f88e4761d8ba8b9->enter($__internal_a18f1bd82eeb700cdcc59a73b9f0b6c91ab54fe835ed955c5f88e4761d8ba8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<a href=\"/Cabinet/Administration/Gestionmutuelle\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des mutuelles <center><img src=\"../../../../gestionmutuelle.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_a18f1bd82eeb700cdcc59a73b9f0b6c91ab54fe835ed955c5f88e4761d8ba8b9->leave($__internal_a18f1bd82eeb700cdcc59a73b9f0b6c91ab54fe835ed955c5f88e4761d8ba8b9_prof);

        
        $__internal_7f302ad883904c16f1e6412930ac34f4d9d472e1e78a57a239f4c8558872145e->leave($__internal_7f302ad883904c16f1e6412930ac34f4d9d472e1e78a57a239f4c8558872145e_prof);

    }

    // line 14
    public function block_right($context, array $blocks = array())
    {
        $__internal_92323bba18a8678c8db329477845dbe1c95185cefd0a3ddfb2c99eb7d86f3cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92323bba18a8678c8db329477845dbe1c95185cefd0a3ddfb2c99eb7d86f3cff->enter($__internal_92323bba18a8678c8db329477845dbe1c95185cefd0a3ddfb2c99eb7d86f3cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_fb6fd69294ea5425ca93225d6bd5ef386228abc0cada99dc5b093a127e78a4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6fd69294ea5425ca93225d6bd5ef386228abc0cada99dc5b093a127e78a4cf->enter($__internal_fb6fd69294ea5425ca93225d6bd5ef386228abc0cada99dc5b093a127e78a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 15
        echo "<a href=\"/Cabinet/Administration/Gestionfiche\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des fiches <center><img src=\"../../../../gestionfiche.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_fb6fd69294ea5425ca93225d6bd5ef386228abc0cada99dc5b093a127e78a4cf->leave($__internal_fb6fd69294ea5425ca93225d6bd5ef386228abc0cada99dc5b093a127e78a4cf_prof);

        
        $__internal_92323bba18a8678c8db329477845dbe1c95185cefd0a3ddfb2c99eb7d86f3cff->leave($__internal_92323bba18a8678c8db329477845dbe1c95185cefd0a3ddfb2c99eb7d86f3cff_prof);

    }

    // line 18
    public function block_downleft($context, array $blocks = array())
    {
        $__internal_f8945b3e88f32963bf28f4cc8b94be39cfd48347c59e7cf82dfae7baf377501c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8945b3e88f32963bf28f4cc8b94be39cfd48347c59e7cf82dfae7baf377501c->enter($__internal_f8945b3e88f32963bf28f4cc8b94be39cfd48347c59e7cf82dfae7baf377501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        $__internal_891cda909f36cd29a8e7c6dc2b857fa47e7195dd6c80afdfd62354439f3dc791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891cda909f36cd29a8e7c6dc2b857fa47e7195dd6c80afdfd62354439f3dc791->enter($__internal_891cda909f36cd29a8e7c6dc2b857fa47e7195dd6c80afdfd62354439f3dc791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "downleft"));

        // line 19
        echo "<a href=\"/Cabinet/Administration/Gestionconsultation\", class=\"btn btn-outline-secondary btn-lg btn-block\"> Gestion des consultations <center><img src=\"../../../../gestionconsult.png\", class=\"img-thumbnail\" ></center> </a>
";
        
        $__internal_891cda909f36cd29a8e7c6dc2b857fa47e7195dd6c80afdfd62354439f3dc791->leave($__internal_891cda909f36cd29a8e7c6dc2b857fa47e7195dd6c80afdfd62354439f3dc791_prof);

        
        $__internal_f8945b3e88f32963bf28f4cc8b94be39cfd48347c59e7cf82dfae7baf377501c->leave($__internal_f8945b3e88f32963bf28f4cc8b94be39cfd48347c59e7cf82dfae7baf377501c_prof);

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
