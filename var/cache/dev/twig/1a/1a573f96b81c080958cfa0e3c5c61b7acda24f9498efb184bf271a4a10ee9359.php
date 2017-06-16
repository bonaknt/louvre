<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d77cca7dc221d7776a6a038528aabd70b6e14ae8d04a17cf8e79ca19863cfe80 extends Twig_Template
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
        $__internal_58d20b65cc999a73290c04794906d286b0a427527fd1a7bb0b0946ff904158aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d20b65cc999a73290c04794906d286b0a427527fd1a7bb0b0946ff904158aa->enter($__internal_58d20b65cc999a73290c04794906d286b0a427527fd1a7bb0b0946ff904158aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f6e49905145b133ba24736e4ae082f75cc8c339b98547b7f31ede30169ff46c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e49905145b133ba24736e4ae082f75cc8c339b98547b7f31ede30169ff46c5->enter($__internal_f6e49905145b133ba24736e4ae082f75cc8c339b98547b7f31ede30169ff46c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_58d20b65cc999a73290c04794906d286b0a427527fd1a7bb0b0946ff904158aa->leave($__internal_58d20b65cc999a73290c04794906d286b0a427527fd1a7bb0b0946ff904158aa_prof);

        
        $__internal_f6e49905145b133ba24736e4ae082f75cc8c339b98547b7f31ede30169ff46c5->leave($__internal_f6e49905145b133ba24736e4ae082f75cc8c339b98547b7f31ede30169ff46c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
