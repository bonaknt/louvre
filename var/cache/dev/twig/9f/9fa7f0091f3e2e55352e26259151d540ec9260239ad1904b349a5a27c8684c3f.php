<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5141c14855cf54845aec583b177d1e7a5f44104a0864eb875602ec6d1921da2d extends Twig_Template
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
        $__internal_f5e0291a967cb2df5b39aefbc12e73ba613a53cfe634b090ddffcd4c445297ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e0291a967cb2df5b39aefbc12e73ba613a53cfe634b090ddffcd4c445297ef->enter($__internal_f5e0291a967cb2df5b39aefbc12e73ba613a53cfe634b090ddffcd4c445297ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8cec988b1bcf1c42931e16a2fb75d1bf72b2f41dc522684ab7b55c5e5eb062ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cec988b1bcf1c42931e16a2fb75d1bf72b2f41dc522684ab7b55c5e5eb062ac->enter($__internal_8cec988b1bcf1c42931e16a2fb75d1bf72b2f41dc522684ab7b55c5e5eb062ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f5e0291a967cb2df5b39aefbc12e73ba613a53cfe634b090ddffcd4c445297ef->leave($__internal_f5e0291a967cb2df5b39aefbc12e73ba613a53cfe634b090ddffcd4c445297ef_prof);

        
        $__internal_8cec988b1bcf1c42931e16a2fb75d1bf72b2f41dc522684ab7b55c5e5eb062ac->leave($__internal_8cec988b1bcf1c42931e16a2fb75d1bf72b2f41dc522684ab7b55c5e5eb062ac_prof);

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
