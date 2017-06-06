<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5b0c7723737a3bf1a18033efceba1b153622eb0acbc11f9d06ef8f4c21198852 extends Twig_Template
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
        $__internal_41b99fe31673a2dfcb31ee7db7d93e59b3bca30204bd495a1c9941d681b05baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b99fe31673a2dfcb31ee7db7d93e59b3bca30204bd495a1c9941d681b05baa->enter($__internal_41b99fe31673a2dfcb31ee7db7d93e59b3bca30204bd495a1c9941d681b05baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d50cb59b7d9e560dc14984a2d6f6f3c12141e2aab076d60bb59746233b8160cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50cb59b7d9e560dc14984a2d6f6f3c12141e2aab076d60bb59746233b8160cf->enter($__internal_d50cb59b7d9e560dc14984a2d6f6f3c12141e2aab076d60bb59746233b8160cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_41b99fe31673a2dfcb31ee7db7d93e59b3bca30204bd495a1c9941d681b05baa->leave($__internal_41b99fe31673a2dfcb31ee7db7d93e59b3bca30204bd495a1c9941d681b05baa_prof);

        
        $__internal_d50cb59b7d9e560dc14984a2d6f6f3c12141e2aab076d60bb59746233b8160cf->leave($__internal_d50cb59b7d9e560dc14984a2d6f6f3c12141e2aab076d60bb59746233b8160cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
