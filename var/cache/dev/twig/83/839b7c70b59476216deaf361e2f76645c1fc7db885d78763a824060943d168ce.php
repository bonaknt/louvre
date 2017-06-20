<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_00271adf12cd88e6221ed1a6e8c1f7f613f41977c5d38dd2caf3bc698ab617f1 extends Twig_Template
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
        $__internal_e8db92eea9c00b34101fb2c84ad849c38fa69c2e99651034a026b362fa481f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8db92eea9c00b34101fb2c84ad849c38fa69c2e99651034a026b362fa481f70->enter($__internal_e8db92eea9c00b34101fb2c84ad849c38fa69c2e99651034a026b362fa481f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4bec4142c6847633b1cfe061e9324f6b1828054f74232b4c66520e1115e39b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bec4142c6847633b1cfe061e9324f6b1828054f74232b4c66520e1115e39b8c->enter($__internal_4bec4142c6847633b1cfe061e9324f6b1828054f74232b4c66520e1115e39b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e8db92eea9c00b34101fb2c84ad849c38fa69c2e99651034a026b362fa481f70->leave($__internal_e8db92eea9c00b34101fb2c84ad849c38fa69c2e99651034a026b362fa481f70_prof);

        
        $__internal_4bec4142c6847633b1cfe061e9324f6b1828054f74232b4c66520e1115e39b8c->leave($__internal_4bec4142c6847633b1cfe061e9324f6b1828054f74232b4c66520e1115e39b8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
