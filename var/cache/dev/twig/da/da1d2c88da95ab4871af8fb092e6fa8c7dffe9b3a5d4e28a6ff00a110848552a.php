<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fcd1b8a17a83fd7890dd5330bed79a278aa45eea06b7f18d5660426f5d0e3b71 extends Twig_Template
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
        $__internal_9d5c9f3ded90991ea047208ff545c9c57806dc4a7c2657625cef7f30762d4ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5c9f3ded90991ea047208ff545c9c57806dc4a7c2657625cef7f30762d4ce3->enter($__internal_9d5c9f3ded90991ea047208ff545c9c57806dc4a7c2657625cef7f30762d4ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e21b93f91f0a032e2f00bc94e6b987cbfcfe7a4870c7ca8295148c470bde10a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21b93f91f0a032e2f00bc94e6b987cbfcfe7a4870c7ca8295148c470bde10a9->enter($__internal_e21b93f91f0a032e2f00bc94e6b987cbfcfe7a4870c7ca8295148c470bde10a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9d5c9f3ded90991ea047208ff545c9c57806dc4a7c2657625cef7f30762d4ce3->leave($__internal_9d5c9f3ded90991ea047208ff545c9c57806dc4a7c2657625cef7f30762d4ce3_prof);

        
        $__internal_e21b93f91f0a032e2f00bc94e6b987cbfcfe7a4870c7ca8295148c470bde10a9->leave($__internal_e21b93f91f0a032e2f00bc94e6b987cbfcfe7a4870c7ca8295148c470bde10a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
