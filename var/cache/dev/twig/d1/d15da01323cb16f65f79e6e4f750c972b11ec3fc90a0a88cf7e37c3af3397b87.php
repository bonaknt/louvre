<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4186b7b458d2bf38715e70f3e152e6a8f4196a42c99cde56f50024a8b6edafb8 extends Twig_Template
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
        $__internal_8add39a6455f99a51c042851d1dc181833a94b0b0e69db0421c9671cc38f600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8add39a6455f99a51c042851d1dc181833a94b0b0e69db0421c9671cc38f600e->enter($__internal_8add39a6455f99a51c042851d1dc181833a94b0b0e69db0421c9671cc38f600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0326a9487f605a79840db9ada86bac01ad774163e25110b9ef6f2a6d40b4efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0326a9487f605a79840db9ada86bac01ad774163e25110b9ef6f2a6d40b4efe8->enter($__internal_0326a9487f605a79840db9ada86bac01ad774163e25110b9ef6f2a6d40b4efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_8add39a6455f99a51c042851d1dc181833a94b0b0e69db0421c9671cc38f600e->leave($__internal_8add39a6455f99a51c042851d1dc181833a94b0b0e69db0421c9671cc38f600e_prof);

        
        $__internal_0326a9487f605a79840db9ada86bac01ad774163e25110b9ef6f2a6d40b4efe8->leave($__internal_0326a9487f605a79840db9ada86bac01ad774163e25110b9ef6f2a6d40b4efe8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
