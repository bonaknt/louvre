<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e0a697aa50b4fe2e6747d6564ee12bdda2a0dc7adb352fd622448dafad010e6b extends Twig_Template
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
        $__internal_044de4dbe1a74fd71ad1790355e81b6b97e2b26e9dd16ef5a66a6a8e966c1407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044de4dbe1a74fd71ad1790355e81b6b97e2b26e9dd16ef5a66a6a8e966c1407->enter($__internal_044de4dbe1a74fd71ad1790355e81b6b97e2b26e9dd16ef5a66a6a8e966c1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a2b3f3295d544ede7b948d0a14f3180db56731bc801f23a726e6ee0256ff4c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b3f3295d544ede7b948d0a14f3180db56731bc801f23a726e6ee0256ff4c12->enter($__internal_a2b3f3295d544ede7b948d0a14f3180db56731bc801f23a726e6ee0256ff4c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_044de4dbe1a74fd71ad1790355e81b6b97e2b26e9dd16ef5a66a6a8e966c1407->leave($__internal_044de4dbe1a74fd71ad1790355e81b6b97e2b26e9dd16ef5a66a6a8e966c1407_prof);

        
        $__internal_a2b3f3295d544ede7b948d0a14f3180db56731bc801f23a726e6ee0256ff4c12->leave($__internal_a2b3f3295d544ede7b948d0a14f3180db56731bc801f23a726e6ee0256ff4c12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
