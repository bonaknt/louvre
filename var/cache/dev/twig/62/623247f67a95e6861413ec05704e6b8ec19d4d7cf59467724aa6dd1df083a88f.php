<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_94e782c3b132e4e8193df6909b76fdba0be27a16f85afefcdbb50ab45fc8292b extends Twig_Template
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
        $__internal_c3c9dc09a3865787fa5a4895e670c1b9874f6a44058eed54bfc5715d7c2d6585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c9dc09a3865787fa5a4895e670c1b9874f6a44058eed54bfc5715d7c2d6585->enter($__internal_c3c9dc09a3865787fa5a4895e670c1b9874f6a44058eed54bfc5715d7c2d6585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e24193dca05a4e61f4cf4461d6a51dc1d7edd59332104e2c510b28806d569de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24193dca05a4e61f4cf4461d6a51dc1d7edd59332104e2c510b28806d569de9->enter($__internal_e24193dca05a4e61f4cf4461d6a51dc1d7edd59332104e2c510b28806d569de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c3c9dc09a3865787fa5a4895e670c1b9874f6a44058eed54bfc5715d7c2d6585->leave($__internal_c3c9dc09a3865787fa5a4895e670c1b9874f6a44058eed54bfc5715d7c2d6585_prof);

        
        $__internal_e24193dca05a4e61f4cf4461d6a51dc1d7edd59332104e2c510b28806d569de9->leave($__internal_e24193dca05a4e61f4cf4461d6a51dc1d7edd59332104e2c510b28806d569de9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
