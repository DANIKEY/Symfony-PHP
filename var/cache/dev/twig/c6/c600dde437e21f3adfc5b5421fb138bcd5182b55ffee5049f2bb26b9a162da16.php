<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_f9d51a1120755464882acff7056b023abef34d020dd13d40c6d68be8be8de8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d51a1120755464882acff7056b023abef34d020dd13d40c6d68be8be8de8c7->enter($__internal_f9d51a1120755464882acff7056b023abef34d020dd13d40c6d68be8be8de8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_90d0369a65a8cb2611622a233eb3385ded5fa2c47b72c848a4175ec7e80178e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d0369a65a8cb2611622a233eb3385ded5fa2c47b72c848a4175ec7e80178e7->enter($__internal_90d0369a65a8cb2611622a233eb3385ded5fa2c47b72c848a4175ec7e80178e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f9d51a1120755464882acff7056b023abef34d020dd13d40c6d68be8be8de8c7->leave($__internal_f9d51a1120755464882acff7056b023abef34d020dd13d40c6d68be8be8de8c7_prof);

        
        $__internal_90d0369a65a8cb2611622a233eb3385ded5fa2c47b72c848a4175ec7e80178e7->leave($__internal_90d0369a65a8cb2611622a233eb3385ded5fa2c47b72c848a4175ec7e80178e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
