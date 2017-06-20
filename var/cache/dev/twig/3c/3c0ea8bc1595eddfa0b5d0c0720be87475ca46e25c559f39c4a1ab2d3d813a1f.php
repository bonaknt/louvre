<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c2f3b70a75dc57f364042168fb291274a6ba4af2f93a76f30539673223d2b34a extends Twig_Template
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
        $__internal_4d823bab700c91623939b110e4f9c294b4bfaddd1216042cd1edaa99cd3c7142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d823bab700c91623939b110e4f9c294b4bfaddd1216042cd1edaa99cd3c7142->enter($__internal_4d823bab700c91623939b110e4f9c294b4bfaddd1216042cd1edaa99cd3c7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_16cb0ac7656011d3d02e1397b0e9d32137e5bb7d722b74655dc697610b1315c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cb0ac7656011d3d02e1397b0e9d32137e5bb7d722b74655dc697610b1315c8->enter($__internal_16cb0ac7656011d3d02e1397b0e9d32137e5bb7d722b74655dc697610b1315c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_4d823bab700c91623939b110e4f9c294b4bfaddd1216042cd1edaa99cd3c7142->leave($__internal_4d823bab700c91623939b110e4f9c294b4bfaddd1216042cd1edaa99cd3c7142_prof);

        
        $__internal_16cb0ac7656011d3d02e1397b0e9d32137e5bb7d722b74655dc697610b1315c8->leave($__internal_16cb0ac7656011d3d02e1397b0e9d32137e5bb7d722b74655dc697610b1315c8_prof);

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
