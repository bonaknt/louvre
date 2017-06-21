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
        $__internal_1865f0aff3c2a0f22c2291c2afded96a58e8ed4feb35a14308b6716feff95073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1865f0aff3c2a0f22c2291c2afded96a58e8ed4feb35a14308b6716feff95073->enter($__internal_1865f0aff3c2a0f22c2291c2afded96a58e8ed4feb35a14308b6716feff95073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:ticket.html.twig"));

        $__internal_dea7941b0b7fb360a8e982873fc108d16abc89366e77577e3d2a57d2473c553d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea7941b0b7fb360a8e982873fc108d16abc89366e77577e3d2a57d2473c553d->enter($__internal_dea7941b0b7fb360a8e982873fc108d16abc89366e77577e3d2a57d2473c553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1865f0aff3c2a0f22c2291c2afded96a58e8ed4feb35a14308b6716feff95073->leave($__internal_1865f0aff3c2a0f22c2291c2afded96a58e8ed4feb35a14308b6716feff95073_prof);

        
        $__internal_dea7941b0b7fb360a8e982873fc108d16abc89366e77577e3d2a57d2473c553d->leave($__internal_dea7941b0b7fb360a8e982873fc108d16abc89366e77577e3d2a57d2473c553d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a387401d40edfcdd8c8204deb452b227438e9038b04e3560f0d76d4b30ae790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a387401d40edfcdd8c8204deb452b227438e9038b04e3560f0d76d4b30ae790->enter($__internal_4a387401d40edfcdd8c8204deb452b227438e9038b04e3560f0d76d4b30ae790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_158bc2b906da290a9926c33cdb37c4ba7a7591426818cc5e1a1ed8d37abe5d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158bc2b906da290a9926c33cdb37c4ba7a7591426818cc5e1a1ed8d37abe5d94->enter($__internal_158bc2b906da290a9926c33cdb37c4ba7a7591426818cc5e1a1ed8d37abe5d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Formulaire de réservation</h1>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "      <div class=\"alert alert-danger\" style=\"width:52%\">
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
        echo "  <hr>
<div class=\"well\">
  ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 16
            echo "
  ";
            // line 18
            echo "  <div class=\"form-group\">
    ";
            // line 20
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
            echo "

    ";
            // line 23
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 27
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

   <div class=\"form-group\">
    ";
            // line 33
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prenom"));
            echo "

    ";
            // line 36
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 40
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 46
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de naissance"));
            echo "

    ";
            // line 49
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 53
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'widget', array("attr" => array("class" => "form-control datepicker1")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 59
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nationalité"));
            echo "

    ";
            // line 62
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 66
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 72
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Tarif réduit "));
            echo "

    ";
            // line 75
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 79
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
        // line 83
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_158bc2b906da290a9926c33cdb37c4ba7a7591426818cc5e1a1ed8d37abe5d94->leave($__internal_158bc2b906da290a9926c33cdb37c4ba7a7591426818cc5e1a1ed8d37abe5d94_prof);

        
        $__internal_4a387401d40edfcdd8c8204deb452b227438e9038b04e3560f0d76d4b30ae790->leave($__internal_4a387401d40edfcdd8c8204deb452b227438e9038b04e3560f0d76d4b30ae790_prof);

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
        return array (  201 => 83,  190 => 79,  183 => 75,  177 => 72,  168 => 66,  161 => 62,  155 => 59,  146 => 53,  139 => 49,  133 => 46,  124 => 40,  117 => 36,  111 => 33,  102 => 27,  95 => 23,  89 => 20,  86 => 18,  83 => 16,  79 => 15,  75 => 14,  71 => 12,  62 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
  {% for flashMessage in app.session.flashbag.get('errors') %}
      <div class=\"alert alert-danger\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
  {% endfor %}
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
