<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bc091436827f2506f003f2a3bd017e63cab97865af27f6d9ff9cfbeb7b806c1b extends Twig_Template
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
        $__internal_793931a5ed8d5920bacfb8c5834b2fa77481418caadcfa1796c6a80eb2adb10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793931a5ed8d5920bacfb8c5834b2fa77481418caadcfa1796c6a80eb2adb10f->enter($__internal_793931a5ed8d5920bacfb8c5834b2fa77481418caadcfa1796c6a80eb2adb10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_da1f15986d7b94953d1bf841bc6503692cb9ac586585800e8b834ec1238b8ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1f15986d7b94953d1bf841bc6503692cb9ac586585800e8b834ec1238b8ac8->enter($__internal_da1f15986d7b94953d1bf841bc6503692cb9ac586585800e8b834ec1238b8ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_793931a5ed8d5920bacfb8c5834b2fa77481418caadcfa1796c6a80eb2adb10f->leave($__internal_793931a5ed8d5920bacfb8c5834b2fa77481418caadcfa1796c6a80eb2adb10f_prof);

        
        $__internal_da1f15986d7b94953d1bf841bc6503692cb9ac586585800e8b834ec1238b8ac8->leave($__internal_da1f15986d7b94953d1bf841bc6503692cb9ac586585800e8b834ec1238b8ac8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
