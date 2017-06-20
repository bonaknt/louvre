<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_aa6da17a4a69e3dced4f3071126f29a9469bb904d91cb87173f376bb0e405ea8 extends Twig_Template
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
        $__internal_6da68233dfe9d44ac89868970913b1b7fb4eab6af40cc62fb996ff2d27d6c93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da68233dfe9d44ac89868970913b1b7fb4eab6af40cc62fb996ff2d27d6c93f->enter($__internal_6da68233dfe9d44ac89868970913b1b7fb4eab6af40cc62fb996ff2d27d6c93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_348c43c9f580a8fb85d469ff55a4ee266e68773f1e389ec649f863fdc13252a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348c43c9f580a8fb85d469ff55a4ee266e68773f1e389ec649f863fdc13252a1->enter($__internal_348c43c9f580a8fb85d469ff55a4ee266e68773f1e389ec649f863fdc13252a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6da68233dfe9d44ac89868970913b1b7fb4eab6af40cc62fb996ff2d27d6c93f->leave($__internal_6da68233dfe9d44ac89868970913b1b7fb4eab6af40cc62fb996ff2d27d6c93f_prof);

        
        $__internal_348c43c9f580a8fb85d469ff55a4ee266e68773f1e389ec649f863fdc13252a1->leave($__internal_348c43c9f580a8fb85d469ff55a4ee266e68773f1e389ec649f863fdc13252a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
