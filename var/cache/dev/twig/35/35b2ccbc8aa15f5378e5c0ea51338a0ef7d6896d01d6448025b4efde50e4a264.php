<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6fadd97612084bc62e99c1c95fcc3a0e8ff142d467d7e03d2b4dae8da0522881 extends Twig_Template
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
        $__internal_20f676ef35aab883458dade1e222b5b8ce403574f57922985e4b0ea21ac2c602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f676ef35aab883458dade1e222b5b8ce403574f57922985e4b0ea21ac2c602->enter($__internal_20f676ef35aab883458dade1e222b5b8ce403574f57922985e4b0ea21ac2c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_346cd23c3c23344b3deaacf12f64339a3d3a84fbee307bddfa3fe69c812563dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346cd23c3c23344b3deaacf12f64339a3d3a84fbee307bddfa3fe69c812563dd->enter($__internal_346cd23c3c23344b3deaacf12f64339a3d3a84fbee307bddfa3fe69c812563dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_20f676ef35aab883458dade1e222b5b8ce403574f57922985e4b0ea21ac2c602->leave($__internal_20f676ef35aab883458dade1e222b5b8ce403574f57922985e4b0ea21ac2c602_prof);

        
        $__internal_346cd23c3c23344b3deaacf12f64339a3d3a84fbee307bddfa3fe69c812563dd->leave($__internal_346cd23c3c23344b3deaacf12f64339a3d3a84fbee307bddfa3fe69c812563dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
