<?php

/* detaildok.html */
class __TwigTemplate_8ec480b458e0338268490b87ac690ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headeredoc.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headeredoc.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.js?v=2.1.3\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.css?v=2.1.2\" media=\"screen\" />

<span class=\"title\">";
        // line 9
        if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "getJudul", array(), "method"), "html", null, true);
        echo "</span><br />

<i style=\"padding-left:30px; color:#333333\">Penulis : ";
        // line 11
        if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "getPenulis", array(), "method"), "html", null, true);
        echo ", terbaca : ";
        if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "getTerbaca", array(), "method"), "html", null, true);
        echo " kali</i>
<br />
<br />
<div class=\"dokdesc10\">";
        // line 14
        if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "deskripsi"), "html", null, true);
        echo "<br /><br />
";
        // line 15
        if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
        if (($this->getAttribute($_dok_, "tipefile") == "pdf")) {
            // line 16
            echo "<a class=\"fancybox fancybox.iframe\" href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/dok/documentview/";
            if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "getId", array(), "method"), "html", null, true);
            echo "\">click to view<br /><img src=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "assets/img/pdficon.gif\" border=\"0\" /></a></div>
";
        } else {
            // line 18
            echo "<a class=\"fancybox fancybox.iframe\" href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/dok/imageview/";
            if (isset($context["dok"])) { $_dok_ = $context["dok"]; } else { $_dok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dok_, "getId", array(), "method"), "html", null, true);
            echo "\">click to view<br /><img src=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "assets/img/imageicon.gif\" border=\"0\" /</a></div>
";
        }
        // line 20
        echo "<script language=\"javascript\">
jQuery(document).ready(function() {
\tjQuery('.fancybox').fancybox({
\t\t\theight : 864,
\t\t\twidth : 1152
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "detaildok.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  88 => 18,  75 => 16,  72 => 15,  67 => 14,  57 => 11,  51 => 9,  45 => 7,  40 => 6,  35 => 5,  29 => 4,  26 => 3,);
    }
}
