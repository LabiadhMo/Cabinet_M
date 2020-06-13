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
        $__internal_5127c17eda1d185948de2563d39cd242cf89aab84922e7ba52b93191d6547c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5127c17eda1d185948de2563d39cd242cf89aab84922e7ba52b93191d6547c1a->enter($__internal_5127c17eda1d185948de2563d39cd242cf89aab84922e7ba52b93191d6547c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_93bf212b367f9527d482b355f0b43a4fcb585d00b9dbf482c4c09cd916861302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bf212b367f9527d482b355f0b43a4fcb585d00b9dbf482c4c09cd916861302->enter($__internal_93bf212b367f9527d482b355f0b43a4fcb585d00b9dbf482c4c09cd916861302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5127c17eda1d185948de2563d39cd242cf89aab84922e7ba52b93191d6547c1a->leave($__internal_5127c17eda1d185948de2563d39cd242cf89aab84922e7ba52b93191d6547c1a_prof);

        
        $__internal_93bf212b367f9527d482b355f0b43a4fcb585d00b9dbf482c4c09cd916861302->leave($__internal_93bf212b367f9527d482b355f0b43a4fcb585d00b9dbf482c4c09cd916861302_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b0f8fb3e4f6c412d562b6efe74d5890829c0391765e60795e89736ecaad16b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0f8fb3e4f6c412d562b6efe74d5890829c0391765e60795e89736ecaad16b0->enter($__internal_8b0f8fb3e4f6c412d562b6efe74d5890829c0391765e60795e89736ecaad16b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4492aa1e769937c7f8ccf18d58a229b026c93dc4e8af6e3a4f9fa42d7f3db182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4492aa1e769937c7f8ccf18d58a229b026c93dc4e8af6e3a4f9fa42d7f3db182->enter($__internal_4492aa1e769937c7f8ccf18d58a229b026c93dc4e8af6e3a4f9fa42d7f3db182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4492aa1e769937c7f8ccf18d58a229b026c93dc4e8af6e3a4f9fa42d7f3db182->leave($__internal_4492aa1e769937c7f8ccf18d58a229b026c93dc4e8af6e3a4f9fa42d7f3db182_prof);

        
        $__internal_8b0f8fb3e4f6c412d562b6efe74d5890829c0391765e60795e89736ecaad16b0->leave($__internal_8b0f8fb3e4f6c412d562b6efe74d5890829c0391765e60795e89736ecaad16b0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45a114b770cf89727c7bf47a73ad4a4a67b7fe5392cd550ce0246f243bf8c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45a114b770cf89727c7bf47a73ad4a4a67b7fe5392cd550ce0246f243bf8c8d->enter($__internal_b45a114b770cf89727c7bf47a73ad4a4a67b7fe5392cd550ce0246f243bf8c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c17124b6da2d2b32cd0f251f42e2ade827cc7a66c565b9426c8c79265a08d9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17124b6da2d2b32cd0f251f42e2ade827cc7a66c565b9426c8c79265a08d9cb->enter($__internal_c17124b6da2d2b32cd0f251f42e2ade827cc7a66c565b9426c8c79265a08d9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c17124b6da2d2b32cd0f251f42e2ade827cc7a66c565b9426c8c79265a08d9cb->leave($__internal_c17124b6da2d2b32cd0f251f42e2ade827cc7a66c565b9426c8c79265a08d9cb_prof);

        
        $__internal_b45a114b770cf89727c7bf47a73ad4a4a67b7fe5392cd550ce0246f243bf8c8d->leave($__internal_b45a114b770cf89727c7bf47a73ad4a4a67b7fe5392cd550ce0246f243bf8c8d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_10bdf03cb2f53e48cfa2a19f0d5cc2662870fca79ab43f1d1929bcefa542d2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bdf03cb2f53e48cfa2a19f0d5cc2662870fca79ab43f1d1929bcefa542d2cc->enter($__internal_10bdf03cb2f53e48cfa2a19f0d5cc2662870fca79ab43f1d1929bcefa542d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f1d32f3a4a3556ba0a7a7295f33948ef5cc580326d0df39272dbc4e4c798047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1d32f3a4a3556ba0a7a7295f33948ef5cc580326d0df39272dbc4e4c798047->enter($__internal_2f1d32f3a4a3556ba0a7a7295f33948ef5cc580326d0df39272dbc4e4c798047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2f1d32f3a4a3556ba0a7a7295f33948ef5cc580326d0df39272dbc4e4c798047->leave($__internal_2f1d32f3a4a3556ba0a7a7295f33948ef5cc580326d0df39272dbc4e4c798047_prof);

        
        $__internal_10bdf03cb2f53e48cfa2a19f0d5cc2662870fca79ab43f1d1929bcefa542d2cc->leave($__internal_10bdf03cb2f53e48cfa2a19f0d5cc2662870fca79ab43f1d1929bcefa542d2cc_prof);

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
