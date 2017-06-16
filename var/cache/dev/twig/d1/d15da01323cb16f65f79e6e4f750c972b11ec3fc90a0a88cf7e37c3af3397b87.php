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
        $__internal_853f04f8ed934d12b81c9b916890667b570cbf1c1aabdee820c1536fc605a941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853f04f8ed934d12b81c9b916890667b570cbf1c1aabdee820c1536fc605a941->enter($__internal_853f04f8ed934d12b81c9b916890667b570cbf1c1aabdee820c1536fc605a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_8aafe17948fa9787c9b33484092780e58b82849717e928dbdb07eeac9dd067aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aafe17948fa9787c9b33484092780e58b82849717e928dbdb07eeac9dd067aa->enter($__internal_8aafe17948fa9787c9b33484092780e58b82849717e928dbdb07eeac9dd067aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_853f04f8ed934d12b81c9b916890667b570cbf1c1aabdee820c1536fc605a941->leave($__internal_853f04f8ed934d12b81c9b916890667b570cbf1c1aabdee820c1536fc605a941_prof);

        
        $__internal_8aafe17948fa9787c9b33484092780e58b82849717e928dbdb07eeac9dd067aa->leave($__internal_8aafe17948fa9787c9b33484092780e58b82849717e928dbdb07eeac9dd067aa_prof);

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
