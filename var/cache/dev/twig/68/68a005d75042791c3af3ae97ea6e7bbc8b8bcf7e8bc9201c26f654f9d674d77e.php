<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_157a9a72f385830f7cae52a2c8551adbb748844fd3f620aedd058e594a8684db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157a9a72f385830f7cae52a2c8551adbb748844fd3f620aedd058e594a8684db->enter($__internal_157a9a72f385830f7cae52a2c8551adbb748844fd3f620aedd058e594a8684db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bf579e0816918b51a600ce13d501d0d6ecea28c51b119c3982e7629ae434c13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf579e0816918b51a600ce13d501d0d6ecea28c51b119c3982e7629ae434c13e->enter($__internal_bf579e0816918b51a600ce13d501d0d6ecea28c51b119c3982e7629ae434c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_157a9a72f385830f7cae52a2c8551adbb748844fd3f620aedd058e594a8684db->leave($__internal_157a9a72f385830f7cae52a2c8551adbb748844fd3f620aedd058e594a8684db_prof);

        
        $__internal_bf579e0816918b51a600ce13d501d0d6ecea28c51b119c3982e7629ae434c13e->leave($__internal_bf579e0816918b51a600ce13d501d0d6ecea28c51b119c3982e7629ae434c13e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
