<?php

/* @EasyAdmin/default/includes/_select2_widget.html.twig */
class __TwigTemplate_ec11bd62d72a9c345decaaa37032c06d5987256e4c265584ba858c0a0bf4d004 extends Twig_Template
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
        $__internal_86fe989bafbfa8c10820b36ec5ecd863e558e9fd80dea2451701116adf8b3235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fe989bafbfa8c10820b36ec5ecd863e558e9fd80dea2451701116adf8b3235->enter($__internal_86fe989bafbfa8c10820b36ec5ecd863e558e9fd80dea2451701116adf8b3235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_select2_widget.html.twig"));

        $__internal_bbb2594cb90cb9f8ae25f2c8f97a7de2c4508edb1d6499e38bd32e6d30785633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb2594cb90cb9f8ae25f2c8f97a7de2c4508edb1d6499e38bd32e6d30785633->enter($__internal_bbb2594cb90cb9f8ae25f2c8f97a7de2c4508edb1d6499e38bd32e6d30785633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_select2_widget.html.twig"));

        // line 1
        $context["_select2_locales"] = array(0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW");
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), ($context["_select2_locales"] ?? $this->getContext($context, "_select2_locales")))) ? ($this->getAttribute($this->getAttribute(        // line 4
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())) : (((twig_in_filter(        // line 5
($context["_app_language"] ?? $this->getContext($context, "_app_language")), ($context["_select2_locales"] ?? $this->getContext($context, "_select2_locales")))) ? (($context["_app_language"] ?? $this->getContext($context, "_app_language"))) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/easyadmin/javascript/select2/i18n/" . ($context["_select2_locale"] ?? $this->getContext($context, "_select2_locale"))) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 15
        echo twig_escape_filter($this->env, ($context["_select2_locale"] ?? $this->getContext($context, "_select2_locale")), "html", null, true);
        echo "'
    });
});
</script>
";
        
        $__internal_86fe989bafbfa8c10820b36ec5ecd863e558e9fd80dea2451701116adf8b3235->leave($__internal_86fe989bafbfa8c10820b36ec5ecd863e558e9fd80dea2451701116adf8b3235_prof);

        
        $__internal_bbb2594cb90cb9f8ae25f2c8f97a7de2c4508edb1d6499e38bd32e6d30785633->leave($__internal_bbb2594cb90cb9f8ae25f2c8f97a7de2c4508edb1d6499e38bd32e6d30785633_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  36 => 8,  33 => 7,  31 => 5,  30 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _select2_locales = ['ar', 'az', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'nl', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sr-Cyrl', 'sr', 'sv', 'th', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}
{% set _app_language = app.request.locale|split('-')|first|split('_')|first %}
{% set _select2_locale = app.request.locale in _select2_locales
    ? app.request.locale
    : _app_language in _select2_locales ? _app_language : 'en'
%}

<script src=\"{{ asset('bundles/easyadmin/javascript/select2/i18n/' ~ _select2_locale ~ '.js') }}\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '{{ _select2_locale }}'
    });
});
</script>
", "@EasyAdmin/default/includes/_select2_widget.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\includes\\_select2_widget.html.twig");
    }
}
