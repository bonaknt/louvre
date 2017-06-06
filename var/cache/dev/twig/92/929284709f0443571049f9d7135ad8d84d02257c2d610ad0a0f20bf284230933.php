<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d26ba761d87d3657b07a9f29909771d83e2bb674bdc5449f3e16b2e6121900e extends Twig_Template
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
        $__internal_bb5a731eaf1d0baacc7c60b0203b92fd7d59dee1b37651ee175d522051422e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5a731eaf1d0baacc7c60b0203b92fd7d59dee1b37651ee175d522051422e70->enter($__internal_bb5a731eaf1d0baacc7c60b0203b92fd7d59dee1b37651ee175d522051422e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4dd34064316e95b2bc23c65e3644f9c696cdf8b894f4a13bd5bb64c8b2841c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd34064316e95b2bc23c65e3644f9c696cdf8b894f4a13bd5bb64c8b2841c50->enter($__internal_4dd34064316e95b2bc23c65e3644f9c696cdf8b894f4a13bd5bb64c8b2841c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bb5a731eaf1d0baacc7c60b0203b92fd7d59dee1b37651ee175d522051422e70->leave($__internal_bb5a731eaf1d0baacc7c60b0203b92fd7d59dee1b37651ee175d522051422e70_prof);

        
        $__internal_4dd34064316e95b2bc23c65e3644f9c696cdf8b894f4a13bd5bb64c8b2841c50->leave($__internal_4dd34064316e95b2bc23c65e3644f9c696cdf8b894f4a13bd5bb64c8b2841c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
