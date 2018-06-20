<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4680e248e71b5bb1ef3ef8d0f4a652ee830f8b98b6c1f24637d474e6449c42b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4680e248e71b5bb1ef3ef8d0f4a652ee830f8b98b6c1f24637d474e6449c42b2->enter($__internal_4680e248e71b5bb1ef3ef8d0f4a652ee830f8b98b6c1f24637d474e6449c42b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_03d1efe78d95b4ae8527d6995ac69f9147a208a6d5567f7151a89fbc8db3aec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d1efe78d95b4ae8527d6995ac69f9147a208a6d5567f7151a89fbc8db3aec4->enter($__internal_03d1efe78d95b4ae8527d6995ac69f9147a208a6d5567f7151a89fbc8db3aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4680e248e71b5bb1ef3ef8d0f4a652ee830f8b98b6c1f24637d474e6449c42b2->leave($__internal_4680e248e71b5bb1ef3ef8d0f4a652ee830f8b98b6c1f24637d474e6449c42b2_prof);

        
        $__internal_03d1efe78d95b4ae8527d6995ac69f9147a208a6d5567f7151a89fbc8db3aec4->leave($__internal_03d1efe78d95b4ae8527d6995ac69f9147a208a6d5567f7151a89fbc8db3aec4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f63e4d9b5865da2eb3a6cf7f408cdeebd3329cb5489808928b209fec90910d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f63e4d9b5865da2eb3a6cf7f408cdeebd3329cb5489808928b209fec90910d5->enter($__internal_1f63e4d9b5865da2eb3a6cf7f408cdeebd3329cb5489808928b209fec90910d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c158d47ec5a2d80cc92e6853c8daf4ea52e8b28681b4468bcbd1d096b8a7319a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c158d47ec5a2d80cc92e6853c8daf4ea52e8b28681b4468bcbd1d096b8a7319a->enter($__internal_c158d47ec5a2d80cc92e6853c8daf4ea52e8b28681b4468bcbd1d096b8a7319a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c158d47ec5a2d80cc92e6853c8daf4ea52e8b28681b4468bcbd1d096b8a7319a->leave($__internal_c158d47ec5a2d80cc92e6853c8daf4ea52e8b28681b4468bcbd1d096b8a7319a_prof);

        
        $__internal_1f63e4d9b5865da2eb3a6cf7f408cdeebd3329cb5489808928b209fec90910d5->leave($__internal_1f63e4d9b5865da2eb3a6cf7f408cdeebd3329cb5489808928b209fec90910d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_558744321cf701ba586df3a9e163c4be4552347e90331d4ba219b78c74141ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558744321cf701ba586df3a9e163c4be4552347e90331d4ba219b78c74141ae4->enter($__internal_558744321cf701ba586df3a9e163c4be4552347e90331d4ba219b78c74141ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bd4177dc52c63988b382e9185c42b9cf0811339a670c7c80001f9b7b3bac1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd4177dc52c63988b382e9185c42b9cf0811339a670c7c80001f9b7b3bac1f1->enter($__internal_8bd4177dc52c63988b382e9185c42b9cf0811339a670c7c80001f9b7b3bac1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bd4177dc52c63988b382e9185c42b9cf0811339a670c7c80001f9b7b3bac1f1->leave($__internal_8bd4177dc52c63988b382e9185c42b9cf0811339a670c7c80001f9b7b3bac1f1_prof);

        
        $__internal_558744321cf701ba586df3a9e163c4be4552347e90331d4ba219b78c74141ae4->leave($__internal_558744321cf701ba586df3a9e163c4be4552347e90331d4ba219b78c74141ae4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_032819c6b5a03fcf0b541bc2f40f9866fb155c9929e693fdaaae10df966eadc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032819c6b5a03fcf0b541bc2f40f9866fb155c9929e693fdaaae10df966eadc4->enter($__internal_032819c6b5a03fcf0b541bc2f40f9866fb155c9929e693fdaaae10df966eadc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac2abe4c044e772164ab5ea4a9f7ea8bc0afebd16532d89750a88fe51fadadf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2abe4c044e772164ab5ea4a9f7ea8bc0afebd16532d89750a88fe51fadadf9->enter($__internal_ac2abe4c044e772164ab5ea4a9f7ea8bc0afebd16532d89750a88fe51fadadf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ac2abe4c044e772164ab5ea4a9f7ea8bc0afebd16532d89750a88fe51fadadf9->leave($__internal_ac2abe4c044e772164ab5ea4a9f7ea8bc0afebd16532d89750a88fe51fadadf9_prof);

        
        $__internal_032819c6b5a03fcf0b541bc2f40f9866fb155c9929e693fdaaae10df966eadc4->leave($__internal_032819c6b5a03fcf0b541bc2f40f9866fb155c9929e693fdaaae10df966eadc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
