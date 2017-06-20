<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b6753891e8e7a39f5d4ea3988e4f6ace19803373e4c412c7befab6bc5c4a0aa2 extends Twig_Template
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
        $__internal_75d43ba7295fc523fb2890fac4e0e0f763f1529d70583f67bcacb216adc43ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d43ba7295fc523fb2890fac4e0e0f763f1529d70583f67bcacb216adc43ba2->enter($__internal_75d43ba7295fc523fb2890fac4e0e0f763f1529d70583f67bcacb216adc43ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9b0a13a215b214b361da8681a95d3ff977a376cef8a4661a4b355b0b16125123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0a13a215b214b361da8681a95d3ff977a376cef8a4661a4b355b0b16125123->enter($__internal_9b0a13a215b214b361da8681a95d3ff977a376cef8a4661a4b355b0b16125123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_75d43ba7295fc523fb2890fac4e0e0f763f1529d70583f67bcacb216adc43ba2->leave($__internal_75d43ba7295fc523fb2890fac4e0e0f763f1529d70583f67bcacb216adc43ba2_prof);

        
        $__internal_9b0a13a215b214b361da8681a95d3ff977a376cef8a4661a4b355b0b16125123->leave($__internal_9b0a13a215b214b361da8681a95d3ff977a376cef8a4661a4b355b0b16125123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
