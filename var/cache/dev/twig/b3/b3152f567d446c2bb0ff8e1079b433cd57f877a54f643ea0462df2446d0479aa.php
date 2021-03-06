<?php

/* MKLouvreBundle:Default:recapitulatif.html.twig */
class __TwigTemplate_10611facd7380ee385b1f403952a47521374dc8dd94eab4b288df2a49b490196 extends Twig_Template
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
        $__internal_0ee427f62a72e7b2d7cb7f88ccf084576b8a623d88a202c6a481c5b680ccc780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee427f62a72e7b2d7cb7f88ccf084576b8a623d88a202c6a481c5b680ccc780->enter($__internal_0ee427f62a72e7b2d7cb7f88ccf084576b8a623d88a202c6a481c5b680ccc780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:recapitulatif.html.twig"));

        $__internal_1dfc36941668a9f8134b0e7c5dae67a3e0bfbeef1e6987df0849c784e2ebabe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfc36941668a9f8134b0e7c5dae67a3e0bfbeef1e6987df0849c784e2ebabe3->enter($__internal_1dfc36941668a9f8134b0e7c5dae67a3e0bfbeef1e6987df0849c784e2ebabe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee427f62a72e7b2d7cb7f88ccf084576b8a623d88a202c6a481c5b680ccc780->leave($__internal_0ee427f62a72e7b2d7cb7f88ccf084576b8a623d88a202c6a481c5b680ccc780_prof);

        
        $__internal_1dfc36941668a9f8134b0e7c5dae67a3e0bfbeef1e6987df0849c784e2ebabe3->leave($__internal_1dfc36941668a9f8134b0e7c5dae67a3e0bfbeef1e6987df0849c784e2ebabe3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d683331ace106a23f767342992e80a24cfacd7ec05512bf2f90ac485eba253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d683331ace106a23f767342992e80a24cfacd7ec05512bf2f90ac485eba253->enter($__internal_c0d683331ace106a23f767342992e80a24cfacd7ec05512bf2f90ac485eba253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7f0cbbb4bece384438841d8afdfd5dac6dd4366670974116f44e5a09150c92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f0cbbb4bece384438841d8afdfd5dac6dd4366670974116f44e5a09150c92d->enter($__internal_f7f0cbbb4bece384438841d8afdfd5dac6dd4366670974116f44e5a09150c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

<strong>Type de billet</strong> : 

";
        // line 17
        if (((isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 20
(isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 2)) {
            // line 21
            echo "Demi-Journée
";
        }
        // line 23
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Reference de la Commande</strong> : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "html", null, true);
        echo " <br />

 <br />

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 32
            echo "  
<strong>Nom</strong> : ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nom", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prenom", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "dtNaissance", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nationalite", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 38
            if (($this->getAttribute($context["tickets"], "tReduit", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 40
$context["tickets"], "tReduit", array()) == false)) {
                // line 41
                echo "Non
";
            }
            // line 43
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 45
            if (($this->getAttribute($context["tickets"], "tpTarif", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 47
$context["tickets"], "tpTarif", array()) == 2)) {
                // line 48
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 49
$context["tickets"], "tpTarif", array()) == 3)) {
                // line 50
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 51
$context["tickets"], "tpTarif", array()) == 4)) {
                // line 52
                echo "Tarif réduit
";
            }
            // line 54
            echo "<br />
<strong>prix</strong> : ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
<hr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
<strong>Total prix</strong> : ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
<div class=\"form-group text-right\">
    <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_paiement");
        echo "\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
";
        
        $__internal_f7f0cbbb4bece384438841d8afdfd5dac6dd4366670974116f44e5a09150c92d->leave($__internal_f7f0cbbb4bece384438841d8afdfd5dac6dd4366670974116f44e5a09150c92d_prof);

        
        $__internal_c0d683331ace106a23f767342992e80a24cfacd7ec05512bf2f90ac485eba253->leave($__internal_c0d683331ace106a23f767342992e80a24cfacd7ec05512bf2f90ac485eba253_prof);

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
        return array (  180 => 62,  175 => 60,  172 => 59,  162 => 55,  159 => 54,  155 => 52,  153 => 51,  150 => 50,  148 => 49,  145 => 48,  143 => 47,  138 => 45,  134 => 43,  130 => 41,  128 => 40,  123 => 38,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  103 => 32,  99 => 31,  92 => 27,  87 => 25,  83 => 23,  79 => 21,  77 => 20,  71 => 17,  64 => 13,  59 => 11,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<strong>Type de billet</strong> : 

{% if type_billet == 1%} 
Journée 

{% elseif type_billet == 2 %}
Demi-Journée
{% endif %}
<br />

<strong>Nombre de billet</strong> : {{ nombre_billet }} <br />

<strong>Reference de la Commande</strong> : {{ reference }} <br />

 <br />

{% for tickets in nom %}
  
<strong>Nom</strong> : {{ tickets.nom }} <br /> 
<strong>Prenom</strong> : {{ tickets.prenom }} <br />
<strong>date de naissance</strong> : {{tickets.dtNaissance|date(\"d/m/Y\")}} <br />
<strong>Nationalité</strong> : {{tickets.nationalite}} <br />
<strong>Tarif réduit</strong> : 
{% if tickets.tReduit == true %} 
Oui
{% elseif tickets.tReduit == false %}
Non
{% endif %}
<br />
<strong>Type de tarif</strong> : 
{% if tickets.tpTarif == 1 %} 
Enfant
{% elseif tickets.tpTarif == 2 %}
Normal
{% elseif tickets.tpTarif == 3 %}
Senior
{% elseif tickets.tpTarif == 4 %}
Tarif réduit
{% endif %}
<br />
<strong>prix</strong> : {{tickets.prix}}€
<hr>

{% endfor %}

<strong>Total prix</strong> : {{total}}€
<div class=\"form-group text-right\">
    <a href=\"{{ path('mk_louvre_paiement') }}\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
{% endblock %}", "MKLouvreBundle:Default:recapitulatif.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/recapitulatif.html.twig");
    }
}
