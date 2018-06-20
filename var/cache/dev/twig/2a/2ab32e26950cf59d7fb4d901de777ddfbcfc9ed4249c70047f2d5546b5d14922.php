<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_7991f587bd7a75ebc1c2a9414c1210a6d9068a6961a6686428c7f79b9c44febb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7991f587bd7a75ebc1c2a9414c1210a6d9068a6961a6686428c7f79b9c44febb->enter($__internal_7991f587bd7a75ebc1c2a9414c1210a6d9068a6961a6686428c7f79b9c44febb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8b6564cc3837593dd29f6b3f44cd3f8115d94abed8da1748a88904b75908284d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6564cc3837593dd29f6b3f44cd3f8115d94abed8da1748a88904b75908284d->enter($__internal_8b6564cc3837593dd29f6b3f44cd3f8115d94abed8da1748a88904b75908284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7991f587bd7a75ebc1c2a9414c1210a6d9068a6961a6686428c7f79b9c44febb->leave($__internal_7991f587bd7a75ebc1c2a9414c1210a6d9068a6961a6686428c7f79b9c44febb_prof);

        
        $__internal_8b6564cc3837593dd29f6b3f44cd3f8115d94abed8da1748a88904b75908284d->leave($__internal_8b6564cc3837593dd29f6b3f44cd3f8115d94abed8da1748a88904b75908284d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
