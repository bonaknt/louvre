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
        $__internal_1eec5e47dbd44d1e8339bc587aa24e33de9fe4687d95395877b92baccd6ef28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eec5e47dbd44d1e8339bc587aa24e33de9fe4687d95395877b92baccd6ef28e->enter($__internal_1eec5e47dbd44d1e8339bc587aa24e33de9fe4687d95395877b92baccd6ef28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bb21049e735d7ec6a49185d5f933c0686bbee49725370661dccac322b252f399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb21049e735d7ec6a49185d5f933c0686bbee49725370661dccac322b252f399->enter($__internal_bb21049e735d7ec6a49185d5f933c0686bbee49725370661dccac322b252f399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1eec5e47dbd44d1e8339bc587aa24e33de9fe4687d95395877b92baccd6ef28e->leave($__internal_1eec5e47dbd44d1e8339bc587aa24e33de9fe4687d95395877b92baccd6ef28e_prof);

        
        $__internal_bb21049e735d7ec6a49185d5f933c0686bbee49725370661dccac322b252f399->leave($__internal_bb21049e735d7ec6a49185d5f933c0686bbee49725370661dccac322b252f399_prof);

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
