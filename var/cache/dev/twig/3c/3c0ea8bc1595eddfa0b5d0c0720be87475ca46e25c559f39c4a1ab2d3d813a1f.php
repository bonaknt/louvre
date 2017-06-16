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
        $__internal_7d6401cee8afd7b599aa474500fc0f8cac1437a271ca47d45b15b4b38e998415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6401cee8afd7b599aa474500fc0f8cac1437a271ca47d45b15b4b38e998415->enter($__internal_7d6401cee8afd7b599aa474500fc0f8cac1437a271ca47d45b15b4b38e998415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_149d766b0257b643a5a9126946142f673c72cf067c7b030500b278cebe17c976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149d766b0257b643a5a9126946142f673c72cf067c7b030500b278cebe17c976->enter($__internal_149d766b0257b643a5a9126946142f673c72cf067c7b030500b278cebe17c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7d6401cee8afd7b599aa474500fc0f8cac1437a271ca47d45b15b4b38e998415->leave($__internal_7d6401cee8afd7b599aa474500fc0f8cac1437a271ca47d45b15b4b38e998415_prof);

        
        $__internal_149d766b0257b643a5a9126946142f673c72cf067c7b030500b278cebe17c976->leave($__internal_149d766b0257b643a5a9126946142f673c72cf067c7b030500b278cebe17c976_prof);

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
