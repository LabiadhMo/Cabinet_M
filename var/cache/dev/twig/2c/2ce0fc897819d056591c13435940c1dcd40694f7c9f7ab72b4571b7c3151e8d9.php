<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_174376863586a79050b47df4a6b6ab30859007811b6cb4d65ef81fbab1ad17f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cefaacb341ef3d6b9420b519a4690a34e71298ab2c685158d6d4ce8d06d194fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefaacb341ef3d6b9420b519a4690a34e71298ab2c685158d6d4ce8d06d194fb->enter($__internal_cefaacb341ef3d6b9420b519a4690a34e71298ab2c685158d6d4ce8d06d194fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ce8083003da77e4d739d0219cbd7f51c008edcebbeeaff0b968c5284b4718c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8083003da77e4d739d0219cbd7f51c008edcebbeeaff0b968c5284b4718c52->enter($__internal_ce8083003da77e4d739d0219cbd7f51c008edcebbeeaff0b968c5284b4718c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cefaacb341ef3d6b9420b519a4690a34e71298ab2c685158d6d4ce8d06d194fb->leave($__internal_cefaacb341ef3d6b9420b519a4690a34e71298ab2c685158d6d4ce8d06d194fb_prof);

        
        $__internal_ce8083003da77e4d739d0219cbd7f51c008edcebbeeaff0b968c5284b4718c52->leave($__internal_ce8083003da77e4d739d0219cbd7f51c008edcebbeeaff0b968c5284b4718c52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52aae1435c63a9b3f276387c6a6e4a037a28547da0a0313c679f494151ddb907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aae1435c63a9b3f276387c6a6e4a037a28547da0a0313c679f494151ddb907->enter($__internal_52aae1435c63a9b3f276387c6a6e4a037a28547da0a0313c679f494151ddb907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a71c81e2f6baa83b74b51b196b923b580413249f71b10b554494d26365dbd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a71c81e2f6baa83b74b51b196b923b580413249f71b10b554494d26365dbd38->enter($__internal_9a71c81e2f6baa83b74b51b196b923b580413249f71b10b554494d26365dbd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<h3>S'inscrire</h3>
<br>
";
        // line 6
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        
        $__internal_9a71c81e2f6baa83b74b51b196b923b580413249f71b10b554494d26365dbd38->leave($__internal_9a71c81e2f6baa83b74b51b196b923b580413249f71b10b554494d26365dbd38_prof);

        
        $__internal_52aae1435c63a9b3f276387c6a6e4a037a28547da0a0313c679f494151ddb907->leave($__internal_52aae1435c63a9b3f276387c6a6e4a037a28547da0a0313c679f494151ddb907_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
<h3>S'inscrire</h3>
<br>
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\php\\www\\Cabinet_Medicale\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
