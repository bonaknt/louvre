<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_acd5389a7153fcb329eadcb6cb3863269d419a0cf1b15a914b4a340540639fb9 extends Twig_Template
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
        $__internal_da1dad82c5590acbc6a3d582d95d0e3a0d1e330bce86124f09e977bda10e6ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1dad82c5590acbc6a3d582d95d0e3a0d1e330bce86124f09e977bda10e6ce5->enter($__internal_da1dad82c5590acbc6a3d582d95d0e3a0d1e330bce86124f09e977bda10e6ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_24e16bf2bf09361d8955c90d4b01c15adc74324e92f3979b929514adf1306ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e16bf2bf09361d8955c90d4b01c15adc74324e92f3979b929514adf1306ed0->enter($__internal_24e16bf2bf09361d8955c90d4b01c15adc74324e92f3979b929514adf1306ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_da1dad82c5590acbc6a3d582d95d0e3a0d1e330bce86124f09e977bda10e6ce5->leave($__internal_da1dad82c5590acbc6a3d582d95d0e3a0d1e330bce86124f09e977bda10e6ce5_prof);

        
        $__internal_24e16bf2bf09361d8955c90d4b01c15adc74324e92f3979b929514adf1306ed0->leave($__internal_24e16bf2bf09361d8955c90d4b01c15adc74324e92f3979b929514adf1306ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
