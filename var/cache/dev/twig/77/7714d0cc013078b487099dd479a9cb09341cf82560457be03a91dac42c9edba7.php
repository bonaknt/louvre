<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_91cd3b4ba3857eed529c4af2c966bc9b24432d1f46c443d90b030406e8c6b856 extends Twig_Template
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
        $__internal_625eb2d5f55b565836854f0eb80c051639dc2dd954e8c7842fefd7acf6774201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625eb2d5f55b565836854f0eb80c051639dc2dd954e8c7842fefd7acf6774201->enter($__internal_625eb2d5f55b565836854f0eb80c051639dc2dd954e8c7842fefd7acf6774201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3edc8ef0686ffcfbd0ed04d11519923dcbd338c3716d1861df5a068676532678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edc8ef0686ffcfbd0ed04d11519923dcbd338c3716d1861df5a068676532678->enter($__internal_3edc8ef0686ffcfbd0ed04d11519923dcbd338c3716d1861df5a068676532678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_625eb2d5f55b565836854f0eb80c051639dc2dd954e8c7842fefd7acf6774201->leave($__internal_625eb2d5f55b565836854f0eb80c051639dc2dd954e8c7842fefd7acf6774201_prof);

        
        $__internal_3edc8ef0686ffcfbd0ed04d11519923dcbd338c3716d1861df5a068676532678->leave($__internal_3edc8ef0686ffcfbd0ed04d11519923dcbd338c3716d1861df5a068676532678_prof);

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
