<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_edbe43f5215e0223e82a14fd5699a4ffc0a0fa47118f18f61b5954a72f05be9c extends Twig_Template
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
        $__internal_da2da5d755b627ff2c38efabb4eeac452fd66891b9a4f5f5a2e00023ebd0aaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2da5d755b627ff2c38efabb4eeac452fd66891b9a4f5f5a2e00023ebd0aaaf->enter($__internal_da2da5d755b627ff2c38efabb4eeac452fd66891b9a4f5f5a2e00023ebd0aaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_86206f5ceb6e5181def67a89394cb9f43bb8ef7b32b02915b500b83e3b143f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86206f5ceb6e5181def67a89394cb9f43bb8ef7b32b02915b500b83e3b143f57->enter($__internal_86206f5ceb6e5181def67a89394cb9f43bb8ef7b32b02915b500b83e3b143f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_da2da5d755b627ff2c38efabb4eeac452fd66891b9a4f5f5a2e00023ebd0aaaf->leave($__internal_da2da5d755b627ff2c38efabb4eeac452fd66891b9a4f5f5a2e00023ebd0aaaf_prof);

        
        $__internal_86206f5ceb6e5181def67a89394cb9f43bb8ef7b32b02915b500b83e3b143f57->leave($__internal_86206f5ceb6e5181def67a89394cb9f43bb8ef7b32b02915b500b83e3b143f57_prof);

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
