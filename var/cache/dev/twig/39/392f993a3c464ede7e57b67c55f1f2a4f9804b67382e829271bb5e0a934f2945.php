<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a58ad48a277d68916ab43afb23a5a23557e8933c609ff8da1d63e87c58fb6e6e extends Twig_Template
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
        $__internal_35f352f50f825cf0b472cdad2123d88163d4c028f13439f00277afd847995485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f352f50f825cf0b472cdad2123d88163d4c028f13439f00277afd847995485->enter($__internal_35f352f50f825cf0b472cdad2123d88163d4c028f13439f00277afd847995485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7eebb607951c14c14337a8ba0877b6914da25d76c4338409286cb45c161882de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eebb607951c14c14337a8ba0877b6914da25d76c4338409286cb45c161882de->enter($__internal_7eebb607951c14c14337a8ba0877b6914da25d76c4338409286cb45c161882de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_35f352f50f825cf0b472cdad2123d88163d4c028f13439f00277afd847995485->leave($__internal_35f352f50f825cf0b472cdad2123d88163d4c028f13439f00277afd847995485_prof);

        
        $__internal_7eebb607951c14c14337a8ba0877b6914da25d76c4338409286cb45c161882de->leave($__internal_7eebb607951c14c14337a8ba0877b6914da25d76c4338409286cb45c161882de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
