<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0c3d3985a058d47d19ab1fc98b4b002179ddafbcfd83c87d48a8411c9de39bd5 extends Twig_Template
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
        $__internal_bf7dd47a7e0a09b2c4222c47fd860f82d48663874328ac714c6be0d34d3e70c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7dd47a7e0a09b2c4222c47fd860f82d48663874328ac714c6be0d34d3e70c9->enter($__internal_bf7dd47a7e0a09b2c4222c47fd860f82d48663874328ac714c6be0d34d3e70c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_de01cab9dc759c7457d98ed9eff06a37da80c0e9976bc2d8daddf4cc62657d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de01cab9dc759c7457d98ed9eff06a37da80c0e9976bc2d8daddf4cc62657d6b->enter($__internal_de01cab9dc759c7457d98ed9eff06a37da80c0e9976bc2d8daddf4cc62657d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_bf7dd47a7e0a09b2c4222c47fd860f82d48663874328ac714c6be0d34d3e70c9->leave($__internal_bf7dd47a7e0a09b2c4222c47fd860f82d48663874328ac714c6be0d34d3e70c9_prof);

        
        $__internal_de01cab9dc759c7457d98ed9eff06a37da80c0e9976bc2d8daddf4cc62657d6b->leave($__internal_de01cab9dc759c7457d98ed9eff06a37da80c0e9976bc2d8daddf4cc62657d6b_prof);

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
