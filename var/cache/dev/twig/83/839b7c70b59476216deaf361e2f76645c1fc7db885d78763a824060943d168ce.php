<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_00271adf12cd88e6221ed1a6e8c1f7f613f41977c5d38dd2caf3bc698ab617f1 extends Twig_Template
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
        $__internal_7de22eb64f631ce06d0dc2cf747eb455bf8638f001a0797b222fffa072d26aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de22eb64f631ce06d0dc2cf747eb455bf8638f001a0797b222fffa072d26aaf->enter($__internal_7de22eb64f631ce06d0dc2cf747eb455bf8638f001a0797b222fffa072d26aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e0e99f36cc32c50ece9cfcd3a89ee83baaf3bcc8006424ca08362b482fb05b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e99f36cc32c50ece9cfcd3a89ee83baaf3bcc8006424ca08362b482fb05b55->enter($__internal_e0e99f36cc32c50ece9cfcd3a89ee83baaf3bcc8006424ca08362b482fb05b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7de22eb64f631ce06d0dc2cf747eb455bf8638f001a0797b222fffa072d26aaf->leave($__internal_7de22eb64f631ce06d0dc2cf747eb455bf8638f001a0797b222fffa072d26aaf_prof);

        
        $__internal_e0e99f36cc32c50ece9cfcd3a89ee83baaf3bcc8006424ca08362b482fb05b55->leave($__internal_e0e99f36cc32c50ece9cfcd3a89ee83baaf3bcc8006424ca08362b482fb05b55_prof);

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
