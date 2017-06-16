<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_24b03afad9b0c60e7a5742a1c4cb62359fff081fa37fe709b051050382e1c2da extends Twig_Template
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
        $__internal_4a103a77a7e4b8acd19d93c6a36644c7274a890556e3683ad0bbd4d4d15c2bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a103a77a7e4b8acd19d93c6a36644c7274a890556e3683ad0bbd4d4d15c2bb7->enter($__internal_4a103a77a7e4b8acd19d93c6a36644c7274a890556e3683ad0bbd4d4d15c2bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_36b2f477350e13076b2d68f02c6e6c726b73d5ace7ddf277128aeecd7d96a36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b2f477350e13076b2d68f02c6e6c726b73d5ace7ddf277128aeecd7d96a36a->enter($__internal_36b2f477350e13076b2d68f02c6e6c726b73d5ace7ddf277128aeecd7d96a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4a103a77a7e4b8acd19d93c6a36644c7274a890556e3683ad0bbd4d4d15c2bb7->leave($__internal_4a103a77a7e4b8acd19d93c6a36644c7274a890556e3683ad0bbd4d4d15c2bb7_prof);

        
        $__internal_36b2f477350e13076b2d68f02c6e6c726b73d5ace7ddf277128aeecd7d96a36a->leave($__internal_36b2f477350e13076b2d68f02c6e6c726b73d5ace7ddf277128aeecd7d96a36a_prof);

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
