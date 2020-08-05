<?php

/* repsuratmasuk.html */
class __TwigTemplate_ed4ec54dc28889a786dc0b6ec2bc7b00 extends Twig_Template
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
<div class=\"title\">Laporan Surat Masuk</div>
<fieldset>
<legend>Pencarian</legend>
<table border=\"0\">
  <tr>
    <td>Cari :</td>
    <td><input name=\"key\" type=\"text\" id=\"key\" size=\"30\" /></td>
    <td>Berdasarkan :</td>
    <td><select name=\"berd\" id=\"berd\">
      <option value=\"a.no_agenda\">No Agenda</option>
      <option value=\"a.deskripsi\">No Surat</option>
    </select>    </td>
    <td><input type=\"button\" name=\"button2\" id=\"button2\" value=\"Cari\" class=\"button\" onclick=\"search_data()\" /></td>
    <td><input type=\"button\" name=\"button4\" id=\"button4\" value=\"Bersihkan\" class=\"button\" onclick=\"clear_search()\" /></td>
  </tr>
</table>
</fieldset>

<table width=\"1000\" border=\"0\" id=\"ListData\"></table>
<div id=\"pager\"></div>

<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 30
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','','No Agenda', 'No Surat', 'Tgl Buat', 'Tgl Klarifikasi', 'Asal Surat', 'Lampiran','Tujuan','Staff', 'Sifat Surat', 'Add Date', 'Add User'],
\t\t
\t\tcolModel:[
\t\t\t{name:'id_surat',index:'id_surat',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'fk_id',index:'fk_id', width:90, hidden:true},
\t\t\t{name:'no_agenda',index:'no_agenda', width:170},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'tanggal',index:'tanggal', width:160},
\t\t\t{name:'tanggal_klarifikasi',index:'tanggal_klarifikasi', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'lampiran',index:'lampiran', width:160},
\t\t\t{name:'nama_group',index:'nama_group', width:160},
\t\t\t{name:'nama_staff',index:'nama_staff', width:160},
\t\t\t{name:'nama_sifat',index:'nama_sifat', width:160},
\t\t\t{name:'add_date',index:'nama_status', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id_dokumen'));
\t\t\tjQuery(\"#id_kategori\").val(jQuery(\"#ListData\").getCell(rowid,'id_kategori'));
\t\t\tjQuery(\"#judul\").val(jQuery(\"#ListData\").getCell(rowid,'judul'));
\t\t\tjQuery(\"#deskripsi\").val(jQuery(\"#ListData\").getCell(rowid,'deskripsi'));
\t\t\tjQuery(\"#penulis\").val(jQuery(\"#ListData\").getCell(rowid,'penulis'));
\t\t\tjQuery(\"#publik\").val(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\tif(\"";
        // line 58
        if (isset($context["usergroup"])) { $_usergroup_ = $context["usergroup"]; } else { $_usergroup_ = null; }
        echo twig_escape_filter($this->env, $_usergroup_, "html", null, true);
        echo "\" == 0)
\t\t\t{
\t\t\t\texpandgroup(jQuery(\"#ListData\").getCell(rowid,'publik'), jQuery(\"#ListData\").getCell(rowid,'groupdok'));
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t \texpandgroup2(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\t}
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Surat Masuk (Belum Disposisi)\",
\t\theight:320,
\t\twidth:780,
\t\tmultiselect : false\t\t\t\t
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
        // line 96
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/viewdata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 103
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}

function groupRow()
{
\tif(\"";
        // line 109
        if (isset($context["usergroup"])) { $_usergroup_ = $context["usergroup"]; } else { $_usergroup_ = null; }
        echo twig_escape_filter($this->env, $_usergroup_, "html", null, true);
        echo "\" == 0)
\t{
\t\tif(jQuery(\"#publik\").val()>0)
\t\t\tjQuery(\"#groupRow\").hide();
\t\telse
\t\t\tjQuery(\"#groupRow\").show();
\t}
\telse
\t\tjQuery(\"#groupRow\").hide();
}
function expandgroup(publik, group)
{
\tif(publik == 0)
\t{
\t\tjQuery(\"#groupRow\").show();
\t\tarr = group.split(',');
\t\t
\t\tfor(y=0; y<arr.length; y++){
\t\t\tfor(x=1; x<=jQuery(\"#jnum\").val(); x++)
\t\t\t{
\t\t\t\tif(jQuery(\"#idgroup\"+x).val() == arr[y])
\t\t\t\tdocument.getElementById(\"id_group\"+x).checked=true;\t\t\t\t
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tfor(x=1; x<=jQuery(\"#jnum\").val(); x++)
\t\t{
\t\t\tdocument.getElementById(\"id_group\"+x).checked=false;\t\t\t\t
\t\t}
\t\tjQuery(\"#groupRow\").hide();
\t}
\t\t
}
function expandgroup2(publik)
{
\tif(publik == 0)
\t{
\t\tjQuery(\"#groupRow\").show();
\t\tfor(x=1; x<=jQuery(\"#jnum\").val(); x++){
\t\t\tif(jQuery(\"#idgroup\"+x).val() == \"";
        // line 150
        if (isset($context["usergroup"])) { $_usergroup_ = $context["usergroup"]; } else { $_usergroup_ = null; }
        echo twig_escape_filter($this->env, $_usergroup_, "html", null, true);
        echo "\") {
\t\t\t\tdocument.getElementById(\"id_group\"+x).checked=true;\t
\t\t\t}
\t\t}
\t}
\telse
\t{
\t\tjQuery(\"#groupRow\").show();
\t\tfor(x=1; x<=jQuery(\"#jnum\").val(); x++){
\t\t\tdocument.getElementById(\"id_group\"+x).checked=false;\t\t\t\t
\t\t\t
\t\t}
\t}
\tjQuery(\"#groupRow\").hide();
}

load_grid();
groupRow()
</script>
<script>
\tjQuery(\"#tanggal\").datepicker({ dateFormat: 'yy-mm-dd' });
\tjQuery(\"#tanggal_klarifikasi\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "repsuratmasuk.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 150,  152 => 109,  142 => 103,  131 => 96,  89 => 58,  57 => 30,  29 => 4,  26 => 3,);
    }
}
