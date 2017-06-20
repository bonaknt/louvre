<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9cfd7c2134de2fe321d8e1d19368a2bb28afc658601f00b5814a4d705e41a213 extends Twig_Template
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
        $__internal_52222d2fd53cf284e6bd7cf3fcd9e2d027f3291c3193fc2c7a0799967ada041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52222d2fd53cf284e6bd7cf3fcd9e2d027f3291c3193fc2c7a0799967ada041f->enter($__internal_52222d2fd53cf284e6bd7cf3fcd9e2d027f3291c3193fc2c7a0799967ada041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7480b884ad76c4bc4964707b79cab25e6a9f522678c03741f911daea78f3291e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7480b884ad76c4bc4964707b79cab25e6a9f522678c03741f911daea78f3291e->enter($__internal_7480b884ad76c4bc4964707b79cab25e6a9f522678c03741f911daea78f3291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_52222d2fd53cf284e6bd7cf3fcd9e2d027f3291c3193fc2c7a0799967ada041f->leave($__internal_52222d2fd53cf284e6bd7cf3fcd9e2d027f3291c3193fc2c7a0799967ada041f_prof);

        
        $__internal_7480b884ad76c4bc4964707b79cab25e6a9f522678c03741f911daea78f3291e->leave($__internal_7480b884ad76c4bc4964707b79cab25e6a9f522678c03741f911daea78f3291e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
