<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_11a7f334b1c588680534283678312ee63c6cb77b6fc8b75acac0bd27a779890e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a7f334b1c588680534283678312ee63c6cb77b6fc8b75acac0bd27a779890e->enter($__internal_11a7f334b1c588680534283678312ee63c6cb77b6fc8b75acac0bd27a779890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e5f035e4838ba84faec2f6e15380d5693822e12e0bb04049167b0ba64c2a4fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f035e4838ba84faec2f6e15380d5693822e12e0bb04049167b0ba64c2a4fb7->enter($__internal_e5f035e4838ba84faec2f6e15380d5693822e12e0bb04049167b0ba64c2a4fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_11a7f334b1c588680534283678312ee63c6cb77b6fc8b75acac0bd27a779890e->leave($__internal_11a7f334b1c588680534283678312ee63c6cb77b6fc8b75acac0bd27a779890e_prof);

        
        $__internal_e5f035e4838ba84faec2f6e15380d5693822e12e0bb04049167b0ba64c2a4fb7->leave($__internal_e5f035e4838ba84faec2f6e15380d5693822e12e0bb04049167b0ba64c2a4fb7_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
