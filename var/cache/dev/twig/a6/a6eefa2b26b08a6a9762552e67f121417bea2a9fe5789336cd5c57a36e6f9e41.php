<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9ab1cc725e1936f818fa12026440fad88602ea7be5d8a0d41fa1bf17a64b4634 extends Twig_Template
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
        $__internal_2a4a1c3e247f0fdc7f1e0672314bf41dbb924c8c16beb66ba69acd4d854195fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4a1c3e247f0fdc7f1e0672314bf41dbb924c8c16beb66ba69acd4d854195fd->enter($__internal_2a4a1c3e247f0fdc7f1e0672314bf41dbb924c8c16beb66ba69acd4d854195fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f0e88bd2115c4076303612db1677ef1f43bf8c431af21c5608049c6dc3dc4ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e88bd2115c4076303612db1677ef1f43bf8c431af21c5608049c6dc3dc4ff1->enter($__internal_f0e88bd2115c4076303612db1677ef1f43bf8c431af21c5608049c6dc3dc4ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2a4a1c3e247f0fdc7f1e0672314bf41dbb924c8c16beb66ba69acd4d854195fd->leave($__internal_2a4a1c3e247f0fdc7f1e0672314bf41dbb924c8c16beb66ba69acd4d854195fd_prof);

        
        $__internal_f0e88bd2115c4076303612db1677ef1f43bf8c431af21c5608049c6dc3dc4ff1->leave($__internal_f0e88bd2115c4076303612db1677ef1f43bf8c431af21c5608049c6dc3dc4ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
