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
        $__internal_1dcabe184193427218345e9e8fb67fe3651cc62fbd92746fb02cce8007cd20c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcabe184193427218345e9e8fb67fe3651cc62fbd92746fb02cce8007cd20c8->enter($__internal_1dcabe184193427218345e9e8fb67fe3651cc62fbd92746fb02cce8007cd20c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $__internal_46960b614bfa5b2fc680e04e0be80694debaf85b184524ae9fd5421d91e0467c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46960b614bfa5b2fc680e04e0be80694debaf85b184524ae9fd5421d91e0467c->enter($__internal_46960b614bfa5b2fc680e04e0be80694debaf85b184524ae9fd5421d91e0467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcabe184193427218345e9e8fb67fe3651cc62fbd92746fb02cce8007cd20c8->leave($__internal_1dcabe184193427218345e9e8fb67fe3651cc62fbd92746fb02cce8007cd20c8_prof);

        
        $__internal_46960b614bfa5b2fc680e04e0be80694debaf85b184524ae9fd5421d91e0467c->leave($__internal_46960b614bfa5b2fc680e04e0be80694debaf85b184524ae9fd5421d91e0467c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a52223bdc6baa5629c7ca6a411097ec159a24bcce8f9c88828a71097ab498a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a52223bdc6baa5629c7ca6a411097ec159a24bcce8f9c88828a71097ab498a->enter($__internal_c2a52223bdc6baa5629c7ca6a411097ec159a24bcce8f9c88828a71097ab498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b0adc9e714ac100fa0e96bba2ffa6199f313f420cfc5cbd7678c3de45c907d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0adc9e714ac100fa0e96bba2ffa6199f313f420cfc5cbd7678c3de45c907d7->enter($__internal_0b0adc9e714ac100fa0e96bba2ffa6199f313f420cfc5cbd7678c3de45c907d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b0adc9e714ac100fa0e96bba2ffa6199f313f420cfc5cbd7678c3de45c907d7->leave($__internal_0b0adc9e714ac100fa0e96bba2ffa6199f313f420cfc5cbd7678c3de45c907d7_prof);

        
        $__internal_c2a52223bdc6baa5629c7ca6a411097ec159a24bcce8f9c88828a71097ab498a->leave($__internal_c2a52223bdc6baa5629c7ca6a411097ec159a24bcce8f9c88828a71097ab498a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99b326623c61b2e566bd1d626dc1abcd4adc965ec233ce4ec281e5fa1afb2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99b326623c61b2e566bd1d626dc1abcd4adc965ec233ce4ec281e5fa1afb2ab->enter($__internal_d99b326623c61b2e566bd1d626dc1abcd4adc965ec233ce4ec281e5fa1afb2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60ecd48d52da4fc3ced10377e40f350c0117eac92114da544fa18d2575c37f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ecd48d52da4fc3ced10377e40f350c0117eac92114da544fa18d2575c37f6f->enter($__internal_60ecd48d52da4fc3ced10377e40f350c0117eac92114da544fa18d2575c37f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60ecd48d52da4fc3ced10377e40f350c0117eac92114da544fa18d2575c37f6f->leave($__internal_60ecd48d52da4fc3ced10377e40f350c0117eac92114da544fa18d2575c37f6f_prof);

        
        $__internal_d99b326623c61b2e566bd1d626dc1abcd4adc965ec233ce4ec281e5fa1afb2ab->leave($__internal_d99b326623c61b2e566bd1d626dc1abcd4adc965ec233ce4ec281e5fa1afb2ab_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_728f05a682332c29d892e357bbc9632b57f689755a3fa463f26d90c8a5d01988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728f05a682332c29d892e357bbc9632b57f689755a3fa463f26d90c8a5d01988->enter($__internal_728f05a682332c29d892e357bbc9632b57f689755a3fa463f26d90c8a5d01988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c7f5a87265ae63294be54ea6ad42090842551b072c9e00ad229d68779b23ee32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f5a87265ae63294be54ea6ad42090842551b072c9e00ad229d68779b23ee32->enter($__internal_c7f5a87265ae63294be54ea6ad42090842551b072c9e00ad229d68779b23ee32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_c7f5a87265ae63294be54ea6ad42090842551b072c9e00ad229d68779b23ee32->leave($__internal_c7f5a87265ae63294be54ea6ad42090842551b072c9e00ad229d68779b23ee32_prof);

        
        $__internal_728f05a682332c29d892e357bbc9632b57f689755a3fa463f26d90c8a5d01988->leave($__internal_728f05a682332c29d892e357bbc9632b57f689755a3fa463f26d90c8a5d01988_prof);

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
", "MKLouvreBundle:Default:layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/layout.html.twig");
    }
}
