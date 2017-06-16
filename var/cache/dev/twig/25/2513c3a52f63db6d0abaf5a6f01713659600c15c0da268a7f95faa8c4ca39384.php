<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4b5a51cae6b2e51106eb212e490f65abc2472f678194b0dec3fe1080f0a1ba53 extends Twig_Template
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
        $__internal_0cdb6918d6eddef51ac7976bdb70251065655ef44ec1c786106b585b5ff688ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdb6918d6eddef51ac7976bdb70251065655ef44ec1c786106b585b5ff688ab->enter($__internal_0cdb6918d6eddef51ac7976bdb70251065655ef44ec1c786106b585b5ff688ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b97138b7816972d1b84e3ed3d9618bf10f77b43bc5c9505af4c499dd968cabd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97138b7816972d1b84e3ed3d9618bf10f77b43bc5c9505af4c499dd968cabd1->enter($__internal_b97138b7816972d1b84e3ed3d9618bf10f77b43bc5c9505af4c499dd968cabd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0cdb6918d6eddef51ac7976bdb70251065655ef44ec1c786106b585b5ff688ab->leave($__internal_0cdb6918d6eddef51ac7976bdb70251065655ef44ec1c786106b585b5ff688ab_prof);

        
        $__internal_b97138b7816972d1b84e3ed3d9618bf10f77b43bc5c9505af4c499dd968cabd1->leave($__internal_b97138b7816972d1b84e3ed3d9618bf10f77b43bc5c9505af4c499dd968cabd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
