<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5c32390a31c176706e233c5b1926e84c29bebdeb24dbbd4c50bbaaac5c0d60b4 extends Twig_Template
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
        $__internal_67fd7eca3ae6906bab03285162d8a3ea1370915f761b76ee886bba2a73ae0f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fd7eca3ae6906bab03285162d8a3ea1370915f761b76ee886bba2a73ae0f6c->enter($__internal_67fd7eca3ae6906bab03285162d8a3ea1370915f761b76ee886bba2a73ae0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c40e8d376a4f1abba83a896b43de6ca668ba2cf0cd4ae18327aaf354cafaaad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40e8d376a4f1abba83a896b43de6ca668ba2cf0cd4ae18327aaf354cafaaad8->enter($__internal_c40e8d376a4f1abba83a896b43de6ca668ba2cf0cd4ae18327aaf354cafaaad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_67fd7eca3ae6906bab03285162d8a3ea1370915f761b76ee886bba2a73ae0f6c->leave($__internal_67fd7eca3ae6906bab03285162d8a3ea1370915f761b76ee886bba2a73ae0f6c_prof);

        
        $__internal_c40e8d376a4f1abba83a896b43de6ca668ba2cf0cd4ae18327aaf354cafaaad8->leave($__internal_c40e8d376a4f1abba83a896b43de6ca668ba2cf0cd4ae18327aaf354cafaaad8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
