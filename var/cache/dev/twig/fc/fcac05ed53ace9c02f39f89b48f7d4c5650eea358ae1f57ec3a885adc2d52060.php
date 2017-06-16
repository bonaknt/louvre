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
        $__internal_42bb68b8e7466e697d438cec4674a4204ac3ee4e740114d2ba680cb8bf5b456f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bb68b8e7466e697d438cec4674a4204ac3ee4e740114d2ba680cb8bf5b456f->enter($__internal_42bb68b8e7466e697d438cec4674a4204ac3ee4e740114d2ba680cb8bf5b456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dd7393cfa037860f96ae7d850b017012d7f93a2394d0fe0bdcb0a3fc48fc9211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7393cfa037860f96ae7d850b017012d7f93a2394d0fe0bdcb0a3fc48fc9211->enter($__internal_dd7393cfa037860f96ae7d850b017012d7f93a2394d0fe0bdcb0a3fc48fc9211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_42bb68b8e7466e697d438cec4674a4204ac3ee4e740114d2ba680cb8bf5b456f->leave($__internal_42bb68b8e7466e697d438cec4674a4204ac3ee4e740114d2ba680cb8bf5b456f_prof);

        
        $__internal_dd7393cfa037860f96ae7d850b017012d7f93a2394d0fe0bdcb0a3fc48fc9211->leave($__internal_dd7393cfa037860f96ae7d850b017012d7f93a2394d0fe0bdcb0a3fc48fc9211_prof);

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
