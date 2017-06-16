<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a015fa9c8d8cd7512725f758cdf2ee717786ddbd51915c457c7a434f52167ff9 extends Twig_Template
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
        $__internal_f4611f2637f2e1e7525a9ff6af2a1d47b289fe2409ea3ecb9b7ef457ce482afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4611f2637f2e1e7525a9ff6af2a1d47b289fe2409ea3ecb9b7ef457ce482afd->enter($__internal_f4611f2637f2e1e7525a9ff6af2a1d47b289fe2409ea3ecb9b7ef457ce482afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fb4dbe5ff9a72e542fd2b6d0a9f85bbda0eb41c94b7ad0a60183339f8358cff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4dbe5ff9a72e542fd2b6d0a9f85bbda0eb41c94b7ad0a60183339f8358cff5->enter($__internal_fb4dbe5ff9a72e542fd2b6d0a9f85bbda0eb41c94b7ad0a60183339f8358cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f4611f2637f2e1e7525a9ff6af2a1d47b289fe2409ea3ecb9b7ef457ce482afd->leave($__internal_f4611f2637f2e1e7525a9ff6af2a1d47b289fe2409ea3ecb9b7ef457ce482afd_prof);

        
        $__internal_fb4dbe5ff9a72e542fd2b6d0a9f85bbda0eb41c94b7ad0a60183339f8358cff5->leave($__internal_fb4dbe5ff9a72e542fd2b6d0a9f85bbda0eb41c94b7ad0a60183339f8358cff5_prof);

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
