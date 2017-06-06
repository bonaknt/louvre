<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9ee94395d57bd775afdb5d78dd46fdaa650e54a29ca756c0211b2c734117b8a0 extends Twig_Template
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
        $__internal_5f7149a9ccc0414b50c6771618701c31be14abeb0436416d398b3481bc65982f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7149a9ccc0414b50c6771618701c31be14abeb0436416d398b3481bc65982f->enter($__internal_5f7149a9ccc0414b50c6771618701c31be14abeb0436416d398b3481bc65982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3d1ba59ba919dd7449ddec5c70523fc9cd2b8150cc8262f319fc5acdf4bc04c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1ba59ba919dd7449ddec5c70523fc9cd2b8150cc8262f319fc5acdf4bc04c3->enter($__internal_3d1ba59ba919dd7449ddec5c70523fc9cd2b8150cc8262f319fc5acdf4bc04c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5f7149a9ccc0414b50c6771618701c31be14abeb0436416d398b3481bc65982f->leave($__internal_5f7149a9ccc0414b50c6771618701c31be14abeb0436416d398b3481bc65982f_prof);

        
        $__internal_3d1ba59ba919dd7449ddec5c70523fc9cd2b8150cc8262f319fc5acdf4bc04c3->leave($__internal_3d1ba59ba919dd7449ddec5c70523fc9cd2b8150cc8262f319fc5acdf4bc04c3_prof);

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
