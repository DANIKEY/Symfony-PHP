<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_cc10b3c6c33c3eef6c8ba61fecbe34125b5d48e802eea6d9e39f066a8dd28a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc10b3c6c33c3eef6c8ba61fecbe34125b5d48e802eea6d9e39f066a8dd28a53->enter($__internal_cc10b3c6c33c3eef6c8ba61fecbe34125b5d48e802eea6d9e39f066a8dd28a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_91b2309a74881d62d4a87aa78d40dd9f441686c6628cdc33956df02d1b10cfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b2309a74881d62d4a87aa78d40dd9f441686c6628cdc33956df02d1b10cfd1->enter($__internal_91b2309a74881d62d4a87aa78d40dd9f441686c6628cdc33956df02d1b10cfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cc10b3c6c33c3eef6c8ba61fecbe34125b5d48e802eea6d9e39f066a8dd28a53->leave($__internal_cc10b3c6c33c3eef6c8ba61fecbe34125b5d48e802eea6d9e39f066a8dd28a53_prof);

        
        $__internal_91b2309a74881d62d4a87aa78d40dd9f441686c6628cdc33956df02d1b10cfd1->leave($__internal_91b2309a74881d62d4a87aa78d40dd9f441686c6628cdc33956df02d1b10cfd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
