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
        $__internal_ba1ba16a25841b23c043445b8c845a3109029528dd1d8ede702802aa9d6098df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1ba16a25841b23c043445b8c845a3109029528dd1d8ede702802aa9d6098df->enter($__internal_ba1ba16a25841b23c043445b8c845a3109029528dd1d8ede702802aa9d6098df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_570325521f1e80b60d92a9773c497963a916e39f4f2a99b0fd5f93d6d8b7dbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570325521f1e80b60d92a9773c497963a916e39f4f2a99b0fd5f93d6d8b7dbf1->enter($__internal_570325521f1e80b60d92a9773c497963a916e39f4f2a99b0fd5f93d6d8b7dbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"i18n/datepicker-ar.js\"></script>
  <script src=\"i18n/datepicker-fr.js\"></script>
  <script src=\"i18n/datepicker-he.js\"></script>
  <script src=\"i18n/datepicker-zh-TW.js\"></script>
      <script>
    \$( function() {

    \$.datepicker.regional['fr'] = {
    closeText: 'Fermer',
    prevText: '&#x3c;Préc',
    nextText: 'Suiv&#x3e;',
    currentText: 'Aujourd\\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
    'Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: '',
    numberOfMonths: 1,
    showButtonPanel: true
    };
    \$.datepicker.setDefaults(\$.datepicker.regional['fr']);
        //var dateJour = new Date();


          

          \$( \".datepicker\" ).datepicker({

          dateFormat: 'yy/mm/dd',

          beforeShowDay: function (date, inst) {
              var today = new Date();

              today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());

              var selDate = Date.parse(date);

              if (date.getDay() == 0 || date.getDay() == 2 || date.getMonth() == 11 && date.getDate() == 25 || date.getMonth() == 10 && date.getDate() == 1 || date.getMonth() == 4 && date.getDate() == 1 || selDate < today) { // La semaine commence à 0 = Dimanche
                  \$('.datepicker').val('');
                  \$(inst).datepicker('show');
                  return [false, ''];
              } 
              else {
                  return [true, ''];
              }

            }
        });

        \$( \".datepicker1\").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: \"-100:+0\",
          beforeShowDay: function (date, inst) {
              var today = new Date();

              today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());

              var selDate = Date.parse(date);

              if (selDate > today) {
                  \$('.datepicker').val('');
                  \$(inst).datepicker('show');
                  return [false, ''];
              } 
              else {
                  return [true, ''];
              }

            }
    });

        
    });
  </script>
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
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_inscription");
        echo "\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Liens</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 122
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
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "      </div>

    </div>

        

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>


