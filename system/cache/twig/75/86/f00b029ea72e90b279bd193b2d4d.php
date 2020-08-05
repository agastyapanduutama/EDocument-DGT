<?php

/* stafffrm.html */
class __TwigTemplate_7586f00b029ea72e90b279bd193b2d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headereletbaru.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headereletbaru.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"title\">Staff</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"9%\">No Induk</td>
    <td width=\"1%\">:</td>
    <td width=\"90%\"><input name=\"no_induk\" type=\"text\" id=\"no_induk\" class=\"required\" size=\"10\">
    *
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input name=\"nama\" type=\"text\" id=\"nama\" class=\"required\" size=\"40\">
      * </td>
  </tr>
  
  <tr>
    <td>Kelamin</td>
    <td>:</td>
    <td><select name=\"kelamin\" id=\"kelamin\">
      <option value=\"L\">Pria</option>
      <option value=\"P\">Wanita</option>
    </select>      
      * </td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>:</td>
    <td><input type=\"file\" name=\"photo\" id=\"photo\" />      
      * </td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><input name=\"email\" type=\"text\" id=\"email\" class=\"required\" size=\"40\">
      * </td>
  </tr>
  <tr>
    <td>Satuan</td>
    <td>:</td>
    <td><select name=\"group\" id=\"group\">
    ";
        // line 47
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_group_);
        foreach ($context['_seq'] as $context["_key"] => $context["satuan"]) {
            // line 48
            echo "     \t<option value=\"";
            if (isset($context["satuan"])) { $_satuan_ = $context["satuan"]; } else { $_satuan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_satuan_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["satuan"])) { $_satuan_ = $context["satuan"]; } else { $_satuan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_satuan_, "getNamaGroup", array(), "method"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['satuan'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "    </select>      
      * </td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><select name=\"jabatan\" id=\"jabatan\">
    ";
        // line 57
        if (isset($context["jabatan"])) { $_jabatan_ = $context["jabatan"]; } else { $_jabatan_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jabatan_);
        foreach ($context['_seq'] as $context["_key"] => $context["jbtn"]) {
            // line 58
            echo "     \t<option value=\"";
            if (isset($context["jbtn"])) { $_jbtn_ = $context["jbtn"]; } else { $_jbtn_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_jbtn_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["jbtn"])) { $_jbtn_ = $context["jbtn"]; } else { $_jbtn_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_jbtn_, "getInisial", array(), "method"), "html", null, true);
            echo " | ";
            if (isset($context["jbtn"])) { $_jbtn_ = $context["jbtn"]; } else { $_jbtn_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_jbtn_, "getNamaJabatan", array(), "method"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jbtn'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "    </select>      
      * </td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><select name=\"status\" id=\"status\">
      <option value=\"Y\">Aktif</option>
      <option value=\"N\">Non Aktif</option>
    </select>      
      * </td>
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
    <td><select name=\"berd\" id=\"berd\">
      <option value=\"a.kode_tujuan\">Kode Tujuan</option>
      <option value=\"a.nama_tujuan\">Nama Tujuan</option>
      <option value=\"a.keterangan\">Keterangan</option>
    </select>    </td>
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
        // line 111
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/staff/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','No Induk', 'Nama', 'Kelamin', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'no_induk',index:'no_induk', width:90},
\t\t\t{name:'nama',index:'nama', width:170},
\t\t\t{name:'kelamin',index:'kelamin', width:160},
\t\t\t{name:'add_date',index:'add_date', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#kode_tujuan\").val(jQuery(\"#ListData\").getCell(rowid,'kode_tujuan'));
\t\t\tjQuery(\"#nama_tujuan\").val(jQuery(\"#ListData\").getCell(rowid,'nama_tujuan'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Tujuan Surat\",
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
        // line 159
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/tujuansurat/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 166
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/tujuansurat/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 170
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/tujuansurat/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
load_grid();
</script>
<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "stafffrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 170,  238 => 166,  227 => 159,  175 => 111,  122 => 60,  106 => 58,  101 => 57,  92 => 50,  79 => 48,  74 => 47,  29 => 4,  26 => 3,);
    }
}
