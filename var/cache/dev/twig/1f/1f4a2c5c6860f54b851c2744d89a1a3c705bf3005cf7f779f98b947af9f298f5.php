<?php

/* Emails/test.html.twig */
class __TwigTemplate_f6c895c771023c53d32d4de0941b3b423ab0c14817618f1f128783b3219e051a extends Twig_Template
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
        $__internal_2f6d9a50a848fe8978158b624760d8b7b1fb627be32d043663669e42d226eae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6d9a50a848fe8978158b624760d8b7b1fb627be32d043663669e42d226eae0->enter($__internal_2f6d9a50a848fe8978158b624760d8b7b1fb627be32d043663669e42d226eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/test.html.twig"));

        $__internal_b5e7673f1cf3b0c0c06f59562f4cd9dfc5fdf9a511a39e834893a9e72329b39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e7673f1cf3b0c0c06f59562f4cd9dfc5fdf9a511a39e834893a9e72329b39f->enter($__internal_b5e7673f1cf3b0c0c06f59562f4cd9dfc5fdf9a511a39e834893a9e72329b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/test.html.twig"));

        // line 1
        echo "bonjour
voici un test";
        
        $__internal_2f6d9a50a848fe8978158b624760d8b7b1fb627be32d043663669e42d226eae0->leave($__internal_2f6d9a50a848fe8978158b624760d8b7b1fb627be32d043663669e42d226eae0_prof);

        
        $__internal_b5e7673f1cf3b0c0c06f59562f4cd9dfc5fdf9a511a39e834893a9e72329b39f->leave($__internal_b5e7673f1cf3b0c0c06f59562f4cd9dfc5fdf9a511a39e834893a9e72329b39f_prof);

    }

    public function getTemplateName()
    {
        return "Emails/test.html.twig";
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
voici un test", "Emails/test.html.twig", "C:\\xampp\\htdocs\\louvre\\app\\Resources\\views\\Emails\\test.html.twig");
    }
}
