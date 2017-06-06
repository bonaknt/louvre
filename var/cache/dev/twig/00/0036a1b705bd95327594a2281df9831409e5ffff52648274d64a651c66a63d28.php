<?php

/* MKLouvreBundle:Default:index.html.twig */
class __TwigTemplate_6833bbeb00218a2825e6a7b050b7c40f1f00493cdcf2c49e8384723f7ee8666c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MKLouvreBundle:Default:layout.html.twig", "MKLouvreBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5ddeaafb8ff63c6201515330f46214452b30eae10e07aa93451b51c6bf9c3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ddeaafb8ff63c6201515330f46214452b30eae10e07aa93451b51c6bf9c3dc->enter($__internal_c5ddeaafb8ff63c6201515330f46214452b30eae10e07aa93451b51c6bf9c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $__internal_446496997a7ab0e72beac84269dfdf6c292a0c0ff40e9be5e51cca81a0253e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446496997a7ab0e72beac84269dfdf6c292a0c0ff40e9be5e51cca81a0253e31->enter($__internal_446496997a7ab0e72beac84269dfdf6c292a0c0ff40e9be5e51cca81a0253e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ddeaafb8ff63c6201515330f46214452b30eae10e07aa93451b51c6bf9c3dc->leave($__internal_c5ddeaafb8ff63c6201515330f46214452b30eae10e07aa93451b51c6bf9c3dc_prof);

        
        $__internal_446496997a7ab0e72beac84269dfdf6c292a0c0ff40e9be5e51cca81a0253e31->leave($__internal_446496997a7ab0e72beac84269dfdf6c292a0c0ff40e9be5e51cca81a0253e31_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6ee5ce133b97a618e065e4581922189b2eef58435c3a55bf876ba076fc8aa9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee5ce133b97a618e065e4581922189b2eef58435c3a55bf876ba076fc8aa9de->enter($__internal_6ee5ce133b97a618e065e4581922189b2eef58435c3a55bf876ba076fc8aa9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_d153b1c1d412fad592b8d31b291ca2519e1e5678a8400af3c1fb86f2779137b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d153b1c1d412fad592b8d31b291ca2519e1e5678a8400af3c1fb86f2779137b4->enter($__internal_d153b1c1d412fad592b8d31b291ca2519e1e5678a8400af3c1fb86f2779137b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>Liste des annonce</h2>



";
        
        $__internal_d153b1c1d412fad592b8d31b291ca2519e1e5678a8400af3c1fb86f2779137b4->leave($__internal_d153b1c1d412fad592b8d31b291ca2519e1e5678a8400af3c1fb86f2779137b4_prof);

        
        $__internal_6ee5ce133b97a618e065e4581922189b2eef58435c3a55bf876ba076fc8aa9de->leave($__internal_6ee5ce133b97a618e065e4581922189b2eef58435c3a55bf876ba076fc8aa9de_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"MKLouvreBundle:Default:layout.html.twig\" %}

{% block ocplatform_body %}

  <h2>Liste des annonce</h2>



{% endblock %}
", "MKLouvreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/index.html.twig");
    }
}
