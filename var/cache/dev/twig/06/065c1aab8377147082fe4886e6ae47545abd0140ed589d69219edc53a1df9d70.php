<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4d897ff5083c8bf0269602690aacf7fbdf09a374ed7c6451fc021112a7d25e56 extends Twig_Template
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
        $__internal_de342bfc9011b78e73e9e70811979234eb93c0d003330f63c9fbe2bbad463483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de342bfc9011b78e73e9e70811979234eb93c0d003330f63c9fbe2bbad463483->enter($__internal_de342bfc9011b78e73e9e70811979234eb93c0d003330f63c9fbe2bbad463483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2a45a91a775665d579bdd8deb583255fe6b61d087477d896e32c0fc352fb67bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a45a91a775665d579bdd8deb583255fe6b61d087477d896e32c0fc352fb67bc->enter($__internal_2a45a91a775665d579bdd8deb583255fe6b61d087477d896e32c0fc352fb67bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_de342bfc9011b78e73e9e70811979234eb93c0d003330f63c9fbe2bbad463483->leave($__internal_de342bfc9011b78e73e9e70811979234eb93c0d003330f63c9fbe2bbad463483_prof);

        
        $__internal_2a45a91a775665d579bdd8deb583255fe6b61d087477d896e32c0fc352fb67bc->leave($__internal_2a45a91a775665d579bdd8deb583255fe6b61d087477d896e32c0fc352fb67bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
