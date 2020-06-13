<?php

/* Cabinet/mutuelle/gestionmutuelle.html.twig */
class __TwigTemplate_26645c70fea4f7fbf5bda00fd459322bd9d6a679644eecfe25fc1ef2c139152d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/mutuelle/gestionmutuelle.html.twig", 1);
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
        $__internal_74afebfd06c06d43594a681d0c183005c2e8c452733522facf8e8e2cacc1a547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74afebfd06c06d43594a681d0c183005c2e8c452733522facf8e8e2cacc1a547->enter($__internal_74afebfd06c06d43594a681d0c183005c2e8c452733522facf8e8e2cacc1a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/mutuelle/gestionmutuelle.html.twig"));

        $__internal_0da998dfe6945101caf3774de39ec3145daff27e31e73b342b9ba3a805b5c2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da998dfe6945101caf3774de39ec3145daff27e31e73b342b9ba3a805b5c2a8->enter($__internal_0da998dfe6945101caf3774de39ec3145daff27e31e73b342b9ba3a805b5c2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/mutuelle/gestionmutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74afebfd06c06d43594a681d0c183005c2e8c452733522facf8e8e2cacc1a547->leave($__internal_74afebfd06c06d43594a681d0c183005c2e8c452733522facf8e8e2cacc1a547_prof);

        
        $__internal_0da998dfe6945101caf3774de39ec3145daff27e31e73b342b9ba3a805b5c2a8->leave($__internal_0da998dfe6945101caf3774de39ec3145daff27e31e73b342b9ba3a805b5c2a8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_705cda9315ad5beebbe41dfc830a7510ca8843f337145227155cfda08aa1e4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705cda9315ad5beebbe41dfc830a7510ca8843f337145227155cfda08aa1e4af->enter($__internal_705cda9315ad5beebbe41dfc830a7510ca8843f337145227155cfda08aa1e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e52a86763e41425b9b467783c049513b6f2392eaee8b5293f2f85d5ae6ae0ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52a86763e41425b9b467783c049513b6f2392eaee8b5293f2f85d5ae6ae0ef8->enter($__internal_e52a86763e41425b9b467783c049513b6f2392eaee8b5293f2f85d5ae6ae0ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e52a86763e41425b9b467783c049513b6f2392eaee8b5293f2f85d5ae6ae0ef8->leave($__internal_e52a86763e41425b9b467783c049513b6f2392eaee8b5293f2f85d5ae6ae0ef8_prof);

        
        $__internal_705cda9315ad5beebbe41dfc830a7510ca8843f337145227155cfda08aa1e4af->leave($__internal_705cda9315ad5beebbe41dfc830a7510ca8843f337145227155cfda08aa1e4af_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_7efbd3f81309d24c85ec96a8a1b22598a2257a9bc6ef968115dddb4d8b92f998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efbd3f81309d24c85ec96a8a1b22598a2257a9bc6ef968115dddb4d8b92f998->enter($__internal_7efbd3f81309d24c85ec96a8a1b22598a2257a9bc6ef968115dddb4d8b92f998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_0306d396926a706586ce9da439155257d03b821fa3be7d734747d1080ee0390b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0306d396926a706586ce9da439155257d03b821fa3be7d734747d1080ee0390b->enter($__internal_0306d396926a706586ce9da439155257d03b821fa3be7d734747d1080ee0390b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 7
        echo "<br></br>
<h1 class=\"page-header\"> Gestion des mutuelles </h1>
<br></br>
<body>
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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchmutuelle");
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

          \t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "
          \t<tr>
        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cin", array()), "html", null, true);
            echo "</td>

        \t";
            // line 62
            if ((($this->getAttribute($context["user"], "m", array()) == null) || ($this->getAttribute($context["user"], "m", array()) == "NO"))) {
                // line 63
                echo "
        <td>
        <a href=\"/Cabinet/Administration/Gestionmutuelle/créer/";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-square\"></i></a>
        </td>

        \t";
            } else {
                // line 69
                echo "
        <td>
        <a href=\"/Cabinet/Administration/Gestionmutuelle/edit/";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
        <button class=\"btn btn-danger\" data-href=\"/Cabinet/Administration/Gestionmutuelle/delete/";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
        <i class=\"far fa-trash-alt\"></i>
        </button>
        </td>
      \t\t
        \t";
            }
            // line 78
            echo "
      \t\t</tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </tbody>
  </table>
  </body>
";
        
        $__internal_0306d396926a706586ce9da439155257d03b821fa3be7d734747d1080ee0390b->leave($__internal_0306d396926a706586ce9da439155257d03b821fa3be7d734747d1080ee0390b_prof);

        
        $__internal_7efbd3f81309d24c85ec96a8a1b22598a2257a9bc6ef968115dddb4d8b92f998->leave($__internal_7efbd3f81309d24c85ec96a8a1b22598a2257a9bc6ef968115dddb4d8b92f998_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/mutuelle/gestionmutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 81,  171 => 78,  162 => 72,  158 => 71,  154 => 69,  147 => 65,  143 => 63,  141 => 62,  136 => 60,  132 => 59,  128 => 58,  124 => 56,  120 => 55,  96 => 34,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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
<h1 class=\"page-header\"> Gestion des mutuelles </h1>
<br></br>
<body>
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
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('searchmutuelle') }}\">
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

          \t{% for user in users %}

          \t<tr>
        <td>{{user.nom}}</td>
        <td>{{user.prenom}}</td>
        <td>{{user.cin}}</td>

        \t{% if (user.m == null or user.m == 'NO') %}

        <td>
        <a href=\"/Cabinet/Administration/Gestionmutuelle/créer/{{user.id}}\" class=\"btn btn-success\"><i class=\"fas fa-plus-square\"></i></a>
        </td>

        \t{% else %}

        <td>
        <a href=\"/Cabinet/Administration/Gestionmutuelle/edit/{{user.id}}\" class=\"btn btn-warning\"><i class=\"fas fa-edit\"></i></a>
        <button class=\"btn btn-danger\" data-href=\"/Cabinet/Administration/Gestionmutuelle/delete/{{user.id}}\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
        <i class=\"far fa-trash-alt\"></i>
        </button>
        </td>
      \t\t
        \t{% endif %}

      \t\t</tr>
      {% endfor %}
    </tbody>
  </table>
  </body>
{% endblock %}
", "Cabinet/mutuelle/gestionmutuelle.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\mutuelle\\gestionmutuelle.html.twig");
    }
}
