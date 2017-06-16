<?php

/* @Twig/Exception/exception.xml.twig */
class __TwigTemplate_e9d289d2dc8b9ba51d8c26064fbbba24e855a2d3cd5c4c53975215a4a44d5260 extends Twig_Template
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
        $__internal_2d7d504b727782aad33789ed9c9355efcde4836c4992ed3bb10fa402ab81e066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7d504b727782aad33789ed9c9355efcde4836c4992ed3bb10fa402ab81e066->enter($__internal_2d7d504b727782aad33789ed9c9355efcde4836c4992ed3bb10fa402ab81e066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        $__internal_ca9c6e944c89f846811d1627c542ff144f23caf0ac8a39711a4bcc2f2130af3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9c6e944c89f846811d1627c542ff144f23caf0ac8a39711a4bcc2f2130af3c->enter($__internal_ca9c6e944c89f846811d1627c542ff144f23caf0ac8a39711a4bcc2f2130af3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            $this->loadTemplate("@Twig/Exception/traces.xml.twig", "@Twig/Exception/exception.xml.twig", 6)->display(array("exception" => $context["e"]));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_2d7d504b727782aad33789ed9c9355efcde4836c4992ed3bb10fa402ab81e066->leave($__internal_2d7d504b727782aad33789ed9c9355efcde4836c4992ed3bb10fa402ab81e066_prof);

        
        $__internal_ca9c6e944c89f846811d1627c542ff144f23caf0ac8a39711a4bcc2f2130af3c->leave($__internal_ca9c6e944c89f846811d1627c542ff144f23caf0ac8a39711a4bcc2f2130af3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  50 => 7,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{% include '@Twig/Exception/traces.xml.twig' with { 'exception': e } only %}
    </exception>
{% endfor %}
</error>
", "@Twig/Exception/exception.xml.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.xml.twig");
    }
}
