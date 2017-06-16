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
        $__internal_9e944105cdc22274e385501cd760009ba61fed3d74a2b94666c84d6f73a7d358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e944105cdc22274e385501cd760009ba61fed3d74a2b94666c84d6f73a7d358->enter($__internal_9e944105cdc22274e385501cd760009ba61fed3d74a2b94666c84d6f73a7d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_28d1c9f7a562361b52f11fa9a0d41054031f01fce4dc05a18a6b940dc68e43f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d1c9f7a562361b52f11fa9a0d41054031f01fce4dc05a18a6b940dc68e43f0->enter($__internal_28d1c9f7a562361b52f11fa9a0d41054031f01fce4dc05a18a6b940dc68e43f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e944105cdc22274e385501cd760009ba61fed3d74a2b94666c84d6f73a7d358->leave($__internal_9e944105cdc22274e385501cd760009ba61fed3d74a2b94666c84d6f73a7d358_prof);

        
        $__internal_28d1c9f7a562361b52f11fa9a0d41054031f01fce4dc05a18a6b940dc68e43f0->leave($__internal_28d1c9f7a562361b52f11fa9a0d41054031f01fce4dc05a18a6b940dc68e43f0_prof);

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
