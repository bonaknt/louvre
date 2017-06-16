<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b51fa7e68f50d1551f02b90d133d32e9a49b829db704cbfe7dd004fc515ea61a extends Twig_Template
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
        $__internal_2db5f2da97e92b1b66fe95c68279cf6004c010e3a5f4e2bffbabd06d904815ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db5f2da97e92b1b66fe95c68279cf6004c010e3a5f4e2bffbabd06d904815ed->enter($__internal_2db5f2da97e92b1b66fe95c68279cf6004c010e3a5f4e2bffbabd06d904815ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4662db473e67b124f95f48536aa1a3697d9f044914ea06fc481ae04b1ff68294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4662db473e67b124f95f48536aa1a3697d9f044914ea06fc481ae04b1ff68294->enter($__internal_4662db473e67b124f95f48536aa1a3697d9f044914ea06fc481ae04b1ff68294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2db5f2da97e92b1b66fe95c68279cf6004c010e3a5f4e2bffbabd06d904815ed->leave($__internal_2db5f2da97e92b1b66fe95c68279cf6004c010e3a5f4e2bffbabd06d904815ed_prof);

        
        $__internal_4662db473e67b124f95f48536aa1a3697d9f044914ea06fc481ae04b1ff68294->leave($__internal_4662db473e67b124f95f48536aa1a3697d9f044914ea06fc481ae04b1ff68294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
