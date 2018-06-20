<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_95e048f0ec911e4ca141d011e12ba89af89c473f4f6127cf702254aca1df5812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e048f0ec911e4ca141d011e12ba89af89c473f4f6127cf702254aca1df5812->enter($__internal_95e048f0ec911e4ca141d011e12ba89af89c473f4f6127cf702254aca1df5812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_29a3d8f02eae30ba0434347f620800e0b94383f3eecd2ef1adfa52fc9bb75985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a3d8f02eae30ba0434347f620800e0b94383f3eecd2ef1adfa52fc9bb75985->enter($__internal_29a3d8f02eae30ba0434347f620800e0b94383f3eecd2ef1adfa52fc9bb75985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95e048f0ec911e4ca141d011e12ba89af89c473f4f6127cf702254aca1df5812->leave($__internal_95e048f0ec911e4ca141d011e12ba89af89c473f4f6127cf702254aca1df5812_prof);

        
        $__internal_29a3d8f02eae30ba0434347f620800e0b94383f3eecd2ef1adfa52fc9bb75985->leave($__internal_29a3d8f02eae30ba0434347f620800e0b94383f3eecd2ef1adfa52fc9bb75985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
