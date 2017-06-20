<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fca38abee030726fa5d1519687b2a03b864a4e320a62fcf5fb461883d17da694 extends Twig_Template
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
        $__internal_1f7b701cfcd9ae7d6cfd969688d6340678b498b199047edb6922d468c187cbbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7b701cfcd9ae7d6cfd969688d6340678b498b199047edb6922d468c187cbbd->enter($__internal_1f7b701cfcd9ae7d6cfd969688d6340678b498b199047edb6922d468c187cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9afd4157492d3f58efb2765968e195cea644ace7c71ce6abeab1dd632c9a4899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afd4157492d3f58efb2765968e195cea644ace7c71ce6abeab1dd632c9a4899->enter($__internal_9afd4157492d3f58efb2765968e195cea644ace7c71ce6abeab1dd632c9a4899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1f7b701cfcd9ae7d6cfd969688d6340678b498b199047edb6922d468c187cbbd->leave($__internal_1f7b701cfcd9ae7d6cfd969688d6340678b498b199047edb6922d468c187cbbd_prof);

        
        $__internal_9afd4157492d3f58efb2765968e195cea644ace7c71ce6abeab1dd632c9a4899->leave($__internal_9afd4157492d3f58efb2765968e195cea644ace7c71ce6abeab1dd632c9a4899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
