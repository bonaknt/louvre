<?php

/* @MKLouvre/Default/index.html.twig */
class __TwigTemplate_ec4a1b68b8297e55fad10a5e2546ed8da08e8f781e4eeef2842e92f9124663df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MKLouvreBundle:Default:layout.html.twig", "@MKLouvre/Default/index.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MKLouvreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <h2>Liste des annonce</h2>



";
    }

    public function getTemplateName()
    {
        return "@MKLouvre/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MKLouvre/Default/index.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
