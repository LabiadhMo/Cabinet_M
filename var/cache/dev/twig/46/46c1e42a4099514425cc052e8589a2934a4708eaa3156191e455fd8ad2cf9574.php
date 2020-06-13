<?php

/* Cabinet/rdv/gestionrdv.html.twig */
class __TwigTemplate_ed9a78f5d5e644c3423f7237e0babfebcaf8cdb3f37bdc18bf5f74bb1d5178e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/rdv/gestionrdv.html.twig", 1);
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
        $__internal_d1ac81f06deb70d5cf1f7d1017b6789607279e9cf11bbd8b2c7cde4fd42aa2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ac81f06deb70d5cf1f7d1017b6789607279e9cf11bbd8b2c7cde4fd42aa2a7->enter($__internal_d1ac81f06deb70d5cf1f7d1017b6789607279e9cf11bbd8b2c7cde4fd42aa2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/rdv/gestionrdv.html.twig"));

        $__internal_ccb66943ab923c87acc554b4f71be702e69dd2b69c0a73d9005ba210108175b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb66943ab923c87acc554b4f71be702e69dd2b69c0a73d9005ba210108175b0->enter($__internal_ccb66943ab923c87acc554b4f71be702e69dd2b69c0a73d9005ba210108175b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/rdv/gestionrdv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ac81f06deb70d5cf1f7d1017b6789607279e9cf11bbd8b2c7cde4fd42aa2a7->leave($__internal_d1ac81f06deb70d5cf1f7d1017b6789607279e9cf11bbd8b2c7cde4fd42aa2a7_prof);

        
        $__internal_ccb66943ab923c87acc554b4f71be702e69dd2b69c0a73d9005ba210108175b0->leave($__internal_ccb66943ab923c87acc554b4f71be702e69dd2b69c0a73d9005ba210108175b0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dda537eebb2bfe77c56302ca9d44c3f10bf010b0055d30a7d0c4818917b7829c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda537eebb2bfe77c56302ca9d44c3f10bf010b0055d30a7d0c4818917b7829c->enter($__internal_dda537eebb2bfe77c56302ca9d44c3f10bf010b0055d30a7d0c4818917b7829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a50da86c4a8cd59e7aecd223152a386e56c32b60dde2193edbbb6e74de57a472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50da86c4a8cd59e7aecd223152a386e56c32b60dde2193edbbb6e74de57a472->enter($__internal_a50da86c4a8cd59e7aecd223152a386e56c32b60dde2193edbbb6e74de57a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a50da86c4a8cd59e7aecd223152a386e56c32b60dde2193edbbb6e74de57a472->leave($__internal_a50da86c4a8cd59e7aecd223152a386e56c32b60dde2193edbbb6e74de57a472_prof);

        
        $__internal_dda537eebb2bfe77c56302ca9d44c3f10bf010b0055d30a7d0c4818917b7829c->leave($__internal_dda537eebb2bfe77c56302ca9d44c3f10bf010b0055d30a7d0c4818917b7829c_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_3e9370c8eac9189567486f7856f1c52b1a3b4a61e30010bfaaf38e68cea91b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9370c8eac9189567486f7856f1c52b1a3b4a61e30010bfaaf38e68cea91b3e->enter($__internal_3e9370c8eac9189567486f7856f1c52b1a3b4a61e30010bfaaf38e68cea91b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_7d339a0dc8feea51f27d26374c69bbbb5eb69d238d0a99739608b2c232cda509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d339a0dc8feea51f27d26374c69bbbb5eb69d238d0a99739608b2c232cda509->enter($__internal_7d339a0dc8feea51f27d26374c69bbbb5eb69d238d0a99739608b2c232cda509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 7
        echo "<br></br>
<h1 class=\"page-header\"> Gestion des Rendez-vous </h1>
<br></br>
<a href=\"/Cabinet/Administration/Gestionrdv/créer\" class=\"btn btn-success\"><i class=\"far fa-plus-square\"></i></a>
<body>

<br></br>

<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <i class=\"far fa-question-circle\"></i>
            </div>
            <div class=\"modal-header\">
                <h4>Voulez-vous supprimer cet élément ?</h4>
            </div>
            <div class=\"modal-body\">
                Cette action est irréversible !
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <a class=\"btn btn-danger btn-ok\">Supprimer</a>
            </div>
        </div>
    </div>
</div>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
    <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchrdv");
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
        <th>Num_tél</th>
        <th>Date</th>
        <th>Séance</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
          ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rdvs"] ?? $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 62
            echo "          <tr>
        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "prenom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "cin", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "numTel", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "dateRdv", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "seance", array()), "html", null, true);
            echo "</td>
        <td><a href=\"/Cabinet/Administration/Gestionrdv/edit/";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></a>
        <button class=\"btn btn-danger\" data-href=\"/Cabinet/Administration/Gestionrdv/delete/";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
        <i class=\"far fa-trash-alt\"></i>
        </button>
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
  </table>
  </body>
";
        
        $__internal_7d339a0dc8feea51f27d26374c69bbbb5eb69d238d0a99739608b2c232cda509->leave($__internal_7d339a0dc8feea51f27d26374c69bbbb5eb69d238d0a99739608b2c232cda509_prof);

        
        $__internal_3e9370c8eac9189567486f7856f1c52b1a3b4a61e30010bfaaf38e68cea91b3e->leave($__internal_3e9370c8eac9189567486f7856f1c52b1a3b4a61e30010bfaaf38e68cea91b3e_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/rdv/gestionrdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  161 => 70,  157 => 69,  153 => 68,  149 => 67,  145 => 66,  141 => 65,  137 => 64,  133 => 63,  130 => 62,  126 => 61,  100 => 38,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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
<h1 class=\"page-header\"> Gestion des Rendez-vous </h1>
<br></br>
<a href=\"/Cabinet/Administration/Gestionrdv/créer\" class=\"btn btn-success\"><i class=\"far fa-plus-square\"></i></a>
<body>

<br></br>

<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <i class=\"far fa-question-circle\"></i>
            </div>
            <div class=\"modal-header\">
                <h4>Voulez-vous supprimer cet élément ?</h4>
            </div>
            <div class=\"modal-body\">
                Cette action est irréversible !
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <a class=\"btn btn-danger btn-ok\">Supprimer</a>
            </div>
        </div>
    </div>
</div>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
    <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('searchrdv') }}\">
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
        <th>Num_tél</th>
        <th>Date</th>
        <th>Séance</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
          {% for rdv in rdvs %}
          <tr>
        <td>{{rdv.nom}}</td>
        <td>{{rdv.prenom}}</td>
        <td>{{rdv.cin}}</td>
        <td>{{rdv.numTel}}</td>
        <td>{{rdv.dateRdv}}</td>
        <td>{{rdv.seance}}</td>
        <td><a href=\"/Cabinet/Administration/Gestionrdv/edit/{{rdv.id}}\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></a>
        <button class=\"btn btn-danger\" data-href=\"/Cabinet/Administration/Gestionrdv/delete/{{rdv.id}}\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
        <i class=\"far fa-trash-alt\"></i>
        </button>
        </td>
      </tr>
      {% endfor %}
    </tbody>
  </table>
  </body>
{% endblock %}", "Cabinet/rdv/gestionrdv.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\rdv\\gestionrdv.html.twig");
    }
}
