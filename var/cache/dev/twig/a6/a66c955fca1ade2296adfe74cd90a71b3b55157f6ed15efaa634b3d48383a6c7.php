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
        $__internal_de052b489708c8ebbeb0ce247394245e50775d378fd988bd333d9e997cbc66fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de052b489708c8ebbeb0ce247394245e50775d378fd988bd333d9e997cbc66fa->enter($__internal_de052b489708c8ebbeb0ce247394245e50775d378fd988bd333d9e997cbc66fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_806d05f12ba3aadae3b4301d68597a6c4637ac94d23ec3b884c9c7c5bf86a8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806d05f12ba3aadae3b4301d68597a6c4637ac94d23ec3b884c9c7c5bf86a8e7->enter($__internal_806d05f12ba3aadae3b4301d68597a6c4637ac94d23ec3b884c9c7c5bf86a8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_de052b489708c8ebbeb0ce247394245e50775d378fd988bd333d9e997cbc66fa->leave($__internal_de052b489708c8ebbeb0ce247394245e50775d378fd988bd333d9e997cbc66fa_prof);

        
        $__internal_806d05f12ba3aadae3b4301d68597a6c4637ac94d23ec3b884c9c7c5bf86a8e7->leave($__internal_806d05f12ba3aadae3b4301d68597a6c4637ac94d23ec3b884c9c7c5bf86a8e7_prof);

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
