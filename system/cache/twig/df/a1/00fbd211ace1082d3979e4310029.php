<?php

/* dokumenrpt.html */
class __TwigTemplate_dfa100fbd211ace1082d3979e4310029 extends Twig_Template
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
        echo "
<div class=\"title\">daftar dokumen</div>
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
<div style=\"padding-top:20px; padding-bottom:20px;\"><br />

*) Double klik pada baris data untuk melihat deail</div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','','Kategori', 'Judul', 'Nama File', 'Penulis', 'Terbaca', 'Pengunggah','','', '', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id_dokumen',index:'id_dokumen',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'id_kategori',index:'id_kategori', width:90, hidden:true},
\t\t\t{name:'nama_kategori',index:'nama_kategori', width:170},
\t\t\t{name:'judul',index:'judul', width:160},
\t\t\t{name:'nama_file',index:'nama_file', width:160},
\t\t\t{name:'penulis',index:'penulis', width:160},
\t\t\t{name:'terbaca',index:'terbaca', width:100},
\t\t\t{name:'pengunggah',index:'pengunggah', width:160},
\t\t\t{name:'publik',index:'publik', hidden:true},
\t\t\t{name:'deskripsi',index:'deskripsi', hidden:true},
\t\t\t{name:'groupdok',index:'groupdok', hidden:true},
\t\t\t{name:'add_date',index:'nama_status', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tondblClickRow: function(rowid) {
\t\t\t//alert(jQuery(\"#ListData\").getCell(rowid,'id_dokumen'));
\t\t\topenpop(jQuery(\"#ListData\").getCell(rowid,'id_dokumen'));
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Dokumen\",
\t\theight:600,
\t\twidth:790\t\t\t\t
\t});
\t
\treturn false;
}
function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 72
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
        // line 79
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
load_grid();
</script>
<!--<script type=\"text/javascript\" src=\"";
        // line 84
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>-->

<script type=\"text/javascript\" src=\"";
        // line 86
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 87
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.js?v=2.1.3\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.css?v=2.1.2\" media=\"screen\" />
<script language=\"javascript\">
function openpop(id) {
\tjQuery.fancybox({
\t\theight : 864,
\t\twidth : 1152,
\t\ttransitionIn: 'fade',
\t\ttransitionOut: 'fade',
\t\ttype: 'iframe',
\t\thref: \"";
        // line 97
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/report/detailview/\"+id
\t});
};
</script>

";
    }

    public function getTemplateName()
    {
        return "dokumenrpt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  139 => 88,  134 => 87,  129 => 86,  123 => 84,  114 => 79,  103 => 72,  59 => 32,  29 => 4,  26 => 3,);
    }
}
