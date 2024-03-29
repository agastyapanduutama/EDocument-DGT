<?php

/* jabatanfrm.html */
class __TwigTemplate_954ce29db4f71d928e67a494ddfba13d extends Twig_Template
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
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate();
});
</script>
<div class=\"title\">Jabatan</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kode Jabatan</td>
    <td width=\"1%\">:</td>
    <td width=\"90%\"><input name=\"kode_jabatan\" type=\"text\" id=\"kode_jabatan\" class=\"required\" size=\"10\">
    *
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Jabatan</td>
    <td>:</td>
    <td><input name=\"nama_jabatan\" type=\"text\" id=\"nama_jabatan\" class=\"required\" size=\"40\" />
      * </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Inisial</td>
    <td>:</td>
    <td><input name=\"inisial\" type=\"text\" id=\"nama_tujuan4\" class=\"required\" size=\"10\" />
      * </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Parent</td>
    <td>:</td>
    <td><select name=\"parent_jabatan\" id=\"parent_jabatan\">
      <option>Tanpa Level Atas</option>
      ";
        // line 36
        if (isset($context["jbt"])) { $_jbt_ = $context["jbt"]; } else { $_jbt_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jbt_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 37
            echo "      \t<option value=\"";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "getNamaJabatan", array(), "method"), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </select>      
      * </td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Level</td>
    <td valign=\"top\">:</td>
    <td><select name=\"level_jabatan\" id=\"level_jabatan\">
      <option value=\"Level 1\">1</option>
      <option value=\"Level 2\">2</option>
      <option value=\"Level 3\">3</option>
      <option value=\"Level 4\">4</option>
    </select>
    </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Keterangan</td>
    <td valign=\"top\">:</td>
    <td><textarea name=\"keterangan\" id=\"keterangan\" cols=\"45\" rows=\"5\"></textarea></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">&nbsp;</td>
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
      <option value=\"a.kode_jabatan\">Kode Jabatam</option>
      <option value=\"a.nama_jabatan\">Nama Jabatan</option>
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
        // line 98
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jabatan/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Kode', 'Nama', 'Keterangan', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'kode_jabatan',index:'kode_jabatan', width:90},
\t\t\t{name:'nama_jabatan',index:'nama_jabatan', width:170},
\t\t\t{name:'keterangan',index:'keterangan', width:160},
\t\t\t{name:'add_date',index:'add_date', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#kode_tujuan\").val(jQuery(\"#ListData\").getCell(rowid,'kode_jabatan'));
\t\t\tjQuery(\"#nama_tujuan\").val(jQuery(\"#ListData\").getCell(rowid,'nama_jabatan'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Jabatan\",
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
        // line 146
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jabatan/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 153
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jabatan/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 157
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jabatan/delete_data\",{ id : data},
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
        return "jabatanfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 157,  205 => 153,  194 => 146,  142 => 98,  81 => 39,  68 => 37,  63 => 36,  29 => 4,  26 => 3,);
    }
}
