<?php

/* ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig */
class __TwigTemplate_ea13c9f9d172005e8baeea9310b69c700752dfd59221bedbaee0c781e396e17c extends Twig_Template
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
        $__internal_947fad127d407711b4c0ceb279f53a6d8c2fb2108baf2b91e48713f3fe54148f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947fad127d407711b4c0ceb279f53a6d8c2fb2108baf2b91e48713f3fe54148f->enter($__internal_947fad127d407711b4c0ceb279f53a6d8c2fb2108baf2b91e48713f3fe54148f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig"));

        $__internal_5ffb0f03cbc29c1532d3e05023f221a2fc71f2112b16b152d6f144d144d93d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffb0f03cbc29c1532d3e05023f221a2fc71f2112b16b152d6f144d144d93d74->enter($__internal_5ffb0f03cbc29c1532d3e05023f221a2fc71f2112b16b152d6f144d144d93d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig"));

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


</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a  class=\"active\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
  \t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_liste_procedures");
        echo "\">Liste procédures</a>
\t<a href=\"";
        // line 23
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
     
  <div class=\"well\">
   ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "


  <div class=\"form-group\">



    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Client"));
        echo "


    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client", array()), 'errors');
        echo "


    <div class=\"col-sm-10\">

      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

 
 <div class=\"form-group\">



    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pression", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Pression"));
        echo "


    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pression", array()), 'errors');
        echo "


    <div class=\"col-sm-10\">

      ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pression", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

  <div class=\"form-group\">



    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duree", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Durée"));
        echo "


    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duree", array()), 'errors');
        echo "


    <div class=\"col-sm-10\">

      ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

  <div class=\"form-group\">



    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marge", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Marge"));
        echo "


    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marge", array()), 'errors');
        echo "


    <div class=\"col-sm-10\">

      ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marge", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

 <div class=\"form-group\">



    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diametre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Diamètre"));
        echo "


    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diametre", array()), 'errors');
        echo "


    <div class=\"col-sm-10\">

      ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diametre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

 <div class=\"form-group\">



    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Référence tube"));
        echo "


    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'errors');
        echo "


   <div class=\"col-sm-10\">

      ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

    </div>

  </div>

  <div class=\"btn pull-right\">
               <button class=\"btn btn-danger\"  type=\"reset\" >Remise à zéro</button>

  ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Enregistrer", "attr" => array("class" => "btn btn-success")));
        echo "

  </div>  
  
  ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "


  ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

 

  </div>
</div>

<div class=\"footer\">
    <div class=\"footerDesign\">
       <a href=\"http://groupe-oec.fr/campus/\" class=\"logo\">Campus OZANAM</a>
       <br><br>
       <hr>
        <a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_enregistre_procedure");
        echo "\">Enregistrer procédure</a>
  \t<a href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_selection_procedure");
        echo "\">Sélection procédure</a>
  \t<a href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_westaflex_platform_statistiques");
        echo "\">Statistiques</a>
  \t<a href=\"";
        // line 179
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

</body>
</html>

";
        
        $__internal_947fad127d407711b4c0ceb279f53a6d8c2fb2108baf2b91e48713f3fe54148f->leave($__internal_947fad127d407711b4c0ceb279f53a6d8c2fb2108baf2b91e48713f3fe54148f_prof);

        
        $__internal_5ffb0f03cbc29c1532d3e05023f221a2fc71f2112b16b152d6f144d144d93d74->leave($__internal_5ffb0f03cbc29c1532d3e05023f221a2fc71f2112b16b152d6f144d144d93d74_prof);

    }

    public function getTemplateName()
    {
        return "ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 179,  294 => 178,  290 => 177,  286 => 176,  270 => 163,  264 => 160,  257 => 156,  245 => 147,  237 => 142,  231 => 139,  218 => 129,  210 => 124,  204 => 121,  191 => 111,  183 => 106,  177 => 103,  164 => 93,  156 => 88,  150 => 85,  137 => 75,  129 => 70,  123 => 67,  109 => 56,  101 => 51,  95 => 48,  85 => 41,  80 => 39,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  25 => 1,);
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


</head>

<body>

<div id=\"mySidenav\" class=\"sidenav\">
  \t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  \t<a  class=\"active\" href=\"{{ path('projet_westaflex_platform_enregistre_procedure') }}\">Enregistrer procédure</a>
  \t<a href=\"{{ path('projet_westaflex_platform_selection_procedure') }}\">Sélection procédure</a>
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
     
  <div class=\"well\">
   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form) }}


  <div class=\"form-group\">



    {{ form_label(form.client, \"Client\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.client) }}


    <div class=\"col-sm-10\">

      {{ form_widget(form.client, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

 
 <div class=\"form-group\">



    {{ form_label(form.pression, \"Pression\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.pression) }}


    <div class=\"col-sm-10\">

      {{ form_widget(form.pression, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

  <div class=\"form-group\">



    {{ form_label(form.duree, \"Durée\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.duree) }}


    <div class=\"col-sm-10\">

      {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

  <div class=\"form-group\">



    {{ form_label(form.marge, \"Marge\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.marge) }}


    <div class=\"col-sm-10\">

      {{ form_widget(form.marge, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

 <div class=\"form-group\">



    {{ form_label(form.diametre, \"Diamètre\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.diametre) }}


    <div class=\"col-sm-10\">

      {{ form_widget(form.diametre, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

 <div class=\"form-group\">



    {{ form_label(form.reference, \"Référence tube\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.reference) }}


   <div class=\"col-sm-10\">

      {{ form_widget(form.reference, {'attr': {'class': 'form-control'}}) }}

    </div>

  </div>

  <div class=\"btn pull-right\">
               <button class=\"btn btn-danger\"  type=\"reset\" >Remise à zéro</button>

  {{ form_widget(form.save,  {'label': 'Enregistrer' ,'attr': {'class': 'btn btn-success'} }) }}

  </div>  
  
  {{ form_rest(form) }}


  {{ form_end(form) }}
</div>

 

  </div>
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

</body>
</html>

", "ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig", "/var/www/html/ProjetWestaflex/src/ProjetWestaflex/PlatformBundle/Resources/views/Projet/enregistreProcedure.html.twig");
    }
}
