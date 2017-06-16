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
        $__internal_c9af74a985214a434d948842a7d191b45b1ccd08913dd3f92e02c14bede94f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9af74a985214a434d948842a7d191b45b1ccd08913dd3f92e02c14bede94f2d->enter($__internal_c9af74a985214a434d948842a7d191b45b1ccd08913dd3f92e02c14bede94f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6c50d7abe1eac07e3164021cb6fb78f8c8f844aa9126d54c130b4ca08f782555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c50d7abe1eac07e3164021cb6fb78f8c8f844aa9126d54c130b4ca08f782555->enter($__internal_6c50d7abe1eac07e3164021cb6fb78f8c8f844aa9126d54c130b4ca08f782555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9af74a985214a434d948842a7d191b45b1ccd08913dd3f92e02c14bede94f2d->leave($__internal_c9af74a985214a434d948842a7d191b45b1ccd08913dd3f92e02c14bede94f2d_prof);

        
        $__internal_6c50d7abe1eac07e3164021cb6fb78f8c8f844aa9126d54c130b4ca08f782555->leave($__internal_6c50d7abe1eac07e3164021cb6fb78f8c8f844aa9126d54c130b4ca08f782555_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e240f5f3e5faf608c81ee4a9fb5ed29f7049e2c86a01705dfbabe3a335f2943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e240f5f3e5faf608c81ee4a9fb5ed29f7049e2c86a01705dfbabe3a335f2943->enter($__internal_5e240f5f3e5faf608c81ee4a9fb5ed29f7049e2c86a01705dfbabe3a335f2943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ee331935613043c408d000378119e6bd21965726b146bb47403c45311b3daf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee331935613043c408d000378119e6bd21965726b146bb47403c45311b3daf6->enter($__internal_9ee331935613043c408d000378119e6bd21965726b146bb47403c45311b3daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ee331935613043c408d000378119e6bd21965726b146bb47403c45311b3daf6->leave($__internal_9ee331935613043c408d000378119e6bd21965726b146bb47403c45311b3daf6_prof);

        
        $__internal_5e240f5f3e5faf608c81ee4a9fb5ed29f7049e2c86a01705dfbabe3a335f2943->leave($__internal_5e240f5f3e5faf608c81ee4a9fb5ed29f7049e2c86a01705dfbabe3a335f2943_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0722db2ee7ba2a7600438edc538517ef75d6f36e9b8349e32fda2b45caeeac5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0722db2ee7ba2a7600438edc538517ef75d6f36e9b8349e32fda2b45caeeac5e->enter($__internal_0722db2ee7ba2a7600438edc538517ef75d6f36e9b8349e32fda2b45caeeac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91ef2749bcdf9ca5a4d94671c1897532326c90d61aab4c5a06b9d7c0c2afa8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ef2749bcdf9ca5a4d94671c1897532326c90d61aab4c5a06b9d7c0c2afa8d2->enter($__internal_91ef2749bcdf9ca5a4d94671c1897532326c90d61aab4c5a06b9d7c0c2afa8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91ef2749bcdf9ca5a4d94671c1897532326c90d61aab4c5a06b9d7c0c2afa8d2->leave($__internal_91ef2749bcdf9ca5a4d94671c1897532326c90d61aab4c5a06b9d7c0c2afa8d2_prof);

        
        $__internal_0722db2ee7ba2a7600438edc538517ef75d6f36e9b8349e32fda2b45caeeac5e->leave($__internal_0722db2ee7ba2a7600438edc538517ef75d6f36e9b8349e32fda2b45caeeac5e_prof);

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
