<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_73d6f091166d6733c12434c6dc665f76e846f4759b1033ad0ad52b66027ade1d extends Twig_Template
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
        $__internal_0be26e3966cb68ac5c77ebcdb721c73a462f66ad2d80a68444a47f34a17eb10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be26e3966cb68ac5c77ebcdb721c73a462f66ad2d80a68444a47f34a17eb10e->enter($__internal_0be26e3966cb68ac5c77ebcdb721c73a462f66ad2d80a68444a47f34a17eb10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e8cb82cc90ddb0d54b417dc0f91c17fabfca264c37430d8f4d6a65bf3c0acc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cb82cc90ddb0d54b417dc0f91c17fabfca264c37430d8f4d6a65bf3c0acc75->enter($__internal_e8cb82cc90ddb0d54b417dc0f91c17fabfca264c37430d8f4d6a65bf3c0acc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0be26e3966cb68ac5c77ebcdb721c73a462f66ad2d80a68444a47f34a17eb10e->leave($__internal_0be26e3966cb68ac5c77ebcdb721c73a462f66ad2d80a68444a47f34a17eb10e_prof);

        
        $__internal_e8cb82cc90ddb0d54b417dc0f91c17fabfca264c37430d8f4d6a65bf3c0acc75->leave($__internal_e8cb82cc90ddb0d54b417dc0f91c17fabfca264c37430d8f4d6a65bf3c0acc75_prof);

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
