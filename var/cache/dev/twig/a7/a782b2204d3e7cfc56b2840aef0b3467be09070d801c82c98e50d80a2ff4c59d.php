<?php

/* ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig */
class __TwigTemplate_f28cbd7203b4ffc7978fba56e0fb5761aacfcb2678b13e50aa3a01e0e808d616 extends Twig_Template
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
        $__internal_87218ec985c70a758afb5f7702ccfada5a104736cc3e1e61f0e9efac13526dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87218ec985c70a758afb5f7702ccfada5a104736cc3e1e61f0e9efac13526dd5->enter($__internal_87218ec985c70a758afb5f7702ccfada5a104736cc3e1e61f0e9efac13526dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig"));

        $__internal_80fba087ffe153c0acf1c11002ca5d8be53fd4d06b8c9d8c4379ff2d1ada0418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fba087ffe153c0acf1c11002ca5d8be53fd4d06b8c9d8c4379ff2d1ada0418->enter($__internal_80fba087ffe153c0acf1c11002ca5d8be53fd4d06b8c9d8c4379ff2d1ada0418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig"));

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
  \t<a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a class=\"active\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Déconnexion</a>
</div>

<div id=\"id01\" class=\"modal\">
    <div class=\"modal-content animate\">
      <div class=\"imgcontainer\">
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Fermer\">&times;</span>
      </div>
      <br><br>
      <p id=\"delete\"></p>

      <br><br>

      <div class=\"btn pull-right\">
          <button class=\"btn btn-danger\" type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\">Annuler</button>
          <button id=\"supp\" class=\"btn btn-success\" type=\"button\" >Supprimer</button>
      </div>
      
     
    </div>
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

<table id=\"Table\" class='table table-dark table-striped'>
<thead>
  <tr>
    <td>Procédure</td>
    <td>Client</td>
    <td>Pression</td>
    <td>Durée</td>
    <td>Marge</td>
    <td>Diamètre</td>
    <td>Référence</td>
  </tr>
</thead>
<tbody id=\"MaTable\">
";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["procedures"] ?? $this->getContext($context, "procedures")));
        foreach ($context['_seq'] as $context["_key"] => $context["procedure"]) {
            // line 83
            echo "   <tr ondblclick=\"deleteProcedure(this)\">
     <td id=\"demo\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "id", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "client", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "pression", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "duree", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "marge", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "diametre", array()), "html", null, true);
            echo "</td>
     <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "reference", array()), "html", null, true);
            echo "</td>
   </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['procedure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</tbody>
</table>

</div>
<div class=\"footer\">
    <div class=\"footerDesign\">
       <a href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Campus OZANAM</a>
       <br><br>
       <hr>
        <a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
  \t<a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 105
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

<script>
var modal = document.getElementById('id01');



function deleteProcedure(x){
  document.getElementById('id01').style.display='block';
  var colonneIndex = x.rowIndex;
  var id_ = document.getElementById(\"Table\").rows[colonneIndex].cells.namedItem(\"demo\").innerHTML;
  document.getElementById(\"delete\").innerHTML = \"Supprimer la procédure \"+id_;
 

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
    }

    if(event.target == supp){
      var url = \"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_delete_procedure", array("id" => 0));
        echo "\";
      document.location.href = url.replace('0', id_);
    }
}

  
  
}
</script>
</body>
</html>

";
        
        $__internal_87218ec985c70a758afb5f7702ccfada5a104736cc3e1e61f0e9efac13526dd5->leave($__internal_87218ec985c70a758afb5f7702ccfada5a104736cc3e1e61f0e9efac13526dd5_prof);

        
        $__internal_80fba087ffe153c0acf1c11002ca5d8be53fd4d06b8c9d8c4379ff2d1ada0418->leave($__internal_80fba087ffe153c0acf1c11002ca5d8be53fd4d06b8c9d8c4379ff2d1ada0418_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 156,  186 => 105,  182 => 104,  178 => 103,  174 => 102,  163 => 93,  154 => 90,  150 => 89,  146 => 88,  142 => 87,  138 => 86,  134 => 85,  130 => 84,  127 => 83,  123 => 82,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  25 => 1,);
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
  \t<a href=\"{{ path('projet_westaflex_platform_statistiques') }}\">Statistiques</a>
  \t<a class=\"active\" href=\"{{ path('projet_westaflex_platform_liste_procedures') }}\">Liste procédures</a>
\t<a href=\"{{ path('logout') }}\">Déconnexion</a>
</div>

<div id=\"id01\" class=\"modal\">
    <div class=\"modal-content animate\">
      <div class=\"imgcontainer\">
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"close\" title=\"Fermer\">&times;</span>
      </div>
      <br><br>
      <p id=\"delete\"></p>

      <br><br>

      <div class=\"btn pull-right\">
          <button class=\"btn btn-danger\" type=\"button\" onclick=\"document.getElementById('id01').style.display='none'\">Annuler</button>
          <button id=\"supp\" class=\"btn btn-success\" type=\"button\" >Supprimer</button>
      </div>
      
     
    </div>
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

<table id=\"Table\" class='table table-dark table-striped'>
<thead>
  <tr>
    <td>Procédure</td>
    <td>Client</td>
    <td>Pression</td>
    <td>Durée</td>
    <td>Marge</td>
    <td>Diamètre</td>
    <td>Référence</td>
  </tr>
</thead>
<tbody id=\"MaTable\">
{% for procedure in procedures %}
   <tr ondblclick=\"deleteProcedure(this)\">
     <td id=\"demo\">{{procedure.id}}</td>
     <td>{{procedure.client}}</td>
     <td>{{procedure.pression}}</td>
     <td>{{procedure.duree}}</td>
     <td>{{procedure.marge}}</td>
     <td>{{procedure.diametre}}</td>
     <td>{{procedure.reference}}</td>
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

<script>
var modal = document.getElementById('id01');



function deleteProcedure(x){
  document.getElementById('id01').style.display='block';
  var colonneIndex = x.rowIndex;
  var id_ = document.getElementById(\"Table\").rows[colonneIndex].cells.namedItem(\"demo\").innerHTML;
  document.getElementById(\"delete\").innerHTML = \"Supprimer la procédure \"+id_;
 

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = \"none\";
    }

    if(event.target == supp){
      var url = \"{{ path('projet_westaflex_platform_delete_procedure', { 'id': 0 }) }}\";
      document.location.href = url.replace('0', id_);
    }
}

  
  
}
</script>
</body>
</html>

", "ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Projet/listeProcedures.html.twig");
    }
}
