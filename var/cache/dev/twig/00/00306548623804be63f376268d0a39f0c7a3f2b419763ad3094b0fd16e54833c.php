<?php

/* Cabinet/fiche/gestionfiche.html.twig */
class __TwigTemplate_c46b07e5215a4a61ad0e6a082451a0a44c86fea173e5133a722315d800d7058f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/fiche/gestionfiche.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93550f47f93cc9a59d43d3ab72d54521d042b901412fcada52f7f578f188a6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93550f47f93cc9a59d43d3ab72d54521d042b901412fcada52f7f578f188a6d3->enter($__internal_93550f47f93cc9a59d43d3ab72d54521d042b901412fcada52f7f578f188a6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/fiche/gestionfiche.html.twig"));

        $__internal_7514141073f105c53355f1cf218cb736dc499160c858d405e457b8d3ac075613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7514141073f105c53355f1cf218cb736dc499160c858d405e457b8d3ac075613->enter($__internal_7514141073f105c53355f1cf218cb736dc499160c858d405e457b8d3ac075613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/fiche/gestionfiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93550f47f93cc9a59d43d3ab72d54521d042b901412fcada52f7f578f188a6d3->leave($__internal_93550f47f93cc9a59d43d3ab72d54521d042b901412fcada52f7f578f188a6d3_prof);

        
        $__internal_7514141073f105c53355f1cf218cb736dc499160c858d405e457b8d3ac075613->leave($__internal_7514141073f105c53355f1cf218cb736dc499160c858d405e457b8d3ac075613_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fb2152c4887efd0aba1d8eb18b1b40f6addd3e5ccf6c0772f0e562c22a6441e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb2152c4887efd0aba1d8eb18b1b40f6addd3e5ccf6c0772f0e562c22a6441e->enter($__internal_1fb2152c4887efd0aba1d8eb18b1b40f6addd3e5ccf6c0772f0e562c22a6441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00b554000042843d8648de988686b7fb7afa18c54eb0a6cea1bc5b9d958a0914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b554000042843d8648de988686b7fb7afa18c54eb0a6cea1bc5b9d958a0914->enter($__internal_00b554000042843d8648de988686b7fb7afa18c54eb0a6cea1bc5b9d958a0914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00b554000042843d8648de988686b7fb7afa18c54eb0a6cea1bc5b9d958a0914->leave($__internal_00b554000042843d8648de988686b7fb7afa18c54eb0a6cea1bc5b9d958a0914_prof);

        
        $__internal_1fb2152c4887efd0aba1d8eb18b1b40f6addd3e5ccf6c0772f0e562c22a6441e->leave($__internal_1fb2152c4887efd0aba1d8eb18b1b40f6addd3e5ccf6c0772f0e562c22a6441e_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_a95590f2da2029e6324cb96446db3cf90b5ca040a307efcd48185fd0629cf048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95590f2da2029e6324cb96446db3cf90b5ca040a307efcd48185fd0629cf048->enter($__internal_a95590f2da2029e6324cb96446db3cf90b5ca040a307efcd48185fd0629cf048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_8730720a15e738a29d26375e4ef6b0ea1fb7d76003eefdcb51c66e75de7dda01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8730720a15e738a29d26375e4ef6b0ea1fb7d76003eefdcb51c66e75de7dda01->enter($__internal_8730720a15e738a29d26375e4ef6b0ea1fb7d76003eefdcb51c66e75de7dda01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 7
        echo "<br></br>
<h1 class=\"page-header\"> Gestion des fiches de patients </h1>
<br></br>
<body>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
   <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchfiche");
        echo "\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Cin...\" name =\"search\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-dark\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
    </div>
     <div class=\"col-8\"></div>
   </div> 
   <br></br>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Cin</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "
            <tr>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cin", array()), "html", null, true);
            echo "</td>
        <td><a href=\"/Cabinet/Administration/Gestionfiche/voir/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
        </td>
          </tr>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    </tbody>
  </table>
  </body>
";
        
        $__internal_8730720a15e738a29d26375e4ef6b0ea1fb7d76003eefdcb51c66e75de7dda01->leave($__internal_8730720a15e738a29d26375e4ef6b0ea1fb7d76003eefdcb51c66e75de7dda01_prof);

        
        $__internal_a95590f2da2029e6324cb96446db3cf90b5ca040a307efcd48185fd0629cf048->leave($__internal_a95590f2da2029e6324cb96446db3cf90b5ca040a307efcd48185fd0629cf048_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/fiche/gestionfiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 37,  101 => 36,  77 => 15,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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

{% block table %}
<br></br>
<h1 class=\"page-header\"> Gestion des fiches de patients </h1>
<br></br>
<body>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
   <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('searchfiche') }}\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Cin...\" name =\"search\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-dark\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
    </div>
     <div class=\"col-8\"></div>
   </div> 
   <br></br>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Cin</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

            {% for user in users %}

            <tr>
        <td>{{user.nom}}</td>
        <td>{{user.prenom}}</td>
        <td>{{user.cin}}</td>
        <td><a href=\"/Cabinet/Administration/Gestionfiche/voir/{{user.id}}\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
        </td>
          </tr>

          {% endfor %}

    </tbody>
  </table>
  </body>
{% endblock %}
", "Cabinet/fiche/gestionfiche.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\fiche\\gestionfiche.html.twig");
    }
}
