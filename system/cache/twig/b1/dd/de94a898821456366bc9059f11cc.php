<?php

/* usergroupfrm.html */
class __TwigTemplate_b1ddde94a898821456366bc9059f11cc extends Twig_Template
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
\tjQuery(\"#form1\").validate();
});
</script>
<div class=\"title\">group user</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"9%\">Kode Group </td>
    <td width=\"1%\">:</td>
    <td width=\"90%\"><input name=\"kode_group\" type=\"text\" id=\"kode_group\" class=\"required\" size=\"10\">
    *
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td>Nama Group</td>
    <td>:</td>
    <td><input name=\"nama_group\" type=\"text\" id=\"nama_group\" class=\"required\" size=\"40\">
      * </td>
  </tr>
\t
    <tr>
    \t<td width=\"9%\" nowrap=\"nowrap\">Parent Group</td>
    \t<td width=\"1%\" nowrap=\"nowrap\">:</td>
    \t<td width=\"90%\" nowrap=\"nowrap\">
    \t\t<select name=\"parent\" id=\"parent\" onchange=\"uwu(this)\">
    \t\t\t<option value=\"\">Paling Atas</option>
    \t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 33
            echo "    \t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
            echo " </option>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    \t\t</select>
    \t\t*
    \t</td>
\t</tr>
\t
\t<td><input name=\"nama_parent\" type=\"hidden\" id=\"nama_parent\" class=\"required\" size=\"40\">

  <tr>
    <td valign=\"top\">Keterangan</td>
    <td valign=\"top\">:</td>
    <td><textarea name=\"keterangan\" id=\"keterangan\" cols=\"45\" rows=\"5\"></textarea></td>
  </tr>
  <!-- <tr>
  \t<td valign=\"top\">level</td>
  \t<td valign=\"top\">:</td>
\t  <td>
\t\t<select name=\"level\" id=\"level\">
\t\t\t<option value=\"1\">1</option>
\t\t\t<option value=\"2\">2</option>
\t\t\t<option value=\"3\">3</option>
\t\t</select>
\t</td>
  </tr> -->
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
      <option value=\"a.kode_group\">Kode Group</option>
      <option value=\"a.nama_group\">Nama Group</option>
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
        // line 97
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Kode', 'Nama', 'Parent', 'Level',  'Keterangan'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'kode_group',index:'kode_group', width:90},
\t\t\t{name:'nama_group',index:'nama_group', width:170},
\t\t\t{name:'nama_parent',index:'nama_parent', width:50},
\t\t\t{name:'level',index:'level', width:50\t},
\t\t\t{name:'keterangan',index:'keterangan', width:160},
\t\t\t// {name:'add_date',index:'add_date', width:120},
\t\t\t// {name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#kode_group\").val(jQuery(\"#ListData\").getCell(rowid,'kode_group'));
\t\t\tjQuery(\"#nama_group\").val(jQuery(\"#ListData\").getCell(rowid,'nama_group'));
\t\t\tjQuery(\"#id_group\").val(jQuery(\"#ListData\").getCell(rowid,'id_group'));
\t\t\tjQuery(\"#id_group\").val(jQuery(\"#ListData\").getCell(rowid,'id_group'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Group User\",
\t\theight:320,
\t\twidth:750,
\t\tmultiselect : true\t\t\t\t
\t});
\t
\treturn false;
}

function uwu(sel){
\tvar uwu = sel.options[sel.selectedIndex].text;
\tvar e = document.getElementById(\"parent\").value;
\tdocument.getElementById(\"nama_parent\").value = uwu;
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
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/delete_data\",{ id : data},
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
        return "usergroupfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 167,  210 => 163,  200 => 156,  138 => 97,  74 => 35,  63 => 33,  59 => 32,  29 => 4,  26 => 3,);
    }
}
