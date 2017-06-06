<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4a0837c52d6733fc0060ed5757ccfb28ace0aef65c6a16b6b14ca321a51748cd extends Twig_Template
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
        $__internal_f10c4811667f996c27aa7b9bedbda0a54e23b3198e78ed129adaf777af5fcab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10c4811667f996c27aa7b9bedbda0a54e23b3198e78ed129adaf777af5fcab1->enter($__internal_f10c4811667f996c27aa7b9bedbda0a54e23b3198e78ed129adaf777af5fcab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_75281ae8805c4441b772d22d6425c67d0e064778bca472bc4717ec51d3a45980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75281ae8805c4441b772d22d6425c67d0e064778bca472bc4717ec51d3a45980->enter($__internal_75281ae8805c4441b772d22d6425c67d0e064778bca472bc4717ec51d3a45980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f10c4811667f996c27aa7b9bedbda0a54e23b3198e78ed129adaf777af5fcab1->leave($__internal_f10c4811667f996c27aa7b9bedbda0a54e23b3198e78ed129adaf777af5fcab1_prof);

        
        $__internal_75281ae8805c4441b772d22d6425c67d0e064778bca472bc4717ec51d3a45980->leave($__internal_75281ae8805c4441b772d22d6425c67d0e064778bca472bc4717ec51d3a45980_prof);

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
