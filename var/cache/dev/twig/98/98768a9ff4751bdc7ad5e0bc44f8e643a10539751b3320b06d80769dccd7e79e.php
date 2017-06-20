<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_991e03e03f88aa01e70ea539510e3e5f7652e2dee48d0debb5ded13ae2a068b1 extends Twig_Template
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
        $__internal_e944b932ad8c6f4f3a168d957355cdcb4fb2994e935540bf0cd05961ed88b011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e944b932ad8c6f4f3a168d957355cdcb4fb2994e935540bf0cd05961ed88b011->enter($__internal_e944b932ad8c6f4f3a168d957355cdcb4fb2994e935540bf0cd05961ed88b011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6c80f8e313ccaacf925836bfa98f2f34eda4d0985530711f1dc9704880d35c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c80f8e313ccaacf925836bfa98f2f34eda4d0985530711f1dc9704880d35c9a->enter($__internal_6c80f8e313ccaacf925836bfa98f2f34eda4d0985530711f1dc9704880d35c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e944b932ad8c6f4f3a168d957355cdcb4fb2994e935540bf0cd05961ed88b011->leave($__internal_e944b932ad8c6f4f3a168d957355cdcb4fb2994e935540bf0cd05961ed88b011_prof);

        
        $__internal_6c80f8e313ccaacf925836bfa98f2f34eda4d0985530711f1dc9704880d35c9a->leave($__internal_6c80f8e313ccaacf925836bfa98f2f34eda4d0985530711f1dc9704880d35c9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
