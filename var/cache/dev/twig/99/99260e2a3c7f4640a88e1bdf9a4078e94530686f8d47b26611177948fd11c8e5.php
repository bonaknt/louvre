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
        $__internal_835e79e5af10438928b77165aa15b6860cd587174af9c18a689935603ef687a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835e79e5af10438928b77165aa15b6860cd587174af9c18a689935603ef687a5->enter($__internal_835e79e5af10438928b77165aa15b6860cd587174af9c18a689935603ef687a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_97b1d02374e0e42588245054a8e04970034f48dae267bab8137872f2bdf8ef32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b1d02374e0e42588245054a8e04970034f48dae267bab8137872f2bdf8ef32->enter($__internal_97b1d02374e0e42588245054a8e04970034f48dae267bab8137872f2bdf8ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835e79e5af10438928b77165aa15b6860cd587174af9c18a689935603ef687a5->leave($__internal_835e79e5af10438928b77165aa15b6860cd587174af9c18a689935603ef687a5_prof);

        
        $__internal_97b1d02374e0e42588245054a8e04970034f48dae267bab8137872f2bdf8ef32->leave($__internal_97b1d02374e0e42588245054a8e04970034f48dae267bab8137872f2bdf8ef32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8976d7f3cdec12818aaf1b283417c292ac7912b4a3282aa9d21671825aa8e4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8976d7f3cdec12818aaf1b283417c292ac7912b4a3282aa9d21671825aa8e4d9->enter($__internal_8976d7f3cdec12818aaf1b283417c292ac7912b4a3282aa9d21671825aa8e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd609d6a492a19840d6dd48d3cff455bf3f7dc567d4505a7d49e0372be77120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd609d6a492a19840d6dd48d3cff455bf3f7dc567d4505a7d49e0372be77120f->enter($__internal_dd609d6a492a19840d6dd48d3cff455bf3f7dc567d4505a7d49e0372be77120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd609d6a492a19840d6dd48d3cff455bf3f7dc567d4505a7d49e0372be77120f->leave($__internal_dd609d6a492a19840d6dd48d3cff455bf3f7dc567d4505a7d49e0372be77120f_prof);

        
        $__internal_8976d7f3cdec12818aaf1b283417c292ac7912b4a3282aa9d21671825aa8e4d9->leave($__internal_8976d7f3cdec12818aaf1b283417c292ac7912b4a3282aa9d21671825aa8e4d9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8056e5d195c838a89d0e00a46ec0e3333cd4f407051e70086f97126cf860b36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8056e5d195c838a89d0e00a46ec0e3333cd4f407051e70086f97126cf860b36a->enter($__internal_8056e5d195c838a89d0e00a46ec0e3333cd4f407051e70086f97126cf860b36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f5b62446ff5e5c19f88ba742c8bdb9dd39c3e88ac2d0a25790145b9f9a80148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5b62446ff5e5c19f88ba742c8bdb9dd39c3e88ac2d0a25790145b9f9a80148->enter($__internal_4f5b62446ff5e5c19f88ba742c8bdb9dd39c3e88ac2d0a25790145b9f9a80148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f5b62446ff5e5c19f88ba742c8bdb9dd39c3e88ac2d0a25790145b9f9a80148->leave($__internal_4f5b62446ff5e5c19f88ba742c8bdb9dd39c3e88ac2d0a25790145b9f9a80148_prof);

        
        $__internal_8056e5d195c838a89d0e00a46ec0e3333cd4f407051e70086f97126cf860b36a->leave($__internal_8056e5d195c838a89d0e00a46ec0e3333cd4f407051e70086f97126cf860b36a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e3b3352ea1f4941610abc004996e37e3269dfd31763a9d209778518aa18658d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3b3352ea1f4941610abc004996e37e3269dfd31763a9d209778518aa18658d->enter($__internal_2e3b3352ea1f4941610abc004996e37e3269dfd31763a9d209778518aa18658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3e4d67537c94512d0f2fd1824481ba9d7f322bd8e85587fa22dfb274ebcbf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e4d67537c94512d0f2fd1824481ba9d7f322bd8e85587fa22dfb274ebcbf3e->enter($__internal_e3e4d67537c94512d0f2fd1824481ba9d7f322bd8e85587fa22dfb274ebcbf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e3e4d67537c94512d0f2fd1824481ba9d7f322bd8e85587fa22dfb274ebcbf3e->leave($__internal_e3e4d67537c94512d0f2fd1824481ba9d7f322bd8e85587fa22dfb274ebcbf3e_prof);

        
        $__internal_2e3b3352ea1f4941610abc004996e37e3269dfd31763a9d209778518aa18658d->leave($__internal_2e3b3352ea1f4941610abc004996e37e3269dfd31763a9d209778518aa18658d_prof);

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
