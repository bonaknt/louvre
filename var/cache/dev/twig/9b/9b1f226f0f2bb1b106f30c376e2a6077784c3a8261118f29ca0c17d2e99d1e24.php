<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_deb7a3ace31c003aa9a0e27f95306966a493052e8c22ae13904b5d4112d867a5 extends Twig_Template
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
        $__internal_e729c3f1e9e79cf460b8c6b1e43fa1bfc6b029500bf7527f3e9db6a0ae0f4173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e729c3f1e9e79cf460b8c6b1e43fa1bfc6b029500bf7527f3e9db6a0ae0f4173->enter($__internal_e729c3f1e9e79cf460b8c6b1e43fa1bfc6b029500bf7527f3e9db6a0ae0f4173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7f3adcff5a3afac2e17af91a1c49523c3045f17afb43bc451699e1e5b67d46a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3adcff5a3afac2e17af91a1c49523c3045f17afb43bc451699e1e5b67d46a1->enter($__internal_7f3adcff5a3afac2e17af91a1c49523c3045f17afb43bc451699e1e5b67d46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e729c3f1e9e79cf460b8c6b1e43fa1bfc6b029500bf7527f3e9db6a0ae0f4173->leave($__internal_e729c3f1e9e79cf460b8c6b1e43fa1bfc6b029500bf7527f3e9db6a0ae0f4173_prof);

        
        $__internal_7f3adcff5a3afac2e17af91a1c49523c3045f17afb43bc451699e1e5b67d46a1->leave($__internal_7f3adcff5a3afac2e17af91a1c49523c3045f17afb43bc451699e1e5b67d46a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
