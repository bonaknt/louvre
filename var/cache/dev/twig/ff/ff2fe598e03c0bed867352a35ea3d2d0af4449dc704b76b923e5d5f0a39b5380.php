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
        $__internal_e43e9c9fc2b4df1fa2cdbc7f7ea57959aa88f5636ddecaa000286d4018149bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43e9c9fc2b4df1fa2cdbc7f7ea57959aa88f5636ddecaa000286d4018149bb5->enter($__internal_e43e9c9fc2b4df1fa2cdbc7f7ea57959aa88f5636ddecaa000286d4018149bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_eff92fa7900197e89bea3a6aec30eb4572246043af7a41789faf97351579428a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff92fa7900197e89bea3a6aec30eb4572246043af7a41789faf97351579428a->enter($__internal_eff92fa7900197e89bea3a6aec30eb4572246043af7a41789faf97351579428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e43e9c9fc2b4df1fa2cdbc7f7ea57959aa88f5636ddecaa000286d4018149bb5->leave($__internal_e43e9c9fc2b4df1fa2cdbc7f7ea57959aa88f5636ddecaa000286d4018149bb5_prof);

        
        $__internal_eff92fa7900197e89bea3a6aec30eb4572246043af7a41789faf97351579428a->leave($__internal_eff92fa7900197e89bea3a6aec30eb4572246043af7a41789faf97351579428a_prof);

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
