<?php

/* repproject.html */
class __TwigTemplate_ab16022d060ad7f0f52f9f448adccccb extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate({});\t
});
</script>
<div class=\"title\">Laporan Wilayah Pekerjan (Project)</div>
<fieldset>
<legend>Pencarian</legend>
<table border=\"0\">
  <tr>
    <td>Cari :</td>
    <td><input name=\"key\" type=\"text\" id=\"key\" size=\"30\" /></td>
    <td>Berdasarkan :</td>
    <td><select name=\"berd\" id=\"berd\">
      <option value=\"b.nama_perusahaan\">Perusahaa</option>
      <option value=\"e.nama_jenissurvey\">Jenis Survey</option>
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
        // line 39
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/listProject',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Kode Project','Propinsi', 'Kota', '', 'Nama Survey', '', 'Perusahaan', 'Tql Awal', 'Tql Akhir', 'Nama Daerah', 'Luas wilayah', 'Sumber daya', 'Cadangan', '', 'SK Menteri', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_project',index:'id_project',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'kode_project',index:'kode_project', width:90, hidden:true},
\t\t\t{name:'propinsi',index:'propinsi', width:170},
\t\t\t{name:'kota_kabupaten',index:'kota_kabupaten'},
\t\t\t{name:'id_survey',index:'id_survey', hidden:true},
\t\t\t{name:'nama_jenissurvey',index:'nama_jenissurvey', width:160},
\t\t\t{name:'id_perusahaan',index:'id_perusahaan', hidden:true},
\t\t\t{name:'nama_perusahaan',index:'nama_perusahaan', width:160},
\t\t\t{name:'tanggal_awal',index:'tanggal_awal', width:100},
\t\t\t{name:'tanggal_akhir',index:'tanggal_akhir', width:160},
\t\t\t{name:'nama_daerah',index:'nama_daerah', hidden:true},
\t\t\t{name:'luas_wilayah',index:'luas_wilayah', hidden:true},
\t\t\t{name:'sumber_daya',index:'sumber_daya', hidden:true},
\t\t\t{name:'cadangan',index:'cadangan', hidden:true},
\t\t\t{name:'status',index:'status', hidden:true},
\t\t\t{name:'sk_menteri',index:'sk_menteri', width:160},
\t\t\t{name:'add_date',index:'add_date',hidden:true},
\t\t\t{name:'add_user',index:'add_user', hidden:true},
\t\t],
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Project\",
\t\theight:320,
\t\twidth:750,
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
        // line 93
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/listproject/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 100
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/listProject'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}

load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "repproject.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 100,  125 => 93,  67 => 39,  29 => 3,  26 => 2,);
    }
}
