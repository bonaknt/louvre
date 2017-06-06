<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0fb6986762dfaf434e267d5d63295529de494a723c4d4779c246d4344877f065 extends Twig_Template
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
        $__internal_01c67e50f51022afc17962445e9437b9b8528261f6b66a81edb988a4e6328188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c67e50f51022afc17962445e9437b9b8528261f6b66a81edb988a4e6328188->enter($__internal_01c67e50f51022afc17962445e9437b9b8528261f6b66a81edb988a4e6328188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_88f47c595b001d1f97a16a801663d88a7dff72e470186800c33e5f79b5699160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f47c595b001d1f97a16a801663d88a7dff72e470186800c33e5f79b5699160->enter($__internal_88f47c595b001d1f97a16a801663d88a7dff72e470186800c33e5f79b5699160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_01c67e50f51022afc17962445e9437b9b8528261f6b66a81edb988a4e6328188->leave($__internal_01c67e50f51022afc17962445e9437b9b8528261f6b66a81edb988a4e6328188_prof);

        
        $__internal_88f47c595b001d1f97a16a801663d88a7dff72e470186800c33e5f79b5699160->leave($__internal_88f47c595b001d1f97a16a801663d88a7dff72e470186800c33e5f79b5699160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
