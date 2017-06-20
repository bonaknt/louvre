<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_36a487a36e80b3ae8867dff30f38158b890e929ada71c21ba0ab09a451076e4d extends Twig_Template
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
        $__internal_012a00fb2786e6504d5f0fb773be4c7f749c085d44818fb94731cd3b1cb16bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012a00fb2786e6504d5f0fb773be4c7f749c085d44818fb94731cd3b1cb16bf8->enter($__internal_012a00fb2786e6504d5f0fb773be4c7f749c085d44818fb94731cd3b1cb16bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2c044bcaab131abc3424c99b2c8770753755bbe668249d27920be01344bb2922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c044bcaab131abc3424c99b2c8770753755bbe668249d27920be01344bb2922->enter($__internal_2c044bcaab131abc3424c99b2c8770753755bbe668249d27920be01344bb2922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_012a00fb2786e6504d5f0fb773be4c7f749c085d44818fb94731cd3b1cb16bf8->leave($__internal_012a00fb2786e6504d5f0fb773be4c7f749c085d44818fb94731cd3b1cb16bf8_prof);

        
        $__internal_2c044bcaab131abc3424c99b2c8770753755bbe668249d27920be01344bb2922->leave($__internal_2c044bcaab131abc3424c99b2c8770753755bbe668249d27920be01344bb2922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
