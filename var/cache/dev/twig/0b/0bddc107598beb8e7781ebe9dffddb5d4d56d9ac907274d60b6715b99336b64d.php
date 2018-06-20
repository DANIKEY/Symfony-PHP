<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_076f241150d2801bc608b2229c95b87ca3e48cae635696b86a8045a36e76e6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076f241150d2801bc608b2229c95b87ca3e48cae635696b86a8045a36e76e6b3->enter($__internal_076f241150d2801bc608b2229c95b87ca3e48cae635696b86a8045a36e76e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f2133b2faa06417bfe5ea0d6d6f29bb79494086d0ee7c8720ca1f492d8b3125f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2133b2faa06417bfe5ea0d6d6f29bb79494086d0ee7c8720ca1f492d8b3125f->enter($__internal_f2133b2faa06417bfe5ea0d6d6f29bb79494086d0ee7c8720ca1f492d8b3125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_076f241150d2801bc608b2229c95b87ca3e48cae635696b86a8045a36e76e6b3->leave($__internal_076f241150d2801bc608b2229c95b87ca3e48cae635696b86a8045a36e76e6b3_prof);

        
        $__internal_f2133b2faa06417bfe5ea0d6d6f29bb79494086d0ee7c8720ca1f492d8b3125f->leave($__internal_f2133b2faa06417bfe5ea0d6d6f29bb79494086d0ee7c8720ca1f492d8b3125f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
