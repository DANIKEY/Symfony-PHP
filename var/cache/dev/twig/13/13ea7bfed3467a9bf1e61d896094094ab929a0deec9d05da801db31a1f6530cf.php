<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_830434df2a2dc1411f4349147ddef2bc480963470c0cfdddea396032a85a0ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830434df2a2dc1411f4349147ddef2bc480963470c0cfdddea396032a85a0ca5->enter($__internal_830434df2a2dc1411f4349147ddef2bc480963470c0cfdddea396032a85a0ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5727e4e8ffae0eef59e93371ae39a1e2529108301b3be67de8c6659197db91d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5727e4e8ffae0eef59e93371ae39a1e2529108301b3be67de8c6659197db91d4->enter($__internal_5727e4e8ffae0eef59e93371ae39a1e2529108301b3be67de8c6659197db91d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_830434df2a2dc1411f4349147ddef2bc480963470c0cfdddea396032a85a0ca5->leave($__internal_830434df2a2dc1411f4349147ddef2bc480963470c0cfdddea396032a85a0ca5_prof);

        
        $__internal_5727e4e8ffae0eef59e93371ae39a1e2529108301b3be67de8c6659197db91d4->leave($__internal_5727e4e8ffae0eef59e93371ae39a1e2529108301b3be67de8c6659197db91d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
