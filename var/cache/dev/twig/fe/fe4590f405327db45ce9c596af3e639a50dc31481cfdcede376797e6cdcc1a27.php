<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0a15eee4d1c1dc59b2ec996683f27fcfd49029369ee2331898152157c1b214db extends Twig_Template
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
        $__internal_b4a995bc1ecb911d27a3f9f7233325aef2a16788cab75557230b82347f5a0c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a995bc1ecb911d27a3f9f7233325aef2a16788cab75557230b82347f5a0c5a->enter($__internal_b4a995bc1ecb911d27a3f9f7233325aef2a16788cab75557230b82347f5a0c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_39b9abeffa08660de3c1f63449014409063412d9d1e48f6cef425b38e308cec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b9abeffa08660de3c1f63449014409063412d9d1e48f6cef425b38e308cec9->enter($__internal_39b9abeffa08660de3c1f63449014409063412d9d1e48f6cef425b38e308cec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b4a995bc1ecb911d27a3f9f7233325aef2a16788cab75557230b82347f5a0c5a->leave($__internal_b4a995bc1ecb911d27a3f9f7233325aef2a16788cab75557230b82347f5a0c5a_prof);

        
        $__internal_39b9abeffa08660de3c1f63449014409063412d9d1e48f6cef425b38e308cec9->leave($__internal_39b9abeffa08660de3c1f63449014409063412d9d1e48f6cef425b38e308cec9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
