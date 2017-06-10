<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
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
        $__internal_8f1094dd740a7afb22e5e70fce3d57eed585d97a8b912d4a317e8dae92928f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1094dd740a7afb22e5e70fce3d57eed585d97a8b912d4a317e8dae92928f13->enter($__internal_8f1094dd740a7afb22e5e70fce3d57eed585d97a8b912d4a317e8dae92928f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_40aa32c4a4c6269c2a256326f518cf37c24bbe9ab9f029906c192e9f00d95746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aa32c4a4c6269c2a256326f518cf37c24bbe9ab9f029906c192e9f00d95746->enter($__internal_40aa32c4a4c6269c2a256326f518cf37c24bbe9ab9f029906c192e9f00d95746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1094dd740a7afb22e5e70fce3d57eed585d97a8b912d4a317e8dae92928f13->leave($__internal_8f1094dd740a7afb22e5e70fce3d57eed585d97a8b912d4a317e8dae92928f13_prof);

        
        $__internal_40aa32c4a4c6269c2a256326f518cf37c24bbe9ab9f029906c192e9f00d95746->leave($__internal_40aa32c4a4c6269c2a256326f518cf37c24bbe9ab9f029906c192e9f00d95746_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7c6d7592efde2df84f54cfa70a7a0a667197256cb89709275679a931b9cc4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c6d7592efde2df84f54cfa70a7a0a667197256cb89709275679a931b9cc4ca->enter($__internal_c7c6d7592efde2df84f54cfa70a7a0a667197256cb89709275679a931b9cc4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4d5968cad9ee697e0852a01be1ba814e43cc5bb4c8457a7c4033737cfccaba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d5968cad9ee697e0852a01be1ba814e43cc5bb4c8457a7c4033737cfccaba8->enter($__internal_e4d5968cad9ee697e0852a01be1ba814e43cc5bb4c8457a7c4033737cfccaba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4d5968cad9ee697e0852a01be1ba814e43cc5bb4c8457a7c4033737cfccaba8->leave($__internal_e4d5968cad9ee697e0852a01be1ba814e43cc5bb4c8457a7c4033737cfccaba8_prof);

        
        $__internal_c7c6d7592efde2df84f54cfa70a7a0a667197256cb89709275679a931b9cc4ca->leave($__internal_c7c6d7592efde2df84f54cfa70a7a0a667197256cb89709275679a931b9cc4ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef1c247c5f7fe7cb6fd09810cacc7475b7249bbe008546e962255b0b2e4ffa55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1c247c5f7fe7cb6fd09810cacc7475b7249bbe008546e962255b0b2e4ffa55->enter($__internal_ef1c247c5f7fe7cb6fd09810cacc7475b7249bbe008546e962255b0b2e4ffa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0a67176323e86ff94bbb4c82aa4b6b2bbf34d465c96d51afbf43eae0e0ebaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a67176323e86ff94bbb4c82aa4b6b2bbf34d465c96d51afbf43eae0e0ebaf7->enter($__internal_d0a67176323e86ff94bbb4c82aa4b6b2bbf34d465c96d51afbf43eae0e0ebaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0a67176323e86ff94bbb4c82aa4b6b2bbf34d465c96d51afbf43eae0e0ebaf7->leave($__internal_d0a67176323e86ff94bbb4c82aa4b6b2bbf34d465c96d51afbf43eae0e0ebaf7_prof);

        
        $__internal_ef1c247c5f7fe7cb6fd09810cacc7475b7249bbe008546e962255b0b2e4ffa55->leave($__internal_ef1c247c5f7fe7cb6fd09810cacc7475b7249bbe008546e962255b0b2e4ffa55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7598bd9a121f112b109feb03af9e6a69a7e9d6440833ee9364604e39731af5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7598bd9a121f112b109feb03af9e6a69a7e9d6440833ee9364604e39731af5ad->enter($__internal_7598bd9a121f112b109feb03af9e6a69a7e9d6440833ee9364604e39731af5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_790a72c540620af67facfa25331db322d7433928870ecbe3f899f0b74791ad12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790a72c540620af67facfa25331db322d7433928870ecbe3f899f0b74791ad12->enter($__internal_790a72c540620af67facfa25331db322d7433928870ecbe3f899f0b74791ad12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_790a72c540620af67facfa25331db322d7433928870ecbe3f899f0b74791ad12->leave($__internal_790a72c540620af67facfa25331db322d7433928870ecbe3f899f0b74791ad12_prof);

        
        $__internal_7598bd9a121f112b109feb03af9e6a69a7e9d6440833ee9364604e39731af5ad->leave($__internal_7598bd9a121f112b109feb03af9e6a69a7e9d6440833ee9364604e39731af5ad_prof);

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
