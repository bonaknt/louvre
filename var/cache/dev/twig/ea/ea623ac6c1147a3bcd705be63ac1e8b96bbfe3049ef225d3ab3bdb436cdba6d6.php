<?php

/* MKLouvreBundle:Default:paiement.html.twig */
class __TwigTemplate_c55d4b483a67fe8e558f6b53b738decf885d774a568cc6246026bdbc39f5f8c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:paiement.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a636a104f160b0c167a44009fe5ab3b64cc9e434b6f4e2d5cf15e7a1263e7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a636a104f160b0c167a44009fe5ab3b64cc9e434b6f4e2d5cf15e7a1263e7fc->enter($__internal_7a636a104f160b0c167a44009fe5ab3b64cc9e434b6f4e2d5cf15e7a1263e7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $__internal_b5444b7567ccebd0f81a5f8cfde5bebab704a863d509e9dc6d14d3d8e14c7a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5444b7567ccebd0f81a5f8cfde5bebab704a863d509e9dc6d14d3d8e14c7a71->enter($__internal_b5444b7567ccebd0f81a5f8cfde5bebab704a863d509e9dc6d14d3d8e14c7a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a636a104f160b0c167a44009fe5ab3b64cc9e434b6f4e2d5cf15e7a1263e7fc->leave($__internal_7a636a104f160b0c167a44009fe5ab3b64cc9e434b6f4e2d5cf15e7a1263e7fc_prof);

        
        $__internal_b5444b7567ccebd0f81a5f8cfde5bebab704a863d509e9dc6d14d3d8e14c7a71->leave($__internal_b5444b7567ccebd0f81a5f8cfde5bebab704a863d509e9dc6d14d3d8e14c7a71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88590dea9ee8b836f1482055f6bc16beee31b1221f56538e6ce3b57f84c4b583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88590dea9ee8b836f1482055f6bc16beee31b1221f56538e6ce3b57f84c4b583->enter($__internal_88590dea9ee8b836f1482055f6bc16beee31b1221f56538e6ce3b57f84c4b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4045bd84f07fe784bbd145c49b7441f07b3445c1b7f71b1ca36cbef7a1426efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4045bd84f07fe784bbd145c49b7441f07b3445c1b7f71b1ca36cbef7a1426efa->enter($__internal_4045bd84f07fe784bbd145c49b7441f07b3445c1b7f71b1ca36cbef7a1426efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Paiement Stripe</h1>

  <hr>
<div class=\"well\">


</div>
";
        
        $__internal_4045bd84f07fe784bbd145c49b7441f07b3445c1b7f71b1ca36cbef7a1426efa->leave($__internal_4045bd84f07fe784bbd145c49b7441f07b3445c1b7f71b1ca36cbef7a1426efa_prof);

        
        $__internal_88590dea9ee8b836f1482055f6bc16beee31b1221f56538e6ce3b57f84c4b583->leave($__internal_88590dea9ee8b836f1482055f6bc16beee31b1221f56538e6ce3b57f84c4b583_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MKLouvreBundle::layout.html.twig\" %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Paiement Stripe</h1>

  <hr>
<div class=\"well\">


</div>
{% endblock %}", "MKLouvreBundle:Default:paiement.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/paiement.html.twig");
    }
}
