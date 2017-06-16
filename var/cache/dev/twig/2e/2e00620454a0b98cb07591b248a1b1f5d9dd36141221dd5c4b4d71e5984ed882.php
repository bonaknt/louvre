<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e677874a0469b02cf4a09a08e797f41cede8d895a7098b108a74d9e5cafbfde6 extends Twig_Template
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
        $__internal_2ce0fb96fc9a314462f813b6cd50935c7ee0ab949c6e5551a19d2f6f009e1717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce0fb96fc9a314462f813b6cd50935c7ee0ab949c6e5551a19d2f6f009e1717->enter($__internal_2ce0fb96fc9a314462f813b6cd50935c7ee0ab949c6e5551a19d2f6f009e1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6e5100cce8dec8597fcca2fce81ccb58c2102d48c464a57d2c41d7175f95aef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5100cce8dec8597fcca2fce81ccb58c2102d48c464a57d2c41d7175f95aef9->enter($__internal_6e5100cce8dec8597fcca2fce81ccb58c2102d48c464a57d2c41d7175f95aef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2ce0fb96fc9a314462f813b6cd50935c7ee0ab949c6e5551a19d2f6f009e1717->leave($__internal_2ce0fb96fc9a314462f813b6cd50935c7ee0ab949c6e5551a19d2f6f009e1717_prof);

        
        $__internal_6e5100cce8dec8597fcca2fce81ccb58c2102d48c464a57d2c41d7175f95aef9->leave($__internal_6e5100cce8dec8597fcca2fce81ccb58c2102d48c464a57d2c41d7175f95aef9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
