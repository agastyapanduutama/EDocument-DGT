<?php

/* dokumenfrm.html */
class __TwigTemplate_89af316e766b37eacefc7bd3324d709a extends Twig_Template
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
\tjQuery(\"#form1\").validate({});\t
});
</script>

<style>
\t#customers {
\tfont-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
\tborder-collapse: collapse;
\twidth: 100%;
\t}

\t#customers td, #customers th {
\tborder: 1px solid #ddd;
\tpadding: 8px;
\t}

\t#customers tr:nth-child(even){background-color: #f2f2f2;}

\t#customers tr:hover {background-color: #ddd;}

\t#customers th {
\tpadding-top: 12px;
\tpadding-bottom: 12px;
\ttext-align: left;
\tbackground-color: #4CAF50;
\tcolor: white;
\t}
</style>

<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/style.min.css\">


<div class=\"title\">dokumen</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kategori Dokumen</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><select name=\"id_kategori\" id=\"id_kategori\">
      
    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kats"]) ? $context["kats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["kat"]) {
            // line 48
            echo "       
      <option value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kat"]) ? $context["kat"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kat"]) ? $context["kat"] : null), "getNamaKategori", array(), "method"), "html", null, true);
            echo "</option>
           
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "    
    </select>
      <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">File</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input type=\"file\" name=\"filedok\" id=\"filedok\" required /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Judul</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"judul\" type=\"text\" id=\"judul\" size=\"60\" class=\"required\" /> 
    *</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Abstrak</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><textarea name=\"deskripsi\" id=\"deskripsi\" cols=\"60\" rows=\"8\" class=\"required\"></textarea>
    *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Penulis</td>
    <td nowrap=\"nowrap\">&nbsp;</td>
    <td nowrap=\"nowrap\"><input name=\"penulis\" type=\"text\" id=\"penulis\" size=\"40\" class=\"required\" /> 
    *</td>
  </tr>
  
  <tr>
    <td nowrap=\"nowrap\">Untuk Publik</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">

\t";
        // line 85
        if (((isset($context["usergroup"]) ? $context["usergroup"] : null) == 0)) {
            echo "\t
\t   
\t<select name=\"publik\" id=\"publik\" onchange=\"groupRow()\">
      <option value=\"1\">Ya</option>
      <option value=\"0\" selected>Grup Tertentu</option>
      <!-- <option value=\"2\">Tidak</option> -->
    </select>
\t  
\t";
        } else {
            // line 94
            echo "\t
\t<select name=\"publik\" id=\"publik\" onchange=\"expandgroup2(this.value);\">
      <option value=\"1\">Ya</option>
      <option value=\"0\">Grup Tertentu</option>
      <option value=\"2\">Tidak</option>
    </select>
\t
\t";
        }
        // line 102
        echo "  
</td>
  </tr>


  <tr id=\"groupRow\">
    <td valign=\"top\" nowrap=\"nowrap\">Untuk Group</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">

\t<div id=\"jstree\">
\t</div>

\t<input type=\"\" name=\"groupdok\" id=\"myText\" value=\"\" />

\t<ul style=\"display: none;\" id=\"keluarna\">
\t</ul>
\t
\t<!-- \t
\t";
        // line 121
        $context["total"] = 0;
        // line 122
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group") > 0)) {
                // line 123
                echo "\t<input type=\"checkbox\" name=\"id_group[]\" id=\"id_group";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                echo "\" />
\t
    <input type=\"hidden\" name=\"idgroup";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" id=\"idgroup";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                echo "\" />( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "kode_group"), "html", null, true);
                echo " ) - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "parent"), "html", null, true);
                echo " <br />
