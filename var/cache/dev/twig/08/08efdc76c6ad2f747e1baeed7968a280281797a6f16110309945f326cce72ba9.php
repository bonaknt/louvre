<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8a0fa8f102a15d576cce10e9cbdb77ca531bef78094df00f2edc60efa6f5fd6a extends Twig_Template
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
        $__internal_294c96cba8ee8b8e32797be53f354b42816f7293043d86a1a1b50080f5bf6b6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294c96cba8ee8b8e32797be53f354b42816f7293043d86a1a1b50080f5bf6b6f->enter($__internal_294c96cba8ee8b8e32797be53f354b42816f7293043d86a1a1b50080f5bf6b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a095d05d00c8e4e5f6cf745e524571952fdbcd92e849092bf64b7e9ba163e9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a095d05d00c8e4e5f6cf745e524571952fdbcd92e849092bf64b7e9ba163e9f7->enter($__internal_a095d05d00c8e4e5f6cf745e524571952fdbcd92e849092bf64b7e9ba163e9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_294c96cba8ee8b8e32797be53f354b42816f7293043d86a1a1b50080f5bf6b6f->leave($__internal_294c96cba8ee8b8e32797be53f354b42816f7293043d86a1a1b50080f5bf6b6f_prof);

        
        $__internal_a095d05d00c8e4e5f6cf745e524571952fdbcd92e849092bf64b7e9ba163e9f7->leave($__internal_a095d05d00c8e4e5f6cf745e524571952fdbcd92e849092bf64b7e9ba163e9f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
