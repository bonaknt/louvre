<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_84664b445ccd4bc884d673233ec7c6cff71a7547a841ef729247df96b12213ed extends Twig_Template
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
        $__internal_dcb5fc29e6eb72b88fac78e057e6a9dc6c54d0e2d149402b81e6a5471bf5856e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb5fc29e6eb72b88fac78e057e6a9dc6c54d0e2d149402b81e6a5471bf5856e->enter($__internal_dcb5fc29e6eb72b88fac78e057e6a9dc6c54d0e2d149402b81e6a5471bf5856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d4ace995bb4dde67ff1ef6c88b7c6052ed0277a8e0f74f079c97c0d153a0399c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ace995bb4dde67ff1ef6c88b7c6052ed0277a8e0f74f079c97c0d153a0399c->enter($__internal_d4ace995bb4dde67ff1ef6c88b7c6052ed0277a8e0f74f079c97c0d153a0399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dcb5fc29e6eb72b88fac78e057e6a9dc6c54d0e2d149402b81e6a5471bf5856e->leave($__internal_dcb5fc29e6eb72b88fac78e057e6a9dc6c54d0e2d149402b81e6a5471bf5856e_prof);

        
        $__internal_d4ace995bb4dde67ff1ef6c88b7c6052ed0277a8e0f74f079c97c0d153a0399c->leave($__internal_d4ace995bb4dde67ff1ef6c88b7c6052ed0277a8e0f74f079c97c0d153a0399c_prof);

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
