<?php

/* detailjobnew.html */
class __TwigTemplate_73f3669969187cec2c4a2b70b0eb2689 extends Twig_Template
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
<div class=\"title\">Set Aktifitas / Project</div>
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
        echo "index.php/detailproject/searchProject/')\" /> 
      *) Tekan tombol untuk mencari project terkait</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Nama Survey</td>
    <td>:</td>
    <td><input name=\"nama_survey\" type=\"text\" id=\"nama_survey\" readonly=\"readonly\" value=\"";
        // line 20
        if (isset($context["survey"])) { $_survey_ = $context["survey"]; } else { $_survey_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_survey_, "getNamaJenis", array(), "method"), "html", null, true);
        echo "\" style=\"width:90%;\"/></td>
  </tr>
</table>
<fieldset>
<legend>Isi Detail Pekerjaan</legend>
<form id=\"form1\" name=\"form1\" method=\"post\" action=\"\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"formgrid\">
<thead>
  <tr>
    <td>No</td>
    <td>Pekerjaan</td>
    <td>Keterangan</td>
    <td>Anggaran</td>
    <td>Delete</td>
    </tr>
</thead>
<tbody>
";
        // line 37
        $context["total"] = 0;
        // line 38
        $context["i"] = 0;
        // line 39
        if (isset($context["job"])) { $_job_ = $context["job"]; } else { $_job_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_job_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["pekerjaan"]) {
            // line 40
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            $context["i"] = $this->getAttribute($_loop_, "index");
            // line 41
            echo "  <tr>
    <td style=\"padding-right:5px; text-align:right\">";
            // line 42
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ".<input type=\"hidden\" name=\"id";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"id";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"pekerjaan";
            // line 43
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"pekerjaan";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["pekerjaan"])) { $_pekerjaan_ = $context["pekerjaan"]; } else { $_pekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pekerjaan_, "pekerjaan"), "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:250px\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"keterangan";
            // line 44
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"keterangan";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["pekerjaan"])) { $_pekerjaan_ = $context["pekerjaan"]; } else { $_pekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pekerjaan_, "keterangan"), "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:250px\" /></td>
    <td width=\"100px\"><input type=\"text\" name=\"anggaran";
            // line 45
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" id=\"anggaran";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["pekerjaan"])) { $_pekerjaan_ = $context["pekerjaan"]; } else { $_pekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pekerjaan_, "anggaran"), "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:100px\" dir=\"rtl\"/></td>
    <td><input type=\"button\" name=\"button\" id=\"button\" value=\"Delete\" class=\"button\" onclick=\"window.location='";
            // line 46
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/detailproject/deleteDetail/";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getId", array(), "method"), "html", null, true);
            echo "/";
            if (isset($context["pekerjaan"])) { $_pekerjaan_ = $context["pekerjaan"]; } else { $_pekerjaan_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pekerjaan_, "id_pekerjaan"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pekerjaan'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "   


";
        // line 51
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        $context["i"] = ($_i_ + 1);
        // line 52
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        $context["last"] = ($_i_ + 4);
        // line 53
        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
        if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($_i_, $_last_));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 54
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            $context["total"] = $_x_;
            // line 55
            echo "  <tr>
    <td style=\"padding-right:5px; text-align:right\">";
            // line 56
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
    <td width=\"250px\"><input type=\"text\" name=\"pekerjaan";
            // line 57
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"pekerjaan";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:250px\" /></td>
    <td width=\"250px\"><input type=\"text\" name=\"keterangan";
            // line 58
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"keterangan";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:250px\" /></td>
    <td width=\"100px\"><input type=\"text\" name=\"anggaran";
            // line 59
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" id=\"anggaran";
            if (isset($context["x"])) { $_x_ = $context["x"]; } else { $_x_ = null; }
            echo twig_escape_filter($this->env, $_x_, "html", null, true);
            echo "\" class=\"maxtext\" style=\"width:100px\" dir=\"rtl\"/></td>
    <td>&nbsp;</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "  
</tbody>
</table>
*) Setiap kali anda mengisi lalu menyimpannya, form pengisian akan selalu terdapat 5 baris baru yang kosong, ini bertujuan untuk memudahkan anda jika ingin menambahkan data baru
<br />
<br />
<input type=\"hidden\" name=\"id_project\" value=\"";
        // line 68
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "getId", array(), "method"), "html", null, true);
        echo "\" id=\"id_project\" />
<input type=\"hidden\" name=\"total\" value=\"";
        // line 69
        if (isset($context["total"])) { $_total_ = $context["total"]; } else { $_total_ = null; }
        echo twig_escape_filter($this->env, $_total_, "html", null, true);
        echo "\" id=\"total\"  />

<input type=\"button\" name=\"button2\" id=\"button2\" value=\"Simpan\" class=\"button\" onclick=\"checkForm()\" />
</form>

<script language=\"javascript\">
\tfunction checkForm()
\t{
\t\tvar total = jQuery(\"#total\").val();
\t\tvar ok = false;
\t\tfor(x = 1; x<= total; x++ )
\t\t{
\t\t\tif (jQuery(\"#pekerjaan\" + x).val() != \"\")
\t\t\t\tok = true\t\t\t
\t\t}
\t\t
\t\tif(ok) {
\t\t\tvar jump = \"Y\";
\t\t\tvar bumper = \"Y\";
\t\t\tvar num_jump = 0;
\t\t\tvar jumped = false;
\t\t\tfor (z = 1; z <= total; z++)
\t\t\t{
\t\t\t\tif (jQuery(\"#pekerjaan\" + z).val() == \"\") {
\t\t\t\t\tbumper = \"N\";
\t\t\t\t\tjump = \"N\";
\t\t\t\t\tnum_jump = z;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t\tbumper = \"Y\";
\t\t\t\t
\t\t\t\tif (jump != bumper){
\t\t\t\t\tjumped = true;
\t\t\t\t}
\t\t\t\t
\t\t\t}
\t\t\tif(jumped)
\t\t\t\talert(\"Pengisian harus berurutan dan tidak boleh ada yang terlewati!\");
\t\t\telse
\t\t\t\tdocument.form1.submit();
\t\t} 
\t\telse
\t\t\talert(\"Lengkapi pengisian setidaknya 1 data pekerjaan\");
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
        return "detailjobnew.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 69,  249 => 68,  241 => 62,  227 => 59,  219 => 58,  211 => 57,  197 => 56,  194 => 55,  191 => 54,  185 => 53,  182 => 52,  179 => 51,  174 => 48,  150 => 46,  139 => 45,  128 => 44,  117 => 43,  103 => 42,  100 => 41,  97 => 40,  79 => 39,  77 => 38,  75 => 37,  54 => 20,  41 => 14,  29 => 4,  26 => 3,);
    }
}
