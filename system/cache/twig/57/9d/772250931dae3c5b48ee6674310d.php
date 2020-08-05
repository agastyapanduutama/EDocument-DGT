<?php

/* suratkeluarfrm.html */
class __TwigTemplate_579d772250931dae3c5b48ee6674310d extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"title\">Surat Keluar</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">No Surat</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"no_surat\" type=\"text\" id=\"no_surat\" size=\"60\" class=\"required\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Buat Surat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal\" type=\"text\" id=\"tanggal\" size=\"10\" class=\"required\" /></td>
  </tr>
  
  <tr>
    <td nowrap=\"nowrap\">Sifat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"sifat\" id=\"sifat\">
    \t\t\t\t\t\t";
        // line 22
        if (isset($context["sifat"])) { $_sifat_ = $context["sifat"]; } else { $_sifat_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sifat_);
        foreach ($context['_seq'] as $context["_key"] => $context["sft"]) {
            // line 23
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
        // line 24
        echo ">
    </select>    </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Jenis Arsip</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><select name=\"jenis\" id=\"jenis\">
      
    \t\t\t\t\t\t";
        // line 32
        if (isset($context["jenissurat"])) { $_jenissurat_ = $context["jenissurat"]; } else { $_jenissurat_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_jenissurat_);
        foreach ($context['_seq'] as $context["_key"] => $context["jns"]) {
            // line 33
            echo "                            
      <option value=\"";
            // line 34
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
        // line 36
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
    </select>
      <input name=\"aksi2\" type=\"hidden\" id=\"aksi2\" value=\"0\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Penyelesaian</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"tanggal_klarifikasi\" type=\"text\" id=\"tanggal_klarifikasi\" size=\"10\" class=\"required\" /></td>
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
        // line 111
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/suratkeluar/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\tcolNames:['','No Surat', 'No Agenda', 'Tgl Buat', 'Tgl Selesai', 'Perihal', 'Catatan','Aksi','Jenis', 'Sifat'],
\t\tcolModel:[
\t\t\t{name:'id_surat',index:'id_surat',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'no_surat',index:'no_surat', width:90},
\t\t\t{name:'no_agenda',index:'no_agenda', width:170, hidden:true},
\t\t\t{name:'tanggal_buat',index:'tanggal_buat', width:160},
\t\t\t{name:'tanggal_selesai',index:'tanggal_selesai', width:160},
\t\t\t{name:'perihal',index:'perihal', width:100},
\t\t\t{name:'catatan',index:'lampiran', width:160},
\t\t\t{name:'nama_aksi',index:'nama_aksi', hidden:true},
\t\t\t{name:'nama_jenis',index:'nama_jenis', width:160},
\t\t\t{name:'nama_sifat',index:'nama_sifat', width:160},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id_dokumen'));
\t\t\tjQuery(\"#id_kategori\").val(jQuery(\"#ListData\").getCell(rowid,'id_kategori'));
\t\t\tjQuery(\"#judul\").val(jQuery(\"#ListData\").getCell(rowid,'judul'));
\t\t\tjQuery(\"#deskripsi\").val(jQuery(\"#ListData\").getCell(rowid,'deskripsi'));
\t\t\tjQuery(\"#penulis\").val(jQuery(\"#ListData\").getCell(rowid,'penulis'));
\t\t\tjQuery(\"#publik\").val(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\tif(\"";
        // line 134
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
\t\tcaption: \"Daftar Surat Keluar Oleh ";
        // line 148
        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_log_, "usernamereal"), "html", null, true);
        echo "\",
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
        // line 172
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
        // line 179
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 183
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
        // line 191
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
        // line 232
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
        return "suratkeluarfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 232,  280 => 191,  268 => 183,  260 => 179,  249 => 172,  221 => 148,  203 => 134,  176 => 111,  99 => 36,  86 => 34,  83 => 33,  78 => 32,  68 => 24,  55 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
