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
        $__internal_31421ec91a2972f806bdd20a86411f83206ff662d1170cf9e65b88345abf899b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31421ec91a2972f806bdd20a86411f83206ff662d1170cf9e65b88345abf899b->enter($__internal_31421ec91a2972f806bdd20a86411f83206ff662d1170cf9e65b88345abf899b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d0da176a9c03af8bc8a730b1593a3336bdf07e94433fc914ec950f0ba622ecec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0da176a9c03af8bc8a730b1593a3336bdf07e94433fc914ec950f0ba622ecec->enter($__internal_d0da176a9c03af8bc8a730b1593a3336bdf07e94433fc914ec950f0ba622ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_31421ec91a2972f806bdd20a86411f83206ff662d1170cf9e65b88345abf899b->leave($__internal_31421ec91a2972f806bdd20a86411f83206ff662d1170cf9e65b88345abf899b_prof);

        
        $__internal_d0da176a9c03af8bc8a730b1593a3336bdf07e94433fc914ec950f0ba622ecec->leave($__internal_d0da176a9c03af8bc8a730b1593a3336bdf07e94433fc914ec950f0ba622ecec_prof);

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
