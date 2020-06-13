<?php

/* Cabinet/fiche/voirmafiche.html.twig */
class __TwigTemplate_fec763665588c1557ff80cac600b942c1c925e9f18a44ac9f30d6226a8f0be5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/fiche/voirmafiche.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b84d862e231ec9ff40e1972eb2e0a46733076fbafc528d7e8f027adf019409cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84d862e231ec9ff40e1972eb2e0a46733076fbafc528d7e8f027adf019409cb->enter($__internal_b84d862e231ec9ff40e1972eb2e0a46733076fbafc528d7e8f027adf019409cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/fiche/voirmafiche.html.twig"));

        $__internal_3905905bb9b20e74301b96b9d6eb090bf89f68be870da127a821228614ad486e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3905905bb9b20e74301b96b9d6eb090bf89f68be870da127a821228614ad486e->enter($__internal_3905905bb9b20e74301b96b9d6eb090bf89f68be870da127a821228614ad486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/fiche/voirmafiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84d862e231ec9ff40e1972eb2e0a46733076fbafc528d7e8f027adf019409cb->leave($__internal_b84d862e231ec9ff40e1972eb2e0a46733076fbafc528d7e8f027adf019409cb_prof);

        
        $__internal_3905905bb9b20e74301b96b9d6eb090bf89f68be870da127a821228614ad486e->leave($__internal_3905905bb9b20e74301b96b9d6eb090bf89f68be870da127a821228614ad486e_prof);

    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        $__internal_92e35bebd031eb0004218b43d138b9a09e44098c187f1c4c76ee408b17ca6d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e35bebd031eb0004218b43d138b9a09e44098c187f1c4c76ee408b17ca6d9f->enter($__internal_92e35bebd031eb0004218b43d138b9a09e44098c187f1c4c76ee408b17ca6d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_9bfe337f936d5fe84ff426492f8e14adac6fc02773fd73f671cd23bfe369e769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfe337f936d5fe84ff426492f8e14adac6fc02773fd73f671cd23bfe369e769->enter($__internal_9bfe337f936d5fe84ff426492f8e14adac6fc02773fd73f671cd23bfe369e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 4
        echo "<br></br>
<br></br>
    <a class=\"btn btn-outline-secondary\" href=\"/\">Retour</a>
    <hr>
    <h3 class=\"page-header\"><i class=\"far fa-user\"></i>  ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " </h3>
    <br></br>
    <ul class=\"list-group\">
    <li class\"list-group-item\"><h4> Numéro Cin : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "cin", array()), "html", null, true);
        echo "</h4></li>
    <li class\"list-group-item\"><h4> Date de naissance : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "dateDeNaissance", array()), "F j, Y"), "html", null, true);
        echo "</h4></li>
    <br></br>
    </ul>
    <h3><i class=\"fas fa-file-contract\"></i>  Mutuelles </h3>
    <br></br>
    ";
        // line 17
        if ((($context["mutuelle"] ?? $this->getContext($context, "mutuelle")) == null)) {
            // line 18
            echo "    <h4>vous n'avez pas de mutuelles</h4>
    <br></br>
    ";
        } else {
            // line 21
            echo "    <ul class=\"list-group\">
    <li class\"list-group-item\"><h4> Caisse : ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mutuelle"] ?? $this->getContext($context, "mutuelle")), "caisse", array()), "html", null, true);
            echo "</h4></li>
    <li class\"list-group-item\"><h4> Valide de : \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mutuelle"] ?? $this->getContext($context, "mutuelle")), "valide", array()), "html", null, true);
            echo "\"  à  \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mutuelle"] ?? $this->getContext($context, "mutuelle")), "a", array()), "html", null, true);
            echo "\" </h4></li>
    <li class\"list-group-item\"><h4> Identificateur Unique : \"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mutuelle"] ?? $this->getContext($context, "mutuelle")), "identificateur", array()), "html", null, true);
            echo "\" </h4></li>
    <br></br>
    <br></br>
    </ul>
    ";
        }
        // line 29
        echo "    <h3><i class=\"far fa-calendar-check\"></i> Consultations</h3>
    <body>

<br></br>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
      <tr>
        <th>Date</th>
        <th>Type</th>
        <th>Maladie</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["consultations"] ?? $this->getContext($context, "consultations")));
        foreach ($context['_seq'] as $context["_key"] => $context["consult"]) {
            // line 45
            echo "
            <tr>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "date_consult", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "maladie", array()), "html", null, true);
            echo "</td>
        <td><a href=\"/voirmaconsult/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
        </td>
          </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consult'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    </tbody>
  </table>
  </body>    
";
        
        $__internal_9bfe337f936d5fe84ff426492f8e14adac6fc02773fd73f671cd23bfe369e769->leave($__internal_9bfe337f936d5fe84ff426492f8e14adac6fc02773fd73f671cd23bfe369e769_prof);

        
        $__internal_92e35bebd031eb0004218b43d138b9a09e44098c187f1c4c76ee408b17ca6d9f->leave($__internal_92e35bebd031eb0004218b43d138b9a09e44098c187f1c4c76ee408b17ca6d9f_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/fiche/voirmafiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  124 => 45,  120 => 44,  103 => 29,  95 => 24,  89 => 23,  85 => 22,  82 => 21,  77 => 18,  75 => 17,  67 => 12,  63 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

{% block table %}
<br></br>
<br></br>
    <a class=\"btn btn-outline-secondary\" href=\"/\">Retour</a>
    <hr>
    <h3 class=\"page-header\"><i class=\"far fa-user\"></i>  {{user.prenom}} {{user.nom}} </h3>
    <br></br>
    <ul class=\"list-group\">
    <li class\"list-group-item\"><h4> Numéro Cin : {{user.cin}}</h4></li>
    <li class\"list-group-item\"><h4> Date de naissance : {{user.dateDeNaissance|date('F j, Y')}}</h4></li>
    <br></br>
    </ul>
    <h3><i class=\"fas fa-file-contract\"></i>  Mutuelles </h3>
    <br></br>
    {% if(mutuelle == null) %}
    <h4>vous n'avez pas de mutuelles</h4>
    <br></br>
    {% else %}
    <ul class=\"list-group\">
    <li class\"list-group-item\"><h4> Caisse : {{mutuelle.caisse}}</h4></li>
    <li class\"list-group-item\"><h4> Valide de : \"{{mutuelle.valide}}\"  à  \"{{mutuelle.a}}\" </h4></li>
    <li class\"list-group-item\"><h4> Identificateur Unique : \"{{mutuelle.identificateur}}\" </h4></li>
    <br></br>
    <br></br>
    </ul>
    {% endif %}
    <h3><i class=\"far fa-calendar-check\"></i> Consultations</h3>
    <body>

<br></br>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
      <tr>
        <th>Date</th>
        <th>Type</th>
        <th>Maladie</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        {% for consult in consultations %}

            <tr>
        <td>{{consult.date_consult}}</td>
        <td>{{consult.type}}</td>
        <td>{{consult.maladie}}</td>
        <td><a href=\"/voirmaconsult/{{consult.id}}\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>
        </td>
          </tr>

        {% endfor %}

    </tbody>
  </table>
  </body>    
{% endblock %}", "Cabinet/fiche/voirmafiche.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\fiche\\voirmafiche.html.twig");
    }
}
