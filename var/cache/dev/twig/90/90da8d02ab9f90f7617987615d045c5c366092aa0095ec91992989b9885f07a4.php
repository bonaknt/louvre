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
        $__internal_3bc7653725b7b1c98c6a2356dd272ba883fae69f04e23aa9c1aa57d10ea598da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc7653725b7b1c98c6a2356dd272ba883fae69f04e23aa9c1aa57d10ea598da->enter($__internal_3bc7653725b7b1c98c6a2356dd272ba883fae69f04e23aa9c1aa57d10ea598da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_009b8663394919a381b08570879802a48e0bd218719c42d77626fcb8b5879b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009b8663394919a381b08570879802a48e0bd218719c42d77626fcb8b5879b21->enter($__internal_009b8663394919a381b08570879802a48e0bd218719c42d77626fcb8b5879b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc7653725b7b1c98c6a2356dd272ba883fae69f04e23aa9c1aa57d10ea598da->leave($__internal_3bc7653725b7b1c98c6a2356dd272ba883fae69f04e23aa9c1aa57d10ea598da_prof);

        
        $__internal_009b8663394919a381b08570879802a48e0bd218719c42d77626fcb8b5879b21->leave($__internal_009b8663394919a381b08570879802a48e0bd218719c42d77626fcb8b5879b21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fb6e229dbd441f13f5f4ee073edc892bc37829f2b46e3253e114f3ffdfa74cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb6e229dbd441f13f5f4ee073edc892bc37829f2b46e3253e114f3ffdfa74cd->enter($__internal_9fb6e229dbd441f13f5f4ee073edc892bc37829f2b46e3253e114f3ffdfa74cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa79825c95b657b0bdce2413ac2e6526ad9b1ce68bcd057077b240947ac42367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa79825c95b657b0bdce2413ac2e6526ad9b1ce68bcd057077b240947ac42367->enter($__internal_aa79825c95b657b0bdce2413ac2e6526ad9b1ce68bcd057077b240947ac42367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa79825c95b657b0bdce2413ac2e6526ad9b1ce68bcd057077b240947ac42367->leave($__internal_aa79825c95b657b0bdce2413ac2e6526ad9b1ce68bcd057077b240947ac42367_prof);

        
        $__internal_9fb6e229dbd441f13f5f4ee073edc892bc37829f2b46e3253e114f3ffdfa74cd->leave($__internal_9fb6e229dbd441f13f5f4ee073edc892bc37829f2b46e3253e114f3ffdfa74cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a19005718021b2b26896d5f50ef6c5eab71bf771ed9fa3b68d8e6d4b82945eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a19005718021b2b26896d5f50ef6c5eab71bf771ed9fa3b68d8e6d4b82945eb->enter($__internal_0a19005718021b2b26896d5f50ef6c5eab71bf771ed9fa3b68d8e6d4b82945eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5414b336f91b39179c121b30332bdb0f4ac2083370ae5f0ae652d85c622ecacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5414b336f91b39179c121b30332bdb0f4ac2083370ae5f0ae652d85c622ecacf->enter($__internal_5414b336f91b39179c121b30332bdb0f4ac2083370ae5f0ae652d85c622ecacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5414b336f91b39179c121b30332bdb0f4ac2083370ae5f0ae652d85c622ecacf->leave($__internal_5414b336f91b39179c121b30332bdb0f4ac2083370ae5f0ae652d85c622ecacf_prof);

        
        $__internal_0a19005718021b2b26896d5f50ef6c5eab71bf771ed9fa3b68d8e6d4b82945eb->leave($__internal_0a19005718021b2b26896d5f50ef6c5eab71bf771ed9fa3b68d8e6d4b82945eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c784a05242f861e174a5117be8e75a3ef60f0c41500719a416910136c17f7dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c784a05242f861e174a5117be8e75a3ef60f0c41500719a416910136c17f7dd7->enter($__internal_c784a05242f861e174a5117be8e75a3ef60f0c41500719a416910136c17f7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6335059fc1f9ab8eb4f1635931e79f0b3aa4f6eeba3540896adc1e5e61f0d0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6335059fc1f9ab8eb4f1635931e79f0b3aa4f6eeba3540896adc1e5e61f0d0ef->enter($__internal_6335059fc1f9ab8eb4f1635931e79f0b3aa4f6eeba3540896adc1e5e61f0d0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6335059fc1f9ab8eb4f1635931e79f0b3aa4f6eeba3540896adc1e5e61f0d0ef->leave($__internal_6335059fc1f9ab8eb4f1635931e79f0b3aa4f6eeba3540896adc1e5e61f0d0ef_prof);

        
        $__internal_c784a05242f861e174a5117be8e75a3ef60f0c41500719a416910136c17f7dd7->leave($__internal_c784a05242f861e174a5117be8e75a3ef60f0c41500719a416910136c17f7dd7_prof);

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
