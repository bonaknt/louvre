<?php

/* MKLouvreBundle:Default:layout.html.twig */
class __TwigTemplate_84709ad33e933ea189de9f2630a09841e1bdeb5031ac851d08ce3a1ba40e54c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5fe42d0899c59771d7b4cbdf15e575db84cb91c4258d125a02fc310aaedd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5fe42d0899c59771d7b4cbdf15e575db84cb91c4258d125a02fc310aaedd64->enter($__internal_0a5fe42d0899c59771d7b4cbdf15e575db84cb91c4258d125a02fc310aaedd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $__internal_9ca7f8e8377040d72a8e71b49b7df66211f6042d021ff24c326ee7c76fa34ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca7f8e8377040d72a8e71b49b7df66211f6042d021ff24c326ee7c76fa34ec1->enter($__internal_9ca7f8e8377040d72a8e71b49b7df66211f6042d021ff24c326ee7c76fa34ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5fe42d0899c59771d7b4cbdf15e575db84cb91c4258d125a02fc310aaedd64->leave($__internal_0a5fe42d0899c59771d7b4cbdf15e575db84cb91c4258d125a02fc310aaedd64_prof);

        
        $__internal_9ca7f8e8377040d72a8e71b49b7df66211f6042d021ff24c326ee7c76fa34ec1->leave($__internal_9ca7f8e8377040d72a8e71b49b7df66211f6042d021ff24c326ee7c76fa34ec1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e570f2992c9e7088608ee086ce5bc6ed5198259358ff9a9b485fa22449689a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e570f2992c9e7088608ee086ce5bc6ed5198259358ff9a9b485fa22449689a78->enter($__internal_e570f2992c9e7088608ee086ce5bc6ed5198259358ff9a9b485fa22449689a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c59ff25cac064e881783cd9bed52ba31e1cc49e373a0cc0c9b52fa7f0ca8fb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59ff25cac064e881783cd9bed52ba31e1cc49e373a0cc0c9b52fa7f0ca8fb0d->enter($__internal_c59ff25cac064e881783cd9bed52ba31e1cc49e373a0cc0c9b52fa7f0ca8fb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c59ff25cac064e881783cd9bed52ba31e1cc49e373a0cc0c9b52fa7f0ca8fb0d->leave($__internal_c59ff25cac064e881783cd9bed52ba31e1cc49e373a0cc0c9b52fa7f0ca8fb0d_prof);

        
        $__internal_e570f2992c9e7088608ee086ce5bc6ed5198259358ff9a9b485fa22449689a78->leave($__internal_e570f2992c9e7088608ee086ce5bc6ed5198259358ff9a9b485fa22449689a78_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_74770ac2ac2d5f9625122712a82b7d88cd1ef0589d4460d3e08843c23db13ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74770ac2ac2d5f9625122712a82b7d88cd1ef0589d4460d3e08843c23db13ea5->enter($__internal_74770ac2ac2d5f9625122712a82b7d88cd1ef0589d4460d3e08843c23db13ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffafbf758b77aea8448ddeea4d5303021c2b3cf7883de6a7ed903a672685d242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffafbf758b77aea8448ddeea4d5303021c2b3cf7883de6a7ed903a672685d242->enter($__internal_ffafbf758b77aea8448ddeea4d5303021c2b3cf7883de6a7ed903a672685d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Accueil</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_ffafbf758b77aea8448ddeea4d5303021c2b3cf7883de6a7ed903a672685d242->leave($__internal_ffafbf758b77aea8448ddeea4d5303021c2b3cf7883de6a7ed903a672685d242_prof);

        
        $__internal_74770ac2ac2d5f9625122712a82b7d88cd1ef0589d4460d3e08843c23db13ea5->leave($__internal_74770ac2ac2d5f9625122712a82b7d88cd1ef0589d4460d3e08843c23db13ea5_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6f534cbc3dd304bc700cae2d833a305f3477c05d497f0015fa3ac43e04075730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f534cbc3dd304bc700cae2d833a305f3477c05d497f0015fa3ac43e04075730->enter($__internal_6f534cbc3dd304bc700cae2d833a305f3477c05d497f0015fa3ac43e04075730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a41d50fbeb8f15632ce63249e15f5da9b7e486d27b898cf1c35c6135939c2942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41d50fbeb8f15632ce63249e15f5da9b7e486d27b898cf1c35c6135939c2942->enter($__internal_a41d50fbeb8f15632ce63249e15f5da9b7e486d27b898cf1c35c6135939c2942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_a41d50fbeb8f15632ce63249e15f5da9b7e486d27b898cf1c35c6135939c2942->leave($__internal_a41d50fbeb8f15632ce63249e15f5da9b7e486d27b898cf1c35c6135939c2942_prof);

        
        $__internal_6f534cbc3dd304bc700cae2d833a305f3477c05d497f0015fa3ac43e04075730->leave($__internal_6f534cbc3dd304bc700cae2d833a305f3477c05d497f0015fa3ac43e04075730_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MKLouvreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Accueil</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "MKLouvreBundle:Default:layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/layout.html.twig");
    }
}
