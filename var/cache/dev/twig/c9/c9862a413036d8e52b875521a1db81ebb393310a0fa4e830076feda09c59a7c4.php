<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_f307fce9dceb2f37576b3a6f8ec15111cf802fdbbb435bb1bfcd2b1225c58baa extends Twig_Template
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
        $__internal_018244bac4aa409c9a36774381ddc8ab6a662c033b20f9b61350c299cba44d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018244bac4aa409c9a36774381ddc8ab6a662c033b20f9b61350c299cba44d61->enter($__internal_018244bac4aa409c9a36774381ddc8ab6a662c033b20f9b61350c299cba44d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_960921ad7d7772d332333218e8015fe82a731141547a03b12984234606a65de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960921ad7d7772d332333218e8015fe82a731141547a03b12984234606a65de6->enter($__internal_960921ad7d7772d332333218e8015fe82a731141547a03b12984234606a65de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018244bac4aa409c9a36774381ddc8ab6a662c033b20f9b61350c299cba44d61->leave($__internal_018244bac4aa409c9a36774381ddc8ab6a662c033b20f9b61350c299cba44d61_prof);

        
        $__internal_960921ad7d7772d332333218e8015fe82a731141547a03b12984234606a65de6->leave($__internal_960921ad7d7772d332333218e8015fe82a731141547a03b12984234606a65de6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf128f667b29c94ff4d6465622ddf720a78bb5afa27ff250cd22ecddd2e35cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf128f667b29c94ff4d6465622ddf720a78bb5afa27ff250cd22ecddd2e35cf8->enter($__internal_cf128f667b29c94ff4d6465622ddf720a78bb5afa27ff250cd22ecddd2e35cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1127b4302a586c2a0ceb6fb119f2ab7bc343b80be124d767370cd8b69a52da7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1127b4302a586c2a0ceb6fb119f2ab7bc343b80be124d767370cd8b69a52da7c->enter($__internal_1127b4302a586c2a0ceb6fb119f2ab7bc343b80be124d767370cd8b69a52da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1127b4302a586c2a0ceb6fb119f2ab7bc343b80be124d767370cd8b69a52da7c->leave($__internal_1127b4302a586c2a0ceb6fb119f2ab7bc343b80be124d767370cd8b69a52da7c_prof);

        
        $__internal_cf128f667b29c94ff4d6465622ddf720a78bb5afa27ff250cd22ecddd2e35cf8->leave($__internal_cf128f667b29c94ff4d6465622ddf720a78bb5afa27ff250cd22ecddd2e35cf8_prof);

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
