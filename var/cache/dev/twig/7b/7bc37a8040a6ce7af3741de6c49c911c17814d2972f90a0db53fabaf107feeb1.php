<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_bdfd1c4a2548b0bc2df85e3006d69115de16c8c5de2d2d06d251f24510e3bc86 extends Twig_Template
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
        $__internal_c7ded40e0e94f78d73079f4431248c41b65d81c693fea56970565fe334879518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ded40e0e94f78d73079f4431248c41b65d81c693fea56970565fe334879518->enter($__internal_c7ded40e0e94f78d73079f4431248c41b65d81c693fea56970565fe334879518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a64079c8d94560cb546a2739e286471c8c4aa666a1ba75ea3833bd22367b984a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64079c8d94560cb546a2739e286471c8c4aa666a1ba75ea3833bd22367b984a->enter($__internal_a64079c8d94560cb546a2739e286471c8c4aa666a1ba75ea3833bd22367b984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c7ded40e0e94f78d73079f4431248c41b65d81c693fea56970565fe334879518->leave($__internal_c7ded40e0e94f78d73079f4431248c41b65d81c693fea56970565fe334879518_prof);

        
        $__internal_a64079c8d94560cb546a2739e286471c8c4aa666a1ba75ea3833bd22367b984a->leave($__internal_a64079c8d94560cb546a2739e286471c8c4aa666a1ba75ea3833bd22367b984a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
