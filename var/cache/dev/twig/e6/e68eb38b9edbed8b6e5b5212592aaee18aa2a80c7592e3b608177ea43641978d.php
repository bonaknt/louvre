<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e47fadd5cc5ceef5f4394a3f0c8218558a8791f1f27dc21b06c29d5172e73d0e extends Twig_Template
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
        $__internal_f6e7ae9919c0bc3ac221a4c633261c5c79ffb5f41d33f0645e10ccb3e94f9d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e7ae9919c0bc3ac221a4c633261c5c79ffb5f41d33f0645e10ccb3e94f9d21->enter($__internal_f6e7ae9919c0bc3ac221a4c633261c5c79ffb5f41d33f0645e10ccb3e94f9d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_17624ab4abf6cdb0ffbafac79cc8793f93263fdba26c1473ecdb211adb35f8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17624ab4abf6cdb0ffbafac79cc8793f93263fdba26c1473ecdb211adb35f8b0->enter($__internal_17624ab4abf6cdb0ffbafac79cc8793f93263fdba26c1473ecdb211adb35f8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_f6e7ae9919c0bc3ac221a4c633261c5c79ffb5f41d33f0645e10ccb3e94f9d21->leave($__internal_f6e7ae9919c0bc3ac221a4c633261c5c79ffb5f41d33f0645e10ccb3e94f9d21_prof);

        
        $__internal_17624ab4abf6cdb0ffbafac79cc8793f93263fdba26c1473ecdb211adb35f8b0->leave($__internal_17624ab4abf6cdb0ffbafac79cc8793f93263fdba26c1473ecdb211adb35f8b0_prof);

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