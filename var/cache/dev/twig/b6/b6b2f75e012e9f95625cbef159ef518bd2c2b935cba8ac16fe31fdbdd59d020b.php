<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_d8b0cc55a20e166c161c8ce650e91b2622d63f7b6caa8c6187751af89e98c9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b0cc55a20e166c161c8ce650e91b2622d63f7b6caa8c6187751af89e98c9b0->enter($__internal_d8b0cc55a20e166c161c8ce650e91b2622d63f7b6caa8c6187751af89e98c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d9d660c986a9a1cc07e5dc90b34357ebacb82ea216995eefde3bedea78c9efb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d660c986a9a1cc07e5dc90b34357ebacb82ea216995eefde3bedea78c9efb5->enter($__internal_d9d660c986a9a1cc07e5dc90b34357ebacb82ea216995eefde3bedea78c9efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d8b0cc55a20e166c161c8ce650e91b2622d63f7b6caa8c6187751af89e98c9b0->leave($__internal_d8b0cc55a20e166c161c8ce650e91b2622d63f7b6caa8c6187751af89e98c9b0_prof);

        
        $__internal_d9d660c986a9a1cc07e5dc90b34357ebacb82ea216995eefde3bedea78c9efb5->leave($__internal_d9d660c986a9a1cc07e5dc90b34357ebacb82ea216995eefde3bedea78c9efb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
