<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_78c5da0e9d5b1a4db0efafa680bf71e303211f49ce9118f57f91ec993e3a8a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c5da0e9d5b1a4db0efafa680bf71e303211f49ce9118f57f91ec993e3a8a45->enter($__internal_78c5da0e9d5b1a4db0efafa680bf71e303211f49ce9118f57f91ec993e3a8a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b3e6d2b378d76d0f62c3e0762a9cfca681dd8236b822db13725911e18a3e4cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e6d2b378d76d0f62c3e0762a9cfca681dd8236b822db13725911e18a3e4cf8->enter($__internal_b3e6d2b378d76d0f62c3e0762a9cfca681dd8236b822db13725911e18a3e4cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_78c5da0e9d5b1a4db0efafa680bf71e303211f49ce9118f57f91ec993e3a8a45->leave($__internal_78c5da0e9d5b1a4db0efafa680bf71e303211f49ce9118f57f91ec993e3a8a45_prof);

        
        $__internal_b3e6d2b378d76d0f62c3e0762a9cfca681dd8236b822db13725911e18a3e4cf8->leave($__internal_b3e6d2b378d76d0f62c3e0762a9cfca681dd8236b822db13725911e18a3e4cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
