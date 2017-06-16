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
        $__internal_973821bfd139c0efce7809ecde94eb295d88f6e2b144a09132967ffde66cc16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973821bfd139c0efce7809ecde94eb295d88f6e2b144a09132967ffde66cc16e->enter($__internal_973821bfd139c0efce7809ecde94eb295d88f6e2b144a09132967ffde66cc16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_9e35134cd0c27835f05f1b279ddee09fa35e72362e6ecde8d311f9e94d322fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e35134cd0c27835f05f1b279ddee09fa35e72362e6ecde8d311f9e94d322fb6->enter($__internal_9e35134cd0c27835f05f1b279ddee09fa35e72362e6ecde8d311f9e94d322fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_973821bfd139c0efce7809ecde94eb295d88f6e2b144a09132967ffde66cc16e->leave($__internal_973821bfd139c0efce7809ecde94eb295d88f6e2b144a09132967ffde66cc16e_prof);

        
        $__internal_9e35134cd0c27835f05f1b279ddee09fa35e72362e6ecde8d311f9e94d322fb6->leave($__internal_9e35134cd0c27835f05f1b279ddee09fa35e72362e6ecde8d311f9e94d322fb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d39fcc9bf7ef0bc51c98948b155bdf7cb90bf3a6f08f3035e6038ae734c2da11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39fcc9bf7ef0bc51c98948b155bdf7cb90bf3a6f08f3035e6038ae734c2da11->enter($__internal_d39fcc9bf7ef0bc51c98948b155bdf7cb90bf3a6f08f3035e6038ae734c2da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c38be551b138a602ce1e960a5883f48d1cf7a29187dd596c5b8720768f2be26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38be551b138a602ce1e960a5883f48d1cf7a29187dd596c5b8720768f2be26f->enter($__internal_c38be551b138a602ce1e960a5883f48d1cf7a29187dd596c5b8720768f2be26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c38be551b138a602ce1e960a5883f48d1cf7a29187dd596c5b8720768f2be26f->leave($__internal_c38be551b138a602ce1e960a5883f48d1cf7a29187dd596c5b8720768f2be26f_prof);

        
        $__internal_d39fcc9bf7ef0bc51c98948b155bdf7cb90bf3a6f08f3035e6038ae734c2da11->leave($__internal_d39fcc9bf7ef0bc51c98948b155bdf7cb90bf3a6f08f3035e6038ae734c2da11_prof);

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
