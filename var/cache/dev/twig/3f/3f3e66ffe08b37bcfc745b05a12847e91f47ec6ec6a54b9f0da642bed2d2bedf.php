<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_05a91322b87b5f7a96ca9797b6a9d8d3bf69663e971995ce848ed0c44289ebe0 extends Twig_Template
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
        $__internal_c7ec1359b4fc8cc6790d04e146e7e1ad3196eb5201d748590d635642acde982c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ec1359b4fc8cc6790d04e146e7e1ad3196eb5201d748590d635642acde982c->enter($__internal_c7ec1359b4fc8cc6790d04e146e7e1ad3196eb5201d748590d635642acde982c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c25b38c4a275600b2bbbdb0ef5c2a37c0bff726baeb0ecf95d01f83f4f29f8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25b38c4a275600b2bbbdb0ef5c2a37c0bff726baeb0ecf95d01f83f4f29f8a3->enter($__internal_c25b38c4a275600b2bbbdb0ef5c2a37c0bff726baeb0ecf95d01f83f4f29f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7ec1359b4fc8cc6790d04e146e7e1ad3196eb5201d748590d635642acde982c->leave($__internal_c7ec1359b4fc8cc6790d04e146e7e1ad3196eb5201d748590d635642acde982c_prof);

        
        $__internal_c25b38c4a275600b2bbbdb0ef5c2a37c0bff726baeb0ecf95d01f83f4f29f8a3->leave($__internal_c25b38c4a275600b2bbbdb0ef5c2a37c0bff726baeb0ecf95d01f83f4f29f8a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
