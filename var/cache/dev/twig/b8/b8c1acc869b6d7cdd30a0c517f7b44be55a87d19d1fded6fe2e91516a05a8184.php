<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_df2f7d1b5ee93d6eea67423386d08f5384654328cc5e93722f4944625fa2369d extends Twig_Template
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
        $__internal_68996bf2a2dca30f673e014bf508b0463903b3c6b7f8171e96d29c3f4da07200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68996bf2a2dca30f673e014bf508b0463903b3c6b7f8171e96d29c3f4da07200->enter($__internal_68996bf2a2dca30f673e014bf508b0463903b3c6b7f8171e96d29c3f4da07200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e00811d40f73a35eed9b6682c9339443211120ad563692bf303053b28c8f40bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00811d40f73a35eed9b6682c9339443211120ad563692bf303053b28c8f40bc->enter($__internal_e00811d40f73a35eed9b6682c9339443211120ad563692bf303053b28c8f40bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_68996bf2a2dca30f673e014bf508b0463903b3c6b7f8171e96d29c3f4da07200->leave($__internal_68996bf2a2dca30f673e014bf508b0463903b3c6b7f8171e96d29c3f4da07200_prof);

        
        $__internal_e00811d40f73a35eed9b6682c9339443211120ad563692bf303053b28c8f40bc->leave($__internal_e00811d40f73a35eed9b6682c9339443211120ad563692bf303053b28c8f40bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
