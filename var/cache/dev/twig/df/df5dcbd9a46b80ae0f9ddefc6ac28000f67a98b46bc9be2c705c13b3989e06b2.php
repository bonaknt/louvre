<?php

/* MKLouvreBundle:Default:paiement.html.twig */
class __TwigTemplate_02ca346acb99c4a264544db9f39b23ad9486081555223564ffd09cfb290df59e extends Twig_Template
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
        $__internal_0d35b77bb887bd118ba9db77ce4f3bb18fc92c010a1273deb3bf7f11b863ed2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d35b77bb887bd118ba9db77ce4f3bb18fc92c010a1273deb3bf7f11b863ed2f->enter($__internal_0d35b77bb887bd118ba9db77ce4f3bb18fc92c010a1273deb3bf7f11b863ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $__internal_d41050e5b120f68e3a7d9c9cdef7ac5312fc8211887ff997afd0e77dc12ccee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41050e5b120f68e3a7d9c9cdef7ac5312fc8211887ff997afd0e77dc12ccee4->enter($__internal_d41050e5b120f68e3a7d9c9cdef7ac5312fc8211887ff997afd0e77dc12ccee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d35b77bb887bd118ba9db77ce4f3bb18fc92c010a1273deb3bf7f11b863ed2f->leave($__internal_0d35b77bb887bd118ba9db77ce4f3bb18fc92c010a1273deb3bf7f11b863ed2f_prof);

        
        $__internal_d41050e5b120f68e3a7d9c9cdef7ac5312fc8211887ff997afd0e77dc12ccee4->leave($__internal_d41050e5b120f68e3a7d9c9cdef7ac5312fc8211887ff997afd0e77dc12ccee4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17cef561f3f8c7f4ccdf26670bead1c682b0046d30d4896c0abcdf0ffa8fc358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cef561f3f8c7f4ccdf26670bead1c682b0046d30d4896c0abcdf0ffa8fc358->enter($__internal_17cef561f3f8c7f4ccdf26670bead1c682b0046d30d4896c0abcdf0ffa8fc358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d7e2c5104b8406746b45bb5db711a928c047c9d8038cdadd12a230e0ff0beee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7e2c5104b8406746b45bb5db711a928c047c9d8038cdadd12a230e0ff0beee->enter($__internal_4d7e2c5104b8406746b45bb5db711a928c047c9d8038cdadd12a230e0ff0beee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d7e2c5104b8406746b45bb5db711a928c047c9d8038cdadd12a230e0ff0beee->leave($__internal_4d7e2c5104b8406746b45bb5db711a928c047c9d8038cdadd12a230e0ff0beee_prof);

        
        $__internal_17cef561f3f8c7f4ccdf26670bead1c682b0046d30d4896c0abcdf0ffa8fc358->leave($__internal_17cef561f3f8c7f4ccdf26670bead1c682b0046d30d4896c0abcdf0ffa8fc358_prof);

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
{% endblock %}", "MKLouvreBundle:Default:paiement.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\paiement.html.twig");
    }
}
