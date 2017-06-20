<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7313edb382cd32c0f18b3afbd1c4a33527cd735b84dd57f13f086ae03fcd05a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_212796e30c49e7a2994d2caf437f6328ae60b48c24d895fed3cc58f096b427a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212796e30c49e7a2994d2caf437f6328ae60b48c24d895fed3cc58f096b427a1->enter($__internal_212796e30c49e7a2994d2caf437f6328ae60b48c24d895fed3cc58f096b427a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02ec1dcb880bc56aff7a552ab97f781b5b0aa79da95698ccb9aa5cb739dbc7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ec1dcb880bc56aff7a552ab97f781b5b0aa79da95698ccb9aa5cb739dbc7fb->enter($__internal_02ec1dcb880bc56aff7a552ab97f781b5b0aa79da95698ccb9aa5cb739dbc7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212796e30c49e7a2994d2caf437f6328ae60b48c24d895fed3cc58f096b427a1->leave($__internal_212796e30c49e7a2994d2caf437f6328ae60b48c24d895fed3cc58f096b427a1_prof);

        
        $__internal_02ec1dcb880bc56aff7a552ab97f781b5b0aa79da95698ccb9aa5cb739dbc7fb->leave($__internal_02ec1dcb880bc56aff7a552ab97f781b5b0aa79da95698ccb9aa5cb739dbc7fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f9be4c56b7c937d449a63da442e91795f9f35d1b503ce7e71b88ece03552ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9be4c56b7c937d449a63da442e91795f9f35d1b503ce7e71b88ece03552ea6->enter($__internal_0f9be4c56b7c937d449a63da442e91795f9f35d1b503ce7e71b88ece03552ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_505364f8c691b335fcb01ea1e1719083fa3e7bcadf7ff5b6c1b14b478042ab1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505364f8c691b335fcb01ea1e1719083fa3e7bcadf7ff5b6c1b14b478042ab1d->enter($__internal_505364f8c691b335fcb01ea1e1719083fa3e7bcadf7ff5b6c1b14b478042ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_505364f8c691b335fcb01ea1e1719083fa3e7bcadf7ff5b6c1b14b478042ab1d->leave($__internal_505364f8c691b335fcb01ea1e1719083fa3e7bcadf7ff5b6c1b14b478042ab1d_prof);

        
        $__internal_0f9be4c56b7c937d449a63da442e91795f9f35d1b503ce7e71b88ece03552ea6->leave($__internal_0f9be4c56b7c937d449a63da442e91795f9f35d1b503ce7e71b88ece03552ea6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0816cabb802ae35751ed9ae41f4f2be4d6b3425abe2fcd25807b81ac066fafe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0816cabb802ae35751ed9ae41f4f2be4d6b3425abe2fcd25807b81ac066fafe3->enter($__internal_0816cabb802ae35751ed9ae41f4f2be4d6b3425abe2fcd25807b81ac066fafe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70d02deb536cdcb733c4fdf8fda72df39c00bc27a1f508ebff421edb33b13b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d02deb536cdcb733c4fdf8fda72df39c00bc27a1f508ebff421edb33b13b5d->enter($__internal_70d02deb536cdcb733c4fdf8fda72df39c00bc27a1f508ebff421edb33b13b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_70d02deb536cdcb733c4fdf8fda72df39c00bc27a1f508ebff421edb33b13b5d->leave($__internal_70d02deb536cdcb733c4fdf8fda72df39c00bc27a1f508ebff421edb33b13b5d_prof);

        
        $__internal_0816cabb802ae35751ed9ae41f4f2be4d6b3425abe2fcd25807b81ac066fafe3->leave($__internal_0816cabb802ae35751ed9ae41f4f2be4d6b3425abe2fcd25807b81ac066fafe3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
