<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_dba47ad166d182e21d33b460a64493a3fb022941beabef25a5899ed5c365a14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba47ad166d182e21d33b460a64493a3fb022941beabef25a5899ed5c365a14e->enter($__internal_dba47ad166d182e21d33b460a64493a3fb022941beabef25a5899ed5c365a14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_88454074bcce2f6d358bc80977a6cc8848b574343d3ca8da25891b03e967161f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88454074bcce2f6d358bc80977a6cc8848b574343d3ca8da25891b03e967161f->enter($__internal_88454074bcce2f6d358bc80977a6cc8848b574343d3ca8da25891b03e967161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dba47ad166d182e21d33b460a64493a3fb022941beabef25a5899ed5c365a14e->leave($__internal_dba47ad166d182e21d33b460a64493a3fb022941beabef25a5899ed5c365a14e_prof);

        
        $__internal_88454074bcce2f6d358bc80977a6cc8848b574343d3ca8da25891b03e967161f->leave($__internal_88454074bcce2f6d358bc80977a6cc8848b574343d3ca8da25891b03e967161f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
