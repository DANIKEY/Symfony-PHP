<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2335f8d5d1f49c4a3351bb3f9a9691232570975c571ed2f2f1ca8a84dcf5fc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2335f8d5d1f49c4a3351bb3f9a9691232570975c571ed2f2f1ca8a84dcf5fc4e->enter($__internal_2335f8d5d1f49c4a3351bb3f9a9691232570975c571ed2f2f1ca8a84dcf5fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_60dfef973f9bcef65972443d9888305911fef4096e4122c14b3d85571ffbde8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dfef973f9bcef65972443d9888305911fef4096e4122c14b3d85571ffbde8a->enter($__internal_60dfef973f9bcef65972443d9888305911fef4096e4122c14b3d85571ffbde8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2335f8d5d1f49c4a3351bb3f9a9691232570975c571ed2f2f1ca8a84dcf5fc4e->leave($__internal_2335f8d5d1f49c4a3351bb3f9a9691232570975c571ed2f2f1ca8a84dcf5fc4e_prof);

        
        $__internal_60dfef973f9bcef65972443d9888305911fef4096e4122c14b3d85571ffbde8a->leave($__internal_60dfef973f9bcef65972443d9888305911fef4096e4122c14b3d85571ffbde8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce223c0e0afefee54f5ccf96ab9cfe8c4c3d699a1f37e3f045c7e0b6ba058c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce223c0e0afefee54f5ccf96ab9cfe8c4c3d699a1f37e3f045c7e0b6ba058c7d->enter($__internal_ce223c0e0afefee54f5ccf96ab9cfe8c4c3d699a1f37e3f045c7e0b6ba058c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_116fbc82fd898cd465d88c4fb9131cce6668e55d76cf3e04440f7897210b462c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116fbc82fd898cd465d88c4fb9131cce6668e55d76cf3e04440f7897210b462c->enter($__internal_116fbc82fd898cd465d88c4fb9131cce6668e55d76cf3e04440f7897210b462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_116fbc82fd898cd465d88c4fb9131cce6668e55d76cf3e04440f7897210b462c->leave($__internal_116fbc82fd898cd465d88c4fb9131cce6668e55d76cf3e04440f7897210b462c_prof);

        
        $__internal_ce223c0e0afefee54f5ccf96ab9cfe8c4c3d699a1f37e3f045c7e0b6ba058c7d->leave($__internal_ce223c0e0afefee54f5ccf96ab9cfe8c4c3d699a1f37e3f045c7e0b6ba058c7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c642e26b4ef8fb45937939f1bd1199dff2b70ea210efca5dcb4ed67659e764be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c642e26b4ef8fb45937939f1bd1199dff2b70ea210efca5dcb4ed67659e764be->enter($__internal_c642e26b4ef8fb45937939f1bd1199dff2b70ea210efca5dcb4ed67659e764be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5e639b2ae14535216c9bb471e37c5102ab7b7991c78269e669167b96df6796b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e639b2ae14535216c9bb471e37c5102ab7b7991c78269e669167b96df6796b->enter($__internal_b5e639b2ae14535216c9bb471e37c5102ab7b7991c78269e669167b96df6796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b5e639b2ae14535216c9bb471e37c5102ab7b7991c78269e669167b96df6796b->leave($__internal_b5e639b2ae14535216c9bb471e37c5102ab7b7991c78269e669167b96df6796b_prof);

        
        $__internal_c642e26b4ef8fb45937939f1bd1199dff2b70ea210efca5dcb4ed67659e764be->leave($__internal_c642e26b4ef8fb45937939f1bd1199dff2b70ea210efca5dcb4ed67659e764be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
