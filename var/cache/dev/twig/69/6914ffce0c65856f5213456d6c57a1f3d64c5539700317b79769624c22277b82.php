<?php

/* UserUserBundle:Security:login.html.twig */
class __TwigTemplate_416afb447f6320c9d2c31634c7d3c26d95adbc66563df9b70d61c2d9126321de extends Twig_Template
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
        $__internal_0fff409405fff2603be43f73a8978948cd19e8cbab89d85a9f52208558163270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fff409405fff2603be43f73a8978948cd19e8cbab89d85a9f52208558163270->enter($__internal_0fff409405fff2603be43f73a8978948cd19e8cbab89d85a9f52208558163270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserUserBundle:Security:login.html.twig"));

        $__internal_92d6a00910519cbe6452b8c7655726efee6d9907ef3052359d513d8325d7209b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d6a00910519cbe6452b8c7655726efee6d9907ef3052359d513d8325d7209b->enter($__internal_92d6a00910519cbe6452b8c7655726efee6d9907ef3052359d513d8325d7209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserUserBundle:Security:login.html.twig"));

        // line 1
        echo "<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
        <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/style.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<style>

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 12px;
    font-family: monospace;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}


.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}


.container:hover input ~ .checkmark {
    background-color: #ccc;
}


.container input:checked ~ .checkmark {
    background-color: #036873;
}


.checkmark:after {
    content: \"\";
    position: absolute;
    display: none;
}


.container input:checked ~ .checkmark:after {
    display: block;
}


.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

</style>
</head>
<body>

<div id=\"page\">

  <a href=\"http://groupe-oec.fr/campus/\">
     <img src = \"/ProjetWestaflex/web/img/logo-ozanam.png\" alt=\"logo\">
     </a>
  <br><br>
  ";
        // line 89
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 90
            echo "
    <div class=\"alert alert-danger\">Nom utilisateur ou mot de passe mauvais</div>

   ";
        }
        // line 94
        echo " 
  <form action=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">

   

    <label for=\"username\">Utilisateur :</label>

    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />


    <label for=\"password\">Mot de passe :</label>

    <input type=\"password\" id=\"password\" name=\"_password\" />

    <br><br>

   <label class=\"container\">Afficher Mot passe
  \t<input type=\"checkbox\" onclick=\"HideShowPassword()\">
  \t<span class=\"checkmark\"></span>
   </label>

   <br><br>

   <button id=\"buttonSubmit\" type=\"submit\" value=\"Connexion\">Connexion</button>

  </form>

</div>

<script>
function HideShowPassword() {
    var x = document.getElementById(\"password\");
    if (x.type === \"password\") {
        x.type = \"text\";
    } else {
        x.type = \"password\";
    }
}
</script>

</body>
</html>
";
        
        $__internal_0fff409405fff2603be43f73a8978948cd19e8cbab89d85a9f52208558163270->leave($__internal_0fff409405fff2603be43f73a8978948cd19e8cbab89d85a9f52208558163270_prof);

        
        $__internal_92d6a00910519cbe6452b8c7655726efee6d9907ef3052359d513d8325d7209b->leave($__internal_92d6a00910519cbe6452b8c7655726efee6d9907ef3052359d513d8325d7209b_prof);

    }

    public function getTemplateName()
    {
        return "UserUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 101,  126 => 95,  123 => 94,  117 => 90,  115 => 89,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
        <link rel=\"stylesheet\" href=\"/ProjetWestaflex/web/css/style.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<style>

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 12px;
    font-family: monospace;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}


.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}


.container:hover input ~ .checkmark {
    background-color: #ccc;
}


.container input:checked ~ .checkmark {
    background-color: #036873;
}


.checkmark:after {
    content: \"\";
    position: absolute;
    display: none;
}


.container input:checked ~ .checkmark:after {
    display: block;
}


.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

</style>
</head>
<body>

<div id=\"page\">

  <a href=\"http://groupe-oec.fr/campus/\">
     <img src = \"/ProjetWestaflex/web/img/logo-ozanam.png\" alt=\"logo\">
     </a>
  <br><br>
  {% if error %}

    <div class=\"alert alert-danger\">Nom utilisateur ou mot de passe mauvais</div>

   {% endif %}
 
  <form action=\"{{ path('login_check') }}\" method=\"post\">

   

    <label for=\"username\">Utilisateur :</label>

    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />


    <label for=\"password\">Mot de passe :</label>

    <input type=\"password\" id=\"password\" name=\"_password\" />

    <br><br>

   <label class=\"container\">Afficher Mot passe
  \t<input type=\"checkbox\" onclick=\"HideShowPassword()\">
  \t<span class=\"checkmark\"></span>
   </label>

   <br><br>

   <button id=\"buttonSubmit\" type=\"submit\" value=\"Connexion\">Connexion</button>

  </form>

</div>

<script>
function HideShowPassword() {
    var x = document.getElementById(\"password\");
    if (x.type === \"password\") {
        x.type = \"text\";
    } else {
        x.type = \"password\";
    }
}
</script>

</body>
</html>
", "UserUserBundle:Security:login.html.twig", "/var/www/html/ProjetWestaflex/src/User/UserBundle/Resources/views/Security/login.html.twig");
    }
}
