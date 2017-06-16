<?php

/* @MKLouvre/Default/reservation.html.twig */
class __TwigTemplate_22e3db4d6acc7c2ee65cef5681ad3f6c050485035041fd1e6917eb0817749593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "@MKLouvre/Default/reservation.html.twig", 1);
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
        $__internal_4fd97a11af9b204af06ee43868ad60773c491a31eae6850c9508f67c323ceb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd97a11af9b204af06ee43868ad60773c491a31eae6850c9508f67c323ceb17->enter($__internal_4fd97a11af9b204af06ee43868ad60773c491a31eae6850c9508f67c323ceb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/reservation.html.twig"));

        $__internal_ef5ff6c1d35b8027328e3995ba52376f91d39743568411a61595650a7b833582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5ff6c1d35b8027328e3995ba52376f91d39743568411a61595650a7b833582->enter($__internal_ef5ff6c1d35b8027328e3995ba52376f91d39743568411a61595650a7b833582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd97a11af9b204af06ee43868ad60773c491a31eae6850c9508f67c323ceb17->leave($__internal_4fd97a11af9b204af06ee43868ad60773c491a31eae6850c9508f67c323ceb17_prof);

        
        $__internal_ef5ff6c1d35b8027328e3995ba52376f91d39743568411a61595650a7b833582->leave($__internal_ef5ff6c1d35b8027328e3995ba52376f91d39743568411a61595650a7b833582_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_846f0f7334c4a2cc3e97be0302e3de895a430be06699697230f1ae2bbd9404df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846f0f7334c4a2cc3e97be0302e3de895a430be06699697230f1ae2bbd9404df->enter($__internal_846f0f7334c4a2cc3e97be0302e3de895a430be06699697230f1ae2bbd9404df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c41d671c17ed15ab584f20433f0dee2c45d79577cfd1b0d8715962e09db59c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41d671c17ed15ab584f20433f0dee2c45d79577cfd1b0d8715962e09db59c1a->enter($__internal_c41d671c17ed15ab584f20433f0dee2c45d79577cfd1b0d8715962e09db59c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  <div class=\"form-group\">
    ";
        // line 25
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-1"), "label" => "Email"));
        echo "

    ";
        // line 28
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

    <div class=\"col-sm-offset-2 col-sm-8\">
      ";
        // line 32
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "email")));
        echo "
    </div>
  </div>
 
   <div class=\"form-group\">
    ";
        // line 38
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Date de réservation"));
        echo "

    ";
        // line 41
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 45
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'widget', array("attr" => array("class" => "datepicker", "name" => "dtReservation")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 50
        echo "   \t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3", "name" => "dtReservation"), "label" => "Type de billet"));
        echo "

    ";
        // line 53
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 57
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "tpBillet")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 63
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Nombre de billet"));
        echo "

    ";
        // line 66
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 70
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'widget', array("attr" => array("class" => "form-control", "name" => "nbBillet")));
        echo "
    </div>
  </div>

<div class=\"form-group text-right\">
    <input type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

";
        // line 78
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_c41d671c17ed15ab584f20433f0dee2c45d79577cfd1b0d8715962e09db59c1a->leave($__internal_c41d671c17ed15ab584f20433f0dee2c45d79577cfd1b0d8715962e09db59c1a_prof);

        
        $__internal_846f0f7334c4a2cc3e97be0302e3de895a430be06699697230f1ae2bbd9404df->leave($__internal_846f0f7334c4a2cc3e97be0302e3de895a430be06699697230f1ae2bbd9404df_prof);

    }

    public function getTemplateName()
    {
        return "@MKLouvre/Default/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 78,  178 => 70,  171 => 66,  165 => 63,  156 => 57,  149 => 53,  143 => 50,  135 => 45,  128 => 41,  122 => 38,  113 => 32,  106 => 28,  100 => 25,  94 => 21,  90 => 19,  81 => 16,  77 => 14,  73 => 13,  70 => 12,  61 => 9,  57 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
      {{ form_widget(form.email, {'attr': {'class': 'form-control', 'name' : 'email'}}) }}
    </div>
  </div>
 
   <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.dtReservation, \"Date de réservation\", {'label_attr': {'class': 'col-sm-3'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.dtReservation) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.dtReservation, {'attr': {'class': 'datepicker', 'name' : 'dtReservation'}}) }}
    </div>
  </div>
  <div class=\"form-group\">
    {# Génération du label. #}
   \t{{ form_label(form.tpBillet, \"Type de billet\", {'label_attr': {'class': 'col-sm-3', 'name' : 'dtReservation'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.tpBillet) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.tpBillet, {'attr': {'class': 'form-control', 'name' : 'tpBillet' }}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbBillet, \"Nombre de billet\", {'label_attr': {'class': 'col-sm-3'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbBillet) }}

    <div class=\"col-sm-8\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbBillet, {'attr': {'class': 'form-control', 'name' : 'nbBillet'}}) }}
    </div>
  </div>

<div class=\"form-group text-right\">
    <input type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

{{ form_end(form) }}
</div>
{% endblock %}", "@MKLouvre/Default/reservation.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\reservation.html.twig");
    }
}
