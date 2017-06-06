<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5142174c090f9b35d3f6528dbe4630cb12b6f0fe4f8d7cb856410414c2171287 extends Twig_Template
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
        $__internal_976e799eb432a0e70c912d864d134ea087a41fc5bf62656cad548afbd4912d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976e799eb432a0e70c912d864d134ea087a41fc5bf62656cad548afbd4912d07->enter($__internal_976e799eb432a0e70c912d864d134ea087a41fc5bf62656cad548afbd4912d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bb4ebe012bd7e423e1bb58035ca971c81393ab65009af8b5bf94312fae2e9c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4ebe012bd7e423e1bb58035ca971c81393ab65009af8b5bf94312fae2e9c61->enter($__internal_bb4ebe012bd7e423e1bb58035ca971c81393ab65009af8b5bf94312fae2e9c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_976e799eb432a0e70c912d864d134ea087a41fc5bf62656cad548afbd4912d07->leave($__internal_976e799eb432a0e70c912d864d134ea087a41fc5bf62656cad548afbd4912d07_prof);

        
        $__internal_bb4ebe012bd7e423e1bb58035ca971c81393ab65009af8b5bf94312fae2e9c61->leave($__internal_bb4ebe012bd7e423e1bb58035ca971c81393ab65009af8b5bf94312fae2e9c61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
