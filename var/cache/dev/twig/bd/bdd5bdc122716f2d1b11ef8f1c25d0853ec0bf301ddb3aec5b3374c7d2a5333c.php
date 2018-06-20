<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_de36a861ffda8c31eb9d9f0b44cf9318fe2a573c7090757bb17a976ccee106e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de36a861ffda8c31eb9d9f0b44cf9318fe2a573c7090757bb17a976ccee106e2->enter($__internal_de36a861ffda8c31eb9d9f0b44cf9318fe2a573c7090757bb17a976ccee106e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2c7f6e0f58a8aa90dc462e0d614c87501879088762801e5a9aaf75f9a2686851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7f6e0f58a8aa90dc462e0d614c87501879088762801e5a9aaf75f9a2686851->enter($__internal_2c7f6e0f58a8aa90dc462e0d614c87501879088762801e5a9aaf75f9a2686851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_de36a861ffda8c31eb9d9f0b44cf9318fe2a573c7090757bb17a976ccee106e2->leave($__internal_de36a861ffda8c31eb9d9f0b44cf9318fe2a573c7090757bb17a976ccee106e2_prof);

        
        $__internal_2c7f6e0f58a8aa90dc462e0d614c87501879088762801e5a9aaf75f9a2686851->leave($__internal_2c7f6e0f58a8aa90dc462e0d614c87501879088762801e5a9aaf75f9a2686851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
