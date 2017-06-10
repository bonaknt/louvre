<?php

/* MKLouvreBundle:Default:paiement.html.twig */
class __TwigTemplate_c55d4b483a67fe8e558f6b53b738decf885d774a568cc6246026bdbc39f5f8c7 extends Twig_Template
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
        $__internal_72ad85eed1f3b41a586b40d8ed1adb147ec32bb6360a70962b28dea759b8e34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ad85eed1f3b41a586b40d8ed1adb147ec32bb6360a70962b28dea759b8e34b->enter($__internal_72ad85eed1f3b41a586b40d8ed1adb147ec32bb6360a70962b28dea759b8e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $__internal_1c4c828d31ec59ae8afff7656eca3d198e0df8dce59d46c4a83ba8d47f47e764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4c828d31ec59ae8afff7656eca3d198e0df8dce59d46c4a83ba8d47f47e764->enter($__internal_1c4c828d31ec59ae8afff7656eca3d198e0df8dce59d46c4a83ba8d47f47e764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ad85eed1f3b41a586b40d8ed1adb147ec32bb6360a70962b28dea759b8e34b->leave($__internal_72ad85eed1f3b41a586b40d8ed1adb147ec32bb6360a70962b28dea759b8e34b_prof);

        
        $__internal_1c4c828d31ec59ae8afff7656eca3d198e0df8dce59d46c4a83ba8d47f47e764->leave($__internal_1c4c828d31ec59ae8afff7656eca3d198e0df8dce59d46c4a83ba8d47f47e764_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4990158929c7dfd3f0a7064fd380a6187b4f360c226749f5eb6df8c05bbf21e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4990158929c7dfd3f0a7064fd380a6187b4f360c226749f5eb6df8c05bbf21e4->enter($__internal_4990158929c7dfd3f0a7064fd380a6187b4f360c226749f5eb6df8c05bbf21e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd10f3bed87f5133304f29fd52e3ca60b8bb7c49739c5478aecd2771395bb87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd10f3bed87f5133304f29fd52e3ca60b8bb7c49739c5478aecd2771395bb87c->enter($__internal_dd10f3bed87f5133304f29fd52e3ca60b8bb7c49739c5478aecd2771395bb87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd10f3bed87f5133304f29fd52e3ca60b8bb7c49739c5478aecd2771395bb87c->leave($__internal_dd10f3bed87f5133304f29fd52e3ca60b8bb7c49739c5478aecd2771395bb87c_prof);

        
        $__internal_4990158929c7dfd3f0a7064fd380a6187b4f360c226749f5eb6df8c05bbf21e4->leave($__internal_4990158929c7dfd3f0a7064fd380a6187b4f360c226749f5eb6df8c05bbf21e4_prof);

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
