<?php

/* ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig */
class __TwigTemplate_e7ff465df317e068fa38558803d671778d0c7598c28f5012e6c50766c5ef396c extends Twig_Template
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
        $__internal_4d144ea329e5d73c52ffa3299852e5d8aa5d8d4263219b2af8358ee56768d173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d144ea329e5d73c52ffa3299852e5d8aa5d8d4263219b2af8358ee56768d173->enter($__internal_4d144ea329e5d73c52ffa3299852e5d8aa5d8d4263219b2af8358ee56768d173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig"));

        $__internal_9a59d4e5889ff894ff612c905b9edd39e18c3caee588f8bbd747e40537b0cfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a59d4e5889ff894ff612c905b9edd39e18c3caee588f8bbd747e40537b0cfb6->enter($__internal_9a59d4e5889ff894ff612c905b9edd39e18c3caee588f8bbd747e40537b0cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr-FR\">
<head>
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleProcedure.css\" type=\"text/css\" />
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/recherche_box.css\" type=\"text/css\" />
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleFooter.css\" type=\"text/css\" />
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
\$(document).ready(function(){
  \$(\"#RechercheForm\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#MaTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a class=\"active\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Déconnexion</a>
</div>
<div id=\"entete\" class=\"header\">
  <a id=\"lien\" href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Contrôle d'étanchéitéV2</a>
  <div class=\"header-right\">
     
       <div id=\"main\">
  \t\t<span style=\"font-size:30px;cursor:pointer;color:white\" onclick=\"openNav()\">&#9776; Menu</span>
\t</div>

  </div>
</div>

<div id=\"conteneur\" class='container'>
<input type=\"text\" id=\"RechercheForm\" placeholder=\"Recherche...\">

<table id=\"Matable\" class='table table-dark table-striped'>
<thead>
  <tr>
    <td>Client</td>
    <td>Référence tube</td>
    <td>Nombre de tube défectueux</td>
    <td>Nombre de tube sans défaut</td>
  </tr>
</thead>
<tbody id=\"MaTable\">
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stats"] ?? $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["donnees"]) {
            // line 60
            echo "   <tr>
     <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["donnees"], "client", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["donnees"], "reference", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["donnees"], "tuyauxDefectueux", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["donnees"], "tuyauxNonDefectueux", array()), "html", null, true);
            echo "</td>

    
   </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donnees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</tbody>
</table>

</div>
<div class=\"footer\">
    <div class=\"footerDesign\">
       <a href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Campus OZANAM</a>
       <br><br>
       <hr>
        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
  \t<a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
    </div>
</div>

<script>
function openNav() {
    document.getElementById(\"mySidenav\").style.width = \"330px\";
    document.getElementById(\"conteneur\").style.marginLeft = \"0px\";
    document.getElementById(\"entete\").style.backgroundColor = \"white\";
    document.getElementById(\"conteneur\").style.width = \"75%\";
    document.getElementById(\"lien\").style.backgroundColor  = \"white\";
    document.getElementById(\"lien\").style.color = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"white\";
}

}

function closeNav() {
    document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"conteneur\").style.marginLeft= \"auto\";
    document.getElementById('conteneur').style.width= '90%';
    document.getElementById(\"entete\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").style.color = \"lightblue\";
    document.getElementById(\"lien\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"#036873\";
}

}
</script>

</body>
</html>

";
        
        $__internal_4d144ea329e5d73c52ffa3299852e5d8aa5d8d4263219b2af8358ee56768d173->leave($__internal_4d144ea329e5d73c52ffa3299852e5d8aa5d8d4263219b2af8358ee56768d173_prof);

        
        $__internal_9a59d4e5889ff894ff612c905b9edd39e18c3caee588f8bbd747e40537b0cfb6->leave($__internal_9a59d4e5889ff894ff612c905b9edd39e18c3caee588f8bbd747e40537b0cfb6_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 81,  149 => 80,  145 => 79,  141 => 78,  130 => 69,  119 => 64,  115 => 63,  111 => 62,  107 => 61,  104 => 60,  100 => 59,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  25 => 1,);
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
<html lang=\"fr-FR\">
<head>
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleProcedure.css\" type=\"text/css\" />
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/recherche_box.css\" type=\"text/css\" />
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleFooter.css\" type=\"text/css\" />
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
\$(document).ready(function(){
  \$(\"#RechercheForm\").on(\"keyup\", function() {
    var value = \$(this).val().toLowerCase();
    \$(\"#MaTable tr\").filter(function() {
      \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a href=\"{{ path('projet_westaflex_platform_enregistre_procedure') }}\">Enregistrer procédure</a>
        <a href=\"{{ path('projet_westaflex_platform_selection_procedure') }}\">Sélection procédure</a>
  \t<a class=\"active\" href=\"{{ path('projet_westaflex_platform_statistiques') }}\">Statistiques</a>
  \t<a href=\"{{ path('projet_westaflex_platform_liste_procedures') }}\">Liste procédures</a>
\t<a href=\"{{ path('logout') }}\">Déconnexion</a>
</div>
<div id=\"entete\" class=\"header\">
  <a id=\"lien\" href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Contrôle d'étanchéitéV2</a>
  <div class=\"header-right\">
     
       <div id=\"main\">
  \t\t<span style=\"font-size:30px;cursor:pointer;color:white\" onclick=\"openNav()\">&#9776; Menu</span>
\t</div>

  </div>
</div>

<div id=\"conteneur\" class='container'>
<input type=\"text\" id=\"RechercheForm\" placeholder=\"Recherche...\">

<table id=\"Matable\" class='table table-dark table-striped'>
<thead>
  <tr>
    <td>Client</td>
    <td>Référence tube</td>
    <td>Nombre de tube défectueux</td>
    <td>Nombre de tube sans défaut</td>
  </tr>
</thead>
<tbody id=\"MaTable\">
{% for donnees in stats  %}
   <tr>
     <td>{{donnees.client}}</td>
     <td>{{donnees.reference}}</td>
     <td>{{donnees.tuyauxDefectueux}}</td>
     <td>{{donnees.tuyauxNonDefectueux}}</td>

    
   </tr>
{% endfor %}
</tbody>
</table>

</div>
<div class=\"footer\">
    <div class=\"footerDesign\">
       <a href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Campus OZANAM</a>
       <br><br>
       <hr>
        <a href=\"{{ path('projet_westaflex_platform_enregistre_procedure') }}\">Enregistrer procédure</a>
  \t<a href=\"{{ path('projet_westaflex_platform_selection_procedure') }}\">Sélection procédure</a>
  \t<a href=\"{{ path('projet_westaflex_platform_statistiques') }}\">Statistiques</a>
  \t<a href=\"{{ path('projet_westaflex_platform_liste_procedures') }}\">Liste procédures</a>
    </div>
</div>

<script>
function openNav() {
    document.getElementById(\"mySidenav\").style.width = \"330px\";
    document.getElementById(\"conteneur\").style.marginLeft = \"0px\";
    document.getElementById(\"entete\").style.backgroundColor = \"white\";
    document.getElementById(\"conteneur\").style.width = \"75%\";
    document.getElementById(\"lien\").style.backgroundColor  = \"white\";
    document.getElementById(\"lien\").style.color = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"white\";
}

}

function closeNav() {
    document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"conteneur\").style.marginLeft= \"auto\";
    document.getElementById('conteneur').style.width= '90%';
    document.getElementById(\"entete\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").style.color = \"lightblue\";
    document.getElementById(\"lien\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"#036873\";
}

}
</script>

</body>
</html>

", "ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Projet/statistiques.html.twig");
    }
}
