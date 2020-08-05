<?php

/* dispokabagfrm.html */
class __TwigTemplate_7a4f1a9639ba8fe039b1637d4edfdb0a extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"title\">Detail surat</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">No Surat (Klik Tombol Cari)</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\">";
        // line 12
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "no_surat"), "html", null, true);
        echo "      
      <input type=\"hidden\" name=\"fkId\" id=\"fkId\" /></td>
  </tr>
  
  <tr>
    <td nowrap=\"nowrap\">Asal Surat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 19
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "asal_surat"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Sifat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 24
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "nama_sifat"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Jenis Arsip</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 29
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "nama_jenis"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Info Lampiran</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 34
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "lampiran"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Klasifikasi</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 39
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tanggal_klarifikasi"), "html", null, true);
        echo "</td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Tunjuk Silang</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 45
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tunjuk_silang"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Jadwal Penyusutan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 50
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "jadwal_penyusutan"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Tempat Penyimpanan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 55
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tempat_penyimpanan"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Indeks</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 60
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "indeks"), "html", null, true);
        echo "</td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Catatan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 66
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "catatan"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Perihal</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 71
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "hal"), "html", null, true);
        echo "</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    ";
        // line 78
        if (isset($context["prev"])) { $_prev_ = $context["prev"]; } else { $_prev_ = null; }
        if (($_prev_ == "view")) {
            // line 79
            echo "    <input type=\"button\" name=\"button\" id=\"button\" value=\"Kembali\" onclick=\"backurl()\">
    ";
        } else {
            // line 81
            echo "    <input type=\"button\" name=\"button\" id=\"button\" value=\"Disposisi ";
            if (isset($context["dispofor"])) { $_dispofor_ = $context["dispofor"]; } else { $_dispofor_ = null; }
            echo twig_escape_filter($this->env, $_dispofor_, "html", null, true);
            echo "\" onclick=\"dispoform()\">
    ";
        }
        // line 83
        echo "    <input type=\"button\" name=\"button\" id=\"button\" value=\"Lihat Scan Surat\" onclick=\"window.open('";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/surat/";
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "file_surat"), "html", null, true);
        echo "')\">
    </td>
  </tr>
</table>
</form>

<div id=\"pager\"></div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function backurl()
{
\thistory.back();
}

</script>
<script>
\tvar popup = null;
\tfunction open_pop(){
\t\tpopup = window.open('";
        // line 101
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/listsurat','','height=800px,width=1024px');
\t}
\tfunction close_pop(){
\t\tpopup.close()
\t}
\tjQuery(\"#tanggal\").datepicker({ dateFormat: 'yy-mm-dd' });
\tjQuery(\"#tanggal_klarifikasi\").datepicker({ dateFormat: 'yy-mm-dd' });
\tfunction dispoform()
\t{
\t\twindow.location=\"";
        // line 110
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/form/";
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "id_surat"), "html", null, true);
        echo "\";
\t}
\t
</script>
";
    }

    public function getTemplateName()
    {
        return "dispokabagfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 110,  193 => 101,  167 => 83,  160 => 81,  156 => 79,  153 => 78,  142 => 71,  133 => 66,  123 => 60,  114 => 55,  105 => 50,  96 => 45,  86 => 39,  77 => 34,  68 => 29,  59 => 24,  50 => 19,  39 => 12,  29 => 4,  26 => 3,);
    }
}
