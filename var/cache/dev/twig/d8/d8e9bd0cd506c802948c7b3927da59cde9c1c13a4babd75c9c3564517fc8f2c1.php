<?php

/* layout1.html.twig */
class __TwigTemplate_3a8d47b610fa206791366aa99cc7dc214869e79447438c998592f7206bd46181 extends Twig_Template
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
        $__internal_d2b0b1776adf2d3d3692af44105ac77ab76ca4c153b3a735c7545209a40e6aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b0b1776adf2d3d3692af44105ac77ab76ca4c153b3a735c7545209a40e6aed->enter($__internal_d2b0b1776adf2d3d3692af44105ac77ab76ca4c153b3a735c7545209a40e6aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $__internal_6e036abc8220aeed75aadd0453ed0f868ef681d782f69f643eb620e4bafb9843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e036abc8220aeed75aadd0453ed0f868ef681d782f69f643eb620e4bafb9843->enter($__internal_6e036abc8220aeed75aadd0453ed0f868ef681d782f69f643eb620e4bafb9843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b0b1776adf2d3d3692af44105ac77ab76ca4c153b3a735c7545209a40e6aed->leave($__internal_d2b0b1776adf2d3d3692af44105ac77ab76ca4c153b3a735c7545209a40e6aed_prof);

        
        $__internal_6e036abc8220aeed75aadd0453ed0f868ef681d782f69f643eb620e4bafb9843->leave($__internal_6e036abc8220aeed75aadd0453ed0f868ef681d782f69f643eb620e4bafb9843_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1fe9193f776447b530bfa26fd70d34116c9ee4cff6a50578623a746e7091e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1fe9193f776447b530bfa26fd70d34116c9ee4cff6a50578623a746e7091e2->enter($__internal_6b1fe9193f776447b530bfa26fd70d34116c9ee4cff6a50578623a746e7091e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e67e1203a5f3c6f14eab099c3c7dc23db557e0f2dd6365ff3cbd8bd89e810bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e67e1203a5f3c6f14eab099c3c7dc23db557e0f2dd6365ff3cbd8bd89e810bf->enter($__internal_5e67e1203a5f3c6f14eab099c3c7dc23db557e0f2dd6365ff3cbd8bd89e810bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5e67e1203a5f3c6f14eab099c3c7dc23db557e0f2dd6365ff3cbd8bd89e810bf->leave($__internal_5e67e1203a5f3c6f14eab099c3c7dc23db557e0f2dd6365ff3cbd8bd89e810bf_prof);

        
        $__internal_6b1fe9193f776447b530bfa26fd70d34116c9ee4cff6a50578623a746e7091e2->leave($__internal_6b1fe9193f776447b530bfa26fd70d34116c9ee4cff6a50578623a746e7091e2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8845c5d449be4cbdcf3cc2e9b37be5149933970b08bcb7b81cc767cd985521e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8845c5d449be4cbdcf3cc2e9b37be5149933970b08bcb7b81cc767cd985521e->enter($__internal_f8845c5d449be4cbdcf3cc2e9b37be5149933970b08bcb7b81cc767cd985521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8717aba2f37771ba451e57647596a591f31e3324fd7e11b92b5020bb1e55290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8717aba2f37771ba451e57647596a591f31e3324fd7e11b92b5020bb1e55290->enter($__internal_f8717aba2f37771ba451e57647596a591f31e3324fd7e11b92b5020bb1e55290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8717aba2f37771ba451e57647596a591f31e3324fd7e11b92b5020bb1e55290->leave($__internal_f8717aba2f37771ba451e57647596a591f31e3324fd7e11b92b5020bb1e55290_prof);

        
        $__internal_f8845c5d449be4cbdcf3cc2e9b37be5149933970b08bcb7b81cc767cd985521e->leave($__internal_f8845c5d449be4cbdcf3cc2e9b37be5149933970b08bcb7b81cc767cd985521e_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7559a7be69b64318551eb50f6b23b8d465aa72ec9836e70c971233ea3a9b5f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7559a7be69b64318551eb50f6b23b8d465aa72ec9836e70c971233ea3a9b5f4e->enter($__internal_7559a7be69b64318551eb50f6b23b8d465aa72ec9836e70c971233ea3a9b5f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_fc6b385efcc44daad89010d6b4614cd175cc43bf5733fef5d957d803eed203a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6b385efcc44daad89010d6b4614cd175cc43bf5733fef5d957d803eed203a1->enter($__internal_fc6b385efcc44daad89010d6b4614cd175cc43bf5733fef5d957d803eed203a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_fc6b385efcc44daad89010d6b4614cd175cc43bf5733fef5d957d803eed203a1->leave($__internal_fc6b385efcc44daad89010d6b4614cd175cc43bf5733fef5d957d803eed203a1_prof);

        
        $__internal_7559a7be69b64318551eb50f6b23b8d465aa72ec9836e70c971233ea3a9b5f4e->leave($__internal_7559a7be69b64318551eb50f6b23b8d465aa72ec9836e70c971233ea3a9b5f4e_prof);

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
