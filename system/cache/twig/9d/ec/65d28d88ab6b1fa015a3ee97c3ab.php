<?php

/* pemakairpt.html */
class __TwigTemplate_9dec65d28d88ab6b1fa015a3ee97c3ab extends Twig_Template
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
<div class=\"title\">daftar pemakai</div>
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
<div style=\"padding-top:20px; padding-bottom:20px;\"><br />
</div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/pemakai/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Username', 'Group User', 'Level', 'Nama Lengkap', 'Status', 'Keterangan', 'Priviledge','id_group','level','status', 'Add Date', 'Add User'],
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
\t\t\t{name:'add_date',index:'nama_status', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\t/*ondblClickRow: function(rowid) {
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id'));
\t\t\tjQuery(\"#username\").val(jQuery(\"#ListData\").getCell(rowid,'username'));
\t\t\tjQuery(\"#id_group\").val(jQuery(\"#ListData\").getCell(rowid,'id_group'));
\t\t\tjQuery(\"#level\").val(jQuery(\"#ListData\").getCell(rowid,'level'));
\t\t\tjQuery(\"#nama_lengkap\").val(jQuery(\"#ListData\").getCell(rowid,'nama_lengkap'));
\t\t\tjQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid,'keterangan'));
\t\t\tjQuery(\"#status\").val(jQuery(\"#ListData\").getCell(rowid,'status'));
\t\t\tjQuery(\"#username\").attr(\"readonly\",true);
\t\t},*/
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Pemakai\",
\t\theight:600,
\t\twidth:900\t
\t});
\t
\treturn false;
}

function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 79
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/pemakai/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 86
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/pemakai/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}

load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "pemakairpt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 86,  110 => 79,  59 => 32,  29 => 4,  26 => 3,);
    }
}
