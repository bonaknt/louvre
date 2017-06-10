<?php

/* MKLouvreBundle:Default:index.html.twig */
class __TwigTemplate_6833bbeb00218a2825e6a7b050b7c40f1f00493cdcf2c49e8384723f7ee8666c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MKLouvreBundle:Default:layout.html.twig", "MKLouvreBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c1580b06a6c35e756a37bb0f881aee217c0d59226fb4eadb5ca10c677d84322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1580b06a6c35e756a37bb0f881aee217c0d59226fb4eadb5ca10c677d84322->enter($__internal_8c1580b06a6c35e756a37bb0f881aee217c0d59226fb4eadb5ca10c677d84322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $__internal_ecf06f92d85ef827537ae54a1911d52f751b936f4015cb8dc0fa8abc5538fdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf06f92d85ef827537ae54a1911d52f751b936f4015cb8dc0fa8abc5538fdfc->enter($__internal_ecf06f92d85ef827537ae54a1911d52f751b936f4015cb8dc0fa8abc5538fdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c1580b06a6c35e756a37bb0f881aee217c0d59226fb4eadb5ca10c677d84322->leave($__internal_8c1580b06a6c35e756a37bb0f881aee217c0d59226fb4eadb5ca10c677d84322_prof);

        
        $__internal_ecf06f92d85ef827537ae54a1911d52f751b936f4015cb8dc0fa8abc5538fdfc->leave($__internal_ecf06f92d85ef827537ae54a1911d52f751b936f4015cb8dc0fa8abc5538fdfc_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6d64053d47a448348bfa3ffb6b76858a86e6372eb1c2c8a5d8fcf51220123a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d64053d47a448348bfa3ffb6b76858a86e6372eb1c2c8a5d8fcf51220123a14->enter($__internal_6d64053d47a448348bfa3ffb6b76858a86e6372eb1c2c8a5d8fcf51220123a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_5967bd27aaf25bfaad504134ffcdbee1d4cb1d546bd328bff9f87b4880d1a26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5967bd27aaf25bfaad504134ffcdbee1d4cb1d546bd328bff9f87b4880d1a26b->enter($__internal_5967bd27aaf25bfaad504134ffcdbee1d4cb1d546bd328bff9f87b4880d1a26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "      
      <div class=\"alert alert-success\" style=\"width:52%\">
          ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  <h2>L'accueil du site</h2>



";
        
        $__internal_5967bd27aaf25bfaad504134ffcdbee1d4cb1d546bd328bff9f87b4880d1a26b->leave($__internal_5967bd27aaf25bfaad504134ffcdbee1d4cb1d546bd328bff9f87b4880d1a26b_prof);

        
        $__internal_6d64053d47a448348bfa3ffb6b76858a86e6372eb1c2c8a5d8fcf51220123a14->leave($__internal_6d64053d47a448348bfa3ffb6b76858a86e6372eb1c2c8a5d8fcf51220123a14_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  58 => 9,  54 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"MKLouvreBundle:Default:layout.html.twig\" %}

{% block ocplatform_body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
      
      <div class=\"alert alert-success\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
    {% endfor %}
  <h2>L'accueil du site</h2>



{% endblock %}
", "MKLouvreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/index.html.twig");
    }
}
