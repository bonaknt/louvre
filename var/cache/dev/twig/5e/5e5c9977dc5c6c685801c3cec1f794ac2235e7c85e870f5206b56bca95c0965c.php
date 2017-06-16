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
        $__internal_5905ec5cea0cb0aa18d647a450e5c058d22b73b259ee9f76930856e08fdd5882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5905ec5cea0cb0aa18d647a450e5c058d22b73b259ee9f76930856e08fdd5882->enter($__internal_5905ec5cea0cb0aa18d647a450e5c058d22b73b259ee9f76930856e08fdd5882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2cf36b5e37bf0cf0dd3ce1ffa9efb38a97c6a502a4003ed81a7454dfc0bede58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf36b5e37bf0cf0dd3ce1ffa9efb38a97c6a502a4003ed81a7454dfc0bede58->enter($__internal_2cf36b5e37bf0cf0dd3ce1ffa9efb38a97c6a502a4003ed81a7454dfc0bede58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5905ec5cea0cb0aa18d647a450e5c058d22b73b259ee9f76930856e08fdd5882->leave($__internal_5905ec5cea0cb0aa18d647a450e5c058d22b73b259ee9f76930856e08fdd5882_prof);

        
        $__internal_2cf36b5e37bf0cf0dd3ce1ffa9efb38a97c6a502a4003ed81a7454dfc0bede58->leave($__internal_2cf36b5e37bf0cf0dd3ce1ffa9efb38a97c6a502a4003ed81a7454dfc0bede58_prof);

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
