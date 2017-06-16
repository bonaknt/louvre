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
        $__internal_a52c3014c92a3252e501a9c3df71c2cb70ee7e5c688bdeed7522c7bfc1ae49ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52c3014c92a3252e501a9c3df71c2cb70ee7e5c688bdeed7522c7bfc1ae49ee->enter($__internal_a52c3014c92a3252e501a9c3df71c2cb70ee7e5c688bdeed7522c7bfc1ae49ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e591c604e5f84b67eb8d8b609df476cd65d9411344eeece9f89c76f472c230a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e591c604e5f84b67eb8d8b609df476cd65d9411344eeece9f89c76f472c230a5->enter($__internal_e591c604e5f84b67eb8d8b609df476cd65d9411344eeece9f89c76f472c230a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52c3014c92a3252e501a9c3df71c2cb70ee7e5c688bdeed7522c7bfc1ae49ee->leave($__internal_a52c3014c92a3252e501a9c3df71c2cb70ee7e5c688bdeed7522c7bfc1ae49ee_prof);

        
        $__internal_e591c604e5f84b67eb8d8b609df476cd65d9411344eeece9f89c76f472c230a5->leave($__internal_e591c604e5f84b67eb8d8b609df476cd65d9411344eeece9f89c76f472c230a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7aaa520b2a1ecb87a98134b8dd0205a3f9b5a04854c6dc0b64d163e3e705113e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aaa520b2a1ecb87a98134b8dd0205a3f9b5a04854c6dc0b64d163e3e705113e->enter($__internal_7aaa520b2a1ecb87a98134b8dd0205a3f9b5a04854c6dc0b64d163e3e705113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68ee6a579ee93cbe6737f0c54284ab733f2f211ee2741fdf730ba8460b6f5083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee6a579ee93cbe6737f0c54284ab733f2f211ee2741fdf730ba8460b6f5083->enter($__internal_68ee6a579ee93cbe6737f0c54284ab733f2f211ee2741fdf730ba8460b6f5083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_68ee6a579ee93cbe6737f0c54284ab733f2f211ee2741fdf730ba8460b6f5083->leave($__internal_68ee6a579ee93cbe6737f0c54284ab733f2f211ee2741fdf730ba8460b6f5083_prof);

        
        $__internal_7aaa520b2a1ecb87a98134b8dd0205a3f9b5a04854c6dc0b64d163e3e705113e->leave($__internal_7aaa520b2a1ecb87a98134b8dd0205a3f9b5a04854c6dc0b64d163e3e705113e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee3c6e307f4aa18b67663f5df318a1ea79b9a05d7418b2340329cd1fda02f8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3c6e307f4aa18b67663f5df318a1ea79b9a05d7418b2340329cd1fda02f8fd->enter($__internal_ee3c6e307f4aa18b67663f5df318a1ea79b9a05d7418b2340329cd1fda02f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb3471ca6a5838b4ad33b88621fc7da714e3238f802d87d0e0e7aaae30cb2081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3471ca6a5838b4ad33b88621fc7da714e3238f802d87d0e0e7aaae30cb2081->enter($__internal_cb3471ca6a5838b4ad33b88621fc7da714e3238f802d87d0e0e7aaae30cb2081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cb3471ca6a5838b4ad33b88621fc7da714e3238f802d87d0e0e7aaae30cb2081->leave($__internal_cb3471ca6a5838b4ad33b88621fc7da714e3238f802d87d0e0e7aaae30cb2081_prof);

        
        $__internal_ee3c6e307f4aa18b67663f5df318a1ea79b9a05d7418b2340329cd1fda02f8fd->leave($__internal_ee3c6e307f4aa18b67663f5df318a1ea79b9a05d7418b2340329cd1fda02f8fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0839dcf5fb143b9c4dbc675124aadd621e85ad8fb9c4ce98bceb49b24fc16c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0839dcf5fb143b9c4dbc675124aadd621e85ad8fb9c4ce98bceb49b24fc16c98->enter($__internal_0839dcf5fb143b9c4dbc675124aadd621e85ad8fb9c4ce98bceb49b24fc16c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5078361b3b1488b43fd7be479172dcf5318d13ad4a27dd53477246d01472ba8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5078361b3b1488b43fd7be479172dcf5318d13ad4a27dd53477246d01472ba8c->enter($__internal_5078361b3b1488b43fd7be479172dcf5318d13ad4a27dd53477246d01472ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5078361b3b1488b43fd7be479172dcf5318d13ad4a27dd53477246d01472ba8c->leave($__internal_5078361b3b1488b43fd7be479172dcf5318d13ad4a27dd53477246d01472ba8c_prof);

        
        $__internal_0839dcf5fb143b9c4dbc675124aadd621e85ad8fb9c4ce98bceb49b24fc16c98->leave($__internal_0839dcf5fb143b9c4dbc675124aadd621e85ad8fb9c4ce98bceb49b24fc16c98_prof);

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
