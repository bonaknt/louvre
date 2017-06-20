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
        $__internal_c50984e7586960f7cee50c8f332f2d8ecfbaa8607eccfee2fa4ae51ff7b7414e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50984e7586960f7cee50c8f332f2d8ecfbaa8607eccfee2fa4ae51ff7b7414e->enter($__internal_c50984e7586960f7cee50c8f332f2d8ecfbaa8607eccfee2fa4ae51ff7b7414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e3eafb71aa21c6b85140b11d0c839fdeb56cc74352651aa58e2716c1f54a8c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3eafb71aa21c6b85140b11d0c839fdeb56cc74352651aa58e2716c1f54a8c06->enter($__internal_e3eafb71aa21c6b85140b11d0c839fdeb56cc74352651aa58e2716c1f54a8c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c50984e7586960f7cee50c8f332f2d8ecfbaa8607eccfee2fa4ae51ff7b7414e->leave($__internal_c50984e7586960f7cee50c8f332f2d8ecfbaa8607eccfee2fa4ae51ff7b7414e_prof);

        
        $__internal_e3eafb71aa21c6b85140b11d0c839fdeb56cc74352651aa58e2716c1f54a8c06->leave($__internal_e3eafb71aa21c6b85140b11d0c839fdeb56cc74352651aa58e2716c1f54a8c06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b591ad2f179bb8f8a9a1b70cf22226d629d867ec2dd24dc93566e73f104856b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b591ad2f179bb8f8a9a1b70cf22226d629d867ec2dd24dc93566e73f104856b1->enter($__internal_b591ad2f179bb8f8a9a1b70cf22226d629d867ec2dd24dc93566e73f104856b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9167f332965f10b978f6ced5d7600ec5afbe67fc225805a0eaf03c4fd442a52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9167f332965f10b978f6ced5d7600ec5afbe67fc225805a0eaf03c4fd442a52b->enter($__internal_9167f332965f10b978f6ced5d7600ec5afbe67fc225805a0eaf03c4fd442a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9167f332965f10b978f6ced5d7600ec5afbe67fc225805a0eaf03c4fd442a52b->leave($__internal_9167f332965f10b978f6ced5d7600ec5afbe67fc225805a0eaf03c4fd442a52b_prof);

        
        $__internal_b591ad2f179bb8f8a9a1b70cf22226d629d867ec2dd24dc93566e73f104856b1->leave($__internal_b591ad2f179bb8f8a9a1b70cf22226d629d867ec2dd24dc93566e73f104856b1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66b7bbeb36ea2f378272c8b3b59bc4791d2de6975636ff63e0b880b8be9a4150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b7bbeb36ea2f378272c8b3b59bc4791d2de6975636ff63e0b880b8be9a4150->enter($__internal_66b7bbeb36ea2f378272c8b3b59bc4791d2de6975636ff63e0b880b8be9a4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_592989771fb1c1a4b3c562cdb1ec7751f6cb694324619e8cc21f581ffc73cfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592989771fb1c1a4b3c562cdb1ec7751f6cb694324619e8cc21f581ffc73cfa2->enter($__internal_592989771fb1c1a4b3c562cdb1ec7751f6cb694324619e8cc21f581ffc73cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_592989771fb1c1a4b3c562cdb1ec7751f6cb694324619e8cc21f581ffc73cfa2->leave($__internal_592989771fb1c1a4b3c562cdb1ec7751f6cb694324619e8cc21f581ffc73cfa2_prof);

        
        $__internal_66b7bbeb36ea2f378272c8b3b59bc4791d2de6975636ff63e0b880b8be9a4150->leave($__internal_66b7bbeb36ea2f378272c8b3b59bc4791d2de6975636ff63e0b880b8be9a4150_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d4a41e17e8af1d18f7d230cac446f0f7077ac220b1ae2a2a65e4388c028810a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4a41e17e8af1d18f7d230cac446f0f7077ac220b1ae2a2a65e4388c028810a->enter($__internal_4d4a41e17e8af1d18f7d230cac446f0f7077ac220b1ae2a2a65e4388c028810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9471eb519f82c0ef5f3e5e82961fba02ca197629c0dc6e0d9dcffddecfb5310c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9471eb519f82c0ef5f3e5e82961fba02ca197629c0dc6e0d9dcffddecfb5310c->enter($__internal_9471eb519f82c0ef5f3e5e82961fba02ca197629c0dc6e0d9dcffddecfb5310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9471eb519f82c0ef5f3e5e82961fba02ca197629c0dc6e0d9dcffddecfb5310c->leave($__internal_9471eb519f82c0ef5f3e5e82961fba02ca197629c0dc6e0d9dcffddecfb5310c_prof);

        
        $__internal_4d4a41e17e8af1d18f7d230cac446f0f7077ac220b1ae2a2a65e4388c028810a->leave($__internal_4d4a41e17e8af1d18f7d230cac446f0f7077ac220b1ae2a2a65e4388c028810a_prof);

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
