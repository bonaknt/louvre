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
        $__internal_877aabc5273eecc41f51e429c395edad2ffb6921e5a9311c3f91ab461583706d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877aabc5273eecc41f51e429c395edad2ffb6921e5a9311c3f91ab461583706d->enter($__internal_877aabc5273eecc41f51e429c395edad2ffb6921e5a9311c3f91ab461583706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $__internal_44e29f9ee2e11921cb7dee7580f7b6a26c35f2cd693c8f9a0157bafe14e88337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e29f9ee2e11921cb7dee7580f7b6a26c35f2cd693c8f9a0157bafe14e88337->enter($__internal_44e29f9ee2e11921cb7dee7580f7b6a26c35f2cd693c8f9a0157bafe14e88337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877aabc5273eecc41f51e429c395edad2ffb6921e5a9311c3f91ab461583706d->leave($__internal_877aabc5273eecc41f51e429c395edad2ffb6921e5a9311c3f91ab461583706d_prof);

        
        $__internal_44e29f9ee2e11921cb7dee7580f7b6a26c35f2cd693c8f9a0157bafe14e88337->leave($__internal_44e29f9ee2e11921cb7dee7580f7b6a26c35f2cd693c8f9a0157bafe14e88337_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca2387d4c3a5a11ed6d234526ce509ec94b4a8e69ae03a39f24221e3bc176823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2387d4c3a5a11ed6d234526ce509ec94b4a8e69ae03a39f24221e3bc176823->enter($__internal_ca2387d4c3a5a11ed6d234526ce509ec94b4a8e69ae03a39f24221e3bc176823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16e5b47164db280263e3678b35c8fa0c0c578d89aa5f88da40e4660b273f75d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e5b47164db280263e3678b35c8fa0c0c578d89aa5f88da40e4660b273f75d5->enter($__internal_16e5b47164db280263e3678b35c8fa0c0c578d89aa5f88da40e4660b273f75d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_16e5b47164db280263e3678b35c8fa0c0c578d89aa5f88da40e4660b273f75d5->leave($__internal_16e5b47164db280263e3678b35c8fa0c0c578d89aa5f88da40e4660b273f75d5_prof);

        
        $__internal_ca2387d4c3a5a11ed6d234526ce509ec94b4a8e69ae03a39f24221e3bc176823->leave($__internal_ca2387d4c3a5a11ed6d234526ce509ec94b4a8e69ae03a39f24221e3bc176823_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4193ec882426257d3f465bdca119db8a0659ac4c87257e08adb3bc3c57dd763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4193ec882426257d3f465bdca119db8a0659ac4c87257e08adb3bc3c57dd763->enter($__internal_d4193ec882426257d3f465bdca119db8a0659ac4c87257e08adb3bc3c57dd763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_555781e7130cbf2b523b30aef585ea1f581ec2143db1a63891bca265830bbf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555781e7130cbf2b523b30aef585ea1f581ec2143db1a63891bca265830bbf4b->enter($__internal_555781e7130cbf2b523b30aef585ea1f581ec2143db1a63891bca265830bbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_555781e7130cbf2b523b30aef585ea1f581ec2143db1a63891bca265830bbf4b->leave($__internal_555781e7130cbf2b523b30aef585ea1f581ec2143db1a63891bca265830bbf4b_prof);

        
        $__internal_d4193ec882426257d3f465bdca119db8a0659ac4c87257e08adb3bc3c57dd763->leave($__internal_d4193ec882426257d3f465bdca119db8a0659ac4c87257e08adb3bc3c57dd763_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_63d30ce19cb9b3665a99e0f5357fb5068c75b99aac42d560381225bcc0c5b82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d30ce19cb9b3665a99e0f5357fb5068c75b99aac42d560381225bcc0c5b82b->enter($__internal_63d30ce19cb9b3665a99e0f5357fb5068c75b99aac42d560381225bcc0c5b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c8c4c1436e700e3f9459b78bd8fb76d5df5afd93cfc10b96448f8884cdea4819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c4c1436e700e3f9459b78bd8fb76d5df5afd93cfc10b96448f8884cdea4819->enter($__internal_c8c4c1436e700e3f9459b78bd8fb76d5df5afd93cfc10b96448f8884cdea4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_c8c4c1436e700e3f9459b78bd8fb76d5df5afd93cfc10b96448f8884cdea4819->leave($__internal_c8c4c1436e700e3f9459b78bd8fb76d5df5afd93cfc10b96448f8884cdea4819_prof);

        
        $__internal_63d30ce19cb9b3665a99e0f5357fb5068c75b99aac42d560381225bcc0c5b82b->leave($__internal_63d30ce19cb9b3665a99e0f5357fb5068c75b99aac42d560381225bcc0c5b82b_prof);

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
