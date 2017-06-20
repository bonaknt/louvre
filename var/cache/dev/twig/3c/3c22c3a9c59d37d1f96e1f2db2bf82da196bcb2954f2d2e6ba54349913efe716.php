<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c68b8dc9526b5db02e506664e8f3ffb48ca3696c9bf8a21db7700cc8bcd386ff extends Twig_Template
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
        $__internal_2c8d55e32f4d64748ef63f250e26feab1b84a4e5746aa47b5d4260e341f5efe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8d55e32f4d64748ef63f250e26feab1b84a4e5746aa47b5d4260e341f5efe0->enter($__internal_2c8d55e32f4d64748ef63f250e26feab1b84a4e5746aa47b5d4260e341f5efe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a51aa01d8edfcbd02f8168fa9c7eba6bed16ceb528c60c9a9b8b509a59578537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51aa01d8edfcbd02f8168fa9c7eba6bed16ceb528c60c9a9b8b509a59578537->enter($__internal_a51aa01d8edfcbd02f8168fa9c7eba6bed16ceb528c60c9a9b8b509a59578537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2c8d55e32f4d64748ef63f250e26feab1b84a4e5746aa47b5d4260e341f5efe0->leave($__internal_2c8d55e32f4d64748ef63f250e26feab1b84a4e5746aa47b5d4260e341f5efe0_prof);

        
        $__internal_a51aa01d8edfcbd02f8168fa9c7eba6bed16ceb528c60c9a9b8b509a59578537->leave($__internal_a51aa01d8edfcbd02f8168fa9c7eba6bed16ceb528c60c9a9b8b509a59578537_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
