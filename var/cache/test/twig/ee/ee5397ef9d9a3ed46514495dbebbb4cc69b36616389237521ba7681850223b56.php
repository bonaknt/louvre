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
        $__internal_258fce5a081202f8e3b9c42e3ab64cbe771439e6b730b5194db19f403ad84384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258fce5a081202f8e3b9c42e3ab64cbe771439e6b730b5194db19f403ad84384->enter($__internal_258fce5a081202f8e3b9c42e3ab64cbe771439e6b730b5194db19f403ad84384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_2da79ec907999c4196fe523f539dde85f9c3b2e122b1a0e117301830e82b7b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da79ec907999c4196fe523f539dde85f9c3b2e122b1a0e117301830e82b7b44->enter($__internal_2da79ec907999c4196fe523f539dde85f9c3b2e122b1a0e117301830e82b7b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_258fce5a081202f8e3b9c42e3ab64cbe771439e6b730b5194db19f403ad84384->leave($__internal_258fce5a081202f8e3b9c42e3ab64cbe771439e6b730b5194db19f403ad84384_prof);

        
        $__internal_2da79ec907999c4196fe523f539dde85f9c3b2e122b1a0e117301830e82b7b44->leave($__internal_2da79ec907999c4196fe523f539dde85f9c3b2e122b1a0e117301830e82b7b44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_945c14108f81796198c08dafd63bfa656fea144ef73d4d907830c18dbbee1c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945c14108f81796198c08dafd63bfa656fea144ef73d4d907830c18dbbee1c47->enter($__internal_945c14108f81796198c08dafd63bfa656fea144ef73d4d907830c18dbbee1c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e6a6867a3f3ebd5db01836021c9c0d319405e8fd1d12a2712b2c7bfda91573d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6a6867a3f3ebd5db01836021c9c0d319405e8fd1d12a2712b2c7bfda91573d->enter($__internal_3e6a6867a3f3ebd5db01836021c9c0d319405e8fd1d12a2712b2c7bfda91573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_3e6a6867a3f3ebd5db01836021c9c0d319405e8fd1d12a2712b2c7bfda91573d->leave($__internal_3e6a6867a3f3ebd5db01836021c9c0d319405e8fd1d12a2712b2c7bfda91573d_prof);

        
        $__internal_945c14108f81796198c08dafd63bfa656fea144ef73d4d907830c18dbbee1c47->leave($__internal_945c14108f81796198c08dafd63bfa656fea144ef73d4d907830c18dbbee1c47_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_281be3ce92e72615490a32d89d41ad8ccf719a1391b8e4c10e6ecbb2180c64e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281be3ce92e72615490a32d89d41ad8ccf719a1391b8e4c10e6ecbb2180c64e1->enter($__internal_281be3ce92e72615490a32d89d41ad8ccf719a1391b8e4c10e6ecbb2180c64e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03af1da860f48f7871f5d09174213ce4cb09eef97acd481962fe75596e89cf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03af1da860f48f7871f5d09174213ce4cb09eef97acd481962fe75596e89cf4c->enter($__internal_03af1da860f48f7871f5d09174213ce4cb09eef97acd481962fe75596e89cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_03af1da860f48f7871f5d09174213ce4cb09eef97acd481962fe75596e89cf4c->leave($__internal_03af1da860f48f7871f5d09174213ce4cb09eef97acd481962fe75596e89cf4c_prof);

        
        $__internal_281be3ce92e72615490a32d89d41ad8ccf719a1391b8e4c10e6ecbb2180c64e1->leave($__internal_281be3ce92e72615490a32d89d41ad8ccf719a1391b8e4c10e6ecbb2180c64e1_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e22647db32bf8d6fe2d9d852b0ae149f3c13c12d7fdbb5914e44cf09039d7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e22647db32bf8d6fe2d9d852b0ae149f3c13c12d7fdbb5914e44cf09039d7ef->enter($__internal_8e22647db32bf8d6fe2d9d852b0ae149f3c13c12d7fdbb5914e44cf09039d7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76d758c360955936853387ff7222f26a48464e8de2b4efdb73a70e180eb12616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d758c360955936853387ff7222f26a48464e8de2b4efdb73a70e180eb12616->enter($__internal_76d758c360955936853387ff7222f26a48464e8de2b4efdb73a70e180eb12616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        
        $__internal_76d758c360955936853387ff7222f26a48464e8de2b4efdb73a70e180eb12616->leave($__internal_76d758c360955936853387ff7222f26a48464e8de2b4efdb73a70e180eb12616_prof);

        
        $__internal_8e22647db32bf8d6fe2d9d852b0ae149f3c13c12d7fdbb5914e44cf09039d7ef->leave($__internal_8e22647db32bf8d6fe2d9d852b0ae149f3c13c12d7fdbb5914e44cf09039d7ef_prof);

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
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
