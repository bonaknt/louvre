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
        $__internal_c933093707b049ecfb9fdf82fb399c75541f8689d110fe070dcdbce76cb73e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c933093707b049ecfb9fdf82fb399c75541f8689d110fe070dcdbce76cb73e2c->enter($__internal_c933093707b049ecfb9fdf82fb399c75541f8689d110fe070dcdbce76cb73e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $__internal_c74e1df03d38a664cc25c54d0517d619c35dbe263d060ba78f0dc180d7287fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74e1df03d38a664cc25c54d0517d619c35dbe263d060ba78f0dc180d7287fce->enter($__internal_c74e1df03d38a664cc25c54d0517d619c35dbe263d060ba78f0dc180d7287fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c933093707b049ecfb9fdf82fb399c75541f8689d110fe070dcdbce76cb73e2c->leave($__internal_c933093707b049ecfb9fdf82fb399c75541f8689d110fe070dcdbce76cb73e2c_prof);

        
        $__internal_c74e1df03d38a664cc25c54d0517d619c35dbe263d060ba78f0dc180d7287fce->leave($__internal_c74e1df03d38a664cc25c54d0517d619c35dbe263d060ba78f0dc180d7287fce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b73e14c35de03500f79154d15905bdb2e102f6c323a500d351ed2fcdf8a47711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73e14c35de03500f79154d15905bdb2e102f6c323a500d351ed2fcdf8a47711->enter($__internal_b73e14c35de03500f79154d15905bdb2e102f6c323a500d351ed2fcdf8a47711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_181c421b0559ec3cd87bc53f0e9833297cb2be09c0aa083b83a17e8e386afc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181c421b0559ec3cd87bc53f0e9833297cb2be09c0aa083b83a17e8e386afc8e->enter($__internal_181c421b0559ec3cd87bc53f0e9833297cb2be09c0aa083b83a17e8e386afc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_181c421b0559ec3cd87bc53f0e9833297cb2be09c0aa083b83a17e8e386afc8e->leave($__internal_181c421b0559ec3cd87bc53f0e9833297cb2be09c0aa083b83a17e8e386afc8e_prof);

        
        $__internal_b73e14c35de03500f79154d15905bdb2e102f6c323a500d351ed2fcdf8a47711->leave($__internal_b73e14c35de03500f79154d15905bdb2e102f6c323a500d351ed2fcdf8a47711_prof);

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
