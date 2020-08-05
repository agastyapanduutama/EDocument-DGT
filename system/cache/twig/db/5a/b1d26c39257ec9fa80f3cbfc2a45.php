<?php

/* suratfrm.html */
class __TwigTemplate_db5ab1d26c39257ec9fa80f3cbfc2a45 extends Twig_Template
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
<div class=\"title\">Surat Masuk</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">No Surat</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"no_surat\" type=\"text\" id=\"no_surat\" size=\"60\" class=\"required\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Surat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal\" type=\"text\" id=\"tanggal\" size=\"10\" class=\"required\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Asal Surat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"asal_surat\" type=\"text\" id=\"asal_surat\" size=\"60\" class=\"required\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Sifat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"sifat\" id=\"sifat\">
    \t\t\t\t\t\t";
        // line 28
        if (isset($context["sifat"])) { $_sifat_ = $context["sifat"]; } else { $_sifat_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sifat_);
        foreach ($context['_seq'] as $context["_key"] => $context["sft"]) {
            // line 29
            echo "                            <option value=\"";
            if (isset($context["sft"])) { $_sft_ = $context["sft"]; } else { $_sft_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sft_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["sft"])) { $_sft_ = $context["sft"]; } else { $_sft_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sft_, "getNamaSifat", array(), "method"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sft'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo ">
    </select>    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Jenis Arsip</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"jenis\" id=\"jenis\">
      
    \t\t\t\t\t\t";
        // line 38
        if (isset($context["jenissurat"])) { $_jenissurat_ = $context["jenissurat"]; } else { $_jenissurat_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jenissurat_);
        foreach ($context['_seq'] as $context["_key"] => $context["jns"]) {
            // line 39
            echo "                            
      <option value=\"";
            // line 40
            if (isset($context["jns"])) { $_jns_ = $context["jns"]; } else { $_jns_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_jns_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["jns"])) { $_jns_ = $context["jns"]; } else { $_jns_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_jns_, "getNamaJenis", array(), "method"), "html", null, true);
            echo "</option>
      
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jns'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo ">
      </select>    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Info Lampiran</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"lampiran\" id=\"lampiran\">
      <option value=\"Ada\">Ada</option>
      <option value=\"Tidak Ada\">Tidak Ada</option>
      <option value=\"Lengkap\">Lengkap</option>
      <option value=\"Tidak Lengkap\">Tidak Lengkap</option>
    </select>    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Klarifikasi</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal_klarifikasi\" type=\"text\" id=\"tanggal_klarifikasi\" size=\"10\" class=\"required\" /></td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Aksi</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"aksi\" id=\"aksi\">
      
                            ";
        // line 65
        if (isset($context["aksi"])) { $_aksi_ = $context["aksi"]; } else { $_aksi_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_aksi_);
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 66
            echo "                            
      
      <option value=\"";
            // line 68
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "getNamaAksi", array(), "method"), "html", null, true);
            echo "</option>
      
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "        \t\t\t\t
    </select>    </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Alamat Aksi</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"group\" id=\"group\">
                            ";
        // line 78
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
            // line 79
            echo "                            <option value=\"";
            if (isset($context["grp"])) { $_grp_ = $context["grp"]; } else { $_grp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_grp_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["grp"])) { $_grp_ = $context["grp"]; } else { $_grp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_grp_, "getNamaGroup", array(), "method"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
        echo "        \t\t\t\t</select>     </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Nama Staff</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">
    <select name=\"staff\" id=\"staff\">
                            ";
        // line 88
        if (isset($context["staff"])) { $_staff_ = $context["staff"]; } else { $_staff_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_staff_);
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 89
            echo "                            <option value=\"";
            if (isset($context["st"])) { $_st_ = $context["st"]; } else { $_st_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_st_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["st"])) { $_st_ = $context["st"]; } else { $_st_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_st_, "getNama", array(), "method"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo "        \t\t\t\t</select>    </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Catatan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"catatan\" id=\"catatan\" cols=\"60\" rows=\"8\" class=\"required\"></textarea></td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Hal</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"hal\" id=\"hal\" cols=\"60\" rows=\"8\" class=\"required\"></textarea></td>
  </tr>
  <tr>
    <td>File Scan Surat</td>
    <td>:</td>
    <td><input type=\"file\" name=\"filesurat\" id=\"filesurat\" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\">
      <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\" onclick=\"jQuery('#id').val(''); jQuery('#groupRow').hide();\" /></td>
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
        // line 147
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
        // line 175
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
        // line 213
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
        // line 220
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 224
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
        // line 232
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
        // line 273
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
        return "suratfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 273,  368 => 232,  356 => 224,  348 => 220,  337 => 213,  295 => 175,  263 => 147,  205 => 91,  192 => 89,  187 => 88,  178 => 81,  165 => 79,  160 => 78,  151 => 71,  138 => 68,  134 => 66,  129 => 65,  104 => 42,  91 => 40,  88 => 39,  83 => 38,  73 => 30,  60 => 29,  55 => 28,  29 => 4,  26 => 3,);
    }
}
