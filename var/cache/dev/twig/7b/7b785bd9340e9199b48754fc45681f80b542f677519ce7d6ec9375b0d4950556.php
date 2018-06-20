<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_b8a3c8a3c3a000c8996bf25201ae3ae37649dddea3e066eded4b004d04bd776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a3c8a3c3a000c8996bf25201ae3ae37649dddea3e066eded4b004d04bd776a->enter($__internal_b8a3c8a3c3a000c8996bf25201ae3ae37649dddea3e066eded4b004d04bd776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_44cd8fdf40694d57a69ad2239cea0d52f88f2b0e495ace3dfec743c68351b5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cd8fdf40694d57a69ad2239cea0d52f88f2b0e495ace3dfec743c68351b5ab->enter($__internal_44cd8fdf40694d57a69ad2239cea0d52f88f2b0e495ace3dfec743c68351b5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b8a3c8a3c3a000c8996bf25201ae3ae37649dddea3e066eded4b004d04bd776a->leave($__internal_b8a3c8a3c3a000c8996bf25201ae3ae37649dddea3e066eded4b004d04bd776a_prof);

        
        $__internal_44cd8fdf40694d57a69ad2239cea0d52f88f2b0e495ace3dfec743c68351b5ab->leave($__internal_44cd8fdf40694d57a69ad2239cea0d52f88f2b0e495ace3dfec743c68351b5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
