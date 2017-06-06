<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d97ad0b7db000e73054c53f19b845681432a7563cd7b7fb402ca1d07f967724a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3c52480c331ed603371b581ae12f477f7b83c28fc5c1fcc82e7471f2dfc9bf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c52480c331ed603371b581ae12f477f7b83c28fc5c1fcc82e7471f2dfc9bf4f->enter($__internal_3c52480c331ed603371b581ae12f477f7b83c28fc5c1fcc82e7471f2dfc9bf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8223f6765a7dc70f0b214004bbd3da509aac2eccc67125c8c95ac5392f95bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8223f6765a7dc70f0b214004bbd3da509aac2eccc67125c8c95ac5392f95bdd0->enter($__internal_8223f6765a7dc70f0b214004bbd3da509aac2eccc67125c8c95ac5392f95bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c52480c331ed603371b581ae12f477f7b83c28fc5c1fcc82e7471f2dfc9bf4f->leave($__internal_3c52480c331ed603371b581ae12f477f7b83c28fc5c1fcc82e7471f2dfc9bf4f_prof);

        
        $__internal_8223f6765a7dc70f0b214004bbd3da509aac2eccc67125c8c95ac5392f95bdd0->leave($__internal_8223f6765a7dc70f0b214004bbd3da509aac2eccc67125c8c95ac5392f95bdd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b854a9ed0b45fb2ce2f2a9796bc10cfb02dcbd24ab4d45f66a75ca5e9f73df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b854a9ed0b45fb2ce2f2a9796bc10cfb02dcbd24ab4d45f66a75ca5e9f73df4->enter($__internal_9b854a9ed0b45fb2ce2f2a9796bc10cfb02dcbd24ab4d45f66a75ca5e9f73df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0319189c04bdb0b103e541d6dfdb051f0eb7aa6362989cb584d6662885c04180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0319189c04bdb0b103e541d6dfdb051f0eb7aa6362989cb584d6662885c04180->enter($__internal_0319189c04bdb0b103e541d6dfdb051f0eb7aa6362989cb584d6662885c04180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0319189c04bdb0b103e541d6dfdb051f0eb7aa6362989cb584d6662885c04180->leave($__internal_0319189c04bdb0b103e541d6dfdb051f0eb7aa6362989cb584d6662885c04180_prof);

        
        $__internal_9b854a9ed0b45fb2ce2f2a9796bc10cfb02dcbd24ab4d45f66a75ca5e9f73df4->leave($__internal_9b854a9ed0b45fb2ce2f2a9796bc10cfb02dcbd24ab4d45f66a75ca5e9f73df4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32fab2dd9776b39cf1b831c4c1b8062f14e4beaa8721f5af9a86aa4980859aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fab2dd9776b39cf1b831c4c1b8062f14e4beaa8721f5af9a86aa4980859aa6->enter($__internal_32fab2dd9776b39cf1b831c4c1b8062f14e4beaa8721f5af9a86aa4980859aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc112146809bcf3f1bf17370735b9f4991c8c54b706f98c272476beb71b8489a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc112146809bcf3f1bf17370735b9f4991c8c54b706f98c272476beb71b8489a->enter($__internal_fc112146809bcf3f1bf17370735b9f4991c8c54b706f98c272476beb71b8489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fc112146809bcf3f1bf17370735b9f4991c8c54b706f98c272476beb71b8489a->leave($__internal_fc112146809bcf3f1bf17370735b9f4991c8c54b706f98c272476beb71b8489a_prof);

        
        $__internal_32fab2dd9776b39cf1b831c4c1b8062f14e4beaa8721f5af9a86aa4980859aa6->leave($__internal_32fab2dd9776b39cf1b831c4c1b8062f14e4beaa8721f5af9a86aa4980859aa6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
