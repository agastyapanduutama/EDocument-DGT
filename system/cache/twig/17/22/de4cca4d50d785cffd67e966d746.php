<?php

/* newsfrm.html */
class __TwigTemplate_1722de4cca4d50d785cffd67e966d746 extends Twig_Template
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
<div class=\"title\">berita</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Judul</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"judul\" type=\"text\" id=\"judul\" size=\"75\" class=\"required\" />
      *</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Deskripsi</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"deskripsi\" id=\"deskripsi\" cols=\"60\" rows=\"8\" class=\"required\"></textarea>
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nara Sumber</td>
    <td nowrap=\"nowrap\">&nbsp;</td>
    <td nowrap=\"nowrap\"><input name=\"penulis\" type=\"text\" id=\"penulis\" size=\"60\" /></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\">
      <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\" onclick=\"jQuery('#id').val('');\" /></td>
  </tr>
</table>
</form>
<fieldset>
<legend>Pencarian</legend>
<table border=\"0\">
  <tr>
    <td>Cari :</td>
    <td><input name=\"key\" type=\"text\" id=\"key\" size=\"30\" /></td>
    <td>Berdasarkan :</td>
    <td>
    <select name=\"berd\" id=\"berd\">
      <option value=\"a.deskripsi\">Deskripsi</option>
      <option value=\"a.judul\">Judul</option>
      <option value=\"a.penulis\">Penulis</option>
    </select>
    </td>
    <td><input type=\"button\" name=\"button2\" id=\"button2\" value=\"Cari\" class=\"button\" onclick=\"search_data()\" /></td>
    <td><input type=\"button\" name=\"button4\" id=\"button4\" value=\"Bersihkan\" class=\"button\" onclick=\"clear_search()\" /></td>
  </tr>
</table>
</fieldset>

<table width=\"1000\" border=\"0\" id=\"ListData\"></table>
<div id=\"pager\"></div>
<div style=\"padding-top:20px; padding-bottom:20px;\">
<input type=\"button\" name=\"button4\" id=\"button4\" value=\"Hapus Data\" class=\"button\" onclick=\"hapus_data()\" /><br />
<br />

*) Double klik pada baris data untuk mengedit<br />
*) Centang pada baris data untuk menghapus
</div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 135
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Judul', 'Penulis', '', 'Tgl Publikasi', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'judul',index:'judul', width:90},
\t\t\t{name:'penulis',index:'penulis', width:170},
\t\t\t{name:'deskripsi',index:'deskripsi', hidden:true},
\t\t\t{name:'tgl_publikasi',index:'tgl_publikasi', width:160},
\t\t\t{name:'add_date',index:'nama_status', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#judul\").val(jQuery(\"#ListData\").getCell(rowid,'judul'));
\t\t\tjQuery(\"#penulis\").val(jQuery(\"#ListData\").getCell(rowid,'penulis'));
\t\t\ttinymce.get('deskripsi').setContent(jQuery(\"#ListData\").getCell(rowid,'deskripsi'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Berita\",
\t\theight:320,
\t\twidth:755,
\t\tmultiselect : true\t\t\t\t
\t});
\t
\treturn false;
}
function hapus_data(){
\tdata = jQuery(\"#ListData\").jqGrid('getGridParam','selarrrow');
\tif(data==\"\"){
\t\talert(\"Tentukan dulu data yang akan di hapus dengan mencentang\");
\t}
\telse{
\t\tif(confirm(\"Anda yakin?\"))
\t\t\tdelete_data(data);
\t\telse
\t\t\treturn false
\t}
}
function search_data(){
\tkey = jQuery(\"#key\").val();
\tby = jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 184
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#by\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 191
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 195
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "newsfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 195,  245 => 191,  234 => 184,  181 => 135,  98 => 56,  78 => 40,  49 => 15,  35 => 5,  29 => 4,  26 => 3,);
    }
}
