<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_623f7f6bc5944724a413361a7745e743a3ae2d936903d3c9819b533a6c19d040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623f7f6bc5944724a413361a7745e743a3ae2d936903d3c9819b533a6c19d040->enter($__internal_623f7f6bc5944724a413361a7745e743a3ae2d936903d3c9819b533a6c19d040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2ed3ecdcd58031d1c54481b5dc903afbca421d047a52ca1373bd2d17b87649aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed3ecdcd58031d1c54481b5dc903afbca421d047a52ca1373bd2d17b87649aa->enter($__internal_2ed3ecdcd58031d1c54481b5dc903afbca421d047a52ca1373bd2d17b87649aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_623f7f6bc5944724a413361a7745e743a3ae2d936903d3c9819b533a6c19d040->leave($__internal_623f7f6bc5944724a413361a7745e743a3ae2d936903d3c9819b533a6c19d040_prof);

        
        $__internal_2ed3ecdcd58031d1c54481b5dc903afbca421d047a52ca1373bd2d17b87649aa->leave($__internal_2ed3ecdcd58031d1c54481b5dc903afbca421d047a52ca1373bd2d17b87649aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01cf9dea3a672577085695bb6b6fec1bc9bc14b285eb75bbbc7a1e702577522b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cf9dea3a672577085695bb6b6fec1bc9bc14b285eb75bbbc7a1e702577522b->enter($__internal_01cf9dea3a672577085695bb6b6fec1bc9bc14b285eb75bbbc7a1e702577522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a79470c73347386988763b03b89686bf491b632e520afc39aef803b8b1a7a2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79470c73347386988763b03b89686bf491b632e520afc39aef803b8b1a7a2f0->enter($__internal_a79470c73347386988763b03b89686bf491b632e520afc39aef803b8b1a7a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a79470c73347386988763b03b89686bf491b632e520afc39aef803b8b1a7a2f0->leave($__internal_a79470c73347386988763b03b89686bf491b632e520afc39aef803b8b1a7a2f0_prof);

        
        $__internal_01cf9dea3a672577085695bb6b6fec1bc9bc14b285eb75bbbc7a1e702577522b->leave($__internal_01cf9dea3a672577085695bb6b6fec1bc9bc14b285eb75bbbc7a1e702577522b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f7f64081e70cd66c24f9259037c7c9d596db7646d2308aac0ab1c844cfd77da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7f64081e70cd66c24f9259037c7c9d596db7646d2308aac0ab1c844cfd77da->enter($__internal_9f7f64081e70cd66c24f9259037c7c9d596db7646d2308aac0ab1c844cfd77da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a99d972d4e5dcb320f37d8d81c34b746eaf85943fcea14b6b7dce27b35557af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99d972d4e5dcb320f37d8d81c34b746eaf85943fcea14b6b7dce27b35557af2->enter($__internal_a99d972d4e5dcb320f37d8d81c34b746eaf85943fcea14b6b7dce27b35557af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a99d972d4e5dcb320f37d8d81c34b746eaf85943fcea14b6b7dce27b35557af2->leave($__internal_a99d972d4e5dcb320f37d8d81c34b746eaf85943fcea14b6b7dce27b35557af2_prof);

        
        $__internal_9f7f64081e70cd66c24f9259037c7c9d596db7646d2308aac0ab1c844cfd77da->leave($__internal_9f7f64081e70cd66c24f9259037c7c9d596db7646d2308aac0ab1c844cfd77da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d943f00e829a842b5d0fbed20abc685463871c72d249bb922777aefbad5c0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d943f00e829a842b5d0fbed20abc685463871c72d249bb922777aefbad5c0a1->enter($__internal_3d943f00e829a842b5d0fbed20abc685463871c72d249bb922777aefbad5c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6daf5f5753aaa0f6270701e664b8f964ef140ad825feba6277882dcb815fa87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daf5f5753aaa0f6270701e664b8f964ef140ad825feba6277882dcb815fa87d->enter($__internal_6daf5f5753aaa0f6270701e664b8f964ef140ad825feba6277882dcb815fa87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6daf5f5753aaa0f6270701e664b8f964ef140ad825feba6277882dcb815fa87d->leave($__internal_6daf5f5753aaa0f6270701e664b8f964ef140ad825feba6277882dcb815fa87d_prof);

        
        $__internal_3d943f00e829a842b5d0fbed20abc685463871c72d249bb922777aefbad5c0a1->leave($__internal_3d943f00e829a842b5d0fbed20abc685463871c72d249bb922777aefbad5c0a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
