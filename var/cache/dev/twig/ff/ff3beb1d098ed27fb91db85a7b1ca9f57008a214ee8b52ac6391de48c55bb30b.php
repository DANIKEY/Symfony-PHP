<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_868a011dd672549fa9785913dda0dd4aaebe4a7ea985f548e6f65fdeeffe2d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868a011dd672549fa9785913dda0dd4aaebe4a7ea985f548e6f65fdeeffe2d7a->enter($__internal_868a011dd672549fa9785913dda0dd4aaebe4a7ea985f548e6f65fdeeffe2d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3789c0152d3d811fb51f6e1a8518531f49270a106d5c92ac671175d07e300774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3789c0152d3d811fb51f6e1a8518531f49270a106d5c92ac671175d07e300774->enter($__internal_3789c0152d3d811fb51f6e1a8518531f49270a106d5c92ac671175d07e300774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_868a011dd672549fa9785913dda0dd4aaebe4a7ea985f548e6f65fdeeffe2d7a->leave($__internal_868a011dd672549fa9785913dda0dd4aaebe4a7ea985f548e6f65fdeeffe2d7a_prof);

        
        $__internal_3789c0152d3d811fb51f6e1a8518531f49270a106d5c92ac671175d07e300774->leave($__internal_3789c0152d3d811fb51f6e1a8518531f49270a106d5c92ac671175d07e300774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
