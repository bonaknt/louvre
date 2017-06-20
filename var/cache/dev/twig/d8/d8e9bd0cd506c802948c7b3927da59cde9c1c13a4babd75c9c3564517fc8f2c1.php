<?php

/* layout1.html.twig */
class __TwigTemplate_3a8d47b610fa206791366aa99cc7dc214869e79447438c998592f7206bd46181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "layout1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63cf2fbe95c2ea620002ee1edec60d9095fe0b4e9e59b1dc26848f367a47f09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cf2fbe95c2ea620002ee1edec60d9095fe0b4e9e59b1dc26848f367a47f09e->enter($__internal_63cf2fbe95c2ea620002ee1edec60d9095fe0b4e9e59b1dc26848f367a47f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $__internal_c93cfdd9308e5c9e22e2ca9386fc97a2eec92850e27feb90d5a7b49efb615122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93cfdd9308e5c9e22e2ca9386fc97a2eec92850e27feb90d5a7b49efb615122->enter($__internal_c93cfdd9308e5c9e22e2ca9386fc97a2eec92850e27feb90d5a7b49efb615122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63cf2fbe95c2ea620002ee1edec60d9095fe0b4e9e59b1dc26848f367a47f09e->leave($__internal_63cf2fbe95c2ea620002ee1edec60d9095fe0b4e9e59b1dc26848f367a47f09e_prof);

        
        $__internal_c93cfdd9308e5c9e22e2ca9386fc97a2eec92850e27feb90d5a7b49efb615122->leave($__internal_c93cfdd9308e5c9e22e2ca9386fc97a2eec92850e27feb90d5a7b49efb615122_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58461c2e4c766c749742d1e8e99b45ef60e415a7c432aa66acb416a5805d85c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58461c2e4c766c749742d1e8e99b45ef60e415a7c432aa66acb416a5805d85c2->enter($__internal_58461c2e4c766c749742d1e8e99b45ef60e415a7c432aa66acb416a5805d85c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0ffc67fec189bc81bc555acfbc579901cf8246f10279a5f0ba875727ad75140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ffc67fec189bc81bc555acfbc579901cf8246f10279a5f0ba875727ad75140->enter($__internal_d0ffc67fec189bc81bc555acfbc579901cf8246f10279a5f0ba875727ad75140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d0ffc67fec189bc81bc555acfbc579901cf8246f10279a5f0ba875727ad75140->leave($__internal_d0ffc67fec189bc81bc555acfbc579901cf8246f10279a5f0ba875727ad75140_prof);

        
        $__internal_58461c2e4c766c749742d1e8e99b45ef60e415a7c432aa66acb416a5805d85c2->leave($__internal_58461c2e4c766c749742d1e8e99b45ef60e415a7c432aa66acb416a5805d85c2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f99c6760a57834ce9d64f245a0dbc252cf4b6574a2c12c1e13c754fe7f56dbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99c6760a57834ce9d64f245a0dbc252cf4b6574a2c12c1e13c754fe7f56dbb8->enter($__internal_f99c6760a57834ce9d64f245a0dbc252cf4b6574a2c12c1e13c754fe7f56dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a545662b9ae8700a020c8473c91b123cb3fc4e8a077038e5bebfe2683fe1da8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a545662b9ae8700a020c8473c91b123cb3fc4e8a077038e5bebfe2683fe1da8d->enter($__internal_a545662b9ae8700a020c8473c91b123cb3fc4e8a077038e5bebfe2683fe1da8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_a545662b9ae8700a020c8473c91b123cb3fc4e8a077038e5bebfe2683fe1da8d->leave($__internal_a545662b9ae8700a020c8473c91b123cb3fc4e8a077038e5bebfe2683fe1da8d_prof);

        
        $__internal_f99c6760a57834ce9d64f245a0dbc252cf4b6574a2c12c1e13c754fe7f56dbb8->leave($__internal_f99c6760a57834ce9d64f245a0dbc252cf4b6574a2c12c1e13c754fe7f56dbb8_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d31a6527a6896c591155af3f18f734f46de43a56c96a53136023a8326b608938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31a6527a6896c591155af3f18f734f46de43a56c96a53136023a8326b608938->enter($__internal_d31a6527a6896c591155af3f18f734f46de43a56c96a53136023a8326b608938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_edb190180ff77f70cc27b38f5a5927c14dac8eb899e305e693ddd71575d098cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb190180ff77f70cc27b38f5a5927c14dac8eb899e305e693ddd71575d098cd->enter($__internal_edb190180ff77f70cc27b38f5a5927c14dac8eb899e305e693ddd71575d098cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_edb190180ff77f70cc27b38f5a5927c14dac8eb899e305e693ddd71575d098cd->leave($__internal_edb190180ff77f70cc27b38f5a5927c14dac8eb899e305e693ddd71575d098cd_prof);

        
        $__internal_d31a6527a6896c591155af3f18f734f46de43a56c96a53136023a8326b608938->leave($__internal_d31a6527a6896c591155af3f18f734f46de43a56c96a53136023a8326b608938_prof);

    }

    public function getTemplateName()
    {
        return "layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "layout1.html.twig", "C:\\xampp\\htdocs\\louvre\\app\\Resources\\views\\layout1.html.twig");
    }
}
