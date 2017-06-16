<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_81e05f7489ccf2a2c2d9297cbcdca35305bd46cf72197f7aa3dd6963f569419e extends Twig_Template
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
        $__internal_602b2bd0de31b8c163d492220a3a10b8cf67a0bb1f922956974e90fa1a501e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602b2bd0de31b8c163d492220a3a10b8cf67a0bb1f922956974e90fa1a501e52->enter($__internal_602b2bd0de31b8c163d492220a3a10b8cf67a0bb1f922956974e90fa1a501e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_34135c5e0b7374cd97f6792a85899b76a3a0fe2d7cb88fa46d163c28f0917808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34135c5e0b7374cd97f6792a85899b76a3a0fe2d7cb88fa46d163c28f0917808->enter($__internal_34135c5e0b7374cd97f6792a85899b76a3a0fe2d7cb88fa46d163c28f0917808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_602b2bd0de31b8c163d492220a3a10b8cf67a0bb1f922956974e90fa1a501e52->leave($__internal_602b2bd0de31b8c163d492220a3a10b8cf67a0bb1f922956974e90fa1a501e52_prof);

        
        $__internal_34135c5e0b7374cd97f6792a85899b76a3a0fe2d7cb88fa46d163c28f0917808->leave($__internal_34135c5e0b7374cd97f6792a85899b76a3a0fe2d7cb88fa46d163c28f0917808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
