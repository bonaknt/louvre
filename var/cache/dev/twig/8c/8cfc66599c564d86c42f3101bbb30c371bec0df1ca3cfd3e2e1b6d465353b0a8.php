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
        $__internal_c5d3c1d8512a468d32c440fc801fd88a9ecad885c4c1439aa40f18c29c632089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d3c1d8512a468d32c440fc801fd88a9ecad885c4c1439aa40f18c29c632089->enter($__internal_c5d3c1d8512a468d32c440fc801fd88a9ecad885c4c1439aa40f18c29c632089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d14a0d238832f81e5a43862e07d38c39fdfc2c0c1bc713eef80e6916379ec00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d14a0d238832f81e5a43862e07d38c39fdfc2c0c1bc713eef80e6916379ec00->enter($__internal_4d14a0d238832f81e5a43862e07d38c39fdfc2c0c1bc713eef80e6916379ec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d3c1d8512a468d32c440fc801fd88a9ecad885c4c1439aa40f18c29c632089->leave($__internal_c5d3c1d8512a468d32c440fc801fd88a9ecad885c4c1439aa40f18c29c632089_prof);

        
        $__internal_4d14a0d238832f81e5a43862e07d38c39fdfc2c0c1bc713eef80e6916379ec00->leave($__internal_4d14a0d238832f81e5a43862e07d38c39fdfc2c0c1bc713eef80e6916379ec00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1822523d948d13f247de00ae3b6bc1f4168b7a8a182673e95a2aadfd7dccfba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1822523d948d13f247de00ae3b6bc1f4168b7a8a182673e95a2aadfd7dccfba2->enter($__internal_1822523d948d13f247de00ae3b6bc1f4168b7a8a182673e95a2aadfd7dccfba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21fac9b47915a48e653287fa7f512fae94d08994a352fb282495e2581aed0a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fac9b47915a48e653287fa7f512fae94d08994a352fb282495e2581aed0a59->enter($__internal_21fac9b47915a48e653287fa7f512fae94d08994a352fb282495e2581aed0a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_21fac9b47915a48e653287fa7f512fae94d08994a352fb282495e2581aed0a59->leave($__internal_21fac9b47915a48e653287fa7f512fae94d08994a352fb282495e2581aed0a59_prof);

        
        $__internal_1822523d948d13f247de00ae3b6bc1f4168b7a8a182673e95a2aadfd7dccfba2->leave($__internal_1822523d948d13f247de00ae3b6bc1f4168b7a8a182673e95a2aadfd7dccfba2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_193197f6833487234ca66d8497a1d19c530d721689cf59f33d27d7144d8069a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193197f6833487234ca66d8497a1d19c530d721689cf59f33d27d7144d8069a1->enter($__internal_193197f6833487234ca66d8497a1d19c530d721689cf59f33d27d7144d8069a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23348ba0f1a3a5a24a3dfa6d759352b37aaefa65da4dc3cb15f535fcf6eb9500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23348ba0f1a3a5a24a3dfa6d759352b37aaefa65da4dc3cb15f535fcf6eb9500->enter($__internal_23348ba0f1a3a5a24a3dfa6d759352b37aaefa65da4dc3cb15f535fcf6eb9500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_23348ba0f1a3a5a24a3dfa6d759352b37aaefa65da4dc3cb15f535fcf6eb9500->leave($__internal_23348ba0f1a3a5a24a3dfa6d759352b37aaefa65da4dc3cb15f535fcf6eb9500_prof);

        
        $__internal_193197f6833487234ca66d8497a1d19c530d721689cf59f33d27d7144d8069a1->leave($__internal_193197f6833487234ca66d8497a1d19c530d721689cf59f33d27d7144d8069a1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_267830a7c2ed7ca5f53dba3df5a4c0022274a26a402eceac914c6acfcdc563be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267830a7c2ed7ca5f53dba3df5a4c0022274a26a402eceac914c6acfcdc563be->enter($__internal_267830a7c2ed7ca5f53dba3df5a4c0022274a26a402eceac914c6acfcdc563be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49702c84053abd9d3f290e7fe14a4eac1199547230c5d22ce50f2f760c6f594f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49702c84053abd9d3f290e7fe14a4eac1199547230c5d22ce50f2f760c6f594f->enter($__internal_49702c84053abd9d3f290e7fe14a4eac1199547230c5d22ce50f2f760c6f594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_49702c84053abd9d3f290e7fe14a4eac1199547230c5d22ce50f2f760c6f594f->leave($__internal_49702c84053abd9d3f290e7fe14a4eac1199547230c5d22ce50f2f760c6f594f_prof);

        
        $__internal_267830a7c2ed7ca5f53dba3df5a4c0022274a26a402eceac914c6acfcdc563be->leave($__internal_267830a7c2ed7ca5f53dba3df5a4c0022274a26a402eceac914c6acfcdc563be_prof);

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
