<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4877685717ac1afa6a6b2d93b59ca1a51ae6dc3391cc896826adda4e51b2ca44 extends Twig_Template
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
        $__internal_69080a59422d5c9e89591e2c43ef354d868182b17b16a0815cf883479fa6bc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69080a59422d5c9e89591e2c43ef354d868182b17b16a0815cf883479fa6bc7f->enter($__internal_69080a59422d5c9e89591e2c43ef354d868182b17b16a0815cf883479fa6bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9703c7645bbb5b1ff2148914a7281ab6e0eed350d44074a1f6a7f62107d95a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9703c7645bbb5b1ff2148914a7281ab6e0eed350d44074a1f6a7f62107d95a04->enter($__internal_9703c7645bbb5b1ff2148914a7281ab6e0eed350d44074a1f6a7f62107d95a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69080a59422d5c9e89591e2c43ef354d868182b17b16a0815cf883479fa6bc7f->leave($__internal_69080a59422d5c9e89591e2c43ef354d868182b17b16a0815cf883479fa6bc7f_prof);

        
        $__internal_9703c7645bbb5b1ff2148914a7281ab6e0eed350d44074a1f6a7f62107d95a04->leave($__internal_9703c7645bbb5b1ff2148914a7281ab6e0eed350d44074a1f6a7f62107d95a04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
