<?php

/* ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig */
class __TwigTemplate_3362ee460367ab890fc26593c0c26b979e22b63f9480adc35386e6c1ba6976a5 extends Twig_Template
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
        $__internal_4e72da3e11592832259abfc539a1e8ff06d494726728671ab35042cca874370b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e72da3e11592832259abfc539a1e8ff06d494726728671ab35042cca874370b->enter($__internal_4e72da3e11592832259abfc539a1e8ff06d494726728671ab35042cca874370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig"));

        $__internal_879fcd30bf4d0bd120865b4587c0893e69db18dcbdbc91cc1fdf7027f56bb800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879fcd30bf4d0bd120865b4587c0893e69db18dcbdbc91cc1fdf7027f56bb800->enter($__internal_879fcd30bf4d0bd120865b4587c0893e69db18dcbdbc91cc1fdf7027f56bb800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr-FR\">
<head>
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
   <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleProcedure.css\" type=\"text/css\" />
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleFooter.css\" type=\"text/css\" />
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

<style>
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; 
}
.select-selected {
  background-color:  #036873;
}
.select-selected:after {
  position: absolute;
  content: \"\";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 7px solid transparent;
  border-color: #fff transparent transparent transparent;
  
}

.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
.select-items {
  position: absolute;
  background-color:  #036873;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
.select-hide {
  display: none;
}
.select-items div:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
#BoutonSend{
  background-color:  #036873;
    border: none;
    color: lightblue;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    box-shadow: 0 4px 8px 0 grey;
    border :2px solid lightblue;
}
.conteneur{
  margin-left: 180px;
}
form{
  border :2px solid transparent ;
  padding-top:20px;
  padding-bottom:150px;
  padding-left : 20px;
  padding-right:  20px;
  background-color: #036873;
  border-radius:12px;
  /*box-shadow: 0 4px 8px 0 grey;*/

}
</style>

</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
        <a class=\"active\" href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
\t<a href=\"";
        // line 102
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

<div id=\"page\">
     <form name=\"myForm\">
       <div class=\"custom-select\" style=\"width:150px;\">
        <select name=\"Procedures\">
           ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["procedures"] ?? $this->getContext($context, "procedures")));
        foreach ($context['_seq'] as $context["_key"] => $context["procedure"]) {
            // line 120
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "id", array()), "html", null, true);
            echo "\">Procédure ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["procedure"], "id", array()), "html", null, true);
            echo "</option>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['procedure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </select>
       </div>
       <div class=\"conteneur\">
              <div id=\"txtHint\"></div>
              <div class=\"btn pull-right\">
             <br><br>
            <button id=\"BoutonSend\" type=\"button\" onclick=\"updateProcedure()\" >Enregistrer</button>
            </div>
           </div>
     </form>
  
</div>

<div class=\"footer\">
    <div class=\"footerDesign\">
       <a href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Campus OZANAM</a>
       <br><br>
       <hr>
        <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
  \t<a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
    </div>
</div>

