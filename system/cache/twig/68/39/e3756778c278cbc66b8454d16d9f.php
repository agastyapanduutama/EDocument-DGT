<?php

/* komponenbiayafrm.html */
class __TwigTemplate_6839e3756778c278cbc66b8454d16d9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headererep.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headererep.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate({});\t
});
</script>
<div class=\"title\">Kelompok Biaya</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kode Kelompok</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"kode\" type=\"text\" id=\"kode\" size=\"40\" class=\"required\" />
      *
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Kelompok</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"nama\" type=\"text\" id=\"nama\" size=\"60\" class=\"required\" />
      *</td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Keterangan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"keterangan\" cols=\"40\" rows=\"5\" id=\"keterangan\"></textarea></td>
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
    <td nowrap=\"nowrap\">Cari :</td>
    <td nowrap=\"nowrap\"><input name=\"key\" type=\"text\" id=\"key\" size=\"28\" /></td>
    <td nowrap=\"nowrap\">Berdasarkan :</td>
    <td nowrap=\"nowrap\"><select name=\"berd\" id=\"berd\">
      <option value=\"kode_komponen\">Kode Komponen</option>
      <option value=\"nama_komponen\">Nama Komponen</option>
    </select>    </td>
    <td nowrap=\"nowrap\"><input type=\"button\" name=\"button2\" id=\"button2\" value=\"Cari\" class=\"button\" onclick=\"search_data()\" /></td>
    <td nowrap=\"nowrap\"><input type=\"button\" name=\"button4\" id=\"button4\" value=\"Bersihkan\" class=\"button\" onclick=\"clear_search()\" /></td>
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
        // line 72
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/komponenbiaya/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Kode','Nama Kelompok', 'Keterangan', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_komponen',index:'id_komponen',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'kode_komponen',index:'kode_komponen', width:90},
\t\t\t{name:'nama_komponen',index:'nama_komponen', width:90},
\t\t\t{name:'keterangan',index:'keterangan', width:170},
\t\t\t{name:'add_date',index:'nama_status', width:120, hidden:true},
\t\t\t{name:'add_user',index:'add_user', width:80, hidden:true},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id_komponen'));
\t\t\tjQuery(\"#kode\").val(jQuery(\"#ListData\").getCell(rowid,'kode_komponen'));
\t\t\tjQuery(\"#nama\").val(jQuery(\"#ListData\").getCell(rowid,'nama_komponen'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Kelompok Biaya\",
\t\theight:320,
\t\twidth:750,
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
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 120
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/komponenbiaya/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 127
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/komponenbiaya/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 131
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/komponenbiaya/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
load_grid();
jQuery(\"#tgl_siup\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "komponenbiayafrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 131,  162 => 127,  151 => 120,  99 => 72,  29 => 4,  26 => 3,);
    }
}
