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
        $__internal_c246815380aedfb738b38109189b08007717bfb4c787824901014ba85ef12132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c246815380aedfb738b38109189b08007717bfb4c787824901014ba85ef12132->enter($__internal_c246815380aedfb738b38109189b08007717bfb4c787824901014ba85ef12132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:test.html.twig"));

        $__internal_f9ee074229125b1638fc4cb3f0cc45604623264a22ac7b7d1d2a61665e2213ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ee074229125b1638fc4cb3f0cc45604623264a22ac7b7d1d2a61665e2213ba->enter($__internal_f9ee074229125b1638fc4cb3f0cc45604623264a22ac7b7d1d2a61665e2213ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:test.html.twig"));

        // line 1
        echo "bonjour
voici un test";
        
        $__internal_c246815380aedfb738b38109189b08007717bfb4c787824901014ba85ef12132->leave($__internal_c246815380aedfb738b38109189b08007717bfb4c787824901014ba85ef12132_prof);

        
        $__internal_f9ee074229125b1638fc4cb3f0cc45604623264a22ac7b7d1d2a61665e2213ba->leave($__internal_f9ee074229125b1638fc4cb3f0cc45604623264a22ac7b7d1d2a61665e2213ba_prof);

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
