<?php

/* detaildispo.html */
class __TwigTemplate_690353f5fe6e4cd8b7ae0d3287d48cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headerblank.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headerblank.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"title\">Detail Disposisi</div>

<div class=\"simpleTabs\">
    <ul class=\"simpleTabsNavigation\">
      ";
        // line 7
        if (isset($context["levelJabatan"])) { $_levelJabatan_ = $context["levelJabatan"]; } else { $_levelJabatan_ = null; }
        if (($_levelJabatan_ == 1)) {
            // line 8
            echo "          <li><a href=\"#\">Disposisi Kabag</a></li>
          <li><a href=\"#\">Disposisi Kasubag</a></li>
          <li><a href=\"#\">Disposisi Staff</a></li>
      ";
        } elseif (($_levelJabatan_ == 2)) {
            // line 12
            echo "          <li><a href=\"#\">Disposisi Kasubag</a></li>
          <li><a href=\"#\">Disposisi Staff</a></li>
      ";
        } elseif (($_levelJabatan_ == 3)) {
            // line 15
            echo "          <li><a href=\"#\">Disposisi Staff</a></li>
      ";
        }
        // line 17
        echo "    </ul>
    
    ";
        // line 19
        if (isset($context["levelJabatan"])) { $_levelJabatan_ = $context["levelJabatan"]; } else { $_levelJabatan_ = null; }
        if (($_levelJabatan_ == 1)) {
            // line 20
            echo "    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData\"></table>
        <div id=\"pager\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div>  
    </div>
    
    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData2\"></table>
        <div id=\"pager2\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div> 
    </div>
    
    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData3\"></table>
        <div id=\"pager3\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div> 
    </div>
     ";
        } elseif (($_levelJabatan_ == 2)) {
            // line 44
            echo "     <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData2\"></table>
        <div id=\"pager2\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div> 
    </div>
    
    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData3\"></table>
        <div id=\"pager3\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div> 
    </div>
    ";
        } elseif (($_levelJabatan_ == 3)) {
            // line 60
            echo "    <div class=\"simpleTabsContent\">
        <table border=\"0\" id=\"ListData3\"></table>
        <div id=\"pager3\"></div>
        <div style=\"padding-top:20px; padding-bottom:20px;\">
            *) Double klik pada baris data untuk melihat detail surat
        </div> 
    </div>
    ";
        }
        // line 68
        echo "</div>







<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
var jbt = \"";
        // line 78
        if (isset($context["levelJabatan"])) { $_levelJabatan_ = $context["levelJabatan"]; } else { $_levelJabatan_ = null; }
        echo twig_escape_filter($this->env, $_levelJabatan_, "html", null, true);
        echo "\";
function loadGridKabag(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 81
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisidetail/dispokabag/";
        if (isset($context["idSurat"])) { $_idSurat_ = $context["idSurat"]; } else { $_idSurat_ = null; }
        echo twig_escape_filter($this->env, $_idSurat_, "html", null, true);
        echo "',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\tcolNames:['','No Induk','Nama', 'Group', 'Jabatan', 'Tgl Penyelesaian', 'No Agenda', 'No Surat', 'Asal Surat',''],
\t\tcolModel:[
\t\t\t{name:'id_disposisi',index:'id_disposisi',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'no_induk',index:'no_induk', width:90},
\t\t\t{name:'nama',index:'nama', width:200},
\t\t\t{name:'nama_group',index:'nama_group', width:250},
\t\t\t{name:'nama_jabatan',index:'nama_jabatan', width:100},
\t\t\t{name:'tanggal_penyelesaian',index:'tanggal_penyelesaian', width:100},
\t\t\t{name:'no_agenda',index:'no_agenda', width:160},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'id_surat',index:'id_surat', hidden:true},
\t\t\t
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.open('";
        // line 99
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/detailsurat/'+jQuery(\"#ListData\").getCell(rowid,'id_surat')+'/view', 'blank');
\t\t\t
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Disposisi Kabag\",
\t\theight:320,
\t\twidth:1024,
\t\tmultiselect : false\t\t\t\t
\t});
\treturn false;
}
function loadGridKasubag()
{
\tjQuery(\"#ListData2\").jqGrid({
\t\turl: '";
        // line 117
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisidetail/dispokasubag/";
        if (isset($context["idSurat"])) { $_idSurat_ = $context["idSurat"]; } else { $_idSurat_ = null; }
        echo twig_escape_filter($this->env, $_idSurat_, "html", null, true);
        echo "',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\tcolNames:['','No Induk','Nama', 'Group', 'Jabatan', 'Tgl Penyelesaian', 'No Agenda', 'No Surat', 'Asal Surat',''],
\t\tcolModel:[
\t\t\t{name:'id_disposisi',index:'id_disposisi',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'no_induk',index:'no_induk', width:90},
\t\t\t{name:'nama',index:'nama', width:200},
\t\t\t{name:'nama_group',index:'nama_group', width:250},
\t\t\t{name:'nama_jabatan',index:'nama_jabatan', width:100},
\t\t\t{name:'tanggal_penyelesaian',index:'tanggal_penyelesaian', width:100},
\t\t\t{name:'no_agenda',index:'no_agenda', width:160},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'id_surat',index:'id_surat', hidden:true},
\t\t\t
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.open('";
        // line 135
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/detailsurat/'+jQuery(\"#ListData2\").getCell(rowid,'id_surat')+'/view', 'blank');
\t\t\t
\t\t},
\t\tpager: jQuery('#pager2'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Disposisi Kasubag\",
\t\theight:320,
\t\twidth:1024,
\t\tmultiselect : false\t\t\t\t
\t});
\treturn false;
}

