<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_47d4e9fe9e31504d7f595d09ec57a380aa11ede2b6a3e0a64cdda7b350a02a29 extends Twig_Template
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
        $__internal_f15cd1f633252109b91ffcd3e183ca37768aa7261aed4b5328126c27ed3f5f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15cd1f633252109b91ffcd3e183ca37768aa7261aed4b5328126c27ed3f5f9c->enter($__internal_f15cd1f633252109b91ffcd3e183ca37768aa7261aed4b5328126c27ed3f5f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d2c9705b3ce88c9cb23c324a9ad6519ad8a33a6adf85af01edc58e0114d3c114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c9705b3ce88c9cb23c324a9ad6519ad8a33a6adf85af01edc58e0114d3c114->enter($__internal_d2c9705b3ce88c9cb23c324a9ad6519ad8a33a6adf85af01edc58e0114d3c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f15cd1f633252109b91ffcd3e183ca37768aa7261aed4b5328126c27ed3f5f9c->leave($__internal_f15cd1f633252109b91ffcd3e183ca37768aa7261aed4b5328126c27ed3f5f9c_prof);

        
        $__internal_d2c9705b3ce88c9cb23c324a9ad6519ad8a33a6adf85af01edc58e0114d3c114->leave($__internal_d2c9705b3ce88c9cb23c324a9ad6519ad8a33a6adf85af01edc58e0114d3c114_prof);

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
