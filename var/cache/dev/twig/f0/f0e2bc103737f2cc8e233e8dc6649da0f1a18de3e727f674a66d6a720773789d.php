<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_130701d4b750a3dc8e72cf64fdc23086b6aa456bb05f282846a1074e5ac9e72a extends Twig_Template
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
        $__internal_1c5422235488ee897f195151f656a76cb145ad4e898529a54cfd543dea81b143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5422235488ee897f195151f656a76cb145ad4e898529a54cfd543dea81b143->enter($__internal_1c5422235488ee897f195151f656a76cb145ad4e898529a54cfd543dea81b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e846f0cf3874a2b4f56d7a91990450fd4b8fbcfd0568d11c883eb09d2b8b9680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e846f0cf3874a2b4f56d7a91990450fd4b8fbcfd0568d11c883eb09d2b8b9680->enter($__internal_e846f0cf3874a2b4f56d7a91990450fd4b8fbcfd0568d11c883eb09d2b8b9680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1c5422235488ee897f195151f656a76cb145ad4e898529a54cfd543dea81b143->leave($__internal_1c5422235488ee897f195151f656a76cb145ad4e898529a54cfd543dea81b143_prof);

        
        $__internal_e846f0cf3874a2b4f56d7a91990450fd4b8fbcfd0568d11c883eb09d2b8b9680->leave($__internal_e846f0cf3874a2b4f56d7a91990450fd4b8fbcfd0568d11c883eb09d2b8b9680_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
