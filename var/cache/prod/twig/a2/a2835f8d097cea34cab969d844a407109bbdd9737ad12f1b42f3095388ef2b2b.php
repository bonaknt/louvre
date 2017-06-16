<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_1db9a6c3a81e289bbded0d27422015e26acfcb6766ccfde0f1339b35fcf4c543 extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Musée du Louvre";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "        ";
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
        return array (  132 => 39,  129 => 38,  122 => 11,  120 => 10,  117 => 9,  111 => 7,  103 => 54,  87 => 40,  85 => 38,  75 => 31,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  37 => 13,  35 => 9,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
