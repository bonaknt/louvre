<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f81ae07dc3bbc9c2df37c5bc1502322a562b58025b23a0a80196a68d98fdbc67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb0f1329a6a4f845781d5b014017643904c2a6ebae95799ae577d0ac42d509dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0f1329a6a4f845781d5b014017643904c2a6ebae95799ae577d0ac42d509dc->enter($__internal_eb0f1329a6a4f845781d5b014017643904c2a6ebae95799ae577d0ac42d509dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1c5340ba32603769fcb551bb2f221789edde69ec200e9438539da786b10f05df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5340ba32603769fcb551bb2f221789edde69ec200e9438539da786b10f05df->enter($__internal_1c5340ba32603769fcb551bb2f221789edde69ec200e9438539da786b10f05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0f1329a6a4f845781d5b014017643904c2a6ebae95799ae577d0ac42d509dc->leave($__internal_eb0f1329a6a4f845781d5b014017643904c2a6ebae95799ae577d0ac42d509dc_prof);

        
        $__internal_1c5340ba32603769fcb551bb2f221789edde69ec200e9438539da786b10f05df->leave($__internal_1c5340ba32603769fcb551bb2f221789edde69ec200e9438539da786b10f05df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc8fda6998a7845fea8fa6f8ac2d00217319b679bf3226477967685c0f3ffd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8fda6998a7845fea8fa6f8ac2d00217319b679bf3226477967685c0f3ffd44->enter($__internal_bc8fda6998a7845fea8fa6f8ac2d00217319b679bf3226477967685c0f3ffd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9873a0ce8e312f7770fc144747a1193578bef2bc5ebc901e7909077262fa811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9873a0ce8e312f7770fc144747a1193578bef2bc5ebc901e7909077262fa811c->enter($__internal_9873a0ce8e312f7770fc144747a1193578bef2bc5ebc901e7909077262fa811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9873a0ce8e312f7770fc144747a1193578bef2bc5ebc901e7909077262fa811c->leave($__internal_9873a0ce8e312f7770fc144747a1193578bef2bc5ebc901e7909077262fa811c_prof);

        
        $__internal_bc8fda6998a7845fea8fa6f8ac2d00217319b679bf3226477967685c0f3ffd44->leave($__internal_bc8fda6998a7845fea8fa6f8ac2d00217319b679bf3226477967685c0f3ffd44_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_33dfba4a8a62a0fb5c5c4cc59761e5878c127d7f9e9d8d00b318a28f61f952fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dfba4a8a62a0fb5c5c4cc59761e5878c127d7f9e9d8d00b318a28f61f952fd->enter($__internal_33dfba4a8a62a0fb5c5c4cc59761e5878c127d7f9e9d8d00b318a28f61f952fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bd15f4af2caecd6ef43f9a14516888b4737464826aa27af0e830dd06924e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd15f4af2caecd6ef43f9a14516888b4737464826aa27af0e830dd06924e28a->enter($__internal_2bd15f4af2caecd6ef43f9a14516888b4737464826aa27af0e830dd06924e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2bd15f4af2caecd6ef43f9a14516888b4737464826aa27af0e830dd06924e28a->leave($__internal_2bd15f4af2caecd6ef43f9a14516888b4737464826aa27af0e830dd06924e28a_prof);

        
        $__internal_33dfba4a8a62a0fb5c5c4cc59761e5878c127d7f9e9d8d00b318a28f61f952fd->leave($__internal_33dfba4a8a62a0fb5c5c4cc59761e5878c127d7f9e9d8d00b318a28f61f952fd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6cb36f373b526e88cd89c7f4e019d41755fa4d3e96e38a3e0cbae9e970ca8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cb36f373b526e88cd89c7f4e019d41755fa4d3e96e38a3e0cbae9e970ca8b4->enter($__internal_b6cb36f373b526e88cd89c7f4e019d41755fa4d3e96e38a3e0cbae9e970ca8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dffbb61cdbea104ae964a3f8e6b5af6651fb0686d958b9b892791bc7b974fe13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffbb61cdbea104ae964a3f8e6b5af6651fb0686d958b9b892791bc7b974fe13->enter($__internal_dffbb61cdbea104ae964a3f8e6b5af6651fb0686d958b9b892791bc7b974fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_dffbb61cdbea104ae964a3f8e6b5af6651fb0686d958b9b892791bc7b974fe13->leave($__internal_dffbb61cdbea104ae964a3f8e6b5af6651fb0686d958b9b892791bc7b974fe13_prof);

        
        $__internal_b6cb36f373b526e88cd89c7f4e019d41755fa4d3e96e38a3e0cbae9e970ca8b4->leave($__internal_b6cb36f373b526e88cd89c7f4e019d41755fa4d3e96e38a3e0cbae9e970ca8b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
