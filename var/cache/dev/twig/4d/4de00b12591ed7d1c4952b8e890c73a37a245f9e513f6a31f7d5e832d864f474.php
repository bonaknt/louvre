<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_fe9f667a8f07556f94bd1be3d8b288a0823c6ab2e483897920e5b16a4af8b3cc extends Twig_Template
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
        $__internal_6dc2db4415da7cd7b57deab51ab10cbb9b6f46a7f52311818fceb8d460e35303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc2db4415da7cd7b57deab51ab10cbb9b6f46a7f52311818fceb8d460e35303->enter($__internal_6dc2db4415da7cd7b57deab51ab10cbb9b6f46a7f52311818fceb8d460e35303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_7026860cc3a716217c51f89f0117e485ecb592173fa3e3290fbecf7bdf6c0863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7026860cc3a716217c51f89f0117e485ecb592173fa3e3290fbecf7bdf6c0863->enter($__internal_7026860cc3a716217c51f89f0117e485ecb592173fa3e3290fbecf7bdf6c0863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6dc2db4415da7cd7b57deab51ab10cbb9b6f46a7f52311818fceb8d460e35303->leave($__internal_6dc2db4415da7cd7b57deab51ab10cbb9b6f46a7f52311818fceb8d460e35303_prof);

        
        $__internal_7026860cc3a716217c51f89f0117e485ecb592173fa3e3290fbecf7bdf6c0863->leave($__internal_7026860cc3a716217c51f89f0117e485ecb592173fa3e3290fbecf7bdf6c0863_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
