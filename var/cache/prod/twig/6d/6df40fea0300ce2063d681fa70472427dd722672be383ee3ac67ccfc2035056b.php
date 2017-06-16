<?php

/* MKLouvreBundle:Default:ticket.html.twig */
class __TwigTemplate_de2188343541f05f666983fd3c0b2c121932c627641503f2ae080e06865e4863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MKLouvreBundle::layout.html.twig", "MKLouvreBundle:Default:ticket.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 6
        echo "  <h1>Formulaire de réservation</h1>

  <hr>
<div class=\"well\">
  ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 12
            echo "
  ";
            // line 14
            echo "  <div class=\"form-group\">
    ";
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
            echo "

    ";
            // line 19
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 23
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

   <div class=\"form-group\">
    ";
            // line 29
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prenom"));
            echo "

    ";
            // line 32
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 36
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 42
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de naissance"));
            echo "

    ";
            // line 45
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 49
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "dtNaissance", array()), 'widget', array("attr" => array("class" => "form-control datepicker1")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 55
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nationalité"));
            echo "

    ";
            // line 58
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 62
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "nationalite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 68
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Tarif réduit "));
            echo "

    ";
            // line 71
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 75
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "tReduit", array()), 'widget', array("attr" => array("class" => "")));
            echo "
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 79,  155 => 75,  148 => 71,  142 => 68,  133 => 62,  126 => 58,  120 => 55,  111 => 49,  104 => 45,  98 => 42,  89 => 36,  82 => 32,  76 => 29,  67 => 23,  60 => 19,  54 => 16,  51 => 14,  48 => 12,  44 => 11,  40 => 10,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MKLouvreBundle:Default:ticket.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/ticket.html.twig");
    }
}
