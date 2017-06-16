<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f1e925a86234192b17e27057e47db1a1d937862600809ae0362f64474e8f29b5 extends Twig_Template
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
        $__internal_89b70628eba2a88500697a8b9e61d98653ecf19ab0656c94d402f224b68e9407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b70628eba2a88500697a8b9e61d98653ecf19ab0656c94d402f224b68e9407->enter($__internal_89b70628eba2a88500697a8b9e61d98653ecf19ab0656c94d402f224b68e9407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_692e0201252d1506514c0a5c3e195d12859af70175b14275942df87f379845fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692e0201252d1506514c0a5c3e195d12859af70175b14275942df87f379845fb->enter($__internal_692e0201252d1506514c0a5c3e195d12859af70175b14275942df87f379845fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_89b70628eba2a88500697a8b9e61d98653ecf19ab0656c94d402f224b68e9407->leave($__internal_89b70628eba2a88500697a8b9e61d98653ecf19ab0656c94d402f224b68e9407_prof);

        
        $__internal_692e0201252d1506514c0a5c3e195d12859af70175b14275942df87f379845fb->leave($__internal_692e0201252d1506514c0a5c3e195d12859af70175b14275942df87f379845fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
