<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5ddb63c6356a3d0795416e717155c05f609fab2f6367a1c350d2bfdd7ca26d98 extends Twig_Template
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
        $__internal_d84c61e111c922f1b16fca319d1efabfa816d8ed092776f1357f8a8be088e089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84c61e111c922f1b16fca319d1efabfa816d8ed092776f1357f8a8be088e089->enter($__internal_d84c61e111c922f1b16fca319d1efabfa816d8ed092776f1357f8a8be088e089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fc318aa7a7d85655d53fc7a4cb4a6422f9246f071afd32db859bb4fe34e42d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc318aa7a7d85655d53fc7a4cb4a6422f9246f071afd32db859bb4fe34e42d77->enter($__internal_fc318aa7a7d85655d53fc7a4cb4a6422f9246f071afd32db859bb4fe34e42d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d84c61e111c922f1b16fca319d1efabfa816d8ed092776f1357f8a8be088e089->leave($__internal_d84c61e111c922f1b16fca319d1efabfa816d8ed092776f1357f8a8be088e089_prof);

        
        $__internal_fc318aa7a7d85655d53fc7a4cb4a6422f9246f071afd32db859bb4fe34e42d77->leave($__internal_fc318aa7a7d85655d53fc7a4cb4a6422f9246f071afd32db859bb4fe34e42d77_prof);

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
