<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e91488e7b6769530fbc37a234777bc3c8d87ba1126c91270c6c60057dbc8f640 extends Twig_Template
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
        $__internal_2edf3747855eb60bcb57c33c4f5970eced4f89aa16f8589961bf67a2830e6eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edf3747855eb60bcb57c33c4f5970eced4f89aa16f8589961bf67a2830e6eb2->enter($__internal_2edf3747855eb60bcb57c33c4f5970eced4f89aa16f8589961bf67a2830e6eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_71c92713acef890480035117b0e56a7241562b70b7e43aa6ffacd5729dfe5418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c92713acef890480035117b0e56a7241562b70b7e43aa6ffacd5729dfe5418->enter($__internal_71c92713acef890480035117b0e56a7241562b70b7e43aa6ffacd5729dfe5418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2edf3747855eb60bcb57c33c4f5970eced4f89aa16f8589961bf67a2830e6eb2->leave($__internal_2edf3747855eb60bcb57c33c4f5970eced4f89aa16f8589961bf67a2830e6eb2_prof);

        
        $__internal_71c92713acef890480035117b0e56a7241562b70b7e43aa6ffacd5729dfe5418->leave($__internal_71c92713acef890480035117b0e56a7241562b70b7e43aa6ffacd5729dfe5418_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
