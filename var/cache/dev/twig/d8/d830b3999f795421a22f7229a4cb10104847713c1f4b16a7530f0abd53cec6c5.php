<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_577890cd89a58c02877e96b96009a6d2eb5a6b0994d624a7ff1d25d2e678e0df extends Twig_Template
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
        $__internal_1eb97e0809ebc120022016ac8af9c812e31474d0213eb18a1088426d13f62fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb97e0809ebc120022016ac8af9c812e31474d0213eb18a1088426d13f62fe7->enter($__internal_1eb97e0809ebc120022016ac8af9c812e31474d0213eb18a1088426d13f62fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7cdae167f08d1d908413ec37d121bd7d05883e6decffc99ea816a0e237e5d030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdae167f08d1d908413ec37d121bd7d05883e6decffc99ea816a0e237e5d030->enter($__internal_7cdae167f08d1d908413ec37d121bd7d05883e6decffc99ea816a0e237e5d030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1eb97e0809ebc120022016ac8af9c812e31474d0213eb18a1088426d13f62fe7->leave($__internal_1eb97e0809ebc120022016ac8af9c812e31474d0213eb18a1088426d13f62fe7_prof);

        
        $__internal_7cdae167f08d1d908413ec37d121bd7d05883e6decffc99ea816a0e237e5d030->leave($__internal_7cdae167f08d1d908413ec37d121bd7d05883e6decffc99ea816a0e237e5d030_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
