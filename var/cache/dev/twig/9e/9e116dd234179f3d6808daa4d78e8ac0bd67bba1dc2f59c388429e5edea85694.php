<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1a4d59a53ec68f6c0780521dc6ade8449579bcee70e6400343f608cc2c753665 extends Twig_Template
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
        $__internal_a004fe2e8062947cb67a6eb292319949d8ad7a3b1a84f8d5e66e044fea0a0ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a004fe2e8062947cb67a6eb292319949d8ad7a3b1a84f8d5e66e044fea0a0ad4->enter($__internal_a004fe2e8062947cb67a6eb292319949d8ad7a3b1a84f8d5e66e044fea0a0ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b11d450f50766706c382d801bb6b3d53eb3c8c51a472da6a53d0418e93e66a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11d450f50766706c382d801bb6b3d53eb3c8c51a472da6a53d0418e93e66a06->enter($__internal_b11d450f50766706c382d801bb6b3d53eb3c8c51a472da6a53d0418e93e66a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a004fe2e8062947cb67a6eb292319949d8ad7a3b1a84f8d5e66e044fea0a0ad4->leave($__internal_a004fe2e8062947cb67a6eb292319949d8ad7a3b1a84f8d5e66e044fea0a0ad4_prof);

        
        $__internal_b11d450f50766706c382d801bb6b3d53eb3c8c51a472da6a53d0418e93e66a06->leave($__internal_b11d450f50766706c382d801bb6b3d53eb3c8c51a472da6a53d0418e93e66a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
