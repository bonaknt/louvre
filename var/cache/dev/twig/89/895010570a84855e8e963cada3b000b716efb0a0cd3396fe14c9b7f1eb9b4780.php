<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
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
        $__internal_e2b26a92ab197f87d8e1266e5faf3670d9202669c96632e1ea6891e5e20c79a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b26a92ab197f87d8e1266e5faf3670d9202669c96632e1ea6891e5e20c79a2->enter($__internal_e2b26a92ab197f87d8e1266e5faf3670d9202669c96632e1ea6891e5e20c79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_44ba706a28337e99d8e7ea415030d984df55e098cfc44d679ca8fa97d1399382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ba706a28337e99d8e7ea415030d984df55e098cfc44d679ca8fa97d1399382->enter($__internal_44ba706a28337e99d8e7ea415030d984df55e098cfc44d679ca8fa97d1399382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b26a92ab197f87d8e1266e5faf3670d9202669c96632e1ea6891e5e20c79a2->leave($__internal_e2b26a92ab197f87d8e1266e5faf3670d9202669c96632e1ea6891e5e20c79a2_prof);

        
        $__internal_44ba706a28337e99d8e7ea415030d984df55e098cfc44d679ca8fa97d1399382->leave($__internal_44ba706a28337e99d8e7ea415030d984df55e098cfc44d679ca8fa97d1399382_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92ca02e2a44370d6c6abb123ec44b49fd14e04d8133678eba6396199df410b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ca02e2a44370d6c6abb123ec44b49fd14e04d8133678eba6396199df410b77->enter($__internal_92ca02e2a44370d6c6abb123ec44b49fd14e04d8133678eba6396199df410b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_079726d37f989e41ab9d6d875076f6d8b3f852fba7da822c72ba1fa71cfd7d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079726d37f989e41ab9d6d875076f6d8b3f852fba7da822c72ba1fa71cfd7d4f->enter($__internal_079726d37f989e41ab9d6d875076f6d8b3f852fba7da822c72ba1fa71cfd7d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_079726d37f989e41ab9d6d875076f6d8b3f852fba7da822c72ba1fa71cfd7d4f->leave($__internal_079726d37f989e41ab9d6d875076f6d8b3f852fba7da822c72ba1fa71cfd7d4f_prof);

        
        $__internal_92ca02e2a44370d6c6abb123ec44b49fd14e04d8133678eba6396199df410b77->leave($__internal_92ca02e2a44370d6c6abb123ec44b49fd14e04d8133678eba6396199df410b77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a8b32b2dc815b74737ceb59b42b4648618d29880c7d759087ef354be51b98a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8b32b2dc815b74737ceb59b42b4648618d29880c7d759087ef354be51b98a3->enter($__internal_4a8b32b2dc815b74737ceb59b42b4648618d29880c7d759087ef354be51b98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3e6a6acbbd6b9ea06b380d113fe5dc8fad8d3959c9211846eb68816ecee31f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e6a6acbbd6b9ea06b380d113fe5dc8fad8d3959c9211846eb68816ecee31f9->enter($__internal_a3e6a6acbbd6b9ea06b380d113fe5dc8fad8d3959c9211846eb68816ecee31f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a3e6a6acbbd6b9ea06b380d113fe5dc8fad8d3959c9211846eb68816ecee31f9->leave($__internal_a3e6a6acbbd6b9ea06b380d113fe5dc8fad8d3959c9211846eb68816ecee31f9_prof);

        
        $__internal_4a8b32b2dc815b74737ceb59b42b4648618d29880c7d759087ef354be51b98a3->leave($__internal_4a8b32b2dc815b74737ceb59b42b4648618d29880c7d759087ef354be51b98a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b8ee4ae3ebea31d71197921410c9e3014a10785cd91a3edeac1cc6da16251be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8ee4ae3ebea31d71197921410c9e3014a10785cd91a3edeac1cc6da16251be->enter($__internal_3b8ee4ae3ebea31d71197921410c9e3014a10785cd91a3edeac1cc6da16251be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf76cbc3ab15aa56d4b9cb7d11c8b8e80e208d233cfaa60b1275b8948b4c44ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf76cbc3ab15aa56d4b9cb7d11c8b8e80e208d233cfaa60b1275b8948b4c44ed->enter($__internal_bf76cbc3ab15aa56d4b9cb7d11c8b8e80e208d233cfaa60b1275b8948b4c44ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bf76cbc3ab15aa56d4b9cb7d11c8b8e80e208d233cfaa60b1275b8948b4c44ed->leave($__internal_bf76cbc3ab15aa56d4b9cb7d11c8b8e80e208d233cfaa60b1275b8948b4c44ed_prof);

        
        $__internal_3b8ee4ae3ebea31d71197921410c9e3014a10785cd91a3edeac1cc6da16251be->leave($__internal_3b8ee4ae3ebea31d71197921410c9e3014a10785cd91a3edeac1cc6da16251be_prof);

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
