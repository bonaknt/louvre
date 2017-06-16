<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_532def047d105031e460be81bdca89f00bc571424e14997996387166c89f8847 extends Twig_Template
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
        $__internal_09778406056a1cc65654720a603efed917e0273c3e872fed39e21b8f23a12935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09778406056a1cc65654720a603efed917e0273c3e872fed39e21b8f23a12935->enter($__internal_09778406056a1cc65654720a603efed917e0273c3e872fed39e21b8f23a12935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_38e8ca98b0c0059ca4549e439939e86602c8646ee676f145c9d9240bf880ae71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e8ca98b0c0059ca4549e439939e86602c8646ee676f145c9d9240bf880ae71->enter($__internal_38e8ca98b0c0059ca4549e439939e86602c8646ee676f145c9d9240bf880ae71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_09778406056a1cc65654720a603efed917e0273c3e872fed39e21b8f23a12935->leave($__internal_09778406056a1cc65654720a603efed917e0273c3e872fed39e21b8f23a12935_prof);

        
        $__internal_38e8ca98b0c0059ca4549e439939e86602c8646ee676f145c9d9240bf880ae71->leave($__internal_38e8ca98b0c0059ca4549e439939e86602c8646ee676f145c9d9240bf880ae71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
