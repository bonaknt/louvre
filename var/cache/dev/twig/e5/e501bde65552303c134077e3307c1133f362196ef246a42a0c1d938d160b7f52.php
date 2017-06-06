<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f0dbcbe243af1ac361b1565700d55943209a3eb5f9cedb9d61e3b26f27280039 extends Twig_Template
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
        $__internal_60467d077efd36178318cfb8252007765417d1f395b991d2d47bf6366fa6f86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60467d077efd36178318cfb8252007765417d1f395b991d2d47bf6366fa6f86d->enter($__internal_60467d077efd36178318cfb8252007765417d1f395b991d2d47bf6366fa6f86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0669648c7be59d07f4b2733c67f4d0efa97f2eaebf642ba6a5aca15240228646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0669648c7be59d07f4b2733c67f4d0efa97f2eaebf642ba6a5aca15240228646->enter($__internal_0669648c7be59d07f4b2733c67f4d0efa97f2eaebf642ba6a5aca15240228646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_60467d077efd36178318cfb8252007765417d1f395b991d2d47bf6366fa6f86d->leave($__internal_60467d077efd36178318cfb8252007765417d1f395b991d2d47bf6366fa6f86d_prof);

        
        $__internal_0669648c7be59d07f4b2733c67f4d0efa97f2eaebf642ba6a5aca15240228646->leave($__internal_0669648c7be59d07f4b2733c67f4d0efa97f2eaebf642ba6a5aca15240228646_prof);

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
