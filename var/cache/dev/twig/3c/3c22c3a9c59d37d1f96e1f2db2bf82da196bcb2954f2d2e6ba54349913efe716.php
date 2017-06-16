<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c68b8dc9526b5db02e506664e8f3ffb48ca3696c9bf8a21db7700cc8bcd386ff extends Twig_Template
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
        $__internal_1eb26e1e73a8188b7a5cac2bb6efadf10f9a6ca97cd53c35eb0e85e52121608c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb26e1e73a8188b7a5cac2bb6efadf10f9a6ca97cd53c35eb0e85e52121608c->enter($__internal_1eb26e1e73a8188b7a5cac2bb6efadf10f9a6ca97cd53c35eb0e85e52121608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0759a9413f21088ceeefac192c27df8c2c63b3aad4c49c9c942e7dbe15a56b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0759a9413f21088ceeefac192c27df8c2c63b3aad4c49c9c942e7dbe15a56b83->enter($__internal_0759a9413f21088ceeefac192c27df8c2c63b3aad4c49c9c942e7dbe15a56b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1eb26e1e73a8188b7a5cac2bb6efadf10f9a6ca97cd53c35eb0e85e52121608c->leave($__internal_1eb26e1e73a8188b7a5cac2bb6efadf10f9a6ca97cd53c35eb0e85e52121608c_prof);

        
        $__internal_0759a9413f21088ceeefac192c27df8c2c63b3aad4c49c9c942e7dbe15a56b83->leave($__internal_0759a9413f21088ceeefac192c27df8c2c63b3aad4c49c9c942e7dbe15a56b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
