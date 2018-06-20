<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de10cb98a3520904f694e610193920bdac478a4c344176a3cc43c9ba2a02900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de10cb98a3520904f694e610193920bdac478a4c344176a3cc43c9ba2a02900->enter($__internal_6de10cb98a3520904f694e610193920bdac478a4c344176a3cc43c9ba2a02900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_43ee34dec68570e43470ad75f1699c89a18277fd095b5fc42bcf72bfb331d0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ee34dec68570e43470ad75f1699c89a18277fd095b5fc42bcf72bfb331d0f6->enter($__internal_43ee34dec68570e43470ad75f1699c89a18277fd095b5fc42bcf72bfb331d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6de10cb98a3520904f694e610193920bdac478a4c344176a3cc43c9ba2a02900->leave($__internal_6de10cb98a3520904f694e610193920bdac478a4c344176a3cc43c9ba2a02900_prof);

        
        $__internal_43ee34dec68570e43470ad75f1699c89a18277fd095b5fc42bcf72bfb331d0f6->leave($__internal_43ee34dec68570e43470ad75f1699c89a18277fd095b5fc42bcf72bfb331d0f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cd30f4b75f7912d796541fd45ebfb066939bfff84d84c3ffcee8a7883df7595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd30f4b75f7912d796541fd45ebfb066939bfff84d84c3ffcee8a7883df7595->enter($__internal_7cd30f4b75f7912d796541fd45ebfb066939bfff84d84c3ffcee8a7883df7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e220b7e956624ec8dc6671be46cf8576e7c03d66b8e4616d7bd93578570bc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e220b7e956624ec8dc6671be46cf8576e7c03d66b8e4616d7bd93578570bc76->enter($__internal_4e220b7e956624ec8dc6671be46cf8576e7c03d66b8e4616d7bd93578570bc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e220b7e956624ec8dc6671be46cf8576e7c03d66b8e4616d7bd93578570bc76->leave($__internal_4e220b7e956624ec8dc6671be46cf8576e7c03d66b8e4616d7bd93578570bc76_prof);

        
        $__internal_7cd30f4b75f7912d796541fd45ebfb066939bfff84d84c3ffcee8a7883df7595->leave($__internal_7cd30f4b75f7912d796541fd45ebfb066939bfff84d84c3ffcee8a7883df7595_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/ProjetWestaflex/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
