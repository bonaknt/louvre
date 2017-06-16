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
        $__internal_55f1973d6118a9a922ca725daa0ead83a6a491b5cde035061b927921bce12617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f1973d6118a9a922ca725daa0ead83a6a491b5cde035061b927921bce12617->enter($__internal_55f1973d6118a9a922ca725daa0ead83a6a491b5cde035061b927921bce12617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c2b23123eeb62bce79bfbe23786550407c8ccc489ce389d2c0fcc6e3806a5bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b23123eeb62bce79bfbe23786550407c8ccc489ce389d2c0fcc6e3806a5bc7->enter($__internal_c2b23123eeb62bce79bfbe23786550407c8ccc489ce389d2c0fcc6e3806a5bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_55f1973d6118a9a922ca725daa0ead83a6a491b5cde035061b927921bce12617->leave($__internal_55f1973d6118a9a922ca725daa0ead83a6a491b5cde035061b927921bce12617_prof);

        
        $__internal_c2b23123eeb62bce79bfbe23786550407c8ccc489ce389d2c0fcc6e3806a5bc7->leave($__internal_c2b23123eeb62bce79bfbe23786550407c8ccc489ce389d2c0fcc6e3806a5bc7_prof);

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
