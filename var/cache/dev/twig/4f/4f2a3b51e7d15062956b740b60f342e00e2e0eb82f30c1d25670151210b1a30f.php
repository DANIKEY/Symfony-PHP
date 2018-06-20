<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_592e8f8412ccbe3048199d3164834fc70e57b6dab8d3604c10b287881c004b04 extends Twig_Template
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
        $__internal_22291a64242716d5115b68470a0bdff73c2fbcd30e2ea90930126808d26aec1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22291a64242716d5115b68470a0bdff73c2fbcd30e2ea90930126808d26aec1c->enter($__internal_22291a64242716d5115b68470a0bdff73c2fbcd30e2ea90930126808d26aec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b12b70ba0a0dc131342b8bba63429adfd9bcf89ecedb7429cb11cf191eeadc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12b70ba0a0dc131342b8bba63429adfd9bcf89ecedb7429cb11cf191eeadc49->enter($__internal_b12b70ba0a0dc131342b8bba63429adfd9bcf89ecedb7429cb11cf191eeadc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_22291a64242716d5115b68470a0bdff73c2fbcd30e2ea90930126808d26aec1c->leave($__internal_22291a64242716d5115b68470a0bdff73c2fbcd30e2ea90930126808d26aec1c_prof);

        
        $__internal_b12b70ba0a0dc131342b8bba63429adfd9bcf89ecedb7429cb11cf191eeadc49->leave($__internal_b12b70ba0a0dc131342b8bba63429adfd9bcf89ecedb7429cb11cf191eeadc49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
