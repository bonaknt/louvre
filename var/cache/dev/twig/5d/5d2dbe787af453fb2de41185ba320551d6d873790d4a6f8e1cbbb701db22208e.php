<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_649cf325d293eb08fed4cff990e14100a395158cefcbe1bf5513d8f974b450a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_d0c074d061f56cc6064d371ca41490cbeabd966e7b47e7a3064e362f9504214c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c074d061f56cc6064d371ca41490cbeabd966e7b47e7a3064e362f9504214c->enter($__internal_d0c074d061f56cc6064d371ca41490cbeabd966e7b47e7a3064e362f9504214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_47e21d8b4fec70b2001db7403b84087bfdd555cc1b52034a728ff8b8d39a20ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e21d8b4fec70b2001db7403b84087bfdd555cc1b52034a728ff8b8d39a20ae->enter($__internal_47e21d8b4fec70b2001db7403b84087bfdd555cc1b52034a728ff8b8d39a20ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c074d061f56cc6064d371ca41490cbeabd966e7b47e7a3064e362f9504214c->leave($__internal_d0c074d061f56cc6064d371ca41490cbeabd966e7b47e7a3064e362f9504214c_prof);

        
        $__internal_47e21d8b4fec70b2001db7403b84087bfdd555cc1b52034a728ff8b8d39a20ae->leave($__internal_47e21d8b4fec70b2001db7403b84087bfdd555cc1b52034a728ff8b8d39a20ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8a96e342096c9956cbd5edbe74e876e4c7b04bb0b48ab39e051ec6130faec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a96e342096c9956cbd5edbe74e876e4c7b04bb0b48ab39e051ec6130faec02->enter($__internal_e8a96e342096c9956cbd5edbe74e876e4c7b04bb0b48ab39e051ec6130faec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fec686d0c59820b638dfecad43da1007752f63efb35b0fcfcf650a7cddca28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fec686d0c59820b638dfecad43da1007752f63efb35b0fcfcf650a7cddca28b->enter($__internal_2fec686d0c59820b638dfecad43da1007752f63efb35b0fcfcf650a7cddca28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2fec686d0c59820b638dfecad43da1007752f63efb35b0fcfcf650a7cddca28b->leave($__internal_2fec686d0c59820b638dfecad43da1007752f63efb35b0fcfcf650a7cddca28b_prof);

        
        $__internal_e8a96e342096c9956cbd5edbe74e876e4c7b04bb0b48ab39e051ec6130faec02->leave($__internal_e8a96e342096c9956cbd5edbe74e876e4c7b04bb0b48ab39e051ec6130faec02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_070664e1c0f2671f9ca250ea021bf27660c9491edceaa087cb9784902f1167ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070664e1c0f2671f9ca250ea021bf27660c9491edceaa087cb9784902f1167ba->enter($__internal_070664e1c0f2671f9ca250ea021bf27660c9491edceaa087cb9784902f1167ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d2044aad14cc02c70651b83d0e43c0605f0b43e6f096bcd3ecc8f6cb6dab858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2044aad14cc02c70651b83d0e43c0605f0b43e6f096bcd3ecc8f6cb6dab858->enter($__internal_8d2044aad14cc02c70651b83d0e43c0605f0b43e6f096bcd3ecc8f6cb6dab858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d2044aad14cc02c70651b83d0e43c0605f0b43e6f096bcd3ecc8f6cb6dab858->leave($__internal_8d2044aad14cc02c70651b83d0e43c0605f0b43e6f096bcd3ecc8f6cb6dab858_prof);

        
        $__internal_070664e1c0f2671f9ca250ea021bf27660c9491edceaa087cb9784902f1167ba->leave($__internal_070664e1c0f2671f9ca250ea021bf27660c9491edceaa087cb9784902f1167ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
