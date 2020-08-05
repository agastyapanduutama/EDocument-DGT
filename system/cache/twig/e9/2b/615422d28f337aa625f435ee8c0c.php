<?php

/* detailpekerjaan.html */
class __TwigTemplate_e92b615422d28f337aa625f435ee8c0c extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate();
});
</script>
<div class=\"title\">Set Detail Aktifitas</div>
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kode Project</td>
    <td width=\"1%\">:</td>
    <td width=\"90%\"><input type=\"text\" name=\"kode_project\" readonly=\"readonly\" id=\"kode_project\" value=\"";
        // line 14
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getKodeProject", array(), "method"), "html", null, true);
        echo "\" /> <input type=\"button\" name=\"button3\" id=\"button3\" value=\"Cari\" onclick=\"popup('";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/detailpekerjaan/searchProject/')\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Survey</td>
    <td>:</td>
    <td><input name=\"nama_survey\" type=\"text\" id=\"nama_survey\" readonly=\"readonly\" value=\"";
        // line 19
        if (isset($context["survey"])) { $_survey_ = $context["survey"]; } else { $_survey_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_survey_, "getNamaJenis", array(), "method"), "html", null, true);
        echo "\" style=\"width:90%;\"/></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Pekerjaan</td>
    <td>:</td>
    <td><input type=\"text\" name=\"nama_pekerjaan\" readonly=\"readonly\" id=\"nama_pekerjaan\" value=\"";
        // line 24
        if (isset($context["pkj"])) { $_pkj_ = $context["pkj"]; } else { $_pkj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_pkj_, "pekerjaan"), "html", null, true);
        echo "\" style=\"width:70%;\" />
      <input type=\"button\" name=\"button4\" id=\"button4\" value=\"Cari\" onclick=\"popup('";
        // line 25
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/detailpekerjaan/searchPekerjaan/'+jQuery('#id_project').val())\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">&nbsp;</td>
    <td>&nbsp;</td>
    <td>*) Tekan tombol &quot;Cari&quot; untuk menentukan paramater pekerjaan</td>
  </tr>
</table>
<fieldset>
<legend>Isi Detail Pekerjaan</legend>
<form id=\"form1\" name=\"form1\" method=\"post\" action=\"\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"formgrid\">
<thead>
  <tr>
    <td>No</td>
    <td>Detail Pekerjaan</td>
    <td>Keterangan</td>
    <td>Delete</td>
    </tr>
</thead>
<tbody>
";
        // line 46
        $context["total"] = 0;
        // line 47
        $context["i"] = 0;
        // line 48
        if (isset($context["detail"])) { $_detail_ = $context["detail"]; } else { $_detail_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_detail_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["detPekerjaan"]) {
            // line 49
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            $context["i"] = $this->getAttribute($_loop_, "index");
            // line 50
            echo "  <tr>
    <td style=\"padding-right:5px; text-align:right\">";
            // line 51
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ".<input type=\"hidden\" name=\"id";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"id";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "id_detail"), "html", null, true);
            echo "\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"detail";
            // line 52
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"detail";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "detail"), "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:300px\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"keterangan";
            // line 53
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"keterangan";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "keterangan"), "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:300px\" /></td>
    <td><input type=\"button\" name=\"button\" id=\"button\" value=\"Delete\" class=\"button\" onclick=\"window.location='";
            // line 54
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/detailpekerjaan/deleteDetail/";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "id_project"), "html", null, true);
            echo "/";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "id_pekerjaan"), "html", null, true);
            echo "/";
            if (isset($context["detPekerjaan"])) { $_detPekerjaan_ = $context["detPekerjaan"]; } else { $_detPekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_detPekerjaan_, "id_detail"), "html", null, true);
            echo "'\" /></td>
 </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detPekerjaan'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "   


";
        // line 59
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        $context["i"] = ($_i_ + 1);
        // line 60
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        $context["last"] = ($_i_ + 4);
        // line 61
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($_i_, $_last_));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 62
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            $context["total"] = $_x_;
            // line 63
            echo "  <tr>
    <td style=\"padding-right:5px; text-align:right\">";
            // line 64
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo ".<input type=\"hidden\" name=\"id";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"id";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"detail";
            // line 65
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"detail";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:300px\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"keterangan";
            // line 66
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"keterangan";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:300px\" /></td>
    <td>&nbsp;</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "  
