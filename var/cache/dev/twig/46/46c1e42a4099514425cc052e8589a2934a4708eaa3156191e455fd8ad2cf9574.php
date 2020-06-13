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
        $__internal_f0b17887998878f824b53fa18bd56a653ba0a55f52120e962e6fc0586379dea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b17887998878f824b53fa18bd56a653ba0a55f52120e962e6fc0586379dea8->enter($__internal_f0b17887998878f824b53fa18bd56a653ba0a55f52120e962e6fc0586379dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/rdv/gestionrdv.html.twig"));

        $__internal_927b7e06006756343624c597712cf4f831766dda565f05d365b7fa8289103e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927b7e06006756343624c597712cf4f831766dda565f05d365b7fa8289103e01->enter($__internal_927b7e06006756343624c597712cf4f831766dda565f05d365b7fa8289103e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/rdv/gestionrdv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b17887998878f824b53fa18bd56a653ba0a55f52120e962e6fc0586379dea8->leave($__internal_f0b17887998878f824b53fa18bd56a653ba0a55f52120e962e6fc0586379dea8_prof);

        
        $__internal_927b7e06006756343624c597712cf4f831766dda565f05d365b7fa8289103e01->leave($__internal_927b7e06006756343624c597712cf4f831766dda565f05d365b7fa8289103e01_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cd5c5020084b1a0c280449e20a21e494d3cf51e25e681b8912c42f9e4221b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd5c5020084b1a0c280449e20a21e494d3cf51e25e681b8912c42f9e4221b49->enter($__internal_1cd5c5020084b1a0c280449e20a21e494d3cf51e25e681b8912c42f9e4221b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_27c2373dc478f4ff005b18ce295df0999955b29d4aedda2ad6a3eabb0c541ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c2373dc478f4ff005b18ce295df0999955b29d4aedda2ad6a3eabb0c541ff0->enter($__internal_27c2373dc478f4ff005b18ce295df0999955b29d4aedda2ad6a3eabb0c541ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27c2373dc478f4ff005b18ce295df0999955b29d4aedda2ad6a3eabb0c541ff0->leave($__internal_27c2373dc478f4ff005b18ce295df0999955b29d4aedda2ad6a3eabb0c541ff0_prof);

        
        $__internal_1cd5c5020084b1a0c280449e20a21e494d3cf51e25e681b8912c42f9e4221b49->leave($__internal_1cd5c5020084b1a0c280449e20a21e494d3cf51e25e681b8912c42f9e4221b49_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_951df7ef696eb9d34be7bf0d3cd468ab02b08ae6c523199c64916087ce3d2cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951df7ef696eb9d34be7bf0d3cd468ab02b08ae6c523199c64916087ce3d2cc2->enter($__internal_951df7ef696eb9d34be7bf0d3cd468ab02b08ae6c523199c64916087ce3d2cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_bf674b982e3cf8adbb74e34e390c882ae2ca0e5a93ca880cf2ca28e652af4609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf674b982e3cf8adbb74e34e390c882ae2ca0e5a93ca880cf2ca28e652af4609->enter($__internal_bf674b982e3cf8adbb74e34e390c882ae2ca0e5a93ca880cf2ca28e652af4609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

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
        
        $__internal_bf674b982e3cf8adbb74e34e390c882ae2ca0e5a93ca880cf2ca28e652af4609->leave($__internal_bf674b982e3cf8adbb74e34e390c882ae2ca0e5a93ca880cf2ca28e652af4609_prof);

        
        $__internal_951df7ef696eb9d34be7bf0d3cd468ab02b08ae6c523199c64916087ce3d2cc2->leave($__internal_951df7ef696eb9d34be7bf0d3cd468ab02b08ae6c523199c64916087ce3d2cc2_prof);

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
