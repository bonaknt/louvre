<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7357580a96111af421867eee96055d6d928a6eed6c89fedc88d05d0c3c77d3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_40b5585fd45b3e3363e794db3443ffb33a4bfad81b50e67c5323d1c922d865c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b5585fd45b3e3363e794db3443ffb33a4bfad81b50e67c5323d1c922d865c1->enter($__internal_40b5585fd45b3e3363e794db3443ffb33a4bfad81b50e67c5323d1c922d865c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ebaba8be49a8b74fc19a7bfd2f222ab093cc4f98355a8b375c2e105a9708d732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaba8be49a8b74fc19a7bfd2f222ab093cc4f98355a8b375c2e105a9708d732->enter($__internal_ebaba8be49a8b74fc19a7bfd2f222ab093cc4f98355a8b375c2e105a9708d732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b5585fd45b3e3363e794db3443ffb33a4bfad81b50e67c5323d1c922d865c1->leave($__internal_40b5585fd45b3e3363e794db3443ffb33a4bfad81b50e67c5323d1c922d865c1_prof);

        
        $__internal_ebaba8be49a8b74fc19a7bfd2f222ab093cc4f98355a8b375c2e105a9708d732->leave($__internal_ebaba8be49a8b74fc19a7bfd2f222ab093cc4f98355a8b375c2e105a9708d732_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c13eee3f515c34e47981d6cc097dd1a52a4b96ac873e56e4d0ad4c97eb98f526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13eee3f515c34e47981d6cc097dd1a52a4b96ac873e56e4d0ad4c97eb98f526->enter($__internal_c13eee3f515c34e47981d6cc097dd1a52a4b96ac873e56e4d0ad4c97eb98f526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c852131a69afb3c0d934711e300e4ede46252dcd40fd5e5935d8b34b46f4c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c852131a69afb3c0d934711e300e4ede46252dcd40fd5e5935d8b34b46f4c34->enter($__internal_0c852131a69afb3c0d934711e300e4ede46252dcd40fd5e5935d8b34b46f4c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0c852131a69afb3c0d934711e300e4ede46252dcd40fd5e5935d8b34b46f4c34->leave($__internal_0c852131a69afb3c0d934711e300e4ede46252dcd40fd5e5935d8b34b46f4c34_prof);

        
        $__internal_c13eee3f515c34e47981d6cc097dd1a52a4b96ac873e56e4d0ad4c97eb98f526->leave($__internal_c13eee3f515c34e47981d6cc097dd1a52a4b96ac873e56e4d0ad4c97eb98f526_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8510c9e017661dd3628801a26d1dd3b69106213422107aefa4ab054a24e0ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8510c9e017661dd3628801a26d1dd3b69106213422107aefa4ab054a24e0ffc->enter($__internal_e8510c9e017661dd3628801a26d1dd3b69106213422107aefa4ab054a24e0ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d5f1d5eb9398cb9505dc8a66343fe9f9c7c4f8e1882c39a2dcd5483708d2232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5f1d5eb9398cb9505dc8a66343fe9f9c7c4f8e1882c39a2dcd5483708d2232->enter($__internal_5d5f1d5eb9398cb9505dc8a66343fe9f9c7c4f8e1882c39a2dcd5483708d2232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d5f1d5eb9398cb9505dc8a66343fe9f9c7c4f8e1882c39a2dcd5483708d2232->leave($__internal_5d5f1d5eb9398cb9505dc8a66343fe9f9c7c4f8e1882c39a2dcd5483708d2232_prof);

        
        $__internal_e8510c9e017661dd3628801a26d1dd3b69106213422107aefa4ab054a24e0ffc->leave($__internal_e8510c9e017661dd3628801a26d1dd3b69106213422107aefa4ab054a24e0ffc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d054c80957fdcd4796738d878e15671b1ec2a539ae6303e413ab64e98eff93c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d054c80957fdcd4796738d878e15671b1ec2a539ae6303e413ab64e98eff93c6->enter($__internal_d054c80957fdcd4796738d878e15671b1ec2a539ae6303e413ab64e98eff93c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31c71740e7eafc760fdf8e48400a51c4cab286473d9a9a57b6856ded54e1ea9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c71740e7eafc760fdf8e48400a51c4cab286473d9a9a57b6856ded54e1ea9a->enter($__internal_31c71740e7eafc760fdf8e48400a51c4cab286473d9a9a57b6856ded54e1ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_31c71740e7eafc760fdf8e48400a51c4cab286473d9a9a57b6856ded54e1ea9a->leave($__internal_31c71740e7eafc760fdf8e48400a51c4cab286473d9a9a57b6856ded54e1ea9a_prof);

        
        $__internal_d054c80957fdcd4796738d878e15671b1ec2a539ae6303e413ab64e98eff93c6->leave($__internal_d054c80957fdcd4796738d878e15671b1ec2a539ae6303e413ab64e98eff93c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
