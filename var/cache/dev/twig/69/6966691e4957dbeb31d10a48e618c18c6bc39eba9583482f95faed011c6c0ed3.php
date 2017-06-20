<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_a352c8714979929763be5842636844fbd10495d0b3d77984bc90eda5fd42263e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_0e52e9e13eeb86cbcc975948b34fbbf7aeae00aa5bfc97f53e147ef03a9992f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e52e9e13eeb86cbcc975948b34fbbf7aeae00aa5bfc97f53e147ef03a9992f6->enter($__internal_0e52e9e13eeb86cbcc975948b34fbbf7aeae00aa5bfc97f53e147ef03a9992f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_be3eca5a8ce97f0593f9d88d2e547cb204b418d7f47f5040c4302419f3ed5587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3eca5a8ce97f0593f9d88d2e547cb204b418d7f47f5040c4302419f3ed5587->enter($__internal_be3eca5a8ce97f0593f9d88d2e547cb204b418d7f47f5040c4302419f3ed5587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e52e9e13eeb86cbcc975948b34fbbf7aeae00aa5bfc97f53e147ef03a9992f6->leave($__internal_0e52e9e13eeb86cbcc975948b34fbbf7aeae00aa5bfc97f53e147ef03a9992f6_prof);

        
        $__internal_be3eca5a8ce97f0593f9d88d2e547cb204b418d7f47f5040c4302419f3ed5587->leave($__internal_be3eca5a8ce97f0593f9d88d2e547cb204b418d7f47f5040c4302419f3ed5587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_192fffbdff256a314128cc7f3582684c75e32a2c28b12d71d780f038d0ea8d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192fffbdff256a314128cc7f3582684c75e32a2c28b12d71d780f038d0ea8d35->enter($__internal_192fffbdff256a314128cc7f3582684c75e32a2c28b12d71d780f038d0ea8d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b5b9dfe8403a0ad6390afe2405f92cea2306954f47b747d4b9b94d17b8016fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b9dfe8403a0ad6390afe2405f92cea2306954f47b747d4b9b94d17b8016fc4->enter($__internal_b5b9dfe8403a0ad6390afe2405f92cea2306954f47b747d4b9b94d17b8016fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b5b9dfe8403a0ad6390afe2405f92cea2306954f47b747d4b9b94d17b8016fc4->leave($__internal_b5b9dfe8403a0ad6390afe2405f92cea2306954f47b747d4b9b94d17b8016fc4_prof);

        
        $__internal_192fffbdff256a314128cc7f3582684c75e32a2c28b12d71d780f038d0ea8d35->leave($__internal_192fffbdff256a314128cc7f3582684c75e32a2c28b12d71d780f038d0ea8d35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
