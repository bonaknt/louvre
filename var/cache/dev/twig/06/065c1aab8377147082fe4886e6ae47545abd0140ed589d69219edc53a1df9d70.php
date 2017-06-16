<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d897ff5083c8bf0269602690aacf7fbdf09a374ed7c6451fc021112a7d25e56 extends Twig_Template
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
        $__internal_082de45e05e95eaae49929b49c0dc11dc38d08cadba8c7716dbabc9eb9bd340a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082de45e05e95eaae49929b49c0dc11dc38d08cadba8c7716dbabc9eb9bd340a->enter($__internal_082de45e05e95eaae49929b49c0dc11dc38d08cadba8c7716dbabc9eb9bd340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_28112951e2667747cefdff94e2e1a0fcdfebb462c13f9a263e11363bc3ef9e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28112951e2667747cefdff94e2e1a0fcdfebb462c13f9a263e11363bc3ef9e59->enter($__internal_28112951e2667747cefdff94e2e1a0fcdfebb462c13f9a263e11363bc3ef9e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_082de45e05e95eaae49929b49c0dc11dc38d08cadba8c7716dbabc9eb9bd340a->leave($__internal_082de45e05e95eaae49929b49c0dc11dc38d08cadba8c7716dbabc9eb9bd340a_prof);

        
        $__internal_28112951e2667747cefdff94e2e1a0fcdfebb462c13f9a263e11363bc3ef9e59->leave($__internal_28112951e2667747cefdff94e2e1a0fcdfebb462c13f9a263e11363bc3ef9e59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
