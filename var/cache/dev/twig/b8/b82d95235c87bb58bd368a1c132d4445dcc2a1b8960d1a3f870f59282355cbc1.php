<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_36a487a36e80b3ae8867dff30f38158b890e929ada71c21ba0ab09a451076e4d extends Twig_Template
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
        $__internal_5d5c7f0a89d8bbec39b6409fc5780f1dd9351d70f7287b444dbbe380e7883186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5c7f0a89d8bbec39b6409fc5780f1dd9351d70f7287b444dbbe380e7883186->enter($__internal_5d5c7f0a89d8bbec39b6409fc5780f1dd9351d70f7287b444dbbe380e7883186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_591f4f90993a10e35e558891c03cc3aa1880b822f88dd5d65d5596a1e71d755c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591f4f90993a10e35e558891c03cc3aa1880b822f88dd5d65d5596a1e71d755c->enter($__internal_591f4f90993a10e35e558891c03cc3aa1880b822f88dd5d65d5596a1e71d755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5d5c7f0a89d8bbec39b6409fc5780f1dd9351d70f7287b444dbbe380e7883186->leave($__internal_5d5c7f0a89d8bbec39b6409fc5780f1dd9351d70f7287b444dbbe380e7883186_prof);

        
        $__internal_591f4f90993a10e35e558891c03cc3aa1880b822f88dd5d65d5596a1e71d755c->leave($__internal_591f4f90993a10e35e558891c03cc3aa1880b822f88dd5d65d5596a1e71d755c_prof);

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
