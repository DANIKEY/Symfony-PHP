<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_ea8db5e4faec905aee6b081d347c94362e241b6885b4cab937a6bf8b469f63cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8db5e4faec905aee6b081d347c94362e241b6885b4cab937a6bf8b469f63cb->enter($__internal_ea8db5e4faec905aee6b081d347c94362e241b6885b4cab937a6bf8b469f63cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f5a4e4ae667091bec1964bc8ecc859404f528ccf057dc9d6e10e6959300cc8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a4e4ae667091bec1964bc8ecc859404f528ccf057dc9d6e10e6959300cc8a9->enter($__internal_f5a4e4ae667091bec1964bc8ecc859404f528ccf057dc9d6e10e6959300cc8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ea8db5e4faec905aee6b081d347c94362e241b6885b4cab937a6bf8b469f63cb->leave($__internal_ea8db5e4faec905aee6b081d347c94362e241b6885b4cab937a6bf8b469f63cb_prof);

        
        $__internal_f5a4e4ae667091bec1964bc8ecc859404f528ccf057dc9d6e10e6959300cc8a9->leave($__internal_f5a4e4ae667091bec1964bc8ecc859404f528ccf057dc9d6e10e6959300cc8a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
