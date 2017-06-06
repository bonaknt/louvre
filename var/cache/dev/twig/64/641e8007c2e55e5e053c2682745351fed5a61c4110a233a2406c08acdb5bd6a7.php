<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_067f4e2b1ed9b8fc8579ebafbadba23a6828395efefd8dffe93e2372d6164a9d extends Twig_Template
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
        $__internal_e6570888494f50c9176e56eafb870ce1ef9af68d4a24f75636da374021de92fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6570888494f50c9176e56eafb870ce1ef9af68d4a24f75636da374021de92fa->enter($__internal_e6570888494f50c9176e56eafb870ce1ef9af68d4a24f75636da374021de92fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d1e4d248fd0412e3dbfe76165c18ddb6f2277e81a9943d9f7138695564ab8c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e4d248fd0412e3dbfe76165c18ddb6f2277e81a9943d9f7138695564ab8c7d->enter($__internal_d1e4d248fd0412e3dbfe76165c18ddb6f2277e81a9943d9f7138695564ab8c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6570888494f50c9176e56eafb870ce1ef9af68d4a24f75636da374021de92fa->leave($__internal_e6570888494f50c9176e56eafb870ce1ef9af68d4a24f75636da374021de92fa_prof);

        
        $__internal_d1e4d248fd0412e3dbfe76165c18ddb6f2277e81a9943d9f7138695564ab8c7d->leave($__internal_d1e4d248fd0412e3dbfe76165c18ddb6f2277e81a9943d9f7138695564ab8c7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7484185ba2312f905904fde756fdfd78ff823aa4c06e5f7af94accd96b81143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7484185ba2312f905904fde756fdfd78ff823aa4c06e5f7af94accd96b81143->enter($__internal_a7484185ba2312f905904fde756fdfd78ff823aa4c06e5f7af94accd96b81143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40964dc8132c7a165fc8574952346fc41dd3ef80fd095901d289e6179afa4f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40964dc8132c7a165fc8574952346fc41dd3ef80fd095901d289e6179afa4f26->enter($__internal_40964dc8132c7a165fc8574952346fc41dd3ef80fd095901d289e6179afa4f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_40964dc8132c7a165fc8574952346fc41dd3ef80fd095901d289e6179afa4f26->leave($__internal_40964dc8132c7a165fc8574952346fc41dd3ef80fd095901d289e6179afa4f26_prof);

        
        $__internal_a7484185ba2312f905904fde756fdfd78ff823aa4c06e5f7af94accd96b81143->leave($__internal_a7484185ba2312f905904fde756fdfd78ff823aa4c06e5f7af94accd96b81143_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62b1b0eef0c49d56f0a5a36c31a8434cffec5b5bd7c7d10a833cb7aeb2872398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b1b0eef0c49d56f0a5a36c31a8434cffec5b5bd7c7d10a833cb7aeb2872398->enter($__internal_62b1b0eef0c49d56f0a5a36c31a8434cffec5b5bd7c7d10a833cb7aeb2872398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd784239e0ea8522b47a5cde7f22f3f6de9ef87e340d7380f04772a096c3294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd784239e0ea8522b47a5cde7f22f3f6de9ef87e340d7380f04772a096c3294->enter($__internal_edd784239e0ea8522b47a5cde7f22f3f6de9ef87e340d7380f04772a096c3294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_edd784239e0ea8522b47a5cde7f22f3f6de9ef87e340d7380f04772a096c3294->leave($__internal_edd784239e0ea8522b47a5cde7f22f3f6de9ef87e340d7380f04772a096c3294_prof);

        
        $__internal_62b1b0eef0c49d56f0a5a36c31a8434cffec5b5bd7c7d10a833cb7aeb2872398->leave($__internal_62b1b0eef0c49d56f0a5a36c31a8434cffec5b5bd7c7d10a833cb7aeb2872398_prof);

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
