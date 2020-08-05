<?php

/* login.html */
class __TwigTemplate_3e50cbd994a0a47b7573c931c2b26c17 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />>
<title>ESDM :: Login</title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/new_style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/menuset.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/accordion.js\"></script>
<script type=\"text/javascript\">
function \$(obj){return document.getElementById(obj);}

ddaccordion.init({
\theaderclass: \"expandable\", //Shared CSS class name of headers group that are expandable
\tcontentclass: \"categoryitems\", //Shared CSS class name of contents group
\trevealtype: \"click\", //Reveal content when user clicks or onmouseover the header? Valid value: \"click\", \"clickgo\", or \"mouseover\"
\tmouseoverdelay: 200, //if revealtype=\"mouseover\", set delay in milliseconds before header expands onMouseover
\tcollapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
\tdefaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
\tonemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
\tanimatedefault: false, //Should contents open by default be animated into view?
\tpersiststate: true, //persist state of opened contents within browser session?
\ttoggleclass: [\"\", \"openheader\"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively [\"class1\", \"class2\"]
\ttogglehtml: [\"prefix\", \"\", \"\"], //Additional HTML added to the header when it's collapsed and expanded, respectively  [\"position\", \"html1\", \"html2\"] (see docs)
\tanimatespeed: \"fast\", //speed of animation: integer in milliseconds (ie: 200), or keywords \"fast\", \"normal\", or \"slow\"
\toninit:function(headers, expandedindices){ //custom code to run when headers have initalized
\t\t//do nothing
\t},
\tonopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
\t\t//do nothing
\t}
})
jQuery(document).ready(function() {
\tjQuery(\"#username\").focus()
});
</script>
</head>

<body style=\"background:none; background-color:#E2E2E2;\">
<div id=\"container\" >

\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_esdmtop.png\"/>
  <div id=\"loginform\">
    \t<p>&nbsp;</p>
\t \t<p>&nbsp;</p>
    \t";
        // line 46
        if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userlogged") == true)) {
            // line 47
            echo "      <meta http-equiv=\"refresh\" content=\"3;url=";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/home/edoc\">
         <div id=\"icon_choose\">
            ";
            // line 49
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "usermodul") == "A")) {
                // line 50
                echo "           
                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/home/elet\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/eletshort.png\" border=\"0\" /></a>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/home/edoc\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/edocshort.png\" border=\"0\" /></a>
                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/home/erep\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/erepshort.png\" border=\"0\" /></a>
           
            ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "usermodul") == "S")) {
                // line 56
                echo "                <!-- <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/home/elet\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/eletshort.png\" border=\"0\" /></a> -->
                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/home/edoc\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/edocshort.png\" border=\"0\" /></a>
            ";
            }
            // line 59
            echo "             </div>
            <a id=\"logoutfront\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/home/logout\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/new_logoutfront.png\"</a></a>
      \t\t
 \t\t";
        } else {
            // line 62
            echo " 
      \t<div id=\"divfrm\">
          <form action=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/home/index\" method=\"post\">
            <table border=\"0\">
              <tr>
                <td>Username :</td>
                <td>Password :</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><input type=\"text\" name=\"username\" id=\"username\" class=\"togintxt\" /></td>
                <td><input type=\"password\" name=\"password\" id=\"password\" class=\"inputlogin\" /></td>
                <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Submit\" class=\"submitlogin\" /></td>
              </tr>
            </table>
          </form>
      </div> 
      <div id=\"div_login\"></div>
      <div id=\"header_icon_login\">
            <img src=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/new_geothermal.png\" id=\"icon_geothermal\" class=\"icon_imgheader\" />  
            <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/new_biofuel.png\" id=\"icon_biofuel\" class=\"icon_imgheader\" /> 
            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/new_bioenergy.png\" id=\"icon_bioenergy\" class=\"icon_imgheader\" /> 
            <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/new_surya.png\" id=\"icon_surya\" class=\"icon_imgheader\" />   
        </div>
   ";
        }
        // line 86
        echo "     
       
  </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 86,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  141 => 64,  137 => 62,  129 => 60,  126 => 59,  119 => 57,  112 => 56,  104 => 53,  98 => 52,  92 => 51,  89 => 50,  87 => 49,  81 => 47,  79 => 46,  72 => 42,  36 => 9,  32 => 8,  28 => 7,  24 => 6,  17 => 1,);
    }
}
