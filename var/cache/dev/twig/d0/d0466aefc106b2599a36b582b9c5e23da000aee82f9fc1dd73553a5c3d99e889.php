<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_57123e58bf93206ab01f4fed7e7c46f8ddcdc489f0204084f0faadcd1f9d7d55 extends Twig_Template
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
        $__internal_dab45d075c11af221ecbeece3bffdc93fbcc30de24bf872d63de3ec4e4e7b4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab45d075c11af221ecbeece3bffdc93fbcc30de24bf872d63de3ec4e4e7b4d9->enter($__internal_dab45d075c11af221ecbeece3bffdc93fbcc30de24bf872d63de3ec4e4e7b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8ad3bfd1f089255990ee854d3ada9479f7e124d3ea4bdb5be2a60eaddffe62ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad3bfd1f089255990ee854d3ada9479f7e124d3ea4bdb5be2a60eaddffe62ec->enter($__internal_8ad3bfd1f089255990ee854d3ada9479f7e124d3ea4bdb5be2a60eaddffe62ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dab45d075c11af221ecbeece3bffdc93fbcc30de24bf872d63de3ec4e4e7b4d9->leave($__internal_dab45d075c11af221ecbeece3bffdc93fbcc30de24bf872d63de3ec4e4e7b4d9_prof);

        
        $__internal_8ad3bfd1f089255990ee854d3ada9479f7e124d3ea4bdb5be2a60eaddffe62ec->leave($__internal_8ad3bfd1f089255990ee854d3ada9479f7e124d3ea4bdb5be2a60eaddffe62ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
