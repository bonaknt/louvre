<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_78cd4730b628da7aed34bfceea7ddf25f1ed03234cdaefa0b7cfbc532768cf01 extends Twig_Template
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
        $__internal_922be8505d62d86579d762e2912bbd1e09b21448a1e9e36d5b4f08e709fcc32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922be8505d62d86579d762e2912bbd1e09b21448a1e9e36d5b4f08e709fcc32e->enter($__internal_922be8505d62d86579d762e2912bbd1e09b21448a1e9e36d5b4f08e709fcc32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_77768dd2ffca48eb569768340190561b634b441c492a1803f400799f37792c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77768dd2ffca48eb569768340190561b634b441c492a1803f400799f37792c3c->enter($__internal_77768dd2ffca48eb569768340190561b634b441c492a1803f400799f37792c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_922be8505d62d86579d762e2912bbd1e09b21448a1e9e36d5b4f08e709fcc32e->leave($__internal_922be8505d62d86579d762e2912bbd1e09b21448a1e9e36d5b4f08e709fcc32e_prof);

        
        $__internal_77768dd2ffca48eb569768340190561b634b441c492a1803f400799f37792c3c->leave($__internal_77768dd2ffca48eb569768340190561b634b441c492a1803f400799f37792c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
