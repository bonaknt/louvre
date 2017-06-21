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
        $__internal_f216c1ea5260f1748a0834e5ed32e7446a6727d349fefd0b68da4f65c61bed99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f216c1ea5260f1748a0834e5ed32e7446a6727d349fefd0b68da4f65c61bed99->enter($__internal_f216c1ea5260f1748a0834e5ed32e7446a6727d349fefd0b68da4f65c61bed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_34947bbbfaaab77ac86dfb0dcb5c94c42c6fa8794b1336211efdbf7d22d9064a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34947bbbfaaab77ac86dfb0dcb5c94c42c6fa8794b1336211efdbf7d22d9064a->enter($__internal_34947bbbfaaab77ac86dfb0dcb5c94c42c6fa8794b1336211efdbf7d22d9064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_f216c1ea5260f1748a0834e5ed32e7446a6727d349fefd0b68da4f65c61bed99->leave($__internal_f216c1ea5260f1748a0834e5ed32e7446a6727d349fefd0b68da4f65c61bed99_prof);

        
        $__internal_34947bbbfaaab77ac86dfb0dcb5c94c42c6fa8794b1336211efdbf7d22d9064a->leave($__internal_34947bbbfaaab77ac86dfb0dcb5c94c42c6fa8794b1336211efdbf7d22d9064a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f531810c12c40d722a83b03fd3e16d5bd1fea9d3dac667b1df79ee041fe5430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f531810c12c40d722a83b03fd3e16d5bd1fea9d3dac667b1df79ee041fe5430->enter($__internal_4f531810c12c40d722a83b03fd3e16d5bd1fea9d3dac667b1df79ee041fe5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab04e5a04c00c5876b34ddc50c0a93130f4591a0c6303e28adb2d86422ca4d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab04e5a04c00c5876b34ddc50c0a93130f4591a0c6303e28adb2d86422ca4d7b->enter($__internal_ab04e5a04c00c5876b34ddc50c0a93130f4591a0c6303e28adb2d86422ca4d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_ab04e5a04c00c5876b34ddc50c0a93130f4591a0c6303e28adb2d86422ca4d7b->leave($__internal_ab04e5a04c00c5876b34ddc50c0a93130f4591a0c6303e28adb2d86422ca4d7b_prof);

        
        $__internal_4f531810c12c40d722a83b03fd3e16d5bd1fea9d3dac667b1df79ee041fe5430->leave($__internal_4f531810c12c40d722a83b03fd3e16d5bd1fea9d3dac667b1df79ee041fe5430_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fab979815df2f1ccd0840bf478d9597144f3847863f9d7d6d450a4efd064f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fab979815df2f1ccd0840bf478d9597144f3847863f9d7d6d450a4efd064f23->enter($__internal_8fab979815df2f1ccd0840bf478d9597144f3847863f9d7d6d450a4efd064f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ffa22aadfe234435f60f9dc400c86a6e982e555612f01cfa75994b2451c881d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa22aadfe234435f60f9dc400c86a6e982e555612f01cfa75994b2451c881d0->enter($__internal_ffa22aadfe234435f60f9dc400c86a6e982e555612f01cfa75994b2451c881d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_ffa22aadfe234435f60f9dc400c86a6e982e555612f01cfa75994b2451c881d0->leave($__internal_ffa22aadfe234435f60f9dc400c86a6e982e555612f01cfa75994b2451c881d0_prof);

        
        $__internal_8fab979815df2f1ccd0840bf478d9597144f3847863f9d7d6d450a4efd064f23->leave($__internal_8fab979815df2f1ccd0840bf478d9597144f3847863f9d7d6d450a4efd064f23_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3045f8e42c6f456209794419a5058f494aecac4901e3166c39af7b505fff05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3045f8e42c6f456209794419a5058f494aecac4901e3166c39af7b505fff05->enter($__internal_2b3045f8e42c6f456209794419a5058f494aecac4901e3166c39af7b505fff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac8f3663bf6c74514c1e3a625a95ec0c866827ec621c1264a097d3eb90f3c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac8f3663bf6c74514c1e3a625a95ec0c866827ec621c1264a097d3eb90f3c22->enter($__internal_1ac8f3663bf6c74514c1e3a625a95ec0c866827ec621c1264a097d3eb90f3c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_1ac8f3663bf6c74514c1e3a625a95ec0c866827ec621c1264a097d3eb90f3c22->leave($__internal_1ac8f3663bf6c74514c1e3a625a95ec0c866827ec621c1264a097d3eb90f3c22_prof);

        
        $__internal_2b3045f8e42c6f456209794419a5058f494aecac4901e3166c39af7b505fff05->leave($__internal_2b3045f8e42c6f456209794419a5058f494aecac4901e3166c39af7b505fff05_prof);

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
