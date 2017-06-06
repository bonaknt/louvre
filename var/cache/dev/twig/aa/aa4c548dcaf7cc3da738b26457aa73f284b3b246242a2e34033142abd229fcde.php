<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_26cf9bf30cb6908e94b72420d69b92dc184a271e6a2627c73312e1113d40db5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_477ec0918f0956e66e25e47a1330d316a952950054c7d64866dc26554b51f24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477ec0918f0956e66e25e47a1330d316a952950054c7d64866dc26554b51f24b->enter($__internal_477ec0918f0956e66e25e47a1330d316a952950054c7d64866dc26554b51f24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_729e317f4d6762c25b735d7fddb4059eb6e9354719129a0c8815327ca788a753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729e317f4d6762c25b735d7fddb4059eb6e9354719129a0c8815327ca788a753->enter($__internal_729e317f4d6762c25b735d7fddb4059eb6e9354719129a0c8815327ca788a753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_477ec0918f0956e66e25e47a1330d316a952950054c7d64866dc26554b51f24b->leave($__internal_477ec0918f0956e66e25e47a1330d316a952950054c7d64866dc26554b51f24b_prof);

        
        $__internal_729e317f4d6762c25b735d7fddb4059eb6e9354719129a0c8815327ca788a753->leave($__internal_729e317f4d6762c25b735d7fddb4059eb6e9354719129a0c8815327ca788a753_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bca17781584d557a9a0243c17087a4e106977f1ebbc2769425cfa410459a10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bca17781584d557a9a0243c17087a4e106977f1ebbc2769425cfa410459a10d->enter($__internal_5bca17781584d557a9a0243c17087a4e106977f1ebbc2769425cfa410459a10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56ed4d5239ff54afac85e521e0fba4bdc15febc80797f2edb3bc9dbf29671f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ed4d5239ff54afac85e521e0fba4bdc15febc80797f2edb3bc9dbf29671f61->enter($__internal_56ed4d5239ff54afac85e521e0fba4bdc15febc80797f2edb3bc9dbf29671f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_56ed4d5239ff54afac85e521e0fba4bdc15febc80797f2edb3bc9dbf29671f61->leave($__internal_56ed4d5239ff54afac85e521e0fba4bdc15febc80797f2edb3bc9dbf29671f61_prof);

        
        $__internal_5bca17781584d557a9a0243c17087a4e106977f1ebbc2769425cfa410459a10d->leave($__internal_5bca17781584d557a9a0243c17087a4e106977f1ebbc2769425cfa410459a10d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
