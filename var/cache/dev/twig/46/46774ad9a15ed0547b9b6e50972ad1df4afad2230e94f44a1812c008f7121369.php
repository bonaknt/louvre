<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b4ef0e07f9ec8ab69c75c71703d163c2fbebf7609a73488fe116ce644847f117 extends Twig_Template
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
        $__internal_f5b04a198a3af16fdb64dd42ec123aaedcad8165d74a2e19b55041bc1e25a74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b04a198a3af16fdb64dd42ec123aaedcad8165d74a2e19b55041bc1e25a74b->enter($__internal_f5b04a198a3af16fdb64dd42ec123aaedcad8165d74a2e19b55041bc1e25a74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ee10ba3597fdcc7ceb23214aae9eb7bfd50dcb0a7844746c5527d54833fa9a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee10ba3597fdcc7ceb23214aae9eb7bfd50dcb0a7844746c5527d54833fa9a57->enter($__internal_ee10ba3597fdcc7ceb23214aae9eb7bfd50dcb0a7844746c5527d54833fa9a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f5b04a198a3af16fdb64dd42ec123aaedcad8165d74a2e19b55041bc1e25a74b->leave($__internal_f5b04a198a3af16fdb64dd42ec123aaedcad8165d74a2e19b55041bc1e25a74b_prof);

        
        $__internal_ee10ba3597fdcc7ceb23214aae9eb7bfd50dcb0a7844746c5527d54833fa9a57->leave($__internal_ee10ba3597fdcc7ceb23214aae9eb7bfd50dcb0a7844746c5527d54833fa9a57_prof);

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
