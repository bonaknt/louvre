<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_22c639aca54f3a4e259d4f54b394460df527237147be94af9c8393f211a20749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4f0d968529c811e9c045ac4ab7c34070b17e997b77404f481c129d68d82ab00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f0d968529c811e9c045ac4ab7c34070b17e997b77404f481c129d68d82ab00->enter($__internal_f4f0d968529c811e9c045ac4ab7c34070b17e997b77404f481c129d68d82ab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cb0ab95271b92adcaff66b42ed10bb7f35a058aad02338c8f674be5f10931990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0ab95271b92adcaff66b42ed10bb7f35a058aad02338c8f674be5f10931990->enter($__internal_cb0ab95271b92adcaff66b42ed10bb7f35a058aad02338c8f674be5f10931990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f0d968529c811e9c045ac4ab7c34070b17e997b77404f481c129d68d82ab00->leave($__internal_f4f0d968529c811e9c045ac4ab7c34070b17e997b77404f481c129d68d82ab00_prof);

        
        $__internal_cb0ab95271b92adcaff66b42ed10bb7f35a058aad02338c8f674be5f10931990->leave($__internal_cb0ab95271b92adcaff66b42ed10bb7f35a058aad02338c8f674be5f10931990_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e60351899873fda8710722be0ae7d33154f87dc3212f7a6b72910bbc8a9f09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e60351899873fda8710722be0ae7d33154f87dc3212f7a6b72910bbc8a9f09c->enter($__internal_3e60351899873fda8710722be0ae7d33154f87dc3212f7a6b72910bbc8a9f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1ab1844f52c7c6e9fecb9e5c71efeb8de9cc7951a2e574ac7068c65c8e9054b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ab1844f52c7c6e9fecb9e5c71efeb8de9cc7951a2e574ac7068c65c8e9054b->enter($__internal_d1ab1844f52c7c6e9fecb9e5c71efeb8de9cc7951a2e574ac7068c65c8e9054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d1ab1844f52c7c6e9fecb9e5c71efeb8de9cc7951a2e574ac7068c65c8e9054b->leave($__internal_d1ab1844f52c7c6e9fecb9e5c71efeb8de9cc7951a2e574ac7068c65c8e9054b_prof);

        
        $__internal_3e60351899873fda8710722be0ae7d33154f87dc3212f7a6b72910bbc8a9f09c->leave($__internal_3e60351899873fda8710722be0ae7d33154f87dc3212f7a6b72910bbc8a9f09c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99372b11a3479a3e093dbd8e5ad9fa32572b917c9903a620fb9fcac5d5f9834e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99372b11a3479a3e093dbd8e5ad9fa32572b917c9903a620fb9fcac5d5f9834e->enter($__internal_99372b11a3479a3e093dbd8e5ad9fa32572b917c9903a620fb9fcac5d5f9834e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d57ea15bb7f9772cf5255ea7548c1a8ddfc8debfa50d7cc3c8d6d518e71bd4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57ea15bb7f9772cf5255ea7548c1a8ddfc8debfa50d7cc3c8d6d518e71bd4dc->enter($__internal_d57ea15bb7f9772cf5255ea7548c1a8ddfc8debfa50d7cc3c8d6d518e71bd4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d57ea15bb7f9772cf5255ea7548c1a8ddfc8debfa50d7cc3c8d6d518e71bd4dc->leave($__internal_d57ea15bb7f9772cf5255ea7548c1a8ddfc8debfa50d7cc3c8d6d518e71bd4dc_prof);

        
        $__internal_99372b11a3479a3e093dbd8e5ad9fa32572b917c9903a620fb9fcac5d5f9834e->leave($__internal_99372b11a3479a3e093dbd8e5ad9fa32572b917c9903a620fb9fcac5d5f9834e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
