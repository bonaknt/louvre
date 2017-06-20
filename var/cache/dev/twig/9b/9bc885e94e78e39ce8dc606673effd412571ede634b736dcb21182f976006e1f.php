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
        $__internal_ced57324483430c493f0ca61fe095be83c1abeaf04e75a0d96a9cd0317c6f1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced57324483430c493f0ca61fe095be83c1abeaf04e75a0d96a9cd0317c6f1c7->enter($__internal_ced57324483430c493f0ca61fe095be83c1abeaf04e75a0d96a9cd0317c6f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1a0aa6c1f6622532134fc154ead3b6cfbed992437c47b42752886ff0352da140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0aa6c1f6622532134fc154ead3b6cfbed992437c47b42752886ff0352da140->enter($__internal_1a0aa6c1f6622532134fc154ead3b6cfbed992437c47b42752886ff0352da140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced57324483430c493f0ca61fe095be83c1abeaf04e75a0d96a9cd0317c6f1c7->leave($__internal_ced57324483430c493f0ca61fe095be83c1abeaf04e75a0d96a9cd0317c6f1c7_prof);

        
        $__internal_1a0aa6c1f6622532134fc154ead3b6cfbed992437c47b42752886ff0352da140->leave($__internal_1a0aa6c1f6622532134fc154ead3b6cfbed992437c47b42752886ff0352da140_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b479dedec95bf2e04012a7cc231cff71d0c2a2b23bc7a883e847630911fdcb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b479dedec95bf2e04012a7cc231cff71d0c2a2b23bc7a883e847630911fdcb5->enter($__internal_8b479dedec95bf2e04012a7cc231cff71d0c2a2b23bc7a883e847630911fdcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a3fbf6050c0d0fb1797c5b2d40f6d4c2ca2f0df961fd79750edf98709c41e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3fbf6050c0d0fb1797c5b2d40f6d4c2ca2f0df961fd79750edf98709c41e8a->enter($__internal_3a3fbf6050c0d0fb1797c5b2d40f6d4c2ca2f0df961fd79750edf98709c41e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3a3fbf6050c0d0fb1797c5b2d40f6d4c2ca2f0df961fd79750edf98709c41e8a->leave($__internal_3a3fbf6050c0d0fb1797c5b2d40f6d4c2ca2f0df961fd79750edf98709c41e8a_prof);

        
        $__internal_8b479dedec95bf2e04012a7cc231cff71d0c2a2b23bc7a883e847630911fdcb5->leave($__internal_8b479dedec95bf2e04012a7cc231cff71d0c2a2b23bc7a883e847630911fdcb5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b577a46d01b5c9af38f074db47d987376c8fbeb7365fdf182b36056a2d02b0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b577a46d01b5c9af38f074db47d987376c8fbeb7365fdf182b36056a2d02b0e4->enter($__internal_b577a46d01b5c9af38f074db47d987376c8fbeb7365fdf182b36056a2d02b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b58e2f1b787a2db3282a7ad438a58473ebbb24994a04192c826a06b95691f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b58e2f1b787a2db3282a7ad438a58473ebbb24994a04192c826a06b95691f04->enter($__internal_9b58e2f1b787a2db3282a7ad438a58473ebbb24994a04192c826a06b95691f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b58e2f1b787a2db3282a7ad438a58473ebbb24994a04192c826a06b95691f04->leave($__internal_9b58e2f1b787a2db3282a7ad438a58473ebbb24994a04192c826a06b95691f04_prof);

        
        $__internal_b577a46d01b5c9af38f074db47d987376c8fbeb7365fdf182b36056a2d02b0e4->leave($__internal_b577a46d01b5c9af38f074db47d987376c8fbeb7365fdf182b36056a2d02b0e4_prof);

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
