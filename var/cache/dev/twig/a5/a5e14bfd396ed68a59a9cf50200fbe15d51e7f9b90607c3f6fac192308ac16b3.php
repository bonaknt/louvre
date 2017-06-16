<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1d99f9b70be9458ba91ce4aabb72d18f06f64a01767f1d2fdaf8d3d1cec43614 extends Twig_Template
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
        $__internal_262644c895b2f9c00097017008139f4a966c89b1447a1a3fa22418490dafd4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262644c895b2f9c00097017008139f4a966c89b1447a1a3fa22418490dafd4f8->enter($__internal_262644c895b2f9c00097017008139f4a966c89b1447a1a3fa22418490dafd4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_91ba93b8d06300f94ba74f4e991c66ed4a6986b6889afd6e0620eb80b783bf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ba93b8d06300f94ba74f4e991c66ed4a6986b6889afd6e0620eb80b783bf91->enter($__internal_91ba93b8d06300f94ba74f4e991c66ed4a6986b6889afd6e0620eb80b783bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_262644c895b2f9c00097017008139f4a966c89b1447a1a3fa22418490dafd4f8->leave($__internal_262644c895b2f9c00097017008139f4a966c89b1447a1a3fa22418490dafd4f8_prof);

        
        $__internal_91ba93b8d06300f94ba74f4e991c66ed4a6986b6889afd6e0620eb80b783bf91->leave($__internal_91ba93b8d06300f94ba74f4e991c66ed4a6986b6889afd6e0620eb80b783bf91_prof);

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
