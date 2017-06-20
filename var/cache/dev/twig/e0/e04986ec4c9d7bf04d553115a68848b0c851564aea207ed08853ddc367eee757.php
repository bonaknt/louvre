<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cd8b2d9d0b847e1178f5bd1ae1468c6c5f863e04e1ee92727d186f996094bf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_57ac64006256fcc7790bbb3e536c4f9fcca1e3152f924d1f292053086161eb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ac64006256fcc7790bbb3e536c4f9fcca1e3152f924d1f292053086161eb90->enter($__internal_57ac64006256fcc7790bbb3e536c4f9fcca1e3152f924d1f292053086161eb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1ed00c783eeab2740d350b27b02ab1d4a231afd3839448fa0d28a5cd8a0ba526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed00c783eeab2740d350b27b02ab1d4a231afd3839448fa0d28a5cd8a0ba526->enter($__internal_1ed00c783eeab2740d350b27b02ab1d4a231afd3839448fa0d28a5cd8a0ba526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ac64006256fcc7790bbb3e536c4f9fcca1e3152f924d1f292053086161eb90->leave($__internal_57ac64006256fcc7790bbb3e536c4f9fcca1e3152f924d1f292053086161eb90_prof);

        
        $__internal_1ed00c783eeab2740d350b27b02ab1d4a231afd3839448fa0d28a5cd8a0ba526->leave($__internal_1ed00c783eeab2740d350b27b02ab1d4a231afd3839448fa0d28a5cd8a0ba526_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8a0c88e406bca88148b2b2e1f7ba7c925822acc8b255fa76f5328abcc1456b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0c88e406bca88148b2b2e1f7ba7c925822acc8b255fa76f5328abcc1456b41->enter($__internal_8a0c88e406bca88148b2b2e1f7ba7c925822acc8b255fa76f5328abcc1456b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_875fadfb21aded98769217fbdfa0dbb005c28054f5275a4c18267acb1571bc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875fadfb21aded98769217fbdfa0dbb005c28054f5275a4c18267acb1571bc67->enter($__internal_875fadfb21aded98769217fbdfa0dbb005c28054f5275a4c18267acb1571bc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_875fadfb21aded98769217fbdfa0dbb005c28054f5275a4c18267acb1571bc67->leave($__internal_875fadfb21aded98769217fbdfa0dbb005c28054f5275a4c18267acb1571bc67_prof);

        
        $__internal_8a0c88e406bca88148b2b2e1f7ba7c925822acc8b255fa76f5328abcc1456b41->leave($__internal_8a0c88e406bca88148b2b2e1f7ba7c925822acc8b255fa76f5328abcc1456b41_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58a6167ed16fa94be346ae52c66a37271fa824f80ddf9a0ef93b9d96b6ac0cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a6167ed16fa94be346ae52c66a37271fa824f80ddf9a0ef93b9d96b6ac0cdb->enter($__internal_58a6167ed16fa94be346ae52c66a37271fa824f80ddf9a0ef93b9d96b6ac0cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd2d0256f213081dc2ec01d5f743fcbccdf138e03f2c6c5792d20154313cd853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2d0256f213081dc2ec01d5f743fcbccdf138e03f2c6c5792d20154313cd853->enter($__internal_cd2d0256f213081dc2ec01d5f743fcbccdf138e03f2c6c5792d20154313cd853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cd2d0256f213081dc2ec01d5f743fcbccdf138e03f2c6c5792d20154313cd853->leave($__internal_cd2d0256f213081dc2ec01d5f743fcbccdf138e03f2c6c5792d20154313cd853_prof);

        
        $__internal_58a6167ed16fa94be346ae52c66a37271fa824f80ddf9a0ef93b9d96b6ac0cdb->leave($__internal_58a6167ed16fa94be346ae52c66a37271fa824f80ddf9a0ef93b9d96b6ac0cdb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
