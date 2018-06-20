<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6c1891cfa0df1ad9c01e564727ba2e8328fa05bf37295d26f76c26e49bb91e73 extends Twig_Template
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
        $__internal_e8178977a25a4454de528727c0aac4a8f1bba3212819e5567795584250965570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8178977a25a4454de528727c0aac4a8f1bba3212819e5567795584250965570->enter($__internal_e8178977a25a4454de528727c0aac4a8f1bba3212819e5567795584250965570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c8066fb2b38282b0f191be791a8b5acdce29b1974398ea2c9d011e7ae3f88680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8066fb2b38282b0f191be791a8b5acdce29b1974398ea2c9d011e7ae3f88680->enter($__internal_c8066fb2b38282b0f191be791a8b5acdce29b1974398ea2c9d011e7ae3f88680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e8178977a25a4454de528727c0aac4a8f1bba3212819e5567795584250965570->leave($__internal_e8178977a25a4454de528727c0aac4a8f1bba3212819e5567795584250965570_prof);

        
        $__internal_c8066fb2b38282b0f191be791a8b5acdce29b1974398ea2c9d011e7ae3f88680->leave($__internal_c8066fb2b38282b0f191be791a8b5acdce29b1974398ea2c9d011e7ae3f88680_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
