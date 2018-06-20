<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cdf3da827ae15155c54c8a96aa20bd1c1d3a1d98fc877ab9bb83957028972073 extends Twig_Template
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
        $__internal_00d52e627b332df9c2822d4ccf8afe3e9ec69ac6524f28f55bad571c32503638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d52e627b332df9c2822d4ccf8afe3e9ec69ac6524f28f55bad571c32503638->enter($__internal_00d52e627b332df9c2822d4ccf8afe3e9ec69ac6524f28f55bad571c32503638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ce871ebe21127c788fbe59029c512d555e2eb2e38d7239bc39b2e4064777ac33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce871ebe21127c788fbe59029c512d555e2eb2e38d7239bc39b2e4064777ac33->enter($__internal_ce871ebe21127c788fbe59029c512d555e2eb2e38d7239bc39b2e4064777ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_00d52e627b332df9c2822d4ccf8afe3e9ec69ac6524f28f55bad571c32503638->leave($__internal_00d52e627b332df9c2822d4ccf8afe3e9ec69ac6524f28f55bad571c32503638_prof);

        
        $__internal_ce871ebe21127c788fbe59029c512d555e2eb2e38d7239bc39b2e4064777ac33->leave($__internal_ce871ebe21127c788fbe59029c512d555e2eb2e38d7239bc39b2e4064777ac33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
