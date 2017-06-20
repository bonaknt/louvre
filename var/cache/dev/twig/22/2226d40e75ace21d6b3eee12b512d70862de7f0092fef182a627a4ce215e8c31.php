<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_3620f00ba2e98cbb58a8382d8b4948535142e6bea441c0e0796ce85295b47fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a08d5b4fd72c79e68a70f0a0d69a523967b2b8145c551a9fb415f11988704b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08d5b4fd72c79e68a70f0a0d69a523967b2b8145c551a9fb415f11988704b4d->enter($__internal_a08d5b4fd72c79e68a70f0a0d69a523967b2b8145c551a9fb415f11988704b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_82156bbb39b7183711d382f45529e1b598ce8b526134aa71d284b4837b0c7029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82156bbb39b7183711d382f45529e1b598ce8b526134aa71d284b4837b0c7029->enter($__internal_82156bbb39b7183711d382f45529e1b598ce8b526134aa71d284b4837b0c7029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a08d5b4fd72c79e68a70f0a0d69a523967b2b8145c551a9fb415f11988704b4d->leave($__internal_a08d5b4fd72c79e68a70f0a0d69a523967b2b8145c551a9fb415f11988704b4d_prof);

        
        $__internal_82156bbb39b7183711d382f45529e1b598ce8b526134aa71d284b4837b0c7029->leave($__internal_82156bbb39b7183711d382f45529e1b598ce8b526134aa71d284b4837b0c7029_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d7c835aeff0dad54503ca5ff061e7d9ca9476a5351457e440ea42978fad7a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7c835aeff0dad54503ca5ff061e7d9ca9476a5351457e440ea42978fad7a3b->enter($__internal_5d7c835aeff0dad54503ca5ff061e7d9ca9476a5351457e440ea42978fad7a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8706508f3cf2b07279c7312fcf2c0f480f979d64bcb7313725c1367f51d96bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8706508f3cf2b07279c7312fcf2c0f480f979d64bcb7313725c1367f51d96bf5->enter($__internal_8706508f3cf2b07279c7312fcf2c0f480f979d64bcb7313725c1367f51d96bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8706508f3cf2b07279c7312fcf2c0f480f979d64bcb7313725c1367f51d96bf5->leave($__internal_8706508f3cf2b07279c7312fcf2c0f480f979d64bcb7313725c1367f51d96bf5_prof);

        
        $__internal_5d7c835aeff0dad54503ca5ff061e7d9ca9476a5351457e440ea42978fad7a3b->leave($__internal_5d7c835aeff0dad54503ca5ff061e7d9ca9476a5351457e440ea42978fad7a3b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
