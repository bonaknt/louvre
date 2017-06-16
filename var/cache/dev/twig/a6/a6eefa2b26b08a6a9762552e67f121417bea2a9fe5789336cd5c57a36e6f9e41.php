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
        $__internal_9e7a064c23e0dd4255ee4cf8de064b1736fc89c4636406245173b29cee15fc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7a064c23e0dd4255ee4cf8de064b1736fc89c4636406245173b29cee15fc09->enter($__internal_9e7a064c23e0dd4255ee4cf8de064b1736fc89c4636406245173b29cee15fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_af1784165937c4c9d82fb5134e44eaf17bec549964dfc16c0c8320f1cb0ab599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1784165937c4c9d82fb5134e44eaf17bec549964dfc16c0c8320f1cb0ab599->enter($__internal_af1784165937c4c9d82fb5134e44eaf17bec549964dfc16c0c8320f1cb0ab599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9e7a064c23e0dd4255ee4cf8de064b1736fc89c4636406245173b29cee15fc09->leave($__internal_9e7a064c23e0dd4255ee4cf8de064b1736fc89c4636406245173b29cee15fc09_prof);

        
        $__internal_af1784165937c4c9d82fb5134e44eaf17bec549964dfc16c0c8320f1cb0ab599->leave($__internal_af1784165937c4c9d82fb5134e44eaf17bec549964dfc16c0c8320f1cb0ab599_prof);

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
