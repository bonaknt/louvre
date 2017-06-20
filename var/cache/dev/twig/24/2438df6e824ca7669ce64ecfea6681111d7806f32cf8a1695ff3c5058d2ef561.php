<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7c3cafb5ecc430fbb05382cd7f7c0f07f1b6737e1396c2521085180870865ebd extends Twig_Template
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
        $__internal_af09f8a92137b2aa0999bf3096fe574aa94f3419e9f71c1ecf5dd1b6c065361e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af09f8a92137b2aa0999bf3096fe574aa94f3419e9f71c1ecf5dd1b6c065361e->enter($__internal_af09f8a92137b2aa0999bf3096fe574aa94f3419e9f71c1ecf5dd1b6c065361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a8266977a7f899de07853957c62a1a4bf0cfcb66108e6a0b613b5873ddc1a118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8266977a7f899de07853957c62a1a4bf0cfcb66108e6a0b613b5873ddc1a118->enter($__internal_a8266977a7f899de07853957c62a1a4bf0cfcb66108e6a0b613b5873ddc1a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_af09f8a92137b2aa0999bf3096fe574aa94f3419e9f71c1ecf5dd1b6c065361e->leave($__internal_af09f8a92137b2aa0999bf3096fe574aa94f3419e9f71c1ecf5dd1b6c065361e_prof);

        
        $__internal_a8266977a7f899de07853957c62a1a4bf0cfcb66108e6a0b613b5873ddc1a118->leave($__internal_a8266977a7f899de07853957c62a1a4bf0cfcb66108e6a0b613b5873ddc1a118_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
