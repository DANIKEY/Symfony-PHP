<?php

/* ProjetWestaflexPlatformBundle:Default:index.html.twig */
class __TwigTemplate_aed035d063a3d8857581054db7e30019fbf0cbd90c3a09f9ec355306c25a5031 extends Twig_Template
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
        $__internal_f52b11d6679058c6b9807dcbd6de3fb2ddce3768ad3e78865e3a572cae71ac6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52b11d6679058c6b9807dcbd6de3fb2ddce3768ad3e78865e3a572cae71ac6b->enter($__internal_f52b11d6679058c6b9807dcbd6de3fb2ddce3768ad3e78865e3a572cae71ac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Default:index.html.twig"));

        $__internal_39caf04457464657318d2d150dbcd26f9bf8a4888a895ea87be3fee831978dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39caf04457464657318d2d150dbcd26f9bf8a4888a895ea87be3fee831978dea->enter($__internal_39caf04457464657318d2d150dbcd26f9bf8a4888a895ea87be3fee831978dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
<li><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Déconnexion</a></li>
";
        
        $__internal_f52b11d6679058c6b9807dcbd6de3fb2ddce3768ad3e78865e3a572cae71ac6b->leave($__internal_f52b11d6679058c6b9807dcbd6de3fb2ddce3768ad3e78865e3a572cae71ac6b_prof);

        
        $__internal_39caf04457464657318d2d150dbcd26f9bf8a4888a895ea87be3fee831978dea->leave($__internal_39caf04457464657318d2d150dbcd26f9bf8a4888a895ea87be3fee831978dea_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
<li><a href=\"{{ path('logout') }}\">Déconnexion</a></li>
", "ProjetWestaflexPlatformBundle:Default:index.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
