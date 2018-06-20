<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_355a87051683af44b5ae52e161c3a351a4b69a0ac55b15e80922c0404cce5976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355a87051683af44b5ae52e161c3a351a4b69a0ac55b15e80922c0404cce5976->enter($__internal_355a87051683af44b5ae52e161c3a351a4b69a0ac55b15e80922c0404cce5976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_951a7cf444728dee205fee84a6a0ef72e164a7f471febae1d377bf6662a5f43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951a7cf444728dee205fee84a6a0ef72e164a7f471febae1d377bf6662a5f43d->enter($__internal_951a7cf444728dee205fee84a6a0ef72e164a7f471febae1d377bf6662a5f43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_355a87051683af44b5ae52e161c3a351a4b69a0ac55b15e80922c0404cce5976->leave($__internal_355a87051683af44b5ae52e161c3a351a4b69a0ac55b15e80922c0404cce5976_prof);

        
        $__internal_951a7cf444728dee205fee84a6a0ef72e164a7f471febae1d377bf6662a5f43d->leave($__internal_951a7cf444728dee205fee84a6a0ef72e164a7f471febae1d377bf6662a5f43d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
