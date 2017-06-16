<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_05a91322b87b5f7a96ca9797b6a9d8d3bf69663e971995ce848ed0c44289ebe0 extends Twig_Template
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
        $__internal_fea86a45033f5d52d1a83e03b412e61f69fce1b27dfc5591a931d8362c1a4036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea86a45033f5d52d1a83e03b412e61f69fce1b27dfc5591a931d8362c1a4036->enter($__internal_fea86a45033f5d52d1a83e03b412e61f69fce1b27dfc5591a931d8362c1a4036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9463b097e228118d1d5fb7955c0add287c38ef4f87a0a56b8f4e9b9207710c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9463b097e228118d1d5fb7955c0add287c38ef4f87a0a56b8f4e9b9207710c8b->enter($__internal_9463b097e228118d1d5fb7955c0add287c38ef4f87a0a56b8f4e9b9207710c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fea86a45033f5d52d1a83e03b412e61f69fce1b27dfc5591a931d8362c1a4036->leave($__internal_fea86a45033f5d52d1a83e03b412e61f69fce1b27dfc5591a931d8362c1a4036_prof);

        
        $__internal_9463b097e228118d1d5fb7955c0add287c38ef4f87a0a56b8f4e9b9207710c8b->leave($__internal_9463b097e228118d1d5fb7955c0add287c38ef4f87a0a56b8f4e9b9207710c8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
