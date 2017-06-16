<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_649cf325d293eb08fed4cff990e14100a395158cefcbe1bf5513d8f974b450a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e9a3b20a49feb7fdd8e7940303232ecb9a2b9cfcd093b9e2820c41f711199a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9a3b20a49feb7fdd8e7940303232ecb9a2b9cfcd093b9e2820c41f711199a4->enter($__internal_9e9a3b20a49feb7fdd8e7940303232ecb9a2b9cfcd093b9e2820c41f711199a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_206ea2f01cf46b01b0b56c399a18f56585b4dcc508d357e5eb5b4290fc40c306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206ea2f01cf46b01b0b56c399a18f56585b4dcc508d357e5eb5b4290fc40c306->enter($__internal_206ea2f01cf46b01b0b56c399a18f56585b4dcc508d357e5eb5b4290fc40c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9a3b20a49feb7fdd8e7940303232ecb9a2b9cfcd093b9e2820c41f711199a4->leave($__internal_9e9a3b20a49feb7fdd8e7940303232ecb9a2b9cfcd093b9e2820c41f711199a4_prof);

        
        $__internal_206ea2f01cf46b01b0b56c399a18f56585b4dcc508d357e5eb5b4290fc40c306->leave($__internal_206ea2f01cf46b01b0b56c399a18f56585b4dcc508d357e5eb5b4290fc40c306_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f70d019a360f7ca28b8e67a33fd032e665b398d4034ba2793ac52ed28ff1e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f70d019a360f7ca28b8e67a33fd032e665b398d4034ba2793ac52ed28ff1e7c->enter($__internal_9f70d019a360f7ca28b8e67a33fd032e665b398d4034ba2793ac52ed28ff1e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fa80c43b183f150bad8a2de6a248ec56f21098e7cb84a26f40471b2efec8849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa80c43b183f150bad8a2de6a248ec56f21098e7cb84a26f40471b2efec8849->enter($__internal_4fa80c43b183f150bad8a2de6a248ec56f21098e7cb84a26f40471b2efec8849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4fa80c43b183f150bad8a2de6a248ec56f21098e7cb84a26f40471b2efec8849->leave($__internal_4fa80c43b183f150bad8a2de6a248ec56f21098e7cb84a26f40471b2efec8849_prof);

        
        $__internal_9f70d019a360f7ca28b8e67a33fd032e665b398d4034ba2793ac52ed28ff1e7c->leave($__internal_9f70d019a360f7ca28b8e67a33fd032e665b398d4034ba2793ac52ed28ff1e7c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_705855c4af0f215dab1ff1a6efe7d4095c9d4ac760248cd3d5dd79aca889135c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705855c4af0f215dab1ff1a6efe7d4095c9d4ac760248cd3d5dd79aca889135c->enter($__internal_705855c4af0f215dab1ff1a6efe7d4095c9d4ac760248cd3d5dd79aca889135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_265fab81265eca02c6f9075ef0fb0d2467ec2a9a1d22a2f86af9ad1fa55f713b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265fab81265eca02c6f9075ef0fb0d2467ec2a9a1d22a2f86af9ad1fa55f713b->enter($__internal_265fab81265eca02c6f9075ef0fb0d2467ec2a9a1d22a2f86af9ad1fa55f713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_265fab81265eca02c6f9075ef0fb0d2467ec2a9a1d22a2f86af9ad1fa55f713b->leave($__internal_265fab81265eca02c6f9075ef0fb0d2467ec2a9a1d22a2f86af9ad1fa55f713b_prof);

        
        $__internal_705855c4af0f215dab1ff1a6efe7d4095c9d4ac760248cd3d5dd79aca889135c->leave($__internal_705855c4af0f215dab1ff1a6efe7d4095c9d4ac760248cd3d5dd79aca889135c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
