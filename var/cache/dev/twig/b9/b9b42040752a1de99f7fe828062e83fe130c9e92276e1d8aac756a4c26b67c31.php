<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_439c8d88005e97c7740de9c6e5a8b88c77cbc88d8c1e6713aa3188b2e2f52551 extends Twig_Template
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
        $__internal_4d0645fdb9b2baff047b405017a2f5fb9216babf756da6c777f9f19e4ed2dcb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0645fdb9b2baff047b405017a2f5fb9216babf756da6c777f9f19e4ed2dcb2->enter($__internal_4d0645fdb9b2baff047b405017a2f5fb9216babf756da6c777f9f19e4ed2dcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1110b259a9aa2c4ccacfaceb2023a54fc33558fba97fd383e62dc33e05f34dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1110b259a9aa2c4ccacfaceb2023a54fc33558fba97fd383e62dc33e05f34dc0->enter($__internal_1110b259a9aa2c4ccacfaceb2023a54fc33558fba97fd383e62dc33e05f34dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4d0645fdb9b2baff047b405017a2f5fb9216babf756da6c777f9f19e4ed2dcb2->leave($__internal_4d0645fdb9b2baff047b405017a2f5fb9216babf756da6c777f9f19e4ed2dcb2_prof);

        
        $__internal_1110b259a9aa2c4ccacfaceb2023a54fc33558fba97fd383e62dc33e05f34dc0->leave($__internal_1110b259a9aa2c4ccacfaceb2023a54fc33558fba97fd383e62dc33e05f34dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
