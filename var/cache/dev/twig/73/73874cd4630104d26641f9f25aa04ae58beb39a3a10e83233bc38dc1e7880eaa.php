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
        $__internal_5ceb84c7719470a9b3384a9a5e3ebdbb5c05e7d61e7eb2b3036f3bdd975ba5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ceb84c7719470a9b3384a9a5e3ebdbb5c05e7d61e7eb2b3036f3bdd975ba5e4->enter($__internal_5ceb84c7719470a9b3384a9a5e3ebdbb5c05e7d61e7eb2b3036f3bdd975ba5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_478178430cc52941799bb92b849396593649e55f9103859a9864495a4b7449af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478178430cc52941799bb92b849396593649e55f9103859a9864495a4b7449af->enter($__internal_478178430cc52941799bb92b849396593649e55f9103859a9864495a4b7449af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5ceb84c7719470a9b3384a9a5e3ebdbb5c05e7d61e7eb2b3036f3bdd975ba5e4->leave($__internal_5ceb84c7719470a9b3384a9a5e3ebdbb5c05e7d61e7eb2b3036f3bdd975ba5e4_prof);

        
        $__internal_478178430cc52941799bb92b849396593649e55f9103859a9864495a4b7449af->leave($__internal_478178430cc52941799bb92b849396593649e55f9103859a9864495a4b7449af_prof);

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
