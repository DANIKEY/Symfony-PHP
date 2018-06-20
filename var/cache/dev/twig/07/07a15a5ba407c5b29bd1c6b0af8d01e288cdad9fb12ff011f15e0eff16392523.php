<?php

/* ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig */
class __TwigTemplate_1e65d61960154c9a4c9ff3af56d6163aefb261e994aa5409eab3969a02f1c9b1 extends Twig_Template
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
        $__internal_72598b059007c3593422481e43c2340ee19cceaa1fc2538d86d336e7fab97395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72598b059007c3593422481e43c2340ee19cceaa1fc2538d86d336e7fab97395->enter($__internal_72598b059007c3593422481e43c2340ee19cceaa1fc2538d86d336e7fab97395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig"));

        $__internal_ef1e6544e3d8e121238008cdf657b6f457dfa9ea4f92bf07576607149058206f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1e6544e3d8e121238008cdf657b6f457dfa9ea4f92bf07576607149058206f->enter($__internal_ef1e6544e3d8e121238008cdf657b6f457dfa9ea4f92bf07576607149058206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title></title>
<style>
\ttable {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px 0 lightblue;

}

td, th {

    padding: 20px;
    text-align: center;
}
</style>
</head>
<body>

<table  class='table table-dark table-striped'>
\t<tr>
\t\t<td>Client</td>
\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "client", array()), "html", null, true);
        echo "</td>
\t</tr>
    <tr>
    \t<td>Pression</td>
    \t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "pression", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
    \t<td>Durée</td>
    \t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "duree", array()), "html", null, true);
        echo "</td>
    </tr>
\t<tr>
\t\t<td>Marge</td>
\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "marge", array()), "html", null, true);
        echo "</td>
\t\t
\t</tr>\t
\t<tr>
\t\t<td>Diamètre</td>
\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "diametre", array()), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>Référence</td>
\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["procedure"] ?? $this->getContext($context, "procedure")), "reference", array()), "html", null, true);
        echo "</td>
\t</tr>
\t
</table>

</body>
</html>
";
        
        $__internal_72598b059007c3593422481e43c2340ee19cceaa1fc2538d86d336e7fab97395->leave($__internal_72598b059007c3593422481e43c2340ee19cceaa1fc2538d86d336e7fab97395_prof);

        
        $__internal_ef1e6544e3d8e121238008cdf657b6f457dfa9ea4f92bf07576607149058206f->leave($__internal_ef1e6544e3d8e121238008cdf657b6f457dfa9ea4f92bf07576607149058206f_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  80 => 42,  72 => 37,  65 => 33,  58 => 29,  51 => 25,  25 => 1,);
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
\t<title></title>
<style>
\ttable {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px 0 lightblue;

}

td, th {

    padding: 20px;
    text-align: center;
}
</style>
</head>
<body>

<table  class='table table-dark table-striped'>
\t<tr>
\t\t<td>Client</td>
\t\t<td>{{ procedure.client }}</td>
\t</tr>
    <tr>
    \t<td>Pression</td>
    \t<td>{{ procedure.pression }}</td>
    </tr>
    <tr>
    \t<td>Durée</td>
    \t<td>{{ procedure.duree }}</td>
    </tr>
\t<tr>
\t\t<td>Marge</td>
\t\t<td>{{ procedure.marge }}</td>
\t\t
\t</tr>\t
\t<tr>
\t\t<td>Diamètre</td>
\t\t<td>{{ procedure.diametre }}</td>
\t</tr>
\t<tr>
\t\t<td>Référence</td>
\t\t<td>{{ procedure.reference }}</td>
\t</tr>
\t
</table>

</body>
</html>
", "ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Projet/afficheProcedureId.html.twig");
    }
}
