<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e4521424b00d8e37746701f2a4d998c39d373abc54faf0a6af764b278ed77228 extends Twig_Template
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
        $__internal_cbe7692bd2edbf8251140fa00b027693d4af5b19b9418224040c50cf88d30bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe7692bd2edbf8251140fa00b027693d4af5b19b9418224040c50cf88d30bc5->enter($__internal_cbe7692bd2edbf8251140fa00b027693d4af5b19b9418224040c50cf88d30bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_74d04e32fb4273ea2efa39a6d0bd13a56b0912a7d3c6ec5db6f1c6afaafe9344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d04e32fb4273ea2efa39a6d0bd13a56b0912a7d3c6ec5db6f1c6afaafe9344->enter($__internal_74d04e32fb4273ea2efa39a6d0bd13a56b0912a7d3c6ec5db6f1c6afaafe9344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cbe7692bd2edbf8251140fa00b027693d4af5b19b9418224040c50cf88d30bc5->leave($__internal_cbe7692bd2edbf8251140fa00b027693d4af5b19b9418224040c50cf88d30bc5_prof);

        
        $__internal_74d04e32fb4273ea2efa39a6d0bd13a56b0912a7d3c6ec5db6f1c6afaafe9344->leave($__internal_74d04e32fb4273ea2efa39a6d0bd13a56b0912a7d3c6ec5db6f1c6afaafe9344_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
