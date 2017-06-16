<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a58ad48a277d68916ab43afb23a5a23557e8933c609ff8da1d63e87c58fb6e6e extends Twig_Template
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
        $__internal_604590cb33e4a2a4688f031697e8458b3779d9ad7c9074d77a19367561f01d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604590cb33e4a2a4688f031697e8458b3779d9ad7c9074d77a19367561f01d47->enter($__internal_604590cb33e4a2a4688f031697e8458b3779d9ad7c9074d77a19367561f01d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_85c7622be6e44c8e580372a5c80c241d9aec85fd8e8fb53f1f31ce705c08c156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c7622be6e44c8e580372a5c80c241d9aec85fd8e8fb53f1f31ce705c08c156->enter($__internal_85c7622be6e44c8e580372a5c80c241d9aec85fd8e8fb53f1f31ce705c08c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_604590cb33e4a2a4688f031697e8458b3779d9ad7c9074d77a19367561f01d47->leave($__internal_604590cb33e4a2a4688f031697e8458b3779d9ad7c9074d77a19367561f01d47_prof);

        
        $__internal_85c7622be6e44c8e580372a5c80c241d9aec85fd8e8fb53f1f31ce705c08c156->leave($__internal_85c7622be6e44c8e580372a5c80c241d9aec85fd8e8fb53f1f31ce705c08c156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
