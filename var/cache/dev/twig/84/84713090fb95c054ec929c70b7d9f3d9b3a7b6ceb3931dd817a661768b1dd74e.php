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
        $__internal_157fe3cc169cc31daf5453f30bf60e4eea17c03ea9216422721a085753257025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157fe3cc169cc31daf5453f30bf60e4eea17c03ea9216422721a085753257025->enter($__internal_157fe3cc169cc31daf5453f30bf60e4eea17c03ea9216422721a085753257025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_459d6d4a59752c9547a48d36cf841f6a830d207e0569045374ff4161e0f7d650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459d6d4a59752c9547a48d36cf841f6a830d207e0569045374ff4161e0f7d650->enter($__internal_459d6d4a59752c9547a48d36cf841f6a830d207e0569045374ff4161e0f7d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_157fe3cc169cc31daf5453f30bf60e4eea17c03ea9216422721a085753257025->leave($__internal_157fe3cc169cc31daf5453f30bf60e4eea17c03ea9216422721a085753257025_prof);

        
        $__internal_459d6d4a59752c9547a48d36cf841f6a830d207e0569045374ff4161e0f7d650->leave($__internal_459d6d4a59752c9547a48d36cf841f6a830d207e0569045374ff4161e0f7d650_prof);

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
