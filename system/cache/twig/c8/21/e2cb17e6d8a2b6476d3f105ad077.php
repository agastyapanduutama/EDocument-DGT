<?php

/* usergrouprpt.html */
class __TwigTemplate_c821e2cb17e6d8a2b6476d3f105ad077 extends Twig_Template
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
<div class=\"title\">daftar group pemakai</div>
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
<script language=\"javascript\">base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/viewdata',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','Kode', 'Nama', 'Keterangan', 'Add Date', 'Add User'],
\t\tcolModel:[
\t\t\t{name:'id',index:'id',key:true, width:50,editable:true, hidden:true},
\t\t\t{name:'kode_group',index:'kode_group', width:90},
\t\t\t{name:'nama_group',index:'nama_group', width:170},
\t\t\t{name:'keterangan',index:'keterangan', width:160},
\t\t\t{name:'add_date',index:'add_date', width:120},
\t\t\t{name:'add_user',index:'add_user', width:80},
\t\t],
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Group User\",
\t\theight:600,
\t\twidth:750\t\t\t
\t});
\t
\treturn false;
}
function search_data(){
\tkey=jQuery(\"#key\").val();
\tby=jQuery(\"#berd\").val();
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "usergrouprpt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 70,  93 => 63,  61 => 34,  29 => 4,  26 => 3,);
    }
}
