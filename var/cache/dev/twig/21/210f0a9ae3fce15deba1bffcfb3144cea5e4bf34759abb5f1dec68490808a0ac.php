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
        $__internal_f5dbc07b9435dd55480ab3ff45cc51e32d46f93815c831274ae080eea6963d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dbc07b9435dd55480ab3ff45cc51e32d46f93815c831274ae080eea6963d96->enter($__internal_f5dbc07b9435dd55480ab3ff45cc51e32d46f93815c831274ae080eea6963d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_dfe75a9dd0ae95b1d7d7d25080599b7c6ce7cc71c18c4a6e88e860e88ac84186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe75a9dd0ae95b1d7d7d25080599b7c6ce7cc71c18c4a6e88e860e88ac84186->enter($__internal_dfe75a9dd0ae95b1d7d7d25080599b7c6ce7cc71c18c4a6e88e860e88ac84186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5dbc07b9435dd55480ab3ff45cc51e32d46f93815c831274ae080eea6963d96->leave($__internal_f5dbc07b9435dd55480ab3ff45cc51e32d46f93815c831274ae080eea6963d96_prof);

        
        $__internal_dfe75a9dd0ae95b1d7d7d25080599b7c6ce7cc71c18c4a6e88e860e88ac84186->leave($__internal_dfe75a9dd0ae95b1d7d7d25080599b7c6ce7cc71c18c4a6e88e860e88ac84186_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_754af8e8ab06c0fbfd5f36452cf400d565704e95cd6c4bdf6db8b5b5905061bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754af8e8ab06c0fbfd5f36452cf400d565704e95cd6c4bdf6db8b5b5905061bc->enter($__internal_754af8e8ab06c0fbfd5f36452cf400d565704e95cd6c4bdf6db8b5b5905061bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d40bae3a82b50e35132a647c70e0ef9870da7566af5b1a8bc9b9e6d8de6cd779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40bae3a82b50e35132a647c70e0ef9870da7566af5b1a8bc9b9e6d8de6cd779->enter($__internal_d40bae3a82b50e35132a647c70e0ef9870da7566af5b1a8bc9b9e6d8de6cd779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d40bae3a82b50e35132a647c70e0ef9870da7566af5b1a8bc9b9e6d8de6cd779->leave($__internal_d40bae3a82b50e35132a647c70e0ef9870da7566af5b1a8bc9b9e6d8de6cd779_prof);

        
        $__internal_754af8e8ab06c0fbfd5f36452cf400d565704e95cd6c4bdf6db8b5b5905061bc->leave($__internal_754af8e8ab06c0fbfd5f36452cf400d565704e95cd6c4bdf6db8b5b5905061bc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_371eaa6ce87fe53758a2b4b26b6f78174dc4b2be0781cf317216f1ac157b8970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371eaa6ce87fe53758a2b4b26b6f78174dc4b2be0781cf317216f1ac157b8970->enter($__internal_371eaa6ce87fe53758a2b4b26b6f78174dc4b2be0781cf317216f1ac157b8970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_491077f55534c88d9adaecc7d9f84f364e5a63a5d9b2164c636283d75e98f996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491077f55534c88d9adaecc7d9f84f364e5a63a5d9b2164c636283d75e98f996->enter($__internal_491077f55534c88d9adaecc7d9f84f364e5a63a5d9b2164c636283d75e98f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_491077f55534c88d9adaecc7d9f84f364e5a63a5d9b2164c636283d75e98f996->leave($__internal_491077f55534c88d9adaecc7d9f84f364e5a63a5d9b2164c636283d75e98f996_prof);

        
        $__internal_371eaa6ce87fe53758a2b4b26b6f78174dc4b2be0781cf317216f1ac157b8970->leave($__internal_371eaa6ce87fe53758a2b4b26b6f78174dc4b2be0781cf317216f1ac157b8970_prof);

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
