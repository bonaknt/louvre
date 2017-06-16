<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4e206225dc04ee529647f85933acb2edd36ffddc080e83494bcbb1d6c247ad97 extends Twig_Template
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
        $__internal_f0ea13a838a9f5be083c971a535ec55390036ed0d4821e0b649d00b0d1384e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ea13a838a9f5be083c971a535ec55390036ed0d4821e0b649d00b0d1384e09->enter($__internal_f0ea13a838a9f5be083c971a535ec55390036ed0d4821e0b649d00b0d1384e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2a6fb6a2ad160a259bdccfd466caabcff420161920390a5c399b1ae5564548fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6fb6a2ad160a259bdccfd466caabcff420161920390a5c399b1ae5564548fd->enter($__internal_2a6fb6a2ad160a259bdccfd466caabcff420161920390a5c399b1ae5564548fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f0ea13a838a9f5be083c971a535ec55390036ed0d4821e0b649d00b0d1384e09->leave($__internal_f0ea13a838a9f5be083c971a535ec55390036ed0d4821e0b649d00b0d1384e09_prof);

        
        $__internal_2a6fb6a2ad160a259bdccfd466caabcff420161920390a5c399b1ae5564548fd->leave($__internal_2a6fb6a2ad160a259bdccfd466caabcff420161920390a5c399b1ae5564548fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
