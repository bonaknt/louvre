<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3f5e4f6bb3bfba5be3fa4f450f482a259cef229b7d427a8b66259f4b5c103a3f extends Twig_Template
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
        $__internal_2f711b8993c6b60ef738cb888fa59de88b46c3d7ce38571c2421a5bec6e8a7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f711b8993c6b60ef738cb888fa59de88b46c3d7ce38571c2421a5bec6e8a7c6->enter($__internal_2f711b8993c6b60ef738cb888fa59de88b46c3d7ce38571c2421a5bec6e8a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_ab8a2004a5170e4b007e0a19c8edfeed368aeb088f7f1c24bd3b383db753c22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8a2004a5170e4b007e0a19c8edfeed368aeb088f7f1c24bd3b383db753c22d->enter($__internal_ab8a2004a5170e4b007e0a19c8edfeed368aeb088f7f1c24bd3b383db753c22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f711b8993c6b60ef738cb888fa59de88b46c3d7ce38571c2421a5bec6e8a7c6->leave($__internal_2f711b8993c6b60ef738cb888fa59de88b46c3d7ce38571c2421a5bec6e8a7c6_prof);

        
        $__internal_ab8a2004a5170e4b007e0a19c8edfeed368aeb088f7f1c24bd3b383db753c22d->leave($__internal_ab8a2004a5170e4b007e0a19c8edfeed368aeb088f7f1c24bd3b383db753c22d_prof);

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
