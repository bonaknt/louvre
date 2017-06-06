<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e921e34bf8ed02db42a195416909e3edabf80b0f44593c2f2b817c8cd17a5dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_041c3956bd2b882a8afc4e78e79d95a9ee869607a262b60f698a9c7f8388d91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041c3956bd2b882a8afc4e78e79d95a9ee869607a262b60f698a9c7f8388d91c->enter($__internal_041c3956bd2b882a8afc4e78e79d95a9ee869607a262b60f698a9c7f8388d91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8de576398829301c539caf190502ddb37c12784dc538c6e6fff3ed21bdd7fd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de576398829301c539caf190502ddb37c12784dc538c6e6fff3ed21bdd7fd8b->enter($__internal_8de576398829301c539caf190502ddb37c12784dc538c6e6fff3ed21bdd7fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041c3956bd2b882a8afc4e78e79d95a9ee869607a262b60f698a9c7f8388d91c->leave($__internal_041c3956bd2b882a8afc4e78e79d95a9ee869607a262b60f698a9c7f8388d91c_prof);

        
        $__internal_8de576398829301c539caf190502ddb37c12784dc538c6e6fff3ed21bdd7fd8b->leave($__internal_8de576398829301c539caf190502ddb37c12784dc538c6e6fff3ed21bdd7fd8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05f15e3cccc0cec508bdfff371bbd09d5c70a79bfb74d6f036dba38aff2959a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f15e3cccc0cec508bdfff371bbd09d5c70a79bfb74d6f036dba38aff2959a0->enter($__internal_05f15e3cccc0cec508bdfff371bbd09d5c70a79bfb74d6f036dba38aff2959a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97f94121e9ec155609204d6eeb0891e4c42fb235fc57937f909803682ef9e7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f94121e9ec155609204d6eeb0891e4c42fb235fc57937f909803682ef9e7b0->enter($__internal_97f94121e9ec155609204d6eeb0891e4c42fb235fc57937f909803682ef9e7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97f94121e9ec155609204d6eeb0891e4c42fb235fc57937f909803682ef9e7b0->leave($__internal_97f94121e9ec155609204d6eeb0891e4c42fb235fc57937f909803682ef9e7b0_prof);

        
        $__internal_05f15e3cccc0cec508bdfff371bbd09d5c70a79bfb74d6f036dba38aff2959a0->leave($__internal_05f15e3cccc0cec508bdfff371bbd09d5c70a79bfb74d6f036dba38aff2959a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3478db6bd6d274fe014b74013e8e8fef371cb22861f72395cb5a1f19eb0f38fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3478db6bd6d274fe014b74013e8e8fef371cb22861f72395cb5a1f19eb0f38fa->enter($__internal_3478db6bd6d274fe014b74013e8e8fef371cb22861f72395cb5a1f19eb0f38fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca7427342c6fa84e0e4c6f2dc9e1ea89592305be0ab681ac689f9a592fc15fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7427342c6fa84e0e4c6f2dc9e1ea89592305be0ab681ac689f9a592fc15fbb->enter($__internal_ca7427342c6fa84e0e4c6f2dc9e1ea89592305be0ab681ac689f9a592fc15fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca7427342c6fa84e0e4c6f2dc9e1ea89592305be0ab681ac689f9a592fc15fbb->leave($__internal_ca7427342c6fa84e0e4c6f2dc9e1ea89592305be0ab681ac689f9a592fc15fbb_prof);

        
        $__internal_3478db6bd6d274fe014b74013e8e8fef371cb22861f72395cb5a1f19eb0f38fa->leave($__internal_3478db6bd6d274fe014b74013e8e8fef371cb22861f72395cb5a1f19eb0f38fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6698594ba49a01074e2794e513b1ded00f0df02cd3f31daf16c5b21e21493b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6698594ba49a01074e2794e513b1ded00f0df02cd3f31daf16c5b21e21493b8d->enter($__internal_6698594ba49a01074e2794e513b1ded00f0df02cd3f31daf16c5b21e21493b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c3a783df232d8518146ea4c979268917e7f66928c77d66966fc1591ec727d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3a783df232d8518146ea4c979268917e7f66928c77d66966fc1591ec727d6a->enter($__internal_2c3a783df232d8518146ea4c979268917e7f66928c77d66966fc1591ec727d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c3a783df232d8518146ea4c979268917e7f66928c77d66966fc1591ec727d6a->leave($__internal_2c3a783df232d8518146ea4c979268917e7f66928c77d66966fc1591ec727d6a_prof);

        
        $__internal_6698594ba49a01074e2794e513b1ded00f0df02cd3f31daf16c5b21e21493b8d->leave($__internal_6698594ba49a01074e2794e513b1ded00f0df02cd3f31daf16c5b21e21493b8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
