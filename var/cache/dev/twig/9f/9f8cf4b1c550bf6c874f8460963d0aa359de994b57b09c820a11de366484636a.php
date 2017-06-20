<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0260bf3b676d9975db34c05e287d80172c5ea700ae4e18f0dc3ac847a20d4390 extends Twig_Template
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
        $__internal_6d75564988f40f35bb93f65e23526fc6e195e26d3232bf5fd1bb30727be40891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d75564988f40f35bb93f65e23526fc6e195e26d3232bf5fd1bb30727be40891->enter($__internal_6d75564988f40f35bb93f65e23526fc6e195e26d3232bf5fd1bb30727be40891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_416cee47c843084369ffe5236a898c17805c5259cc290c5abca781fda346fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416cee47c843084369ffe5236a898c17805c5259cc290c5abca781fda346fdfb->enter($__internal_416cee47c843084369ffe5236a898c17805c5259cc290c5abca781fda346fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6d75564988f40f35bb93f65e23526fc6e195e26d3232bf5fd1bb30727be40891->leave($__internal_6d75564988f40f35bb93f65e23526fc6e195e26d3232bf5fd1bb30727be40891_prof);

        
        $__internal_416cee47c843084369ffe5236a898c17805c5259cc290c5abca781fda346fdfb->leave($__internal_416cee47c843084369ffe5236a898c17805c5259cc290c5abca781fda346fdfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
