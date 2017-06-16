<?php

/* ::layout1.html.twig */
class __TwigTemplate_46645947a9224d8a0ff442d268f357d9b00001eaeaa5bfa51e7f7702f2940d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "::layout1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb732a5ae6e17e0d1983ecedabcf9c5a6a3613d77e76cd7a2f02e123bef0851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb732a5ae6e17e0d1983ecedabcf9c5a6a3613d77e76cd7a2f02e123bef0851->enter($__internal_dcb732a5ae6e17e0d1983ecedabcf9c5a6a3613d77e76cd7a2f02e123bef0851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $__internal_7f2331a5b33ca30c250dc3143698b0372243e20d43a83181dac473433dcfcedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2331a5b33ca30c250dc3143698b0372243e20d43a83181dac473433dcfcedc->enter($__internal_7f2331a5b33ca30c250dc3143698b0372243e20d43a83181dac473433dcfcedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb732a5ae6e17e0d1983ecedabcf9c5a6a3613d77e76cd7a2f02e123bef0851->leave($__internal_dcb732a5ae6e17e0d1983ecedabcf9c5a6a3613d77e76cd7a2f02e123bef0851_prof);

        
        $__internal_7f2331a5b33ca30c250dc3143698b0372243e20d43a83181dac473433dcfcedc->leave($__internal_7f2331a5b33ca30c250dc3143698b0372243e20d43a83181dac473433dcfcedc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7259c050531ceb69167a44a99614ac65cd2e7db750730fd88829eafd7f53718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7259c050531ceb69167a44a99614ac65cd2e7db750730fd88829eafd7f53718->enter($__internal_c7259c050531ceb69167a44a99614ac65cd2e7db750730fd88829eafd7f53718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76ae0a69b38b9ca26f4ce4f444d603786106341351757820635ff6a3698e021b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ae0a69b38b9ca26f4ce4f444d603786106341351757820635ff6a3698e021b->enter($__internal_76ae0a69b38b9ca26f4ce4f444d603786106341351757820635ff6a3698e021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_76ae0a69b38b9ca26f4ce4f444d603786106341351757820635ff6a3698e021b->leave($__internal_76ae0a69b38b9ca26f4ce4f444d603786106341351757820635ff6a3698e021b_prof);

        
        $__internal_c7259c050531ceb69167a44a99614ac65cd2e7db750730fd88829eafd7f53718->leave($__internal_c7259c050531ceb69167a44a99614ac65cd2e7db750730fd88829eafd7f53718_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8abac5737aa2b5ff68eb903e52fff13b83a6af78de314f0e4859bbf873549f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abac5737aa2b5ff68eb903e52fff13b83a6af78de314f0e4859bbf873549f6b->enter($__internal_8abac5737aa2b5ff68eb903e52fff13b83a6af78de314f0e4859bbf873549f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d0bd33d987fa896cce336af34671f769f491dbda75ee1a8bf30a42377f3d330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0bd33d987fa896cce336af34671f769f491dbda75ee1a8bf30a42377f3d330->enter($__internal_9d0bd33d987fa896cce336af34671f769f491dbda75ee1a8bf30a42377f3d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_9d0bd33d987fa896cce336af34671f769f491dbda75ee1a8bf30a42377f3d330->leave($__internal_9d0bd33d987fa896cce336af34671f769f491dbda75ee1a8bf30a42377f3d330_prof);

        
        $__internal_8abac5737aa2b5ff68eb903e52fff13b83a6af78de314f0e4859bbf873549f6b->leave($__internal_8abac5737aa2b5ff68eb903e52fff13b83a6af78de314f0e4859bbf873549f6b_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1a4a43d324ac2aab7c1302df1d1f83d75d66a31ce6fc7511d3df7bd435b45af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4a43d324ac2aab7c1302df1d1f83d75d66a31ce6fc7511d3df7bd435b45af0->enter($__internal_1a4a43d324ac2aab7c1302df1d1f83d75d66a31ce6fc7511d3df7bd435b45af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_964213503f62bb325e6042ff575275962299d940237fe727ccfa56bb0438bf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964213503f62bb325e6042ff575275962299d940237fe727ccfa56bb0438bf18->enter($__internal_964213503f62bb325e6042ff575275962299d940237fe727ccfa56bb0438bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "  ";
        
        $__internal_964213503f62bb325e6042ff575275962299d940237fe727ccfa56bb0438bf18->leave($__internal_964213503f62bb325e6042ff575275962299d940237fe727ccfa56bb0438bf18_prof);

        
        $__internal_1a4a43d324ac2aab7c1302df1d1f83d75d66a31ce6fc7511d3df7bd435b45af0->leave($__internal_1a4a43d324ac2aab7c1302df1d1f83d75d66a31ce6fc7511d3df7bd435b45af0_prof);

    }

    public function getTemplateName()
    {
        return "::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}", "::layout1.html.twig", "C:\\xampp\\htdocs\\louvre\\app/Resources\\views/layout1.html.twig");
    }
}
