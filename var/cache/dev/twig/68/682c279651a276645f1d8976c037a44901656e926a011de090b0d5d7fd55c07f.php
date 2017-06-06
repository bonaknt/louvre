<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7fa301137c70abe5968c877eb4d3b2dc2980a891691ac47cae0c0cb63083ffee extends Twig_Template
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
        $__internal_c020020dfff4712f295bbbf87086036b25ae867391fdc2656273ceee986c93b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c020020dfff4712f295bbbf87086036b25ae867391fdc2656273ceee986c93b5->enter($__internal_c020020dfff4712f295bbbf87086036b25ae867391fdc2656273ceee986c93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_1dedb8da79f51774f39c2a475de8b02701c2c9da8e96ccf8edcd5c81f6ccbde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dedb8da79f51774f39c2a475de8b02701c2c9da8e96ccf8edcd5c81f6ccbde1->enter($__internal_1dedb8da79f51774f39c2a475de8b02701c2c9da8e96ccf8edcd5c81f6ccbde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_c020020dfff4712f295bbbf87086036b25ae867391fdc2656273ceee986c93b5->leave($__internal_c020020dfff4712f295bbbf87086036b25ae867391fdc2656273ceee986c93b5_prof);

        
        $__internal_1dedb8da79f51774f39c2a475de8b02701c2c9da8e96ccf8edcd5c81f6ccbde1->leave($__internal_1dedb8da79f51774f39c2a475de8b02701c2c9da8e96ccf8edcd5c81f6ccbde1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
