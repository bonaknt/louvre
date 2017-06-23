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
        $__internal_2fd3d3e78e9b61deaf4ba4d5c4797b302ab97f3f7d570f1c7d67159ab940d85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd3d3e78e9b61deaf4ba4d5c4797b302ab97f3f7d570f1c7d67159ab940d85f->enter($__internal_2fd3d3e78e9b61deaf4ba4d5c4797b302ab97f3f7d570f1c7d67159ab940d85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_039bd912adcec271e80687ea35ff99e4884db7e600dd8c750237d5b76c892ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039bd912adcec271e80687ea35ff99e4884db7e600dd8c750237d5b76c892ec9->enter($__internal_039bd912adcec271e80687ea35ff99e4884db7e600dd8c750237d5b76c892ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_2fd3d3e78e9b61deaf4ba4d5c4797b302ab97f3f7d570f1c7d67159ab940d85f->leave($__internal_2fd3d3e78e9b61deaf4ba4d5c4797b302ab97f3f7d570f1c7d67159ab940d85f_prof);

        
        $__internal_039bd912adcec271e80687ea35ff99e4884db7e600dd8c750237d5b76c892ec9->leave($__internal_039bd912adcec271e80687ea35ff99e4884db7e600dd8c750237d5b76c892ec9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_405a6188601bf89a611646966e2338e55b80c47753d295b5855b89bae1ec723f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405a6188601bf89a611646966e2338e55b80c47753d295b5855b89bae1ec723f->enter($__internal_405a6188601bf89a611646966e2338e55b80c47753d295b5855b89bae1ec723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae4d4b17728446381241ce1547a41008111c5585e5aabd3423dbe14816ca4537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4d4b17728446381241ce1547a41008111c5585e5aabd3423dbe14816ca4537->enter($__internal_ae4d4b17728446381241ce1547a41008111c5585e5aabd3423dbe14816ca4537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_ae4d4b17728446381241ce1547a41008111c5585e5aabd3423dbe14816ca4537->leave($__internal_ae4d4b17728446381241ce1547a41008111c5585e5aabd3423dbe14816ca4537_prof);

        
        $__internal_405a6188601bf89a611646966e2338e55b80c47753d295b5855b89bae1ec723f->leave($__internal_405a6188601bf89a611646966e2338e55b80c47753d295b5855b89bae1ec723f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4be97ff8961deb8c75d377307b7b1e6b7cf66a8df75b228f3fc8a03726f48e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be97ff8961deb8c75d377307b7b1e6b7cf66a8df75b228f3fc8a03726f48e31->enter($__internal_4be97ff8961deb8c75d377307b7b1e6b7cf66a8df75b228f3fc8a03726f48e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5431387eef9b66ca7d19403171f534bbda84b63a5214a7c7af9bc871b0979b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5431387eef9b66ca7d19403171f534bbda84b63a5214a7c7af9bc871b0979b63->enter($__internal_5431387eef9b66ca7d19403171f534bbda84b63a5214a7c7af9bc871b0979b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_5431387eef9b66ca7d19403171f534bbda84b63a5214a7c7af9bc871b0979b63->leave($__internal_5431387eef9b66ca7d19403171f534bbda84b63a5214a7c7af9bc871b0979b63_prof);

        
        $__internal_4be97ff8961deb8c75d377307b7b1e6b7cf66a8df75b228f3fc8a03726f48e31->leave($__internal_4be97ff8961deb8c75d377307b7b1e6b7cf66a8df75b228f3fc8a03726f48e31_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_847befb691036ef9ddbd7dea553f6e7723ab92a6811add89e9a15eb3ba622b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847befb691036ef9ddbd7dea553f6e7723ab92a6811add89e9a15eb3ba622b3a->enter($__internal_847befb691036ef9ddbd7dea553f6e7723ab92a6811add89e9a15eb3ba622b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c4e92f36ab1568562a546b9e98d9ea52e4022fde434690fc1049ee5cd1b7e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4e92f36ab1568562a546b9e98d9ea52e4022fde434690fc1049ee5cd1b7e46->enter($__internal_0c4e92f36ab1568562a546b9e98d9ea52e4022fde434690fc1049ee5cd1b7e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_0c4e92f36ab1568562a546b9e98d9ea52e4022fde434690fc1049ee5cd1b7e46->leave($__internal_0c4e92f36ab1568562a546b9e98d9ea52e4022fde434690fc1049ee5cd1b7e46_prof);

        
        $__internal_847befb691036ef9ddbd7dea553f6e7723ab92a6811add89e9a15eb3ba622b3a->leave($__internal_847befb691036ef9ddbd7dea553f6e7723ab92a6811add89e9a15eb3ba622b3a_prof);

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
