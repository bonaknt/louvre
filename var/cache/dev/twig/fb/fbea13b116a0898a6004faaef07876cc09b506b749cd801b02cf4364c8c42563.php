<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5fd9ccacc63f6313e7394d7abb1cb7c27b1218466dde260473b5a5d51f03a704 extends Twig_Template
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
        $__internal_5d0cb088e6604fe5ab98ff5d9e48de2b4fc1e68a179b3827f6b1df09dbb7ae05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0cb088e6604fe5ab98ff5d9e48de2b4fc1e68a179b3827f6b1df09dbb7ae05->enter($__internal_5d0cb088e6604fe5ab98ff5d9e48de2b4fc1e68a179b3827f6b1df09dbb7ae05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4c5bffa73b35cf1cfd8a016b4aaf9c66ca6e73078963d14486d9c98009a0d7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5bffa73b35cf1cfd8a016b4aaf9c66ca6e73078963d14486d9c98009a0d7ef->enter($__internal_4c5bffa73b35cf1cfd8a016b4aaf9c66ca6e73078963d14486d9c98009a0d7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5d0cb088e6604fe5ab98ff5d9e48de2b4fc1e68a179b3827f6b1df09dbb7ae05->leave($__internal_5d0cb088e6604fe5ab98ff5d9e48de2b4fc1e68a179b3827f6b1df09dbb7ae05_prof);

        
        $__internal_4c5bffa73b35cf1cfd8a016b4aaf9c66ca6e73078963d14486d9c98009a0d7ef->leave($__internal_4c5bffa73b35cf1cfd8a016b4aaf9c66ca6e73078963d14486d9c98009a0d7ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
