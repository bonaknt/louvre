<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e9d9ca4af59ba34e29753c08cfdbfce7dfe17edd15cfd7965bd74bc488ed6c22 extends Twig_Template
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
        $__internal_7abbfb198b9e10d814e0594022716fc88ff01bc79d0c890e88a2ce4742b9b6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abbfb198b9e10d814e0594022716fc88ff01bc79d0c890e88a2ce4742b9b6d2->enter($__internal_7abbfb198b9e10d814e0594022716fc88ff01bc79d0c890e88a2ce4742b9b6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a7f13903135e51985a7955282cca84381179bb20fc46ff749e4ce668ebbdfd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f13903135e51985a7955282cca84381179bb20fc46ff749e4ce668ebbdfd72->enter($__internal_a7f13903135e51985a7955282cca84381179bb20fc46ff749e4ce668ebbdfd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7abbfb198b9e10d814e0594022716fc88ff01bc79d0c890e88a2ce4742b9b6d2->leave($__internal_7abbfb198b9e10d814e0594022716fc88ff01bc79d0c890e88a2ce4742b9b6d2_prof);

        
        $__internal_a7f13903135e51985a7955282cca84381179bb20fc46ff749e4ce668ebbdfd72->leave($__internal_a7f13903135e51985a7955282cca84381179bb20fc46ff749e4ce668ebbdfd72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_526bada757f8bc730cec7964bbb6a760fc8802e6174b585fab85cc614d2ca56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526bada757f8bc730cec7964bbb6a760fc8802e6174b585fab85cc614d2ca56e->enter($__internal_526bada757f8bc730cec7964bbb6a760fc8802e6174b585fab85cc614d2ca56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff24418340c5f450f2be9a0dedb19867b802d52622b216b027a64da6f9670cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff24418340c5f450f2be9a0dedb19867b802d52622b216b027a64da6f9670cbb->enter($__internal_ff24418340c5f450f2be9a0dedb19867b802d52622b216b027a64da6f9670cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ff24418340c5f450f2be9a0dedb19867b802d52622b216b027a64da6f9670cbb->leave($__internal_ff24418340c5f450f2be9a0dedb19867b802d52622b216b027a64da6f9670cbb_prof);

        
        $__internal_526bada757f8bc730cec7964bbb6a760fc8802e6174b585fab85cc614d2ca56e->leave($__internal_526bada757f8bc730cec7964bbb6a760fc8802e6174b585fab85cc614d2ca56e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb50992c42cca28358477605604c5b061144731d38b2696613fc842b428cb98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb50992c42cca28358477605604c5b061144731d38b2696613fc842b428cb98f->enter($__internal_bb50992c42cca28358477605604c5b061144731d38b2696613fc842b428cb98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b2ebc6448e048edb7ab984852a149d98603e3032d7f205725642c1d9e9eb542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2ebc6448e048edb7ab984852a149d98603e3032d7f205725642c1d9e9eb542->enter($__internal_8b2ebc6448e048edb7ab984852a149d98603e3032d7f205725642c1d9e9eb542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b2ebc6448e048edb7ab984852a149d98603e3032d7f205725642c1d9e9eb542->leave($__internal_8b2ebc6448e048edb7ab984852a149d98603e3032d7f205725642c1d9e9eb542_prof);

        
        $__internal_bb50992c42cca28358477605604c5b061144731d38b2696613fc842b428cb98f->leave($__internal_bb50992c42cca28358477605604c5b061144731d38b2696613fc842b428cb98f_prof);

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
