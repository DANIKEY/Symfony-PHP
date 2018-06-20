<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6162fbf8504ab51b4ab3cf9be7102776e49a8b725319672a3f224577efb8048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6162fbf8504ab51b4ab3cf9be7102776e49a8b725319672a3f224577efb8048->enter($__internal_a6162fbf8504ab51b4ab3cf9be7102776e49a8b725319672a3f224577efb8048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5e0e38067a584798ffce88c89ea2b1535af2e850b8d6931733188e4446a71556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0e38067a584798ffce88c89ea2b1535af2e850b8d6931733188e4446a71556->enter($__internal_5e0e38067a584798ffce88c89ea2b1535af2e850b8d6931733188e4446a71556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6162fbf8504ab51b4ab3cf9be7102776e49a8b725319672a3f224577efb8048->leave($__internal_a6162fbf8504ab51b4ab3cf9be7102776e49a8b725319672a3f224577efb8048_prof);

        
        $__internal_5e0e38067a584798ffce88c89ea2b1535af2e850b8d6931733188e4446a71556->leave($__internal_5e0e38067a584798ffce88c89ea2b1535af2e850b8d6931733188e4446a71556_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c23579bd7d6e8698540097ab5376612836d0ee73b3b7ccc743bcd64789a1a408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23579bd7d6e8698540097ab5376612836d0ee73b3b7ccc743bcd64789a1a408->enter($__internal_c23579bd7d6e8698540097ab5376612836d0ee73b3b7ccc743bcd64789a1a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f106ed947c6e10b4ea8d3f5d597f6b918faeaca7135744d0a6b883c07db4838b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f106ed947c6e10b4ea8d3f5d597f6b918faeaca7135744d0a6b883c07db4838b->enter($__internal_f106ed947c6e10b4ea8d3f5d597f6b918faeaca7135744d0a6b883c07db4838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f106ed947c6e10b4ea8d3f5d597f6b918faeaca7135744d0a6b883c07db4838b->leave($__internal_f106ed947c6e10b4ea8d3f5d597f6b918faeaca7135744d0a6b883c07db4838b_prof);

        
        $__internal_c23579bd7d6e8698540097ab5376612836d0ee73b3b7ccc743bcd64789a1a408->leave($__internal_c23579bd7d6e8698540097ab5376612836d0ee73b3b7ccc743bcd64789a1a408_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a021152cdd3db15aa337f7f2ce2ca1565d2cf3041083033de3fdf005700322b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a021152cdd3db15aa337f7f2ce2ca1565d2cf3041083033de3fdf005700322b2->enter($__internal_a021152cdd3db15aa337f7f2ce2ca1565d2cf3041083033de3fdf005700322b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8b752e3db7a350677ec5a2dcd2a2811a3aa338568d9121a633fd25c73a5071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b752e3db7a350677ec5a2dcd2a2811a3aa338568d9121a633fd25c73a5071a->enter($__internal_c8b752e3db7a350677ec5a2dcd2a2811a3aa338568d9121a633fd25c73a5071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c8b752e3db7a350677ec5a2dcd2a2811a3aa338568d9121a633fd25c73a5071a->leave($__internal_c8b752e3db7a350677ec5a2dcd2a2811a3aa338568d9121a633fd25c73a5071a_prof);

        
        $__internal_a021152cdd3db15aa337f7f2ce2ca1565d2cf3041083033de3fdf005700322b2->leave($__internal_a021152cdd3db15aa337f7f2ce2ca1565d2cf3041083033de3fdf005700322b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
