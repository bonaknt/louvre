<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_16ae26cb948fb0d00598eccccfe4621e85003b95fa35d622f1252fc90785ac3d extends Twig_Template
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
        $__internal_82242af8e666a1ab84979945aefef0a059b1860df14afdb4848ae3ee70e0abc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82242af8e666a1ab84979945aefef0a059b1860df14afdb4848ae3ee70e0abc8->enter($__internal_82242af8e666a1ab84979945aefef0a059b1860df14afdb4848ae3ee70e0abc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2174f1f1aa9c5e35b4396f384c6526295d53c7a4edf500dc10b1db03bc532a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2174f1f1aa9c5e35b4396f384c6526295d53c7a4edf500dc10b1db03bc532a94->enter($__internal_2174f1f1aa9c5e35b4396f384c6526295d53c7a4edf500dc10b1db03bc532a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_82242af8e666a1ab84979945aefef0a059b1860df14afdb4848ae3ee70e0abc8->leave($__internal_82242af8e666a1ab84979945aefef0a059b1860df14afdb4848ae3ee70e0abc8_prof);

        
        $__internal_2174f1f1aa9c5e35b4396f384c6526295d53c7a4edf500dc10b1db03bc532a94->leave($__internal_2174f1f1aa9c5e35b4396f384c6526295d53c7a4edf500dc10b1db03bc532a94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
