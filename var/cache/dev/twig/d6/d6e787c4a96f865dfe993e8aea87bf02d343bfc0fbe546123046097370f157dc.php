<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ccf53d8eb16bb077823eecd2570ba977b31e121e8e2a094ad4bb32840de415c2 extends Twig_Template
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
        $__internal_4cd2380b5183d053f48ebcd3fd97cbacd32cd0086ee142828a908f74c607023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd2380b5183d053f48ebcd3fd97cbacd32cd0086ee142828a908f74c607023d->enter($__internal_4cd2380b5183d053f48ebcd3fd97cbacd32cd0086ee142828a908f74c607023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_972b90d2f0eb8e738a7134cf58f967fc6fa99f4b19d3dde102defe8e1a1e739a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972b90d2f0eb8e738a7134cf58f967fc6fa99f4b19d3dde102defe8e1a1e739a->enter($__internal_972b90d2f0eb8e738a7134cf58f967fc6fa99f4b19d3dde102defe8e1a1e739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4cd2380b5183d053f48ebcd3fd97cbacd32cd0086ee142828a908f74c607023d->leave($__internal_4cd2380b5183d053f48ebcd3fd97cbacd32cd0086ee142828a908f74c607023d_prof);

        
        $__internal_972b90d2f0eb8e738a7134cf58f967fc6fa99f4b19d3dde102defe8e1a1e739a->leave($__internal_972b90d2f0eb8e738a7134cf58f967fc6fa99f4b19d3dde102defe8e1a1e739a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
