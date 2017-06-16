<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2dc44a4ad3856d1f833d037fec0b82d7fa6e0a639410952fc75fc708bd875f43 extends Twig_Template
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
        $__internal_4e9cc59f74b23cc49c8610b8fd1d7bd635d3e6d6b8df68d49120e88b88254763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9cc59f74b23cc49c8610b8fd1d7bd635d3e6d6b8df68d49120e88b88254763->enter($__internal_4e9cc59f74b23cc49c8610b8fd1d7bd635d3e6d6b8df68d49120e88b88254763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7290d52af0c11119161e698fb06c632cc8bea36f734bdab09f493b25b22caa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7290d52af0c11119161e698fb06c632cc8bea36f734bdab09f493b25b22caa0a->enter($__internal_7290d52af0c11119161e698fb06c632cc8bea36f734bdab09f493b25b22caa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4e9cc59f74b23cc49c8610b8fd1d7bd635d3e6d6b8df68d49120e88b88254763->leave($__internal_4e9cc59f74b23cc49c8610b8fd1d7bd635d3e6d6b8df68d49120e88b88254763_prof);

        
        $__internal_7290d52af0c11119161e698fb06c632cc8bea36f734bdab09f493b25b22caa0a->leave($__internal_7290d52af0c11119161e698fb06c632cc8bea36f734bdab09f493b25b22caa0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
