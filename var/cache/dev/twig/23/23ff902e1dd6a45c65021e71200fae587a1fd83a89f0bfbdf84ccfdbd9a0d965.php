<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_48b75de831ff92d32f797b4f2914857c161a659c9848ca003d40035007a7586e extends Twig_Template
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
        $__internal_2890cd616356e916f937973fda273ae0c5a10edd3f558e8056dbf8de1567ef53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2890cd616356e916f937973fda273ae0c5a10edd3f558e8056dbf8de1567ef53->enter($__internal_2890cd616356e916f937973fda273ae0c5a10edd3f558e8056dbf8de1567ef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d6436690748b44dc74ea0079e91331eb16969f89cd7c5e7015e3cacce2bef555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6436690748b44dc74ea0079e91331eb16969f89cd7c5e7015e3cacce2bef555->enter($__internal_d6436690748b44dc74ea0079e91331eb16969f89cd7c5e7015e3cacce2bef555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2890cd616356e916f937973fda273ae0c5a10edd3f558e8056dbf8de1567ef53->leave($__internal_2890cd616356e916f937973fda273ae0c5a10edd3f558e8056dbf8de1567ef53_prof);

        
        $__internal_d6436690748b44dc74ea0079e91331eb16969f89cd7c5e7015e3cacce2bef555->leave($__internal_d6436690748b44dc74ea0079e91331eb16969f89cd7c5e7015e3cacce2bef555_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_42af4f28b88f5d40c2deff8ebe068a33e4eb95241c6a21c269325d449773754a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42af4f28b88f5d40c2deff8ebe068a33e4eb95241c6a21c269325d449773754a->enter($__internal_42af4f28b88f5d40c2deff8ebe068a33e4eb95241c6a21c269325d449773754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c8875d70490cb2fa06870945c333f5e174c94d17c314fb5dd835532e547a204c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8875d70490cb2fa06870945c333f5e174c94d17c314fb5dd835532e547a204c->enter($__internal_c8875d70490cb2fa06870945c333f5e174c94d17c314fb5dd835532e547a204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c8875d70490cb2fa06870945c333f5e174c94d17c314fb5dd835532e547a204c->leave($__internal_c8875d70490cb2fa06870945c333f5e174c94d17c314fb5dd835532e547a204c_prof);

        
        $__internal_42af4f28b88f5d40c2deff8ebe068a33e4eb95241c6a21c269325d449773754a->leave($__internal_42af4f28b88f5d40c2deff8ebe068a33e4eb95241c6a21c269325d449773754a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08d96acc09f3b831fc3d7a67054aba4b5934e265dc92c37190137552124489e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d96acc09f3b831fc3d7a67054aba4b5934e265dc92c37190137552124489e9->enter($__internal_08d96acc09f3b831fc3d7a67054aba4b5934e265dc92c37190137552124489e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41b3e3edf5c220921bb99dd5956f199f15b389793c6efbb0762d56c575a7446e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b3e3edf5c220921bb99dd5956f199f15b389793c6efbb0762d56c575a7446e->enter($__internal_41b3e3edf5c220921bb99dd5956f199f15b389793c6efbb0762d56c575a7446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_41b3e3edf5c220921bb99dd5956f199f15b389793c6efbb0762d56c575a7446e->leave($__internal_41b3e3edf5c220921bb99dd5956f199f15b389793c6efbb0762d56c575a7446e_prof);

        
        $__internal_08d96acc09f3b831fc3d7a67054aba4b5934e265dc92c37190137552124489e9->leave($__internal_08d96acc09f3b831fc3d7a67054aba4b5934e265dc92c37190137552124489e9_prof);

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
