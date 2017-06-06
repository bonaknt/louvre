<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b1ceaacada43adb7aca7eecfaa069ecd1b706954fc9423a75f8024a0da11e455 extends Twig_Template
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
        $__internal_9ffb8de2bbdea796dab89946b9db217e7c9afcc6f9b520080e3b3cf4d8cffa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffb8de2bbdea796dab89946b9db217e7c9afcc6f9b520080e3b3cf4d8cffa22->enter($__internal_9ffb8de2bbdea796dab89946b9db217e7c9afcc6f9b520080e3b3cf4d8cffa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_25fa07d5620884894deb78e40d42cfeafd6f2b07ea561323a851559873b59656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fa07d5620884894deb78e40d42cfeafd6f2b07ea561323a851559873b59656->enter($__internal_25fa07d5620884894deb78e40d42cfeafd6f2b07ea561323a851559873b59656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9ffb8de2bbdea796dab89946b9db217e7c9afcc6f9b520080e3b3cf4d8cffa22->leave($__internal_9ffb8de2bbdea796dab89946b9db217e7c9afcc6f9b520080e3b3cf4d8cffa22_prof);

        
        $__internal_25fa07d5620884894deb78e40d42cfeafd6f2b07ea561323a851559873b59656->leave($__internal_25fa07d5620884894deb78e40d42cfeafd6f2b07ea561323a851559873b59656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
