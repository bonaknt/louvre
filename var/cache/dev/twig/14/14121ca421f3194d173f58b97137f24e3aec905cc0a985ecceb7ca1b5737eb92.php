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
        $__internal_1eef862c51b00e9f33e208ab573dacafda540ee63b22e6b6f0b9dec847556d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eef862c51b00e9f33e208ab573dacafda540ee63b22e6b6f0b9dec847556d3c->enter($__internal_1eef862c51b00e9f33e208ab573dacafda540ee63b22e6b6f0b9dec847556d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e38351febdcb5c3b3232563c14971ebb422b78baf7714a1fae0c547fc27c9d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38351febdcb5c3b3232563c14971ebb422b78baf7714a1fae0c547fc27c9d9e->enter($__internal_e38351febdcb5c3b3232563c14971ebb422b78baf7714a1fae0c547fc27c9d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1eef862c51b00e9f33e208ab573dacafda540ee63b22e6b6f0b9dec847556d3c->leave($__internal_1eef862c51b00e9f33e208ab573dacafda540ee63b22e6b6f0b9dec847556d3c_prof);

        
        $__internal_e38351febdcb5c3b3232563c14971ebb422b78baf7714a1fae0c547fc27c9d9e->leave($__internal_e38351febdcb5c3b3232563c14971ebb422b78baf7714a1fae0c547fc27c9d9e_prof);

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
