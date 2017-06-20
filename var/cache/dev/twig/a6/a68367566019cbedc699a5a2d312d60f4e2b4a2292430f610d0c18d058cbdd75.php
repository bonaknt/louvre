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
        $__internal_b6bd7e69b1c13f91a9b89615cbf253503a25c73d28014cb1e62dcd75c2a4f326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bd7e69b1c13f91a9b89615cbf253503a25c73d28014cb1e62dcd75c2a4f326->enter($__internal_b6bd7e69b1c13f91a9b89615cbf253503a25c73d28014cb1e62dcd75c2a4f326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fb1c6e0f69640a44055d381903229fe5878c341939808e04faffaf1521fbad5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1c6e0f69640a44055d381903229fe5878c341939808e04faffaf1521fbad5a->enter($__internal_fb1c6e0f69640a44055d381903229fe5878c341939808e04faffaf1521fbad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b6bd7e69b1c13f91a9b89615cbf253503a25c73d28014cb1e62dcd75c2a4f326->leave($__internal_b6bd7e69b1c13f91a9b89615cbf253503a25c73d28014cb1e62dcd75c2a4f326_prof);

        
        $__internal_fb1c6e0f69640a44055d381903229fe5878c341939808e04faffaf1521fbad5a->leave($__internal_fb1c6e0f69640a44055d381903229fe5878c341939808e04faffaf1521fbad5a_prof);

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
