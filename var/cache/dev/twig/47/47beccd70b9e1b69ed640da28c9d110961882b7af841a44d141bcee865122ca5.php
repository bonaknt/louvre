<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d488dc74b113c41bbd80df9de800db2bf824f3e767a8474b7fce96a69063eb2f extends Twig_Template
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
        $__internal_75ca9fa569386a237d34b512b86e069ad4f394e1a25d616db426b524a6ee0b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ca9fa569386a237d34b512b86e069ad4f394e1a25d616db426b524a6ee0b36->enter($__internal_75ca9fa569386a237d34b512b86e069ad4f394e1a25d616db426b524a6ee0b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3c145afd8dcdb49d7a5deb62cab1f72f562497978311ed039a2a651e177c1ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c145afd8dcdb49d7a5deb62cab1f72f562497978311ed039a2a651e177c1ef3->enter($__internal_3c145afd8dcdb49d7a5deb62cab1f72f562497978311ed039a2a651e177c1ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_75ca9fa569386a237d34b512b86e069ad4f394e1a25d616db426b524a6ee0b36->leave($__internal_75ca9fa569386a237d34b512b86e069ad4f394e1a25d616db426b524a6ee0b36_prof);

        
        $__internal_3c145afd8dcdb49d7a5deb62cab1f72f562497978311ed039a2a651e177c1ef3->leave($__internal_3c145afd8dcdb49d7a5deb62cab1f72f562497978311ed039a2a651e177c1ef3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
