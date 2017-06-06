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
        $__internal_b8720fd287d04cefe6f2ac4469928253c1c0d69fef321a87f076ed3262d2ca2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8720fd287d04cefe6f2ac4469928253c1c0d69fef321a87f076ed3262d2ca2c->enter($__internal_b8720fd287d04cefe6f2ac4469928253c1c0d69fef321a87f076ed3262d2ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d0746e5398320022b9bc91cb2113c9f738533b1b86b580eb41a2ad623ca2f810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0746e5398320022b9bc91cb2113c9f738533b1b86b580eb41a2ad623ca2f810->enter($__internal_d0746e5398320022b9bc91cb2113c9f738533b1b86b580eb41a2ad623ca2f810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8720fd287d04cefe6f2ac4469928253c1c0d69fef321a87f076ed3262d2ca2c->leave($__internal_b8720fd287d04cefe6f2ac4469928253c1c0d69fef321a87f076ed3262d2ca2c_prof);

        
        $__internal_d0746e5398320022b9bc91cb2113c9f738533b1b86b580eb41a2ad623ca2f810->leave($__internal_d0746e5398320022b9bc91cb2113c9f738533b1b86b580eb41a2ad623ca2f810_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cd37432c17fe6214be83206db95221f49a0bb922aefcbf5458e3c538cb91f0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd37432c17fe6214be83206db95221f49a0bb922aefcbf5458e3c538cb91f0e0->enter($__internal_cd37432c17fe6214be83206db95221f49a0bb922aefcbf5458e3c538cb91f0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ecad2fcc5415d380a27dcddcb87ebff9ea7d6c9ee7523c44e3d2a6588a75fa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecad2fcc5415d380a27dcddcb87ebff9ea7d6c9ee7523c44e3d2a6588a75fa48->enter($__internal_ecad2fcc5415d380a27dcddcb87ebff9ea7d6c9ee7523c44e3d2a6588a75fa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ecad2fcc5415d380a27dcddcb87ebff9ea7d6c9ee7523c44e3d2a6588a75fa48->leave($__internal_ecad2fcc5415d380a27dcddcb87ebff9ea7d6c9ee7523c44e3d2a6588a75fa48_prof);

        
        $__internal_cd37432c17fe6214be83206db95221f49a0bb922aefcbf5458e3c538cb91f0e0->leave($__internal_cd37432c17fe6214be83206db95221f49a0bb922aefcbf5458e3c538cb91f0e0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0ed39c4eee7021d966d11c08bc70dc5bffbfe4ea2a5250ad6d772cefefc22db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ed39c4eee7021d966d11c08bc70dc5bffbfe4ea2a5250ad6d772cefefc22db->enter($__internal_a0ed39c4eee7021d966d11c08bc70dc5bffbfe4ea2a5250ad6d772cefefc22db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_491f1dcf9b89521592997305c809a483ca4243d1cb57ea214a6fa1c9a9890867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491f1dcf9b89521592997305c809a483ca4243d1cb57ea214a6fa1c9a9890867->enter($__internal_491f1dcf9b89521592997305c809a483ca4243d1cb57ea214a6fa1c9a9890867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_491f1dcf9b89521592997305c809a483ca4243d1cb57ea214a6fa1c9a9890867->leave($__internal_491f1dcf9b89521592997305c809a483ca4243d1cb57ea214a6fa1c9a9890867_prof);

        
        $__internal_a0ed39c4eee7021d966d11c08bc70dc5bffbfe4ea2a5250ad6d772cefefc22db->leave($__internal_a0ed39c4eee7021d966d11c08bc70dc5bffbfe4ea2a5250ad6d772cefefc22db_prof);

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
