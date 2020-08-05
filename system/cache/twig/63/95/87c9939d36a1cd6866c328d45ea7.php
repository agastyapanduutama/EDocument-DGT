<?php

/* detailrpt.html */
class __TwigTemplate_639587c9939d36a1cd6866c328d45ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<p><span class=\"title\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "judul"), "html", null, true);
        echo "</span><br />
    <i style=\"padding-left:30px; color:#333333\"></i>
  <br />
</p>
<p>&nbsp;</p>
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"11%\" nowrap=\"nowrap\"><i style=\"padding-left:30px; color:#333333\">Pengunggah</i></td>
    <td width=\"1%\" nowrap=\"nowrap\"><i style=\"color:#333333\">:</i></td>
    <td width=\"88%\" nowrap=\"nowrap\"><em>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "nama_lengkap"), "html", null, true);
        echo "</em></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\"><i style=\"padding-left:30px; color:#333333\">Penulis</i></td>
    <td nowrap=\"nowrap\"><i style=\"color:#333333\">:</i></td>
    <td nowrap=\"nowrap\"><em>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "penulis"), "html", null, true);
        echo "</em></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\"><i style=\"padding-left:30px; color:#333333\">Kategori Dokumen</i></td>
    <td nowrap=\"nowrap\"><i style=\"color:#333333\">:</i></td>
    <td nowrap=\"nowrap\"><em>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "nama_kategori"), "html", null, true);
        echo "</em></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\"><i style=\"padding-left:30px; color:#333333\">Tanggal Publikasi</i></td>
    <td nowrap=\"nowrap\"><i style=\"color:#333333\">:</i></td>
    <td nowrap=\"nowrap\"><em>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "tgl_publikasi"), "html", null, true);
        echo "</em></td>
  </tr>
</table>
<br />
<div class=\"dokdesc10\" style=\"text-align:justify;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "deskripsi"), "html", null, true);
        echo "<br /><br />
";
        // line 31
        if (($this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "tipe_file") == "pdf")) {
            // line 32
            echo "<a class=\"fancybox fancybox.iframe\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/dok/documentview/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "id_dokumen"), "html", null, true);
            echo "\">click to view<br /><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/pdficon.gif\" border=\"0\" /></a></div>
";
        } else {
            // line 34
            echo "<a class=\"fancybox fancybox.iframe\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/dok/imageview/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "id_dokumen"), "html", null, true);
            echo "\">click to view<br /><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/imageicon.gif\" border=\"0\" /></a></div>
";
        }
        // line 36
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.js?v=2.1.3\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.css?v=2.1.2\" media=\"screen\" />
<script language=\"javascript\">
jQuery(document).ready(function() {
\tjQuery('.fancybox').fancybox({
\t\t\theight : 864,
\t\t\twidth : 1152
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "detailrpt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  100 => 38,  96 => 37,  91 => 36,  81 => 34,  71 => 32,  69 => 31,  65 => 30,  58 => 26,  50 => 21,  42 => 16,  34 => 11,  22 => 2,  17 => 1,);
    }
}
