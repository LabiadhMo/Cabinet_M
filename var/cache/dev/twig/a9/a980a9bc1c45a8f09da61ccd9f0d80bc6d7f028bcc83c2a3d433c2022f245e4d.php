<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d3d2dc5700062206cc6677871c708812183e57c0c826dfe1e6b5c542ed579246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a0352d1239945321a7f19faec5c66d87151be72ff6b4d067ee3aab85d15c112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0352d1239945321a7f19faec5c66d87151be72ff6b4d067ee3aab85d15c112->enter($__internal_0a0352d1239945321a7f19faec5c66d87151be72ff6b4d067ee3aab85d15c112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_ae3670a5071e7a5b7a27f3e5c6d676f49a0c326cc739fecd2505701055d19272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3670a5071e7a5b7a27f3e5c6d676f49a0c326cc739fecd2505701055d19272->enter($__internal_ae3670a5071e7a5b7a27f3e5c6d676f49a0c326cc739fecd2505701055d19272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0352d1239945321a7f19faec5c66d87151be72ff6b4d067ee3aab85d15c112->leave($__internal_0a0352d1239945321a7f19faec5c66d87151be72ff6b4d067ee3aab85d15c112_prof);

        
        $__internal_ae3670a5071e7a5b7a27f3e5c6d676f49a0c326cc739fecd2505701055d19272->leave($__internal_ae3670a5071e7a5b7a27f3e5c6d676f49a0c326cc739fecd2505701055d19272_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0be287fd0a96bd9775560a5ff90ee9d5b748a3ea0ca450efacc619a3996a8d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be287fd0a96bd9775560a5ff90ee9d5b748a3ea0ca450efacc619a3996a8d06->enter($__internal_0be287fd0a96bd9775560a5ff90ee9d5b748a3ea0ca450efacc619a3996a8d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c93dfde49912d2cc3d3a95a05f748b121f6e6e7ee195ac1e66938aea72df10f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93dfde49912d2cc3d3a95a05f748b121f6e6e7ee195ac1e66938aea72df10f6->enter($__internal_c93dfde49912d2cc3d3a95a05f748b121f6e6e7ee195ac1e66938aea72df10f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        <div>
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
";
        
        $__internal_c93dfde49912d2cc3d3a95a05f748b121f6e6e7ee195ac1e66938aea72df10f6->leave($__internal_c93dfde49912d2cc3d3a95a05f748b121f6e6e7ee195ac1e66938aea72df10f6_prof);

        
        $__internal_0be287fd0a96bd9775560a5ff90ee9d5b748a3ea0ca450efacc619a3996a8d06->leave($__internal_0be287fd0a96bd9775560a5ff90ee9d5b748a3ea0ca450efacc619a3996a8d06_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a44fe41dff8571170639e68dd4fe7f2813f37ffb144ef1700d9b31856851cbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44fe41dff8571170639e68dd4fe7f2813f37ffb144ef1700d9b31856851cbec->enter($__internal_a44fe41dff8571170639e68dd4fe7f2813f37ffb144ef1700d9b31856851cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_31854a3a194700494d1c93f271e8c4503642c36b6ed5774f3bbe059a15b65d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31854a3a194700494d1c93f271e8c4503642c36b6ed5774f3bbe059a15b65d6e->enter($__internal_31854a3a194700494d1c93f271e8c4503642c36b6ed5774f3bbe059a15b65d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_31854a3a194700494d1c93f271e8c4503642c36b6ed5774f3bbe059a15b65d6e->leave($__internal_31854a3a194700494d1c93f271e8c4503642c36b6ed5774f3bbe059a15b65d6e_prof);

        
        $__internal_a44fe41dff8571170639e68dd4fe7f2813f37ffb144ef1700d9b31856851cbec->leave($__internal_a44fe41dff8571170639e68dd4fe7f2813f37ffb144ef1700d9b31856851cbec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  109 => 18,  97 => 20,  95 => 18,  91 => 16,  88 => 15,  82 => 14,  73 => 11,  68 => 10,  63 => 9,  58 => 8,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
