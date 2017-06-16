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
        $__internal_3c25872706833e9ba10228ecef478f211a92814d41f271bcc502f089c221e01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c25872706833e9ba10228ecef478f211a92814d41f271bcc502f089c221e01b->enter($__internal_3c25872706833e9ba10228ecef478f211a92814d41f271bcc502f089c221e01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_0799c9aa8708fae99fca706736d93eb3fe321bfd97b63785be1b101f0e0c4aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0799c9aa8708fae99fca706736d93eb3fe321bfd97b63785be1b101f0e0c4aff->enter($__internal_0799c9aa8708fae99fca706736d93eb3fe321bfd97b63785be1b101f0e0c4aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        
        $__internal_3c25872706833e9ba10228ecef478f211a92814d41f271bcc502f089c221e01b->leave($__internal_3c25872706833e9ba10228ecef478f211a92814d41f271bcc502f089c221e01b_prof);

        
        $__internal_0799c9aa8708fae99fca706736d93eb3fe321bfd97b63785be1b101f0e0c4aff->leave($__internal_0799c9aa8708fae99fca706736d93eb3fe321bfd97b63785be1b101f0e0c4aff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b1b20095cb00cfe8d044ebff51e4a91b4b6ea9ae17bfc3f6e31137e38614e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1b20095cb00cfe8d044ebff51e4a91b4b6ea9ae17bfc3f6e31137e38614e66->enter($__internal_3b1b20095cb00cfe8d044ebff51e4a91b4b6ea9ae17bfc3f6e31137e38614e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07530b8af69a101787e3616c32d5bd9338b5832d5d365b85dc6fc3c57f255f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07530b8af69a101787e3616c32d5bd9338b5832d5d365b85dc6fc3c57f255f6a->enter($__internal_07530b8af69a101787e3616c32d5bd9338b5832d5d365b85dc6fc3c57f255f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_07530b8af69a101787e3616c32d5bd9338b5832d5d365b85dc6fc3c57f255f6a->leave($__internal_07530b8af69a101787e3616c32d5bd9338b5832d5d365b85dc6fc3c57f255f6a_prof);

        
        $__internal_3b1b20095cb00cfe8d044ebff51e4a91b4b6ea9ae17bfc3f6e31137e38614e66->leave($__internal_3b1b20095cb00cfe8d044ebff51e4a91b4b6ea9ae17bfc3f6e31137e38614e66_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_110011b479d4719a2ba910b2b5f36fefea357989b5638d55e8e8ebdbdbd4258c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110011b479d4719a2ba910b2b5f36fefea357989b5638d55e8e8ebdbdbd4258c->enter($__internal_110011b479d4719a2ba910b2b5f36fefea357989b5638d55e8e8ebdbdbd4258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_386a5de499a8d193cf1783032f605680a1a59538c711677b2d230222245f7777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386a5de499a8d193cf1783032f605680a1a59538c711677b2d230222245f7777->enter($__internal_386a5de499a8d193cf1783032f605680a1a59538c711677b2d230222245f7777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_386a5de499a8d193cf1783032f605680a1a59538c711677b2d230222245f7777->leave($__internal_386a5de499a8d193cf1783032f605680a1a59538c711677b2d230222245f7777_prof);

        
        $__internal_110011b479d4719a2ba910b2b5f36fefea357989b5638d55e8e8ebdbdbd4258c->leave($__internal_110011b479d4719a2ba910b2b5f36fefea357989b5638d55e8e8ebdbdbd4258c_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2462fc7a3666ac4ee71d1ee3e3eee15d037797f9470bf25f059cf9d7eafbe9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2462fc7a3666ac4ee71d1ee3e3eee15d037797f9470bf25f059cf9d7eafbe9d->enter($__internal_c2462fc7a3666ac4ee71d1ee3e3eee15d037797f9470bf25f059cf9d7eafbe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afe865aca322a239c5437a64e0462e9f27e5ef8fba93a2ad8ac79959a976571d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe865aca322a239c5437a64e0462e9f27e5ef8fba93a2ad8ac79959a976571d->enter($__internal_afe865aca322a239c5437a64e0462e9f27e5ef8fba93a2ad8ac79959a976571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_afe865aca322a239c5437a64e0462e9f27e5ef8fba93a2ad8ac79959a976571d->leave($__internal_afe865aca322a239c5437a64e0462e9f27e5ef8fba93a2ad8ac79959a976571d_prof);

        
        $__internal_c2462fc7a3666ac4ee71d1ee3e3eee15d037797f9470bf25f059cf9d7eafbe9d->leave($__internal_c2462fc7a3666ac4ee71d1ee3e3eee15d037797f9470bf25f059cf9d7eafbe9d_prof);

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