</tbody>
</table>

*) Setiap kali anda mengisi lalu menyimpannya, form pengisian akan selalu terdapat 5 baris baru yang kosong, ini bertujuan untuk memudahkan anda jika ingin menambahkan data baru
<br />
<br />

<input type=\"hidden\" name=\"id_project\" value=\"";
        // line 77
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getId", array(), "method"), "html", null, true);
        echo "\" id=\"id_project\" />
<input type=\"hidden\" name=\"id_pekerjaan\" value=\"";
        // line 78
        if (isset($context["pkj"])) { $_pkj_ = $context["pkj"]; } else { $_pkj_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_pkj_, "id_pekerjaan"), "html", null, true);
        echo "\" id=\"id_pekerjaan\" />
<input type=\"hidden\" name=\"total\" value=\"";
        // line 79
        if (isset($context["total"])) { $_total_ = $context["total"]; } else { $_total_ = null; }
        echo twig_escape_filter($this->env, $_total_, "html", null, true);
        echo "\" id=\"total\"  />

<input type=\"button\" name=\"button2\" id=\"button2\" value=\"Simpan\" class=\"button\" onclick=\"checkForm()\" />
</form>

<script language=\"javascript\">
\tfunction checkForm()
\t{
\t\tif(jQuery(\"#id_project\") == \"\")
\t\t\talert(\"Anda belum memilih Project terkait\");
\t\telse if(jQuery(\"#id_pekerjaan\") == \"\")
\t\t\talert(\"Anda belum memilih Pekerjaan terkait\");
\t\telse {
\t\t
\t\t\tvar total = jQuery(\"#total\").val();
\t\t\tvar ok = false;
\t\t\tfor(x = 1; x<= total; x++ )
\t\t\t{
\t\t\t\tif (jQuery(\"#detail\" + x).val() != \"\")
\t\t\t\t\tok = true\t\t\t
\t\t\t}
\t\t\t
\t\t\tif(ok) {
\t\t\t\tvar jump = \"Y\";
\t\t\t\tvar bumper = \"Y\";
\t\t\t\tvar num_jump = 0;
\t\t\t\tvar jumped = false;
\t\t\t\tfor (z = 1; z <= total; z++)
\t\t\t\t{
\t\t\t\t\tif (jQuery(\"#detail\" + z).val() == \"\") {
\t\t\t\t\t\tbumper = \"N\";
\t\t\t\t\t\tjump = \"N\";
\t\t\t\t\t\tnum_jump = z;
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t\tbumper = \"Y\";
\t\t\t\t\t
\t\t\t\t\tif (jump != bumper){
\t\t\t\t\t\tjumped = true;
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t}
\t\t\t\tif(jumped)
\t\t\t\t\talert(\"Pengisian harus berurutan dan tidak boleh ada yang terlewati!\");
\t\t\t\telse
\t\t\t\t\tdocument.form1.submit();
\t\t\t} 
\t\t\telse
\t\t\t\talert(\"Lengkapi pengisian setidaknya 1 data pekerjaan\");
\t\t
\t\t}
\t\t
\t}
\t
\tfunction check_numeric(obj)
\t{
\t\tvar val = obj.value;
\t\tvar vals = \"\";
\t\tfor(x = 0; x < val.length; x++)
\t\t{
\t\t\tif(val.charAt(x) >= 0 && val.charAt(x) <= 9)
\t\t\t\tvals += val.charAt(x);
\t\t\telse if(val.charAt(x) == \" \")
\t\t\t\tvals = val.substring(0, x);
\t\t\telse 
\t\t\t\tvals = val.substring(0, x);
\t\t}
\t\tobj.value = vals.trim();
\t\t
\t}
</script>
</fieldset>

";
    }

    public function getTemplateName()
    {
        return "detailpekerjaan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 79,  257 => 78,  252 => 77,  242 => 69,  228 => 66,  220 => 65,  206 => 64,  203 => 63,  200 => 62,  194 => 61,  191 => 60,  188 => 59,  183 => 56,  156 => 54,  145 => 53,  134 => 52,  120 => 51,  117 => 50,  114 => 49,  96 => 48,  94 => 47,  92 => 46,  67 => 25,  62 => 24,  53 => 19,  41 => 14,  29 => 4,  26 => 3,);
    }
}
