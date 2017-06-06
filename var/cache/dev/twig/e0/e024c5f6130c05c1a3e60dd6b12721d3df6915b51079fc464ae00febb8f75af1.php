<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_97b62ca6e9106649548a2a2803ed3ead9fb0fc02d44502d10e2d9eb461ff47fd extends Twig_Template
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
        $__internal_37a8fe018b19ec1a114918b50baa25a01ee4e5d7ed04f15b74dcacfb52a81fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a8fe018b19ec1a114918b50baa25a01ee4e5d7ed04f15b74dcacfb52a81fe9->enter($__internal_37a8fe018b19ec1a114918b50baa25a01ee4e5d7ed04f15b74dcacfb52a81fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7a1079e9744a870a8d3dfff8fdee8db6914c5da966f8bc51aa451342e981ebdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1079e9744a870a8d3dfff8fdee8db6914c5da966f8bc51aa451342e981ebdb->enter($__internal_7a1079e9744a870a8d3dfff8fdee8db6914c5da966f8bc51aa451342e981ebdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_37a8fe018b19ec1a114918b50baa25a01ee4e5d7ed04f15b74dcacfb52a81fe9->leave($__internal_37a8fe018b19ec1a114918b50baa25a01ee4e5d7ed04f15b74dcacfb52a81fe9_prof);

        
        $__internal_7a1079e9744a870a8d3dfff8fdee8db6914c5da966f8bc51aa451342e981ebdb->leave($__internal_7a1079e9744a870a8d3dfff8fdee8db6914c5da966f8bc51aa451342e981ebdb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
