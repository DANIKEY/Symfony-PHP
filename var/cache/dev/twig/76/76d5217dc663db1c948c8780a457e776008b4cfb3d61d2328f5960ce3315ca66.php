<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_8a527c4c4fd18e4d87c2ed27b1858ccf033fe8c3f4b781ec51b27eea18a0ffa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a527c4c4fd18e4d87c2ed27b1858ccf033fe8c3f4b781ec51b27eea18a0ffa0->enter($__internal_8a527c4c4fd18e4d87c2ed27b1858ccf033fe8c3f4b781ec51b27eea18a0ffa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5a12750535ebb3077534010275382e7e3539b33395131a0b3f9a92eb2e278078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a12750535ebb3077534010275382e7e3539b33395131a0b3f9a92eb2e278078->enter($__internal_5a12750535ebb3077534010275382e7e3539b33395131a0b3f9a92eb2e278078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8a527c4c4fd18e4d87c2ed27b1858ccf033fe8c3f4b781ec51b27eea18a0ffa0->leave($__internal_8a527c4c4fd18e4d87c2ed27b1858ccf033fe8c3f4b781ec51b27eea18a0ffa0_prof);

        
        $__internal_5a12750535ebb3077534010275382e7e3539b33395131a0b3f9a92eb2e278078->leave($__internal_5a12750535ebb3077534010275382e7e3539b33395131a0b3f9a92eb2e278078_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
