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
        $__internal_89802b23040d8cd603494e241692f9a001d6549e74b1e05ec3edf9886fab4475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89802b23040d8cd603494e241692f9a001d6549e74b1e05ec3edf9886fab4475->enter($__internal_89802b23040d8cd603494e241692f9a001d6549e74b1e05ec3edf9886fab4475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5cd9c0dcf975e41685548323ae8e28bfec913290a4676a38455faaa6ae53db97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd9c0dcf975e41685548323ae8e28bfec913290a4676a38455faaa6ae53db97->enter($__internal_5cd9c0dcf975e41685548323ae8e28bfec913290a4676a38455faaa6ae53db97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_89802b23040d8cd603494e241692f9a001d6549e74b1e05ec3edf9886fab4475->leave($__internal_89802b23040d8cd603494e241692f9a001d6549e74b1e05ec3edf9886fab4475_prof);

        
        $__internal_5cd9c0dcf975e41685548323ae8e28bfec913290a4676a38455faaa6ae53db97->leave($__internal_5cd9c0dcf975e41685548323ae8e28bfec913290a4676a38455faaa6ae53db97_prof);

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
