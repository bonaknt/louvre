<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_16ae26cb948fb0d00598eccccfe4621e85003b95fa35d622f1252fc90785ac3d extends Twig_Template
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
        $__internal_eff0f20e057bfb2b4b85a5dc99ca0821d7de12673a56058500ff75e499a79c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff0f20e057bfb2b4b85a5dc99ca0821d7de12673a56058500ff75e499a79c00->enter($__internal_eff0f20e057bfb2b4b85a5dc99ca0821d7de12673a56058500ff75e499a79c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_834b1cbd478ef2690429a0a723628340a4da7d28753ddd62759ba5f767326481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834b1cbd478ef2690429a0a723628340a4da7d28753ddd62759ba5f767326481->enter($__internal_834b1cbd478ef2690429a0a723628340a4da7d28753ddd62759ba5f767326481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eff0f20e057bfb2b4b85a5dc99ca0821d7de12673a56058500ff75e499a79c00->leave($__internal_eff0f20e057bfb2b4b85a5dc99ca0821d7de12673a56058500ff75e499a79c00_prof);

        
        $__internal_834b1cbd478ef2690429a0a723628340a4da7d28753ddd62759ba5f767326481->leave($__internal_834b1cbd478ef2690429a0a723628340a4da7d28753ddd62759ba5f767326481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\louvre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
