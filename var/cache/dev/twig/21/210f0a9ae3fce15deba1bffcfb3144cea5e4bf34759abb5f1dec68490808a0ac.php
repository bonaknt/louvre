<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f47d858841285849d38fec45acbadfd8708b19fa0d2596a28ace2f15a601bfc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e249a75d38f7e4603a099a78cb15550570d16dcb87ae51d7944f62f9fc056e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e249a75d38f7e4603a099a78cb15550570d16dcb87ae51d7944f62f9fc056e2f->enter($__internal_e249a75d38f7e4603a099a78cb15550570d16dcb87ae51d7944f62f9fc056e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_40bc24c1ca0d7e9b4d26b28edfba4478e5db805b2df199ff3d9a3a440f282d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bc24c1ca0d7e9b4d26b28edfba4478e5db805b2df199ff3d9a3a440f282d68->enter($__internal_40bc24c1ca0d7e9b4d26b28edfba4478e5db805b2df199ff3d9a3a440f282d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e249a75d38f7e4603a099a78cb15550570d16dcb87ae51d7944f62f9fc056e2f->leave($__internal_e249a75d38f7e4603a099a78cb15550570d16dcb87ae51d7944f62f9fc056e2f_prof);

        
        $__internal_40bc24c1ca0d7e9b4d26b28edfba4478e5db805b2df199ff3d9a3a440f282d68->leave($__internal_40bc24c1ca0d7e9b4d26b28edfba4478e5db805b2df199ff3d9a3a440f282d68_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1bf371db562b831c10fc952e81b684fba8e1b2b179b585110f7b71d53ad23acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf371db562b831c10fc952e81b684fba8e1b2b179b585110f7b71d53ad23acb->enter($__internal_1bf371db562b831c10fc952e81b684fba8e1b2b179b585110f7b71d53ad23acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a7ac3b89fd57ae9a764b7b0d0ace09b9fc22a218aa1a1944986a6c65cc3b9dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ac3b89fd57ae9a764b7b0d0ace09b9fc22a218aa1a1944986a6c65cc3b9dfd->enter($__internal_a7ac3b89fd57ae9a764b7b0d0ace09b9fc22a218aa1a1944986a6c65cc3b9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a7ac3b89fd57ae9a764b7b0d0ace09b9fc22a218aa1a1944986a6c65cc3b9dfd->leave($__internal_a7ac3b89fd57ae9a764b7b0d0ace09b9fc22a218aa1a1944986a6c65cc3b9dfd_prof);

        
        $__internal_1bf371db562b831c10fc952e81b684fba8e1b2b179b585110f7b71d53ad23acb->leave($__internal_1bf371db562b831c10fc952e81b684fba8e1b2b179b585110f7b71d53ad23acb_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ff0dbc5f93076edd7e8084e444f0d9324c48ecde1eea9a31ef81ba59b70c22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff0dbc5f93076edd7e8084e444f0d9324c48ecde1eea9a31ef81ba59b70c22e->enter($__internal_7ff0dbc5f93076edd7e8084e444f0d9324c48ecde1eea9a31ef81ba59b70c22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93332c83b33767f9d2a701edbf1feed00692303888e1c8e68f07ff36ca6b69f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93332c83b33767f9d2a701edbf1feed00692303888e1c8e68f07ff36ca6b69f2->enter($__internal_93332c83b33767f9d2a701edbf1feed00692303888e1c8e68f07ff36ca6b69f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_93332c83b33767f9d2a701edbf1feed00692303888e1c8e68f07ff36ca6b69f2->leave($__internal_93332c83b33767f9d2a701edbf1feed00692303888e1c8e68f07ff36ca6b69f2_prof);

        
        $__internal_7ff0dbc5f93076edd7e8084e444f0d9324c48ecde1eea9a31ef81ba59b70c22e->leave($__internal_7ff0dbc5f93076edd7e8084e444f0d9324c48ecde1eea9a31ef81ba59b70c22e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
