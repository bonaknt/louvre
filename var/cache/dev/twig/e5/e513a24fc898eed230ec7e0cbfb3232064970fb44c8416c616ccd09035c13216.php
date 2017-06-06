<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eec7f2e14c815cb4b410e5ccdaba76006c4a515783a226949455616a9d3ecd55 extends Twig_Template
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
        $__internal_33444d3f6c9c0b8e1c70a1761e064630e3da0364ee4e912e831b2c3a7e5310f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33444d3f6c9c0b8e1c70a1761e064630e3da0364ee4e912e831b2c3a7e5310f3->enter($__internal_33444d3f6c9c0b8e1c70a1761e064630e3da0364ee4e912e831b2c3a7e5310f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a4fd217a8056ee0d6207cb5c161c0f491a6bf748c05770aaf526c61d13663437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fd217a8056ee0d6207cb5c161c0f491a6bf748c05770aaf526c61d13663437->enter($__internal_a4fd217a8056ee0d6207cb5c161c0f491a6bf748c05770aaf526c61d13663437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33444d3f6c9c0b8e1c70a1761e064630e3da0364ee4e912e831b2c3a7e5310f3->leave($__internal_33444d3f6c9c0b8e1c70a1761e064630e3da0364ee4e912e831b2c3a7e5310f3_prof);

        
        $__internal_a4fd217a8056ee0d6207cb5c161c0f491a6bf748c05770aaf526c61d13663437->leave($__internal_a4fd217a8056ee0d6207cb5c161c0f491a6bf748c05770aaf526c61d13663437_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94f4a22ddd0de9cc01e3196e8aac7b0053c27f68def699dcbc3ae2221fbb9e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f4a22ddd0de9cc01e3196e8aac7b0053c27f68def699dcbc3ae2221fbb9e0a->enter($__internal_94f4a22ddd0de9cc01e3196e8aac7b0053c27f68def699dcbc3ae2221fbb9e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe54cb99a75a886257507cc513a3db204e32e7a674952c551dfaab68d0bd74ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe54cb99a75a886257507cc513a3db204e32e7a674952c551dfaab68d0bd74ea->enter($__internal_fe54cb99a75a886257507cc513a3db204e32e7a674952c551dfaab68d0bd74ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe54cb99a75a886257507cc513a3db204e32e7a674952c551dfaab68d0bd74ea->leave($__internal_fe54cb99a75a886257507cc513a3db204e32e7a674952c551dfaab68d0bd74ea_prof);

        
        $__internal_94f4a22ddd0de9cc01e3196e8aac7b0053c27f68def699dcbc3ae2221fbb9e0a->leave($__internal_94f4a22ddd0de9cc01e3196e8aac7b0053c27f68def699dcbc3ae2221fbb9e0a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06d46fa3af94ed2e41474ecb49969cc4ee8563ef0bb804ffff723290a6944cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d46fa3af94ed2e41474ecb49969cc4ee8563ef0bb804ffff723290a6944cc5->enter($__internal_06d46fa3af94ed2e41474ecb49969cc4ee8563ef0bb804ffff723290a6944cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61c12471086c378e271c6fe597b40fa5c151d69cbb530b1eedfed258adc813d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c12471086c378e271c6fe597b40fa5c151d69cbb530b1eedfed258adc813d1->enter($__internal_61c12471086c378e271c6fe597b40fa5c151d69cbb530b1eedfed258adc813d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61c12471086c378e271c6fe597b40fa5c151d69cbb530b1eedfed258adc813d1->leave($__internal_61c12471086c378e271c6fe597b40fa5c151d69cbb530b1eedfed258adc813d1_prof);

        
        $__internal_06d46fa3af94ed2e41474ecb49969cc4ee8563ef0bb804ffff723290a6944cc5->leave($__internal_06d46fa3af94ed2e41474ecb49969cc4ee8563ef0bb804ffff723290a6944cc5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d50733614871aa2388421bc88dc4518103e34b2c88c4dc239b40fece745b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d50733614871aa2388421bc88dc4518103e34b2c88c4dc239b40fece745b24->enter($__internal_56d50733614871aa2388421bc88dc4518103e34b2c88c4dc239b40fece745b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_214d668ceb7b3730a773c271c9760b8317f1a4e7d5d456ff3f88b1ab4f03a589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214d668ceb7b3730a773c271c9760b8317f1a4e7d5d456ff3f88b1ab4f03a589->enter($__internal_214d668ceb7b3730a773c271c9760b8317f1a4e7d5d456ff3f88b1ab4f03a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_214d668ceb7b3730a773c271c9760b8317f1a4e7d5d456ff3f88b1ab4f03a589->leave($__internal_214d668ceb7b3730a773c271c9760b8317f1a4e7d5d456ff3f88b1ab4f03a589_prof);

        
        $__internal_56d50733614871aa2388421bc88dc4518103e34b2c88c4dc239b40fece745b24->leave($__internal_56d50733614871aa2388421bc88dc4518103e34b2c88c4dc239b40fece745b24_prof);

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
