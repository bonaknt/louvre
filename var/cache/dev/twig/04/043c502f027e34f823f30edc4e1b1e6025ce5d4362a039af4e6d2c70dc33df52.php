<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_d03733a9712433eea3e550cadf86502e857608ef3c60730c55ff9f9adaeb943f extends Twig_Template
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
        $__internal_173c1cc72507e50f86c23174ee97d626846a72b21c8fbaf6d4b761919bf027c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173c1cc72507e50f86c23174ee97d626846a72b21c8fbaf6d4b761919bf027c3->enter($__internal_173c1cc72507e50f86c23174ee97d626846a72b21c8fbaf6d4b761919bf027c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_f7bcc64b722ac8378a182fcd472896bdea712bb575c184bea20fc70e04281aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bcc64b722ac8378a182fcd472896bdea712bb575c184bea20fc70e04281aa6->enter($__internal_f7bcc64b722ac8378a182fcd472896bdea712bb575c184bea20fc70e04281aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
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
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_inscription");
        echo "\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Liens</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"\">Informations pratiques</a></li>
          <li><a href=\"\">Visites & Activités</a></li>
          <li><a href=\"\">Expositions & Actualités</a></li>
          <li><a href=\"\">Œuvres & Palais</a></li>
          <li><a href=\"\">Arts & éducation</a></li>
        </ul>
      </div>

        <div id=\"content\" class=\"col-md-9\">
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "      </div>

    </div>

        

    <hr>

    <footer>
      <p>Développé par Mohamed Konaté</p>
    </footer>
  </div>


<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichier.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_173c1cc72507e50f86c23174ee97d626846a72b21c8fbaf6d4b761919bf027c3->leave($__internal_173c1cc72507e50f86c23174ee97d626846a72b21c8fbaf6d4b761919bf027c3_prof);

        
        $__internal_f7bcc64b722ac8378a182fcd472896bdea712bb575c184bea20fc70e04281aa6->leave($__internal_f7bcc64b722ac8378a182fcd472896bdea712bb575c184bea20fc70e04281aa6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cacf46c3fb10e63912d93fbae0ccfda178ee9c01ce8fe668a203a9c85d24ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cacf46c3fb10e63912d93fbae0ccfda178ee9c01ce8fe668a203a9c85d24ef8->enter($__internal_4cacf46c3fb10e63912d93fbae0ccfda178ee9c01ce8fe668a203a9c85d24ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a833e6e22c7942e2beff95dd8ba4f559f656a69b8367dad471cc61f5efa3f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a833e6e22c7942e2beff95dd8ba4f559f656a69b8367dad471cc61f5efa3f12->enter($__internal_5a833e6e22c7942e2beff95dd8ba4f559f656a69b8367dad471cc61f5efa3f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_5a833e6e22c7942e2beff95dd8ba4f559f656a69b8367dad471cc61f5efa3f12->leave($__internal_5a833e6e22c7942e2beff95dd8ba4f559f656a69b8367dad471cc61f5efa3f12_prof);

        
        $__internal_4cacf46c3fb10e63912d93fbae0ccfda178ee9c01ce8fe668a203a9c85d24ef8->leave($__internal_4cacf46c3fb10e63912d93fbae0ccfda178ee9c01ce8fe668a203a9c85d24ef8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d6679d6d5dfccbc1fac67c95d8ba932cd3dc546154c6c70cda30dbc85416cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6679d6d5dfccbc1fac67c95d8ba932cd3dc546154c6c70cda30dbc85416cc9->enter($__internal_5d6679d6d5dfccbc1fac67c95d8ba932cd3dc546154c6c70cda30dbc85416cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b3b7561926392dc3512ef4d8daf11cdc1ea0e94ee2a77ad3ee01b4b752a6ccae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b7561926392dc3512ef4d8daf11cdc1ea0e94ee2a77ad3ee01b4b752a6ccae->enter($__internal_b3b7561926392dc3512ef4d8daf11cdc1ea0e94ee2a77ad3ee01b4b752a6ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_b3b7561926392dc3512ef4d8daf11cdc1ea0e94ee2a77ad3ee01b4b752a6ccae->leave($__internal_b3b7561926392dc3512ef4d8daf11cdc1ea0e94ee2a77ad3ee01b4b752a6ccae_prof);

        
        $__internal_5d6679d6d5dfccbc1fac67c95d8ba932cd3dc546154c6c70cda30dbc85416cc9->leave($__internal_5d6679d6d5dfccbc1fac67c95d8ba932cd3dc546154c6c70cda30dbc85416cc9_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ed97c18d3df3f9a84f16ff8558abd9629371e794ea4614f93126d78c15a9ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed97c18d3df3f9a84f16ff8558abd9629371e794ea4614f93126d78c15a9ab9->enter($__internal_7ed97c18d3df3f9a84f16ff8558abd9629371e794ea4614f93126d78c15a9ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_091ea72cbc1a6042890c2a23e20e0ece9f3813e41a35127173673e2d10054d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091ea72cbc1a6042890c2a23e20e0ece9f3813e41a35127173673e2d10054d4a->enter($__internal_091ea72cbc1a6042890c2a23e20e0ece9f3813e41a35127173673e2d10054d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        
        $__internal_091ea72cbc1a6042890c2a23e20e0ece9f3813e41a35127173673e2d10054d4a->leave($__internal_091ea72cbc1a6042890c2a23e20e0ece9f3813e41a35127173673e2d10054d4a_prof);

        
        $__internal_7ed97c18d3df3f9a84f16ff8558abd9629371e794ea4614f93126d78c15a9ab9->leave($__internal_7ed97c18d3df3f9a84f16ff8558abd9629371e794ea4614f93126d78c15a9ab9_prof);

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
        return array (  184 => 49,  175 => 48,  162 => 11,  160 => 10,  151 => 9,  133 => 7,  119 => 64,  103 => 50,  101 => 48,  88 => 38,  77 => 30,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 9,  36 => 7,  28 => 1,);
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
        <a href=\"{{ path('mk_louvre_inscription')}}\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Liens</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('mk_louvre_homepage')}}\">Accueil</a></li>
          <li><a href=\"\">Informations pratiques</a></li>
          <li><a href=\"\">Visites & Activités</a></li>
          <li><a href=\"\">Expositions & Actualités</a></li>
          <li><a href=\"\">Œuvres & Palais</a></li>
          <li><a href=\"\">Arts & éducation</a></li>
        </ul>
      </div>

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
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\layout.html.twig");
    }
}
