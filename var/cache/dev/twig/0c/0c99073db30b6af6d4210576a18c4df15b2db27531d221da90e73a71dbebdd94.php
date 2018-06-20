<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0c762defce5660c340b4635a2d8adf42ba9512fd06a15ae3f69d596dec7deb18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c762defce5660c340b4635a2d8adf42ba9512fd06a15ae3f69d596dec7deb18->enter($__internal_0c762defce5660c340b4635a2d8adf42ba9512fd06a15ae3f69d596dec7deb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c2dd9662eff52608d0f2f465d1a41527de84b982d1616ab717581262b31eab5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dd9662eff52608d0f2f465d1a41527de84b982d1616ab717581262b31eab5a->enter($__internal_c2dd9662eff52608d0f2f465d1a41527de84b982d1616ab717581262b31eab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c762defce5660c340b4635a2d8adf42ba9512fd06a15ae3f69d596dec7deb18->leave($__internal_0c762defce5660c340b4635a2d8adf42ba9512fd06a15ae3f69d596dec7deb18_prof);

        
        $__internal_c2dd9662eff52608d0f2f465d1a41527de84b982d1616ab717581262b31eab5a->leave($__internal_c2dd9662eff52608d0f2f465d1a41527de84b982d1616ab717581262b31eab5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_155890e875f42e39848fd55c9ba3bc4c90c3a4efd0ab7dc472fabf66881d1414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155890e875f42e39848fd55c9ba3bc4c90c3a4efd0ab7dc472fabf66881d1414->enter($__internal_155890e875f42e39848fd55c9ba3bc4c90c3a4efd0ab7dc472fabf66881d1414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_896ce30d8866a22736595113e423990c7d5d28473323857484f10ba1bcad4d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896ce30d8866a22736595113e423990c7d5d28473323857484f10ba1bcad4d3a->enter($__internal_896ce30d8866a22736595113e423990c7d5d28473323857484f10ba1bcad4d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_896ce30d8866a22736595113e423990c7d5d28473323857484f10ba1bcad4d3a->leave($__internal_896ce30d8866a22736595113e423990c7d5d28473323857484f10ba1bcad4d3a_prof);

        
        $__internal_155890e875f42e39848fd55c9ba3bc4c90c3a4efd0ab7dc472fabf66881d1414->leave($__internal_155890e875f42e39848fd55c9ba3bc4c90c3a4efd0ab7dc472fabf66881d1414_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_691fc9f608a0b78dbb441fd1e41fafd101a47abc3da4f65ed8bd5f6d3a195da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691fc9f608a0b78dbb441fd1e41fafd101a47abc3da4f65ed8bd5f6d3a195da4->enter($__internal_691fc9f608a0b78dbb441fd1e41fafd101a47abc3da4f65ed8bd5f6d3a195da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8ac7e32bc78e34de6b1f81717d62ddd7cb7ee9e06154ba3619ba5f331f869ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ac7e32bc78e34de6b1f81717d62ddd7cb7ee9e06154ba3619ba5f331f869ae->enter($__internal_b8ac7e32bc78e34de6b1f81717d62ddd7cb7ee9e06154ba3619ba5f331f869ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8ac7e32bc78e34de6b1f81717d62ddd7cb7ee9e06154ba3619ba5f331f869ae->leave($__internal_b8ac7e32bc78e34de6b1f81717d62ddd7cb7ee9e06154ba3619ba5f331f869ae_prof);

        
        $__internal_691fc9f608a0b78dbb441fd1e41fafd101a47abc3da4f65ed8bd5f6d3a195da4->leave($__internal_691fc9f608a0b78dbb441fd1e41fafd101a47abc3da4f65ed8bd5f6d3a195da4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c00b741002bd9d24f2ef270ae8967e4b7938d3795c6177736b984a4f20aa97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c00b741002bd9d24f2ef270ae8967e4b7938d3795c6177736b984a4f20aa97d->enter($__internal_8c00b741002bd9d24f2ef270ae8967e4b7938d3795c6177736b984a4f20aa97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6021985b31ddececdfdf072f4b4dae20dba56543aa253738984f5a73d9d13e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6021985b31ddececdfdf072f4b4dae20dba56543aa253738984f5a73d9d13e2b->enter($__internal_6021985b31ddececdfdf072f4b4dae20dba56543aa253738984f5a73d9d13e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6021985b31ddececdfdf072f4b4dae20dba56543aa253738984f5a73d9d13e2b->leave($__internal_6021985b31ddececdfdf072f4b4dae20dba56543aa253738984f5a73d9d13e2b_prof);

        
        $__internal_8c00b741002bd9d24f2ef270ae8967e4b7938d3795c6177736b984a4f20aa97d->leave($__internal_8c00b741002bd9d24f2ef270ae8967e4b7938d3795c6177736b984a4f20aa97d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
