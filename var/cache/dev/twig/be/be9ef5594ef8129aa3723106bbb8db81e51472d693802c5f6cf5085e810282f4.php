<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4877685717ac1afa6a6b2d93b59ca1a51ae6dc3391cc896826adda4e51b2ca44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a64040faded62656df041e46c0b6f405c823393bbbbd4376fd0fa0a425ed6fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64040faded62656df041e46c0b6f405c823393bbbbd4376fd0fa0a425ed6fa2->enter($__internal_a64040faded62656df041e46c0b6f405c823393bbbbd4376fd0fa0a425ed6fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_00810d96ab191e76a98ea118b9b8389072439ff710b13048eb4566ac890efb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00810d96ab191e76a98ea118b9b8389072439ff710b13048eb4566ac890efb91->enter($__internal_00810d96ab191e76a98ea118b9b8389072439ff710b13048eb4566ac890efb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a64040faded62656df041e46c0b6f405c823393bbbbd4376fd0fa0a425ed6fa2->leave($__internal_a64040faded62656df041e46c0b6f405c823393bbbbd4376fd0fa0a425ed6fa2_prof);

        
        $__internal_00810d96ab191e76a98ea118b9b8389072439ff710b13048eb4566ac890efb91->leave($__internal_00810d96ab191e76a98ea118b9b8389072439ff710b13048eb4566ac890efb91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
