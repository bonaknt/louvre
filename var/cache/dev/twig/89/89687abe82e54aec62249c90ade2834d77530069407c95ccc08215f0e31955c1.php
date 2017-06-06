<?php

/* MKLouvreBundle:Default:layout.html.twig */
class __TwigTemplate_7e7dfd7f0fa4907f259da3268cde3812cda7f92064a994ad468dce5aec6b7ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b612a805abd8c526a45d375b4062584150322b7ee561479fa1627f37c35ad6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b612a805abd8c526a45d375b4062584150322b7ee561479fa1627f37c35ad6a->enter($__internal_2b612a805abd8c526a45d375b4062584150322b7ee561479fa1627f37c35ad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $__internal_3af0302e00aa667b36aadc6d3eda9fe2af7c54708c31169ed55ff863918d012f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af0302e00aa667b36aadc6d3eda9fe2af7c54708c31169ed55ff863918d012f->enter($__internal_3af0302e00aa667b36aadc6d3eda9fe2af7c54708c31169ed55ff863918d012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b612a805abd8c526a45d375b4062584150322b7ee561479fa1627f37c35ad6a->leave($__internal_2b612a805abd8c526a45d375b4062584150322b7ee561479fa1627f37c35ad6a_prof);

        
        $__internal_3af0302e00aa667b36aadc6d3eda9fe2af7c54708c31169ed55ff863918d012f->leave($__internal_3af0302e00aa667b36aadc6d3eda9fe2af7c54708c31169ed55ff863918d012f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36bf0113c732a0a986273837038e600db11297224bb2d0c66c70a5b4a99248e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36bf0113c732a0a986273837038e600db11297224bb2d0c66c70a5b4a99248e->enter($__internal_d36bf0113c732a0a986273837038e600db11297224bb2d0c66c70a5b4a99248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_515a5c9fd4d4df12c7386e3f8eb42fa78e82c77ca19f304017efffa6d6d24b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515a5c9fd4d4df12c7386e3f8eb42fa78e82c77ca19f304017efffa6d6d24b9b->enter($__internal_515a5c9fd4d4df12c7386e3f8eb42fa78e82c77ca19f304017efffa6d6d24b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_515a5c9fd4d4df12c7386e3f8eb42fa78e82c77ca19f304017efffa6d6d24b9b->leave($__internal_515a5c9fd4d4df12c7386e3f8eb42fa78e82c77ca19f304017efffa6d6d24b9b_prof);

        
        $__internal_d36bf0113c732a0a986273837038e600db11297224bb2d0c66c70a5b4a99248e->leave($__internal_d36bf0113c732a0a986273837038e600db11297224bb2d0c66c70a5b4a99248e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f845e35196bfa9ed6aaccab7cf14859a7f30de1d35c08d5ec55a2b263c20eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f845e35196bfa9ed6aaccab7cf14859a7f30de1d35c08d5ec55a2b263c20eaf->enter($__internal_6f845e35196bfa9ed6aaccab7cf14859a7f30de1d35c08d5ec55a2b263c20eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68e972b8b923f7511dc6e8308e501f1330b64d73f76f29fd0e8f6dbfe3f33e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e972b8b923f7511dc6e8308e501f1330b64d73f76f29fd0e8f6dbfe3f33e8e->enter($__internal_68e972b8b923f7511dc6e8308e501f1330b64d73f76f29fd0e8f6dbfe3f33e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Accueil</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_68e972b8b923f7511dc6e8308e501f1330b64d73f76f29fd0e8f6dbfe3f33e8e->leave($__internal_68e972b8b923f7511dc6e8308e501f1330b64d73f76f29fd0e8f6dbfe3f33e8e_prof);

        
        $__internal_6f845e35196bfa9ed6aaccab7cf14859a7f30de1d35c08d5ec55a2b263c20eaf->leave($__internal_6f845e35196bfa9ed6aaccab7cf14859a7f30de1d35c08d5ec55a2b263c20eaf_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f5ee8989b1e24976b4eb7f34a2d6ef1f10a7f863630e9a0b2b2c48918469999c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ee8989b1e24976b4eb7f34a2d6ef1f10a7f863630e9a0b2b2c48918469999c->enter($__internal_f5ee8989b1e24976b4eb7f34a2d6ef1f10a7f863630e9a0b2b2c48918469999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0e7b4f23fd8d9c7a742591cb6a33907330b0a5c8ce6a83f200fd4df15f852b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7b4f23fd8d9c7a742591cb6a33907330b0a5c8ce6a83f200fd4df15f852b3f->enter($__internal_0e7b4f23fd8d9c7a742591cb6a33907330b0a5c8ce6a83f200fd4df15f852b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_0e7b4f23fd8d9c7a742591cb6a33907330b0a5c8ce6a83f200fd4df15f852b3f->leave($__internal_0e7b4f23fd8d9c7a742591cb6a33907330b0a5c8ce6a83f200fd4df15f852b3f_prof);

        
        $__internal_f5ee8989b1e24976b4eb7f34a2d6ef1f10a7f863630e9a0b2b2c48918469999c->leave($__internal_f5ee8989b1e24976b4eb7f34a2d6ef1f10a7f863630e9a0b2b2c48918469999c_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:layout.html.twig";
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
        return new Twig_Source("{% extends \"MKLouvreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Accueil</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "MKLouvreBundle:Default:layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}
