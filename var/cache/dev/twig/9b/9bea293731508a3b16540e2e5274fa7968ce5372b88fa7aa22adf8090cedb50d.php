<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_aa6da17a4a69e3dced4f3071126f29a9469bb904d91cb87173f376bb0e405ea8 extends Twig_Template
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
        $__internal_d77d28804b821296e3a9b7d872355796e85a634b103a4e4809b3b0b1dd52b094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77d28804b821296e3a9b7d872355796e85a634b103a4e4809b3b0b1dd52b094->enter($__internal_d77d28804b821296e3a9b7d872355796e85a634b103a4e4809b3b0b1dd52b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_71ce51637cf84d7febf3fa216729aa4b8f5db9e529fb5d94638ff971929c6506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ce51637cf84d7febf3fa216729aa4b8f5db9e529fb5d94638ff971929c6506->enter($__internal_71ce51637cf84d7febf3fa216729aa4b8f5db9e529fb5d94638ff971929c6506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d77d28804b821296e3a9b7d872355796e85a634b103a4e4809b3b0b1dd52b094->leave($__internal_d77d28804b821296e3a9b7d872355796e85a634b103a4e4809b3b0b1dd52b094_prof);

        
        $__internal_71ce51637cf84d7febf3fa216729aa4b8f5db9e529fb5d94638ff971929c6506->leave($__internal_71ce51637cf84d7febf3fa216729aa4b8f5db9e529fb5d94638ff971929c6506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
