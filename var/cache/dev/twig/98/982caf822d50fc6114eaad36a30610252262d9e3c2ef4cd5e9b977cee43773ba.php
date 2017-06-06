<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_923212f6404a9cfd0b0558295603682969779985ac302d02b3842016f9a4c642 extends Twig_Template
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
        $__internal_c0aa7d69da624f47d70c38d2b802b4d920b48de219382025ec5bcf552ab7306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0aa7d69da624f47d70c38d2b802b4d920b48de219382025ec5bcf552ab7306b->enter($__internal_c0aa7d69da624f47d70c38d2b802b4d920b48de219382025ec5bcf552ab7306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3626bf01cb46baee632a71225332cf4b1d7fb4aa7ab0dcd4f97d53a5e702ba0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3626bf01cb46baee632a71225332cf4b1d7fb4aa7ab0dcd4f97d53a5e702ba0f->enter($__internal_3626bf01cb46baee632a71225332cf4b1d7fb4aa7ab0dcd4f97d53a5e702ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c0aa7d69da624f47d70c38d2b802b4d920b48de219382025ec5bcf552ab7306b->leave($__internal_c0aa7d69da624f47d70c38d2b802b4d920b48de219382025ec5bcf552ab7306b_prof);

        
        $__internal_3626bf01cb46baee632a71225332cf4b1d7fb4aa7ab0dcd4f97d53a5e702ba0f->leave($__internal_3626bf01cb46baee632a71225332cf4b1d7fb4aa7ab0dcd4f97d53a5e702ba0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
