<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_25bd4b227be5ea0ce6d8f338cc73ed9b9d9b6167a93c49c5ba19d0f0e77ba20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bd4b227be5ea0ce6d8f338cc73ed9b9d9b6167a93c49c5ba19d0f0e77ba20e->enter($__internal_25bd4b227be5ea0ce6d8f338cc73ed9b9d9b6167a93c49c5ba19d0f0e77ba20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d14a8961824e16232b054fab9d487f0e4fbf1db31375346a551230a76b0e64db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14a8961824e16232b054fab9d487f0e4fbf1db31375346a551230a76b0e64db->enter($__internal_d14a8961824e16232b054fab9d487f0e4fbf1db31375346a551230a76b0e64db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_25bd4b227be5ea0ce6d8f338cc73ed9b9d9b6167a93c49c5ba19d0f0e77ba20e->leave($__internal_25bd4b227be5ea0ce6d8f338cc73ed9b9d9b6167a93c49c5ba19d0f0e77ba20e_prof);

        
        $__internal_d14a8961824e16232b054fab9d487f0e4fbf1db31375346a551230a76b0e64db->leave($__internal_d14a8961824e16232b054fab9d487f0e4fbf1db31375346a551230a76b0e64db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
