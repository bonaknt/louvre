<?php

/* @MKLouvre/Default/layout.html.twig */
class __TwigTemplate_3d1e261ea2193ad088ec73e58afe1a02fbdc97fefc52ba6bea77eab293e92606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "@MKLouvre/Default/layout.html.twig", 1);
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
        $__internal_0b30c466f3e8fd2f8e463342e47be65bfc410b5ca242d60ff1c8c55c5c80d44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b30c466f3e8fd2f8e463342e47be65bfc410b5ca242d60ff1c8c55c5c80d44a->enter($__internal_0b30c466f3e8fd2f8e463342e47be65bfc410b5ca242d60ff1c8c55c5c80d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/layout.html.twig"));

        $__internal_39284cfd7be44eb0b686907c4987caf86fef4abef7345e4960373ffd71918445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39284cfd7be44eb0b686907c4987caf86fef4abef7345e4960373ffd71918445->enter($__internal_39284cfd7be44eb0b686907c4987caf86fef4abef7345e4960373ffd71918445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b30c466f3e8fd2f8e463342e47be65bfc410b5ca242d60ff1c8c55c5c80d44a->leave($__internal_0b30c466f3e8fd2f8e463342e47be65bfc410b5ca242d60ff1c8c55c5c80d44a_prof);

        
        $__internal_39284cfd7be44eb0b686907c4987caf86fef4abef7345e4960373ffd71918445->leave($__internal_39284cfd7be44eb0b686907c4987caf86fef4abef7345e4960373ffd71918445_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d448c8fa05b0d1c81f2fe783adcbfcc0cc88707532946ba8130671988c0c2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d448c8fa05b0d1c81f2fe783adcbfcc0cc88707532946ba8130671988c0c2c9->enter($__internal_3d448c8fa05b0d1c81f2fe783adcbfcc0cc88707532946ba8130671988c0c2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bddfacb2c818eab42600264d8b5324a34afe7205688ad864abfeb459b380471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bddfacb2c818eab42600264d8b5324a34afe7205688ad864abfeb459b380471->enter($__internal_4bddfacb2c818eab42600264d8b5324a34afe7205688ad864abfeb459b380471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4bddfacb2c818eab42600264d8b5324a34afe7205688ad864abfeb459b380471->leave($__internal_4bddfacb2c818eab42600264d8b5324a34afe7205688ad864abfeb459b380471_prof);

        
        $__internal_3d448c8fa05b0d1c81f2fe783adcbfcc0cc88707532946ba8130671988c0c2c9->leave($__internal_3d448c8fa05b0d1c81f2fe783adcbfcc0cc88707532946ba8130671988c0c2c9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ecf26a02a40d6586613aee0f51705cafe58dfb69d3b7256a9da641659ad0957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecf26a02a40d6586613aee0f51705cafe58dfb69d3b7256a9da641659ad0957->enter($__internal_0ecf26a02a40d6586613aee0f51705cafe58dfb69d3b7256a9da641659ad0957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a15a6f178f4fe400eccb53f6cd27c5f19d902908a1642465ba691b2a6edec69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a15a6f178f4fe400eccb53f6cd27c5f19d902908a1642465ba691b2a6edec69->enter($__internal_6a15a6f178f4fe400eccb53f6cd27c5f19d902908a1642465ba691b2a6edec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a15a6f178f4fe400eccb53f6cd27c5f19d902908a1642465ba691b2a6edec69->leave($__internal_6a15a6f178f4fe400eccb53f6cd27c5f19d902908a1642465ba691b2a6edec69_prof);

        
        $__internal_0ecf26a02a40d6586613aee0f51705cafe58dfb69d3b7256a9da641659ad0957->leave($__internal_0ecf26a02a40d6586613aee0f51705cafe58dfb69d3b7256a9da641659ad0957_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_00bfaeb0fc651fb960dcbf520553e5de32d9eac29e975a703f2004f5e97285aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bfaeb0fc651fb960dcbf520553e5de32d9eac29e975a703f2004f5e97285aa->enter($__internal_00bfaeb0fc651fb960dcbf520553e5de32d9eac29e975a703f2004f5e97285aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c1d0d246b5aad074ec07acba3e6953b546b9699452ee0642bbeab9cdd441b923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d0d246b5aad074ec07acba3e6953b546b9699452ee0642bbeab9cdd441b923->enter($__internal_c1d0d246b5aad074ec07acba3e6953b546b9699452ee0642bbeab9cdd441b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_c1d0d246b5aad074ec07acba3e6953b546b9699452ee0642bbeab9cdd441b923->leave($__internal_c1d0d246b5aad074ec07acba3e6953b546b9699452ee0642bbeab9cdd441b923_prof);

        
        $__internal_00bfaeb0fc651fb960dcbf520553e5de32d9eac29e975a703f2004f5e97285aa->leave($__internal_00bfaeb0fc651fb960dcbf520553e5de32d9eac29e975a703f2004f5e97285aa_prof);

    }

    public function getTemplateName()
    {
        return "@MKLouvre/Default/layout.html.twig";
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
", "@MKLouvre/Default/layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
