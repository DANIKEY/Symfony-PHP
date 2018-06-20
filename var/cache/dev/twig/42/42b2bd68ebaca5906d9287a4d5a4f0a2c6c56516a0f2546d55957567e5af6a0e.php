<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c563c3c299baaf8779d909f79ca3aac99194a9334ef100fc9dcd33f7de7fdaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c563c3c299baaf8779d909f79ca3aac99194a9334ef100fc9dcd33f7de7fdaee->enter($__internal_c563c3c299baaf8779d909f79ca3aac99194a9334ef100fc9dcd33f7de7fdaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_72a084699f0b810325b189b0cd1cbe3348b8887211f74812de4e851ed6435aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a084699f0b810325b189b0cd1cbe3348b8887211f74812de4e851ed6435aff->enter($__internal_72a084699f0b810325b189b0cd1cbe3348b8887211f74812de4e851ed6435aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c563c3c299baaf8779d909f79ca3aac99194a9334ef100fc9dcd33f7de7fdaee->leave($__internal_c563c3c299baaf8779d909f79ca3aac99194a9334ef100fc9dcd33f7de7fdaee_prof);

        
        $__internal_72a084699f0b810325b189b0cd1cbe3348b8887211f74812de4e851ed6435aff->leave($__internal_72a084699f0b810325b189b0cd1cbe3348b8887211f74812de4e851ed6435aff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_123d545262c2fece9f72a2b3a0d7c4ce6c1274166199c38c99f6bb2679899ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123d545262c2fece9f72a2b3a0d7c4ce6c1274166199c38c99f6bb2679899ebb->enter($__internal_123d545262c2fece9f72a2b3a0d7c4ce6c1274166199c38c99f6bb2679899ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_326eb76fda974f66b41af931bb1a50999b52cb479ad4764ad67dda3392eb6e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326eb76fda974f66b41af931bb1a50999b52cb479ad4764ad67dda3392eb6e03->enter($__internal_326eb76fda974f66b41af931bb1a50999b52cb479ad4764ad67dda3392eb6e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_326eb76fda974f66b41af931bb1a50999b52cb479ad4764ad67dda3392eb6e03->leave($__internal_326eb76fda974f66b41af931bb1a50999b52cb479ad4764ad67dda3392eb6e03_prof);

        
        $__internal_123d545262c2fece9f72a2b3a0d7c4ce6c1274166199c38c99f6bb2679899ebb->leave($__internal_123d545262c2fece9f72a2b3a0d7c4ce6c1274166199c38c99f6bb2679899ebb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8da5011f528f712526e930aa0b6e618682be01bb54650f879716836ee27d66dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da5011f528f712526e930aa0b6e618682be01bb54650f879716836ee27d66dc->enter($__internal_8da5011f528f712526e930aa0b6e618682be01bb54650f879716836ee27d66dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ebce6696759e0e6898bf9a65d8bae1a5ad04556f7f588b8763392410c30ca3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebce6696759e0e6898bf9a65d8bae1a5ad04556f7f588b8763392410c30ca3c->enter($__internal_1ebce6696759e0e6898bf9a65d8bae1a5ad04556f7f588b8763392410c30ca3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ebce6696759e0e6898bf9a65d8bae1a5ad04556f7f588b8763392410c30ca3c->leave($__internal_1ebce6696759e0e6898bf9a65d8bae1a5ad04556f7f588b8763392410c30ca3c_prof);

        
        $__internal_8da5011f528f712526e930aa0b6e618682be01bb54650f879716836ee27d66dc->leave($__internal_8da5011f528f712526e930aa0b6e618682be01bb54650f879716836ee27d66dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_200d851eb9829f5a817e2220b86916f9fb5dd27ff18a0217f4f13892c6b5210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200d851eb9829f5a817e2220b86916f9fb5dd27ff18a0217f4f13892c6b5210c->enter($__internal_200d851eb9829f5a817e2220b86916f9fb5dd27ff18a0217f4f13892c6b5210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c71d4a645190f76df3c4ad20c9035c7e775546f7da4f6171fa85be17f4da8fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71d4a645190f76df3c4ad20c9035c7e775546f7da4f6171fa85be17f4da8fc1->enter($__internal_c71d4a645190f76df3c4ad20c9035c7e775546f7da4f6171fa85be17f4da8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c71d4a645190f76df3c4ad20c9035c7e775546f7da4f6171fa85be17f4da8fc1->leave($__internal_c71d4a645190f76df3c4ad20c9035c7e775546f7da4f6171fa85be17f4da8fc1_prof);

        
        $__internal_200d851eb9829f5a817e2220b86916f9fb5dd27ff18a0217f4f13892c6b5210c->leave($__internal_200d851eb9829f5a817e2220b86916f9fb5dd27ff18a0217f4f13892c6b5210c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a794cf82a88e625be92223debad905b5a81a59c11759c54da2e2a096f2f41607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a794cf82a88e625be92223debad905b5a81a59c11759c54da2e2a096f2f41607->enter($__internal_a794cf82a88e625be92223debad905b5a81a59c11759c54da2e2a096f2f41607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ffb6cf59957ba2db55c5b0e8d0248da04c30ef355432de8512a623d833fa241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffb6cf59957ba2db55c5b0e8d0248da04c30ef355432de8512a623d833fa241->enter($__internal_6ffb6cf59957ba2db55c5b0e8d0248da04c30ef355432de8512a623d833fa241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ffb6cf59957ba2db55c5b0e8d0248da04c30ef355432de8512a623d833fa241->leave($__internal_6ffb6cf59957ba2db55c5b0e8d0248da04c30ef355432de8512a623d833fa241_prof);

        
        $__internal_a794cf82a88e625be92223debad905b5a81a59c11759c54da2e2a096f2f41607->leave($__internal_a794cf82a88e625be92223debad905b5a81a59c11759c54da2e2a096f2f41607_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/ProjetWestaflex/app/Resources/views/base.html.twig");
    }
}
