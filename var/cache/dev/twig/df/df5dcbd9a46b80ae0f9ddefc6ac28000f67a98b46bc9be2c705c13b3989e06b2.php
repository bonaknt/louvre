<?php

/* @MKLouvre/Default/paiement.html.twig */
class __TwigTemplate_02ca346acb99c4a264544db9f39b23ad9486081555223564ffd09cfb290df59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "@MKLouvre/Default/paiement.html.twig", 1);
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
        $__internal_060aafdfb5c4cd64d8eeba8040f0b3822875c867c307f1d6609c57597b38b5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060aafdfb5c4cd64d8eeba8040f0b3822875c867c307f1d6609c57597b38b5d9->enter($__internal_060aafdfb5c4cd64d8eeba8040f0b3822875c867c307f1d6609c57597b38b5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/paiement.html.twig"));

        $__internal_fda1837c5af439a69ef3d06cb82d2c22553614d2900afbcc7ce5a1ce733f2ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1837c5af439a69ef3d06cb82d2c22553614d2900afbcc7ce5a1ce733f2ab8->enter($__internal_fda1837c5af439a69ef3d06cb82d2c22553614d2900afbcc7ce5a1ce733f2ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/Default/paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060aafdfb5c4cd64d8eeba8040f0b3822875c867c307f1d6609c57597b38b5d9->leave($__internal_060aafdfb5c4cd64d8eeba8040f0b3822875c867c307f1d6609c57597b38b5d9_prof);

        
        $__internal_fda1837c5af439a69ef3d06cb82d2c22553614d2900afbcc7ce5a1ce733f2ab8->leave($__internal_fda1837c5af439a69ef3d06cb82d2c22553614d2900afbcc7ce5a1ce733f2ab8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afcd8fb6e8c0dd855f08a03c9d8a5e5630719c4fce4c3caf32c75afe09250829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcd8fb6e8c0dd855f08a03c9d8a5e5630719c4fce4c3caf32c75afe09250829->enter($__internal_afcd8fb6e8c0dd855f08a03c9d8a5e5630719c4fce4c3caf32c75afe09250829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8d5f8cf6af36c402abfe8571f8b982aa98ca23e6bd2a49381380daba43654c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d5f8cf6af36c402abfe8571f8b982aa98ca23e6bd2a49381380daba43654c9->enter($__internal_d8d5f8cf6af36c402abfe8571f8b982aa98ca23e6bd2a49381380daba43654c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8d5f8cf6af36c402abfe8571f8b982aa98ca23e6bd2a49381380daba43654c9->leave($__internal_d8d5f8cf6af36c402abfe8571f8b982aa98ca23e6bd2a49381380daba43654c9_prof);

        
        $__internal_afcd8fb6e8c0dd855f08a03c9d8a5e5630719c4fce4c3caf32c75afe09250829->leave($__internal_afcd8fb6e8c0dd855f08a03c9d8a5e5630719c4fce4c3caf32c75afe09250829_prof);

    }

    public function getTemplateName()
    {
        return "@MKLouvre/Default/paiement.html.twig";
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
{% endblock %}", "@MKLouvre/Default/paiement.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\paiement.html.twig");
    }
}
