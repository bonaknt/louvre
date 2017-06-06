<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e1b6daaab3e531b382c95b76f6a2057edf6327da5799597e2393dfeb375998ee extends Twig_Template
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
        $__internal_d4d247122e6cc908f4500d5b88a398840ade61fa2677467e72194327515f8072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d247122e6cc908f4500d5b88a398840ade61fa2677467e72194327515f8072->enter($__internal_d4d247122e6cc908f4500d5b88a398840ade61fa2677467e72194327515f8072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a5c91fa53def1d36819582ec5b2b2db8d83ff072f69b4aa20b2d33f6cc31ada6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c91fa53def1d36819582ec5b2b2db8d83ff072f69b4aa20b2d33f6cc31ada6->enter($__internal_a5c91fa53def1d36819582ec5b2b2db8d83ff072f69b4aa20b2d33f6cc31ada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d4d247122e6cc908f4500d5b88a398840ade61fa2677467e72194327515f8072->leave($__internal_d4d247122e6cc908f4500d5b88a398840ade61fa2677467e72194327515f8072_prof);

        
        $__internal_a5c91fa53def1d36819582ec5b2b2db8d83ff072f69b4aa20b2d33f6cc31ada6->leave($__internal_a5c91fa53def1d36819582ec5b2b2db8d83ff072f69b4aa20b2d33f6cc31ada6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
