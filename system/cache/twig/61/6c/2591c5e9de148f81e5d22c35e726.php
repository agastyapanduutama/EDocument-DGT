<?php

/* tpl/menuelet.html */
class __TwigTemplate_616c2591c5e9de148f81e5d22c35e726 extends Twig_Template
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
        echo "<div class=\"arrowlistmenu\">
    <span class=\"listitle\" style=\"margin:0 0;\">Navigasi E-letter</span>
    <h3 class=\"menuheader expandable\">Pengolahan Data</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 5
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jenissurat/form\">Jenis Surat</a></li>
        <li><a href=\"";
        // line 6
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/aksisurat/form\">Aksi Surat</a></li>
        <li><a href=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/statussurat/form\">Status Surat</a></li>
        <li><a href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/sifatsurat/form\">Sifat Surat</a></li>
        <li><a href=\"";
        // line 9
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/tujuansurat/form\">Tujuan Surat</a></li>        
        <li><a href=\"";
        // line 10
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jabatan/form\">Jabatan</a></li>
        <li><a href=\"";
        // line 11
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/staff/form\">Staff</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Transaksi</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 16
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/form\">Surat Masuk</a></li>
        <li><a href=\"";
        // line 17
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/disposisi/listdispo\">Disposisi Surat</a></li>
        <li><a href=\"#\">Penyelesaian Disposisi</a></li>
        <li><a href=\"";
        // line 19
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/suratkeluar/form\">Surat Keluar</a></li>
        <li><a href=\"#\">Approval Surat Keluar</a></li>
    </ul>
    <!--
    <h3 class=\"menuheader expandable\">Pengolahan Konten</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 25
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/berandaform\">Kontent Beranda</a></li>
        <li><a href=\"";
        // line 26
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/tentangform\">Kontent Tentang Kami</a></li>
        <li><a href=\"";
        // line 27
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/kontakform\">Kontent Kontak Kami</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Berita dan Media</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/form\">Berita</a></li>
        <li><a href=\"";
        // line 33
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/runningtextform\">Running Text</a></li>              
        <li><a href=\"";
        // line 34
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/linkmaster/form\">Eksternal Link</a></li>
    </ul>
    -->
    <h3 class=\"menuheader expandable\">Laporan</h3>
    <ul class=\"categoryitems\">
    \t<li><a href=\"";
        // line 39
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/laporansurat/repSuratMasuk\">Surat Masuk</a></li>
        <li><a href=\"";
        // line 40
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/laporansurat/repSuratDispo\">Disposisi Surat</a></li>
        <li><a href=\"#\">Status Approval</a></li> 
        <li><a href=\"#\">Status Penyelasaian</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Utilitas</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 47
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/home/gantipass\">Ganti Passwords</a></li>
        <li><a href=\"";
        // line 48
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/home/logout\">Logout</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "tpl/menuelet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  137 => 47,  126 => 40,  121 => 39,  112 => 34,  102 => 32,  73 => 19,  67 => 17,  62 => 16,  53 => 11,  48 => 10,  43 => 9,  38 => 8,  33 => 7,  28 => 6,  23 => 5,  17 => 1,  406 => 145,  391 => 146,  389 => 145,  362 => 133,  349 => 131,  345 => 130,  327 => 129,  321 => 125,  307 => 124,  294 => 122,  290 => 121,  272 => 120,  262 => 114,  259 => 113,  256 => 112,  253 => 111,  249 => 109,  246 => 108,  243 => 107,  240 => 106,  237 => 105,  231 => 103,  227 => 102,  224 => 101,  218 => 99,  208 => 93,  203 => 92,  198 => 91,  193 => 90,  186 => 87,  181 => 86,  175 => 84,  165 => 78,  156 => 73,  151 => 72,  113 => 38,  107 => 33,  99 => 32,  93 => 27,  88 => 26,  83 => 25,  65 => 14,  60 => 13,  54 => 11,  49 => 10,  44 => 9,  39 => 8,  34 => 7,  24 => 5,  18 => 1,  90 => 29,  75 => 27,  64 => 26,  57 => 25,  51 => 23,  29 => 6,  26 => 2,);
    }
}
