<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_76d0a44b83d8cfb53e7b9fb7dfc74202a36c63781c8cea30dcfe613ad9314a6f extends Twig_Template
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
        $__internal_b6b1cdfe9d085ba70f98054aeebf01583540455024ab0fd3f8b6bd076f6877c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b1cdfe9d085ba70f98054aeebf01583540455024ab0fd3f8b6bd076f6877c2->enter($__internal_b6b1cdfe9d085ba70f98054aeebf01583540455024ab0fd3f8b6bd076f6877c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3b494d4c297f695cee12e46b8c78c9e5e72490bcbd5d2f1898b3f092a3df57b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b494d4c297f695cee12e46b8c78c9e5e72490bcbd5d2f1898b3f092a3df57b6->enter($__internal_3b494d4c297f695cee12e46b8c78c9e5e72490bcbd5d2f1898b3f092a3df57b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b6b1cdfe9d085ba70f98054aeebf01583540455024ab0fd3f8b6bd076f6877c2->leave($__internal_b6b1cdfe9d085ba70f98054aeebf01583540455024ab0fd3f8b6bd076f6877c2_prof);

        
        $__internal_3b494d4c297f695cee12e46b8c78c9e5e72490bcbd5d2f1898b3f092a3df57b6->leave($__internal_3b494d4c297f695cee12e46b8c78c9e5e72490bcbd5d2f1898b3f092a3df57b6_prof);

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
