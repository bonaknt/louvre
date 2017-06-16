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
        $__internal_5f51c3bc9504dd18289671c05ef52ff6c8952c1710828df7de9c198b4e3b45cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f51c3bc9504dd18289671c05ef52ff6c8952c1710828df7de9c198b4e3b45cc->enter($__internal_5f51c3bc9504dd18289671c05ef52ff6c8952c1710828df7de9c198b4e3b45cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/test.html.twig"));

        $__internal_52ab2f6e6a8321092ae13d5cf43fe47f6a7663723bdcff94d6c9889012e62230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ab2f6e6a8321092ae13d5cf43fe47f6a7663723bdcff94d6c9889012e62230->enter($__internal_52ab2f6e6a8321092ae13d5cf43fe47f6a7663723bdcff94d6c9889012e62230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/test.html.twig"));

        // line 1
        echo "bonjour
voici un test";
        
        $__internal_5f51c3bc9504dd18289671c05ef52ff6c8952c1710828df7de9c198b4e3b45cc->leave($__internal_5f51c3bc9504dd18289671c05ef52ff6c8952c1710828df7de9c198b4e3b45cc_prof);

        
        $__internal_52ab2f6e6a8321092ae13d5cf43fe47f6a7663723bdcff94d6c9889012e62230->leave($__internal_52ab2f6e6a8321092ae13d5cf43fe47f6a7663723bdcff94d6c9889012e62230_prof);

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
