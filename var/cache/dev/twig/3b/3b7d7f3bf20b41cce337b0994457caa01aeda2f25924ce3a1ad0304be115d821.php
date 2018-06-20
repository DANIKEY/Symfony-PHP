<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_d286629475d084f72a4c83e09763855a2713e4075835c76c29684bd8ddfacc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d286629475d084f72a4c83e09763855a2713e4075835c76c29684bd8ddfacc69->enter($__internal_d286629475d084f72a4c83e09763855a2713e4075835c76c29684bd8ddfacc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8143c975feaab43701884d6e8933a6fbcf35841a61cf9be3e5ec876a7a8eb4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8143c975feaab43701884d6e8933a6fbcf35841a61cf9be3e5ec876a7a8eb4f8->enter($__internal_8143c975feaab43701884d6e8933a6fbcf35841a61cf9be3e5ec876a7a8eb4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d286629475d084f72a4c83e09763855a2713e4075835c76c29684bd8ddfacc69->leave($__internal_d286629475d084f72a4c83e09763855a2713e4075835c76c29684bd8ddfacc69_prof);

        
        $__internal_8143c975feaab43701884d6e8933a6fbcf35841a61cf9be3e5ec876a7a8eb4f8->leave($__internal_8143c975feaab43701884d6e8933a6fbcf35841a61cf9be3e5ec876a7a8eb4f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
