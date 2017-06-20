<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_439c8d88005e97c7740de9c6e5a8b88c77cbc88d8c1e6713aa3188b2e2f52551 extends Twig_Template
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
        $__internal_b0ff3b1fdf37b748fcb12861c2d8e565bee34a7c4f83bb056152f136afcd49f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ff3b1fdf37b748fcb12861c2d8e565bee34a7c4f83bb056152f136afcd49f4->enter($__internal_b0ff3b1fdf37b748fcb12861c2d8e565bee34a7c4f83bb056152f136afcd49f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_dbc33bc257ed33691cae6ff8f9bbfe2ac07b77732e1f2a4a858e2508c66b4a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc33bc257ed33691cae6ff8f9bbfe2ac07b77732e1f2a4a858e2508c66b4a68->enter($__internal_dbc33bc257ed33691cae6ff8f9bbfe2ac07b77732e1f2a4a858e2508c66b4a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b0ff3b1fdf37b748fcb12861c2d8e565bee34a7c4f83bb056152f136afcd49f4->leave($__internal_b0ff3b1fdf37b748fcb12861c2d8e565bee34a7c4f83bb056152f136afcd49f4_prof);

        
        $__internal_dbc33bc257ed33691cae6ff8f9bbfe2ac07b77732e1f2a4a858e2508c66b4a68->leave($__internal_dbc33bc257ed33691cae6ff8f9bbfe2ac07b77732e1f2a4a858e2508c66b4a68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
