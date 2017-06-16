<?php

/* @MKLouvre/layout.html.twig */
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
        $__internal_f5c6db0c5f81602b05f350cf4ec211fb0d830941583262f607fad970fc12ce6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c6db0c5f81602b05f350cf4ec211fb0d830941583262f607fad970fc12ce6b->enter($__internal_f5c6db0c5f81602b05f350cf4ec211fb0d830941583262f607fad970fc12ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/layout.html.twig"));

        $__internal_07b52c5f93c3d079a087c958e612ae4cccb355c939a71fe615c6f29134e9ed21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b52c5f93c3d079a087c958e612ae4cccb355c939a71fe615c6f29134e9ed21->enter($__internal_07b52c5f93c3d079a087c958e612ae4cccb355c939a71fe615c6f29134e9ed21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MKLouvre/layout.html.twig"));

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
        
        $__internal_f5c6db0c5f81602b05f350cf4ec211fb0d830941583262f607fad970fc12ce6b->leave($__internal_f5c6db0c5f81602b05f350cf4ec211fb0d830941583262f607fad970fc12ce6b_prof);

        
        $__internal_07b52c5f93c3d079a087c958e612ae4cccb355c939a71fe615c6f29134e9ed21->leave($__internal_07b52c5f93c3d079a087c958e612ae4cccb355c939a71fe615c6f29134e9ed21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde0d18177a4304a8ad6237422dd8c7cdaa5351e4f6ee1746c4a1ef6af3e0d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde0d18177a4304a8ad6237422dd8c7cdaa5351e4f6ee1746c4a1ef6af3e0d38->enter($__internal_bde0d18177a4304a8ad6237422dd8c7cdaa5351e4f6ee1746c4a1ef6af3e0d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd7fde6d42a9c5e0c3a7c6d12594138bdbeaac3b57753d90f052076ae198b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7fde6d42a9c5e0c3a7c6d12594138bdbeaac3b57753d90f052076ae198b87b->enter($__internal_cd7fde6d42a9c5e0c3a7c6d12594138bdbeaac3b57753d90f052076ae198b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_cd7fde6d42a9c5e0c3a7c6d12594138bdbeaac3b57753d90f052076ae198b87b->leave($__internal_cd7fde6d42a9c5e0c3a7c6d12594138bdbeaac3b57753d90f052076ae198b87b_prof);

        
        $__internal_bde0d18177a4304a8ad6237422dd8c7cdaa5351e4f6ee1746c4a1ef6af3e0d38->leave($__internal_bde0d18177a4304a8ad6237422dd8c7cdaa5351e4f6ee1746c4a1ef6af3e0d38_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ee0d323d6df88109ec0a8caabfbe723ad10ea04ff93b55d578f8d385698173e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee0d323d6df88109ec0a8caabfbe723ad10ea04ff93b55d578f8d385698173e->enter($__internal_4ee0d323d6df88109ec0a8caabfbe723ad10ea04ff93b55d578f8d385698173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5fa5333a310cd7fcaf6555b27abd3bf752b99172cd3767ce7ea3b96e9497b3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa5333a310cd7fcaf6555b27abd3bf752b99172cd3767ce7ea3b96e9497b3f6->enter($__internal_5fa5333a310cd7fcaf6555b27abd3bf752b99172cd3767ce7ea3b96e9497b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_5fa5333a310cd7fcaf6555b27abd3bf752b99172cd3767ce7ea3b96e9497b3f6->leave($__internal_5fa5333a310cd7fcaf6555b27abd3bf752b99172cd3767ce7ea3b96e9497b3f6_prof);

        
        $__internal_4ee0d323d6df88109ec0a8caabfbe723ad10ea04ff93b55d578f8d385698173e->leave($__internal_4ee0d323d6df88109ec0a8caabfbe723ad10ea04ff93b55d578f8d385698173e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_190b8c514e4c3771464590f429614377611ac2817289150f82a323b57481b43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190b8c514e4c3771464590f429614377611ac2817289150f82a323b57481b43c->enter($__internal_190b8c514e4c3771464590f429614377611ac2817289150f82a323b57481b43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca4d9c3e369f2a5e6fb3fd2ef6673c7d6b6f0216790e567284a4a8f55ea32c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4d9c3e369f2a5e6fb3fd2ef6673c7d6b6f0216790e567284a4a8f55ea32c74->enter($__internal_ca4d9c3e369f2a5e6fb3fd2ef6673c7d6b6f0216790e567284a4a8f55ea32c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_ca4d9c3e369f2a5e6fb3fd2ef6673c7d6b6f0216790e567284a4a8f55ea32c74->leave($__internal_ca4d9c3e369f2a5e6fb3fd2ef6673c7d6b6f0216790e567284a4a8f55ea32c74_prof);

        
        $__internal_190b8c514e4c3771464590f429614377611ac2817289150f82a323b57481b43c->leave($__internal_190b8c514e4c3771464590f429614377611ac2817289150f82a323b57481b43c_prof);

    }

    public function getTemplateName()
    {
        return "@MKLouvre/layout.html.twig";
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
", "@MKLouvre/layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\layout.html.twig");
    }
}
