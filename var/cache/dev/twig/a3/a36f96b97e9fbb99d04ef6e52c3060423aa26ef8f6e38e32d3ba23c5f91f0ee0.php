<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d181e90151c7f4f75e82a6c017a43c025490c0eb156a84345f2b1d5f879fef92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_7e7143368fef65ce0e8f12574e941536c2b7663efeafb1baaa62d2a4239d2fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7143368fef65ce0e8f12574e941536c2b7663efeafb1baaa62d2a4239d2fc0->enter($__internal_7e7143368fef65ce0e8f12574e941536c2b7663efeafb1baaa62d2a4239d2fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_505211c977046939c09cf37823fc46948f665d24a87a41c5980f748ddc88e69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505211c977046939c09cf37823fc46948f665d24a87a41c5980f748ddc88e69a->enter($__internal_505211c977046939c09cf37823fc46948f665d24a87a41c5980f748ddc88e69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7143368fef65ce0e8f12574e941536c2b7663efeafb1baaa62d2a4239d2fc0->leave($__internal_7e7143368fef65ce0e8f12574e941536c2b7663efeafb1baaa62d2a4239d2fc0_prof);

        
        $__internal_505211c977046939c09cf37823fc46948f665d24a87a41c5980f748ddc88e69a->leave($__internal_505211c977046939c09cf37823fc46948f665d24a87a41c5980f748ddc88e69a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9402268193d97b6133a72f69378714a0e984a10229e090baf53743b711e6965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9402268193d97b6133a72f69378714a0e984a10229e090baf53743b711e6965->enter($__internal_e9402268193d97b6133a72f69378714a0e984a10229e090baf53743b711e6965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b4bd36ce7ae68064734d8033ca4976c8b5e9eead3b64f800930c3d26cc45e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4bd36ce7ae68064734d8033ca4976c8b5e9eead3b64f800930c3d26cc45e8d->enter($__internal_8b4bd36ce7ae68064734d8033ca4976c8b5e9eead3b64f800930c3d26cc45e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b4bd36ce7ae68064734d8033ca4976c8b5e9eead3b64f800930c3d26cc45e8d->leave($__internal_8b4bd36ce7ae68064734d8033ca4976c8b5e9eead3b64f800930c3d26cc45e8d_prof);

        
        $__internal_e9402268193d97b6133a72f69378714a0e984a10229e090baf53743b711e6965->leave($__internal_e9402268193d97b6133a72f69378714a0e984a10229e090baf53743b711e6965_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0683a3e7a3a606b0953f0ad4eea385d8ef411972ee645fd7b5fdf0d77fc1c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0683a3e7a3a606b0953f0ad4eea385d8ef411972ee645fd7b5fdf0d77fc1c99->enter($__internal_e0683a3e7a3a606b0953f0ad4eea385d8ef411972ee645fd7b5fdf0d77fc1c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f8e209b529ebe271e5c692bb5241222bb7967f8f435ca97074160801e0eb225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8e209b529ebe271e5c692bb5241222bb7967f8f435ca97074160801e0eb225->enter($__internal_5f8e209b529ebe271e5c692bb5241222bb7967f8f435ca97074160801e0eb225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5f8e209b529ebe271e5c692bb5241222bb7967f8f435ca97074160801e0eb225->leave($__internal_5f8e209b529ebe271e5c692bb5241222bb7967f8f435ca97074160801e0eb225_prof);

        
        $__internal_e0683a3e7a3a606b0953f0ad4eea385d8ef411972ee645fd7b5fdf0d77fc1c99->leave($__internal_e0683a3e7a3a606b0953f0ad4eea385d8ef411972ee645fd7b5fdf0d77fc1c99_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a74f2a2fe53afc227d59237af89d46242a84ac9b3eaa71940f491c1452a41bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74f2a2fe53afc227d59237af89d46242a84ac9b3eaa71940f491c1452a41bec->enter($__internal_a74f2a2fe53afc227d59237af89d46242a84ac9b3eaa71940f491c1452a41bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23f7ac8ef8472b0eaeab7796ee5856b90869535bdb179597a0816a67ccf7e002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f7ac8ef8472b0eaeab7796ee5856b90869535bdb179597a0816a67ccf7e002->enter($__internal_23f7ac8ef8472b0eaeab7796ee5856b90869535bdb179597a0816a67ccf7e002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_23f7ac8ef8472b0eaeab7796ee5856b90869535bdb179597a0816a67ccf7e002->leave($__internal_23f7ac8ef8472b0eaeab7796ee5856b90869535bdb179597a0816a67ccf7e002_prof);

        
        $__internal_a74f2a2fe53afc227d59237af89d46242a84ac9b3eaa71940f491c1452a41bec->leave($__internal_a74f2a2fe53afc227d59237af89d46242a84ac9b3eaa71940f491c1452a41bec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
