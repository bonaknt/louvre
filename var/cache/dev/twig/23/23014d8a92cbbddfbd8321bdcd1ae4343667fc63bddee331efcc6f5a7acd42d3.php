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
        $__internal_2335eb93e265d5e5c2344a0ca13913b842345a5ece440c22e731397b3b0c42aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2335eb93e265d5e5c2344a0ca13913b842345a5ece440c22e731397b3b0c42aa->enter($__internal_2335eb93e265d5e5c2344a0ca13913b842345a5ece440c22e731397b3b0c42aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c331af932785e86af7d80caa89e044813ccacb3a6281b49ea5e2a35f260309df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c331af932785e86af7d80caa89e044813ccacb3a6281b49ea5e2a35f260309df->enter($__internal_c331af932785e86af7d80caa89e044813ccacb3a6281b49ea5e2a35f260309df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2335eb93e265d5e5c2344a0ca13913b842345a5ece440c22e731397b3b0c42aa->leave($__internal_2335eb93e265d5e5c2344a0ca13913b842345a5ece440c22e731397b3b0c42aa_prof);

        
        $__internal_c331af932785e86af7d80caa89e044813ccacb3a6281b49ea5e2a35f260309df->leave($__internal_c331af932785e86af7d80caa89e044813ccacb3a6281b49ea5e2a35f260309df_prof);

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
