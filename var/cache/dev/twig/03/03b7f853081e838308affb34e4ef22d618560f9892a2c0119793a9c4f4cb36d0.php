<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b7bdd2070b73591cbbb72102022881a93ce767f4583eb851b890635331ba3877 extends Twig_Template
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
        $__internal_e7415a11e5a6a990b24e2b97ef395bd1382f3f0a198b07932910e48a781f0f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7415a11e5a6a990b24e2b97ef395bd1382f3f0a198b07932910e48a781f0f86->enter($__internal_e7415a11e5a6a990b24e2b97ef395bd1382f3f0a198b07932910e48a781f0f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_05000bc51bbe4c3fe797c11010083cff8fba9d2f89cb1eda8c9863a76e60695a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05000bc51bbe4c3fe797c11010083cff8fba9d2f89cb1eda8c9863a76e60695a->enter($__internal_05000bc51bbe4c3fe797c11010083cff8fba9d2f89cb1eda8c9863a76e60695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e7415a11e5a6a990b24e2b97ef395bd1382f3f0a198b07932910e48a781f0f86->leave($__internal_e7415a11e5a6a990b24e2b97ef395bd1382f3f0a198b07932910e48a781f0f86_prof);

        
        $__internal_05000bc51bbe4c3fe797c11010083cff8fba9d2f89cb1eda8c9863a76e60695a->leave($__internal_05000bc51bbe4c3fe797c11010083cff8fba9d2f89cb1eda8c9863a76e60695a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
