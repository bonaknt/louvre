<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d68a419cf52df19ffccebe09552c7838ceaa04be286d4f8a91c2f44ea66a0629 extends Twig_Template
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
        $__internal_058b8636df2b2e3b8de3bff3cd144153e7d317052efb5bb2bd1e7fcc8707be14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058b8636df2b2e3b8de3bff3cd144153e7d317052efb5bb2bd1e7fcc8707be14->enter($__internal_058b8636df2b2e3b8de3bff3cd144153e7d317052efb5bb2bd1e7fcc8707be14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_962268c77ebd0dc38ac4be857fad007a27f2d45a80161ab3db622ef54a4beead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962268c77ebd0dc38ac4be857fad007a27f2d45a80161ab3db622ef54a4beead->enter($__internal_962268c77ebd0dc38ac4be857fad007a27f2d45a80161ab3db622ef54a4beead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_058b8636df2b2e3b8de3bff3cd144153e7d317052efb5bb2bd1e7fcc8707be14->leave($__internal_058b8636df2b2e3b8de3bff3cd144153e7d317052efb5bb2bd1e7fcc8707be14_prof);

        
        $__internal_962268c77ebd0dc38ac4be857fad007a27f2d45a80161ab3db622ef54a4beead->leave($__internal_962268c77ebd0dc38ac4be857fad007a27f2d45a80161ab3db622ef54a4beead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
