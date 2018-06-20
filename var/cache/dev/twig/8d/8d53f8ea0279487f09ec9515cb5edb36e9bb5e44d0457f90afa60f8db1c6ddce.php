<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_31edbbbfabf26c00e1729323047d376ba81131f7e5449cedfa7e65b1167b3ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31edbbbfabf26c00e1729323047d376ba81131f7e5449cedfa7e65b1167b3ea4->enter($__internal_31edbbbfabf26c00e1729323047d376ba81131f7e5449cedfa7e65b1167b3ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_de4f0f1565e97d4ba591e0d62c3074b4b03f750b1d38c4e871545f0c65e0f597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4f0f1565e97d4ba591e0d62c3074b4b03f750b1d38c4e871545f0c65e0f597->enter($__internal_de4f0f1565e97d4ba591e0d62c3074b4b03f750b1d38c4e871545f0c65e0f597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_31edbbbfabf26c00e1729323047d376ba81131f7e5449cedfa7e65b1167b3ea4->leave($__internal_31edbbbfabf26c00e1729323047d376ba81131f7e5449cedfa7e65b1167b3ea4_prof);

        
        $__internal_de4f0f1565e97d4ba591e0d62c3074b4b03f750b1d38c4e871545f0c65e0f597->leave($__internal_de4f0f1565e97d4ba591e0d62c3074b4b03f750b1d38c4e871545f0c65e0f597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
