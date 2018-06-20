<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_bf6c4d3c394c6969f9b495aeb7bb80ba9a12095d406e3e3b4d50b62f3cb5df31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6c4d3c394c6969f9b495aeb7bb80ba9a12095d406e3e3b4d50b62f3cb5df31->enter($__internal_bf6c4d3c394c6969f9b495aeb7bb80ba9a12095d406e3e3b4d50b62f3cb5df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_63053f7e2bde72d09ccef55aefc983c5d9cff30a6d5d6917aabb06c962c1c58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63053f7e2bde72d09ccef55aefc983c5d9cff30a6d5d6917aabb06c962c1c58c->enter($__internal_63053f7e2bde72d09ccef55aefc983c5d9cff30a6d5d6917aabb06c962c1c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bf6c4d3c394c6969f9b495aeb7bb80ba9a12095d406e3e3b4d50b62f3cb5df31->leave($__internal_bf6c4d3c394c6969f9b495aeb7bb80ba9a12095d406e3e3b4d50b62f3cb5df31_prof);

        
        $__internal_63053f7e2bde72d09ccef55aefc983c5d9cff30a6d5d6917aabb06c962c1c58c->leave($__internal_63053f7e2bde72d09ccef55aefc983c5d9cff30a6d5d6917aabb06c962c1c58c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
