<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_353dbf5fefe11ef5fae7530342ddf8862a94612839e6bd3e15ce057f5991fd7e extends Twig_Template
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
        $__internal_fb74ceba35e1cde2b7bdbcadf2f6230fc51438c34f8317fdb01007bdebac3a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb74ceba35e1cde2b7bdbcadf2f6230fc51438c34f8317fdb01007bdebac3a62->enter($__internal_fb74ceba35e1cde2b7bdbcadf2f6230fc51438c34f8317fdb01007bdebac3a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e4fbbb711112df6b39caa20c8a25395ab857d80ac975bde7894ed0bb982e68cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fbbb711112df6b39caa20c8a25395ab857d80ac975bde7894ed0bb982e68cf->enter($__internal_e4fbbb711112df6b39caa20c8a25395ab857d80ac975bde7894ed0bb982e68cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fb74ceba35e1cde2b7bdbcadf2f6230fc51438c34f8317fdb01007bdebac3a62->leave($__internal_fb74ceba35e1cde2b7bdbcadf2f6230fc51438c34f8317fdb01007bdebac3a62_prof);

        
        $__internal_e4fbbb711112df6b39caa20c8a25395ab857d80ac975bde7894ed0bb982e68cf->leave($__internal_e4fbbb711112df6b39caa20c8a25395ab857d80ac975bde7894ed0bb982e68cf_prof);

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
