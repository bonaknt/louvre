<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_46b9480612505e5f144ec908f8f1dfdbbbfc9ad0b9394b1195318e4258cf2dbe extends Twig_Template
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
        $__internal_febcc3553f878281fdf38c5868108c9434abf32cf1b09c4013aa7682b7bfe99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febcc3553f878281fdf38c5868108c9434abf32cf1b09c4013aa7682b7bfe99a->enter($__internal_febcc3553f878281fdf38c5868108c9434abf32cf1b09c4013aa7682b7bfe99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6f454993814b0af9c2eabd09f1e61289cdbd8347e95a336a2fab62391ee76364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f454993814b0af9c2eabd09f1e61289cdbd8347e95a336a2fab62391ee76364->enter($__internal_6f454993814b0af9c2eabd09f1e61289cdbd8347e95a336a2fab62391ee76364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_febcc3553f878281fdf38c5868108c9434abf32cf1b09c4013aa7682b7bfe99a->leave($__internal_febcc3553f878281fdf38c5868108c9434abf32cf1b09c4013aa7682b7bfe99a_prof);

        
        $__internal_6f454993814b0af9c2eabd09f1e61289cdbd8347e95a336a2fab62391ee76364->leave($__internal_6f454993814b0af9c2eabd09f1e61289cdbd8347e95a336a2fab62391ee76364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
