<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe420314b2ceb998422e9646b5b2725894adb289d1b846eb0520e61a5a29793b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7bc567bc36bc193a31c40d8d8a7a08348650c2725531f4c983a86457313c359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bc567bc36bc193a31c40d8d8a7a08348650c2725531f4c983a86457313c359->enter($__internal_e7bc567bc36bc193a31c40d8d8a7a08348650c2725531f4c983a86457313c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_009bd1bc33f9de5a28fa0632463348f2a155c9b2eee7045f89e816b508146f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009bd1bc33f9de5a28fa0632463348f2a155c9b2eee7045f89e816b508146f22->enter($__internal_009bd1bc33f9de5a28fa0632463348f2a155c9b2eee7045f89e816b508146f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7bc567bc36bc193a31c40d8d8a7a08348650c2725531f4c983a86457313c359->leave($__internal_e7bc567bc36bc193a31c40d8d8a7a08348650c2725531f4c983a86457313c359_prof);

        
        $__internal_009bd1bc33f9de5a28fa0632463348f2a155c9b2eee7045f89e816b508146f22->leave($__internal_009bd1bc33f9de5a28fa0632463348f2a155c9b2eee7045f89e816b508146f22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9432beea89fadf09af52b8971556ea75a13d2d96226ca18a7e6d383d5f3eeebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9432beea89fadf09af52b8971556ea75a13d2d96226ca18a7e6d383d5f3eeebc->enter($__internal_9432beea89fadf09af52b8971556ea75a13d2d96226ca18a7e6d383d5f3eeebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_396f6cfe13cd75b0a8faca64c87bf8c9c1073eb6c99659a566a613f270f6f458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396f6cfe13cd75b0a8faca64c87bf8c9c1073eb6c99659a566a613f270f6f458->enter($__internal_396f6cfe13cd75b0a8faca64c87bf8c9c1073eb6c99659a566a613f270f6f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_396f6cfe13cd75b0a8faca64c87bf8c9c1073eb6c99659a566a613f270f6f458->leave($__internal_396f6cfe13cd75b0a8faca64c87bf8c9c1073eb6c99659a566a613f270f6f458_prof);

        
        $__internal_9432beea89fadf09af52b8971556ea75a13d2d96226ca18a7e6d383d5f3eeebc->leave($__internal_9432beea89fadf09af52b8971556ea75a13d2d96226ca18a7e6d383d5f3eeebc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_572129ad3101e4bfefb7d9a639bd1bc0cb7f57ed572ad884b4133b7c1898f9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572129ad3101e4bfefb7d9a639bd1bc0cb7f57ed572ad884b4133b7c1898f9c4->enter($__internal_572129ad3101e4bfefb7d9a639bd1bc0cb7f57ed572ad884b4133b7c1898f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be2b292ce716a14157cbfde7891ab1741c6ced4c118c2c136a65b2a5a9b55e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2b292ce716a14157cbfde7891ab1741c6ced4c118c2c136a65b2a5a9b55e8e->enter($__internal_be2b292ce716a14157cbfde7891ab1741c6ced4c118c2c136a65b2a5a9b55e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be2b292ce716a14157cbfde7891ab1741c6ced4c118c2c136a65b2a5a9b55e8e->leave($__internal_be2b292ce716a14157cbfde7891ab1741c6ced4c118c2c136a65b2a5a9b55e8e_prof);

        
        $__internal_572129ad3101e4bfefb7d9a639bd1bc0cb7f57ed572ad884b4133b7c1898f9c4->leave($__internal_572129ad3101e4bfefb7d9a639bd1bc0cb7f57ed572ad884b4133b7c1898f9c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f655d6153e23f57a255b62f3594aa0354628362e7f81080b18415d4c41be453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f655d6153e23f57a255b62f3594aa0354628362e7f81080b18415d4c41be453->enter($__internal_1f655d6153e23f57a255b62f3594aa0354628362e7f81080b18415d4c41be453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_982538fcd8b69d7a7c510611aa1a5efe986cbe05d6a477576ad34d09e9d476d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982538fcd8b69d7a7c510611aa1a5efe986cbe05d6a477576ad34d09e9d476d5->enter($__internal_982538fcd8b69d7a7c510611aa1a5efe986cbe05d6a477576ad34d09e9d476d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_982538fcd8b69d7a7c510611aa1a5efe986cbe05d6a477576ad34d09e9d476d5->leave($__internal_982538fcd8b69d7a7c510611aa1a5efe986cbe05d6a477576ad34d09e9d476d5_prof);

        
        $__internal_1f655d6153e23f57a255b62f3594aa0354628362e7f81080b18415d4c41be453->leave($__internal_1f655d6153e23f57a255b62f3594aa0354628362e7f81080b18415d4c41be453_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
