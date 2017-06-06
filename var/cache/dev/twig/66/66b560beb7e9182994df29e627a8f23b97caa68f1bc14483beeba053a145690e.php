<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e079a7153772d72a7fe353f954c14c2f7ee00dfa4bb364e9461080a83f9e009c extends Twig_Template
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
        $__internal_1f8a1f5bbf8beec164b4cdf38d31448100e899a058176d75ffcca2a2b4d9be0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8a1f5bbf8beec164b4cdf38d31448100e899a058176d75ffcca2a2b4d9be0e->enter($__internal_1f8a1f5bbf8beec164b4cdf38d31448100e899a058176d75ffcca2a2b4d9be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3da40f5c5e1943c49cf98f8d5d8408421b6765b9d701870a216a515f8ba96d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da40f5c5e1943c49cf98f8d5d8408421b6765b9d701870a216a515f8ba96d80->enter($__internal_3da40f5c5e1943c49cf98f8d5d8408421b6765b9d701870a216a515f8ba96d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1f8a1f5bbf8beec164b4cdf38d31448100e899a058176d75ffcca2a2b4d9be0e->leave($__internal_1f8a1f5bbf8beec164b4cdf38d31448100e899a058176d75ffcca2a2b4d9be0e_prof);

        
        $__internal_3da40f5c5e1943c49cf98f8d5d8408421b6765b9d701870a216a515f8ba96d80->leave($__internal_3da40f5c5e1943c49cf98f8d5d8408421b6765b9d701870a216a515f8ba96d80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
