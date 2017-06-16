<?php

/* MKLouvreBundle:Default:paiement.html.twig */
class __TwigTemplate_01224649ede394198b0b2de73dbfca3ba239f9fc3f72654559cff304c2465b95 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : null) * 100), "html", null, true);
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
        return array (  48 => 18,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MKLouvreBundle:Default:paiement.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/paiement.html.twig");
    }
}
