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
        $__internal_0f549cc67bbd9a83b6bc8d5478da1f0e5b3cf4061ad5b4707a220ab29fc795c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f549cc67bbd9a83b6bc8d5478da1f0e5b3cf4061ad5b4707a220ab29fc795c8->enter($__internal_0f549cc67bbd9a83b6bc8d5478da1f0e5b3cf4061ad5b4707a220ab29fc795c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_73fbf61a70907896713a8bb274c8ba302fbc0c5ea3af3144c251e339e5d5b8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fbf61a70907896713a8bb274c8ba302fbc0c5ea3af3144c251e339e5d5b8d4->enter($__internal_73fbf61a70907896713a8bb274c8ba302fbc0c5ea3af3144c251e339e5d5b8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

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
        dateFormat: 'yy/mm/dd',
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
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_inscription");
        echo "\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Liens</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 123
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
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "      </div>

    </div>

        

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>


<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ajax.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_0f549cc67bbd9a83b6bc8d5478da1f0e5b3cf4061ad5b4707a220ab29fc795c8->leave($__internal_0f549cc67bbd9a83b6bc8d5478da1f0e5b3cf4061ad5b4707a220ab29fc795c8_prof);

        
        $__internal_73fbf61a70907896713a8bb274c8ba302fbc0c5ea3af3144c251e339e5d5b8d4->leave($__internal_73fbf61a70907896713a8bb274c8ba302fbc0c5ea3af3144c251e339e5d5b8d4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d18bc92cbbfa11c69271f1b601c4893547550fbcab3fdb93a03412c539790219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18bc92cbbfa11c69271f1b601c4893547550fbcab3fdb93a03412c539790219->enter($__internal_d18bc92cbbfa11c69271f1b601c4893547550fbcab3fdb93a03412c539790219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e1d63c55d89df73ed12f6a215ad1fba16c35c58956f5139ad5cd425be311a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1d63c55d89df73ed12f6a215ad1fba16c35c58956f5139ad5cd425be311a3f->enter($__internal_3e1d63c55d89df73ed12f6a215ad1fba16c35c58956f5139ad5cd425be311a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_3e1d63c55d89df73ed12f6a215ad1fba16c35c58956f5139ad5cd425be311a3f->leave($__internal_3e1d63c55d89df73ed12f6a215ad1fba16c35c58956f5139ad5cd425be311a3f_prof);

        
        $__internal_d18bc92cbbfa11c69271f1b601c4893547550fbcab3fdb93a03412c539790219->leave($__internal_d18bc92cbbfa11c69271f1b601c4893547550fbcab3fdb93a03412c539790219_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f0135d171c6209e0811aa7af028ebe1f0db9e68450794d3ee651f2ebf040f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0135d171c6209e0811aa7af028ebe1f0db9e68450794d3ee651f2ebf040f4d->enter($__internal_4f0135d171c6209e0811aa7af028ebe1f0db9e68450794d3ee651f2ebf040f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22d7585806d1562edeffee364a0a45c8480ca38cef51d7160ca6777f11721e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d7585806d1562edeffee364a0a45c8480ca38cef51d7160ca6777f11721e7a->enter($__internal_22d7585806d1562edeffee364a0a45c8480ca38cef51d7160ca6777f11721e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_22d7585806d1562edeffee364a0a45c8480ca38cef51d7160ca6777f11721e7a->leave($__internal_22d7585806d1562edeffee364a0a45c8480ca38cef51d7160ca6777f11721e7a_prof);

        
        $__internal_4f0135d171c6209e0811aa7af028ebe1f0db9e68450794d3ee651f2ebf040f4d->leave($__internal_4f0135d171c6209e0811aa7af028ebe1f0db9e68450794d3ee651f2ebf040f4d_prof);

    }

    // line 133
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b99cf85d93bb361c50ffb4beb433a42c75d1c116e2d926e5ef8798af6cb87eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b99cf85d93bb361c50ffb4beb433a42c75d1c116e2d926e5ef8798af6cb87eb->enter($__internal_5b99cf85d93bb361c50ffb4beb433a42c75d1c116e2d926e5ef8798af6cb87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aec7c7d9b07c612cd4e22f3f8166cc0e47b5ad8a9e9b56993cc3cc07836685d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec7c7d9b07c612cd4e22f3f8166cc0e47b5ad8a9e9b56993cc3cc07836685d0->enter($__internal_aec7c7d9b07c612cd4e22f3f8166cc0e47b5ad8a9e9b56993cc3cc07836685d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 134
        echo "        ";
        
        $__internal_aec7c7d9b07c612cd4e22f3f8166cc0e47b5ad8a9e9b56993cc3cc07836685d0->leave($__internal_aec7c7d9b07c612cd4e22f3f8166cc0e47b5ad8a9e9b56993cc3cc07836685d0_prof);

        
        $__internal_5b99cf85d93bb361c50ffb4beb433a42c75d1c116e2d926e5ef8798af6cb87eb->leave($__internal_5b99cf85d93bb361c50ffb4beb433a42c75d1c116e2d926e5ef8798af6cb87eb_prof);

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
        return array (  254 => 134,  245 => 133,  234 => 13,  232 => 12,  223 => 11,  205 => 9,  191 => 149,  183 => 144,  172 => 135,  170 => 133,  157 => 123,  146 => 115,  44 => 15,  42 => 11,  37 => 9,  28 => 2,);
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
        dateFormat: 'yy/mm/dd',
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
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\layout.html.twig");
    }
}
