<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12921db18b170f8451b3de1eb5c05a782ba2f4753b791ef3b434da22d6f1a689 extends Twig_Template
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
        $__internal_45ab57227eecdb80e0a7b165de9ff59319c718cfcaf9b94cf2f44ae08b0f837e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ab57227eecdb80e0a7b165de9ff59319c718cfcaf9b94cf2f44ae08b0f837e->enter($__internal_45ab57227eecdb80e0a7b165de9ff59319c718cfcaf9b94cf2f44ae08b0f837e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_22385dbe8031ebeda782f502ecf19703d6c3df132742c77a4649d2c58c32f2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22385dbe8031ebeda782f502ecf19703d6c3df132742c77a4649d2c58c32f2e2->enter($__internal_22385dbe8031ebeda782f502ecf19703d6c3df132742c77a4649d2c58c32f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_45ab57227eecdb80e0a7b165de9ff59319c718cfcaf9b94cf2f44ae08b0f837e->leave($__internal_45ab57227eecdb80e0a7b165de9ff59319c718cfcaf9b94cf2f44ae08b0f837e_prof);

        
        $__internal_22385dbe8031ebeda782f502ecf19703d6c3df132742c77a4649d2c58c32f2e2->leave($__internal_22385dbe8031ebeda782f502ecf19703d6c3df132742c77a4649d2c58c32f2e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
