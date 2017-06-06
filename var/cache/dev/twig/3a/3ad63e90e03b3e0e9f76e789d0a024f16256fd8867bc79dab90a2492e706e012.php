<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4856042e1e2b0f08af587ef0bb14d17f80979aa1c67d4757d09a583f65ad7fe4 extends Twig_Template
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
        $__internal_046af35cc8ef290d21e7e3a44413ae63473f24a1dc337bf07db479993beed69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046af35cc8ef290d21e7e3a44413ae63473f24a1dc337bf07db479993beed69e->enter($__internal_046af35cc8ef290d21e7e3a44413ae63473f24a1dc337bf07db479993beed69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f3d73b9934f05305c877f022ac919af14bddb6a9e4ccb729c39b3ee6dea2a45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d73b9934f05305c877f022ac919af14bddb6a9e4ccb729c39b3ee6dea2a45b->enter($__internal_f3d73b9934f05305c877f022ac919af14bddb6a9e4ccb729c39b3ee6dea2a45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_046af35cc8ef290d21e7e3a44413ae63473f24a1dc337bf07db479993beed69e->leave($__internal_046af35cc8ef290d21e7e3a44413ae63473f24a1dc337bf07db479993beed69e_prof);

        
        $__internal_f3d73b9934f05305c877f022ac919af14bddb6a9e4ccb729c39b3ee6dea2a45b->leave($__internal_f3d73b9934f05305c877f022ac919af14bddb6a9e4ccb729c39b3ee6dea2a45b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
