<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_a1f513b5d2157c0b8a38296732c3f5287397408d366975239dda41c0aaa4f091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f513b5d2157c0b8a38296732c3f5287397408d366975239dda41c0aaa4f091->enter($__internal_a1f513b5d2157c0b8a38296732c3f5287397408d366975239dda41c0aaa4f091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4f6729e436af779e4f0a11a427b8396036e515fc6e1b23dfee3404c1839f3285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6729e436af779e4f0a11a427b8396036e515fc6e1b23dfee3404c1839f3285->enter($__internal_4f6729e436af779e4f0a11a427b8396036e515fc6e1b23dfee3404c1839f3285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a1f513b5d2157c0b8a38296732c3f5287397408d366975239dda41c0aaa4f091->leave($__internal_a1f513b5d2157c0b8a38296732c3f5287397408d366975239dda41c0aaa4f091_prof);

        
        $__internal_4f6729e436af779e4f0a11a427b8396036e515fc6e1b23dfee3404c1839f3285->leave($__internal_4f6729e436af779e4f0a11a427b8396036e515fc6e1b23dfee3404c1839f3285_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
