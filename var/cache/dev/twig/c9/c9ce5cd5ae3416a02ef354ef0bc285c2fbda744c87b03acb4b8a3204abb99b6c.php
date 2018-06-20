<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_2206c2c118ced11c7552bef2bc4aeeb6f3578aa1cf039c94eda57b255de7b856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2206c2c118ced11c7552bef2bc4aeeb6f3578aa1cf039c94eda57b255de7b856->enter($__internal_2206c2c118ced11c7552bef2bc4aeeb6f3578aa1cf039c94eda57b255de7b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_020e5c6a289eb5d8ff4dc0ca3bdcd4c827d538f0856e04abb515f8e337f34353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020e5c6a289eb5d8ff4dc0ca3bdcd4c827d538f0856e04abb515f8e337f34353->enter($__internal_020e5c6a289eb5d8ff4dc0ca3bdcd4c827d538f0856e04abb515f8e337f34353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2206c2c118ced11c7552bef2bc4aeeb6f3578aa1cf039c94eda57b255de7b856->leave($__internal_2206c2c118ced11c7552bef2bc4aeeb6f3578aa1cf039c94eda57b255de7b856_prof);

        
        $__internal_020e5c6a289eb5d8ff4dc0ca3bdcd4c827d538f0856e04abb515f8e337f34353->leave($__internal_020e5c6a289eb5d8ff4dc0ca3bdcd4c827d538f0856e04abb515f8e337f34353_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
