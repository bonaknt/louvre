<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1d99f9b70be9458ba91ce4aabb72d18f06f64a01767f1d2fdaf8d3d1cec43614 extends Twig_Template
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
        $__internal_91e19230cb756a07b7f36f91be98f1e85a39f6943430ba361b69d2ab634b4b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e19230cb756a07b7f36f91be98f1e85a39f6943430ba361b69d2ab634b4b9f->enter($__internal_91e19230cb756a07b7f36f91be98f1e85a39f6943430ba361b69d2ab634b4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c9885e045e117f31192cccafed92dc481cefde9ba311667d382a87600417e290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9885e045e117f31192cccafed92dc481cefde9ba311667d382a87600417e290->enter($__internal_c9885e045e117f31192cccafed92dc481cefde9ba311667d382a87600417e290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_91e19230cb756a07b7f36f91be98f1e85a39f6943430ba361b69d2ab634b4b9f->leave($__internal_91e19230cb756a07b7f36f91be98f1e85a39f6943430ba361b69d2ab634b4b9f_prof);

        
        $__internal_c9885e045e117f31192cccafed92dc481cefde9ba311667d382a87600417e290->leave($__internal_c9885e045e117f31192cccafed92dc481cefde9ba311667d382a87600417e290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
