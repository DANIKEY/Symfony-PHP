<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9e2c5a3d078d7aa19a74d2fd27d6243c0249da59f4e18117fd99d6d4ce28a52a extends Twig_Template
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
        $__internal_5f2f655bbe790bfafc2b2a4495fbda498b4c6811a66020db2a71af883d23a2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2f655bbe790bfafc2b2a4495fbda498b4c6811a66020db2a71af883d23a2f0->enter($__internal_5f2f655bbe790bfafc2b2a4495fbda498b4c6811a66020db2a71af883d23a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8c2e1f62de489f0884b54faf0c25f612a17dc310e64de12a02c42dbf12853f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2e1f62de489f0884b54faf0c25f612a17dc310e64de12a02c42dbf12853f2a->enter($__internal_8c2e1f62de489f0884b54faf0c25f612a17dc310e64de12a02c42dbf12853f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5f2f655bbe790bfafc2b2a4495fbda498b4c6811a66020db2a71af883d23a2f0->leave($__internal_5f2f655bbe790bfafc2b2a4495fbda498b4c6811a66020db2a71af883d23a2f0_prof);

        
        $__internal_8c2e1f62de489f0884b54faf0c25f612a17dc310e64de12a02c42dbf12853f2a->leave($__internal_8c2e1f62de489f0884b54faf0c25f612a17dc310e64de12a02c42dbf12853f2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
