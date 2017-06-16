<?php

/* Emails/test.html.twig */
class __TwigTemplate_889b08680e3e4ee21ade550bf9d26e2704110ab0482ca4dfbf370e442a598c3f extends Twig_Template
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
        // line 1
        echo "bonjour
voici un test";
    }

    public function getTemplateName()
    {
        return "Emails/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Emails/test.html.twig", "C:\\xampp\\htdocs\\louvre\\app\\Resources\\views\\Emails\\test.html.twig");
    }
}
