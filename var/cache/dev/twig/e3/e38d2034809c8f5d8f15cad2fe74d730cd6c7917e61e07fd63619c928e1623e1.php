<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_8768f96ae3b2a3c7d57709cd263973128d42c1fc5ce62c3197e3dccae1724728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8768f96ae3b2a3c7d57709cd263973128d42c1fc5ce62c3197e3dccae1724728->enter($__internal_8768f96ae3b2a3c7d57709cd263973128d42c1fc5ce62c3197e3dccae1724728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5cc53f5683f4db77462a53580a04c354f7c8dc781ef747c5851383292cee7c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc53f5683f4db77462a53580a04c354f7c8dc781ef747c5851383292cee7c5c->enter($__internal_5cc53f5683f4db77462a53580a04c354f7c8dc781ef747c5851383292cee7c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8768f96ae3b2a3c7d57709cd263973128d42c1fc5ce62c3197e3dccae1724728->leave($__internal_8768f96ae3b2a3c7d57709cd263973128d42c1fc5ce62c3197e3dccae1724728_prof);

        
        $__internal_5cc53f5683f4db77462a53580a04c354f7c8dc781ef747c5851383292cee7c5c->leave($__internal_5cc53f5683f4db77462a53580a04c354f7c8dc781ef747c5851383292cee7c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
