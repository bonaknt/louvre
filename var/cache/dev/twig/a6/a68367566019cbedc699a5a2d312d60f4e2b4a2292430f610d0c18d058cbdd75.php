<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bcf08ec81209ec3e61b760798fd14184f10fdbe4f278af2e8159abe07c424605 extends Twig_Template
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
        $__internal_40cd814d4abf8d54c7c14a5c434c547d06ffd820df8ee850a5b31fab0b268f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cd814d4abf8d54c7c14a5c434c547d06ffd820df8ee850a5b31fab0b268f02->enter($__internal_40cd814d4abf8d54c7c14a5c434c547d06ffd820df8ee850a5b31fab0b268f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dd9813d2ee166efb58ac167c7a2568f28bf588c78fe0b6931c737339cbee8cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9813d2ee166efb58ac167c7a2568f28bf588c78fe0b6931c737339cbee8cc1->enter($__internal_dd9813d2ee166efb58ac167c7a2568f28bf588c78fe0b6931c737339cbee8cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_40cd814d4abf8d54c7c14a5c434c547d06ffd820df8ee850a5b31fab0b268f02->leave($__internal_40cd814d4abf8d54c7c14a5c434c547d06ffd820df8ee850a5b31fab0b268f02_prof);

        
        $__internal_dd9813d2ee166efb58ac167c7a2568f28bf588c78fe0b6931c737339cbee8cc1->leave($__internal_dd9813d2ee166efb58ac167c7a2568f28bf588c78fe0b6931c737339cbee8cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
