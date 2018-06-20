<?php

/* @UserUser/Security/css/style.css */
class __TwigTemplate_40dc53c52e22df702f49dad3e3f6d8ba6e4872ffced3d1dae28907c900a5892e extends Twig_Template
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
        $__internal_392b7d4b3bdf50fd07bef388326cee6688407b969641f161b74ea03704ef7e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392b7d4b3bdf50fd07bef388326cee6688407b969641f161b74ea03704ef7e6c->enter($__internal_392b7d4b3bdf50fd07bef388326cee6688407b969641f161b74ea03704ef7e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@UserUser/Security/css/style.css"));

        $__internal_1cf04596a9b85d8d1d71857edb6f916940991d64d94515f554156d641e9759ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf04596a9b85d8d1d71857edb6f916940991d64d94515f554156d641e9759ba->enter($__internal_1cf04596a9b85d8d1d71857edb6f916940991d64d94515f554156d641e9759ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@UserUser/Security/css/style.css"));

        // line 1
        echo "input {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 2px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
  background-color: #f2f2f2;
  
}
input:hover{
  opacity: 1;
  background-color: #fff;
  border :2px solid black 
}

#page{
\twidth:425px;
\tmargin:40px auto 0;
       
}
  
body{
\tbackground:url('img/bgLogin.png');      
}


button{
    background-color: #036873;
    border: none;
    color: white;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
    border-radius: 2px;
    font-family: Monospace;
    height:55px;
}
img {
    
    border-radius: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    border: 10px solid white;
}
 
button:hover {
  background-color: #555 /*rgba(3, 104, 115,0.4)*/;
  color: white;
}
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    /*font-size: 12px;*/
    font-family: Monospace;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

label{
 font-family: Monospace;
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
";
        
        $__internal_392b7d4b3bdf50fd07bef388326cee6688407b969641f161b74ea03704ef7e6c->leave($__internal_392b7d4b3bdf50fd07bef388326cee6688407b969641f161b74ea03704ef7e6c_prof);

        
        $__internal_1cf04596a9b85d8d1d71857edb6f916940991d64d94515f554156d641e9759ba->leave($__internal_1cf04596a9b85d8d1d71857edb6f916940991d64d94515f554156d641e9759ba_prof);

    }

    public function getTemplateName()
    {
        return "@UserUser/Security/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("input {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 2px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
  background-color: #f2f2f2;
  
}
input:hover{
  opacity: 1;
  background-color: #fff;
  border :2px solid black 
}

#page{
\twidth:425px;
\tmargin:40px auto 0;
       
}
  
body{
\tbackground:url('img/bgLogin.png');      
}


button{
    background-color: #036873;
    border: none;
    color: white;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
    border-radius: 2px;
    font-family: Monospace;
    height:55px;
}
img {
    
    border-radius: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    border: 10px solid white;
}
 
button:hover {
  background-color: #555 /*rgba(3, 104, 115,0.4)*/;
  color: white;
}
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    /*font-size: 12px;*/
    font-family: Monospace;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

label{
 font-family: Monospace;
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
", "@UserUser/Security/css/style.css", "/var/www/html/ProjetWestaflex/src/User/UserBundle/Resources/views/Security/css/style.css");
    }
}
