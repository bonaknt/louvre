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
        $__internal_d4dd1a58f684fea39a1c39e079ba112937b77177c821db7786f465f2716db534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4dd1a58f684fea39a1c39e079ba112937b77177c821db7786f465f2716db534->enter($__internal_d4dd1a58f684fea39a1c39e079ba112937b77177c821db7786f465f2716db534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0d6b62509cb31889314861e71c4656a60f444a5b7e559ee870e53a3f7e5c5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d6b62509cb31889314861e71c4656a60f444a5b7e559ee870e53a3f7e5c5ea->enter($__internal_b0d6b62509cb31889314861e71c4656a60f444a5b7e559ee870e53a3f7e5c5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4dd1a58f684fea39a1c39e079ba112937b77177c821db7786f465f2716db534->leave($__internal_d4dd1a58f684fea39a1c39e079ba112937b77177c821db7786f465f2716db534_prof);

        
        $__internal_b0d6b62509cb31889314861e71c4656a60f444a5b7e559ee870e53a3f7e5c5ea->leave($__internal_b0d6b62509cb31889314861e71c4656a60f444a5b7e559ee870e53a3f7e5c5ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d0465c903051baf664396688ba20e5f14ebd7e9edcbd353221ef4204ab9f8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0465c903051baf664396688ba20e5f14ebd7e9edcbd353221ef4204ab9f8f7->enter($__internal_6d0465c903051baf664396688ba20e5f14ebd7e9edcbd353221ef4204ab9f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7af1da74fa86f28df13686e995253bba8b527c7888b66b8b034b41ea93abbb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af1da74fa86f28df13686e995253bba8b527c7888b66b8b034b41ea93abbb63->enter($__internal_7af1da74fa86f28df13686e995253bba8b527c7888b66b8b034b41ea93abbb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7af1da74fa86f28df13686e995253bba8b527c7888b66b8b034b41ea93abbb63->leave($__internal_7af1da74fa86f28df13686e995253bba8b527c7888b66b8b034b41ea93abbb63_prof);

        
        $__internal_6d0465c903051baf664396688ba20e5f14ebd7e9edcbd353221ef4204ab9f8f7->leave($__internal_6d0465c903051baf664396688ba20e5f14ebd7e9edcbd353221ef4204ab9f8f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a14b174eed18ae3ea2174e73dfb7bee41a5065dae1f3ca0e84894d3d55894a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14b174eed18ae3ea2174e73dfb7bee41a5065dae1f3ca0e84894d3d55894a03->enter($__internal_a14b174eed18ae3ea2174e73dfb7bee41a5065dae1f3ca0e84894d3d55894a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2c2f78c0396011b4582e2cf3b0cfed2ca8cb668f9df9c68b8417202e2a33db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c2f78c0396011b4582e2cf3b0cfed2ca8cb668f9df9c68b8417202e2a33db3->enter($__internal_f2c2f78c0396011b4582e2cf3b0cfed2ca8cb668f9df9c68b8417202e2a33db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2c2f78c0396011b4582e2cf3b0cfed2ca8cb668f9df9c68b8417202e2a33db3->leave($__internal_f2c2f78c0396011b4582e2cf3b0cfed2ca8cb668f9df9c68b8417202e2a33db3_prof);

        
        $__internal_a14b174eed18ae3ea2174e73dfb7bee41a5065dae1f3ca0e84894d3d55894a03->leave($__internal_a14b174eed18ae3ea2174e73dfb7bee41a5065dae1f3ca0e84894d3d55894a03_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41f742ee4f6f2590197b322db29911286d383b152bec3e67c6c4f752357222b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f742ee4f6f2590197b322db29911286d383b152bec3e67c6c4f752357222b0->enter($__internal_41f742ee4f6f2590197b322db29911286d383b152bec3e67c6c4f752357222b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edc106160fd816b9a0422b36734886ca31dd2b8f2799a4c8828a05bb7ad01987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc106160fd816b9a0422b36734886ca31dd2b8f2799a4c8828a05bb7ad01987->enter($__internal_edc106160fd816b9a0422b36734886ca31dd2b8f2799a4c8828a05bb7ad01987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_edc106160fd816b9a0422b36734886ca31dd2b8f2799a4c8828a05bb7ad01987->leave($__internal_edc106160fd816b9a0422b36734886ca31dd2b8f2799a4c8828a05bb7ad01987_prof);

        
        $__internal_41f742ee4f6f2590197b322db29911286d383b152bec3e67c6c4f752357222b0->leave($__internal_41f742ee4f6f2590197b322db29911286d383b152bec3e67c6c4f752357222b0_prof);

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
