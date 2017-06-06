<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_eb43fa682f0debfdc43812a171140529219ef624edb1c3c8a017b88dfb973c30 extends Twig_Template
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
        $__internal_e79f886e1cc451675478e0c33a5053194a11ef8315e657e3d3166fbb57eb9101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79f886e1cc451675478e0c33a5053194a11ef8315e657e3d3166fbb57eb9101->enter($__internal_e79f886e1cc451675478e0c33a5053194a11ef8315e657e3d3166fbb57eb9101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_02ac6fcbb49c0d0fdc6b7f8af297125250f1a9b10448865fafe1f82fe7f41efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ac6fcbb49c0d0fdc6b7f8af297125250f1a9b10448865fafe1f82fe7f41efd->enter($__internal_02ac6fcbb49c0d0fdc6b7f8af297125250f1a9b10448865fafe1f82fe7f41efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e79f886e1cc451675478e0c33a5053194a11ef8315e657e3d3166fbb57eb9101->leave($__internal_e79f886e1cc451675478e0c33a5053194a11ef8315e657e3d3166fbb57eb9101_prof);

        
        $__internal_02ac6fcbb49c0d0fdc6b7f8af297125250f1a9b10448865fafe1f82fe7f41efd->leave($__internal_02ac6fcbb49c0d0fdc6b7f8af297125250f1a9b10448865fafe1f82fe7f41efd_prof);

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
