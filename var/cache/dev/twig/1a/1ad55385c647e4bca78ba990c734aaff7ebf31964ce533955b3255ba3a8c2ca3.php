<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_8234f4d4f4b19d3874d62c4bfa01afd7003522e928292f1bef1193158b60f689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8234f4d4f4b19d3874d62c4bfa01afd7003522e928292f1bef1193158b60f689->enter($__internal_8234f4d4f4b19d3874d62c4bfa01afd7003522e928292f1bef1193158b60f689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b71f885c81a9b722ac0e931602391e7ed582f0dcdf326f865890468bf3407031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71f885c81a9b722ac0e931602391e7ed582f0dcdf326f865890468bf3407031->enter($__internal_b71f885c81a9b722ac0e931602391e7ed582f0dcdf326f865890468bf3407031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8234f4d4f4b19d3874d62c4bfa01afd7003522e928292f1bef1193158b60f689->leave($__internal_8234f4d4f4b19d3874d62c4bfa01afd7003522e928292f1bef1193158b60f689_prof);

        
        $__internal_b71f885c81a9b722ac0e931602391e7ed582f0dcdf326f865890468bf3407031->leave($__internal_b71f885c81a9b722ac0e931602391e7ed582f0dcdf326f865890468bf3407031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
