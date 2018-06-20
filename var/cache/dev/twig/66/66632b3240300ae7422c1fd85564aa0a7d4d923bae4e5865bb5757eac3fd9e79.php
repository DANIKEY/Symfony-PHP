<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_8abe7b3215ed83411a6f8fff314137579ecf49272130d2a998ee22c791972434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abe7b3215ed83411a6f8fff314137579ecf49272130d2a998ee22c791972434->enter($__internal_8abe7b3215ed83411a6f8fff314137579ecf49272130d2a998ee22c791972434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_de4ee3fc618933f28adb4f5be2d73d5dd05580aa76095dd5e2011388a482e4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4ee3fc618933f28adb4f5be2d73d5dd05580aa76095dd5e2011388a482e4c0->enter($__internal_de4ee3fc618933f28adb4f5be2d73d5dd05580aa76095dd5e2011388a482e4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8abe7b3215ed83411a6f8fff314137579ecf49272130d2a998ee22c791972434->leave($__internal_8abe7b3215ed83411a6f8fff314137579ecf49272130d2a998ee22c791972434_prof);

        
        $__internal_de4ee3fc618933f28adb4f5be2d73d5dd05580aa76095dd5e2011388a482e4c0->leave($__internal_de4ee3fc618933f28adb4f5be2d73d5dd05580aa76095dd5e2011388a482e4c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
