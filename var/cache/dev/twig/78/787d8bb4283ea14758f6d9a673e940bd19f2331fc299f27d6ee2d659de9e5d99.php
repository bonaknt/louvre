<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d6b2561c170abf3e84dd5075eab0aa2bab1597f47fceaf4cdb3fa081b1853dfa extends Twig_Template
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
        $__internal_987ed5125499b97b7dd7e3a6a9455853cae19213168c03576e915e90fbddfc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987ed5125499b97b7dd7e3a6a9455853cae19213168c03576e915e90fbddfc6b->enter($__internal_987ed5125499b97b7dd7e3a6a9455853cae19213168c03576e915e90fbddfc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_78315150fa817293a906b16a6f7f5352718e8dbeddf6ec68d559db4082ed2f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78315150fa817293a906b16a6f7f5352718e8dbeddf6ec68d559db4082ed2f9a->enter($__internal_78315150fa817293a906b16a6f7f5352718e8dbeddf6ec68d559db4082ed2f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_987ed5125499b97b7dd7e3a6a9455853cae19213168c03576e915e90fbddfc6b->leave($__internal_987ed5125499b97b7dd7e3a6a9455853cae19213168c03576e915e90fbddfc6b_prof);

        
        $__internal_78315150fa817293a906b16a6f7f5352718e8dbeddf6ec68d559db4082ed2f9a->leave($__internal_78315150fa817293a906b16a6f7f5352718e8dbeddf6ec68d559db4082ed2f9a_prof);

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
