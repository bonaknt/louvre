<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2aef8ddfff8a1281bf934199a5096ebececf628c8802ab89fdb8a60024b4b07c extends Twig_Template
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
        $__internal_c5a2eb1c1db7dacabd4ba74b27f0d728ae64ef5764235529e7fad7c3b2500d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a2eb1c1db7dacabd4ba74b27f0d728ae64ef5764235529e7fad7c3b2500d68->enter($__internal_c5a2eb1c1db7dacabd4ba74b27f0d728ae64ef5764235529e7fad7c3b2500d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3ccf86e6dbbef0b850ebd70fe3badae5894e8a7c1a7967f963cb4ebe8e3e8201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccf86e6dbbef0b850ebd70fe3badae5894e8a7c1a7967f963cb4ebe8e3e8201->enter($__internal_3ccf86e6dbbef0b850ebd70fe3badae5894e8a7c1a7967f963cb4ebe8e3e8201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c5a2eb1c1db7dacabd4ba74b27f0d728ae64ef5764235529e7fad7c3b2500d68->leave($__internal_c5a2eb1c1db7dacabd4ba74b27f0d728ae64ef5764235529e7fad7c3b2500d68_prof);

        
        $__internal_3ccf86e6dbbef0b850ebd70fe3badae5894e8a7c1a7967f963cb4ebe8e3e8201->leave($__internal_3ccf86e6dbbef0b850ebd70fe3badae5894e8a7c1a7967f963cb4ebe8e3e8201_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
