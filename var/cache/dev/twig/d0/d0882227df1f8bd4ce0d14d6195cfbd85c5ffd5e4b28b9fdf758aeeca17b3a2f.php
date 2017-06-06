<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0777722e2033d767e7110f3fceb5d3d9ada997afa58d87df59b9c17c9dd55c18 extends Twig_Template
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
        $__internal_0ad54576ca5c90f7b8c5bf27f7612ca8f74ce258e36bc2a7ad8f3adb93825e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad54576ca5c90f7b8c5bf27f7612ca8f74ce258e36bc2a7ad8f3adb93825e23->enter($__internal_0ad54576ca5c90f7b8c5bf27f7612ca8f74ce258e36bc2a7ad8f3adb93825e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cd834181e9bf9f8c0bbac42212d5fc92f81fed60af87b76a1fef1228c6434ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd834181e9bf9f8c0bbac42212d5fc92f81fed60af87b76a1fef1228c6434ded->enter($__internal_cd834181e9bf9f8c0bbac42212d5fc92f81fed60af87b76a1fef1228c6434ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0ad54576ca5c90f7b8c5bf27f7612ca8f74ce258e36bc2a7ad8f3adb93825e23->leave($__internal_0ad54576ca5c90f7b8c5bf27f7612ca8f74ce258e36bc2a7ad8f3adb93825e23_prof);

        
        $__internal_cd834181e9bf9f8c0bbac42212d5fc92f81fed60af87b76a1fef1228c6434ded->leave($__internal_cd834181e9bf9f8c0bbac42212d5fc92f81fed60af87b76a1fef1228c6434ded_prof);

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