\t
\t
\t";
                // line 128
                $context["total"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
                // line 129
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " -->
\t
    <input type=\"hidden\" name=\"jnum\" id=\"jnum\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "\" />
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\">
      <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\" onclick=\"jQuery('#id').val(''); jQuery('#groupRow').hide();\" /></td>
  </tr>
</table>
</form>
<!-- <fieldset>
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
</fieldset> -->

<style>
\t.editGan {
\t\tcursor: pointer;
\t}
</style>

<table border=\"1\" id=\"customers\">
\t<thead>
\t\t<tr>
\t\t\t<th nowrap=\"nowrap\">Kategori</th>
\t\t\t<th nowrap=\"nowrap\">Judul</th>
\t\t\t<th nowrap=\"nowrap\">Deskripsi</th>
\t\t\t<th nowrap=\"nowrap\">Penulis</th>
\t\t\t<th nowrap=\"nowrap\">Aksi</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dokumen"]) ? $context["dokumen"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dok"]) {
            // line 184
            echo "\t\t<tr>
\t\t\t<td nowrap=\"nowrap\"> ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "nama_kategori"), "html", null, true);
            echo "  </td>
\t\t\t<td nowrap=\"nowrap\"> ";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "judul"), "html", null, true);
            echo " </td>
\t\t\t<td nowrap=\"nowrap\"> ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "deskripsi"), "html", null, true);
            echo " </td>
\t\t\t<td nowrap=\"nowrap\"> ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "penulis"), "html", null, true);
            echo " </td>
\t\t\t<td nowrap=\"nowrap\"> 
\t\t\t\t<a href=\"";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/dok/delete_data/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "id_dokumen"), "html", null, true);
            echo "\"
\t\t\t\t\tonclick=\"javascript: return confirm('Anda yakin hapus ?')\">Hapus</a>
\t\t\t\t<!-- <span class=\"editGan\" data-id='wehehe' id=\"edit\">Edit gan</span> -->
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dok'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 196
        echo "\t</tbody>
</table>

<table width=\"1000\" border=\"0\" id=\"ListData\"></table>
<div id=\"pager\"></div>
<div style=\"padding-top:20px; padding-bottom:20px;\">
<!-- <input type=\"button\" name=\"button4\" id=\"button4\" value=\"Hapus Data\" class=\"button\" onclick=\"hapus_data()\" /><br /> -->
<br />

</div>

<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/jstree.js\"></script>

<script language=\"javascript\">

\t\$(document).on('click', '#edit', function () {
\t\talert(\$(this).data('id'))
\t});

