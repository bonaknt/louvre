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
        $__internal_b323c894f8b67ac01a65ef1de790bd7d3949eea54f3734d9a97a788f56ccd226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b323c894f8b67ac01a65ef1de790bd7d3949eea54f3734d9a97a788f56ccd226->enter($__internal_b323c894f8b67ac01a65ef1de790bd7d3949eea54f3734d9a97a788f56ccd226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa34d77055cc50841fc0a88f5180517363abdc9dd17fe3345b2d5add6b3504c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa34d77055cc50841fc0a88f5180517363abdc9dd17fe3345b2d5add6b3504c8->enter($__internal_aa34d77055cc50841fc0a88f5180517363abdc9dd17fe3345b2d5add6b3504c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b323c894f8b67ac01a65ef1de790bd7d3949eea54f3734d9a97a788f56ccd226->leave($__internal_b323c894f8b67ac01a65ef1de790bd7d3949eea54f3734d9a97a788f56ccd226_prof);

        
        $__internal_aa34d77055cc50841fc0a88f5180517363abdc9dd17fe3345b2d5add6b3504c8->leave($__internal_aa34d77055cc50841fc0a88f5180517363abdc9dd17fe3345b2d5add6b3504c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd138e8411971c9fcfe132124181b7c4be8569c861fb94aa1761b85a0485c690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd138e8411971c9fcfe132124181b7c4be8569c861fb94aa1761b85a0485c690->enter($__internal_fd138e8411971c9fcfe132124181b7c4be8569c861fb94aa1761b85a0485c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b228b37dd2748cdfdbda28da0a6390baaf8fa58b21fec077e699a8b9f8af053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b228b37dd2748cdfdbda28da0a6390baaf8fa58b21fec077e699a8b9f8af053->enter($__internal_4b228b37dd2748cdfdbda28da0a6390baaf8fa58b21fec077e699a8b9f8af053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b228b37dd2748cdfdbda28da0a6390baaf8fa58b21fec077e699a8b9f8af053->leave($__internal_4b228b37dd2748cdfdbda28da0a6390baaf8fa58b21fec077e699a8b9f8af053_prof);

        
        $__internal_fd138e8411971c9fcfe132124181b7c4be8569c861fb94aa1761b85a0485c690->leave($__internal_fd138e8411971c9fcfe132124181b7c4be8569c861fb94aa1761b85a0485c690_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14649892fd572f9e9cb0bcf023f0f9787d13451fd4f4700a089aecba5bc9653a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14649892fd572f9e9cb0bcf023f0f9787d13451fd4f4700a089aecba5bc9653a->enter($__internal_14649892fd572f9e9cb0bcf023f0f9787d13451fd4f4700a089aecba5bc9653a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12dad4f803ab185274f3f3df84fbf0eedd52d228eefb7078f0ec031fdb873808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dad4f803ab185274f3f3df84fbf0eedd52d228eefb7078f0ec031fdb873808->enter($__internal_12dad4f803ab185274f3f3df84fbf0eedd52d228eefb7078f0ec031fdb873808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_12dad4f803ab185274f3f3df84fbf0eedd52d228eefb7078f0ec031fdb873808->leave($__internal_12dad4f803ab185274f3f3df84fbf0eedd52d228eefb7078f0ec031fdb873808_prof);

        
        $__internal_14649892fd572f9e9cb0bcf023f0f9787d13451fd4f4700a089aecba5bc9653a->leave($__internal_14649892fd572f9e9cb0bcf023f0f9787d13451fd4f4700a089aecba5bc9653a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ca9775c80945c102bac77447cfa6ca9d2e77e8f644eda61ad0d7f5bfca427de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca9775c80945c102bac77447cfa6ca9d2e77e8f644eda61ad0d7f5bfca427de->enter($__internal_1ca9775c80945c102bac77447cfa6ca9d2e77e8f644eda61ad0d7f5bfca427de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb84a180a21f36bec4341260ede2892621a0939b83b3616612a721678b537ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb84a180a21f36bec4341260ede2892621a0939b83b3616612a721678b537ea2->enter($__internal_eb84a180a21f36bec4341260ede2892621a0939b83b3616612a721678b537ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb84a180a21f36bec4341260ede2892621a0939b83b3616612a721678b537ea2->leave($__internal_eb84a180a21f36bec4341260ede2892621a0939b83b3616612a721678b537ea2_prof);

        
        $__internal_1ca9775c80945c102bac77447cfa6ca9d2e77e8f644eda61ad0d7f5bfca427de->leave($__internal_1ca9775c80945c102bac77447cfa6ca9d2e77e8f644eda61ad0d7f5bfca427de_prof);

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
