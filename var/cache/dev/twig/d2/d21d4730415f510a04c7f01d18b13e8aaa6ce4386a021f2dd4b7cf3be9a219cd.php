<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e36cc2d1e5b1ef6c3bcd5a752e528a6427402c3d616a37af426dc1280df0edb8 extends Twig_Template
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
        $__internal_347902de06e29f20dc6fde7684c65ba1dc94031b9b5dbfb81b6b20bca1cc5363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347902de06e29f20dc6fde7684c65ba1dc94031b9b5dbfb81b6b20bca1cc5363->enter($__internal_347902de06e29f20dc6fde7684c65ba1dc94031b9b5dbfb81b6b20bca1cc5363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_21e2132b190e462e5cc9e98ba8d08d5fc4620b5b0c888db72da32e49a5532bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e2132b190e462e5cc9e98ba8d08d5fc4620b5b0c888db72da32e49a5532bd3->enter($__internal_21e2132b190e462e5cc9e98ba8d08d5fc4620b5b0c888db72da32e49a5532bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_347902de06e29f20dc6fde7684c65ba1dc94031b9b5dbfb81b6b20bca1cc5363->leave($__internal_347902de06e29f20dc6fde7684c65ba1dc94031b9b5dbfb81b6b20bca1cc5363_prof);

        
        $__internal_21e2132b190e462e5cc9e98ba8d08d5fc4620b5b0c888db72da32e49a5532bd3->leave($__internal_21e2132b190e462e5cc9e98ba8d08d5fc4620b5b0c888db72da32e49a5532bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
