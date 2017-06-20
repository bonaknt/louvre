<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2db8d917cf964be2307258c0343c4e1d5a71fba700c004d8bdedd924c1bb8c57 extends Twig_Template
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
        $__internal_a1fdf39299cb692f1ad25838e256a3bca8b3a4f554b2358aadb699100d2369eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1fdf39299cb692f1ad25838e256a3bca8b3a4f554b2358aadb699100d2369eb->enter($__internal_a1fdf39299cb692f1ad25838e256a3bca8b3a4f554b2358aadb699100d2369eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a3fb5685a7f236c68b96f99c5e93a69e051c5fd9414a8c5a457a0e65e6ed16ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fb5685a7f236c68b96f99c5e93a69e051c5fd9414a8c5a457a0e65e6ed16ae->enter($__internal_a3fb5685a7f236c68b96f99c5e93a69e051c5fd9414a8c5a457a0e65e6ed16ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fdf39299cb692f1ad25838e256a3bca8b3a4f554b2358aadb699100d2369eb->leave($__internal_a1fdf39299cb692f1ad25838e256a3bca8b3a4f554b2358aadb699100d2369eb_prof);

        
        $__internal_a3fb5685a7f236c68b96f99c5e93a69e051c5fd9414a8c5a457a0e65e6ed16ae->leave($__internal_a3fb5685a7f236c68b96f99c5e93a69e051c5fd9414a8c5a457a0e65e6ed16ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1f1a69e374a6c9e46b26766fd99846201154a77a0fc1cf0cf571ad5cf42a3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f1a69e374a6c9e46b26766fd99846201154a77a0fc1cf0cf571ad5cf42a3c5->enter($__internal_d1f1a69e374a6c9e46b26766fd99846201154a77a0fc1cf0cf571ad5cf42a3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ec6dba249f84f11d5ed6d4ef312818ad58a171c9f64fa6bd9a6e86b1bae69df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec6dba249f84f11d5ed6d4ef312818ad58a171c9f64fa6bd9a6e86b1bae69df->enter($__internal_1ec6dba249f84f11d5ed6d4ef312818ad58a171c9f64fa6bd9a6e86b1bae69df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1ec6dba249f84f11d5ed6d4ef312818ad58a171c9f64fa6bd9a6e86b1bae69df->leave($__internal_1ec6dba249f84f11d5ed6d4ef312818ad58a171c9f64fa6bd9a6e86b1bae69df_prof);

        
        $__internal_d1f1a69e374a6c9e46b26766fd99846201154a77a0fc1cf0cf571ad5cf42a3c5->leave($__internal_d1f1a69e374a6c9e46b26766fd99846201154a77a0fc1cf0cf571ad5cf42a3c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d727de7dddec71e77901667c889d767d30274d3caae2d04d3ccf45cf4176e7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d727de7dddec71e77901667c889d767d30274d3caae2d04d3ccf45cf4176e7df->enter($__internal_d727de7dddec71e77901667c889d767d30274d3caae2d04d3ccf45cf4176e7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_042ff29e7b7ac9391eb679e56989c5022968698035ef33a94db8dfeae7021361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042ff29e7b7ac9391eb679e56989c5022968698035ef33a94db8dfeae7021361->enter($__internal_042ff29e7b7ac9391eb679e56989c5022968698035ef33a94db8dfeae7021361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_042ff29e7b7ac9391eb679e56989c5022968698035ef33a94db8dfeae7021361->leave($__internal_042ff29e7b7ac9391eb679e56989c5022968698035ef33a94db8dfeae7021361_prof);

        
        $__internal_d727de7dddec71e77901667c889d767d30274d3caae2d04d3ccf45cf4176e7df->leave($__internal_d727de7dddec71e77901667c889d767d30274d3caae2d04d3ccf45cf4176e7df_prof);

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
