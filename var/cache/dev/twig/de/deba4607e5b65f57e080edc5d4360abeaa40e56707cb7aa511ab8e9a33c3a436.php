<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_05e2349340283a1338744fce45d4c8de598b538e0237d4a8d75b7e57f3225f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e2349340283a1338744fce45d4c8de598b538e0237d4a8d75b7e57f3225f72->enter($__internal_05e2349340283a1338744fce45d4c8de598b538e0237d4a8d75b7e57f3225f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4c3f4587bc65893699191853ca4443e52bc40c23eee77f456c27887daf01e45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3f4587bc65893699191853ca4443e52bc40c23eee77f456c27887daf01e45a->enter($__internal_4c3f4587bc65893699191853ca4443e52bc40c23eee77f456c27887daf01e45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_05e2349340283a1338744fce45d4c8de598b538e0237d4a8d75b7e57f3225f72->leave($__internal_05e2349340283a1338744fce45d4c8de598b538e0237d4a8d75b7e57f3225f72_prof);

        
        $__internal_4c3f4587bc65893699191853ca4443e52bc40c23eee77f456c27887daf01e45a->leave($__internal_4c3f4587bc65893699191853ca4443e52bc40c23eee77f456c27887daf01e45a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
