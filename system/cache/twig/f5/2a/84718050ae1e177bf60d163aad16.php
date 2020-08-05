<?php

/* tpl/headereletbaru.html */
class __TwigTemplate_f52a84718050ae1e177bf60d163aad16 extends Twig_Template
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
        if (isset($context["page_title"])) { $_page_title_ = $context["page_title"]; } else { $_page_title_ = null; }
        echo twig_escape_filter($this->env, $_page_title_, "html", null, true);
        echo "</title>
<link href=\"";
        // line 6
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/css/new_style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/css/menuset.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"shortcut icon\"  href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/icletter.ico\" type=\"image/x-icon\" />
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/script.js\"></script>
<script src=\"";
        // line 11
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery-ui.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/accordion.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/css/jquery-ui.css\">
  
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
        // line 28
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/i18n/grid.locale-en.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 29
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 30
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.fluid.js\" type=\"text/javascript\"></script>
<style type=\"text/css\" media=\"screen\">
\t@import \"";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/css/style.css\";
</style>

<!-- SimpleTabs -->
<script type=\"text/javascript\" src=\"";
        // line 36
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/js/simpletabs_1.3.js\"></script>
<style type=\"text/css\" media=\"screen\">
\t@import \"";
        // line 38
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/css/simpletabs.css\";
</style>


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
        // line 72
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/themes/redmond/jquery-ui.css\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 73
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/themes/redmond/ui.jqgrid.css\" />
</head>

<body>
<div id=\"esdmtop\">
<img src=\"";
        // line 78
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/new_esdmtop.png\"/>
</div>
<div id=\"container\">
\t<div id=\"header\"> 
    \t<div id=\"appicon\">     \t
    \t</div>
        <img src=\"";
        // line 84
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/new_eleticon.png\" id=\"theimg\" />
    \t<div id=\"smallnav\">
        <img src=\"";
        // line 86
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/new_iconcontact.png\"/>
        <img src=\"";
        // line 87
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/new_iconmap.png\"/>
        </div>
    
    </div>
    <div id=\"content\">
      <div id=\"left_column\">
          <div id=\"menu\">
             <img src=\"";
        // line 94
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/new_topmenu.gif\"/>
              <div id=\"nav\">
                ";
        // line 96
        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
        if (($this->getAttribute($_log_, "userlogged") == true)) {
            // line 97
            echo "                    ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "userlevel") == "A")) {
                // line 98
                echo "                        ";
                $this->env->loadTemplate("tpl/menuelet.html")->display($context);
                echo "                    
                    ";
            } elseif (($this->getAttribute($_log_, "userlevel") == "O")) {
                // line 100
                echo "                        ";
                $this->env->loadTemplate("tpl/menuoperatorelet.html")->display($context);
                // line 101
                echo "                    ";
            } elseif (($this->getAttribute($_log_, "userlevel") == "U")) {
                // line 102
                echo "                        ";
                $this->env->loadTemplate("tpl/menuuserelet.html")->display($context);
                // line 103
                echo "                    ";
            }
            // line 104
            echo "                    
                    
                    ";
            // line 106
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "usermodul") == "S")) {
                // line 107
                echo "                        ";
                $this->env->loadTemplate("tpl/menustaffelet.html")->display($context);
                // line 108
                echo "                     ";
            }
            // line 109
            echo "                ";
        }
        echo " 
               </div>
            </div> 
            
            <h1 class=\"listitle\">10 berita teratas</h1>
            <div id=\"topnews1\" class=\"topnews\">        \t
                ";
        // line 115
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
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
            // line 116
            echo "                    ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index") <= 5)) {
                // line 117
                echo "                        <div class=\"newstitle10\"><a href=\"";
                if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
                echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
                echo "index.php/contentmaster/newsview/";
                if (isset($context["topnews1"])) { $_topnews1_ = $context["topnews1"]; } else { $_topnews1_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topnews1_, "getId", array(), "method"), "html", null, true);
                echo "\">";
                if (isset($context["topnews1"])) { $_topnews1_ = $context["topnews1"]; } else { $_topnews1_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topnews1_, "getJudul", array(), "method"), "html", null, true);
                echo "</a></div>
                    ";
            }
            // line 119
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
        // line 120
        echo "                <div class=\"topnewspageinfo\">Top News <strong>1</strong> - <strong>5</strong></div>
            </div>
            
            <div id=\"topnews2\" class=\"topnews\" >
                ";
        // line 124
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
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
            // line 125
            echo "                    ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index") >= 6)) {
                // line 126
                echo "                        <div class=\"newstitle10\"><a href=\"";
                if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
                echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
                echo "index.php/contentmaster/newsview/";
                if (isset($context["topnews2"])) { $_topnews2_ = $context["topnews2"]; } else { $_topnews2_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topnews2_, "getId", array(), "method"), "html", null, true);
                echo "\">";
                if (isset($context["topnews2"])) { $_topnews2_ = $context["topnews2"]; } else { $_topnews2_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_topnews2_, "getJudul", array(), "method"), "html", null, true);
                echo "</a></div>
                    ";
            }
            // line 128
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
            </div>
        \t
            <div style=\"text-align:right; margin:0px 40px 0px 0px;\" class=\"dokdesc10\"><a href=\"javascript:void(0);\" onclick=\"showtopnews('topnews1')\">[1]</a><a href=\"javascript:void(0);\" onclick=\"showtopnews('topnews2')\">[2]</a></div>
        
        </div>
        
        <div id=\"right_column\">
        
        
        
        ";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 141
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

    // line 140
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tpl/headereletbaru.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 140,  370 => 141,  368 => 140,  341 => 128,  328 => 126,  324 => 125,  306 => 124,  300 => 120,  286 => 119,  273 => 117,  269 => 116,  251 => 115,  241 => 109,  238 => 108,  235 => 107,  232 => 106,  228 => 104,  225 => 103,  222 => 102,  219 => 101,  216 => 100,  210 => 98,  206 => 97,  203 => 96,  197 => 94,  186 => 87,  181 => 86,  175 => 84,  165 => 78,  156 => 73,  151 => 72,  113 => 38,  107 => 36,  99 => 32,  93 => 30,  88 => 29,  83 => 28,  65 => 14,  60 => 13,  54 => 11,  49 => 10,  44 => 9,  39 => 8,  34 => 7,  29 => 6,  24 => 5,  18 => 1,);
    }
}
