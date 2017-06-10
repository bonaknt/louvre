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
        $__internal_e0db767cf81c6d3cfbe7182975584feade065314e8401c25769280e87b9c60c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0db767cf81c6d3cfbe7182975584feade065314e8401c25769280e87b9c60c2->enter($__internal_e0db767cf81c6d3cfbe7182975584feade065314e8401c25769280e87b9c60c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dfd27c25889a17361bcf2f12252ac7cd7b4822f3c6c7201f438ebdaddb7e1746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd27c25889a17361bcf2f12252ac7cd7b4822f3c6c7201f438ebdaddb7e1746->enter($__internal_dfd27c25889a17361bcf2f12252ac7cd7b4822f3c6c7201f438ebdaddb7e1746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0db767cf81c6d3cfbe7182975584feade065314e8401c25769280e87b9c60c2->leave($__internal_e0db767cf81c6d3cfbe7182975584feade065314e8401c25769280e87b9c60c2_prof);

        
        $__internal_dfd27c25889a17361bcf2f12252ac7cd7b4822f3c6c7201f438ebdaddb7e1746->leave($__internal_dfd27c25889a17361bcf2f12252ac7cd7b4822f3c6c7201f438ebdaddb7e1746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d65d223ee939ec91bb785ca17c17a57cebfbb32137bee54331c19321ef3aabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d65d223ee939ec91bb785ca17c17a57cebfbb32137bee54331c19321ef3aabd->enter($__internal_2d65d223ee939ec91bb785ca17c17a57cebfbb32137bee54331c19321ef3aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e84ec3152780ce2c2b17f7a2024636cc160a0f605cfee4f3f972f8421b1746dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84ec3152780ce2c2b17f7a2024636cc160a0f605cfee4f3f972f8421b1746dc->enter($__internal_e84ec3152780ce2c2b17f7a2024636cc160a0f605cfee4f3f972f8421b1746dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e84ec3152780ce2c2b17f7a2024636cc160a0f605cfee4f3f972f8421b1746dc->leave($__internal_e84ec3152780ce2c2b17f7a2024636cc160a0f605cfee4f3f972f8421b1746dc_prof);

        
        $__internal_2d65d223ee939ec91bb785ca17c17a57cebfbb32137bee54331c19321ef3aabd->leave($__internal_2d65d223ee939ec91bb785ca17c17a57cebfbb32137bee54331c19321ef3aabd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_954a1d8f6aec355d4b538fa5c22e27677bfac92bb4213a677252b8f5531676b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954a1d8f6aec355d4b538fa5c22e27677bfac92bb4213a677252b8f5531676b0->enter($__internal_954a1d8f6aec355d4b538fa5c22e27677bfac92bb4213a677252b8f5531676b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e96fceede8270587e07203604198d78a6daa929b70afe86e9eed48c1f2ce1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e96fceede8270587e07203604198d78a6daa929b70afe86e9eed48c1f2ce1a3->enter($__internal_2e96fceede8270587e07203604198d78a6daa929b70afe86e9eed48c1f2ce1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e96fceede8270587e07203604198d78a6daa929b70afe86e9eed48c1f2ce1a3->leave($__internal_2e96fceede8270587e07203604198d78a6daa929b70afe86e9eed48c1f2ce1a3_prof);

        
        $__internal_954a1d8f6aec355d4b538fa5c22e27677bfac92bb4213a677252b8f5531676b0->leave($__internal_954a1d8f6aec355d4b538fa5c22e27677bfac92bb4213a677252b8f5531676b0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6675a3ccc560c09b7407cab2005854ea67c31878068a49de1ed26bc4d003cb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6675a3ccc560c09b7407cab2005854ea67c31878068a49de1ed26bc4d003cb04->enter($__internal_6675a3ccc560c09b7407cab2005854ea67c31878068a49de1ed26bc4d003cb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e2ee3531eae22103d56fb121fb840a780452cdfac4c729afd6080e63025c656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2ee3531eae22103d56fb121fb840a780452cdfac4c729afd6080e63025c656->enter($__internal_5e2ee3531eae22103d56fb121fb840a780452cdfac4c729afd6080e63025c656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5e2ee3531eae22103d56fb121fb840a780452cdfac4c729afd6080e63025c656->leave($__internal_5e2ee3531eae22103d56fb121fb840a780452cdfac4c729afd6080e63025c656_prof);

        
        $__internal_6675a3ccc560c09b7407cab2005854ea67c31878068a49de1ed26bc4d003cb04->leave($__internal_6675a3ccc560c09b7407cab2005854ea67c31878068a49de1ed26bc4d003cb04_prof);

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
