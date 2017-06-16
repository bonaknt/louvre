<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e0a697aa50b4fe2e6747d6564ee12bdda2a0dc7adb352fd622448dafad010e6b extends Twig_Template
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
        $__internal_9db1d7387a2e5348f8cc68f54dbb8163e02ea011dad6684c573db1edd2b4f95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db1d7387a2e5348f8cc68f54dbb8163e02ea011dad6684c573db1edd2b4f95f->enter($__internal_9db1d7387a2e5348f8cc68f54dbb8163e02ea011dad6684c573db1edd2b4f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f7e2002ba860d7c6eaeea9fc13faa7b7f10c610a129987d15be7f08dc1c4e2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e2002ba860d7c6eaeea9fc13faa7b7f10c610a129987d15be7f08dc1c4e2df->enter($__internal_f7e2002ba860d7c6eaeea9fc13faa7b7f10c610a129987d15be7f08dc1c4e2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9db1d7387a2e5348f8cc68f54dbb8163e02ea011dad6684c573db1edd2b4f95f->leave($__internal_9db1d7387a2e5348f8cc68f54dbb8163e02ea011dad6684c573db1edd2b4f95f_prof);

        
        $__internal_f7e2002ba860d7c6eaeea9fc13faa7b7f10c610a129987d15be7f08dc1c4e2df->leave($__internal_f7e2002ba860d7c6eaeea9fc13faa7b7f10c610a129987d15be7f08dc1c4e2df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
