<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d955aedae47e8fb0101f9ea12fe85cec79b5d88bebef47e113edd8ce73236dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9504095c22b5e99c8caab868f614a07fdf0d03d210571b6f9da963078151fd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9504095c22b5e99c8caab868f614a07fdf0d03d210571b6f9da963078151fd1d->enter($__internal_9504095c22b5e99c8caab868f614a07fdf0d03d210571b6f9da963078151fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c741b221db191ef03fab336ddb239a4e2285a2a0887706f187ed0a80d3a630a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c741b221db191ef03fab336ddb239a4e2285a2a0887706f187ed0a80d3a630a5->enter($__internal_c741b221db191ef03fab336ddb239a4e2285a2a0887706f187ed0a80d3a630a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9504095c22b5e99c8caab868f614a07fdf0d03d210571b6f9da963078151fd1d->leave($__internal_9504095c22b5e99c8caab868f614a07fdf0d03d210571b6f9da963078151fd1d_prof);

        
        $__internal_c741b221db191ef03fab336ddb239a4e2285a2a0887706f187ed0a80d3a630a5->leave($__internal_c741b221db191ef03fab336ddb239a4e2285a2a0887706f187ed0a80d3a630a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
