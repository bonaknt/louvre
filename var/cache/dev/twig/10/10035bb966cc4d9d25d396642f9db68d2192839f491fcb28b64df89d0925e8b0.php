<?php

/* :Emails:test.html.twig */
class __TwigTemplate_005958d195253f02fdbc6e00339b8c36d2110a8f0273f99a543a22f9e5eb78db extends Twig_Template
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
        $__internal_ce106569f2e1f37d36686b95ab4046272c94b8e049376e637ea48cc4d59aae07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce106569f2e1f37d36686b95ab4046272c94b8e049376e637ea48cc4d59aae07->enter($__internal_ce106569f2e1f37d36686b95ab4046272c94b8e049376e637ea48cc4d59aae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:test.html.twig"));

        $__internal_343d8a1e7a8fb80e97c86a31b54cf4b5370508f40275290529469a90160e3742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343d8a1e7a8fb80e97c86a31b54cf4b5370508f40275290529469a90160e3742->enter($__internal_343d8a1e7a8fb80e97c86a31b54cf4b5370508f40275290529469a90160e3742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:test.html.twig"));

        // line 1
        echo "bonjour
voici un test";
        
        $__internal_ce106569f2e1f37d36686b95ab4046272c94b8e049376e637ea48cc4d59aae07->leave($__internal_ce106569f2e1f37d36686b95ab4046272c94b8e049376e637ea48cc4d59aae07_prof);

        
        $__internal_343d8a1e7a8fb80e97c86a31b54cf4b5370508f40275290529469a90160e3742->leave($__internal_343d8a1e7a8fb80e97c86a31b54cf4b5370508f40275290529469a90160e3742_prof);

    }

    public function getTemplateName()
    {
        return ":Emails:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("bonjour
voici un test", ":Emails:test.html.twig", "C:\\xampp\\htdocs\\louvre\\app/Resources\\views/Emails/test.html.twig");
    }
}
