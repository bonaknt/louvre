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
        $__internal_19e4bb199fac024ff8e48a461629c8680216c064b480f43c48d1b2f586dc76fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e4bb199fac024ff8e48a461629c8680216c064b480f43c48d1b2f586dc76fa->enter($__internal_19e4bb199fac024ff8e48a461629c8680216c064b480f43c48d1b2f586dc76fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fc3f8aaa959da9fd619b12522de469ca63f3b0b6851ddf206c8f04d4aabeee65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3f8aaa959da9fd619b12522de469ca63f3b0b6851ddf206c8f04d4aabeee65->enter($__internal_fc3f8aaa959da9fd619b12522de469ca63f3b0b6851ddf206c8f04d4aabeee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_19e4bb199fac024ff8e48a461629c8680216c064b480f43c48d1b2f586dc76fa->leave($__internal_19e4bb199fac024ff8e48a461629c8680216c064b480f43c48d1b2f586dc76fa_prof);

        
        $__internal_fc3f8aaa959da9fd619b12522de469ca63f3b0b6851ddf206c8f04d4aabeee65->leave($__internal_fc3f8aaa959da9fd619b12522de469ca63f3b0b6851ddf206c8f04d4aabeee65_prof);

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
