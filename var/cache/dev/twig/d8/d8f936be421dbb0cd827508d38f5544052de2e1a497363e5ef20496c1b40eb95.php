<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ad00472b8b1cd09d3976fdd8df78d3b8cd5628555226a3aa6f038d3f93215f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a3ef213ea1e7bd812da4d53e0ce4785936bf4a36b2ecc27fd097805cb26fdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3ef213ea1e7bd812da4d53e0ce4785936bf4a36b2ecc27fd097805cb26fdf6->enter($__internal_9a3ef213ea1e7bd812da4d53e0ce4785936bf4a36b2ecc27fd097805cb26fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8e14f82bbe7a724ada13c57407effb5d0a98b29287da2bd317a047c5a8bfbc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e14f82bbe7a724ada13c57407effb5d0a98b29287da2bd317a047c5a8bfbc2d->enter($__internal_8e14f82bbe7a724ada13c57407effb5d0a98b29287da2bd317a047c5a8bfbc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3ef213ea1e7bd812da4d53e0ce4785936bf4a36b2ecc27fd097805cb26fdf6->leave($__internal_9a3ef213ea1e7bd812da4d53e0ce4785936bf4a36b2ecc27fd097805cb26fdf6_prof);

        
        $__internal_8e14f82bbe7a724ada13c57407effb5d0a98b29287da2bd317a047c5a8bfbc2d->leave($__internal_8e14f82bbe7a724ada13c57407effb5d0a98b29287da2bd317a047c5a8bfbc2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1a9032f0c17f2515ee53f11daa3de85399899a951372e6600164e05469cd43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a9032f0c17f2515ee53f11daa3de85399899a951372e6600164e05469cd43a->enter($__internal_b1a9032f0c17f2515ee53f11daa3de85399899a951372e6600164e05469cd43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8be51f078ddc7c980e4b26459d5d0498cdfa70f7a574706fabd5766969c1f2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be51f078ddc7c980e4b26459d5d0498cdfa70f7a574706fabd5766969c1f2aa->enter($__internal_8be51f078ddc7c980e4b26459d5d0498cdfa70f7a574706fabd5766969c1f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8be51f078ddc7c980e4b26459d5d0498cdfa70f7a574706fabd5766969c1f2aa->leave($__internal_8be51f078ddc7c980e4b26459d5d0498cdfa70f7a574706fabd5766969c1f2aa_prof);

        
        $__internal_b1a9032f0c17f2515ee53f11daa3de85399899a951372e6600164e05469cd43a->leave($__internal_b1a9032f0c17f2515ee53f11daa3de85399899a951372e6600164e05469cd43a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
