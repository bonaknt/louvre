<?php

/* @MKLouvre/Default/layout.html.twig */
class __TwigTemplate_3d1e261ea2193ad088ec73e58afe1a02fbdc97fefc52ba6bea77eab293e92606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "@MKLouvre/Default/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0cd418f79a279e731596de58fbc92b94ac6b03ff45194dfd630bb2574ee5fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cd418f79a279e731596de58fbc92b94ac6b03ff45194dfd630bb2574ee5fb0->enter($__internal_b0cd418f79a279e731596de58fbc92b94ac6b03ff45194dfd630bb2574ee5fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/layout.html.twig"));

        $__internal_52d147818921ddf83cef9eb2f1cc35389ea44fba3389fd9b796919856b25709d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d147818921ddf83cef9eb2f1cc35389ea44fba3389fd9b796919856b25709d->enter($__internal_52d147818921ddf83cef9eb2f1cc35389ea44fba3389fd9b796919856b25709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0cd418f79a279e731596de58fbc92b94ac6b03ff45194dfd630bb2574ee5fb0->leave($__internal_b0cd418f79a279e731596de58fbc92b94ac6b03ff45194dfd630bb2574ee5fb0_prof);

        
        $__internal_52d147818921ddf83cef9eb2f1cc35389ea44fba3389fd9b796919856b25709d->leave($__internal_52d147818921ddf83cef9eb2f1cc35389ea44fba3389fd9b796919856b25709d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f943cdf9190faf002bcd92f34b6af256c67ded5f41c8442846ac7d9b914b14a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f943cdf9190faf002bcd92f34b6af256c67ded5f41c8442846ac7d9b914b14a1->enter($__internal_f943cdf9190faf002bcd92f34b6af256c67ded5f41c8442846ac7d9b914b14a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c9bc07477d83e907418ea0b03610202f6d1f6b30ace80e8d96df922a831cd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9bc07477d83e907418ea0b03610202f6d1f6b30ace80e8d96df922a831cd8e->enter($__internal_0c9bc07477d83e907418ea0b03610202f6d1f6b30ace80e8d96df922a831cd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c9bc07477d83e907418ea0b03610202f6d1f6b30ace80e8d96df922a831cd8e->leave($__internal_0c9bc07477d83e907418ea0b03610202f6d1f6b30ace80e8d96df922a831cd8e_prof);

        
        $__internal_f943cdf9190faf002bcd92f34b6af256c67ded5f41c8442846ac7d9b914b14a1->leave($__internal_f943cdf9190faf002bcd92f34b6af256c67ded5f41c8442846ac7d9b914b14a1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_06231b026c8e432b61a7b9c89caa83c317c11cce67f5202c678b8ac1f9b3fc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06231b026c8e432b61a7b9c89caa83c317c11cce67f5202c678b8ac1f9b3fc92->enter($__internal_06231b026c8e432b61a7b9c89caa83c317c11cce67f5202c678b8ac1f9b3fc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4875ac23c2ef930bddf2b10a6dbc93852f5745555c15d7501bf32e909b281f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4875ac23c2ef930bddf2b10a6dbc93852f5745555c15d7501bf32e909b281f27->enter($__internal_4875ac23c2ef930bddf2b10a6dbc93852f5745555c15d7501bf32e909b281f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Accueil</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_4875ac23c2ef930bddf2b10a6dbc93852f5745555c15d7501bf32e909b281f27->leave($__internal_4875ac23c2ef930bddf2b10a6dbc93852f5745555c15d7501bf32e909b281f27_prof);

        
        $__internal_06231b026c8e432b61a7b9c89caa83c317c11cce67f5202c678b8ac1f9b3fc92->leave($__internal_06231b026c8e432b61a7b9c89caa83c317c11cce67f5202c678b8ac1f9b3fc92_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_40038c5a5c723b81ee8b840ece1430385a01f7c58923c0d046a2848acc9e17d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40038c5a5c723b81ee8b840ece1430385a01f7c58923c0d046a2848acc9e17d6->enter($__internal_40038c5a5c723b81ee8b840ece1430385a01f7c58923c0d046a2848acc9e17d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e294c31aa4ecee2f3e7b972a7452846b96dfc99da67388970834f7668560f8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e294c31aa4ecee2f3e7b972a7452846b96dfc99da67388970834f7668560f8b3->enter($__internal_e294c31aa4ecee2f3e7b972a7452846b96dfc99da67388970834f7668560f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_e294c31aa4ecee2f3e7b972a7452846b96dfc99da67388970834f7668560f8b3->leave($__internal_e294c31aa4ecee2f3e7b972a7452846b96dfc99da67388970834f7668560f8b3_prof);

        
        $__internal_40038c5a5c723b81ee8b840ece1430385a01f7c58923c0d046a2848acc9e17d6->leave($__internal_40038c5a5c723b81ee8b840ece1430385a01f7c58923c0d046a2848acc9e17d6_prof);

    }

    public function getTemplateName()
    {
        return "@MKLouvre/Default/layout.html.twig";
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
        return new Twig_Source("{% extends \"MKLouvreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Accueil</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "@MKLouvre/Default/layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
