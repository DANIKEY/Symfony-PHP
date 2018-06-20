<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_3882867c77526653f0d0dd9b981b6a9aa444fce5046e082eca24f83a854d7feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3882867c77526653f0d0dd9b981b6a9aa444fce5046e082eca24f83a854d7feb->enter($__internal_3882867c77526653f0d0dd9b981b6a9aa444fce5046e082eca24f83a854d7feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_01f820f9a402941d19a4f44d49821ce874cc1dc5ebc3e631d8e79f85eb77b835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f820f9a402941d19a4f44d49821ce874cc1dc5ebc3e631d8e79f85eb77b835->enter($__internal_01f820f9a402941d19a4f44d49821ce874cc1dc5ebc3e631d8e79f85eb77b835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3882867c77526653f0d0dd9b981b6a9aa444fce5046e082eca24f83a854d7feb->leave($__internal_3882867c77526653f0d0dd9b981b6a9aa444fce5046e082eca24f83a854d7feb_prof);

        
        $__internal_01f820f9a402941d19a4f44d49821ce874cc1dc5ebc3e631d8e79f85eb77b835->leave($__internal_01f820f9a402941d19a4f44d49821ce874cc1dc5ebc3e631d8e79f85eb77b835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
