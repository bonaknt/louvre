<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3ed2e377c247a2af58abe5f3cde08763d389a741b1db2b9b6155632a975a5196 extends Twig_Template
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
        $__internal_424096e00cdac8ba68b368ca60fbf3642b30b834e3698b57f5b8e97bce55bbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424096e00cdac8ba68b368ca60fbf3642b30b834e3698b57f5b8e97bce55bbea->enter($__internal_424096e00cdac8ba68b368ca60fbf3642b30b834e3698b57f5b8e97bce55bbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_97843a2810e02a3c1744302db50396031a7e460c915347ae1eba7560cfac263b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97843a2810e02a3c1744302db50396031a7e460c915347ae1eba7560cfac263b->enter($__internal_97843a2810e02a3c1744302db50396031a7e460c915347ae1eba7560cfac263b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_424096e00cdac8ba68b368ca60fbf3642b30b834e3698b57f5b8e97bce55bbea->leave($__internal_424096e00cdac8ba68b368ca60fbf3642b30b834e3698b57f5b8e97bce55bbea_prof);

        
        $__internal_97843a2810e02a3c1744302db50396031a7e460c915347ae1eba7560cfac263b->leave($__internal_97843a2810e02a3c1744302db50396031a7e460c915347ae1eba7560cfac263b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