<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ajax.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_ba1ba16a25841b23c043445b8c845a3109029528dd1d8ede702802aa9d6098df->leave($__internal_ba1ba16a25841b23c043445b8c845a3109029528dd1d8ede702802aa9d6098df_prof);

        
        $__internal_570325521f1e80b60d92a9773c497963a916e39f4f2a99b0fd5f93d6d8b7dbf1->leave($__internal_570325521f1e80b60d92a9773c497963a916e39f4f2a99b0fd5f93d6d8b7dbf1_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf3a8fd49d28595c5eda1c3bd9c7dc5d765cf8359a70a4a2f156f9af0a4e34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf3a8fd49d28595c5eda1c3bd9c7dc5d765cf8359a70a4a2f156f9af0a4e34f->enter($__internal_8cf3a8fd49d28595c5eda1c3bd9c7dc5d765cf8359a70a4a2f156f9af0a4e34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_132789258ba4515dbc14686b923ae00d3c5b4b92f0b863aa26fb13758825413c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132789258ba4515dbc14686b923ae00d3c5b4b92f0b863aa26fb13758825413c->enter($__internal_132789258ba4515dbc14686b923ae00d3c5b4b92f0b863aa26fb13758825413c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_132789258ba4515dbc14686b923ae00d3c5b4b92f0b863aa26fb13758825413c->leave($__internal_132789258ba4515dbc14686b923ae00d3c5b4b92f0b863aa26fb13758825413c_prof);

        
        $__internal_8cf3a8fd49d28595c5eda1c3bd9c7dc5d765cf8359a70a4a2f156f9af0a4e34f->leave($__internal_8cf3a8fd49d28595c5eda1c3bd9c7dc5d765cf8359a70a4a2f156f9af0a4e34f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fd6b9ba35224e003bc6456b3761dc5d5f0158e83b911c40bc66b3f8aa98ad42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd6b9ba35224e003bc6456b3761dc5d5f0158e83b911c40bc66b3f8aa98ad42->enter($__internal_2fd6b9ba35224e003bc6456b3761dc5d5f0158e83b911c40bc66b3f8aa98ad42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a3557b00dc699b56aa654d9d79434cf8cd1126b22f2e6e60c16bb51015beef1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3557b00dc699b56aa654d9d79434cf8cd1126b22f2e6e60c16bb51015beef1d->enter($__internal_a3557b00dc699b56aa654d9d79434cf8cd1126b22f2e6e60c16bb51015beef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_a3557b00dc699b56aa654d9d79434cf8cd1126b22f2e6e60c16bb51015beef1d->leave($__internal_a3557b00dc699b56aa654d9d79434cf8cd1126b22f2e6e60c16bb51015beef1d_prof);

        
        $__internal_2fd6b9ba35224e003bc6456b3761dc5d5f0158e83b911c40bc66b3f8aa98ad42->leave($__internal_2fd6b9ba35224e003bc6456b3761dc5d5f0158e83b911c40bc66b3f8aa98ad42_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd738b49ccda2d1fb9b3a79e07ff40339f651ea11c9e869ee70e3e92b7a4dced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd738b49ccda2d1fb9b3a79e07ff40339f651ea11c9e869ee70e3e92b7a4dced->enter($__internal_bd738b49ccda2d1fb9b3a79e07ff40339f651ea11c9e869ee70e3e92b7a4dced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_656d2723a9c333ea950c8ba68ff0e4ebb907fd886ca008978837c2a89c164d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656d2723a9c333ea950c8ba68ff0e4ebb907fd886ca008978837c2a89c164d2e->enter($__internal_656d2723a9c333ea950c8ba68ff0e4ebb907fd886ca008978837c2a89c164d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 133
        echo "        ";
        
        $__internal_656d2723a9c333ea950c8ba68ff0e4ebb907fd886ca008978837c2a89c164d2e->leave($__internal_656d2723a9c333ea950c8ba68ff0e4ebb907fd886ca008978837c2a89c164d2e_prof);

        
        $__internal_bd738b49ccda2d1fb9b3a79e07ff40339f651ea11c9e869ee70e3e92b7a4dced->leave($__internal_bd738b49ccda2d1fb9b3a79e07ff40339f651ea11c9e869ee70e3e92b7a4dced_prof);

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
        return array (  253 => 133,  244 => 132,  233 => 13,  231 => 12,  222 => 11,  204 => 9,  190 => 148,  182 => 143,  171 => 134,  169 => 132,  156 => 122,  145 => 114,  44 => 15,  42 => 11,  37 => 9,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/CoreBundle/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Musée du Louvre{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}


    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"i18n/datepicker-ar.js\"></script>
  <script src=\"i18n/datepicker-fr.js\"></script>
  <script src=\"i18n/datepicker-he.js\"></script>
  <script src=\"i18n/datepicker-zh-TW.js\"></script>
      <script>
    \$( function() {

    \$.datepicker.regional['fr'] = {
    closeText: 'Fermer',
    prevText: '&#x3c;Préc',
    nextText: 'Suiv&#x3e;',
    currentText: 'Aujourd\\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
    'Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: '',
    numberOfMonths: 1,
    showButtonPanel: true
    };
    \$.datepicker.setDefaults(\$.datepicker.regional['fr']);
        //var dateJour = new Date();


          

          \$( \".datepicker\" ).datepicker({

          dateFormat: 'yy/mm/dd',

          beforeShowDay: function (date, inst) {
              var today = new Date();

              today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());

              var selDate = Date.parse(date);

              if (date.getDay() == 0 || date.getDay() == 2 || date.getMonth() == 11 && date.getDate() == 25 || date.getMonth() == 10 && date.getDate() == 1 || date.getMonth() == 4 && date.getDate() == 1 || selDate < today) { // La semaine commence à 0 = Dimanche
                  \$('.datepicker').val('');
                  \$(inst).datepicker('show');
                  return [false, ''];
              } 
              else {
                  return [true, ''];
              }

            }
        });

        \$( \".datepicker1\").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: \"-100:+0\",
          beforeShowDay: function (date, inst) {
              var today = new Date();

              today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());

              var selDate = Date.parse(date);

              if (selDate > today) {
                  \$('.datepicker').val('');
                  \$(inst).datepicker('show');
                  return [false, ''];
              } 
              else {
                  return [true, ''];
              }

            }
    });

        
    });
  </script>
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
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>


<script src=\"{{ asset ('ajax.js') }}\"></script>
  </body>
</html>
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
