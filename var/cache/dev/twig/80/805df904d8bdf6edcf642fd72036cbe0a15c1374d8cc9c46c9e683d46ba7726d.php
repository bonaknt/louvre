<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b208d20dfdc9fc1828f2a0b62534bd3c8e0832049585eace951818ff2233399b extends Twig_Template
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
        $__internal_255421b2cee482372cf5bc8f67a9d5cbf6ad3d3ed573a33321e6a58c29f393db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255421b2cee482372cf5bc8f67a9d5cbf6ad3d3ed573a33321e6a58c29f393db->enter($__internal_255421b2cee482372cf5bc8f67a9d5cbf6ad3d3ed573a33321e6a58c29f393db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6b4eb5dbefee92081f17956803a2cad7e971169a928c0412a159dbf912d6d8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4eb5dbefee92081f17956803a2cad7e971169a928c0412a159dbf912d6d8eb->enter($__internal_6b4eb5dbefee92081f17956803a2cad7e971169a928c0412a159dbf912d6d8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_255421b2cee482372cf5bc8f67a9d5cbf6ad3d3ed573a33321e6a58c29f393db->leave($__internal_255421b2cee482372cf5bc8f67a9d5cbf6ad3d3ed573a33321e6a58c29f393db_prof);

        
        $__internal_6b4eb5dbefee92081f17956803a2cad7e971169a928c0412a159dbf912d6d8eb->leave($__internal_6b4eb5dbefee92081f17956803a2cad7e971169a928c0412a159dbf912d6d8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
