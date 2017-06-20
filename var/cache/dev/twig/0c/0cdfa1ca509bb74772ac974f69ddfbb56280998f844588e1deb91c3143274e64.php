<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7e5ca330f3fce4af0417543e3c9cd45bbbae218da87050d7e324b074d557ac1e extends Twig_Template
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
        $__internal_7af2c6e04b3a78b9cc3a41e70cb0113be36c4a6fcef1783d325491a68e51f018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af2c6e04b3a78b9cc3a41e70cb0113be36c4a6fcef1783d325491a68e51f018->enter($__internal_7af2c6e04b3a78b9cc3a41e70cb0113be36c4a6fcef1783d325491a68e51f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_db5ea5b33c0fc5e495a2b8b89d5e3fa2a6975c06a653a857b6e64a23eb13c8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5ea5b33c0fc5e495a2b8b89d5e3fa2a6975c06a653a857b6e64a23eb13c8d6->enter($__internal_db5ea5b33c0fc5e495a2b8b89d5e3fa2a6975c06a653a857b6e64a23eb13c8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af2c6e04b3a78b9cc3a41e70cb0113be36c4a6fcef1783d325491a68e51f018->leave($__internal_7af2c6e04b3a78b9cc3a41e70cb0113be36c4a6fcef1783d325491a68e51f018_prof);

        
        $__internal_db5ea5b33c0fc5e495a2b8b89d5e3fa2a6975c06a653a857b6e64a23eb13c8d6->leave($__internal_db5ea5b33c0fc5e495a2b8b89d5e3fa2a6975c06a653a857b6e64a23eb13c8d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36393b37519a17078f41c81be6716171075d202ecc8ee51dabac97468a6dc7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36393b37519a17078f41c81be6716171075d202ecc8ee51dabac97468a6dc7dc->enter($__internal_36393b37519a17078f41c81be6716171075d202ecc8ee51dabac97468a6dc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4d2f2e0ec7f200f6444abecb70d20af6157348c209305415329fe96dc10f7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d2f2e0ec7f200f6444abecb70d20af6157348c209305415329fe96dc10f7fc->enter($__internal_d4d2f2e0ec7f200f6444abecb70d20af6157348c209305415329fe96dc10f7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d4d2f2e0ec7f200f6444abecb70d20af6157348c209305415329fe96dc10f7fc->leave($__internal_d4d2f2e0ec7f200f6444abecb70d20af6157348c209305415329fe96dc10f7fc_prof);

        
        $__internal_36393b37519a17078f41c81be6716171075d202ecc8ee51dabac97468a6dc7dc->leave($__internal_36393b37519a17078f41c81be6716171075d202ecc8ee51dabac97468a6dc7dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c0672869e391a21082342b559da3c8a97221ea54b07d4ece9648aca2bd99271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0672869e391a21082342b559da3c8a97221ea54b07d4ece9648aca2bd99271->enter($__internal_8c0672869e391a21082342b559da3c8a97221ea54b07d4ece9648aca2bd99271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b317ea0a5cb353f6b149ecaaa9f0a03c07b24638059cb297cff0fdaab6adb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b317ea0a5cb353f6b149ecaaa9f0a03c07b24638059cb297cff0fdaab6adb09->enter($__internal_2b317ea0a5cb353f6b149ecaaa9f0a03c07b24638059cb297cff0fdaab6adb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2b317ea0a5cb353f6b149ecaaa9f0a03c07b24638059cb297cff0fdaab6adb09->leave($__internal_2b317ea0a5cb353f6b149ecaaa9f0a03c07b24638059cb297cff0fdaab6adb09_prof);

        
        $__internal_8c0672869e391a21082342b559da3c8a97221ea54b07d4ece9648aca2bd99271->leave($__internal_8c0672869e391a21082342b559da3c8a97221ea54b07d4ece9648aca2bd99271_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17f3aa59b038ef1c91da23160cc6ba80499ed0f2fa8ebacc44428f0ae936ff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f3aa59b038ef1c91da23160cc6ba80499ed0f2fa8ebacc44428f0ae936ff11->enter($__internal_17f3aa59b038ef1c91da23160cc6ba80499ed0f2fa8ebacc44428f0ae936ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6358e89cdd5b1396959b393725acb0554b704d03f14f75d4661140d5c092707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6358e89cdd5b1396959b393725acb0554b704d03f14f75d4661140d5c092707d->enter($__internal_6358e89cdd5b1396959b393725acb0554b704d03f14f75d4661140d5c092707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6358e89cdd5b1396959b393725acb0554b704d03f14f75d4661140d5c092707d->leave($__internal_6358e89cdd5b1396959b393725acb0554b704d03f14f75d4661140d5c092707d_prof);

        
        $__internal_17f3aa59b038ef1c91da23160cc6ba80499ed0f2fa8ebacc44428f0ae936ff11->leave($__internal_17f3aa59b038ef1c91da23160cc6ba80499ed0f2fa8ebacc44428f0ae936ff11_prof);

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
