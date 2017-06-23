<?php

/* MKLouvreBundle:Default:paiement.html.twig */
class __TwigTemplate_59d904b6b1bac961c4f43b86bb964ad38e9c650aadc8f42a93af358ad21e31cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:paiement.html.twig", 1);
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
        $__internal_45a9d20b35563ac6200a0ddaa2716a2ba96d3023f7c295ebb11a16b2e0b77e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a9d20b35563ac6200a0ddaa2716a2ba96d3023f7c295ebb11a16b2e0b77e93->enter($__internal_45a9d20b35563ac6200a0ddaa2716a2ba96d3023f7c295ebb11a16b2e0b77e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $__internal_707d64e4530f588a50765e93177b6359dd5f3f1bef2dc265ee1bd00f1d14ac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707d64e4530f588a50765e93177b6359dd5f3f1bef2dc265ee1bd00f1d14ac98->enter($__internal_707d64e4530f588a50765e93177b6359dd5f3f1bef2dc265ee1bd00f1d14ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a9d20b35563ac6200a0ddaa2716a2ba96d3023f7c295ebb11a16b2e0b77e93->leave($__internal_45a9d20b35563ac6200a0ddaa2716a2ba96d3023f7c295ebb11a16b2e0b77e93_prof);

        
        $__internal_707d64e4530f588a50765e93177b6359dd5f3f1bef2dc265ee1bd00f1d14ac98->leave($__internal_707d64e4530f588a50765e93177b6359dd5f3f1bef2dc265ee1bd00f1d14ac98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fd23663627f91598f23dc5d7bb99f3acd0f34dec8c1bd0cfa82e7c27615a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fd23663627f91598f23dc5d7bb99f3acd0f34dec8c1bd0cfa82e7c27615a51->enter($__internal_d3fd23663627f91598f23dc5d7bb99f3acd0f34dec8c1bd0cfa82e7c27615a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b1aad91d0f49956113aebdbc9722fef09487a6b8fe5a79d239495d73a2b058b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1aad91d0f49956113aebdbc9722fef09487a6b8fe5a79d239495d73a2b058b->enter($__internal_5b1aad91d0f49956113aebdbc9722fef09487a6b8fe5a79d239495d73a2b058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Paiement Stripe</h1>

  <hr>
<div class=\"well\">
<div class=\"nav-space-checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6\">
                <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_aeifgBAjMBGrS9TNW9YMZbrJ\"
                  data-amount=";
        // line 18
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
                  data-name=\"Musée du louvre\"
                  data-description=\"Billet de réservation musée du louvre\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
";
        
        $__internal_5b1aad91d0f49956113aebdbc9722fef09487a6b8fe5a79d239495d73a2b058b->leave($__internal_5b1aad91d0f49956113aebdbc9722fef09487a6b8fe5a79d239495d73a2b058b_prof);

        
        $__internal_d3fd23663627f91598f23dc5d7bb99f3acd0f34dec8c1bd0cfa82e7c27615a51->leave($__internal_d3fd23663627f91598f23dc5d7bb99f3acd0f34dec8c1bd0cfa82e7c27615a51_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Paiement Stripe</h1>

  <hr>
<div class=\"well\">
<div class=\"nav-space-checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6\">
                <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_aeifgBAjMBGrS9TNW9YMZbrJ\"
                  data-amount={{ prix * 100}}
                  data-name=\"Musée du louvre\"
                  data-description=\"Billet de réservation musée du louvre\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
{% endblock %}", "MKLouvreBundle:Default:paiement.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/paiement.html.twig");
    }
}
