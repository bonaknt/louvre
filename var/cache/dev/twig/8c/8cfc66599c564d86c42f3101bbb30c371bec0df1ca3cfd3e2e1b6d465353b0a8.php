<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_305ee95aa3a1004d996b8ae0010fbd03f55d19bef6492bd35ccbc29e777067a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56ca50a71b5b4af603ffcb9890cbd460b94b19ee7b888be7ca29c6f935f8e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56ca50a71b5b4af603ffcb9890cbd460b94b19ee7b888be7ca29c6f935f8e27->enter($__internal_b56ca50a71b5b4af603ffcb9890cbd460b94b19ee7b888be7ca29c6f935f8e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3007378b5059c6a72ffc6fc2294c8e964c53c8224767e148cbc65cd27d96be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3007378b5059c6a72ffc6fc2294c8e964c53c8224767e148cbc65cd27d96be0f->enter($__internal_3007378b5059c6a72ffc6fc2294c8e964c53c8224767e148cbc65cd27d96be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56ca50a71b5b4af603ffcb9890cbd460b94b19ee7b888be7ca29c6f935f8e27->leave($__internal_b56ca50a71b5b4af603ffcb9890cbd460b94b19ee7b888be7ca29c6f935f8e27_prof);

        
        $__internal_3007378b5059c6a72ffc6fc2294c8e964c53c8224767e148cbc65cd27d96be0f->leave($__internal_3007378b5059c6a72ffc6fc2294c8e964c53c8224767e148cbc65cd27d96be0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30dd3fc0a305b720d5ccb90987a125478b6da757373e853ad565adb066e8a202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30dd3fc0a305b720d5ccb90987a125478b6da757373e853ad565adb066e8a202->enter($__internal_30dd3fc0a305b720d5ccb90987a125478b6da757373e853ad565adb066e8a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44197493d2cb025515d24078774cbbe01b79e4c2be776fec01de3bcbd7f9e832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44197493d2cb025515d24078774cbbe01b79e4c2be776fec01de3bcbd7f9e832->enter($__internal_44197493d2cb025515d24078774cbbe01b79e4c2be776fec01de3bcbd7f9e832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_44197493d2cb025515d24078774cbbe01b79e4c2be776fec01de3bcbd7f9e832->leave($__internal_44197493d2cb025515d24078774cbbe01b79e4c2be776fec01de3bcbd7f9e832_prof);

        
        $__internal_30dd3fc0a305b720d5ccb90987a125478b6da757373e853ad565adb066e8a202->leave($__internal_30dd3fc0a305b720d5ccb90987a125478b6da757373e853ad565adb066e8a202_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff9ba92cebc42162c7ec9a011cc4bc918db09393c752e006d8bb9f63101e8092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9ba92cebc42162c7ec9a011cc4bc918db09393c752e006d8bb9f63101e8092->enter($__internal_ff9ba92cebc42162c7ec9a011cc4bc918db09393c752e006d8bb9f63101e8092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3de3f83e7b3b205db8e805d605f69237b1c682846f3cc82a161083ae792d356d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de3f83e7b3b205db8e805d605f69237b1c682846f3cc82a161083ae792d356d->enter($__internal_3de3f83e7b3b205db8e805d605f69237b1c682846f3cc82a161083ae792d356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3de3f83e7b3b205db8e805d605f69237b1c682846f3cc82a161083ae792d356d->leave($__internal_3de3f83e7b3b205db8e805d605f69237b1c682846f3cc82a161083ae792d356d_prof);

        
        $__internal_ff9ba92cebc42162c7ec9a011cc4bc918db09393c752e006d8bb9f63101e8092->leave($__internal_ff9ba92cebc42162c7ec9a011cc4bc918db09393c752e006d8bb9f63101e8092_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfddebb717334271beb59d8aba4851fc90dedec4c7e7968122ad444a3104a3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfddebb717334271beb59d8aba4851fc90dedec4c7e7968122ad444a3104a3f8->enter($__internal_cfddebb717334271beb59d8aba4851fc90dedec4c7e7968122ad444a3104a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1b002304c71f3847f30404ae599cc53de2ffd3edda86259ea3f50b758a6c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b002304c71f3847f30404ae599cc53de2ffd3edda86259ea3f50b758a6c9a5->enter($__internal_a1b002304c71f3847f30404ae599cc53de2ffd3edda86259ea3f50b758a6c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a1b002304c71f3847f30404ae599cc53de2ffd3edda86259ea3f50b758a6c9a5->leave($__internal_a1b002304c71f3847f30404ae599cc53de2ffd3edda86259ea3f50b758a6c9a5_prof);

        
        $__internal_cfddebb717334271beb59d8aba4851fc90dedec4c7e7968122ad444a3104a3f8->leave($__internal_cfddebb717334271beb59d8aba4851fc90dedec4c7e7968122ad444a3104a3f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
