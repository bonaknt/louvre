<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe420314b2ceb998422e9646b5b2725894adb289d1b846eb0520e61a5a29793b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9bf7db6a8a29a3d9ebbd5aadb326b26abaa87ca5b1873f62bfa23f66fc1f0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bf7db6a8a29a3d9ebbd5aadb326b26abaa87ca5b1873f62bfa23f66fc1f0dc->enter($__internal_e9bf7db6a8a29a3d9ebbd5aadb326b26abaa87ca5b1873f62bfa23f66fc1f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ffcf1f7a88061816daf92605689270493bf5d22ebf7149099586b4420f30eb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcf1f7a88061816daf92605689270493bf5d22ebf7149099586b4420f30eb5c->enter($__internal_ffcf1f7a88061816daf92605689270493bf5d22ebf7149099586b4420f30eb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bf7db6a8a29a3d9ebbd5aadb326b26abaa87ca5b1873f62bfa23f66fc1f0dc->leave($__internal_e9bf7db6a8a29a3d9ebbd5aadb326b26abaa87ca5b1873f62bfa23f66fc1f0dc_prof);

        
        $__internal_ffcf1f7a88061816daf92605689270493bf5d22ebf7149099586b4420f30eb5c->leave($__internal_ffcf1f7a88061816daf92605689270493bf5d22ebf7149099586b4420f30eb5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c46555084c6000eed0c6844c2546a92ad88b530a88e560e77a998598d5e66a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46555084c6000eed0c6844c2546a92ad88b530a88e560e77a998598d5e66a21->enter($__internal_c46555084c6000eed0c6844c2546a92ad88b530a88e560e77a998598d5e66a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b78efbebdedcdc9f481da70495fd523f467fe7b4bb2b19a09ddcc88ab0466639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78efbebdedcdc9f481da70495fd523f467fe7b4bb2b19a09ddcc88ab0466639->enter($__internal_b78efbebdedcdc9f481da70495fd523f467fe7b4bb2b19a09ddcc88ab0466639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b78efbebdedcdc9f481da70495fd523f467fe7b4bb2b19a09ddcc88ab0466639->leave($__internal_b78efbebdedcdc9f481da70495fd523f467fe7b4bb2b19a09ddcc88ab0466639_prof);

        
        $__internal_c46555084c6000eed0c6844c2546a92ad88b530a88e560e77a998598d5e66a21->leave($__internal_c46555084c6000eed0c6844c2546a92ad88b530a88e560e77a998598d5e66a21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e815e75a1fe442a13644432c9070e8918fedac0c47221ef6effe7cdb4091fb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e815e75a1fe442a13644432c9070e8918fedac0c47221ef6effe7cdb4091fb82->enter($__internal_e815e75a1fe442a13644432c9070e8918fedac0c47221ef6effe7cdb4091fb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2a336b1b10d4f26af8ad599e9c1290a4f3c653042212f19a979b93bcfdcec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a336b1b10d4f26af8ad599e9c1290a4f3c653042212f19a979b93bcfdcec8a->enter($__internal_c2a336b1b10d4f26af8ad599e9c1290a4f3c653042212f19a979b93bcfdcec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2a336b1b10d4f26af8ad599e9c1290a4f3c653042212f19a979b93bcfdcec8a->leave($__internal_c2a336b1b10d4f26af8ad599e9c1290a4f3c653042212f19a979b93bcfdcec8a_prof);

        
        $__internal_e815e75a1fe442a13644432c9070e8918fedac0c47221ef6effe7cdb4091fb82->leave($__internal_e815e75a1fe442a13644432c9070e8918fedac0c47221ef6effe7cdb4091fb82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae0c4c0795e6f8eae4b515c44add084ec0c62cd40abee3de091cc1bd83d71e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0c4c0795e6f8eae4b515c44add084ec0c62cd40abee3de091cc1bd83d71e52->enter($__internal_ae0c4c0795e6f8eae4b515c44add084ec0c62cd40abee3de091cc1bd83d71e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57290d2fa4416a517d924b80cb4a6ebdc1e19c633dd9f93f25c1a0c47b5eaab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57290d2fa4416a517d924b80cb4a6ebdc1e19c633dd9f93f25c1a0c47b5eaab4->enter($__internal_57290d2fa4416a517d924b80cb4a6ebdc1e19c633dd9f93f25c1a0c47b5eaab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57290d2fa4416a517d924b80cb4a6ebdc1e19c633dd9f93f25c1a0c47b5eaab4->leave($__internal_57290d2fa4416a517d924b80cb4a6ebdc1e19c633dd9f93f25c1a0c47b5eaab4_prof);

        
        $__internal_ae0c4c0795e6f8eae4b515c44add084ec0c62cd40abee3de091cc1bd83d71e52->leave($__internal_ae0c4c0795e6f8eae4b515c44add084ec0c62cd40abee3de091cc1bd83d71e52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
