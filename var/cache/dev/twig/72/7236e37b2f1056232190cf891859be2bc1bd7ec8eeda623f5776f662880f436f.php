<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a948fe2b26fd25f52d5226fa50ecb8f64d1d090167e9f729663d46fb69ea2560 extends Twig_Template
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
        $__internal_dd0b038920356069e886d921f724849bac3ef6a959d35288aeed7e70da6b6395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0b038920356069e886d921f724849bac3ef6a959d35288aeed7e70da6b6395->enter($__internal_dd0b038920356069e886d921f724849bac3ef6a959d35288aeed7e70da6b6395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_01bddf2f21d9076d0e63d9c6328be7a9023ae0f49867a9e2e49264f0bba46816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bddf2f21d9076d0e63d9c6328be7a9023ae0f49867a9e2e49264f0bba46816->enter($__internal_01bddf2f21d9076d0e63d9c6328be7a9023ae0f49867a9e2e49264f0bba46816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0b038920356069e886d921f724849bac3ef6a959d35288aeed7e70da6b6395->leave($__internal_dd0b038920356069e886d921f724849bac3ef6a959d35288aeed7e70da6b6395_prof);

        
        $__internal_01bddf2f21d9076d0e63d9c6328be7a9023ae0f49867a9e2e49264f0bba46816->leave($__internal_01bddf2f21d9076d0e63d9c6328be7a9023ae0f49867a9e2e49264f0bba46816_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc6fbf5c87f3bd253093175783a82e30776b857ef1e170245597ccf590d92e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6fbf5c87f3bd253093175783a82e30776b857ef1e170245597ccf590d92e9d->enter($__internal_cc6fbf5c87f3bd253093175783a82e30776b857ef1e170245597ccf590d92e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6dc689e62c9e5d5f3d46c17f6aa1be78499c4c249a94ab6c86080a801fa648a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dc689e62c9e5d5f3d46c17f6aa1be78499c4c249a94ab6c86080a801fa648a->enter($__internal_d6dc689e62c9e5d5f3d46c17f6aa1be78499c4c249a94ab6c86080a801fa648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6dc689e62c9e5d5f3d46c17f6aa1be78499c4c249a94ab6c86080a801fa648a->leave($__internal_d6dc689e62c9e5d5f3d46c17f6aa1be78499c4c249a94ab6c86080a801fa648a_prof);

        
        $__internal_cc6fbf5c87f3bd253093175783a82e30776b857ef1e170245597ccf590d92e9d->leave($__internal_cc6fbf5c87f3bd253093175783a82e30776b857ef1e170245597ccf590d92e9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7920a762c6fde14d3e844d5f6578b56b40f1ea4c0315ab9f722014034a06555c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7920a762c6fde14d3e844d5f6578b56b40f1ea4c0315ab9f722014034a06555c->enter($__internal_7920a762c6fde14d3e844d5f6578b56b40f1ea4c0315ab9f722014034a06555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b608b72adbf978ea2cf4c1e6338cc27addc21f3186cc4d80e498710884f9917a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b608b72adbf978ea2cf4c1e6338cc27addc21f3186cc4d80e498710884f9917a->enter($__internal_b608b72adbf978ea2cf4c1e6338cc27addc21f3186cc4d80e498710884f9917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b608b72adbf978ea2cf4c1e6338cc27addc21f3186cc4d80e498710884f9917a->leave($__internal_b608b72adbf978ea2cf4c1e6338cc27addc21f3186cc4d80e498710884f9917a_prof);

        
        $__internal_7920a762c6fde14d3e844d5f6578b56b40f1ea4c0315ab9f722014034a06555c->leave($__internal_7920a762c6fde14d3e844d5f6578b56b40f1ea4c0315ab9f722014034a06555c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dc7a7ed5009966e0be08a49f3b911b148b6f533766f8b748f38b701913ed878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc7a7ed5009966e0be08a49f3b911b148b6f533766f8b748f38b701913ed878->enter($__internal_4dc7a7ed5009966e0be08a49f3b911b148b6f533766f8b748f38b701913ed878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_addeba7cdc1c311b72bd16567c77ff9b3d8a2d1e1ef3c2483857267188cb713d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addeba7cdc1c311b72bd16567c77ff9b3d8a2d1e1ef3c2483857267188cb713d->enter($__internal_addeba7cdc1c311b72bd16567c77ff9b3d8a2d1e1ef3c2483857267188cb713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_addeba7cdc1c311b72bd16567c77ff9b3d8a2d1e1ef3c2483857267188cb713d->leave($__internal_addeba7cdc1c311b72bd16567c77ff9b3d8a2d1e1ef3c2483857267188cb713d_prof);

        
        $__internal_4dc7a7ed5009966e0be08a49f3b911b148b6f533766f8b748f38b701913ed878->leave($__internal_4dc7a7ed5009966e0be08a49f3b911b148b6f533766f8b748f38b701913ed878_prof);

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
