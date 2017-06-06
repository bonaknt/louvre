<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0c120ccf1ab1d4662d3c4eacfe05aa53df0027b27b30842510004d6a2412dd5a extends Twig_Template
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
        $__internal_b43edcd3a73f9b866c3a3855daeae6bc20a0113e8632e7a61b9faff495bcc827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43edcd3a73f9b866c3a3855daeae6bc20a0113e8632e7a61b9faff495bcc827->enter($__internal_b43edcd3a73f9b866c3a3855daeae6bc20a0113e8632e7a61b9faff495bcc827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_28a027230fa1c6790f4a5ed7286a8d6a9c72f9dd140ced307e81b130af9b0643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a027230fa1c6790f4a5ed7286a8d6a9c72f9dd140ced307e81b130af9b0643->enter($__internal_28a027230fa1c6790f4a5ed7286a8d6a9c72f9dd140ced307e81b130af9b0643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b43edcd3a73f9b866c3a3855daeae6bc20a0113e8632e7a61b9faff495bcc827->leave($__internal_b43edcd3a73f9b866c3a3855daeae6bc20a0113e8632e7a61b9faff495bcc827_prof);

        
        $__internal_28a027230fa1c6790f4a5ed7286a8d6a9c72f9dd140ced307e81b130af9b0643->leave($__internal_28a027230fa1c6790f4a5ed7286a8d6a9c72f9dd140ced307e81b130af9b0643_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
