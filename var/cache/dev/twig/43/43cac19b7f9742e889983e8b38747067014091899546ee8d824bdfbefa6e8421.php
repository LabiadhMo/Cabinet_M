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
        $__internal_85051aff979ce533fa51c08e174cf346acae0ae25f916ddc3c002a7a91f69ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85051aff979ce533fa51c08e174cf346acae0ae25f916ddc3c002a7a91f69ba2->enter($__internal_85051aff979ce533fa51c08e174cf346acae0ae25f916ddc3c002a7a91f69ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/mutuelle/gestionmutuelle.html.twig"));

        $__internal_5792d4ff9c6eb3d09fbae216c92acf297b5f768a4484de7747b4ba9263cbce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5792d4ff9c6eb3d09fbae216c92acf297b5f768a4484de7747b4ba9263cbce38->enter($__internal_5792d4ff9c6eb3d09fbae216c92acf297b5f768a4484de7747b4ba9263cbce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/mutuelle/gestionmutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85051aff979ce533fa51c08e174cf346acae0ae25f916ddc3c002a7a91f69ba2->leave($__internal_85051aff979ce533fa51c08e174cf346acae0ae25f916ddc3c002a7a91f69ba2_prof);

        
        $__internal_5792d4ff9c6eb3d09fbae216c92acf297b5f768a4484de7747b4ba9263cbce38->leave($__internal_5792d4ff9c6eb3d09fbae216c92acf297b5f768a4484de7747b4ba9263cbce38_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67da26a4f0d8e7b50dbaab8354b56f4ef7e2176e3282e093934370847e9bc885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67da26a4f0d8e7b50dbaab8354b56f4ef7e2176e3282e093934370847e9bc885->enter($__internal_67da26a4f0d8e7b50dbaab8354b56f4ef7e2176e3282e093934370847e9bc885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a057abd6c1dd3b478a8aaf8b16adbf1b4dfa93a5a2df7c581b2b65c670fb9dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a057abd6c1dd3b478a8aaf8b16adbf1b4dfa93a5a2df7c581b2b65c670fb9dc7->enter($__internal_a057abd6c1dd3b478a8aaf8b16adbf1b4dfa93a5a2df7c581b2b65c670fb9dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a057abd6c1dd3b478a8aaf8b16adbf1b4dfa93a5a2df7c581b2b65c670fb9dc7->leave($__internal_a057abd6c1dd3b478a8aaf8b16adbf1b4dfa93a5a2df7c581b2b65c670fb9dc7_prof);

        
        $__internal_67da26a4f0d8e7b50dbaab8354b56f4ef7e2176e3282e093934370847e9bc885->leave($__internal_67da26a4f0d8e7b50dbaab8354b56f4ef7e2176e3282e093934370847e9bc885_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_9c491d68ae88bfe8fde242bdd77e62c67ec78df6e627e8c49e193352bab966bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c491d68ae88bfe8fde242bdd77e62c67ec78df6e627e8c49e193352bab966bd->enter($__internal_9c491d68ae88bfe8fde242bdd77e62c67ec78df6e627e8c49e193352bab966bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_4892293d6704e3cca0995bfa9c0a5201b318779c640d1861e2d4017a84f739ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4892293d6704e3cca0995bfa9c0a5201b318779c640d1861e2d4017a84f739ee->enter($__internal_4892293d6704e3cca0995bfa9c0a5201b318779c640d1861e2d4017a84f739ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_4892293d6704e3cca0995bfa9c0a5201b318779c640d1861e2d4017a84f739ee->leave($__internal_4892293d6704e3cca0995bfa9c0a5201b318779c640d1861e2d4017a84f739ee_prof);

        
        $__internal_9c491d68ae88bfe8fde242bdd77e62c67ec78df6e627e8c49e193352bab966bd->leave($__internal_9c491d68ae88bfe8fde242bdd77e62c67ec78df6e627e8c49e193352bab966bd_prof);

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
