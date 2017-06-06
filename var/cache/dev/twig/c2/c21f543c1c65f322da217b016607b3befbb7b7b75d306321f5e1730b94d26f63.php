<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_177831e99c5b3a5b501f4702f78f3a5abcf0c8415b4f7e3b8358ccad4558e1c9 extends Twig_Template
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
        $__internal_63d5ba6f7d3468e0bea0d8a08efb98de49e1cfdebd76ffabad8a9b5722d830e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d5ba6f7d3468e0bea0d8a08efb98de49e1cfdebd76ffabad8a9b5722d830e2->enter($__internal_63d5ba6f7d3468e0bea0d8a08efb98de49e1cfdebd76ffabad8a9b5722d830e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f0cae109e09d569f95ebe92af942344b6fd5ade60a45d9a6b9d3d63181259c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cae109e09d569f95ebe92af942344b6fd5ade60a45d9a6b9d3d63181259c01->enter($__internal_f0cae109e09d569f95ebe92af942344b6fd5ade60a45d9a6b9d3d63181259c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_63d5ba6f7d3468e0bea0d8a08efb98de49e1cfdebd76ffabad8a9b5722d830e2->leave($__internal_63d5ba6f7d3468e0bea0d8a08efb98de49e1cfdebd76ffabad8a9b5722d830e2_prof);

        
        $__internal_f0cae109e09d569f95ebe92af942344b6fd5ade60a45d9a6b9d3d63181259c01->leave($__internal_f0cae109e09d569f95ebe92af942344b6fd5ade60a45d9a6b9d3d63181259c01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
