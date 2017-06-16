<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3ddc1e38a645b540660c7b4e436585831032ab06e5614bf2f7c9969ca472c27b extends Twig_Template
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
        $__internal_b70ab46443d9e4cb4a70318ec67d5997cde7d6a9c564b5da3a27d724e5dacb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70ab46443d9e4cb4a70318ec67d5997cde7d6a9c564b5da3a27d724e5dacb60->enter($__internal_b70ab46443d9e4cb4a70318ec67d5997cde7d6a9c564b5da3a27d724e5dacb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8943bd42cb119fd7cf4d0a00b729c17a9fd2542a697b44eb5eb390aa925aceca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8943bd42cb119fd7cf4d0a00b729c17a9fd2542a697b44eb5eb390aa925aceca->enter($__internal_8943bd42cb119fd7cf4d0a00b729c17a9fd2542a697b44eb5eb390aa925aceca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b70ab46443d9e4cb4a70318ec67d5997cde7d6a9c564b5da3a27d724e5dacb60->leave($__internal_b70ab46443d9e4cb4a70318ec67d5997cde7d6a9c564b5da3a27d724e5dacb60_prof);

        
        $__internal_8943bd42cb119fd7cf4d0a00b729c17a9fd2542a697b44eb5eb390aa925aceca->leave($__internal_8943bd42cb119fd7cf4d0a00b729c17a9fd2542a697b44eb5eb390aa925aceca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6525a5f9658e01274eccbceeeebac582c3d6a431afcb7f3e5a762fa521668064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6525a5f9658e01274eccbceeeebac582c3d6a431afcb7f3e5a762fa521668064->enter($__internal_6525a5f9658e01274eccbceeeebac582c3d6a431afcb7f3e5a762fa521668064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76efd06481367313b4ec42c94a90d46d077ce43f0d0bebfbdf2e6f0c6f16f72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76efd06481367313b4ec42c94a90d46d077ce43f0d0bebfbdf2e6f0c6f16f72b->enter($__internal_76efd06481367313b4ec42c94a90d46d077ce43f0d0bebfbdf2e6f0c6f16f72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_76efd06481367313b4ec42c94a90d46d077ce43f0d0bebfbdf2e6f0c6f16f72b->leave($__internal_76efd06481367313b4ec42c94a90d46d077ce43f0d0bebfbdf2e6f0c6f16f72b_prof);

        
        $__internal_6525a5f9658e01274eccbceeeebac582c3d6a431afcb7f3e5a762fa521668064->leave($__internal_6525a5f9658e01274eccbceeeebac582c3d6a431afcb7f3e5a762fa521668064_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
