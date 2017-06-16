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
        $__internal_173a31cc165b6b5d4897c3a299230dae848be6a9e94c2e6701422d8741b82638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173a31cc165b6b5d4897c3a299230dae848be6a9e94c2e6701422d8741b82638->enter($__internal_173a31cc165b6b5d4897c3a299230dae848be6a9e94c2e6701422d8741b82638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_71e7984da6a42f3739a4bac369a501c8f207eaa33382e081cdb8a87de9a4cb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e7984da6a42f3739a4bac369a501c8f207eaa33382e081cdb8a87de9a4cb29->enter($__internal_71e7984da6a42f3739a4bac369a501c8f207eaa33382e081cdb8a87de9a4cb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173a31cc165b6b5d4897c3a299230dae848be6a9e94c2e6701422d8741b82638->leave($__internal_173a31cc165b6b5d4897c3a299230dae848be6a9e94c2e6701422d8741b82638_prof);

        
        $__internal_71e7984da6a42f3739a4bac369a501c8f207eaa33382e081cdb8a87de9a4cb29->leave($__internal_71e7984da6a42f3739a4bac369a501c8f207eaa33382e081cdb8a87de9a4cb29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d46ccf7a6605eb14a323e5e520f95c2e2cbfefbbd08deed10f3af94e9c4a54a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46ccf7a6605eb14a323e5e520f95c2e2cbfefbbd08deed10f3af94e9c4a54a4->enter($__internal_d46ccf7a6605eb14a323e5e520f95c2e2cbfefbbd08deed10f3af94e9c4a54a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45bfc68d4f75e73c664457b0576121ab73349c4e891c60684d52889d7b3ab0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bfc68d4f75e73c664457b0576121ab73349c4e891c60684d52889d7b3ab0d5->enter($__internal_45bfc68d4f75e73c664457b0576121ab73349c4e891c60684d52889d7b3ab0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45bfc68d4f75e73c664457b0576121ab73349c4e891c60684d52889d7b3ab0d5->leave($__internal_45bfc68d4f75e73c664457b0576121ab73349c4e891c60684d52889d7b3ab0d5_prof);

        
        $__internal_d46ccf7a6605eb14a323e5e520f95c2e2cbfefbbd08deed10f3af94e9c4a54a4->leave($__internal_d46ccf7a6605eb14a323e5e520f95c2e2cbfefbbd08deed10f3af94e9c4a54a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fc8434c59602ae526a56652196f4057fffe534ed3ac60913403c7f8f10ffb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc8434c59602ae526a56652196f4057fffe534ed3ac60913403c7f8f10ffb25->enter($__internal_5fc8434c59602ae526a56652196f4057fffe534ed3ac60913403c7f8f10ffb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e56b5a51f2f6933b7d04cb4252615315b8f3cad773b271cb96d89959d1dd2b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56b5a51f2f6933b7d04cb4252615315b8f3cad773b271cb96d89959d1dd2b2b->enter($__internal_e56b5a51f2f6933b7d04cb4252615315b8f3cad773b271cb96d89959d1dd2b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e56b5a51f2f6933b7d04cb4252615315b8f3cad773b271cb96d89959d1dd2b2b->leave($__internal_e56b5a51f2f6933b7d04cb4252615315b8f3cad773b271cb96d89959d1dd2b2b_prof);

        
        $__internal_5fc8434c59602ae526a56652196f4057fffe534ed3ac60913403c7f8f10ffb25->leave($__internal_5fc8434c59602ae526a56652196f4057fffe534ed3ac60913403c7f8f10ffb25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b496def0ac9ffe2aef9c2e53934ce11889753a6c5d8388825c0c9975659b1cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b496def0ac9ffe2aef9c2e53934ce11889753a6c5d8388825c0c9975659b1cc0->enter($__internal_b496def0ac9ffe2aef9c2e53934ce11889753a6c5d8388825c0c9975659b1cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0dd9fe5118b72f13a8ec6d9f553117faacc21978d78b0772ba062bcac04dbaf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd9fe5118b72f13a8ec6d9f553117faacc21978d78b0772ba062bcac04dbaf6->enter($__internal_0dd9fe5118b72f13a8ec6d9f553117faacc21978d78b0772ba062bcac04dbaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0dd9fe5118b72f13a8ec6d9f553117faacc21978d78b0772ba062bcac04dbaf6->leave($__internal_0dd9fe5118b72f13a8ec6d9f553117faacc21978d78b0772ba062bcac04dbaf6_prof);

        
        $__internal_b496def0ac9ffe2aef9c2e53934ce11889753a6c5d8388825c0c9975659b1cc0->leave($__internal_b496def0ac9ffe2aef9c2e53934ce11889753a6c5d8388825c0c9975659b1cc0_prof);

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
