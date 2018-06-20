<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_b40cbb0048a1b441521ba69712e1d7df3a9f0d3d2f5553b11b8dd3a7b4d94367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40cbb0048a1b441521ba69712e1d7df3a9f0d3d2f5553b11b8dd3a7b4d94367->enter($__internal_b40cbb0048a1b441521ba69712e1d7df3a9f0d3d2f5553b11b8dd3a7b4d94367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_085cf54f15f542ca7589c8ead5d5b2597c48e953668b07c48458b394815e9a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085cf54f15f542ca7589c8ead5d5b2597c48e953668b07c48458b394815e9a1e->enter($__internal_085cf54f15f542ca7589c8ead5d5b2597c48e953668b07c48458b394815e9a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b40cbb0048a1b441521ba69712e1d7df3a9f0d3d2f5553b11b8dd3a7b4d94367->leave($__internal_b40cbb0048a1b441521ba69712e1d7df3a9f0d3d2f5553b11b8dd3a7b4d94367_prof);

        
        $__internal_085cf54f15f542ca7589c8ead5d5b2597c48e953668b07c48458b394815e9a1e->leave($__internal_085cf54f15f542ca7589c8ead5d5b2597c48e953668b07c48458b394815e9a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
