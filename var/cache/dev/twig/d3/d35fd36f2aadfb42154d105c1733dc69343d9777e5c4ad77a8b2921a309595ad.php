<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3ddc1e38a645b540660c7b4e436585831032ab06e5614bf2f7c9969ca472c27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0abff7073237daa5cbd0ccf1103ada71441bb336d35fe9efb2d83980a8b8e90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abff7073237daa5cbd0ccf1103ada71441bb336d35fe9efb2d83980a8b8e90a->enter($__internal_0abff7073237daa5cbd0ccf1103ada71441bb336d35fe9efb2d83980a8b8e90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_20097743dab229bb60201daf676fc5d80ae24586c562870c2d8e372d211de285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20097743dab229bb60201daf676fc5d80ae24586c562870c2d8e372d211de285->enter($__internal_20097743dab229bb60201daf676fc5d80ae24586c562870c2d8e372d211de285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0abff7073237daa5cbd0ccf1103ada71441bb336d35fe9efb2d83980a8b8e90a->leave($__internal_0abff7073237daa5cbd0ccf1103ada71441bb336d35fe9efb2d83980a8b8e90a_prof);

        
        $__internal_20097743dab229bb60201daf676fc5d80ae24586c562870c2d8e372d211de285->leave($__internal_20097743dab229bb60201daf676fc5d80ae24586c562870c2d8e372d211de285_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_24173c7d4d509e0c8c677105464de6060a0b3cee351aa3934c132bbc2dd17edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24173c7d4d509e0c8c677105464de6060a0b3cee351aa3934c132bbc2dd17edb->enter($__internal_24173c7d4d509e0c8c677105464de6060a0b3cee351aa3934c132bbc2dd17edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbfca4e219b4daf2d0814a28b122158da9442d1920b43a5cfc4591dbfdc71cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfca4e219b4daf2d0814a28b122158da9442d1920b43a5cfc4591dbfdc71cbc->enter($__internal_cbfca4e219b4daf2d0814a28b122158da9442d1920b43a5cfc4591dbfdc71cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cbfca4e219b4daf2d0814a28b122158da9442d1920b43a5cfc4591dbfdc71cbc->leave($__internal_cbfca4e219b4daf2d0814a28b122158da9442d1920b43a5cfc4591dbfdc71cbc_prof);

        
        $__internal_24173c7d4d509e0c8c677105464de6060a0b3cee351aa3934c132bbc2dd17edb->leave($__internal_24173c7d4d509e0c8c677105464de6060a0b3cee351aa3934c132bbc2dd17edb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
