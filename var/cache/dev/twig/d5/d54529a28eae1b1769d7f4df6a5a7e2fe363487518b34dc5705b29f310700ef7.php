<?php

/* MKLouvreBundle:Default:index.html.twig */
class __TwigTemplate_e939a7b71e39f42e1a5ca88f267f99cc99e2f1062150afa0d2c7fdc207aaf907 extends Twig_Template
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
        $__internal_1c4024c5984d8e69b58060d7f287bfeba8a530886c7a2e1fe7da17d10ac8a25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4024c5984d8e69b58060d7f287bfeba8a530886c7a2e1fe7da17d10ac8a25a->enter($__internal_1c4024c5984d8e69b58060d7f287bfeba8a530886c7a2e1fe7da17d10ac8a25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $__internal_213ed219a76703b4b390df5eb649495ab1994e7b2b85d6c3826ddf39f3ebaaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213ed219a76703b4b390df5eb649495ab1994e7b2b85d6c3826ddf39f3ebaaae->enter($__internal_213ed219a76703b4b390df5eb649495ab1994e7b2b85d6c3826ddf39f3ebaaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4024c5984d8e69b58060d7f287bfeba8a530886c7a2e1fe7da17d10ac8a25a->leave($__internal_1c4024c5984d8e69b58060d7f287bfeba8a530886c7a2e1fe7da17d10ac8a25a_prof);

        
        $__internal_213ed219a76703b4b390df5eb649495ab1994e7b2b85d6c3826ddf39f3ebaaae->leave($__internal_213ed219a76703b4b390df5eb649495ab1994e7b2b85d6c3826ddf39f3ebaaae_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_dc2fab982c1bf1309dd3326bd7e7e2c5f5a706b515e2fb944d5e070733d41442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2fab982c1bf1309dd3326bd7e7e2c5f5a706b515e2fb944d5e070733d41442->enter($__internal_dc2fab982c1bf1309dd3326bd7e7e2c5f5a706b515e2fb944d5e070733d41442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f7b0e195ea01c18c6a7d7813d36d46f405f3bd74a9b5e89ca1b662161fd3e713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b0e195ea01c18c6a7d7813d36d46f405f3bd74a9b5e89ca1b662161fd3e713->enter($__internal_f7b0e195ea01c18c6a7d7813d36d46f405f3bd74a9b5e89ca1b662161fd3e713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
  <h2>L'accueil du site</h2>



";
        
        $__internal_f7b0e195ea01c18c6a7d7813d36d46f405f3bd74a9b5e89ca1b662161fd3e713->leave($__internal_f7b0e195ea01c18c6a7d7813d36d46f405f3bd74a9b5e89ca1b662161fd3e713_prof);

        
        $__internal_dc2fab982c1bf1309dd3326bd7e7e2c5f5a706b515e2fb944d5e070733d41442->leave($__internal_dc2fab982c1bf1309dd3326bd7e7e2c5f5a706b515e2fb944d5e070733d41442_prof);

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

  <h2>L'accueil du site</h2>



{% endblock %}
", "MKLouvreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
