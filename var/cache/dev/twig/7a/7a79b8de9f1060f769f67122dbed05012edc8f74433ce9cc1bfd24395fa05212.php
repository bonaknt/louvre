<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9a37ad8ddc3020dafa241d65b7f92c049acf411addc3fdb58c1f927a77adf5a8 extends Twig_Template
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
        $__internal_6ce2f1d7bfdc01fbe7338ab514e700e033f9161399e7e5c7df5854d782c9efee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce2f1d7bfdc01fbe7338ab514e700e033f9161399e7e5c7df5854d782c9efee->enter($__internal_6ce2f1d7bfdc01fbe7338ab514e700e033f9161399e7e5c7df5854d782c9efee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_680d8a1fde8ba1d2d1d400724358cb34659d28a87e00bb0f89a1b9d8d1cccd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680d8a1fde8ba1d2d1d400724358cb34659d28a87e00bb0f89a1b9d8d1cccd32->enter($__internal_680d8a1fde8ba1d2d1d400724358cb34659d28a87e00bb0f89a1b9d8d1cccd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ce2f1d7bfdc01fbe7338ab514e700e033f9161399e7e5c7df5854d782c9efee->leave($__internal_6ce2f1d7bfdc01fbe7338ab514e700e033f9161399e7e5c7df5854d782c9efee_prof);

        
        $__internal_680d8a1fde8ba1d2d1d400724358cb34659d28a87e00bb0f89a1b9d8d1cccd32->leave($__internal_680d8a1fde8ba1d2d1d400724358cb34659d28a87e00bb0f89a1b9d8d1cccd32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
