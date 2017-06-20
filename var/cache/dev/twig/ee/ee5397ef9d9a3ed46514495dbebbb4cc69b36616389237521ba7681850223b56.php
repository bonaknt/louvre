<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_b775301836ce2461fffeb2c23c248176ef4458586a49511d1c1ed7ec941caf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c52b7e75eb7d3575d745af6955d0f2a4367450f9f0c06cf81e4e18508d75157a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52b7e75eb7d3575d745af6955d0f2a4367450f9f0c06cf81e4e18508d75157a->enter($__internal_c52b7e75eb7d3575d745af6955d0f2a4367450f9f0c06cf81e4e18508d75157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_c90bb30396cb99fb08e5c0090126f5cefe6eae9c91e275f372914d801c0facfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90bb30396cb99fb08e5c0090126f5cefe6eae9c91e275f372914d801c0facfe->enter($__internal_c90bb30396cb99fb08e5c0090126f5cefe6eae9c91e275f372914d801c0facfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "

  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/resources/demos/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("i18n/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Le site du musée du louvre</h1>
      <p>
        Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre.
      </p>
      <p>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_reservation");
        echo "\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">

        <div id=\"content\" class=\"col-md-9\">
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "      </div>

    </div>

        

    <hr>

    <footer>
      <p>Développé par Mohamed Konaté</p>
    </footer>
  </div>


<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichier.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_c52b7e75eb7d3575d745af6955d0f2a4367450f9f0c06cf81e4e18508d75157a->leave($__internal_c52b7e75eb7d3575d745af6955d0f2a4367450f9f0c06cf81e4e18508d75157a_prof);

        
        $__internal_c90bb30396cb99fb08e5c0090126f5cefe6eae9c91e275f372914d801c0facfe->leave($__internal_c90bb30396cb99fb08e5c0090126f5cefe6eae9c91e275f372914d801c0facfe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e525ee641ca3cb3504076562fe2d77e4aef1b35ac18b1dc74ec16ab3f47472fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e525ee641ca3cb3504076562fe2d77e4aef1b35ac18b1dc74ec16ab3f47472fc->enter($__internal_e525ee641ca3cb3504076562fe2d77e4aef1b35ac18b1dc74ec16ab3f47472fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc0537cd4693728f8c5668dba7d7dc327b652b934aeca2116fd121db475b5552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0537cd4693728f8c5668dba7d7dc327b652b934aeca2116fd121db475b5552->enter($__internal_cc0537cd4693728f8c5668dba7d7dc327b652b934aeca2116fd121db475b5552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_cc0537cd4693728f8c5668dba7d7dc327b652b934aeca2116fd121db475b5552->leave($__internal_cc0537cd4693728f8c5668dba7d7dc327b652b934aeca2116fd121db475b5552_prof);

        
        $__internal_e525ee641ca3cb3504076562fe2d77e4aef1b35ac18b1dc74ec16ab3f47472fc->leave($__internal_e525ee641ca3cb3504076562fe2d77e4aef1b35ac18b1dc74ec16ab3f47472fc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60e53323925347a4c440b1710ff48aae27c4557189d43984f5ff4e4fde83b28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e53323925347a4c440b1710ff48aae27c4557189d43984f5ff4e4fde83b28d->enter($__internal_60e53323925347a4c440b1710ff48aae27c4557189d43984f5ff4e4fde83b28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc9d97a894a3c4f4a34301a8241254ff1486289e5acfb9c0a411d32b9c12fb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9d97a894a3c4f4a34301a8241254ff1486289e5acfb9c0a411d32b9c12fb12->enter($__internal_cc9d97a894a3c4f4a34301a8241254ff1486289e5acfb9c0a411d32b9c12fb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_cc9d97a894a3c4f4a34301a8241254ff1486289e5acfb9c0a411d32b9c12fb12->leave($__internal_cc9d97a894a3c4f4a34301a8241254ff1486289e5acfb9c0a411d32b9c12fb12_prof);

        
        $__internal_60e53323925347a4c440b1710ff48aae27c4557189d43984f5ff4e4fde83b28d->leave($__internal_60e53323925347a4c440b1710ff48aae27c4557189d43984f5ff4e4fde83b28d_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_066afb918031295adcda3db993c85dbb10c07175adedd93f9c53b79ac52a7fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066afb918031295adcda3db993c85dbb10c07175adedd93f9c53b79ac52a7fea->enter($__internal_066afb918031295adcda3db993c85dbb10c07175adedd93f9c53b79ac52a7fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d042e639ba51db4a5251f88f7205f528ae038fe48bdeeb599614ccedcd5a457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d042e639ba51db4a5251f88f7205f528ae038fe48bdeeb599614ccedcd5a457->enter($__internal_8d042e639ba51db4a5251f88f7205f528ae038fe48bdeeb599614ccedcd5a457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_8d042e639ba51db4a5251f88f7205f528ae038fe48bdeeb599614ccedcd5a457->leave($__internal_8d042e639ba51db4a5251f88f7205f528ae038fe48bdeeb599614ccedcd5a457_prof);

        
        $__internal_066afb918031295adcda3db993c85dbb10c07175adedd93f9c53b79ac52a7fea->leave($__internal_066afb918031295adcda3db993c85dbb10c07175adedd93f9c53b79ac52a7fea_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 39,  165 => 38,  152 => 11,  150 => 10,  141 => 9,  123 => 7,  109 => 54,  93 => 40,  91 => 38,  81 => 31,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 9,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Musée du Louvre{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"{{ asset ('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}\">
    {% endblock %}


  <link rel=\"stylesheet\" href=\"{{ asset ('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('/resources/demos/style.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('style.css') }}\">
  <script src=\"{{ asset ('https://code.jquery.com/jquery-1.12.4.js') }}\"></script>
  <script src=\"{{ asset ('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}\"></script>
  <script src=\"{{ asset ('i18n/datepicker-fr.js') }}\"></script>
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Le site du musée du louvre</h1>
      <p>
        Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre.
      </p>
      <p>
        <a href=\"{{ path('mk_louvre_reservation')}}\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">

        <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>

    </div>

        

    <hr>

    <footer>
      <p>Développé par Mohamed Konaté</p>
    </footer>
  </div>


<script src=\"{{ asset ('fichier.js') }}\"></script>
  </body>
</html>
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
