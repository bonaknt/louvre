<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6092450d68cb44a9b87b581720ccbfa2b26c75dc67f8b066d4e90ba2a1c6bb15 extends Twig_Template
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
        $__internal_7dfefb00b397e5dcca7250ea2dafcaf3b41ead23fbe427dc83896c24e9e94c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfefb00b397e5dcca7250ea2dafcaf3b41ead23fbe427dc83896c24e9e94c96->enter($__internal_7dfefb00b397e5dcca7250ea2dafcaf3b41ead23fbe427dc83896c24e9e94c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_60bfee4733c067dfac5dd8fe41dc8e69e7318eb64d5a13c06f4584dc79847018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bfee4733c067dfac5dd8fe41dc8e69e7318eb64d5a13c06f4584dc79847018->enter($__internal_60bfee4733c067dfac5dd8fe41dc8e69e7318eb64d5a13c06f4584dc79847018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7dfefb00b397e5dcca7250ea2dafcaf3b41ead23fbe427dc83896c24e9e94c96->leave($__internal_7dfefb00b397e5dcca7250ea2dafcaf3b41ead23fbe427dc83896c24e9e94c96_prof);

        
        $__internal_60bfee4733c067dfac5dd8fe41dc8e69e7318eb64d5a13c06f4584dc79847018->leave($__internal_60bfee4733c067dfac5dd8fe41dc8e69e7318eb64d5a13c06f4584dc79847018_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
