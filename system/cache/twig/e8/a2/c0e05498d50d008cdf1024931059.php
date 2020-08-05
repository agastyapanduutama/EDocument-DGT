<?php

/* berandafrm.html */
class __TwigTemplate_e8a2c0e05498d50d008cdf1024931059 extends Twig_Template
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
        echo "<script language=\"javascript\" type=\"text/javascript\" src=\"";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/tnymce/jscripts/tiny_mce/tiny_mce.js\"></script>
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 5
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/tnymce/jscripts/general.js\"></script>
<script language=\"javascript\" type=\"text/javascript\">
\ttinyMCE.init({
\t\tmode : \"textareas\",
\t\t//mode : \"exact\",
\t\t//elements : \"ajaxfilemanager\",
\t\tmode : \"textareas\",
\t\ttheme : \"advanced\",
\t\tplugins : \"advimage,advlink,media,contextmenu\",
\t\t
\t\tdocument_base_url : \"";
        // line 15
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "\",
\t\tfile_browser_callback : \"mcFileManager.filebrowserCallBack\", \t
\t\t
\t\twidth: 700,
\t\theight: 450,
\t\ttheme_advanced_buttons1_add_before : \"newdocument,separator\",
\t\ttheme_advanced_buttons1_add : \"fontselect,fontsizeselect\",
\t\ttheme_advanced_buttons2_add : \"separator,forecolor,backcolor,liststyle\",
\t\ttheme_advanced_buttons2_add_before: \"cut,copy,separator,\",
\t\ttheme_advanced_buttons3_add_before : \"\",
\t\ttheme_advanced_buttons3_add : \"media\",
\t\ttheme_advanced_toolbar_location : \"top\",
\t\ttheme_advanced_toolbar_align : \"left\",
\t\textended_valid_elements : \"hr[class|width|size|noshade]\",
\t\tfile_browser_callback : \"ajaxfilemanager\",
\t\tpaste_use_dialog : false,
\t\ttheme_advanced_resizing : true,
\t\ttheme_advanced_resize_horizontal : true,
\t\tapply_source_formatting : true,
\t\tforce_br_newlines : true,
\t\tforce_p_newlines : false,\t
\t\trelative_urls : false
\t});

\tfunction ajaxfilemanager(field_name, url, type, win) {
\t\tvar ajaxfilemanagerurl = \"";
        // line 40
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/tnymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php\";
\t\tvar view = 'detail';
\t\tswitch (type) {
\t\t\tcase \"image\":
\t\t\tview = 'thumbnail';
\t\t\t\tbreak;
\t\t\tcase \"media\":
\t\t\t\tbreak;
\t\t\tcase \"flash\": 
\t\t\t\tbreak;
\t\t\tcase \"file\":
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\treturn false;
\t\t}
\t\ttinyMCE.activeEditor.windowManager.open({
\t\t\turl: \"";
        // line 56
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/tnymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php?view=\" + view,
\t\t\twidth: 782,
\t\t\theight: 440,
\t\t\tinline : \"yes\",
\t\t\tclose_previous : \"no\"
\t\t},{
\t\t\twindow : win,
\t\t\tinput : field_name
\t\t});
\t\t
\t}

\tjQuery(document).ready(function(){
\t\tjQuery(\"#form1\").validate({});\t
\t});
</script>
<div class=\"title\">kontent beranda</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" valign=\"top\" nowrap=\"nowrap\">Beranda</td>
    <td width=\"1%\" valign=\"top\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><textarea name=\"beranda\" id=\"beranda\" cols=\"60\" rows=\"8\" class=\"required\">";
        // line 79
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "getBeranda", array(), "method"), "html", null, true);
        echo "</textarea>
      <input name=\"id\" type=\"hidden\" id=\"id\" value=\"1\" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\"></td>
  </tr>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "berandafrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 79,  98 => 56,  78 => 40,  49 => 15,  35 => 5,  29 => 4,  26 => 3,);
    }
}
