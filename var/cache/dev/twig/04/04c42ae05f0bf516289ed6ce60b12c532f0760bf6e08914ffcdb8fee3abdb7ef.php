<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_d53030f52e29b8f193e02f93b5ef0a8350fa363394bef7f3feff5f95973f88cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53030f52e29b8f193e02f93b5ef0a8350fa363394bef7f3feff5f95973f88cd->enter($__internal_d53030f52e29b8f193e02f93b5ef0a8350fa363394bef7f3feff5f95973f88cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4b762fea0a981248005cab324513da07f2fdac8fcaed5cc22aa2acb03e1e3eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b762fea0a981248005cab324513da07f2fdac8fcaed5cc22aa2acb03e1e3eb7->enter($__internal_4b762fea0a981248005cab324513da07f2fdac8fcaed5cc22aa2acb03e1e3eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d53030f52e29b8f193e02f93b5ef0a8350fa363394bef7f3feff5f95973f88cd->leave($__internal_d53030f52e29b8f193e02f93b5ef0a8350fa363394bef7f3feff5f95973f88cd_prof);

        
        $__internal_4b762fea0a981248005cab324513da07f2fdac8fcaed5cc22aa2acb03e1e3eb7->leave($__internal_4b762fea0a981248005cab324513da07f2fdac8fcaed5cc22aa2acb03e1e3eb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
