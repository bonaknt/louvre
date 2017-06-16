<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c20011b628a4916b2b23b18fd8c6f7cd472ac63bdbf71425ac61791744cbcb7c extends Twig_Template
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
        $__internal_9955e2626e072fbb0a9c5575e2668da4c1b81bd14d8389fdf6284afcd1a238b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9955e2626e072fbb0a9c5575e2668da4c1b81bd14d8389fdf6284afcd1a238b1->enter($__internal_9955e2626e072fbb0a9c5575e2668da4c1b81bd14d8389fdf6284afcd1a238b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cf69f836157ffac6bb700c789e2514e456a0d9b21c29f157acd577e8838905a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf69f836157ffac6bb700c789e2514e456a0d9b21c29f157acd577e8838905a2->enter($__internal_cf69f836157ffac6bb700c789e2514e456a0d9b21c29f157acd577e8838905a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9955e2626e072fbb0a9c5575e2668da4c1b81bd14d8389fdf6284afcd1a238b1->leave($__internal_9955e2626e072fbb0a9c5575e2668da4c1b81bd14d8389fdf6284afcd1a238b1_prof);

        
        $__internal_cf69f836157ffac6bb700c789e2514e456a0d9b21c29f157acd577e8838905a2->leave($__internal_cf69f836157ffac6bb700c789e2514e456a0d9b21c29f157acd577e8838905a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
