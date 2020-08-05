<?php

/* pemakaifrm.html */
class __TwigTemplate_714bfae7282926cadc2512c83d2639f8 extends Twig_Template
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
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate({
\t  rules: {
\t\tpass1: \"required\",
\t\tpass2: {
\t\t  equalTo: \"#pass1\"
\t\t}
\t  }
\t});\t
});
</script>
<div class=\"title\">pemakai</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Group Pemakai</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\">
    <select name=\"id_group\" id=\"id_group\">
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            echo "    \t
      <option value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
            echo "\">( ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "kode_group"), "html", null, true);
            echo " ) - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
            echo "
      </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "    </select> 
    *
    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Username</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"username\" type=\"text\" class=\"required\" id=\"username\" size=\"30\" /> 
      *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Katasandi</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"pass1\" type=\"password\" class=\"required\" id=\"pass1\" size=\"20\" /> 
      *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Kata Sandi (Ulang)</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"pass2\" type=\"password\" class=\"required\" id=\"pass2\" size=\"20\" /> 
      *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tingkatan Pemakai</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"level\" id=\"level\">
      <option value=\"O\">Operator (Baca/Upload File)</option>
      <option value=\"U\">User (Baca File)</option>
    </select> 
      *
    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Lengkap</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"nama_lengkap\" type=\"text\" class=\"required\" id=\"nama_lengkap\" size=\"40\" /> 
      *</td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Keterangan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"keterangan\" id=\"keterangan\" cols=\"45\" rows=\"5\"></textarea>
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><select name=\"status\" id=\"status\">
      <option value=\"1\">Aktif</option>
      <option value=\"0\">Non Aktif</option>
    </select>
    </td>
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
      <option value=\"a.username\">User Name</option>
      <option value=\"a.nama_lengkap\">Nama Lengkap</option>
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
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/pemakai/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Username', 'Group User', 'Level', 'Nama Lengkap', 'Status', 'Keterangan', 'Priviledge','id_group','level','status'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'username',index:'username', width:90},
\t\t\t{name:'nama_group',index:'nama_group', width:170},
\t\t\t{name:'nama_level',index:'nama_level', width:160},
\t\t\t{name:'nama_lengkap',index:'nama_lengkap', width:160},
\t\t\t{name:'nama_status',index:'nama_level', width:160},
\t\t\t{name:'keterangan',index:'keterangan', width:160},
\t\t\t{name:'priv',index:'priv', width:160},
\t\t\t{name:'id_group',index:'id_group', hidden:true},
\t\t\t{name:'level',index:'level', hidden:true},
\t\t\t{name:'status',index:'status', hidden:true},
\t\t\t// {name:'add_date',index:'nama_status', width:120},
\t\t\t// {name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#username\").val(jQuery(\"#ListData\").getCell(rowid,'username'));
\t\t\tjQuery(\"#id_group\").val(jQuery(\"#ListData\").getCell(rowid,'id_group'));
\t\t\tjQuery(\"#level\").val(jQuery(\"#ListData\").getCell(rowid,'level'));
\t\t\tjQuery(\"#nama_lengkap\").val(jQuery(\"#ListData\").getCell(rowid,'nama_lengkap'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t\tjQuery(\"#status\").val(jQuery(\"#ListData\").getCell(rowid,'status'));
\t\t\tjQuery(\"#username\").attr(\"readonly\",true);
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Pemakai\",
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
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/pemakai/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/pemakai/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/pemakai/delete_data\",{ id : data},
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
        return "pemakaifrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 193,  239 => 189,  229 => 182,  167 => 123,  72 => 30,  59 => 27,  56 => 26,  52 => 25,  29 => 4,  26 => 3,);
    }
}
