<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_dc10031aa395a89768e7c4e2f6b22d8ec29ecafeb15e092a145eb2a0989373d7 extends Twig_Template
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
        $__internal_d8adcb9e8759cc137a4a6c589fb4c78104c9ca330934dba2c1b372121d1485bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8adcb9e8759cc137a4a6c589fb4c78104c9ca330934dba2c1b372121d1485bf->enter($__internal_d8adcb9e8759cc137a4a6c589fb4c78104c9ca330934dba2c1b372121d1485bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6f7c4ca9433e97190edd8dba3026ffa234d7cb3dc12dd996d4ac2a8e7e3f1a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7c4ca9433e97190edd8dba3026ffa234d7cb3dc12dd996d4ac2a8e7e3f1a27->enter($__internal_6f7c4ca9433e97190edd8dba3026ffa234d7cb3dc12dd996d4ac2a8e7e3f1a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8adcb9e8759cc137a4a6c589fb4c78104c9ca330934dba2c1b372121d1485bf->leave($__internal_d8adcb9e8759cc137a4a6c589fb4c78104c9ca330934dba2c1b372121d1485bf_prof);

        
        $__internal_6f7c4ca9433e97190edd8dba3026ffa234d7cb3dc12dd996d4ac2a8e7e3f1a27->leave($__internal_6f7c4ca9433e97190edd8dba3026ffa234d7cb3dc12dd996d4ac2a8e7e3f1a27_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ae167388f818445bd06247e4cd6d57f9ff0e81baf74a4470a1bb1aed7763dcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae167388f818445bd06247e4cd6d57f9ff0e81baf74a4470a1bb1aed7763dcd4->enter($__internal_ae167388f818445bd06247e4cd6d57f9ff0e81baf74a4470a1bb1aed7763dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_32d62a912db888a5aa24cbffcbbeed8ad5553d96eb44d6c6d8285d872e69e457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d62a912db888a5aa24cbffcbbeed8ad5553d96eb44d6c6d8285d872e69e457->enter($__internal_32d62a912db888a5aa24cbffcbbeed8ad5553d96eb44d6c6d8285d872e69e457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_32d62a912db888a5aa24cbffcbbeed8ad5553d96eb44d6c6d8285d872e69e457->leave($__internal_32d62a912db888a5aa24cbffcbbeed8ad5553d96eb44d6c6d8285d872e69e457_prof);

        
        $__internal_ae167388f818445bd06247e4cd6d57f9ff0e81baf74a4470a1bb1aed7763dcd4->leave($__internal_ae167388f818445bd06247e4cd6d57f9ff0e81baf74a4470a1bb1aed7763dcd4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7239f1806bc32a587f79dd51891153f692820e5400068e940bf3d7a81b0eba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7239f1806bc32a587f79dd51891153f692820e5400068e940bf3d7a81b0eba7->enter($__internal_d7239f1806bc32a587f79dd51891153f692820e5400068e940bf3d7a81b0eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5c9f77881c928d34098c037c84febdc8c198c7443b1e5a5ca5f7756a0089a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c9f77881c928d34098c037c84febdc8c198c7443b1e5a5ca5f7756a0089a12->enter($__internal_c5c9f77881c928d34098c037c84febdc8c198c7443b1e5a5ca5f7756a0089a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c5c9f77881c928d34098c037c84febdc8c198c7443b1e5a5ca5f7756a0089a12->leave($__internal_c5c9f77881c928d34098c037c84febdc8c198c7443b1e5a5ca5f7756a0089a12_prof);

        
        $__internal_d7239f1806bc32a587f79dd51891153f692820e5400068e940bf3d7a81b0eba7->leave($__internal_d7239f1806bc32a587f79dd51891153f692820e5400068e940bf3d7a81b0eba7_prof);

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
