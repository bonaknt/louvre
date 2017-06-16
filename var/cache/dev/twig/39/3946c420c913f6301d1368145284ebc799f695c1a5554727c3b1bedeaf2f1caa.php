<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_464f698e4802819634499c2ec8e775a35c282486edb0c379ead768283d6c4b13 extends Twig_Template
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
        $__internal_e131ec03e41be46fa320f1df84b28e60b05d4904a933caa2cdbe5b2fa477d7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e131ec03e41be46fa320f1df84b28e60b05d4904a933caa2cdbe5b2fa477d7d1->enter($__internal_e131ec03e41be46fa320f1df84b28e60b05d4904a933caa2cdbe5b2fa477d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d099dafe1e09487143e10c4ecd30b36a5ef1ea00ad168cd2bd10293feaf687ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d099dafe1e09487143e10c4ecd30b36a5ef1ea00ad168cd2bd10293feaf687ff->enter($__internal_d099dafe1e09487143e10c4ecd30b36a5ef1ea00ad168cd2bd10293feaf687ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e131ec03e41be46fa320f1df84b28e60b05d4904a933caa2cdbe5b2fa477d7d1->leave($__internal_e131ec03e41be46fa320f1df84b28e60b05d4904a933caa2cdbe5b2fa477d7d1_prof);

        
        $__internal_d099dafe1e09487143e10c4ecd30b36a5ef1ea00ad168cd2bd10293feaf687ff->leave($__internal_d099dafe1e09487143e10c4ecd30b36a5ef1ea00ad168cd2bd10293feaf687ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
