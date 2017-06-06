<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95a9b09ebf68b6acc9ce119c7d7cabfed3a0aa09267026ba03cbd0ff3b63b7e2 extends Twig_Template
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
        $__internal_312110bf955c50ca9391e6fe54fdcf3a28ee1d746a564b6bb98129f2f328886e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312110bf955c50ca9391e6fe54fdcf3a28ee1d746a564b6bb98129f2f328886e->enter($__internal_312110bf955c50ca9391e6fe54fdcf3a28ee1d746a564b6bb98129f2f328886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_394fb181b0fcb93462e29d3922e38073939f26232e7d842fe788a70ba084083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394fb181b0fcb93462e29d3922e38073939f26232e7d842fe788a70ba084083d->enter($__internal_394fb181b0fcb93462e29d3922e38073939f26232e7d842fe788a70ba084083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_312110bf955c50ca9391e6fe54fdcf3a28ee1d746a564b6bb98129f2f328886e->leave($__internal_312110bf955c50ca9391e6fe54fdcf3a28ee1d746a564b6bb98129f2f328886e_prof);

        
        $__internal_394fb181b0fcb93462e29d3922e38073939f26232e7d842fe788a70ba084083d->leave($__internal_394fb181b0fcb93462e29d3922e38073939f26232e7d842fe788a70ba084083d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
