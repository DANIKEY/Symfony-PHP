<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15e3cac8b41070ebff04035ece6b4d630489bc4135419d985cd2a85660b856bb extends Twig_Template
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
        $__internal_e9dd2fb86e22b316494718ae7784c76c670b9fe8cb1807d5af811bc42ec83ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9dd2fb86e22b316494718ae7784c76c670b9fe8cb1807d5af811bc42ec83ad2->enter($__internal_e9dd2fb86e22b316494718ae7784c76c670b9fe8cb1807d5af811bc42ec83ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ffe0be2e3c1f8ac051b223bc5ab40fc3156ed22a164ee732d02fb3455e4a602b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe0be2e3c1f8ac051b223bc5ab40fc3156ed22a164ee732d02fb3455e4a602b->enter($__internal_ffe0be2e3c1f8ac051b223bc5ab40fc3156ed22a164ee732d02fb3455e4a602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e9dd2fb86e22b316494718ae7784c76c670b9fe8cb1807d5af811bc42ec83ad2->leave($__internal_e9dd2fb86e22b316494718ae7784c76c670b9fe8cb1807d5af811bc42ec83ad2_prof);

        
        $__internal_ffe0be2e3c1f8ac051b223bc5ab40fc3156ed22a164ee732d02fb3455e4a602b->leave($__internal_ffe0be2e3c1f8ac051b223bc5ab40fc3156ed22a164ee732d02fb3455e4a602b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
