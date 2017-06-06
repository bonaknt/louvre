<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_641373ae80d67ae83f4b6a0facaa44980cb2e0b6f176d37c497fdd5588420939 extends Twig_Template
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
        $__internal_ec6d70605666c7fef2218244046b0464b9f3d5c41484e465bd81ef04cf012a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6d70605666c7fef2218244046b0464b9f3d5c41484e465bd81ef04cf012a2c->enter($__internal_ec6d70605666c7fef2218244046b0464b9f3d5c41484e465bd81ef04cf012a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b9f57be3802400deea065d70e7ddb8ef61a3ebf83a9117f0762fe0bc113d7f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f57be3802400deea065d70e7ddb8ef61a3ebf83a9117f0762fe0bc113d7f69->enter($__internal_b9f57be3802400deea065d70e7ddb8ef61a3ebf83a9117f0762fe0bc113d7f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ec6d70605666c7fef2218244046b0464b9f3d5c41484e465bd81ef04cf012a2c->leave($__internal_ec6d70605666c7fef2218244046b0464b9f3d5c41484e465bd81ef04cf012a2c_prof);

        
        $__internal_b9f57be3802400deea065d70e7ddb8ef61a3ebf83a9117f0762fe0bc113d7f69->leave($__internal_b9f57be3802400deea065d70e7ddb8ef61a3ebf83a9117f0762fe0bc113d7f69_prof);

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
