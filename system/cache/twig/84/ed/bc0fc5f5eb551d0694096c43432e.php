<?php

/* setwilayahfrm.html */
class __TwigTemplate_84edbc0fc5f5eb551d0694096c43432e extends Twig_Template
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
<div class=\"title\">Set Wilayah dan Survey</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kode Project</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"kode_project\" type=\"text\" id=\"kode_project\" size=\"20\" value=\"";
        // line 15
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getKodeProject", array(), "method"), "html", null, true);
        echo "\" class=\"required\" /> 
    *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Perusahaan</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">
        <input name=\"nama_perusahaan\" type=\"text\" id=\"nama_perusahaan\" size=\"45\" class=\"required\" readonly=\"readonly\" value=\"";
        // line 22
        if (isset($context["perusahaan"])) { $_perusahaan_ = $context["perusahaan"]; } else { $_perusahaan_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_perusahaan_, "getNamaPerusahaan", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"id_perusahaan\" id=\"id_perusahaan\" value=\"";
        // line 23
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getIdPerusahaan", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"button\"  onclick=\"popup('";
        // line 24
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/searchPerusahaan')\" value=\"Browse\" class=\"button\"/>
*    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Survey</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">
        <input name=\"nama_survey\" type=\"text\" class=\"required\" id=\"nama_survey\" size=\"45\" readonly=\"readonly\"  value=\"";
        // line 31
        if (isset($context["survey"])) { $_survey_ = $context["survey"]; } else { $_survey_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_survey_, "getNamaJenis", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"id_survey\" id=\"id_survey\" value=\"";
        // line 32
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getIdSurvey", array(), "method"), "html", null, true);
        echo "\" />
        <input type=\"button\"  onclick=\"popup('";
        // line 33
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/searchSurvey')\" value=\"Browse\" class=\"button\"/>
*    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Mulai</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal_mulai\" type=\"text\" id=\"tanggal_mulai\" value=\"";
        // line 39
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getTanggalAwal", array(), "method"), "html", null, true);
        echo "\" size=\"10\" readonly=\"readonly\" class=\"required\" />
*</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Akhir</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal_akhir\" type=\"text\" id=\"tanggal_akhir\" value=\"";
        // line 45
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getTanggalAkhir", array(), "method"), "html", null, true);
        echo "\" size=\"10\" readonly=\"readonly\" class=\"required\" />
*</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Daerah</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"nama_daerah\" type=\"text\" id=\"nama_daerah\" value=\"";
        // line 51
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getNamaDaerah", array(), "method"), "html", null, true);
        echo "\" size=\"40\" class=\"required\" />
*</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Luas Wilayah</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"luas_wilayah\" type=\"text\" id=\"luas_wilayah\" value=\"";
        // line 57
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getLuasWilayah", array(), "method"), "html", null, true);
        echo "\" size=\"20\"  /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Sumber Daya</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"sumber_daya\" type=\"text\" id=\"sumber_daya\" value=\"";
        // line 62
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getSumberDaya", array(), "method"), "html", null, true);
        echo "\" size=\"20\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Cadangan</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"cadangan\" type=\"text\" id=\"cadangan\" value=\"";
        // line 67
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getCadangan", array(), "method"), "html", null, true);
        echo "\" size=\"20\" /></td>
  </tr>
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input name=\"nama_kota\" type=\"text\" id=\"nama_kota\" size=\"40\" class=\"required\" readonly=\"readonly\" value=\"";
        // line 72
        if (isset($context["kota"])) { $_kota_ = $context["kota"]; } else { $_kota_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_kota_, "kota_kabupaten"), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"id_kota\" id=\"id_kota\" value=\"";
        // line 73
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getKotaId", array(), "method"), "html", null, true);
        echo "\"  />
      <input type=\"button\"  onclick=\"popup('";
        // line 74
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/searchKota')\" value=\"Browse\" class=\"button\"/>
* </td>
  </tr>
  <tr>
    <td valign=\"top\">Keterangan</td>
    <td valign=\"top\">:</td>
    <td><textarea name=\"keterangan\" cols=\"50\" rows=\"10\" id=\"keterangan\">";
        // line 80
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getKodeProject", array(), "method"), "html", null, true);
        echo "</textarea></td>
  </tr>
  <tr>
    <td>SK Menteri</td>
    <td>:</td>
    <td><input name=\"sk_menteri\" type=\"text\" id=\"sk_menteri\" value=\"";
        // line 85
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getSKMenteri", array(), "method"), "html", null, true);
        echo "\" size=\"40\" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>*) Ini akan bedampak pada status project, jika ini terisi maka dapat dilakukan proses perencanaan</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\">
      <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\" onclick=\"jQuery('#id').val(''); jQuery('#groupRow').hide();\" />
      <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 97
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getId", array(), "method"), "html", null, true);
        echo "\" /></td>
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
      <option value=\"a.judul\">Judul</option>
      <option value=\"a.deskripsi\">Abstrak</option>
      <option value=\"b.nama_lengkap\">Penulis</option>
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
        // line 132
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
\t\tondblClickRow: function(rowid) {
\t\t\twindow.location = \"";
        // line 158
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/setwilayah/\" + jQuery(\"#ListData\").getCell(rowid,'id_project');
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Project\",
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
        // line 189
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 196
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 200
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
function groupRow()
{
\tif(\"";
        // line 208
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
        // line 249
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
groupRow();
jQuery(\"#tanggal_mulai\").datepicker({ dateFormat: 'yy-mm-dd' });
jQuery(\"#tanggal_akhir\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "setwilayahfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 249,  332 => 208,  320 => 200,  312 => 196,  301 => 189,  266 => 158,  236 => 132,  197 => 97,  181 => 85,  172 => 80,  162 => 74,  157 => 73,  152 => 72,  143 => 67,  134 => 62,  125 => 57,  115 => 51,  105 => 45,  95 => 39,  85 => 33,  80 => 32,  75 => 31,  64 => 24,  59 => 23,  54 => 22,  43 => 15,  29 => 3,  26 => 2,);
    }
}
