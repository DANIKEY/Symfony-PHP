<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_28e73c644cb26efda05d0fddef681497e24fdb902b98981e906b079229279037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e73c644cb26efda05d0fddef681497e24fdb902b98981e906b079229279037->enter($__internal_28e73c644cb26efda05d0fddef681497e24fdb902b98981e906b079229279037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_17e0ac1e3806aa542ea6c9318ea0c4077a13c7c9bd05e9223cd0198eb8f17cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e0ac1e3806aa542ea6c9318ea0c4077a13c7c9bd05e9223cd0198eb8f17cb4->enter($__internal_17e0ac1e3806aa542ea6c9318ea0c4077a13c7c9bd05e9223cd0198eb8f17cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_28e73c644cb26efda05d0fddef681497e24fdb902b98981e906b079229279037->leave($__internal_28e73c644cb26efda05d0fddef681497e24fdb902b98981e906b079229279037_prof);

        
        $__internal_17e0ac1e3806aa542ea6c9318ea0c4077a13c7c9bd05e9223cd0198eb8f17cb4->leave($__internal_17e0ac1e3806aa542ea6c9318ea0c4077a13c7c9bd05e9223cd0198eb8f17cb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
