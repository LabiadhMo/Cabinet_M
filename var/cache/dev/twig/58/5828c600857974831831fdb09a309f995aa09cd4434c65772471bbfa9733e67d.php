<?php

/* Cabinet/consultation/gestionconsultation.html.twig */
class __TwigTemplate_9bc5064bc431189be39be96f7b184c2af96d3933a9fba5708db6164dcef8187f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Cabinet/consultation/gestionconsultation.html.twig", 1);
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
        $__internal_afd0bfacdb5dc0858b87eb82c2a7ad651bfa61faf3447a633f50e06b9ce6b664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd0bfacdb5dc0858b87eb82c2a7ad651bfa61faf3447a633f50e06b9ce6b664->enter($__internal_afd0bfacdb5dc0858b87eb82c2a7ad651bfa61faf3447a633f50e06b9ce6b664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/consultation/gestionconsultation.html.twig"));

        $__internal_dfd960c0dc25f9a3aa1c195b5fac137f4f268617bc51bb22b15b76aead04909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd960c0dc25f9a3aa1c195b5fac137f4f268617bc51bb22b15b76aead04909b->enter($__internal_dfd960c0dc25f9a3aa1c195b5fac137f4f268617bc51bb22b15b76aead04909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cabinet/consultation/gestionconsultation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd0bfacdb5dc0858b87eb82c2a7ad651bfa61faf3447a633f50e06b9ce6b664->leave($__internal_afd0bfacdb5dc0858b87eb82c2a7ad651bfa61faf3447a633f50e06b9ce6b664_prof);

        
        $__internal_dfd960c0dc25f9a3aa1c195b5fac137f4f268617bc51bb22b15b76aead04909b->leave($__internal_dfd960c0dc25f9a3aa1c195b5fac137f4f268617bc51bb22b15b76aead04909b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3535f17d0cfaa655e2162eeb69b26017efb59aec69fa3bc2775b4a01cf6bf98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3535f17d0cfaa655e2162eeb69b26017efb59aec69fa3bc2775b4a01cf6bf98b->enter($__internal_3535f17d0cfaa655e2162eeb69b26017efb59aec69fa3bc2775b4a01cf6bf98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_19f9ad21b2f25657017e1df51edc64faa7af357e703c7782df97daa4e59c4ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f9ad21b2f25657017e1df51edc64faa7af357e703c7782df97daa4e59c4ae1->enter($__internal_19f9ad21b2f25657017e1df51edc64faa7af357e703c7782df97daa4e59c4ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19f9ad21b2f25657017e1df51edc64faa7af357e703c7782df97daa4e59c4ae1->leave($__internal_19f9ad21b2f25657017e1df51edc64faa7af357e703c7782df97daa4e59c4ae1_prof);

        
        $__internal_3535f17d0cfaa655e2162eeb69b26017efb59aec69fa3bc2775b4a01cf6bf98b->leave($__internal_3535f17d0cfaa655e2162eeb69b26017efb59aec69fa3bc2775b4a01cf6bf98b_prof);

    }

    // line 6
    public function block_table($context, array $blocks = array())
    {
        $__internal_78b78e82c39c3d3a0357ee7af3edf6ccf6b4de43bf02e9289ab1c9abb37c78ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b78e82c39c3d3a0357ee7af3edf6ccf6b4de43bf02e9289ab1c9abb37c78ce->enter($__internal_78b78e82c39c3d3a0357ee7af3edf6ccf6b4de43bf02e9289ab1c9abb37c78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_eea13db01ed91d3360d45ecc31e4002a4e4a615923036964c73c5cf08ea71030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea13db01ed91d3360d45ecc31e4002a4e4a615923036964c73c5cf08ea71030->enter($__internal_eea13db01ed91d3360d45ecc31e4002a4e4a615923036964c73c5cf08ea71030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 7
        echo "<br></br>
<h1 class=\"page-header\"> Gestion des consultations </h1>
<br></br>
<a href=\"/Cabinet/Administration/Gestionconsultation/voir/\" class=\"btn btn-outline-secondary\">Voir tous les consultations</a>
<body>

<br></br>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
    <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchconsult");
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "
          \t<tr>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cin", array()), "html", null, true);
            echo "</td>
        <td><a href=\"/Cabinet/Administration/Gestionconsultation/créer/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\"><i class=\"far fa-plus-square\"></i></a>
        </td>
      \t\t</tr>

      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    </tbody>
  </table>
  </body>
";
        
        $__internal_eea13db01ed91d3360d45ecc31e4002a4e4a615923036964c73c5cf08ea71030->leave($__internal_eea13db01ed91d3360d45ecc31e4002a4e4a615923036964c73c5cf08ea71030_prof);

        
        $__internal_78b78e82c39c3d3a0357ee7af3edf6ccf6b4de43bf02e9289ab1c9abb37c78ce->leave($__internal_78b78e82c39c3d3a0357ee7af3edf6ccf6b4de43bf02e9289ab1c9abb37c78ce_prof);

    }

    public function getTemplateName()
    {
        return "Cabinet/consultation/gestionconsultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  108 => 40,  104 => 39,  80 => 18,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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
<h1 class=\"page-header\"> Gestion des consultations </h1>
<br></br>
<a href=\"/Cabinet/Administration/Gestionconsultation/voir/\" class=\"btn btn-outline-secondary\">Voir tous les consultations</a>
<body>

<br></br>
<table class=\"table table-stripped\">
    <thead class=\"thead-light\">
    <div class=\"row\">
     <div class=\"col-4\">
      <form class=\"pull-right hidden\" role=\"search\" id=\"nav-search-form\" method=\"post\" action=\"{{ path('searchconsult') }}\">
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
        <td><a href=\"/Cabinet/Administration/Gestionconsultation/créer/{{user.id}}\" class=\"btn btn-success\"><i class=\"far fa-plus-square\"></i></a>
        </td>
      \t\t</tr>

      \t\t{% endfor %}

    </tbody>
  </table>
  </body>
{% endblock %}
", "Cabinet/consultation/gestionconsultation.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\views\\Cabinet\\consultation\\gestionconsultation.html.twig");
    }
}
