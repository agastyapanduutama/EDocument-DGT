<?php

/* subusergroupfrm.html */
class __TwigTemplate_874e130e32324bb30a0c0f8221ab655d extends Twig_Template
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
    jQuery(document).ready(function () {
        jQuery(\"#form1\").validate();
    });
</script>
<div class=\"title\">Sub Group User</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
    <table width=\"100%\" border=\"0\">
        <tr>
            <td width=\"9%\">Kode Sub Group </td>
            <td width=\"1%\">:</td>
            <td width=\"90%\"><input name=\"kode_subgroup\" type=\"text\" id=\"kode_subgroup\" class=\"required\" size=\"10\">
                *
                <input type=\"hidden\" name=\"id\" id=\"id\" /></td>
        </tr>
        <tr>
            <td>Nama Sub Group</td>
            <td>:</td>
            <td><input name=\"nama_subgroup\" type=\"text\" id=\"nama_subgroup\" class=\"required\" size=\"40\">
                * </td>
        </tr>
        <tr>
            <td width=\"9%\" nowrap=\"nowrap\">Parent Group</td>
            <td width=\"1%\" nowrap=\"nowrap\">:</td>
            <td width=\"90%\" nowrap=\"nowrap\">
                <select name=\"id_group\" id=\"id_group\">
                    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 31
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group", array(), "method"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group", array(), "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "parent"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "                </select>
                *
            </td>
        </tr>
        <tr>
            <td valign=\"top\">Keterangan</td>
            <td valign=\"top\">:</td>
            <td><textarea name=\"keterangan\" id=\"keterangan\" cols=\"45\" rows=\"5\"></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\">
                <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\"
                    onclick=\"jQuery('#id').val('');\" /></td>
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
                    <option value=\"a.kode_group\">Kode Group</option>
                    <option value=\"a.nama_group\">Nama Group</option>
                    <option value=\"a.keterangan\">Keterangan</option>
                </select> </td>
            <td><input type=\"button\" name=\"button2\" id=\"button2\" value=\"Cari\" class=\"button\" onclick=\"search_data()\" />
            </td>
            <td><input type=\"button\" name=\"button4\" id=\"button4\" value=\"Bersihkan\" class=\"button\"
                    onclick=\"clear_search()\" /></td>
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
    base_url = jQuery(\"#base_url\").val();

    function load_grid() {
        jQuery(\"#ListData\").jqGrid({
            url: '";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/subusergroup/viewdata',
            datatype: \"json\",
            mtype: \"post\",

            colNames: ['', 'Kode', 'Nama', 'Parent' , 'Keterangan', 'Add Date', 'Add User'],
            colModel: [{
                    name: 'id',
                    index: 'id',
                    key: true,
                    width: 50,
                    editable: true,
                    hidden: true
                },
                {
                    name: 'kode_subgroup',
                    index: 'kode_sbgroup',
                    width: 90
                },
                {
                    name: 'nama_subgroup',
                    index: 'nama_subgroup',
                    width: 170
                },
                {
                    name: 'nama_group',
                    index: 'nama_group',
                    width: 170
                },
                {
                    name: 'keterangan',
                    index: 'keterangan',
                    width: 160
                },
                {
                    name: 'add_date',
                    index: 'add_date',
                    width: 120
                },
                {
                    name: 'add_user',
                    index: 'add_user',
                    width: 80
                },
            ],
            ondblClickRow: function (rowid) {
                jQuery(\"#id\").val(jQuery(\"#ListData\").getCell(rowid, 'id'));
                jQuery(\"#kode_subgroup\").val(jQuery(\"#ListData\").getCell(rowid, 'kode_subgroup'));
                jQuery(\"#nama_subgroup\").val(jQuery(\"#ListData\").getCell(rowid, 'nama_subgroup'));
                jQuery(\"#id_group\").val(jQuery(\"#ListData\").getCell(rowid, 'nama_group'));
                jQuery(\"#keterangan\").val(jQuery(\"#ListData\").getCell(rowid, 'keterangan'));
            },
            pager: jQuery('#pager'),
            rowNum: 20,
            rowList: [0, 2, 5],
            viewrecords: true,
            sortorder: \"desc\",
            caption: \"Daftar Group User\",
            height: 320,
            width: 750,
            multiselect: true
        });

        return false;
    }

    function hapus_data() {
        data = jQuery(\"#ListData\").jqGrid('getGridParam', 'selarrrow');
        if (data == \"\") {
            alert(\"Tentukan dulu data yang akan di hapus dengan mencentang\");
        } else {
            if (confirm(\"Anda yakin?\"))
                delete_data(data);
            else
                return false
        }
    }

    function search_data() {
        key = jQuery(\"#key\").val();
        by = jQuery(\"#berd\").val();

        jQuery(\"#ListData\").setGridParam({
            url: '";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/finddata/' + by + '/' + key
        });
        jQuery(\"#ListData\").trigger(\"reloadGrid\");
    }

    function clear_search() {
        jQuery(\"#key\").val('');
        jQuery(\"#berd\").val('');

        jQuery(\"#ListData\").setGridParam({
            url: '";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/viewdata'
        });
        jQuery(\"#ListData\").trigger(\"reloadGrid\");
    }

    function delete_data(data) {
        jQuery.post(\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/delete_data\", {
                id: data
            },
            function (output) {
                if (output != \"\") alert(output);
                else clear_search();
            });
    }
    load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "subusergroupfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 183,  226 => 177,  213 => 167,  128 => 85,  74 => 33,  61 => 31,  57 => 30,  29 => 4,  26 => 3,);
    }
}
