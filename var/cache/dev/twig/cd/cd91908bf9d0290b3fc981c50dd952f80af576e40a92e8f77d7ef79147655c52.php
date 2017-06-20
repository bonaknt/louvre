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
        $__internal_2274c7c8116837ff21136af79140db56a9a838aca60e31b9be7c79e5ba2546ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2274c7c8116837ff21136af79140db56a9a838aca60e31b9be7c79e5ba2546ba->enter($__internal_2274c7c8116837ff21136af79140db56a9a838aca60e31b9be7c79e5ba2546ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9ab37eb2d666482b22149bedf958a253bfca0b9cdb031b48cc2351f5fd89215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab37eb2d666482b22149bedf958a253bfca0b9cdb031b48cc2351f5fd89215e->enter($__internal_9ab37eb2d666482b22149bedf958a253bfca0b9cdb031b48cc2351f5fd89215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2274c7c8116837ff21136af79140db56a9a838aca60e31b9be7c79e5ba2546ba->leave($__internal_2274c7c8116837ff21136af79140db56a9a838aca60e31b9be7c79e5ba2546ba_prof);

        
        $__internal_9ab37eb2d666482b22149bedf958a253bfca0b9cdb031b48cc2351f5fd89215e->leave($__internal_9ab37eb2d666482b22149bedf958a253bfca0b9cdb031b48cc2351f5fd89215e_prof);

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
