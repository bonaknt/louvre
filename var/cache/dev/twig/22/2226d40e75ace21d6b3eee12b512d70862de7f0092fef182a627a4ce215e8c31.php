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
        $__internal_4762e2b3e317c9a1e6b6fe0440f1b9623ca4b034609e4793722fd8859644984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4762e2b3e317c9a1e6b6fe0440f1b9623ca4b034609e4793722fd8859644984f->enter($__internal_4762e2b3e317c9a1e6b6fe0440f1b9623ca4b034609e4793722fd8859644984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d7e0ddf3fc664e82f0aaeada69a0c773d0b80c6a8ed561b0331797ffd14856a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e0ddf3fc664e82f0aaeada69a0c773d0b80c6a8ed561b0331797ffd14856a6->enter($__internal_d7e0ddf3fc664e82f0aaeada69a0c773d0b80c6a8ed561b0331797ffd14856a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4762e2b3e317c9a1e6b6fe0440f1b9623ca4b034609e4793722fd8859644984f->leave($__internal_4762e2b3e317c9a1e6b6fe0440f1b9623ca4b034609e4793722fd8859644984f_prof);

        
        $__internal_d7e0ddf3fc664e82f0aaeada69a0c773d0b80c6a8ed561b0331797ffd14856a6->leave($__internal_d7e0ddf3fc664e82f0aaeada69a0c773d0b80c6a8ed561b0331797ffd14856a6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e43439ee0911ce2a87cd43039476552c57f78e96331e6f438ce5b26e4ca24ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e43439ee0911ce2a87cd43039476552c57f78e96331e6f438ce5b26e4ca24ec->enter($__internal_1e43439ee0911ce2a87cd43039476552c57f78e96331e6f438ce5b26e4ca24ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac993aba0fe37ee2ce6e2295ede7cb1b63cd035a6369030344cd9a692ea4bb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac993aba0fe37ee2ce6e2295ede7cb1b63cd035a6369030344cd9a692ea4bb78->enter($__internal_ac993aba0fe37ee2ce6e2295ede7cb1b63cd035a6369030344cd9a692ea4bb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac993aba0fe37ee2ce6e2295ede7cb1b63cd035a6369030344cd9a692ea4bb78->leave($__internal_ac993aba0fe37ee2ce6e2295ede7cb1b63cd035a6369030344cd9a692ea4bb78_prof);

        
        $__internal_1e43439ee0911ce2a87cd43039476552c57f78e96331e6f438ce5b26e4ca24ec->leave($__internal_1e43439ee0911ce2a87cd43039476552c57f78e96331e6f438ce5b26e4ca24ec_prof);

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
