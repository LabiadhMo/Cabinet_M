<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f601aea9b9a3fed9e80f3af7e2031dea2fdcfb09d6bcdd4380e172f770e0fad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b514aaa94e15b0648175cdc043138271549828bd55d9da46f9183d1badd73c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b514aaa94e15b0648175cdc043138271549828bd55d9da46f9183d1badd73c6->enter($__internal_3b514aaa94e15b0648175cdc043138271549828bd55d9da46f9183d1badd73c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fd2e79ee92ef1dd899bf64538b8a6ee7c1da02ff41ca686e215730f005ceabd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2e79ee92ef1dd899bf64538b8a6ee7c1da02ff41ca686e215730f005ceabd7->enter($__internal_fd2e79ee92ef1dd899bf64538b8a6ee7c1da02ff41ca686e215730f005ceabd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b514aaa94e15b0648175cdc043138271549828bd55d9da46f9183d1badd73c6->leave($__internal_3b514aaa94e15b0648175cdc043138271549828bd55d9da46f9183d1badd73c6_prof);

        
        $__internal_fd2e79ee92ef1dd899bf64538b8a6ee7c1da02ff41ca686e215730f005ceabd7->leave($__internal_fd2e79ee92ef1dd899bf64538b8a6ee7c1da02ff41ca686e215730f005ceabd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c81e510945ed15cd86f83abf59c0e509ea35a4868787c2c19004a5eee2013c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c81e510945ed15cd86f83abf59c0e509ea35a4868787c2c19004a5eee2013c0->enter($__internal_3c81e510945ed15cd86f83abf59c0e509ea35a4868787c2c19004a5eee2013c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d557e51decd876897fa8e51831fccd638485a9402443fa3ab9ddede9099ce131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d557e51decd876897fa8e51831fccd638485a9402443fa3ab9ddede9099ce131->enter($__internal_d557e51decd876897fa8e51831fccd638485a9402443fa3ab9ddede9099ce131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d557e51decd876897fa8e51831fccd638485a9402443fa3ab9ddede9099ce131->leave($__internal_d557e51decd876897fa8e51831fccd638485a9402443fa3ab9ddede9099ce131_prof);

        
        $__internal_3c81e510945ed15cd86f83abf59c0e509ea35a4868787c2c19004a5eee2013c0->leave($__internal_3c81e510945ed15cd86f83abf59c0e509ea35a4868787c2c19004a5eee2013c0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1b47afc59a3766735e60ab12cbaf1d4604478dc8c920ce36ac360eb039e4825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b47afc59a3766735e60ab12cbaf1d4604478dc8c920ce36ac360eb039e4825->enter($__internal_b1b47afc59a3766735e60ab12cbaf1d4604478dc8c920ce36ac360eb039e4825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86a0ee265a3eca67df0ae0115375a23ac8c0c0d91457759a8c5df90481a608bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a0ee265a3eca67df0ae0115375a23ac8c0c0d91457759a8c5df90481a608bf->enter($__internal_86a0ee265a3eca67df0ae0115375a23ac8c0c0d91457759a8c5df90481a608bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86a0ee265a3eca67df0ae0115375a23ac8c0c0d91457759a8c5df90481a608bf->leave($__internal_86a0ee265a3eca67df0ae0115375a23ac8c0c0d91457759a8c5df90481a608bf_prof);

        
        $__internal_b1b47afc59a3766735e60ab12cbaf1d4604478dc8c920ce36ac360eb039e4825->leave($__internal_b1b47afc59a3766735e60ab12cbaf1d4604478dc8c920ce36ac360eb039e4825_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e3ba0cfee7fc9779e2dddc00b525db78190d8e4fd87b593b59c6442be6f524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e3ba0cfee7fc9779e2dddc00b525db78190d8e4fd87b593b59c6442be6f524->enter($__internal_41e3ba0cfee7fc9779e2dddc00b525db78190d8e4fd87b593b59c6442be6f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eb8d82c48921658dd8b45613fdd6b9271b003d75b2b4132fb2b6138db7bc902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb8d82c48921658dd8b45613fdd6b9271b003d75b2b4132fb2b6138db7bc902->enter($__internal_7eb8d82c48921658dd8b45613fdd6b9271b003d75b2b4132fb2b6138db7bc902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7eb8d82c48921658dd8b45613fdd6b9271b003d75b2b4132fb2b6138db7bc902->leave($__internal_7eb8d82c48921658dd8b45613fdd6b9271b003d75b2b4132fb2b6138db7bc902_prof);

        
        $__internal_41e3ba0cfee7fc9779e2dddc00b525db78190d8e4fd87b593b59c6442be6f524->leave($__internal_41e3ba0cfee7fc9779e2dddc00b525db78190d8e4fd87b593b59c6442be6f524_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
