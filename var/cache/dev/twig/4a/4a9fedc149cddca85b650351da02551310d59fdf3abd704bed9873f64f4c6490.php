<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3370b3dcd81a99e02d11ac4d8629f3e21bebfa88f5fc14415e279f042a8c2f0d extends Twig_Template
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
        $__internal_fa20807ba73c090b1f4381b1600f3030c5f2fc465285b2a0ba4fd63db77297cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa20807ba73c090b1f4381b1600f3030c5f2fc465285b2a0ba4fd63db77297cb->enter($__internal_fa20807ba73c090b1f4381b1600f3030c5f2fc465285b2a0ba4fd63db77297cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_007f554a141de70a93643bafce2e74d6bfc2f730c81ee461adea3e86d288eb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007f554a141de70a93643bafce2e74d6bfc2f730c81ee461adea3e86d288eb09->enter($__internal_007f554a141de70a93643bafce2e74d6bfc2f730c81ee461adea3e86d288eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa20807ba73c090b1f4381b1600f3030c5f2fc465285b2a0ba4fd63db77297cb->leave($__internal_fa20807ba73c090b1f4381b1600f3030c5f2fc465285b2a0ba4fd63db77297cb_prof);

        
        $__internal_007f554a141de70a93643bafce2e74d6bfc2f730c81ee461adea3e86d288eb09->leave($__internal_007f554a141de70a93643bafce2e74d6bfc2f730c81ee461adea3e86d288eb09_prof);

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
