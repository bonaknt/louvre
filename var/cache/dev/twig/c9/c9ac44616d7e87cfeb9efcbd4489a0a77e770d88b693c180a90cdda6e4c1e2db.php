<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_393da864547072fbae849e24b1fdad62bc7ded7547c947c91f96ce70c64d0369 extends Twig_Template
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
        $__internal_89533bd1e0c480378edfae9de9fde9f3b11ee061416224d6d7d7ba7f1151226f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89533bd1e0c480378edfae9de9fde9f3b11ee061416224d6d7d7ba7f1151226f->enter($__internal_89533bd1e0c480378edfae9de9fde9f3b11ee061416224d6d7d7ba7f1151226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_21d36112871233be31e61e7d26918a72fe3a5add3854abb30c60dbd759193075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d36112871233be31e61e7d26918a72fe3a5add3854abb30c60dbd759193075->enter($__internal_21d36112871233be31e61e7d26918a72fe3a5add3854abb30c60dbd759193075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_89533bd1e0c480378edfae9de9fde9f3b11ee061416224d6d7d7ba7f1151226f->leave($__internal_89533bd1e0c480378edfae9de9fde9f3b11ee061416224d6d7d7ba7f1151226f_prof);

        
        $__internal_21d36112871233be31e61e7d26918a72fe3a5add3854abb30c60dbd759193075->leave($__internal_21d36112871233be31e61e7d26918a72fe3a5add3854abb30c60dbd759193075_prof);

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
