<?php

/* MKLouvreBundle:Default:layout.html.twig */
class __TwigTemplate_80fcf4222ad3156406e6ae22e06ad42e4f1541da8399ebf96a3dc6e54b86ab8c extends Twig_Template
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
        $__internal_2c424cb1ad07b2d06a41ae9e60938ffa124c0ba313f992ca438b576a93a92b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c424cb1ad07b2d06a41ae9e60938ffa124c0ba313f992ca438b576a93a92b93->enter($__internal_2c424cb1ad07b2d06a41ae9e60938ffa124c0ba313f992ca438b576a93a92b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $__internal_7edf59144c27ea96668cfba0b0713f9820ca4bffb03c54f4a014e5cf3871ca9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edf59144c27ea96668cfba0b0713f9820ca4bffb03c54f4a014e5cf3871ca9a->enter($__internal_7edf59144c27ea96668cfba0b0713f9820ca4bffb03c54f4a014e5cf3871ca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c424cb1ad07b2d06a41ae9e60938ffa124c0ba313f992ca438b576a93a92b93->leave($__internal_2c424cb1ad07b2d06a41ae9e60938ffa124c0ba313f992ca438b576a93a92b93_prof);

        
        $__internal_7edf59144c27ea96668cfba0b0713f9820ca4bffb03c54f4a014e5cf3871ca9a->leave($__internal_7edf59144c27ea96668cfba0b0713f9820ca4bffb03c54f4a014e5cf3871ca9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daf1247b998b51695520682b3567238fadde434f30465cc8d25d9927f768eb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf1247b998b51695520682b3567238fadde434f30465cc8d25d9927f768eb21->enter($__internal_daf1247b998b51695520682b3567238fadde434f30465cc8d25d9927f768eb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1472ae786ee183a0e545f5fac494e8d788ac0ba014e36709f01ca38a4939728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1472ae786ee183a0e545f5fac494e8d788ac0ba014e36709f01ca38a4939728f->enter($__internal_1472ae786ee183a0e545f5fac494e8d788ac0ba014e36709f01ca38a4939728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1472ae786ee183a0e545f5fac494e8d788ac0ba014e36709f01ca38a4939728f->leave($__internal_1472ae786ee183a0e545f5fac494e8d788ac0ba014e36709f01ca38a4939728f_prof);

        
        $__internal_daf1247b998b51695520682b3567238fadde434f30465cc8d25d9927f768eb21->leave($__internal_daf1247b998b51695520682b3567238fadde434f30465cc8d25d9927f768eb21_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee3656ca27c5be71eda31038fbaf9cacb786e695bda89100233c65e3b8348d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee3656ca27c5be71eda31038fbaf9cacb786e695bda89100233c65e3b8348d2->enter($__internal_cee3656ca27c5be71eda31038fbaf9cacb786e695bda89100233c65e3b8348d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_709c6a5da438a601a9366d30c3b634b96d8d800b9605625096633d66e7ac63dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709c6a5da438a601a9366d30c3b634b96d8d800b9605625096633d66e7ac63dc->enter($__internal_709c6a5da438a601a9366d30c3b634b96d8d800b9605625096633d66e7ac63dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_709c6a5da438a601a9366d30c3b634b96d8d800b9605625096633d66e7ac63dc->leave($__internal_709c6a5da438a601a9366d30c3b634b96d8d800b9605625096633d66e7ac63dc_prof);

        
        $__internal_cee3656ca27c5be71eda31038fbaf9cacb786e695bda89100233c65e3b8348d2->leave($__internal_cee3656ca27c5be71eda31038fbaf9cacb786e695bda89100233c65e3b8348d2_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2ee544972a7f99d82dc511feef7555caa2375c8146e883d00ec05f7d01e4216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee544972a7f99d82dc511feef7555caa2375c8146e883d00ec05f7d01e4216d->enter($__internal_2ee544972a7f99d82dc511feef7555caa2375c8146e883d00ec05f7d01e4216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0127ea186f175c2ad649a418dd26324a40e8a72d4bcb4fc96b85540a1d610abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0127ea186f175c2ad649a418dd26324a40e8a72d4bcb4fc96b85540a1d610abc->enter($__internal_0127ea186f175c2ad649a418dd26324a40e8a72d4bcb4fc96b85540a1d610abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_0127ea186f175c2ad649a418dd26324a40e8a72d4bcb4fc96b85540a1d610abc->leave($__internal_0127ea186f175c2ad649a418dd26324a40e8a72d4bcb4fc96b85540a1d610abc_prof);

        
        $__internal_2ee544972a7f99d82dc511feef7555caa2375c8146e883d00ec05f7d01e4216d->leave($__internal_2ee544972a7f99d82dc511feef7555caa2375c8146e883d00ec05f7d01e4216d_prof);

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
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "MKLouvreBundle:Default:layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/layout.html.twig");
    }
}