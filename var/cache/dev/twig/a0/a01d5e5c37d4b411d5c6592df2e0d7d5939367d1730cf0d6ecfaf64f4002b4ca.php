<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2a212e5ed31a1b3cc9815006cc6157bfbfa8741c4f386eb219b775c8de20091d extends Twig_Template
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
        $__internal_cc1269bcbdfe7e4789369cf90fcd060938bfb6014ae9287e5c1e5cf23aca46e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1269bcbdfe7e4789369cf90fcd060938bfb6014ae9287e5c1e5cf23aca46e9->enter($__internal_cc1269bcbdfe7e4789369cf90fcd060938bfb6014ae9287e5c1e5cf23aca46e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f964fd2a45fcae326bc024f0c9972107ddd3e3c49480f041c72a38c5797177bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f964fd2a45fcae326bc024f0c9972107ddd3e3c49480f041c72a38c5797177bc->enter($__internal_f964fd2a45fcae326bc024f0c9972107ddd3e3c49480f041c72a38c5797177bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cc1269bcbdfe7e4789369cf90fcd060938bfb6014ae9287e5c1e5cf23aca46e9->leave($__internal_cc1269bcbdfe7e4789369cf90fcd060938bfb6014ae9287e5c1e5cf23aca46e9_prof);

        
        $__internal_f964fd2a45fcae326bc024f0c9972107ddd3e3c49480f041c72a38c5797177bc->leave($__internal_f964fd2a45fcae326bc024f0c9972107ddd3e3c49480f041c72a38c5797177bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
