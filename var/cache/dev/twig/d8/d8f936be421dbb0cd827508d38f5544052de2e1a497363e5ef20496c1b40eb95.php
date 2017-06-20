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
        $__internal_8475e6efc235a1751ade1e05747821d08b447a18f875bb909d39b2d71b444425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8475e6efc235a1751ade1e05747821d08b447a18f875bb909d39b2d71b444425->enter($__internal_8475e6efc235a1751ade1e05747821d08b447a18f875bb909d39b2d71b444425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8494b7a06ad1bea8f513965b66a025bd4807ebbae14c39380819470b5549ed3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8494b7a06ad1bea8f513965b66a025bd4807ebbae14c39380819470b5549ed3b->enter($__internal_8494b7a06ad1bea8f513965b66a025bd4807ebbae14c39380819470b5549ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8475e6efc235a1751ade1e05747821d08b447a18f875bb909d39b2d71b444425->leave($__internal_8475e6efc235a1751ade1e05747821d08b447a18f875bb909d39b2d71b444425_prof);

        
        $__internal_8494b7a06ad1bea8f513965b66a025bd4807ebbae14c39380819470b5549ed3b->leave($__internal_8494b7a06ad1bea8f513965b66a025bd4807ebbae14c39380819470b5549ed3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cbefbfc587c322a073c94f8765f9ccc1e9b626bbe033eec61831598e10e764a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbefbfc587c322a073c94f8765f9ccc1e9b626bbe033eec61831598e10e764a->enter($__internal_0cbefbfc587c322a073c94f8765f9ccc1e9b626bbe033eec61831598e10e764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_105e0d69deffadcf8f1f7535339ea711334dc576efb168d2ad60ef9e42d1c1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105e0d69deffadcf8f1f7535339ea711334dc576efb168d2ad60ef9e42d1c1df->enter($__internal_105e0d69deffadcf8f1f7535339ea711334dc576efb168d2ad60ef9e42d1c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_105e0d69deffadcf8f1f7535339ea711334dc576efb168d2ad60ef9e42d1c1df->leave($__internal_105e0d69deffadcf8f1f7535339ea711334dc576efb168d2ad60ef9e42d1c1df_prof);

        
        $__internal_0cbefbfc587c322a073c94f8765f9ccc1e9b626bbe033eec61831598e10e764a->leave($__internal_0cbefbfc587c322a073c94f8765f9ccc1e9b626bbe033eec61831598e10e764a_prof);

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
