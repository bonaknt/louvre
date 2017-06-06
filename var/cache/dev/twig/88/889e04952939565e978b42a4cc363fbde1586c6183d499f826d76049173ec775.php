<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0ae23abd49f9c60de7f820ae1ecc72214b731bc4feb9ef7340450b2b2033136 extends Twig_Template
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
        $__internal_be1c3b3f56c6e3cbb85c7fde0ef5a5b359b931ffbe77a485e33c4f103dead597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1c3b3f56c6e3cbb85c7fde0ef5a5b359b931ffbe77a485e33c4f103dead597->enter($__internal_be1c3b3f56c6e3cbb85c7fde0ef5a5b359b931ffbe77a485e33c4f103dead597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c8820e53f7a81789304ca4d5437af9455a0348f5ad0d7529010ca15e5c3fe006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8820e53f7a81789304ca4d5437af9455a0348f5ad0d7529010ca15e5c3fe006->enter($__internal_c8820e53f7a81789304ca4d5437af9455a0348f5ad0d7529010ca15e5c3fe006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_be1c3b3f56c6e3cbb85c7fde0ef5a5b359b931ffbe77a485e33c4f103dead597->leave($__internal_be1c3b3f56c6e3cbb85c7fde0ef5a5b359b931ffbe77a485e33c4f103dead597_prof);

        
        $__internal_c8820e53f7a81789304ca4d5437af9455a0348f5ad0d7529010ca15e5c3fe006->leave($__internal_c8820e53f7a81789304ca4d5437af9455a0348f5ad0d7529010ca15e5c3fe006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
