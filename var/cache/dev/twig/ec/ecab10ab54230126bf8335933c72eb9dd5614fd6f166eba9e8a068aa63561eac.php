<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_78cd4730b628da7aed34bfceea7ddf25f1ed03234cdaefa0b7cfbc532768cf01 extends Twig_Template
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
        $__internal_12151a36d5ddca47dddb8bc7c2166103fbd659a83e83b6bedddb7f32e55dec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12151a36d5ddca47dddb8bc7c2166103fbd659a83e83b6bedddb7f32e55dec38->enter($__internal_12151a36d5ddca47dddb8bc7c2166103fbd659a83e83b6bedddb7f32e55dec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_884867a55d2aea2e5ea87d1a00dbeeaeda4bf6c3bd76f901a34c3eb0be39ae81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884867a55d2aea2e5ea87d1a00dbeeaeda4bf6c3bd76f901a34c3eb0be39ae81->enter($__internal_884867a55d2aea2e5ea87d1a00dbeeaeda4bf6c3bd76f901a34c3eb0be39ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_12151a36d5ddca47dddb8bc7c2166103fbd659a83e83b6bedddb7f32e55dec38->leave($__internal_12151a36d5ddca47dddb8bc7c2166103fbd659a83e83b6bedddb7f32e55dec38_prof);

        
        $__internal_884867a55d2aea2e5ea87d1a00dbeeaeda4bf6c3bd76f901a34c3eb0be39ae81->leave($__internal_884867a55d2aea2e5ea87d1a00dbeeaeda4bf6c3bd76f901a34c3eb0be39ae81_prof);

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
