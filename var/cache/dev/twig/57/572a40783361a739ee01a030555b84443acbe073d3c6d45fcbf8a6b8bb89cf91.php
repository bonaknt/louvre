<?php

/* MKLouvreBundle:Default:reservation.html.twig */
class __TwigTemplate_b4c02d64113ffe6a7c8ae78b067ff4be145daf813e83c4c220fed3024d0c0039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:reservation.html.twig", 1);
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
        $__internal_d02e086779ddab7cb0c130aeb4dd60e76d2a1a652bfc609548cf76e69cb1695a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02e086779ddab7cb0c130aeb4dd60e76d2a1a652bfc609548cf76e69cb1695a->enter($__internal_d02e086779ddab7cb0c130aeb4dd60e76d2a1a652bfc609548cf76e69cb1695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $__internal_6bd79f9caaeabf25a2805fe6746f1c5d1393492f1b4b04afe5d3892dcdd45b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd79f9caaeabf25a2805fe6746f1c5d1393492f1b4b04afe5d3892dcdd45b3d->enter($__internal_6bd79f9caaeabf25a2805fe6746f1c5d1393492f1b4b04afe5d3892dcdd45b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02e086779ddab7cb0c130aeb4dd60e76d2a1a652bfc609548cf76e69cb1695a->leave($__internal_d02e086779ddab7cb0c130aeb4dd60e76d2a1a652bfc609548cf76e69cb1695a_prof);

        
        $__internal_6bd79f9caaeabf25a2805fe6746f1c5d1393492f1b4b04afe5d3892dcdd45b3d->leave($__internal_6bd79f9caaeabf25a2805fe6746f1c5d1393492f1b4b04afe5d3892dcdd45b3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_062f28e99a6d46da4865df83bcf2a74bd4f250ecdc22403bc010495e05906523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062f28e99a6d46da4865df83bcf2a74bd4f250ecdc22403bc010495e05906523->enter($__internal_062f28e99a6d46da4865df83bcf2a74bd4f250ecdc22403bc010495e05906523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00224bc8ddbb2a5759680bda0926a2cb5fb662557faafa4b59f18ac18f761228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00224bc8ddbb2a5759680bda0926a2cb5fb662557faafa4b59f18ac18f761228->enter($__internal_00224bc8ddbb2a5759680bda0926a2cb5fb662557faafa4b59f18ac18f761228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "      ";
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
        echo "  <h1>Formulaire de réservation</h1>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "      
      <div class=\"alert alert-danger\" style=\"width:52%\">
          ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  <hr>
<div class=\"well\">

  ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  <div class=\"form-group\">
    ";
        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-1"), "label" => "Email"));
        echo "

    ";
        // line 29
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

    <div class=\"col-sm-offset-2 col-sm-8\">
      ";
        // line 33
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
 
   <div class=\"form-group\">
    ";
        // line 39
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Date de réservation"));
        echo "

    ";
        // line 42
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 46
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 51
        echo "   \t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Type de billet"));
        echo "

    ";
        // line 54
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 58
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 64
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Nombre de billet"));
        echo "

    ";
        // line 67
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 71
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

<div class=\"form-group text-right\">
    <input formnovalidate type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_00224bc8ddbb2a5759680bda0926a2cb5fb662557faafa4b59f18ac18f761228->leave($__internal_00224bc8ddbb2a5759680bda0926a2cb5fb662557faafa4b59f18ac18f761228_prof);

        
        $__internal_062f28e99a6d46da4865df83bcf2a74bd4f250ecdc22403bc010495e05906523->leave($__internal_062f28e99a6d46da4865df83bcf2a74bd4f250ecdc22403bc010495e05906523_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 79,  179 => 71,  172 => 67,  166 => 64,  157 => 58,  150 => 54,  144 => 51,  136 => 46,  129 => 42,  123 => 39,  114 => 33,  107 => 29,  101 => 26,  95 => 22,  90 => 19,  81 => 16,  77 => 14,  73 => 13,  70 => 12,  61 => 9,  57 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
      {% for flashMessage in app.session.flashbag.get('success') %}
      
      <div class=\"alert alert-success\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
    {% endfor %}
  <h1>Formulaire de réservation</h1>
  {% for flashMessage in app.session.flashbag.get('errors') %}
      
      <div class=\"alert alert-danger\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
  {% endfor %}
  <hr>
<div class=\"well\">

  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-1', }}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.email) }}

    <div class=\"col-sm-offset-2 col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
 
   <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.dtReservation, \"Date de réservation\", {'label_attr': {'class': 'col-sm-3'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.dtReservation) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.dtReservation, {'attr': {'class': 'datepicker'}}) }}
    </div>
  </div>
  <div class=\"form-group\">
    {# Génération du label. #}
   \t{{ form_label(form.tpBillet, \"Type de billet\", {'label_attr': {'class': 'col-sm-3'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.tpBillet) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.tpBillet, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbBillet, \"Nombre de billet\", {'label_attr': {'class': 'col-sm-3'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbBillet) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbBillet, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

<div class=\"form-group text-right\">
    <input formnovalidate type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

{{ form_end(form) }}
</div>
{% endblock %}", "MKLouvreBundle:Default:reservation.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/reservation.html.twig");
    }
}
