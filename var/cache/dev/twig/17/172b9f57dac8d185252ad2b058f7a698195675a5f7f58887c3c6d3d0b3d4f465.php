<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b6753891e8e7a39f5d4ea3988e4f6ace19803373e4c412c7befab6bc5c4a0aa2 extends Twig_Template
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
        $__internal_b765bc4ff8a457f62311284a2da583e483bc827e9abafab444f341eef21b236b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b765bc4ff8a457f62311284a2da583e483bc827e9abafab444f341eef21b236b->enter($__internal_b765bc4ff8a457f62311284a2da583e483bc827e9abafab444f341eef21b236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_16a8c3b5ed99072326289e743d75314aca6e0086f923e3b9b28ed1abe95c6159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a8c3b5ed99072326289e743d75314aca6e0086f923e3b9b28ed1abe95c6159->enter($__internal_16a8c3b5ed99072326289e743d75314aca6e0086f923e3b9b28ed1abe95c6159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b765bc4ff8a457f62311284a2da583e483bc827e9abafab444f341eef21b236b->leave($__internal_b765bc4ff8a457f62311284a2da583e483bc827e9abafab444f341eef21b236b_prof);

        
        $__internal_16a8c3b5ed99072326289e743d75314aca6e0086f923e3b9b28ed1abe95c6159->leave($__internal_16a8c3b5ed99072326289e743d75314aca6e0086f923e3b9b28ed1abe95c6159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
