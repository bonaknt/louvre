<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_da153f82ab10d2fc0a9f5ad335ccc16f70c8fd8498448f165d2d9bdc5464504d extends Twig_Template
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
        $__internal_1fa41b563a10a99c254fe2a9c5f3721a319493987eee662ea7214d878a4cc53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa41b563a10a99c254fe2a9c5f3721a319493987eee662ea7214d878a4cc53b->enter($__internal_1fa41b563a10a99c254fe2a9c5f3721a319493987eee662ea7214d878a4cc53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_261501d4243ff59cbb3aa3fa5c02afe9abcce77ae0bc2f0526449de7cb55fa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261501d4243ff59cbb3aa3fa5c02afe9abcce77ae0bc2f0526449de7cb55fa77->enter($__internal_261501d4243ff59cbb3aa3fa5c02afe9abcce77ae0bc2f0526449de7cb55fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1fa41b563a10a99c254fe2a9c5f3721a319493987eee662ea7214d878a4cc53b->leave($__internal_1fa41b563a10a99c254fe2a9c5f3721a319493987eee662ea7214d878a4cc53b_prof);

        
        $__internal_261501d4243ff59cbb3aa3fa5c02afe9abcce77ae0bc2f0526449de7cb55fa77->leave($__internal_261501d4243ff59cbb3aa3fa5c02afe9abcce77ae0bc2f0526449de7cb55fa77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
