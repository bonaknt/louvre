<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ab1f65048f55046fe345ff0646d00f65f0f5672874e81fd7fd877f21dfdf8431 extends Twig_Template
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
        $__internal_57893563ff09595e207637bbeb85a3764f0304fcfa348b63b8afe32a4ca703df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57893563ff09595e207637bbeb85a3764f0304fcfa348b63b8afe32a4ca703df->enter($__internal_57893563ff09595e207637bbeb85a3764f0304fcfa348b63b8afe32a4ca703df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f955f61f77ce6a1caef171bf7d5a20aebcd1f07c1fa941b8bc8bbef65e569901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f955f61f77ce6a1caef171bf7d5a20aebcd1f07c1fa941b8bc8bbef65e569901->enter($__internal_f955f61f77ce6a1caef171bf7d5a20aebcd1f07c1fa941b8bc8bbef65e569901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_57893563ff09595e207637bbeb85a3764f0304fcfa348b63b8afe32a4ca703df->leave($__internal_57893563ff09595e207637bbeb85a3764f0304fcfa348b63b8afe32a4ca703df_prof);

        
        $__internal_f955f61f77ce6a1caef171bf7d5a20aebcd1f07c1fa941b8bc8bbef65e569901->leave($__internal_f955f61f77ce6a1caef171bf7d5a20aebcd1f07c1fa941b8bc8bbef65e569901_prof);

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