function loadGridStaff()
{
\tjQuery(\"#ListData3\").jqGrid({
\t\turl: '";
        // line 154
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisidetail/dispostaff/";
        if (isset($context["idSurat"])) { $_idSurat_ = $context["idSurat"]; } else { $_idSurat_ = null; }
        echo twig_escape_filter($this->env, $_idSurat_, "html", null, true);
        echo "',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\tcolNames:['','No Induk','Nama', 'Group', 'Jabatan', 'Tgl Penyelesaian', 'No Agenda', 'No Surat', 'Asal Surat',''],
\t\tcolModel:[
\t\t\t{name:'id_disposisi',index:'id_disposisi',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'no_induk',index:'no_induk', width:90},
\t\t\t{name:'nama',index:'nama', width:200},
\t\t\t{name:'nama_group',index:'nama_group', width:250},
\t\t\t{name:'nama_jabatan',index:'nama_jabatan', width:100},
\t\t\t{name:'tanggal_penyelesaian',index:'tanggal_penyelesaian', width:100},
\t\t\t{name:'no_agenda',index:'no_agenda', width:160},
\t\t\t{name:'no_surat',index:'no_surat', width:160},
\t\t\t{name:'asal_surat',index:'asal_surat', width:100},
\t\t\t{name:'id_surat',index:'id_surat', hidden:true},
\t\t\t
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\twindow.open('";
        // line 172
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/detailsurat/'+jQuery(\"#ListData3\").getCell(rowid,'id_surat')+'/view', 'blank');
\t\t\t
\t\t},
\t\tpager: jQuery('#pager3'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Disposisi Staff\",
\t\theight:320,
\t\twidth:1024,
\t\tmultiselect : false\t\t\t\t
\t});
\treturn false;
}

function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 192
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
        // line 199
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}


jQuery(window).load(function(){
\tif(jbt == 1){
\t\tloadGridKabag();
\t\tloadGridKasubag();
\t\tloadGridStaff();
\t}
\telse if(jbt == 2)
\t{
\t
\t\tloadGridKasubag();
\t\tloadGridStaff();
\t}
\telse if(jbt == 3)
\t{
\t\tloadGridStaff();
\t}
\tloadGridStaff();
});

</script>
<script>
\tjQuery(\"#tanggal\").datepicker({ dateFormat: 'yy-mm-dd' });
\tjQuery(\"#tanggal_klarifikasi\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "detaildispo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 199,  277 => 192,  253 => 172,  228 => 154,  205 => 135,  180 => 117,  158 => 99,  133 => 81,  126 => 78,  114 => 68,  104 => 60,  86 => 44,  60 => 20,  57 => 19,  53 => 17,  49 => 15,  44 => 12,  38 => 8,  35 => 7,  29 => 3,  26 => 2,);
    }
}
