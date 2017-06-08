<?php

/* MKLouvreBundle:Default:reservation.html.twig */
class __TwigTemplate_3a0fe635d130dae0123877d7a99585cd5e9d66d1fe8158da66c0d57124fb4d33 extends Twig_Template
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
        $__internal_948c6060605ba9fe686f1158886cd2ae379b0126c13f8de101c8f7754dcc7779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948c6060605ba9fe686f1158886cd2ae379b0126c13f8de101c8f7754dcc7779->enter($__internal_948c6060605ba9fe686f1158886cd2ae379b0126c13f8de101c8f7754dcc7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $__internal_714dfcf7bad0acbb8d603bc0d9a7136af4ecad9cc270097d3632acc2ae78832a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714dfcf7bad0acbb8d603bc0d9a7136af4ecad9cc270097d3632acc2ae78832a->enter($__internal_714dfcf7bad0acbb8d603bc0d9a7136af4ecad9cc270097d3632acc2ae78832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948c6060605ba9fe686f1158886cd2ae379b0126c13f8de101c8f7754dcc7779->leave($__internal_948c6060605ba9fe686f1158886cd2ae379b0126c13f8de101c8f7754dcc7779_prof);

        
        $__internal_714dfcf7bad0acbb8d603bc0d9a7136af4ecad9cc270097d3632acc2ae78832a->leave($__internal_714dfcf7bad0acbb8d603bc0d9a7136af4ecad9cc270097d3632acc2ae78832a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_964906579625cac0a4fb23456d414e591f9857185ea86e5807e9d868091c716c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964906579625cac0a4fb23456d414e591f9857185ea86e5807e9d868091c716c->enter($__internal_964906579625cac0a4fb23456d414e591f9857185ea86e5807e9d868091c716c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9d42fd1f40b99d9ebfe9e41e20a054c9622dccd9df597f02385418a23611938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d42fd1f40b99d9ebfe9e41e20a054c9622dccd9df597f02385418a23611938->enter($__internal_c9d42fd1f40b99d9ebfe9e41e20a054c9622dccd9df597f02385418a23611938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_c9d42fd1f40b99d9ebfe9e41e20a054c9622dccd9df597f02385418a23611938->leave($__internal_c9d42fd1f40b99d9ebfe9e41e20a054c9622dccd9df597f02385418a23611938_prof);

        
        $__internal_964906579625cac0a4fb23456d414e591f9857185ea86e5807e9d868091c716c->leave($__internal_964906579625cac0a4fb23456d414e591f9857185ea86e5807e9d868091c716c_prof);

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
    <input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
</div>

{{ form_end(form) }}
</div>
{% endblock %}", "MKLouvreBundle:Default:reservation.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\reservation.html.twig");
    }
}
