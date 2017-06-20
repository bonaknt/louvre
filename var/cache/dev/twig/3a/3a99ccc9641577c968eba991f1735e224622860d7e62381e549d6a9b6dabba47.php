<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2dc44a4ad3856d1f833d037fec0b82d7fa6e0a639410952fc75fc708bd875f43 extends Twig_Template
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
        $__internal_dfcd464bc913ba63b8d5b5353f387c2a9766b4881803074a574948172f5ec948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcd464bc913ba63b8d5b5353f387c2a9766b4881803074a574948172f5ec948->enter($__internal_dfcd464bc913ba63b8d5b5353f387c2a9766b4881803074a574948172f5ec948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0b696944585d8fc625f0cb3170a0c81f99c394e4608392fc246ce3dc22050b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b696944585d8fc625f0cb3170a0c81f99c394e4608392fc246ce3dc22050b60->enter($__internal_0b696944585d8fc625f0cb3170a0c81f99c394e4608392fc246ce3dc22050b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dfcd464bc913ba63b8d5b5353f387c2a9766b4881803074a574948172f5ec948->leave($__internal_dfcd464bc913ba63b8d5b5353f387c2a9766b4881803074a574948172f5ec948_prof);

        
        $__internal_0b696944585d8fc625f0cb3170a0c81f99c394e4608392fc246ce3dc22050b60->leave($__internal_0b696944585d8fc625f0cb3170a0c81f99c394e4608392fc246ce3dc22050b60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
