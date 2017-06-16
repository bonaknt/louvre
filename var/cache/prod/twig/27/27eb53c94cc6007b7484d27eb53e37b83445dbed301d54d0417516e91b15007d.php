<?php

/* MKLouvreBundle:Default:email.html.twig */
class __TwigTemplate_77f770882850d31b7a78ee851addb2eca818faa95b2c24c7df36cd729b1c0947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2> Commande numero : ";
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
        echo " </h2><br />


<strong>Adresse e-mail</strong> : ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : null), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 10
        if (((isset($context["type_billet"]) ? $context["type_billet"] : null) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 13
(isset($context["type_billet"]) ? $context["type_billet"] : null) == 2)) {
            // line 14
            echo "Demi-Journée
";
        }
        // line 16
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : null), "html", null, true);
        echo " <br />

<strong>Reference de la Commande</strong> : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["reference"]) ? $context["reference"] : null), "html", null, true);
        echo " <br />

 <br />

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 25
            echo "  
<strong>Nom</strong> : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nom", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prenom", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "dtNaissance", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "nationalite", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 31
            if (($this->getAttribute($context["tickets"], "tReduit", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 33
$context["tickets"], "tReduit", array()) == false)) {
                // line 34
                echo "Non
";
            }
            // line 36
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 38
            if (($this->getAttribute($context["tickets"], "tpTarif", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 40
$context["tickets"], "tpTarif", array()) == 2)) {
                // line 41
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 42
$context["tickets"], "tpTarif", array()) == 3)) {
                // line 43
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 44
$context["tickets"], "tpTarif", array()) == 4)) {
                // line 45
                echo "Tarif réduit
";
            }
            // line 47
            echo "<br />
<strong>prix</strong> : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
 <hr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
<strong>Total prix</strong> : ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "€
";
    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  138 => 51,  129 => 48,  126 => 47,  122 => 45,  120 => 44,  117 => 43,  115 => 42,  112 => 41,  110 => 40,  105 => 38,  101 => 36,  97 => 34,  95 => 33,  90 => 31,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  70 => 25,  66 => 24,  59 => 20,  54 => 18,  50 => 16,  46 => 14,  44 => 13,  38 => 10,  31 => 6,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MKLouvreBundle:Default:email.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/email.html.twig");
    }
}
