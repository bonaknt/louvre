<?php

/* ::layout1.html.twig */
class __TwigTemplate_a9f21bc464bc89c9376b37709afc9dbb718a8c21a9e5d353fb2f5970bb9d85a3 extends Twig_Template
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
        $__internal_cfb9f4646a3269da0f0760bc7d6837c104d21582612d8ec876538656ee000dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb9f4646a3269da0f0760bc7d6837c104d21582612d8ec876538656ee000dce->enter($__internal_cfb9f4646a3269da0f0760bc7d6837c104d21582612d8ec876538656ee000dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $__internal_29322ee5c1ba480ba59bbdbe888606568ab25b05ef45f5ca237ea3a12b058caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29322ee5c1ba480ba59bbdbe888606568ab25b05ef45f5ca237ea3a12b058caf->enter($__internal_29322ee5c1ba480ba59bbdbe888606568ab25b05ef45f5ca237ea3a12b058caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb9f4646a3269da0f0760bc7d6837c104d21582612d8ec876538656ee000dce->leave($__internal_cfb9f4646a3269da0f0760bc7d6837c104d21582612d8ec876538656ee000dce_prof);

        
        $__internal_29322ee5c1ba480ba59bbdbe888606568ab25b05ef45f5ca237ea3a12b058caf->leave($__internal_29322ee5c1ba480ba59bbdbe888606568ab25b05ef45f5ca237ea3a12b058caf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_099fe5f93079b0dc77c401556fe8bb3a0e50dd70e1078e7b8df1bbf4b6d7e620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099fe5f93079b0dc77c401556fe8bb3a0e50dd70e1078e7b8df1bbf4b6d7e620->enter($__internal_099fe5f93079b0dc77c401556fe8bb3a0e50dd70e1078e7b8df1bbf4b6d7e620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d2cb2fe743077a3df652bf3ef1b165e488fdf5f4dccf9b1ee5f450b1fd5abd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2cb2fe743077a3df652bf3ef1b165e488fdf5f4dccf9b1ee5f450b1fd5abd4->enter($__internal_3d2cb2fe743077a3df652bf3ef1b165e488fdf5f4dccf9b1ee5f450b1fd5abd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d2cb2fe743077a3df652bf3ef1b165e488fdf5f4dccf9b1ee5f450b1fd5abd4->leave($__internal_3d2cb2fe743077a3df652bf3ef1b165e488fdf5f4dccf9b1ee5f450b1fd5abd4_prof);

        
        $__internal_099fe5f93079b0dc77c401556fe8bb3a0e50dd70e1078e7b8df1bbf4b6d7e620->leave($__internal_099fe5f93079b0dc77c401556fe8bb3a0e50dd70e1078e7b8df1bbf4b6d7e620_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6eb9e1c88645a4e887de31f509dcedbf80f8dfe081ab4971d1f662e3672c72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6eb9e1c88645a4e887de31f509dcedbf80f8dfe081ab4971d1f662e3672c72e->enter($__internal_d6eb9e1c88645a4e887de31f509dcedbf80f8dfe081ab4971d1f662e3672c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51e96d9fe771b7d9c3acd9782eb9bdf60f3c373da41ebd28cb6e08b9ad398a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e96d9fe771b7d9c3acd9782eb9bdf60f3c373da41ebd28cb6e08b9ad398a25->enter($__internal_51e96d9fe771b7d9c3acd9782eb9bdf60f3c373da41ebd28cb6e08b9ad398a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51e96d9fe771b7d9c3acd9782eb9bdf60f3c373da41ebd28cb6e08b9ad398a25->leave($__internal_51e96d9fe771b7d9c3acd9782eb9bdf60f3c373da41ebd28cb6e08b9ad398a25_prof);

        
        $__internal_d6eb9e1c88645a4e887de31f509dcedbf80f8dfe081ab4971d1f662e3672c72e->leave($__internal_d6eb9e1c88645a4e887de31f509dcedbf80f8dfe081ab4971d1f662e3672c72e_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_274148a0c962d650e0a9959e0035ad6336965bb94803cb356cffd7448498c0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274148a0c962d650e0a9959e0035ad6336965bb94803cb356cffd7448498c0be->enter($__internal_274148a0c962d650e0a9959e0035ad6336965bb94803cb356cffd7448498c0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c11f072e957e8dd3f164fee0999fc993fac9240ad14cd525d979294ba482322f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11f072e957e8dd3f164fee0999fc993fac9240ad14cd525d979294ba482322f->enter($__internal_c11f072e957e8dd3f164fee0999fc993fac9240ad14cd525d979294ba482322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_c11f072e957e8dd3f164fee0999fc993fac9240ad14cd525d979294ba482322f->leave($__internal_c11f072e957e8dd3f164fee0999fc993fac9240ad14cd525d979294ba482322f_prof);

        
        $__internal_274148a0c962d650e0a9959e0035ad6336965bb94803cb356cffd7448498c0be->leave($__internal_274148a0c962d650e0a9959e0035ad6336965bb94803cb356cffd7448498c0be_prof);

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