base_url=jQuery(\"#base_url\").val();
function load_grid(){
\t// alert(\"asdasd\")
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
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
\t\t\tjQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid,'id_dokumen'));
\t\t\tjQuery(\"#id_kategori\").val(jQuery(\"#ListData\").getCell(rowid,'id_kategori'));
\t\t\tjQuery(\"#judul\").val(jQuery(\"#ListData\").getCell(rowid,'judul'));
\t\t\tjQuery(\"#deskripsi\").val(jQuery(\"#ListData\").getCell(rowid,'deskripsi'));
\t\t\tjQuery(\"#penulis\").val(jQuery(\"#ListData\").getCell(rowid,'penulis'));
\t\t\tjQuery(\"#publik\").val(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\tif(\"";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["usergroup"]) ? $context["usergroup"] : null), "html", null, true);
        echo "\" == 0)
\t\t\t{
\t\t\t\t// expandgroup(jQuery(\"#ListData\").getCell(rowid,'publik'), jQuery(\"#ListData\").getCell(rowid,'groupdok'));
\t\t\t \texpandgroup2(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\t}
\t\t\telse if(\"";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["usergroup"]) ? $context["usergroup"] : null), "html", null, true);
        echo "\" == 2)
\t\t\t{
\t\t\t\texpandgroup(jQuery(\"#ListData\").getCell(rowid,'publik'), jQuery(\"#ListData\").getCell(rowid,'groupdok'));
\t\t\t}
\t\t\telse{
\t\t\t \texpandgroup2(jQuery(\"#ListData\").getCell(rowid,'publik'));
\t\t\t}
\t\t},
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Dokumen\",
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
        // line 289
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/dok/finddata/'+by+'/'+key});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function clear_search(){
\tjQuery(\"#key\").val('');
\tjQuery(\"#berd\").val('');
\t
\tjQuery(\"#ListData\").setGridParam({url:'";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/dok/viewdata'});
\tjQuery(\"#ListData\").trigger(\"reloadGrid\");\t
}
function delete_data(data){
\tjQuery.post(\"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/dok/delete_data\",{ id : data},
\tfunction(output){
\t\tif(output!=\"\") alert(output);
\t\telse clear_search();
\t});
}
function groupRow()
{
\tconsole.log(\"ini disini\");
\tif(\"";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["usergroup"]) ? $context["usergroup"] : null), "html", null, true);
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

\t\tconsole.log(\"hello\");
\t\tconsole.log(\"hello\");
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
\tif(publik == 2)
\t{
\t\tconsole.log(\"hello\");
\t\tjQuery(\"#groupRow\").show();
\t\tfor(x=1; x<=jQuery(\"#jnum\").val(); x++){
\t\t\tif(jQuery(\"#idgroup\"+x).val() == \"";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["usergroup"]) ? $context["usergroup"] : null), "html", null, true);
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
// alert(\"!23123\")
groupRow()
load_grid();
</script>

<!-- <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/jquery.min.js\"></script> -->

<script>
    \$('#jstree').jstree({
        'plugins': ['checkbox', 'wholerow'],
        'core': {
            'data': [
                
                ";
        // line 382
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group") > 0)) {
                // line 383
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "level") == 1)) {
                    // line 384
                    echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t'id': ' ";
                    // line 385
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                    echo " ',
\t\t\t\t\t\t\t'parent': '#',
\t\t\t\t\t\t\t'text': ' ";
                    // line 387
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
                    echo "'
\t\t\t\t\t\t},
\t\t\t\t\t";
                } else {
                    // line 390
                    echo "\t\t\t\t\t{
\t\t\t\t\t\t'id': ' ";
                    // line 391
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                    echo " ',
\t\t\t\t\t\t'parent': ' ";
                    // line 392
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "parent"), "html", null, true);
                    echo " ',
\t\t\t\t\t\t'text': ' ";
                    // line 393
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
                    echo "'
\t\t\t\t\t},
\t\t\t\t\t";
                }
                // line 396
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 397
        echo "                ],
            'animation': false,
            //'expand_selected_onload': true,
            'themes': {
                'icons': false,
            }
        },
        'search': {
            'show_only_matches': true,
            'show_only_matches_children': true
        }
    })


    \$('#jstree').on('changed.jstree', function (e, data) {
        var objects = data.instance.get_selected(true)
        var leaves = \$.grep(objects, function (o) {
            return data.instance.is_leaf(o)
        })
        var list = \$('#keluarna')
        var listna = [];
        
        list.empty()
        \$.each(leaves, function (i, o) {
            \$('<li/>').text(o.id).appendTo(list)
        })

        var uwu = \$(\"#keluarna\").jstree(\"get_selected\").text();
       
        var replaced = uwu.split('  ').join(',');

        document.getElementById(\"myText\").value = replaced;
        console.log(replaced);
    })


</script>



";
    }

    public function getTemplateName()
    {
        return "dokumenfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 397,  579 => 396,  573 => 393,  569 => 392,  565 => 391,  562 => 390,  556 => 387,  551 => 385,  548 => 384,  545 => 383,  540 => 382,  529 => 374,  506 => 354,  458 => 309,  446 => 300,  439 => 296,  429 => 289,  389 => 252,  381 => 247,  351 => 220,  336 => 208,  332 => 207,  319 => 196,  305 => 190,  300 => 188,  296 => 187,  292 => 186,  288 => 185,  285 => 184,  281 => 183,  226 => 131,  213 => 129,  211 => 128,  195 => 125,  187 => 123,  175 => 122,  173 => 121,  152 => 102,  142 => 94,  130 => 85,  95 => 52,  84 => 49,  81 => 48,  77 => 47,  62 => 35,  29 => 4,  26 => 3,);
    }
}
