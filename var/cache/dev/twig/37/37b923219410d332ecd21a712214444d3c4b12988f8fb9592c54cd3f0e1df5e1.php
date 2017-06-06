<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9d5ce6b71acb3f19cc479ca358c3b1229d9d0145fe73e5b87b1aecb87011a7f0 extends Twig_Template
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
        $__internal_c615857cac17b0463928c3bb6a6958666a18e96cf4cb6ab1f824aa76bdb18338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c615857cac17b0463928c3bb6a6958666a18e96cf4cb6ab1f824aa76bdb18338->enter($__internal_c615857cac17b0463928c3bb6a6958666a18e96cf4cb6ab1f824aa76bdb18338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_31bee2d63b18eb7751a9eef386ebb463f24688029c26aaa464fd0033f32635d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bee2d63b18eb7751a9eef386ebb463f24688029c26aaa464fd0033f32635d7->enter($__internal_31bee2d63b18eb7751a9eef386ebb463f24688029c26aaa464fd0033f32635d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c615857cac17b0463928c3bb6a6958666a18e96cf4cb6ab1f824aa76bdb18338->leave($__internal_c615857cac17b0463928c3bb6a6958666a18e96cf4cb6ab1f824aa76bdb18338_prof);

        
        $__internal_31bee2d63b18eb7751a9eef386ebb463f24688029c26aaa464fd0033f32635d7->leave($__internal_31bee2d63b18eb7751a9eef386ebb463f24688029c26aaa464fd0033f32635d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
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

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
