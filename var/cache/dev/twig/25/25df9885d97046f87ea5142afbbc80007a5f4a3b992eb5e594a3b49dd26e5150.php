<?php

/* MKLouvreBundle:Default:email.txt.twig */
class __TwigTemplate_fc89ed53a330f40090e24b4f9b0b0c257d8645412c7fcbb2a88e016c4839ba14 extends Twig_Template
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
        $__internal_eab4d9f464bfbfa6ed19e0136668db0736dd400d890266b5763a14783fd66ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab4d9f464bfbfa6ed19e0136668db0736dd400d890266b5763a14783fd66ed5->enter($__internal_eab4d9f464bfbfa6ed19e0136668db0736dd400d890266b5763a14783fd66ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:email.txt.twig"));

        $__internal_d025685fa87eb313d94c5a41baefb00557a0fcb1365cd13778156ff96ab82194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d025685fa87eb313d94c5a41baefb00557a0fcb1365cd13778156ff96ab82194->enter($__internal_d025685fa87eb313d94c5a41baefb00557a0fcb1365cd13778156ff96ab82194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle:Default:email.txt.twig"));

        // line 1
        echo "bonjour
voici un test

pour le louvre";
        
        $__internal_eab4d9f464bfbfa6ed19e0136668db0736dd400d890266b5763a14783fd66ed5->leave($__internal_eab4d9f464bfbfa6ed19e0136668db0736dd400d890266b5763a14783fd66ed5_prof);

        
        $__internal_d025685fa87eb313d94c5a41baefb00557a0fcb1365cd13778156ff96ab82194->leave($__internal_d025685fa87eb313d94c5a41baefb00557a0fcb1365cd13778156ff96ab82194_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle:Default:email.txt.twig";
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
voici un test

pour le louvre", "MKLouvreBundle:Default:email.txt.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/Default/email.txt.twig");
    }
}
