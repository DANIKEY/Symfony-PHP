<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_8190c14dc0d91b2474001ab0089499d60f7f3ad360584a6f931b66d748f92b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8190c14dc0d91b2474001ab0089499d60f7f3ad360584a6f931b66d748f92b95->enter($__internal_8190c14dc0d91b2474001ab0089499d60f7f3ad360584a6f931b66d748f92b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_027e3327862a6d1c180521a4b8b2dfbba69f4dfb01d153623676f406e71954eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027e3327862a6d1c180521a4b8b2dfbba69f4dfb01d153623676f406e71954eb->enter($__internal_027e3327862a6d1c180521a4b8b2dfbba69f4dfb01d153623676f406e71954eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8190c14dc0d91b2474001ab0089499d60f7f3ad360584a6f931b66d748f92b95->leave($__internal_8190c14dc0d91b2474001ab0089499d60f7f3ad360584a6f931b66d748f92b95_prof);

        
        $__internal_027e3327862a6d1c180521a4b8b2dfbba69f4dfb01d153623676f406e71954eb->leave($__internal_027e3327862a6d1c180521a4b8b2dfbba69f4dfb01d153623676f406e71954eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
