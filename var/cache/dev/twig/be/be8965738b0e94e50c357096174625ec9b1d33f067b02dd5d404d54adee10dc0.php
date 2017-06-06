<?php

/* layout1.html.twig */
class __TwigTemplate_57a34868f9f231085581583613ce3b76ce3d3f56ddc6b2d8e40179b841dd8ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "layout1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7ec236e6e2090778727464d4bf8d0ed8ec05f91e45fa0bef3390ebe931f864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7ec236e6e2090778727464d4bf8d0ed8ec05f91e45fa0bef3390ebe931f864->enter($__internal_ef7ec236e6e2090778727464d4bf8d0ed8ec05f91e45fa0bef3390ebe931f864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $__internal_769d0f3de076962f0ad8ec7cfb1817e132e78beb15c90cec75ef3cb555cf92a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769d0f3de076962f0ad8ec7cfb1817e132e78beb15c90cec75ef3cb555cf92a9->enter($__internal_769d0f3de076962f0ad8ec7cfb1817e132e78beb15c90cec75ef3cb555cf92a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7ec236e6e2090778727464d4bf8d0ed8ec05f91e45fa0bef3390ebe931f864->leave($__internal_ef7ec236e6e2090778727464d4bf8d0ed8ec05f91e45fa0bef3390ebe931f864_prof);

        
        $__internal_769d0f3de076962f0ad8ec7cfb1817e132e78beb15c90cec75ef3cb555cf92a9->leave($__internal_769d0f3de076962f0ad8ec7cfb1817e132e78beb15c90cec75ef3cb555cf92a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d94d1adeb3622ecd4e6e61c2355c4f295faec2269f782a1d0f2d24f1a6c94d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d94d1adeb3622ecd4e6e61c2355c4f295faec2269f782a1d0f2d24f1a6c94d4->enter($__internal_2d94d1adeb3622ecd4e6e61c2355c4f295faec2269f782a1d0f2d24f1a6c94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e84cf5972d8092b1ab7bbd063a7cc69953b2a2a468a5b74ad5cbf573fae391de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84cf5972d8092b1ab7bbd063a7cc69953b2a2a468a5b74ad5cbf573fae391de->enter($__internal_e84cf5972d8092b1ab7bbd063a7cc69953b2a2a468a5b74ad5cbf573fae391de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e84cf5972d8092b1ab7bbd063a7cc69953b2a2a468a5b74ad5cbf573fae391de->leave($__internal_e84cf5972d8092b1ab7bbd063a7cc69953b2a2a468a5b74ad5cbf573fae391de_prof);

        
        $__internal_2d94d1adeb3622ecd4e6e61c2355c4f295faec2269f782a1d0f2d24f1a6c94d4->leave($__internal_2d94d1adeb3622ecd4e6e61c2355c4f295faec2269f782a1d0f2d24f1a6c94d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f25e4cca54f5f014ceffdfa726e129ef29ec6bbec799aa7e2623baa8b67f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f25e4cca54f5f014ceffdfa726e129ef29ec6bbec799aa7e2623baa8b67f29->enter($__internal_81f25e4cca54f5f014ceffdfa726e129ef29ec6bbec799aa7e2623baa8b67f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bc58085d91848ff7cee5f9d5a69c52da3c6b8d620846a46469739118fc9404d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc58085d91848ff7cee5f9d5a69c52da3c6b8d620846a46469739118fc9404d->enter($__internal_1bc58085d91848ff7cee5f9d5a69c52da3c6b8d620846a46469739118fc9404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_1bc58085d91848ff7cee5f9d5a69c52da3c6b8d620846a46469739118fc9404d->leave($__internal_1bc58085d91848ff7cee5f9d5a69c52da3c6b8d620846a46469739118fc9404d_prof);

        
        $__internal_81f25e4cca54f5f014ceffdfa726e129ef29ec6bbec799aa7e2623baa8b67f29->leave($__internal_81f25e4cca54f5f014ceffdfa726e129ef29ec6bbec799aa7e2623baa8b67f29_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cbd2b317b0bc650470e64cc49c28fda9d2ba8dd5f5f1a78d0d815548ea6d9717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd2b317b0bc650470e64cc49c28fda9d2ba8dd5f5f1a78d0d815548ea6d9717->enter($__internal_cbd2b317b0bc650470e64cc49c28fda9d2ba8dd5f5f1a78d0d815548ea6d9717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2cbe4ab8bf8d1667868f6e9614edeafeca584526c4910c3fb82bef0d89125e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbe4ab8bf8d1667868f6e9614edeafeca584526c4910c3fb82bef0d89125e70->enter($__internal_2cbe4ab8bf8d1667868f6e9614edeafeca584526c4910c3fb82bef0d89125e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_2cbe4ab8bf8d1667868f6e9614edeafeca584526c4910c3fb82bef0d89125e70->leave($__internal_2cbe4ab8bf8d1667868f6e9614edeafeca584526c4910c3fb82bef0d89125e70_prof);

        
        $__internal_cbd2b317b0bc650470e64cc49c28fda9d2ba8dd5f5f1a78d0d815548ea6d9717->leave($__internal_cbd2b317b0bc650470e64cc49c28fda9d2ba8dd5f5f1a78d0d815548ea6d9717_prof);

    }

    public function getTemplateName()
    {
        return "layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "layout1.html.twig", "C:\\xampp\\htdocs\\louvre\\app\\Resources\\views\\layout1.html.twig");
    }
}
