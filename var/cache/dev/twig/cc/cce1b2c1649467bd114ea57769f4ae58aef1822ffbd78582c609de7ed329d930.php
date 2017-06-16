<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_76ad2121f4899a86bbf7d83f428db5fef9697e5ce71e2670f72455b97e90787e extends Twig_Template
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
        $__internal_c7656d31ef495f3b535ca325579f06078da4632731970f34725ebddf796b687e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7656d31ef495f3b535ca325579f06078da4632731970f34725ebddf796b687e->enter($__internal_c7656d31ef495f3b535ca325579f06078da4632731970f34725ebddf796b687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_9c48a373672c6a18cd28f3713b571524bd3442eaba3c48c0bb7b8e4061576aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c48a373672c6a18cd28f3713b571524bd3442eaba3c48c0bb7b8e4061576aa6->enter($__internal_9c48a373672c6a18cd28f3713b571524bd3442eaba3c48c0bb7b8e4061576aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c7656d31ef495f3b535ca325579f06078da4632731970f34725ebddf796b687e->leave($__internal_c7656d31ef495f3b535ca325579f06078da4632731970f34725ebddf796b687e_prof);

        
        $__internal_9c48a373672c6a18cd28f3713b571524bd3442eaba3c48c0bb7b8e4061576aa6->leave($__internal_9c48a373672c6a18cd28f3713b571524bd3442eaba3c48c0bb7b8e4061576aa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
