<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_86f67dfd75c69f136e211fba8a17d400c7cbd61dc2239ea10887291e8d2bc146 extends Twig_Template
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
        $__internal_25d0da5e4b26e942af606fe2e218b88a4b9ed0b25c3c08692aadf9bef7c4288e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d0da5e4b26e942af606fe2e218b88a4b9ed0b25c3c08692aadf9bef7c4288e->enter($__internal_25d0da5e4b26e942af606fe2e218b88a4b9ed0b25c3c08692aadf9bef7c4288e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5d09a6c0bdd9ebe448cb9cdf68dd64b47179ecc9bd5aaea98c50dbfc77b55a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d09a6c0bdd9ebe448cb9cdf68dd64b47179ecc9bd5aaea98c50dbfc77b55a0d->enter($__internal_5d09a6c0bdd9ebe448cb9cdf68dd64b47179ecc9bd5aaea98c50dbfc77b55a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_25d0da5e4b26e942af606fe2e218b88a4b9ed0b25c3c08692aadf9bef7c4288e->leave($__internal_25d0da5e4b26e942af606fe2e218b88a4b9ed0b25c3c08692aadf9bef7c4288e_prof);

        
        $__internal_5d09a6c0bdd9ebe448cb9cdf68dd64b47179ecc9bd5aaea98c50dbfc77b55a0d->leave($__internal_5d09a6c0bdd9ebe448cb9cdf68dd64b47179ecc9bd5aaea98c50dbfc77b55a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
