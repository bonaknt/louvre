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
        $__internal_61a8cdb7c08e6941d1952373b158452a05746c318bef3c12504367ffeffe7151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a8cdb7c08e6941d1952373b158452a05746c318bef3c12504367ffeffe7151->enter($__internal_61a8cdb7c08e6941d1952373b158452a05746c318bef3c12504367ffeffe7151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_24d0a80397bc08a904abbba62aaed0c1184940b1c35f5afba1ae8cbb8f5c6a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d0a80397bc08a904abbba62aaed0c1184940b1c35f5afba1ae8cbb8f5c6a8a->enter($__internal_24d0a80397bc08a904abbba62aaed0c1184940b1c35f5afba1ae8cbb8f5c6a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a8cdb7c08e6941d1952373b158452a05746c318bef3c12504367ffeffe7151->leave($__internal_61a8cdb7c08e6941d1952373b158452a05746c318bef3c12504367ffeffe7151_prof);

        
        $__internal_24d0a80397bc08a904abbba62aaed0c1184940b1c35f5afba1ae8cbb8f5c6a8a->leave($__internal_24d0a80397bc08a904abbba62aaed0c1184940b1c35f5afba1ae8cbb8f5c6a8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_affcecd460e1d70ae4fda2952cbb0e9dbdc89faf477245df32f424c52a360154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affcecd460e1d70ae4fda2952cbb0e9dbdc89faf477245df32f424c52a360154->enter($__internal_affcecd460e1d70ae4fda2952cbb0e9dbdc89faf477245df32f424c52a360154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f76b9c7508dfd82b0655a892e43cc842293b74b62fd7079322ba715e6796d706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76b9c7508dfd82b0655a892e43cc842293b74b62fd7079322ba715e6796d706->enter($__internal_f76b9c7508dfd82b0655a892e43cc842293b74b62fd7079322ba715e6796d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f76b9c7508dfd82b0655a892e43cc842293b74b62fd7079322ba715e6796d706->leave($__internal_f76b9c7508dfd82b0655a892e43cc842293b74b62fd7079322ba715e6796d706_prof);

        
        $__internal_affcecd460e1d70ae4fda2952cbb0e9dbdc89faf477245df32f424c52a360154->leave($__internal_affcecd460e1d70ae4fda2952cbb0e9dbdc89faf477245df32f424c52a360154_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a283720c09dfd70b7983c786d9cef3f43c4441453c36b1f63a941ba58f6a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a283720c09dfd70b7983c786d9cef3f43c4441453c36b1f63a941ba58f6a0a->enter($__internal_c0a283720c09dfd70b7983c786d9cef3f43c4441453c36b1f63a941ba58f6a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5997565cb93b6d9e3597bf6c3a9dbe877f206e70a6251ffdf0562b003e5e4d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5997565cb93b6d9e3597bf6c3a9dbe877f206e70a6251ffdf0562b003e5e4d86->enter($__internal_5997565cb93b6d9e3597bf6c3a9dbe877f206e70a6251ffdf0562b003e5e4d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5997565cb93b6d9e3597bf6c3a9dbe877f206e70a6251ffdf0562b003e5e4d86->leave($__internal_5997565cb93b6d9e3597bf6c3a9dbe877f206e70a6251ffdf0562b003e5e4d86_prof);

        
        $__internal_c0a283720c09dfd70b7983c786d9cef3f43c4441453c36b1f63a941ba58f6a0a->leave($__internal_c0a283720c09dfd70b7983c786d9cef3f43c4441453c36b1f63a941ba58f6a0a_prof);

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
