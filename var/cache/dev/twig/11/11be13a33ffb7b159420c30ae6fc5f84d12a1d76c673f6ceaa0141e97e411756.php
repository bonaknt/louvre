<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_dbf5495503ffcae608896f679a3474c0a1ec5c11aec1b982822f33c532094f55 extends Twig_Template
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
        $__internal_a79672eb5894896d60615474a9259c4a830d5a932e3a31486038d5de29edf630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79672eb5894896d60615474a9259c4a830d5a932e3a31486038d5de29edf630->enter($__internal_a79672eb5894896d60615474a9259c4a830d5a932e3a31486038d5de29edf630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_81874acb853c9538de67b09d9297508b79092a3adc3b683200c8b45f59e7fd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81874acb853c9538de67b09d9297508b79092a3adc3b683200c8b45f59e7fd5b->enter($__internal_81874acb853c9538de67b09d9297508b79092a3adc3b683200c8b45f59e7fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_a79672eb5894896d60615474a9259c4a830d5a932e3a31486038d5de29edf630->leave($__internal_a79672eb5894896d60615474a9259c4a830d5a932e3a31486038d5de29edf630_prof);

        
        $__internal_81874acb853c9538de67b09d9297508b79092a3adc3b683200c8b45f59e7fd5b->leave($__internal_81874acb853c9538de67b09d9297508b79092a3adc3b683200c8b45f59e7fd5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4fd3561429f9df69f5e0b121593a5eb54406ae96127aec14def1cc0181b2980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fd3561429f9df69f5e0b121593a5eb54406ae96127aec14def1cc0181b2980->enter($__internal_b4fd3561429f9df69f5e0b121593a5eb54406ae96127aec14def1cc0181b2980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e025c97f6a1c40bcd2514fef9f7964333788877ada98780c26c767982086bc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e025c97f6a1c40bcd2514fef9f7964333788877ada98780c26c767982086bc86->enter($__internal_e025c97f6a1c40bcd2514fef9f7964333788877ada98780c26c767982086bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_e025c97f6a1c40bcd2514fef9f7964333788877ada98780c26c767982086bc86->leave($__internal_e025c97f6a1c40bcd2514fef9f7964333788877ada98780c26c767982086bc86_prof);

        
        $__internal_b4fd3561429f9df69f5e0b121593a5eb54406ae96127aec14def1cc0181b2980->leave($__internal_b4fd3561429f9df69f5e0b121593a5eb54406ae96127aec14def1cc0181b2980_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0deb420e927820c1bb473e473e5e416db1b66389330fb7d9825b1e4530b1fed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0deb420e927820c1bb473e473e5e416db1b66389330fb7d9825b1e4530b1fed7->enter($__internal_0deb420e927820c1bb473e473e5e416db1b66389330fb7d9825b1e4530b1fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_284cc5ad90c19a9796a040fab77c6f7c6224073ae49b96dab3313f244ecacd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284cc5ad90c19a9796a040fab77c6f7c6224073ae49b96dab3313f244ecacd50->enter($__internal_284cc5ad90c19a9796a040fab77c6f7c6224073ae49b96dab3313f244ecacd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_284cc5ad90c19a9796a040fab77c6f7c6224073ae49b96dab3313f244ecacd50->leave($__internal_284cc5ad90c19a9796a040fab77c6f7c6224073ae49b96dab3313f244ecacd50_prof);

        
        $__internal_0deb420e927820c1bb473e473e5e416db1b66389330fb7d9825b1e4530b1fed7->leave($__internal_0deb420e927820c1bb473e473e5e416db1b66389330fb7d9825b1e4530b1fed7_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a2444dad6b75a8e69f2f4ab0ef1081fa64ab24bbe13220f508f6bad83e8d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a2444dad6b75a8e69f2f4ab0ef1081fa64ab24bbe13220f508f6bad83e8d4b->enter($__internal_09a2444dad6b75a8e69f2f4ab0ef1081fa64ab24bbe13220f508f6bad83e8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74e4566aec5bb9212cc25e92c1d177429d08c7485282b1792e055626de9e83f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e4566aec5bb9212cc25e92c1d177429d08c7485282b1792e055626de9e83f4->enter($__internal_74e4566aec5bb9212cc25e92c1d177429d08c7485282b1792e055626de9e83f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_74e4566aec5bb9212cc25e92c1d177429d08c7485282b1792e055626de9e83f4->leave($__internal_74e4566aec5bb9212cc25e92c1d177429d08c7485282b1792e055626de9e83f4_prof);

        
        $__internal_09a2444dad6b75a8e69f2f4ab0ef1081fa64ab24bbe13220f508f6bad83e8d4b->leave($__internal_09a2444dad6b75a8e69f2f4ab0ef1081fa64ab24bbe13220f508f6bad83e8d4b_prof);

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
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\layout.html.twig");
    }
}
