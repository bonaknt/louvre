<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ba52639385dbafc3351ea530d88c5a1a70265081047c2e3ed704ef5e9e19125d extends Twig_Template
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
        $__internal_644bfc8eef40b2860dd51b34790182ad51b3f249427836bd545dbd4484e9ccba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644bfc8eef40b2860dd51b34790182ad51b3f249427836bd545dbd4484e9ccba->enter($__internal_644bfc8eef40b2860dd51b34790182ad51b3f249427836bd545dbd4484e9ccba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d68f4b23dac00915d0dc4950ea5109c09ae83dbe170806683c15653fe14ea193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68f4b23dac00915d0dc4950ea5109c09ae83dbe170806683c15653fe14ea193->enter($__internal_d68f4b23dac00915d0dc4950ea5109c09ae83dbe170806683c15653fe14ea193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_644bfc8eef40b2860dd51b34790182ad51b3f249427836bd545dbd4484e9ccba->leave($__internal_644bfc8eef40b2860dd51b34790182ad51b3f249427836bd545dbd4484e9ccba_prof);

        
        $__internal_d68f4b23dac00915d0dc4950ea5109c09ae83dbe170806683c15653fe14ea193->leave($__internal_d68f4b23dac00915d0dc4950ea5109c09ae83dbe170806683c15653fe14ea193_prof);

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
