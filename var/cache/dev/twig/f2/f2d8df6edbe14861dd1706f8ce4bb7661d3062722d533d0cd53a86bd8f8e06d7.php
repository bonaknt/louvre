<?php

/* MKLouvreBundle:Default:recapitulatif.html.twig */
class __TwigTemplate_a112c1ca7400f2a5ce8894cdc4e04f1b948338205cd52f6c97ac4a5086d6db5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:recapitulatif.html.twig", 1);
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
        $__internal_276c587c52bd1e0943bc73bb5f28874d992e02df8b0f2c448993275ff13c7710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c587c52bd1e0943bc73bb5f28874d992e02df8b0f2c448993275ff13c7710->enter($__internal_276c587c52bd1e0943bc73bb5f28874d992e02df8b0f2c448993275ff13c7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:recapitulatif.html.twig"));

        $__internal_10af2faf0fb6449005f39e2d47adb2e24e4d59316bef94cc952311e13cde6e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10af2faf0fb6449005f39e2d47adb2e24e4d59316bef94cc952311e13cde6e4d->enter($__internal_10af2faf0fb6449005f39e2d47adb2e24e4d59316bef94cc952311e13cde6e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276c587c52bd1e0943bc73bb5f28874d992e02df8b0f2c448993275ff13c7710->leave($__internal_276c587c52bd1e0943bc73bb5f28874d992e02df8b0f2c448993275ff13c7710_prof);

        
        $__internal_10af2faf0fb6449005f39e2d47adb2e24e4d59316bef94cc952311e13cde6e4d->leave($__internal_10af2faf0fb6449005f39e2d47adb2e24e4d59316bef94cc952311e13cde6e4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8bc56f2bf402cde3c495260d49ad9b9502803d47fa395a9773b9526e292b014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bc56f2bf402cde3c495260d49ad9b9502803d47fa395a9773b9526e292b014->enter($__internal_f8bc56f2bf402cde3c495260d49ad9b9502803d47fa395a9773b9526e292b014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee644959269ce64a4c7d72192ffd320f6e73e2dbd2d7e79f09ed982b68d836af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee644959269ce64a4c7d72192ffd320f6e73e2dbd2d7e79f09ed982b68d836af->enter($__internal_ee644959269ce64a4c7d72192ffd320f6e73e2dbd2d7e79f09ed982b68d836af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Récapitulatif de la commande</h1>

  <hr>
<div class=\"well\">

<strong>Adresse e-mail</strong> : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : $this->getContext($context, "date_reservation")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")), "html", null, true);
        echo " <br />

<strong>Nombre de billet</strong> : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Reference de la Commande</strong> : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
        echo " <br />

 <br />

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 24
            echo "  
<strong>Nom</strong> : ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nom", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prenom", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "dtNaissance", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nationalite", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "tReduit", array()), "html", null, true);
            echo " <br />
<strong>Type de tarif</strong> : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "tpTarif", array()), "html", null, true);
            echo " <br />
<strong>prix</strong> : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
<hr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
<strong>Total prix</strong> : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "

<div class=\"form-group text-right\">
    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_paiement");
        echo "\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
";
        
        $__internal_ee644959269ce64a4c7d72192ffd320f6e73e2dbd2d7e79f09ed982b68d836af->leave($__internal_ee644959269ce64a4c7d72192ffd320f6e73e2dbd2d7e79f09ed982b68d836af_prof);

        
        $__internal_f8bc56f2bf402cde3c495260d49ad9b9502803d47fa395a9773b9526e292b014->leave($__internal_f8bc56f2bf402cde3c495260d49ad9b9502803d47fa395a9773b9526e292b014_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  130 => 36,  127 => 35,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  90 => 24,  86 => 23,  79 => 19,  74 => 17,  69 => 15,  64 => 13,  59 => 11,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Récapitulatif de la commande</h1>

  <hr>
<div class=\"well\">

<strong>Adresse e-mail</strong> : {{ email }} <br />

<strong>Date de la réservation</strong> : {{ date_reservation|date(\"d/m/Y\") }} <br />

<strong>Type de billet</strong> : {{ type_billet }} <br />

<strong>Nombre de billet</strong> : {{ nombre_billet }} <br />

<strong>Reference de la Commande</strong> : {{ reference }} <br />

 <br />

{% for tickets in nom %}
  
<strong>Nom</strong> : {{ tickets.nom }} <br /> 
<strong>Prenom</strong> : {{ tickets.prenom }} <br />
<strong>date de naissance</strong> : {{tickets.dtNaissance|date(\"d/m/Y\")}} <br />
<strong>Nationalité</strong> : {{tickets.nationalite}} <br />
<strong>Tarif réduit</strong> : {{tickets.tReduit}} <br />
<strong>Type de tarif</strong> : {{tickets.tpTarif}} <br />
<strong>prix</strong> : {{tickets.prix}}€
<hr>

{% endfor %}

<strong>Total prix</strong> : {{total}}

<div class=\"form-group text-right\">
    <a href=\"{{ path('mk_louvre_paiement') }}\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
{% endblock %}", "MKLouvreBundle:Default:recapitulatif.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/recapitulatif.html.twig");
    }
}
