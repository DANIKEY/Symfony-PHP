<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_52e2f916df101dcafafdf1c69417d743d0bcc6cb01321453239cb02d0542e5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e2f916df101dcafafdf1c69417d743d0bcc6cb01321453239cb02d0542e5e8->enter($__internal_52e2f916df101dcafafdf1c69417d743d0bcc6cb01321453239cb02d0542e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e147d890772b04a9a776408f383fc6cdde2ae1e5a7909720078d55390577ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e147d890772b04a9a776408f383fc6cdde2ae1e5a7909720078d55390577ce5d->enter($__internal_e147d890772b04a9a776408f383fc6cdde2ae1e5a7909720078d55390577ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_52e2f916df101dcafafdf1c69417d743d0bcc6cb01321453239cb02d0542e5e8->leave($__internal_52e2f916df101dcafafdf1c69417d743d0bcc6cb01321453239cb02d0542e5e8_prof);

        
        $__internal_e147d890772b04a9a776408f383fc6cdde2ae1e5a7909720078d55390577ce5d->leave($__internal_e147d890772b04a9a776408f383fc6cdde2ae1e5a7909720078d55390577ce5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
