<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4f4d3faa391e0f24e4d5f1beea1a9fb317f00549cd477e1e662eb5d88eb9d52e extends Twig_Template
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
        $__internal_19c20ffd50b60a0f6e244301ae29550aefd97e8fbf90511456c5fd9ffe8ca636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c20ffd50b60a0f6e244301ae29550aefd97e8fbf90511456c5fd9ffe8ca636->enter($__internal_19c20ffd50b60a0f6e244301ae29550aefd97e8fbf90511456c5fd9ffe8ca636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_1a0c449db91b14bdca33d8821590324b11a87bcf5d4afe8bf8b372b6df47164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0c449db91b14bdca33d8821590324b11a87bcf5d4afe8bf8b372b6df47164d->enter($__internal_1a0c449db91b14bdca33d8821590324b11a87bcf5d4afe8bf8b372b6df47164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_19c20ffd50b60a0f6e244301ae29550aefd97e8fbf90511456c5fd9ffe8ca636->leave($__internal_19c20ffd50b60a0f6e244301ae29550aefd97e8fbf90511456c5fd9ffe8ca636_prof);

        
        $__internal_1a0c449db91b14bdca33d8821590324b11a87bcf5d4afe8bf8b372b6df47164d->leave($__internal_1a0c449db91b14bdca33d8821590324b11a87bcf5d4afe8bf8b372b6df47164d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
