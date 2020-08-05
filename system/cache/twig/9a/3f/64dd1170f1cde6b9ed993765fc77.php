<?php

/* tpl/headeredoc.html */
class __TwigTemplate_9a3f64dd1170f1cde6b9ed993765fc77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "</title>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/new_style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/menuset.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"shortcut icon\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/icdoc.ico\" type=\"image/x-icon\" />
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<!-- <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/jquery.min.js\"></script> -->
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jqueryvalidation.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/accordion.js\"></script>
<script language=\"javascript\">
jQuery(document).ready(function() {
\tjQuery(\"#topnews2\").hide()
});

function showtopnews(obj)
{
\tjQuery(\"#topnews1\").hide();
\tjQuery(\"#topnews2\").hide();
\tjQuery(\"#\"+obj).show();
}
</script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/i18n/grid.locale-en.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.fluid.js\" type=\"text/javascript\"></script>
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
</script>
<style type=\"text/css\">
\t.fancybox-custom .fancybox-skin {
\t\tbox-shadow: 0 0 50px #222;
\t}
</style>

<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/themes/redmond/jquery-ui.css\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/themes/redmond/ui.jqgrid.css\" />
</head>

<body>
<div id=\"esdmtop\">
<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_esdmtop.png\"/>
</div>
<div id=\"container\">
\t<div id=\"header\">
    \t<div id=\"appicon\">     \t
    \t</div>
        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_edocicon.png\" id=\"theimg\" />
        <div id=\"smallnav\">
        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_iconcontact.png\"/>
        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_iconmap.png\"/>
        </div>
    \t<div id=\"header_icon\">
            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_geothermal.png\" id=\"icon_geothermal\" class=\"icon_imgheader\" />  
            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_biofuel.png\" id=\"icon_biofuel\" class=\"icon_imgheader\" /> 
            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_bioenergy.png\" id=\"icon_bioenergy\" class=\"icon_imgheader\" /> 
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_surya.png\" id=\"icon_surya\" class=\"icon_imgheader\" />   
    \t</div>
    </div>
    <div id=\"content\">
      <div id=\"left_column\">
          <div id=\"menu\">
             <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/new_topmenu.gif\"/>
              <div id=\"nav\">    
                 ";
        // line 87
        if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userlogged") == true)) {
            // line 88
            echo "                    ";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userlevel") == "A")) {
                // line 89
                echo "                        ";
                $this->env->loadTemplate("tpl/menuadminedoc.html")->display($context);
                // line 90
                echo "                    ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userlevel") == "O")) {
                // line 91
                echo "                        ";
                $this->env->loadTemplate("tpl/menuoperatoredoc.html")->display($context);
                // line 92
                echo "                    ";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userlevel") == "U")) {
                // line 93
                echo "                        ";
                $this->env->loadTemplate("tpl/menuuseredoc.html")->display($context);
                // line 94
                echo "                    ";
            }
            // line 95
            echo "                ";
        }
        echo " 
               </div>
            </div> 
            
            <!-- <h1 class=\"listitle\">10 berita teratas</h1>
            <div id=\"topnews1\" class=\"topnews\">        \t
                ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["topnews1"]) {
            // line 102
            echo "                    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") <= 5)) {
                // line 103
                echo "                        <div class=\"newstitle10\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/contentmaster/newsview/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topnews1"]) ? $context["topnews1"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topnews1"]) ? $context["topnews1"] : null), "getJudul", array(), "method"), "html", null, true);
                echo "</a></div>
                    ";
            }
            // line 105
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topnews1'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "                <div class=\"topnewspageinfo\">Top News <strong>1</strong> - <strong>5</strong></div>
            </div>
            
            <div id=\"topnews2\" class=\"topnews\" >
                ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["topnews2"]) {
            // line 111
            echo "                    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") >= 6)) {
                // line 112
                echo "                        <div class=\"newstitle10\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "index.php/contentmaster/newsview/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topnews2"]) ? $context["topnews2"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topnews2"]) ? $context["topnews2"] : null), "getJudul", array(), "method"), "html", null, true);
                echo "</a></div>
                    ";
            }
            // line 114
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topnews2'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "                
                <div class=\"topnewspageinfo\">Top News <strong>6</strong> - <strong>10</strong></div>
            </div> -->
        \t
            <!-- <div style=\"text-align:right; margin:0px 40px 0px 0px;\" class=\"dokdesc10\"><a href=\"javascript:void(0);\" onclick=\"showtopnews('topnews1')\">[1]</a><a href=\"javascript:void(0);\" onclick=\"showtopnews('topnews2')\">[2]</a></div> -->
        
        </div>
        
        <div id=\"right_column\">
        
        
        
        ";
        // line 126
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "            
            <div id=\"footer\">
                Copyright © 2015, Dian Global Tech - DGT<br />
                Recomended Browser : Google Chrome<br />
                <br />
            </div>
        </div>
        
    </div>
    
    

   
</div>
</body>
</html>
";
    }

    // line 126
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tpl/headeredoc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 126,  314 => 127,  312 => 126,  285 => 114,  275 => 112,  272 => 111,  255 => 110,  249 => 106,  235 => 105,  225 => 103,  222 => 102,  205 => 101,  195 => 95,  192 => 94,  189 => 93,  186 => 92,  183 => 91,  180 => 90,  177 => 89,  174 => 88,  172 => 87,  167 => 85,  158 => 79,  154 => 78,  150 => 77,  146 => 76,  140 => 73,  136 => 72,  131 => 70,  122 => 64,  114 => 59,  110 => 58,  76 => 27,  72 => 26,  68 => 25,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  24 => 5,  18 => 1,);
    }
}
