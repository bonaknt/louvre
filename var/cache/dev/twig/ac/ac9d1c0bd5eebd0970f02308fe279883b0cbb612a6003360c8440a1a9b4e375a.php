<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e7da76f07441292d28aa4d4a4d7349aa799a05b0fe197fdb0282353d41cfe9f3 extends Twig_Template
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
        $__internal_df882606b249a13f77fe4b00535c74dd66ad5787bb5047ae4fed0a33023e2123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df882606b249a13f77fe4b00535c74dd66ad5787bb5047ae4fed0a33023e2123->enter($__internal_df882606b249a13f77fe4b00535c74dd66ad5787bb5047ae4fed0a33023e2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_24607502afbb2b4642bb21cc9ce7665bc1c6086ac723b0e0972a4f93f60b3432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24607502afbb2b4642bb21cc9ce7665bc1c6086ac723b0e0972a4f93f60b3432->enter($__internal_24607502afbb2b4642bb21cc9ce7665bc1c6086ac723b0e0972a4f93f60b3432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df882606b249a13f77fe4b00535c74dd66ad5787bb5047ae4fed0a33023e2123->leave($__internal_df882606b249a13f77fe4b00535c74dd66ad5787bb5047ae4fed0a33023e2123_prof);

        
        $__internal_24607502afbb2b4642bb21cc9ce7665bc1c6086ac723b0e0972a4f93f60b3432->leave($__internal_24607502afbb2b4642bb21cc9ce7665bc1c6086ac723b0e0972a4f93f60b3432_prof);

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
