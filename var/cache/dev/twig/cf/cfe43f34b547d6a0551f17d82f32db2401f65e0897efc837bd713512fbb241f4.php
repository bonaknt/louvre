<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bede0af796a1486980ba5e86053a1ccc012ec265647dee3874742536b88ef0a0 extends Twig_Template
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
        $__internal_ce45218f43aed7b149197d315e8ddb4ed8a59a2c92fe82d10fbe4cf43b6c3a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce45218f43aed7b149197d315e8ddb4ed8a59a2c92fe82d10fbe4cf43b6c3a7f->enter($__internal_ce45218f43aed7b149197d315e8ddb4ed8a59a2c92fe82d10fbe4cf43b6c3a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_206da92316725efe2a144fe567fc3546d847d0b01fa2d9c32a1a1fc8a75d5dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206da92316725efe2a144fe567fc3546d847d0b01fa2d9c32a1a1fc8a75d5dc8->enter($__internal_206da92316725efe2a144fe567fc3546d847d0b01fa2d9c32a1a1fc8a75d5dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ce45218f43aed7b149197d315e8ddb4ed8a59a2c92fe82d10fbe4cf43b6c3a7f->leave($__internal_ce45218f43aed7b149197d315e8ddb4ed8a59a2c92fe82d10fbe4cf43b6c3a7f_prof);

        
        $__internal_206da92316725efe2a144fe567fc3546d847d0b01fa2d9c32a1a1fc8a75d5dc8->leave($__internal_206da92316725efe2a144fe567fc3546d847d0b01fa2d9c32a1a1fc8a75d5dc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
