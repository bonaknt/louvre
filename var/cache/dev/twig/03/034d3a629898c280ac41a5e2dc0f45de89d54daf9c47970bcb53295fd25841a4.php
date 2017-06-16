<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bf334bfdbbb701ad51d0aa975331246ee87516b32d39c21ab2739d756dd78c49 extends Twig_Template
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
        $__internal_e998ad1deeffb580a469f82fb5860f6819ac76751c4f6eb70b5549aa76824edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e998ad1deeffb580a469f82fb5860f6819ac76751c4f6eb70b5549aa76824edc->enter($__internal_e998ad1deeffb580a469f82fb5860f6819ac76751c4f6eb70b5549aa76824edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e1259d305f0e1f35a38632e0d57d855939bce2946f4ea45ba3d846d5b01d5a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1259d305f0e1f35a38632e0d57d855939bce2946f4ea45ba3d846d5b01d5a42->enter($__internal_e1259d305f0e1f35a38632e0d57d855939bce2946f4ea45ba3d846d5b01d5a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e998ad1deeffb580a469f82fb5860f6819ac76751c4f6eb70b5549aa76824edc->leave($__internal_e998ad1deeffb580a469f82fb5860f6819ac76751c4f6eb70b5549aa76824edc_prof);

        
        $__internal_e1259d305f0e1f35a38632e0d57d855939bce2946f4ea45ba3d846d5b01d5a42->leave($__internal_e1259d305f0e1f35a38632e0d57d855939bce2946f4ea45ba3d846d5b01d5a42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
