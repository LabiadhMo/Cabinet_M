<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_80656265a4e4752cc15e7224826914e20cae623bf940a449a2b013858d4fab6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e772fad6989bf0687f9832dccb044df84f5877a740f33b362ceddbbbc26f240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e772fad6989bf0687f9832dccb044df84f5877a740f33b362ceddbbbc26f240->enter($__internal_6e772fad6989bf0687f9832dccb044df84f5877a740f33b362ceddbbbc26f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_ef89ffb9c588ee84beaae30b1bdd78539baf74f2d22a9a2d17fc79a7d9cba547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef89ffb9c588ee84beaae30b1bdd78539baf74f2d22a9a2d17fc79a7d9cba547->enter($__internal_ef89ffb9c588ee84beaae30b1bdd78539baf74f2d22a9a2d17fc79a7d9cba547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"] ?? $this->getContext($context, "__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"] ?? $this->getContext($context, "__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e772fad6989bf0687f9832dccb044df84f5877a740f33b362ceddbbbc26f240->leave($__internal_6e772fad6989bf0687f9832dccb044df84f5877a740f33b362ceddbbbc26f240_prof);

        
        $__internal_ef89ffb9c588ee84beaae30b1bdd78539baf74f2d22a9a2d17fc79a7d9cba547->leave($__internal_ef89ffb9c588ee84beaae30b1bdd78539baf74f2d22a9a2d17fc79a7d9cba547_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ba142a1e09a7e85637b80ff6552445430300f877b32fa591db2acbcdb4f1f5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba142a1e09a7e85637b80ff6552445430300f877b32fa591db2acbcdb4f1f5ae->enter($__internal_ba142a1e09a7e85637b80ff6552445430300f877b32fa591db2acbcdb4f1f5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1c903f30be7d1b3f4ce72a6127b92718351d641a4b588d46d62caff663750583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c903f30be7d1b3f4ce72a6127b92718351d641a4b588d46d62caff663750583->enter($__internal_1c903f30be7d1b3f4ce72a6127b92718351d641a4b588d46d62caff663750583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_1c903f30be7d1b3f4ce72a6127b92718351d641a4b588d46d62caff663750583->leave($__internal_1c903f30be7d1b3f4ce72a6127b92718351d641a4b588d46d62caff663750583_prof);

        
        $__internal_ba142a1e09a7e85637b80ff6552445430300f877b32fa591db2acbcdb4f1f5ae->leave($__internal_ba142a1e09a7e85637b80ff6552445430300f877b32fa591db2acbcdb4f1f5ae_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c637bdb1490c8a0bc3255c2de9f6c08ff5e90799898640ac0096b323193e1dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c637bdb1490c8a0bc3255c2de9f6c08ff5e90799898640ac0096b323193e1dae->enter($__internal_c637bdb1490c8a0bc3255c2de9f6c08ff5e90799898640ac0096b323193e1dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_452368ce65d229d31b937ad11db24d75bcb1e21bd1cce7fd335ff8f005ad3b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452368ce65d229d31b937ad11db24d75bcb1e21bd1cce7fd335ff8f005ad3b0b->enter($__internal_452368ce65d229d31b937ad11db24d75bcb1e21bd1cce7fd335ff8f005ad3b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_452368ce65d229d31b937ad11db24d75bcb1e21bd1cce7fd335ff8f005ad3b0b->leave($__internal_452368ce65d229d31b937ad11db24d75bcb1e21bd1cce7fd335ff8f005ad3b0b_prof);

        
        $__internal_c637bdb1490c8a0bc3255c2de9f6c08ff5e90799898640ac0096b323193e1dae->leave($__internal_c637bdb1490c8a0bc3255c2de9f6c08ff5e90799898640ac0096b323193e1dae_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_593453c81e82cc0bdcb31837f251c6cd73fab47992e6d42b3acd3d74d27108f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593453c81e82cc0bdcb31837f251c6cd73fab47992e6d42b3acd3d74d27108f6->enter($__internal_593453c81e82cc0bdcb31837f251c6cd73fab47992e6d42b3acd3d74d27108f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_843eb9682b120cda9fc170f8ed154e32dd5498cbabd7f495489ceb21f8166e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843eb9682b120cda9fc170f8ed154e32dd5498cbabd7f495489ceb21f8166e87->enter($__internal_843eb9682b120cda9fc170f8ed154e32dd5498cbabd7f495489ceb21f8166e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8"] ?? $this->getContext($context, "__internal_4231e1e34516b4f960f08915fd325fc607f56dbb06a3370030c0ae239af015b8")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_843eb9682b120cda9fc170f8ed154e32dd5498cbabd7f495489ceb21f8166e87->leave($__internal_843eb9682b120cda9fc170f8ed154e32dd5498cbabd7f495489ceb21f8166e87_prof);

        
        $__internal_593453c81e82cc0bdcb31837f251c6cd73fab47992e6d42b3acd3d74d27108f6->leave($__internal_593453c81e82cc0bdcb31837f251c6cd73fab47992e6d42b3acd3d74d27108f6_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_262e38c4ae297ed7f62dc9551bc78dd9628a3b48245352848dcffd991d13c7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262e38c4ae297ed7f62dc9551bc78dd9628a3b48245352848dcffd991d13c7a1->enter($__internal_262e38c4ae297ed7f62dc9551bc78dd9628a3b48245352848dcffd991d13c7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_75b49ec4e3c59745e7540f0439c76533b80faaa97943de305ad8449b2a41678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b49ec4e3c59745e7540f0439c76533b80faaa97943de305ad8449b2a41678b->enter($__internal_75b49ec4e3c59745e7540f0439c76533b80faaa97943de305ad8449b2a41678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_75b49ec4e3c59745e7540f0439c76533b80faaa97943de305ad8449b2a41678b->leave($__internal_75b49ec4e3c59745e7540f0439c76533b80faaa97943de305ad8449b2a41678b_prof);

        
        $__internal_262e38c4ae297ed7f62dc9551bc78dd9628a3b48245352848dcffd991d13c7a1->leave($__internal_262e38c4ae297ed7f62dc9551bc78dd9628a3b48245352848dcffd991d13c7a1_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_342c92f22511a67013f48985211bd5e7563226ebaa2c17d3026554788eb57106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342c92f22511a67013f48985211bd5e7563226ebaa2c17d3026554788eb57106->enter($__internal_342c92f22511a67013f48985211bd5e7563226ebaa2c17d3026554788eb57106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_04ffd7f4da09365a782fe32cda1fd275ce27a7cf6474601e6572f191f4d49b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ffd7f4da09365a782fe32cda1fd275ce27a7cf6474601e6572f191f4d49b74->enter($__internal_04ffd7f4da09365a782fe32cda1fd275ce27a7cf6474601e6572f191f4d49b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_04ffd7f4da09365a782fe32cda1fd275ce27a7cf6474601e6572f191f4d49b74->leave($__internal_04ffd7f4da09365a782fe32cda1fd275ce27a7cf6474601e6572f191f4d49b74_prof);

        
        $__internal_342c92f22511a67013f48985211bd5e7563226ebaa2c17d3026554788eb57106->leave($__internal_342c92f22511a67013f48985211bd5e7563226ebaa2c17d3026554788eb57106_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_a670a96fa237c4adda9e652fad31d812537142b8119a358c2c3670a83a19cf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a670a96fa237c4adda9e652fad31d812537142b8119a358c2c3670a83a19cf63->enter($__internal_a670a96fa237c4adda9e652fad31d812537142b8119a358c2c3670a83a19cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_7ded4a217b61e2afa09cb1f4b963c7f758dd8e89cfe059a6d4af40ebad970000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded4a217b61e2afa09cb1f4b963c7f758dd8e89cfe059a6d4af40ebad970000->enter($__internal_7ded4a217b61e2afa09cb1f4b963c7f758dd8e89cfe059a6d4af40ebad970000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_7ded4a217b61e2afa09cb1f4b963c7f758dd8e89cfe059a6d4af40ebad970000->leave($__internal_7ded4a217b61e2afa09cb1f4b963c7f758dd8e89cfe059a6d4af40ebad970000_prof);

        
        $__internal_a670a96fa237c4adda9e652fad31d812537142b8119a358c2c3670a83a19cf63->leave($__internal_a670a96fa237c4adda9e652fad31d812537142b8119a358c2c3670a83a19cf63_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6676977dc0b064dc976aaf3282c3b67d998913eb32691fc8a2af065bad322c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6676977dc0b064dc976aaf3282c3b67d998913eb32691fc8a2af065bad322c20->enter($__internal_6676977dc0b064dc976aaf3282c3b67d998913eb32691fc8a2af065bad322c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3446c55382b133d1b95efc71a12ae9a298930057016d04c18f91a534c9c27e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3446c55382b133d1b95efc71a12ae9a298930057016d04c18f91a534c9c27e71->enter($__internal_3446c55382b133d1b95efc71a12ae9a298930057016d04c18f91a534c9c27e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_3446c55382b133d1b95efc71a12ae9a298930057016d04c18f91a534c9c27e71->leave($__internal_3446c55382b133d1b95efc71a12ae9a298930057016d04c18f91a534c9c27e71_prof);

        
        $__internal_6676977dc0b064dc976aaf3282c3b67d998913eb32691fc8a2af065bad322c20->leave($__internal_6676977dc0b064dc976aaf3282c3b67d998913eb32691fc8a2af065bad322c20_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\edit.html.twig");
    }
}
