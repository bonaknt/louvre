<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_909920452a4d5a2b1d6c2dd8e2772510fc980639890cedf351a5059878330780 extends Twig_Template
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
        $__internal_9f35fde94fbc751fe8b5c7a0b048fc1d6efba0ab5e426fccf3d54f501c5f44e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f35fde94fbc751fe8b5c7a0b048fc1d6efba0ab5e426fccf3d54f501c5f44e6->enter($__internal_9f35fde94fbc751fe8b5c7a0b048fc1d6efba0ab5e426fccf3d54f501c5f44e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d169ab7e52e52a014e7aaa75395418ca8cf1b43c95e3659a4eee35a35a38b280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d169ab7e52e52a014e7aaa75395418ca8cf1b43c95e3659a4eee35a35a38b280->enter($__internal_d169ab7e52e52a014e7aaa75395418ca8cf1b43c95e3659a4eee35a35a38b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9f35fde94fbc751fe8b5c7a0b048fc1d6efba0ab5e426fccf3d54f501c5f44e6->leave($__internal_9f35fde94fbc751fe8b5c7a0b048fc1d6efba0ab5e426fccf3d54f501c5f44e6_prof);

        
        $__internal_d169ab7e52e52a014e7aaa75395418ca8cf1b43c95e3659a4eee35a35a38b280->leave($__internal_d169ab7e52e52a014e7aaa75395418ca8cf1b43c95e3659a4eee35a35a38b280_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
