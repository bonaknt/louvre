<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7c3cafb5ecc430fbb05382cd7f7c0f07f1b6737e1396c2521085180870865ebd extends Twig_Template
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
        $__internal_381cd026ad2f837abdec253cb62b4808c48e9db50237398b2b4737aa6c10bd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381cd026ad2f837abdec253cb62b4808c48e9db50237398b2b4737aa6c10bd2a->enter($__internal_381cd026ad2f837abdec253cb62b4808c48e9db50237398b2b4737aa6c10bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d769b963f446fd1d47ba9a45e351c6d6edba43fdf69ffd2de7552486899fd71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d769b963f446fd1d47ba9a45e351c6d6edba43fdf69ffd2de7552486899fd71b->enter($__internal_d769b963f446fd1d47ba9a45e351c6d6edba43fdf69ffd2de7552486899fd71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_381cd026ad2f837abdec253cb62b4808c48e9db50237398b2b4737aa6c10bd2a->leave($__internal_381cd026ad2f837abdec253cb62b4808c48e9db50237398b2b4737aa6c10bd2a_prof);

        
        $__internal_d769b963f446fd1d47ba9a45e351c6d6edba43fdf69ffd2de7552486899fd71b->leave($__internal_d769b963f446fd1d47ba9a45e351c6d6edba43fdf69ffd2de7552486899fd71b_prof);

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
