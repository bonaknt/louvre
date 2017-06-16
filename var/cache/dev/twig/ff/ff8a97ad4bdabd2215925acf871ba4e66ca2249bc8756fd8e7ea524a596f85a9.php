<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9cfd7c2134de2fe321d8e1d19368a2bb28afc658601f00b5814a4d705e41a213 extends Twig_Template
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
        $__internal_743e47a6d8c559ece95c9dcea6f8b8042097193a5ae04a2cd959336db60b5036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743e47a6d8c559ece95c9dcea6f8b8042097193a5ae04a2cd959336db60b5036->enter($__internal_743e47a6d8c559ece95c9dcea6f8b8042097193a5ae04a2cd959336db60b5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_28e110a6ec5f82a1f460366a521bab363d114eec050dfb182791e4ff33ff8733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e110a6ec5f82a1f460366a521bab363d114eec050dfb182791e4ff33ff8733->enter($__internal_28e110a6ec5f82a1f460366a521bab363d114eec050dfb182791e4ff33ff8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_743e47a6d8c559ece95c9dcea6f8b8042097193a5ae04a2cd959336db60b5036->leave($__internal_743e47a6d8c559ece95c9dcea6f8b8042097193a5ae04a2cd959336db60b5036_prof);

        
        $__internal_28e110a6ec5f82a1f460366a521bab363d114eec050dfb182791e4ff33ff8733->leave($__internal_28e110a6ec5f82a1f460366a521bab363d114eec050dfb182791e4ff33ff8733_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
