<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_13314174088f04f096ec95f98664711f9b761d9d2c9b2df0a4cd40ce4c026939 extends Twig_Template
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
        $__internal_98e31e2e56b3961ab408de100d19affb6aaa5dbf2c4a90b7b16d83b093d05137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e31e2e56b3961ab408de100d19affb6aaa5dbf2c4a90b7b16d83b093d05137->enter($__internal_98e31e2e56b3961ab408de100d19affb6aaa5dbf2c4a90b7b16d83b093d05137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_879c2a0abe505c2158061b0cc95f85a3caa758fb169fea53d8224f1f9509859b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879c2a0abe505c2158061b0cc95f85a3caa758fb169fea53d8224f1f9509859b->enter($__internal_879c2a0abe505c2158061b0cc95f85a3caa758fb169fea53d8224f1f9509859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_98e31e2e56b3961ab408de100d19affb6aaa5dbf2c4a90b7b16d83b093d05137->leave($__internal_98e31e2e56b3961ab408de100d19affb6aaa5dbf2c4a90b7b16d83b093d05137_prof);

        
        $__internal_879c2a0abe505c2158061b0cc95f85a3caa758fb169fea53d8224f1f9509859b->leave($__internal_879c2a0abe505c2158061b0cc95f85a3caa758fb169fea53d8224f1f9509859b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
