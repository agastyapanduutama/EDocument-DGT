<?php

/* tpl/headerblank.html */
class __TwigTemplate_39c51dd97c1cb639e422124e60d7451e extends Twig_Template
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
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Pop Up</title>

<link href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/css/new_style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 9
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/css/menuset.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/themes/redmond/jquery-ui.css\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 11
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/themes/redmond/ui.jqgrid.css\" />
<script type=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script src=\"";
        // line 13
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery-ui.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/accordion.js\"></script>
<script src=\"";
        // line 15
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/i18n/grid.locale-en.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 16
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 17
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.fluid.js\" type=\"text/javascript\"></script>
<style type=\"text/css\" media=\"screen\">
\t@import \"";
        // line 19
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/css/style.css\";
</style>

<!-- SimpleTabs -->
<script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/js/simpletabs_1.3.js\"></script>
<style type=\"text/css\" media=\"screen\">
\t@import \"";
        // line 25
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/simpletab/css/simpletabs.css\";
</style>
</head>

<body>
";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "</body>
</html>

";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tpl/headerblank.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  103 => 31,  101 => 30,  92 => 25,  78 => 19,  72 => 17,  67 => 16,  62 => 15,  57 => 14,  52 => 13,  47 => 12,  42 => 11,  37 => 10,  32 => 9,  27 => 8,  18 => 1,  206 => 110,  193 => 101,  167 => 83,  160 => 81,  156 => 79,  153 => 78,  142 => 71,  133 => 66,  123 => 60,  114 => 55,  105 => 50,  96 => 45,  86 => 23,  77 => 34,  68 => 29,  59 => 24,  50 => 19,  39 => 12,  29 => 4,  26 => 3,);
    }
}
