<?php

/* ::layout1.html.twig */
class __TwigTemplate_46645947a9224d8a0ff442d268f357d9b00001eaeaa5bfa51e7f7702f2940d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "::layout1.html.twig", 1);
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
        $__internal_026bc1c000517097c23202fcab47bee82059a9d3e761f8fe15fbda6f7c9daa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026bc1c000517097c23202fcab47bee82059a9d3e761f8fe15fbda6f7c9daa09->enter($__internal_026bc1c000517097c23202fcab47bee82059a9d3e761f8fe15fbda6f7c9daa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $__internal_6a515057b4e4fa7b8a5bd4d659b8944e86ef07195586530f094ccf0353ac63c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a515057b4e4fa7b8a5bd4d659b8944e86ef07195586530f094ccf0353ac63c6->enter($__internal_6a515057b4e4fa7b8a5bd4d659b8944e86ef07195586530f094ccf0353ac63c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026bc1c000517097c23202fcab47bee82059a9d3e761f8fe15fbda6f7c9daa09->leave($__internal_026bc1c000517097c23202fcab47bee82059a9d3e761f8fe15fbda6f7c9daa09_prof);

        
        $__internal_6a515057b4e4fa7b8a5bd4d659b8944e86ef07195586530f094ccf0353ac63c6->leave($__internal_6a515057b4e4fa7b8a5bd4d659b8944e86ef07195586530f094ccf0353ac63c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e9fc631acbf1c138f33a78d9dd3ac4095319a2036eb7e12d5370838872846a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e9fc631acbf1c138f33a78d9dd3ac4095319a2036eb7e12d5370838872846a->enter($__internal_97e9fc631acbf1c138f33a78d9dd3ac4095319a2036eb7e12d5370838872846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11780b95cca5c5a5a457a939a4b3572cd88c6ac9684aa5931a2310fee09d6ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11780b95cca5c5a5a457a939a4b3572cd88c6ac9684aa5931a2310fee09d6ef2->enter($__internal_11780b95cca5c5a5a457a939a4b3572cd88c6ac9684aa5931a2310fee09d6ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_11780b95cca5c5a5a457a939a4b3572cd88c6ac9684aa5931a2310fee09d6ef2->leave($__internal_11780b95cca5c5a5a457a939a4b3572cd88c6ac9684aa5931a2310fee09d6ef2_prof);

        
        $__internal_97e9fc631acbf1c138f33a78d9dd3ac4095319a2036eb7e12d5370838872846a->leave($__internal_97e9fc631acbf1c138f33a78d9dd3ac4095319a2036eb7e12d5370838872846a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5d96c144e75ca9487b3c4d8d5e4246c713cf88689c7d339e7b9147cd200d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5d96c144e75ca9487b3c4d8d5e4246c713cf88689c7d339e7b9147cd200d6e->enter($__internal_6f5d96c144e75ca9487b3c4d8d5e4246c713cf88689c7d339e7b9147cd200d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01b981172f97fd12dec0d7a475c5493b8be16700fb3f3628b3c91374acd9f04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b981172f97fd12dec0d7a475c5493b8be16700fb3f3628b3c91374acd9f04c->enter($__internal_01b981172f97fd12dec0d7a475c5493b8be16700fb3f3628b3c91374acd9f04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01b981172f97fd12dec0d7a475c5493b8be16700fb3f3628b3c91374acd9f04c->leave($__internal_01b981172f97fd12dec0d7a475c5493b8be16700fb3f3628b3c91374acd9f04c_prof);

        
        $__internal_6f5d96c144e75ca9487b3c4d8d5e4246c713cf88689c7d339e7b9147cd200d6e->leave($__internal_6f5d96c144e75ca9487b3c4d8d5e4246c713cf88689c7d339e7b9147cd200d6e_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4d46477d6ddd29a7b43456dd066efcede4241d0bd875bd8bab29b8c1905d2b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d46477d6ddd29a7b43456dd066efcede4241d0bd875bd8bab29b8c1905d2b72->enter($__internal_4d46477d6ddd29a7b43456dd066efcede4241d0bd875bd8bab29b8c1905d2b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_30a4af7673c02b561d0ddb29e6427826bca437c2e2006d9931a6d90949ce44f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a4af7673c02b561d0ddb29e6427826bca437c2e2006d9931a6d90949ce44f9->enter($__internal_30a4af7673c02b561d0ddb29e6427826bca437c2e2006d9931a6d90949ce44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_30a4af7673c02b561d0ddb29e6427826bca437c2e2006d9931a6d90949ce44f9->leave($__internal_30a4af7673c02b561d0ddb29e6427826bca437c2e2006d9931a6d90949ce44f9_prof);

        
        $__internal_4d46477d6ddd29a7b43456dd066efcede4241d0bd875bd8bab29b8c1905d2b72->leave($__internal_4d46477d6ddd29a7b43456dd066efcede4241d0bd875bd8bab29b8c1905d2b72_prof);

    }

    public function getTemplateName()
    {
        return "::layout1.html.twig";
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

{% endblock %}", "::layout1.html.twig", "C:\\xampp\\htdocs\\louvre\\app/Resources\\views/layout1.html.twig");
    }
}
