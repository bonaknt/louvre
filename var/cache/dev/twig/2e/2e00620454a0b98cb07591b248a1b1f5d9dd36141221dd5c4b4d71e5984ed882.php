<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e677874a0469b02cf4a09a08e797f41cede8d895a7098b108a74d9e5cafbfde6 extends Twig_Template
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
        $__internal_067ac2d6c3d7138b0d604734e311594b00453eb112d376dd337155886acc6ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067ac2d6c3d7138b0d604734e311594b00453eb112d376dd337155886acc6ee3->enter($__internal_067ac2d6c3d7138b0d604734e311594b00453eb112d376dd337155886acc6ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c7f372bf34d47e04a3b20fa08c71ef83aa1a3a40c44c75e377e391f2f0dc67e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f372bf34d47e04a3b20fa08c71ef83aa1a3a40c44c75e377e391f2f0dc67e1->enter($__internal_c7f372bf34d47e04a3b20fa08c71ef83aa1a3a40c44c75e377e391f2f0dc67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_067ac2d6c3d7138b0d604734e311594b00453eb112d376dd337155886acc6ee3->leave($__internal_067ac2d6c3d7138b0d604734e311594b00453eb112d376dd337155886acc6ee3_prof);

        
        $__internal_c7f372bf34d47e04a3b20fa08c71ef83aa1a3a40c44c75e377e391f2f0dc67e1->leave($__internal_c7f372bf34d47e04a3b20fa08c71ef83aa1a3a40c44c75e377e391f2f0dc67e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
