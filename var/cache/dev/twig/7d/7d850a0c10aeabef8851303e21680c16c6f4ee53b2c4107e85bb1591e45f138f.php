<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_890a5a5e1c88ee1cdbd13cb86c14e5ef960f626ecdf032e50796cf97821ee45d extends Twig_Template
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
        $__internal_d089412ed2981d0770df0ae714a8acba0d6b70f89d1403be28ceb6e32e100499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d089412ed2981d0770df0ae714a8acba0d6b70f89d1403be28ceb6e32e100499->enter($__internal_d089412ed2981d0770df0ae714a8acba0d6b70f89d1403be28ceb6e32e100499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_9eda76f692f265113506a4ee84039d06dc1cf37f09a1d1efa968b4074d8b76b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eda76f692f265113506a4ee84039d06dc1cf37f09a1d1efa968b4074d8b76b8->enter($__internal_9eda76f692f265113506a4ee84039d06dc1cf37f09a1d1efa968b4074d8b76b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d089412ed2981d0770df0ae714a8acba0d6b70f89d1403be28ceb6e32e100499->leave($__internal_d089412ed2981d0770df0ae714a8acba0d6b70f89d1403be28ceb6e32e100499_prof);

        
        $__internal_9eda76f692f265113506a4ee84039d06dc1cf37f09a1d1efa968b4074d8b76b8->leave($__internal_9eda76f692f265113506a4ee84039d06dc1cf37f09a1d1efa968b4074d8b76b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
