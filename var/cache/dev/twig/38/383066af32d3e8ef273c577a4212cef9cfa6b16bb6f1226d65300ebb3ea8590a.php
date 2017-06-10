<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_1025d641d7500a8eaef6922a563ca624e1c13374c52c0bc68c46aa1408726065 extends Twig_Template
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
        $__internal_0e08617d5d9f5942b5c204f32c2eefc7d43fee1f35bab0196d639e10cac63001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e08617d5d9f5942b5c204f32c2eefc7d43fee1f35bab0196d639e10cac63001->enter($__internal_0e08617d5d9f5942b5c204f32c2eefc7d43fee1f35bab0196d639e10cac63001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_72234070327eb295a821185f233768ee47d516f0b46d6e74326f379c35c0d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72234070327eb295a821185f233768ee47d516f0b46d6e74326f379c35c0d65a->enter($__internal_72234070327eb295a821185f233768ee47d516f0b46d6e74326f379c35c0d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_0e08617d5d9f5942b5c204f32c2eefc7d43fee1f35bab0196d639e10cac63001->leave($__internal_0e08617d5d9f5942b5c204f32c2eefc7d43fee1f35bab0196d639e10cac63001_prof);

        
        $__internal_72234070327eb295a821185f233768ee47d516f0b46d6e74326f379c35c0d65a->leave($__internal_72234070327eb295a821185f233768ee47d516f0b46d6e74326f379c35c0d65a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b66ea68a6ffda15294fdca84b8009cdb52256ae0d08046fc459ad9a8a918b9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66ea68a6ffda15294fdca84b8009cdb52256ae0d08046fc459ad9a8a918b9b3->enter($__internal_b66ea68a6ffda15294fdca84b8009cdb52256ae0d08046fc459ad9a8a918b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2072a93fd1efe004926f5206f53bb7f48aeaf7df6cfccdaf87fc40f6213259d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2072a93fd1efe004926f5206f53bb7f48aeaf7df6cfccdaf87fc40f6213259d->enter($__internal_a2072a93fd1efe004926f5206f53bb7f48aeaf7df6cfccdaf87fc40f6213259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_a2072a93fd1efe004926f5206f53bb7f48aeaf7df6cfccdaf87fc40f6213259d->leave($__internal_a2072a93fd1efe004926f5206f53bb7f48aeaf7df6cfccdaf87fc40f6213259d_prof);

        
        $__internal_b66ea68a6ffda15294fdca84b8009cdb52256ae0d08046fc459ad9a8a918b9b3->leave($__internal_b66ea68a6ffda15294fdca84b8009cdb52256ae0d08046fc459ad9a8a918b9b3_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b986d6e7cde3caa0e3a5a7248ff86d9ae9b4ba5002d44b0354793356fde50a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b986d6e7cde3caa0e3a5a7248ff86d9ae9b4ba5002d44b0354793356fde50a3->enter($__internal_0b986d6e7cde3caa0e3a5a7248ff86d9ae9b4ba5002d44b0354793356fde50a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb64ae9894e82db3488f18a3e239ff9174d79a044e8809a85b6403b00d84f812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb64ae9894e82db3488f18a3e239ff9174d79a044e8809a85b6403b00d84f812->enter($__internal_bb64ae9894e82db3488f18a3e239ff9174d79a044e8809a85b6403b00d84f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_bb64ae9894e82db3488f18a3e239ff9174d79a044e8809a85b6403b00d84f812->leave($__internal_bb64ae9894e82db3488f18a3e239ff9174d79a044e8809a85b6403b00d84f812_prof);

        
        $__internal_0b986d6e7cde3caa0e3a5a7248ff86d9ae9b4ba5002d44b0354793356fde50a3->leave($__internal_0b986d6e7cde3caa0e3a5a7248ff86d9ae9b4ba5002d44b0354793356fde50a3_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_e46c7462734e039e84145c3ff988516ee2d22dabfba194096c9db0dd6bcf0bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c7462734e039e84145c3ff988516ee2d22dabfba194096c9db0dd6bcf0bef->enter($__internal_e46c7462734e039e84145c3ff988516ee2d22dabfba194096c9db0dd6bcf0bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea3b9f76220219994c19057a3bb18e6046924ff01656d16387e5a24d6b99e353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3b9f76220219994c19057a3bb18e6046924ff01656d16387e5a24d6b99e353->enter($__internal_ea3b9f76220219994c19057a3bb18e6046924ff01656d16387e5a24d6b99e353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        
        $__internal_ea3b9f76220219994c19057a3bb18e6046924ff01656d16387e5a24d6b99e353->leave($__internal_ea3b9f76220219994c19057a3bb18e6046924ff01656d16387e5a24d6b99e353_prof);

        
        $__internal_e46c7462734e039e84145c3ff988516ee2d22dabfba194096c9db0dd6bcf0bef->leave($__internal_e46c7462734e039e84145c3ff988516ee2d22dabfba194096c9db0dd6bcf0bef_prof);

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
