<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3cd1bcb3a0250f2559674f527ab010e60aadfa94347d732908c9ae5b774558a6 extends Twig_Template
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
        $__internal_c476e9487aaf0e43a7fd08ee17ff2bded1a2948bf0125b176c5739979867bb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c476e9487aaf0e43a7fd08ee17ff2bded1a2948bf0125b176c5739979867bb1b->enter($__internal_c476e9487aaf0e43a7fd08ee17ff2bded1a2948bf0125b176c5739979867bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0f62283cea07b85bf17daefcddb9b8c515795032022534ab0f71fcebb0df10f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f62283cea07b85bf17daefcddb9b8c515795032022534ab0f71fcebb0df10f8->enter($__internal_0f62283cea07b85bf17daefcddb9b8c515795032022534ab0f71fcebb0df10f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c476e9487aaf0e43a7fd08ee17ff2bded1a2948bf0125b176c5739979867bb1b->leave($__internal_c476e9487aaf0e43a7fd08ee17ff2bded1a2948bf0125b176c5739979867bb1b_prof);

        
        $__internal_0f62283cea07b85bf17daefcddb9b8c515795032022534ab0f71fcebb0df10f8->leave($__internal_0f62283cea07b85bf17daefcddb9b8c515795032022534ab0f71fcebb0df10f8_prof);

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
