<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a015fa9c8d8cd7512725f758cdf2ee717786ddbd51915c457c7a434f52167ff9 extends Twig_Template
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
        $__internal_9544d3ad1f906d902f6e20490f2e701a19b58dc8119c9d1daeda21f01de2ccb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9544d3ad1f906d902f6e20490f2e701a19b58dc8119c9d1daeda21f01de2ccb9->enter($__internal_9544d3ad1f906d902f6e20490f2e701a19b58dc8119c9d1daeda21f01de2ccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_21da8aa314ff014c65f6ac709ec46d8074cc62e64a705df627aa12c937e82cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21da8aa314ff014c65f6ac709ec46d8074cc62e64a705df627aa12c937e82cd3->enter($__internal_21da8aa314ff014c65f6ac709ec46d8074cc62e64a705df627aa12c937e82cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9544d3ad1f906d902f6e20490f2e701a19b58dc8119c9d1daeda21f01de2ccb9->leave($__internal_9544d3ad1f906d902f6e20490f2e701a19b58dc8119c9d1daeda21f01de2ccb9_prof);

        
        $__internal_21da8aa314ff014c65f6ac709ec46d8074cc62e64a705df627aa12c937e82cd3->leave($__internal_21da8aa314ff014c65f6ac709ec46d8074cc62e64a705df627aa12c937e82cd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
