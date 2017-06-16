<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cb0795f77c2066a5773c066a8cec053c3e3a3e50054dc9983869042ab0c301d0 extends Twig_Template
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
        $__internal_e5ff83711ac6feb267bc62f650cf60d3b2fed638288269afc939883ab8dc9a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ff83711ac6feb267bc62f650cf60d3b2fed638288269afc939883ab8dc9a66->enter($__internal_e5ff83711ac6feb267bc62f650cf60d3b2fed638288269afc939883ab8dc9a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_158b337edb701aee87c384767962222349a7a69c6f2a7b6c439e7ce278a680a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158b337edb701aee87c384767962222349a7a69c6f2a7b6c439e7ce278a680a9->enter($__internal_158b337edb701aee87c384767962222349a7a69c6f2a7b6c439e7ce278a680a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e5ff83711ac6feb267bc62f650cf60d3b2fed638288269afc939883ab8dc9a66->leave($__internal_e5ff83711ac6feb267bc62f650cf60d3b2fed638288269afc939883ab8dc9a66_prof);

        
        $__internal_158b337edb701aee87c384767962222349a7a69c6f2a7b6c439e7ce278a680a9->leave($__internal_158b337edb701aee87c384767962222349a7a69c6f2a7b6c439e7ce278a680a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
