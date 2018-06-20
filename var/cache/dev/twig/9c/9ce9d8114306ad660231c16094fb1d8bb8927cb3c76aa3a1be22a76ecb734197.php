<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_c9ebb6313ccf4d53ac3d733ee2e13e30726aaab157d00be761d4c369d079963f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ebb6313ccf4d53ac3d733ee2e13e30726aaab157d00be761d4c369d079963f->enter($__internal_c9ebb6313ccf4d53ac3d733ee2e13e30726aaab157d00be761d4c369d079963f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0601dceb2a98a73445ea0aa04e1046e7b1341fefcdd8d4ac483133a6c0fe771e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0601dceb2a98a73445ea0aa04e1046e7b1341fefcdd8d4ac483133a6c0fe771e->enter($__internal_0601dceb2a98a73445ea0aa04e1046e7b1341fefcdd8d4ac483133a6c0fe771e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c9ebb6313ccf4d53ac3d733ee2e13e30726aaab157d00be761d4c369d079963f->leave($__internal_c9ebb6313ccf4d53ac3d733ee2e13e30726aaab157d00be761d4c369d079963f_prof);

        
        $__internal_0601dceb2a98a73445ea0aa04e1046e7b1341fefcdd8d4ac483133a6c0fe771e->leave($__internal_0601dceb2a98a73445ea0aa04e1046e7b1341fefcdd8d4ac483133a6c0fe771e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
