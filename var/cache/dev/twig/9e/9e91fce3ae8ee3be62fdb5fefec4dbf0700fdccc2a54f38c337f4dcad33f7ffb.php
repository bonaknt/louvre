<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c78088b31c8a70463deefcda8ba44aba122d4d8f1d2a86895468e2f6df27c8eb extends Twig_Template
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
        $__internal_36667aa7ff56ce785f35693465e25d90f259a2eb7f7e845e096b5879f6ca202f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36667aa7ff56ce785f35693465e25d90f259a2eb7f7e845e096b5879f6ca202f->enter($__internal_36667aa7ff56ce785f35693465e25d90f259a2eb7f7e845e096b5879f6ca202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cfc48de33fe46d78fd7b3d05318ec957d9affb97186a277da4d7e721b4c59adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc48de33fe46d78fd7b3d05318ec957d9affb97186a277da4d7e721b4c59adf->enter($__internal_cfc48de33fe46d78fd7b3d05318ec957d9affb97186a277da4d7e721b4c59adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36667aa7ff56ce785f35693465e25d90f259a2eb7f7e845e096b5879f6ca202f->leave($__internal_36667aa7ff56ce785f35693465e25d90f259a2eb7f7e845e096b5879f6ca202f_prof);

        
        $__internal_cfc48de33fe46d78fd7b3d05318ec957d9affb97186a277da4d7e721b4c59adf->leave($__internal_cfc48de33fe46d78fd7b3d05318ec957d9affb97186a277da4d7e721b4c59adf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
