<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_160a8a09853cc2cfc9badea9f726fad6f0bc330d00b13deca9dbdf4725dd7678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160a8a09853cc2cfc9badea9f726fad6f0bc330d00b13deca9dbdf4725dd7678->enter($__internal_160a8a09853cc2cfc9badea9f726fad6f0bc330d00b13deca9dbdf4725dd7678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_053097c029143b1ae1b21f5cc48175126f64afcb60580d6c338b89670dc9ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053097c029143b1ae1b21f5cc48175126f64afcb60580d6c338b89670dc9ef9b->enter($__internal_053097c029143b1ae1b21f5cc48175126f64afcb60580d6c338b89670dc9ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160a8a09853cc2cfc9badea9f726fad6f0bc330d00b13deca9dbdf4725dd7678->leave($__internal_160a8a09853cc2cfc9badea9f726fad6f0bc330d00b13deca9dbdf4725dd7678_prof);

        
        $__internal_053097c029143b1ae1b21f5cc48175126f64afcb60580d6c338b89670dc9ef9b->leave($__internal_053097c029143b1ae1b21f5cc48175126f64afcb60580d6c338b89670dc9ef9b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_54b7eaecdb58f944edbee32654df0d59950e299a3aca43d78021b8baca8f2dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b7eaecdb58f944edbee32654df0d59950e299a3aca43d78021b8baca8f2dcd->enter($__internal_54b7eaecdb58f944edbee32654df0d59950e299a3aca43d78021b8baca8f2dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_51d0571e0293d754dbf763dbdb07d7093622e4ce4415c708770f3d5e21fd0061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d0571e0293d754dbf763dbdb07d7093622e4ce4415c708770f3d5e21fd0061->enter($__internal_51d0571e0293d754dbf763dbdb07d7093622e4ce4415c708770f3d5e21fd0061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_51d0571e0293d754dbf763dbdb07d7093622e4ce4415c708770f3d5e21fd0061->leave($__internal_51d0571e0293d754dbf763dbdb07d7093622e4ce4415c708770f3d5e21fd0061_prof);

        
        $__internal_54b7eaecdb58f944edbee32654df0d59950e299a3aca43d78021b8baca8f2dcd->leave($__internal_54b7eaecdb58f944edbee32654df0d59950e299a3aca43d78021b8baca8f2dcd_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cabbf1f16343c3be0477122f385660cd5a42bd81288d70d84f6c8aa7c6f94115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabbf1f16343c3be0477122f385660cd5a42bd81288d70d84f6c8aa7c6f94115->enter($__internal_cabbf1f16343c3be0477122f385660cd5a42bd81288d70d84f6c8aa7c6f94115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f35c349be9b2081eefcb5e0eb0578d949ffa06f5bf1dbe174c5be7d73ac51c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35c349be9b2081eefcb5e0eb0578d949ffa06f5bf1dbe174c5be7d73ac51c15->enter($__internal_f35c349be9b2081eefcb5e0eb0578d949ffa06f5bf1dbe174c5be7d73ac51c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f35c349be9b2081eefcb5e0eb0578d949ffa06f5bf1dbe174c5be7d73ac51c15->leave($__internal_f35c349be9b2081eefcb5e0eb0578d949ffa06f5bf1dbe174c5be7d73ac51c15_prof);

        
        $__internal_cabbf1f16343c3be0477122f385660cd5a42bd81288d70d84f6c8aa7c6f94115->leave($__internal_cabbf1f16343c3be0477122f385660cd5a42bd81288d70d84f6c8aa7c6f94115_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
