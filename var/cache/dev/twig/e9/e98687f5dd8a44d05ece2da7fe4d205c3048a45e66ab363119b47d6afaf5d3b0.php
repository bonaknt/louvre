<?php

/* MKLouvreBundle:Default:ticket.html.twig */
class __TwigTemplate_0b9a31b3466d77b2f76f29dbdc2bd561fd13ecb38138257c5edfdc53dd504b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:ticket.html.twig", 1);
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
        $__internal_4eed910ad2198d47a4bdce2eb1d8c631322402accec9ed051c73b03b046169ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eed910ad2198d47a4bdce2eb1d8c631322402accec9ed051c73b03b046169ad->enter($__internal_4eed910ad2198d47a4bdce2eb1d8c631322402accec9ed051c73b03b046169ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:ticket.html.twig"));

        $__internal_f15d96a945613fd142dbed6a54a14bc8460d4d4621a601329f649b23ce95d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15d96a945613fd142dbed6a54a14bc8460d4d4621a601329f649b23ce95d9a5->enter($__internal_f15d96a945613fd142dbed6a54a14bc8460d4d4621a601329f649b23ce95d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eed910ad2198d47a4bdce2eb1d8c631322402accec9ed051c73b03b046169ad->leave($__internal_4eed910ad2198d47a4bdce2eb1d8c631322402accec9ed051c73b03b046169ad_prof);

        
        $__internal_f15d96a945613fd142dbed6a54a14bc8460d4d4621a601329f649b23ce95d9a5->leave($__internal_f15d96a945613fd142dbed6a54a14bc8460d4d4621a601329f649b23ce95d9a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee16f470fafb994251639cb209fffd2c8442668c72634704f26dc601eed15a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee16f470fafb994251639cb209fffd2c8442668c72634704f26dc601eed15a1->enter($__internal_1ee16f470fafb994251639cb209fffd2c8442668c72634704f26dc601eed15a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2cd0a2b0dce2f9b47b4e150e3016ff4aa58fe7f640dddf29622b77ed0aaefcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cd0a2b0dce2f9b47b4e150e3016ff4aa58fe7f640dddf29622b77ed0aaefcf->enter($__internal_b2cd0a2b0dce2f9b47b4e150e3016ff4aa58fe7f640dddf29622b77ed0aaefcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Formulaire de réservation</h1>

  <hr>
<div class=\"well\">
  ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 12
            echo "
  ";
            // line 14
            echo "  <div class=\"form-group\">
    ";
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
            echo "

    ";
            // line 19
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 23
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

   <div class=\"form-group\">
    ";
            // line 29
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prenom"));
            echo "

    ";
            // line 32
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 36
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 42
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de naissance"));
            echo "

    ";
            // line 45
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 49
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'widget', array("attr" => array("class" => "form-control datepicker1")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 55
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nationalité"));
            echo "

    ";
            // line 58
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 62
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 68
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Tarif réduit "));
            echo "

    ";
            // line 71
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 75
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'widget', array("attr" => array("class" => "")));
            echo "
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_b2cd0a2b0dce2f9b47b4e150e3016ff4aa58fe7f640dddf29622b77ed0aaefcf->leave($__internal_b2cd0a2b0dce2f9b47b4e150e3016ff4aa58fe7f640dddf29622b77ed0aaefcf_prof);

        
        $__internal_1ee16f470fafb994251639cb209fffd2c8442668c72634704f26dc601eed15a1->leave($__internal_1ee16f470fafb994251639cb209fffd2c8442668c72634704f26dc601eed15a1_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 79,  173 => 75,  166 => 71,  160 => 68,  151 => 62,  144 => 58,  138 => 55,  129 => 49,  122 => 45,  116 => 42,  107 => 36,  100 => 32,  94 => 29,  85 => 23,  78 => 19,  72 => 16,  69 => 14,  66 => 12,  62 => 11,  58 => 10,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Formulaire de réservation</h1>

  <hr>
<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
  {% for ticket in form.tickets %}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.nom, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.nom) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.nom, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

   <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.prenom, \"Prenom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.prenom) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.prenom, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.dtNaissance, \"Date de naissance\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.dtNaissance) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.dtNaissance, {'attr': {'class': 'form-control datepicker1'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.nationalite, \"Nationalité\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.nationalite) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.nationalite, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.tReduit, \"Tarif réduit \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.tReduit) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.tReduit, {'attr': {'class': ''}}) }}
    </div>
  </div>
  {% endfor %}
  {{ form_end(form) }}
</div>
{% endblock %}", "MKLouvreBundle:Default:ticket.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/ticket.html.twig");
    }
}
