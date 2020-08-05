<?php

/* listsurattodisposse.html */
class __TwigTemplate_b5c018798e1a50af991e00a19240b287 extends Twig_Template
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
        echo "<div class=\"title\">Disposisi Surat</div>

<div class=\"simpleTabs\">
    <ul class=\"simpleTabsNavigation\">
      <li><a href=\"#\">Surat Masuk</a></li>
      <li><a href=\"#\">Disposisi ";
        // line 8
        if (isset($context["namaJabatan"])) { $_namaJabatan_ = $context["namaJabatan"]; } else { $_namaJabatan_ = null; }
        echo twig_escape_filter($this->env, $_namaJabatan_, "html", null, true);
        echo "</a></li>
    </ul>
    
    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData\"></table>
        <div id=\"pager2\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk mendisposisikan surat
        </div>  
    </div>
    
    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData2\"></table>
        <div id=\"pager\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail disposisi surat
        </div> 
    </div>
</div>







<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 38
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/listotdispo',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','','No Agenda', 'No Surat', 'Tgl Buat', 'Tgl Klarifikasi', 'Asal Surat', 'Lampiran', '', '', '', '', '', '', '', '', '', '', '', '',  '', 'Tujuan','Staff', 'Sifat Surat', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_surat',index:'id_surat',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'fk_id',index:'fk_id', width:90, hidden:true},
\t\t\t{name:'no_agenda',index:'no_agenda', width:200},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'tanggal',index:'tanggal', width:160},
\t\t\t{name:'tanggal_klarifikasi',index:'tanggal_klarifikasi', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'lampiran',index:'lampiran', width:80},
\t\t\t
\t\t\t{name:'kode_arsip',index:'kode_arsip', hidden:true},
\t\t\t{name:'tunjuk_silang',index:'tunjuk_silang', hidden:true},
\t\t\t{name:'jadwal_penyusutan',index:'jadwal_penyusutan',hidden:true},
\t\t\t{name:'tempat_penyimpanan',index:'tempat_penyimpanan',hidden:true},
\t\t\t{name:'indeks',index:'indeks', hidden:true},
\t\t\t{name:'hal',index:'hal', hidden:true},
\t\t\t{name:'catatan',index:'catatan', hidden:true},
\t\t\t{name:'id_group',index:'id_group', hidden:true},
\t\t\t{name:'id_staff',index:'id_staff',hidden:true},
\t\t\t{name:'id_sifat',index:'id_sifat',hidden:true},
\t\t\t{name:'id_jenissurat',index:'id_jenissurat',hidden:true},
\t\t\t{name:'id_aksi',index:'id_aksi', hidden:true},
\t\t\t{name:'status_disposisi',index:'status_disposisi',hidden:true},
\t\t\t
\t\t\t
\t\t\t{name:'nama_group',index:'nama_group', width:160,hidden:true},
\t\t\t{name:'nama_staff',index:'nama_staff', width:160,hidden:true},
\t\t\t{name:'nama_sifat',index:'nama_sifat', width:160},
\t\t\t{name:'add_date',index:'nama_status', width:120,hidden:true},
\t\t\t{name:'add_user',index:'add_user', width:80,hidden:true},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.open('";
        // line 75
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/detailsurat/'+jQuery(\"#ListData\").getCell(rowid,'id_surat'), 'blank');
\t\t\t
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Surat Masuk\",
\t\theight:320,
\t\twidth:700,
\t\tmultiselect : false\t\t\t\t
\t});
\t
\t
\t
\tjQuery(\"#ListData2\").jqGrid({
\t\turl: '";
        // line 92
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/listdispolevel1',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','','No Agenda', 'No Surat', 'Tgl Buat', 'Tgl Klarifikasi', 'Asal Surat', 'Lampiran', '', '', '', '', '', '', '', '', '', '', '', '',  '', 'Tujuan','Staff', 'Sifat Surat', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_surat',index:'id_surat',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'fk_id',index:'fk_id', width:90, hidden:true},
\t\t\t{name:'no_agenda',index:'no_agenda', width:200},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'tanggal',index:'tanggal', width:160},
\t\t\t{name:'tanggal_klarifikasi',index:'tanggal_klarifikasi', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'lampiran',index:'lampiran', width:80},
\t\t\t
\t\t\t{name:'kode_arsip',index:'kode_arsip', hidden:true},
\t\t\t{name:'tunjuk_silang',index:'tunjuk_silang', hidden:true},
\t\t\t{name:'jadwal_penyusutan',index:'jadwal_penyusutan',hidden:true},
\t\t\t{name:'tempat_penyimpanan',index:'tempat_penyimpanan',hidden:true},
\t\t\t{name:'indeks',index:'indeks', hidden:true},
\t\t\t{name:'hal',index:'hal', hidden:true},
\t\t\t{name:'catatan',index:'catatan', hidden:true},
\t\t\t{name:'id_group',index:'id_group', hidden:true},
\t\t\t{name:'id_staff',index:'id_staff',hidden:true},
\t\t\t{name:'id_sifat',index:'id_sifat',hidden:true},
\t\t\t{name:'id_jenissurat',index:'id_jenissurat',hidden:true},
\t\t\t{name:'id_aksi',index:'id_aksi', hidden:true},
\t\t\t{name:'status_disposisi',index:'status_disposisi',hidden:true},
\t\t\t
\t\t\t
\t\t\t{name:'nama_group',index:'nama_group', width:160,hidden:true},
\t\t\t{name:'nama_staff',index:'nama_staff', width:160,hidden:true},
\t\t\t{name:'nama_sifat',index:'nama_sifat', width:160},
\t\t\t{name:'add_date',index:'nama_status', width:120,hidden:true},
\t\t\t{name:'add_user',index:'add_user', width:80,hidden:true},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.open('";
        // line 129
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisidetail/detaildispo/'+jQuery(\"#ListData2\").getCell(rowid,'id_surat'), 'blank');
\t\t\t
\t\t},
\t\tpager: jQuery('#pager2'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Surat Terdisposisi\",
\t\theight:320,
\t\twidth:700,
\t\tmultiselect : false\t\t\t\t
\t});
\t
\treturn false;
}

function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 150
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
        // line 157
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 161
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
        // line 169
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
        // line 210
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
        return "listsurattodisposse.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 210,  229 => 169,  217 => 161,  209 => 157,  198 => 150,  173 => 129,  132 => 92,  111 => 75,  70 => 38,  36 => 8,  29 => 3,  26 => 2,);
    }
}
