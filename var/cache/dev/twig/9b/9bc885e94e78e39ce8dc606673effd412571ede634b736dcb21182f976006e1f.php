<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6ceda1ee69a6c7f6e75056cfdad10f1bc4d9ba129eed7ca7d9fc7a584d2c9790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_05bae25f71d78e4a6c8890c3e22a3e877066daecc1f2668589f29a1228bb7de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bae25f71d78e4a6c8890c3e22a3e877066daecc1f2668589f29a1228bb7de6->enter($__internal_05bae25f71d78e4a6c8890c3e22a3e877066daecc1f2668589f29a1228bb7de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_415262ba832c7689c47748835b01fb476e7da52be35ea8b523285d1b110c0f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415262ba832c7689c47748835b01fb476e7da52be35ea8b523285d1b110c0f6a->enter($__internal_415262ba832c7689c47748835b01fb476e7da52be35ea8b523285d1b110c0f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bae25f71d78e4a6c8890c3e22a3e877066daecc1f2668589f29a1228bb7de6->leave($__internal_05bae25f71d78e4a6c8890c3e22a3e877066daecc1f2668589f29a1228bb7de6_prof);

        
        $__internal_415262ba832c7689c47748835b01fb476e7da52be35ea8b523285d1b110c0f6a->leave($__internal_415262ba832c7689c47748835b01fb476e7da52be35ea8b523285d1b110c0f6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_297d55fb61931e1c4e42e89509b9e52a6a956e5c1c93c670bb9745db5d9c858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297d55fb61931e1c4e42e89509b9e52a6a956e5c1c93c670bb9745db5d9c858d->enter($__internal_297d55fb61931e1c4e42e89509b9e52a6a956e5c1c93c670bb9745db5d9c858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c02a3c006772910ba4763503295e0623fd1690cf3fed7ffe3fe6d966c7c29f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02a3c006772910ba4763503295e0623fd1690cf3fed7ffe3fe6d966c7c29f1f->enter($__internal_c02a3c006772910ba4763503295e0623fd1690cf3fed7ffe3fe6d966c7c29f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c02a3c006772910ba4763503295e0623fd1690cf3fed7ffe3fe6d966c7c29f1f->leave($__internal_c02a3c006772910ba4763503295e0623fd1690cf3fed7ffe3fe6d966c7c29f1f_prof);

        
        $__internal_297d55fb61931e1c4e42e89509b9e52a6a956e5c1c93c670bb9745db5d9c858d->leave($__internal_297d55fb61931e1c4e42e89509b9e52a6a956e5c1c93c670bb9745db5d9c858d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f53c8b3a152963bbac49e446c6319f0888f3489e8ffb6c0e8cdce20af92f277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f53c8b3a152963bbac49e446c6319f0888f3489e8ffb6c0e8cdce20af92f277->enter($__internal_2f53c8b3a152963bbac49e446c6319f0888f3489e8ffb6c0e8cdce20af92f277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bccab943258024f98e92e85b59a8e0059308c9805a29da732698ea1b14201bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bccab943258024f98e92e85b59a8e0059308c9805a29da732698ea1b14201bc->enter($__internal_2bccab943258024f98e92e85b59a8e0059308c9805a29da732698ea1b14201bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bccab943258024f98e92e85b59a8e0059308c9805a29da732698ea1b14201bc->leave($__internal_2bccab943258024f98e92e85b59a8e0059308c9805a29da732698ea1b14201bc_prof);

        
        $__internal_2f53c8b3a152963bbac49e446c6319f0888f3489e8ffb6c0e8cdce20af92f277->leave($__internal_2f53c8b3a152963bbac49e446c6319f0888f3489e8ffb6c0e8cdce20af92f277_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
