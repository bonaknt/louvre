<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fca38abee030726fa5d1519687b2a03b864a4e320a62fcf5fb461883d17da694 extends Twig_Template
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
        $__internal_03fe691fca3059e5a7f0da4c5dc19dfa0ed52813beffc74d2b6fa90fc2ed267b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fe691fca3059e5a7f0da4c5dc19dfa0ed52813beffc74d2b6fa90fc2ed267b->enter($__internal_03fe691fca3059e5a7f0da4c5dc19dfa0ed52813beffc74d2b6fa90fc2ed267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_822741dee8ded5cc63947ba86518b84e15ff037df6e795637f382397f14a65b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822741dee8ded5cc63947ba86518b84e15ff037df6e795637f382397f14a65b7->enter($__internal_822741dee8ded5cc63947ba86518b84e15ff037df6e795637f382397f14a65b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03fe691fca3059e5a7f0da4c5dc19dfa0ed52813beffc74d2b6fa90fc2ed267b->leave($__internal_03fe691fca3059e5a7f0da4c5dc19dfa0ed52813beffc74d2b6fa90fc2ed267b_prof);

        
        $__internal_822741dee8ded5cc63947ba86518b84e15ff037df6e795637f382397f14a65b7->leave($__internal_822741dee8ded5cc63947ba86518b84e15ff037df6e795637f382397f14a65b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
