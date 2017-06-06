<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a9f738c332b9605873b8ff5939ed971ac3086e0f429ae3f519c374f093393833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6122a6126e823ec1a5efa7c0165c5f89ca51c291270f14cb55306642af81e452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6122a6126e823ec1a5efa7c0165c5f89ca51c291270f14cb55306642af81e452->enter($__internal_6122a6126e823ec1a5efa7c0165c5f89ca51c291270f14cb55306642af81e452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d38c11f2d185b403f04ba03dbb626b68eacf7fd105b9b6acdc8e157fa7f43504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38c11f2d185b403f04ba03dbb626b68eacf7fd105b9b6acdc8e157fa7f43504->enter($__internal_d38c11f2d185b403f04ba03dbb626b68eacf7fd105b9b6acdc8e157fa7f43504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6122a6126e823ec1a5efa7c0165c5f89ca51c291270f14cb55306642af81e452->leave($__internal_6122a6126e823ec1a5efa7c0165c5f89ca51c291270f14cb55306642af81e452_prof);

        
        $__internal_d38c11f2d185b403f04ba03dbb626b68eacf7fd105b9b6acdc8e157fa7f43504->leave($__internal_d38c11f2d185b403f04ba03dbb626b68eacf7fd105b9b6acdc8e157fa7f43504_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab12212c37f021ef652575509491d036e825ef9d511fdcce65e8c95b891a85b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab12212c37f021ef652575509491d036e825ef9d511fdcce65e8c95b891a85b4->enter($__internal_ab12212c37f021ef652575509491d036e825ef9d511fdcce65e8c95b891a85b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1806182d748ae93001e2d5b1a62beb1d5a73f8e9a5905daa82e4bde301bfd797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1806182d748ae93001e2d5b1a62beb1d5a73f8e9a5905daa82e4bde301bfd797->enter($__internal_1806182d748ae93001e2d5b1a62beb1d5a73f8e9a5905daa82e4bde301bfd797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1806182d748ae93001e2d5b1a62beb1d5a73f8e9a5905daa82e4bde301bfd797->leave($__internal_1806182d748ae93001e2d5b1a62beb1d5a73f8e9a5905daa82e4bde301bfd797_prof);

        
        $__internal_ab12212c37f021ef652575509491d036e825ef9d511fdcce65e8c95b891a85b4->leave($__internal_ab12212c37f021ef652575509491d036e825ef9d511fdcce65e8c95b891a85b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