<script>
function openNav() {
    document.getElementById(\"mySidenav\").style.width = \"330px\";
    document.getElementById(\"page\").style.marginLeft = \"250px\";
    document.getElementById(\"entete\").style.backgroundColor = \"white\";
    document.getElementById(\"lien\").style.backgroundColor  = \"white\";
    document.getElementById(\"lien\").style.color = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"white\";
}

}

function closeNav() {
    document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"page\").style.marginLeft= \"auto\";
    document.getElementById(\"entete\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").style.color = \"lightblue\";
    document.getElementById(\"lien\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"#036873\";
}


}
</script>
<script>

function AfficheProcedure(){
   var str = document.forms[\"myForm\"][\"Procedures\"].value;
  
  if(str==\"\"){
    document.getElementById(\"txtHint\").innerHTML = \"\"
    return;

  }else {
        if (window.XMLHttpRequest) {
            // Code pour IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code pour IE6, IE5
            xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(\"txtHint\").innerHTML = this.responseText;
            }
        };
        xmlhttp.open(\"GET\",\"http://localhost/ProjetWestaflex/web/app_dev.php/afficheProcedureId/\"+str,true);
        xmlhttp.send();
    }
}
    var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName(\"custom-select\");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName(\"select\")[0];
 
  a = document.createElement(\"DIV\");
  a.setAttribute(\"class\", \"select-selected\");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
 
  b = document.createElement(\"DIV\");
  b.setAttribute(\"class\", \"select-items select-hide\");
  for (j = 0; j < selElmnt.length; j++) {
    
    c = document.createElement(\"DIV\");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener(\"click\", function(e) {
       
        var i, s, h;
        s = this.parentNode.parentNode.getElementsByTagName(\"select\")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener(\"click\", function(e) {
      
      AfficheProcedure();
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle(\"select-hide\");
      this.classList.toggle(\"select-arrow-active\");
    });
}
function closeAllSelect(elmnt) {
  
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName(\"select-items\");
  y = document.getElementsByClassName(\"select-selected\");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove(\"select-arrow-active\");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add(\"select-hide\");
    }
  }
}

document.addEventListener(\"click\", closeAllSelect);
</script>

<script>

function updateProcedure(){
      var str = document.forms[\"myForm\"][\"Procedures\"].value;
      var url = \"";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_update_procedure", array("id" => 0));
        echo "\";
      document.location.href = url.replace('0', str);
}

</script>

</body>
</html>

";
        
        $__internal_4e72da3e11592832259abfc539a1e8ff06d494726728671ab35042cca874370b->leave($__internal_4e72da3e11592832259abfc539a1e8ff06d494726728671ab35042cca874370b_prof);

        
        $__internal_879fcd30bf4d0bd120865b4587c0893e69db18dcbdbc91cc1fdf7027f56bb800->leave($__internal_879fcd30bf4d0bd120865b4587c0893e69db18dcbdbc91cc1fdf7027f56bb800_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 267,  207 => 143,  203 => 142,  199 => 141,  195 => 140,  175 => 122,  164 => 120,  160 => 119,  140 => 102,  136 => 101,  132 => 100,  128 => 99,  124 => 98,  25 => 1,);
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
   <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/styleFooter.css\" type=\"text/css\" />
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

<style>
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; 
}
.select-selected {
  background-color:  #036873;
}
.select-selected:after {
  position: absolute;
  content: \"\";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 7px solid transparent;
  border-color: #fff transparent transparent transparent;
  
}

.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
.select-items {
  position: absolute;
  background-color:  #036873;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
.select-hide {
  display: none;
}
.select-items div:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
#BoutonSend{
  background-color:  #036873;
    border: none;
    color: lightblue;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    box-shadow: 0 4px 8px 0 grey;
    border :2px solid lightblue;
}
.conteneur{
  margin-left: 180px;
}
form{
  border :2px solid transparent ;
  padding-top:20px;
  padding-bottom:150px;
  padding-left : 20px;
  padding-right:  20px;
  background-color: #036873;
  border-radius:12px;
  /*box-shadow: 0 4px 8px 0 grey;*/

}
</style>

</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a href=\"{{ path('projet_westaflex_platform_enregistre_procedure') }}\">Enregistrer procédure</a>
        <a class=\"active\" href=\"{{ path('projet_westaflex_platform_selection_procedure') }}\">Sélection procédure</a>
  \t<a href=\"{{ path('projet_westaflex_platform_statistiques') }}\">Statistiques</a>
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

<div id=\"page\">
     <form name=\"myForm\">
       <div class=\"custom-select\" style=\"width:150px;\">
        <select name=\"Procedures\">
           {% for procedure in procedures %}
\t\t<option value=\"{{procedure.id}}\">Procédure {{procedure.id}}</option>
           {% endfor %}
        </select>
       </div>
       <div class=\"conteneur\">
              <div id=\"txtHint\"></div>
              <div class=\"btn pull-right\">
             <br><br>
            <button id=\"BoutonSend\" type=\"button\" onclick=\"updateProcedure()\" >Enregistrer</button>
            </div>
           </div>
     </form>
  
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
    document.getElementById(\"page\").style.marginLeft = \"250px\";
    document.getElementById(\"entete\").style.backgroundColor = \"white\";
    document.getElementById(\"lien\").style.backgroundColor  = \"white\";
    document.getElementById(\"lien\").style.color = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"white\";
}

}

function closeNav() {
    document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"page\").style.marginLeft= \"auto\";
    document.getElementById(\"entete\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").style.color = \"lightblue\";
    document.getElementById(\"lien\").style.backgroundColor = \"#036873\";
    document.getElementById(\"lien\").onmouseover = function() {
    this.style.backgroundColor = \"#036873\";
}


}
</script>
<script>

function AfficheProcedure(){
   var str = document.forms[\"myForm\"][\"Procedures\"].value;
  
  if(str==\"\"){
    document.getElementById(\"txtHint\").innerHTML = \"\"
    return;

  }else {
        if (window.XMLHttpRequest) {
            // Code pour IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code pour IE6, IE5
            xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(\"txtHint\").innerHTML = this.responseText;
            }
        };
        xmlhttp.open(\"GET\",\"http://localhost/ProjetWestaflex/web/app_dev.php/afficheProcedureId/\"+str,true);
        xmlhttp.send();
    }
}
    var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName(\"custom-select\");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName(\"select\")[0];
 
  a = document.createElement(\"DIV\");
  a.setAttribute(\"class\", \"select-selected\");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
 
  b = document.createElement(\"DIV\");
  b.setAttribute(\"class\", \"select-items select-hide\");
  for (j = 0; j < selElmnt.length; j++) {
    
    c = document.createElement(\"DIV\");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener(\"click\", function(e) {
       
        var i, s, h;
        s = this.parentNode.parentNode.getElementsByTagName(\"select\")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener(\"click\", function(e) {
      
      AfficheProcedure();
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle(\"select-hide\");
      this.classList.toggle(\"select-arrow-active\");
    });
}
function closeAllSelect(elmnt) {
  
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName(\"select-items\");
  y = document.getElementsByClassName(\"select-selected\");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove(\"select-arrow-active\");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add(\"select-hide\");
    }
  }
}

document.addEventListener(\"click\", closeAllSelect);
</script>

<script>

function updateProcedure(){
      var str = document.forms[\"myForm\"][\"Procedures\"].value;
      var url = \"{{ path('projet_westaflex_platform_update_procedure', { 'id': 0 }) }}\";
      document.location.href = url.replace('0', str);
}

</script>

</body>
</html>

", "ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Projet/selectionProcedure.html.twig");
    }
}
