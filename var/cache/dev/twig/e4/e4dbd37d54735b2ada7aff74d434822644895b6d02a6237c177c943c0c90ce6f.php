<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_701a3216b5c64d828eecc62227fdf8c6dafb14f93f36d5dcc037971879d8cd3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8d55a79d7c761273e3000c2e0f67079d41c0308817b56a5267b58b9e410ceef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d55a79d7c761273e3000c2e0f67079d41c0308817b56a5267b58b9e410ceef->enter($__internal_b8d55a79d7c761273e3000c2e0f67079d41c0308817b56a5267b58b9e410ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_30e9c7c275ccde5d8eb0239add7197eda0933ee7e096693584d7a3b08b0c0b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e9c7c275ccde5d8eb0239add7197eda0933ee7e096693584d7a3b08b0c0b23->enter($__internal_30e9c7c275ccde5d8eb0239add7197eda0933ee7e096693584d7a3b08b0c0b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b8d55a79d7c761273e3000c2e0f67079d41c0308817b56a5267b58b9e410ceef->leave($__internal_b8d55a79d7c761273e3000c2e0f67079d41c0308817b56a5267b58b9e410ceef_prof);

        
        $__internal_30e9c7c275ccde5d8eb0239add7197eda0933ee7e096693584d7a3b08b0c0b23->leave($__internal_30e9c7c275ccde5d8eb0239add7197eda0933ee7e096693584d7a3b08b0c0b23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
