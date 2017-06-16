<?php

/* MKLouvreBundle:Default:recapitulatif.html.twig */
class __TwigTemplate_3d00a31963b78c21828328af9e30a19fc435c89523f6c6ea99f62b30440acc69 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Récapitulatif de la commande</h1>

  <hr>
<div class=\"well\">

<strong>Adresse e-mail</strong> : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : null), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 17
        if (((isset($context["type_billet"]) ? $context["type_billet"] : null) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 20
(isset($context["type_billet"]) ? $context["type_billet"] : null) == 2)) {
            // line 21
            echo "Demi-Journée
";
        }
        // line 23
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : null), "html", null, true);
        echo " <br />

<strong>Reference de la Commande</strong> : ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
        echo " <br />

 <br />

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : null));
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
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "€
<div class=\"form-group text-right\">
    <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_paiement");
        echo "\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
";
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
        return array (  162 => 62,  157 => 60,  154 => 59,  144 => 55,  141 => 54,  137 => 52,  135 => 51,  132 => 50,  130 => 49,  127 => 48,  125 => 47,  120 => 45,  116 => 43,  112 => 41,  110 => 40,  105 => 38,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  85 => 32,  81 => 31,  74 => 27,  69 => 25,  65 => 23,  61 => 21,  59 => 20,  53 => 17,  46 => 13,  41 => 11,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MKLouvreBundle:Default:recapitulatif.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/recapitulatif.html.twig");
    }
}
