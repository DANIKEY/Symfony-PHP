<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c1a87904b4fba1800c6f0240b0ce2678c5a771c0de4fc173729bd5d5f9df1f11 extends Twig_Template
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
        $__internal_2079db8aa1e19f464f6a00f7a26f9ae87e90037e790cb9ffca12c89ed31b73f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2079db8aa1e19f464f6a00f7a26f9ae87e90037e790cb9ffca12c89ed31b73f0->enter($__internal_2079db8aa1e19f464f6a00f7a26f9ae87e90037e790cb9ffca12c89ed31b73f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0c931819964f26be543f558b6efc4c92be4c06625b1bed7524611d2d5c1661da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c931819964f26be543f558b6efc4c92be4c06625b1bed7524611d2d5c1661da->enter($__internal_0c931819964f26be543f558b6efc4c92be4c06625b1bed7524611d2d5c1661da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2079db8aa1e19f464f6a00f7a26f9ae87e90037e790cb9ffca12c89ed31b73f0->leave($__internal_2079db8aa1e19f464f6a00f7a26f9ae87e90037e790cb9ffca12c89ed31b73f0_prof);

        
        $__internal_0c931819964f26be543f558b6efc4c92be4c06625b1bed7524611d2d5c1661da->leave($__internal_0c931819964f26be543f558b6efc4c92be4c06625b1bed7524611d2d5c1661da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
