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
        $__internal_e3f7ab805681a6138c8e203a447a7a8efe32539f2572930a0d0787470ce3d7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f7ab805681a6138c8e203a447a7a8efe32539f2572930a0d0787470ce3d7f2->enter($__internal_e3f7ab805681a6138c8e203a447a7a8efe32539f2572930a0d0787470ce3d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $__internal_771e6c9fe3e609e76bc15d74d5e8b8c9b4cac19f7da6ff72a02faeb765d6c63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771e6c9fe3e609e76bc15d74d5e8b8c9b4cac19f7da6ff72a02faeb765d6c63c->enter($__internal_771e6c9fe3e609e76bc15d74d5e8b8c9b4cac19f7da6ff72a02faeb765d6c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f7ab805681a6138c8e203a447a7a8efe32539f2572930a0d0787470ce3d7f2->leave($__internal_e3f7ab805681a6138c8e203a447a7a8efe32539f2572930a0d0787470ce3d7f2_prof);

        
        $__internal_771e6c9fe3e609e76bc15d74d5e8b8c9b4cac19f7da6ff72a02faeb765d6c63c->leave($__internal_771e6c9fe3e609e76bc15d74d5e8b8c9b4cac19f7da6ff72a02faeb765d6c63c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a76092320b55a023e00c7a0885e393d80ee7e77f80bee741e64c185d02fe92f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76092320b55a023e00c7a0885e393d80ee7e77f80bee741e64c185d02fe92f6->enter($__internal_a76092320b55a023e00c7a0885e393d80ee7e77f80bee741e64c185d02fe92f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1939cd75920bb22d7a54db79af17c615c722f85663033926dfa576ac88d9a657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1939cd75920bb22d7a54db79af17c615c722f85663033926dfa576ac88d9a657->enter($__internal_1939cd75920bb22d7a54db79af17c615c722f85663033926dfa576ac88d9a657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "      
      <div class=\"alert alert-danger\" style=\"width:52%\">
          ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  <hr>
<div class=\"well\">
  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  <div class=\"form-group\">
    ";
        // line 19
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-1"), "label" => "Email"));
        echo "

    ";
        // line 22
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

    <div class=\"col-sm-offset-2 col-sm-8\">
      ";
        // line 26
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
 
   <div class=\"form-group\">
    ";
        // line 32
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Date de réservation"));
        echo "

    ";
        // line 35
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 39
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dtReservation", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 44
        echo "   \t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Type de billet"));
        echo "

    ";
        // line 47
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 51
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tpBillet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 57
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'label', array("label_attr" => array("class" => "col-sm-3"), "label" => "Nombre de billet"));
        echo "

    ";
        // line 60
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 64
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBillet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

<div class=\"form-group text-right\">
    <input type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_1939cd75920bb22d7a54db79af17c615c722f85663033926dfa576ac88d9a657->leave($__internal_1939cd75920bb22d7a54db79af17c615c722f85663033926dfa576ac88d9a657_prof);

        
        $__internal_a76092320b55a023e00c7a0885e393d80ee7e77f80bee741e64c185d02fe92f6->leave($__internal_a76092320b55a023e00c7a0885e393d80ee7e77f80bee741e64c185d02fe92f6_prof);

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
        return array (  172 => 72,  160 => 64,  153 => 60,  147 => 57,  138 => 51,  131 => 47,  125 => 44,  117 => 39,  110 => 35,  104 => 32,  95 => 26,  88 => 22,  82 => 19,  76 => 15,  72 => 13,  63 => 10,  59 => 8,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-1'}}) }}

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
    <input type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

{{ form_end(form) }}
</div>
{% endblock %}", "MKLouvreBundle:Default:reservation.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/reservation.html.twig");
    }
}
