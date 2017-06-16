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
        $__internal_31037cb02577542fcbf2938752cdf7e165143f10bd9fc1464ac1038393bbf210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31037cb02577542fcbf2938752cdf7e165143f10bd9fc1464ac1038393bbf210->enter($__internal_31037cb02577542fcbf2938752cdf7e165143f10bd9fc1464ac1038393bbf210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cda39645e8537ba6cf815341438bb9451a999245d95efbf3bbd78e0d88424a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda39645e8537ba6cf815341438bb9451a999245d95efbf3bbd78e0d88424a6e->enter($__internal_cda39645e8537ba6cf815341438bb9451a999245d95efbf3bbd78e0d88424a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31037cb02577542fcbf2938752cdf7e165143f10bd9fc1464ac1038393bbf210->leave($__internal_31037cb02577542fcbf2938752cdf7e165143f10bd9fc1464ac1038393bbf210_prof);

        
        $__internal_cda39645e8537ba6cf815341438bb9451a999245d95efbf3bbd78e0d88424a6e->leave($__internal_cda39645e8537ba6cf815341438bb9451a999245d95efbf3bbd78e0d88424a6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_172ed2fb7b1b33b7ed855cd62e59a78e45937fa06fff1176f4398ddf8a947eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172ed2fb7b1b33b7ed855cd62e59a78e45937fa06fff1176f4398ddf8a947eda->enter($__internal_172ed2fb7b1b33b7ed855cd62e59a78e45937fa06fff1176f4398ddf8a947eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d3f0268d5690f1c044bce56deebaa0e9340298a0bf2df56f9725caf162c43ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3f0268d5690f1c044bce56deebaa0e9340298a0bf2df56f9725caf162c43ce->enter($__internal_5d3f0268d5690f1c044bce56deebaa0e9340298a0bf2df56f9725caf162c43ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5d3f0268d5690f1c044bce56deebaa0e9340298a0bf2df56f9725caf162c43ce->leave($__internal_5d3f0268d5690f1c044bce56deebaa0e9340298a0bf2df56f9725caf162c43ce_prof);

        
        $__internal_172ed2fb7b1b33b7ed855cd62e59a78e45937fa06fff1176f4398ddf8a947eda->leave($__internal_172ed2fb7b1b33b7ed855cd62e59a78e45937fa06fff1176f4398ddf8a947eda_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a3c242e349ed41ad42115484e6ded3326c644496944b98d882934582a57922c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3c242e349ed41ad42115484e6ded3326c644496944b98d882934582a57922c->enter($__internal_5a3c242e349ed41ad42115484e6ded3326c644496944b98d882934582a57922c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9257f1b43a1f91620862750cd38f8520ede5df4b91b5c78b0707ffb5153f8a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9257f1b43a1f91620862750cd38f8520ede5df4b91b5c78b0707ffb5153f8a71->enter($__internal_9257f1b43a1f91620862750cd38f8520ede5df4b91b5c78b0707ffb5153f8a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9257f1b43a1f91620862750cd38f8520ede5df4b91b5c78b0707ffb5153f8a71->leave($__internal_9257f1b43a1f91620862750cd38f8520ede5df4b91b5c78b0707ffb5153f8a71_prof);

        
        $__internal_5a3c242e349ed41ad42115484e6ded3326c644496944b98d882934582a57922c->leave($__internal_5a3c242e349ed41ad42115484e6ded3326c644496944b98d882934582a57922c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1629af8cdd2d6250bcb61e91124836213a69e3cdc430e55d91462146a0b6b485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1629af8cdd2d6250bcb61e91124836213a69e3cdc430e55d91462146a0b6b485->enter($__internal_1629af8cdd2d6250bcb61e91124836213a69e3cdc430e55d91462146a0b6b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e9b32b9d1162889a61d4bcaddce47ede910fd688d99788268e77a35ca100d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9b32b9d1162889a61d4bcaddce47ede910fd688d99788268e77a35ca100d6e->enter($__internal_8e9b32b9d1162889a61d4bcaddce47ede910fd688d99788268e77a35ca100d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8e9b32b9d1162889a61d4bcaddce47ede910fd688d99788268e77a35ca100d6e->leave($__internal_8e9b32b9d1162889a61d4bcaddce47ede910fd688d99788268e77a35ca100d6e_prof);

        
        $__internal_1629af8cdd2d6250bcb61e91124836213a69e3cdc430e55d91462146a0b6b485->leave($__internal_1629af8cdd2d6250bcb61e91124836213a69e3cdc430e55d91462146a0b6b485_prof);

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
