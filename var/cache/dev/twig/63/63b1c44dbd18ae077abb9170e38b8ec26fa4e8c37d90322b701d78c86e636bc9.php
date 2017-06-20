<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_532def047d105031e460be81bdca89f00bc571424e14997996387166c89f8847 extends Twig_Template
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
        $__internal_569271e97f9b734f243d487d815fa52310e69417fb37e66929e2795e65692d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569271e97f9b734f243d487d815fa52310e69417fb37e66929e2795e65692d9a->enter($__internal_569271e97f9b734f243d487d815fa52310e69417fb37e66929e2795e65692d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d242f2a3f94998169f96631f0c808af39842361077f754d38ea5b0245ff2c1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d242f2a3f94998169f96631f0c808af39842361077f754d38ea5b0245ff2c1c1->enter($__internal_d242f2a3f94998169f96631f0c808af39842361077f754d38ea5b0245ff2c1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_569271e97f9b734f243d487d815fa52310e69417fb37e66929e2795e65692d9a->leave($__internal_569271e97f9b734f243d487d815fa52310e69417fb37e66929e2795e65692d9a_prof);

        
        $__internal_d242f2a3f94998169f96631f0c808af39842361077f754d38ea5b0245ff2c1c1->leave($__internal_d242f2a3f94998169f96631f0c808af39842361077f754d38ea5b0245ff2c1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
