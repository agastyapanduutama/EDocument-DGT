<?php

/* tpl/menuadminerep.html */
class __TwigTemplate_b01dd2a3dcf9e030a5da449aa99afc60 extends Twig_Template
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
    <span class=\"listitle\" style=\"margin:0 0;\">Navigasi E-Reporting</span>
    <h3 class=\"menuheader expandable\">Pengolahan Data</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 5
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/perusahaan/form\">Perusahaan</a></li>
        <li><a href=\"";
        // line 6
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jenissurvey/form\">Jenis Survey</a></li>
        <!--<li><a href=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/jenispekerjaan/form\">Aktifitas</a></li>-->
        <li><a href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/komponenbiaya/form\">Kelompok Biaya</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Transaksi</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 13
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/project/setwilayah\">Set Wilayah Kerja (Project)</a></li>
        <li><a href=\"";
        // line 14
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/detailproject/setDetailNew\">Set Aktifitas</a></li>
        <li><a href=\"";
        // line 15
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/detailpekerjaan/setDetail\">Set Detail Aktifitas</a></li>
        <li><a href=\"";
        // line 16
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/setbiaya/setKomponenBiaya\">Set Komponen Biaya</a></li>
        <li><a href=\"";
        // line 17
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/planning/listPlanning\">Set Perencanaan</a></li>
        <li><a href=\"";
        // line 18
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/realisasi/listRealisasi\">Set Realisasi</a></li>
   </ul>
    <!--
    <h3 class=\"menuheader expandable\">Pengolahan Konten</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 23
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/berandaform\">Kontent Beranda</a></li>
        <li><a href=\"";
        // line 24
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/tentangform\">Kontent Tentang Kami</a></li>
        <li><a href=\"";
        // line 25
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/kontakform\">Kontent Kontak Kami</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Berita dan Media</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 30
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/newsmaster/form\">Berita</a></li>
        <li><a href=\"";
        // line 31
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/contentmaster/runningtextform\">Running Text</a></li>              
        <li><a href=\"";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/linkmaster/form\">Eksternal Link</a></li>
    </ul>
    -->
    <h3 class=\"menuheader expandable\">Laporan</h3>
    <ul class=\"categoryitems\">
    \t<li><a href=\"";
        // line 37
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/laporanperusahaan/repPerusahaan\">Perusahaan</a></li>
        <li><a href=\"";
        // line 38
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/laporanperusahaan/repProject\">Wilayah Kerja (Project)</a></li>
        <li><a href=\"#\">Daftar Rencana</a></li>
        <li><a href=\"#\">Daftar Realisasi</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Utilitas</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 45
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/home/gantipass\">Ganti Password</a></li>
        <li><a href=\"#\">Akses Perusahaan</a></li>
        <li><a href=\"";
        // line 47
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/home/logout\">Logout</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "tpl/menuadminerep.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  135 => 45,  124 => 38,  119 => 37,  110 => 32,  105 => 31,  100 => 30,  91 => 25,  86 => 24,  81 => 23,  72 => 18,  67 => 17,  62 => 16,  52 => 14,  47 => 13,  38 => 8,  33 => 7,  28 => 6,  23 => 5,  17 => 1,  375 => 130,  360 => 131,  358 => 130,  331 => 118,  318 => 116,  314 => 115,  296 => 114,  290 => 110,  276 => 109,  263 => 107,  259 => 106,  241 => 105,  231 => 99,  228 => 98,  225 => 97,  222 => 96,  219 => 95,  216 => 94,  213 => 93,  209 => 92,  206 => 91,  200 => 89,  190 => 83,  185 => 82,  180 => 81,  175 => 80,  168 => 77,  163 => 76,  157 => 74,  147 => 68,  138 => 63,  133 => 62,  98 => 31,  93 => 30,  88 => 29,  70 => 15,  65 => 14,  59 => 12,  54 => 11,  49 => 10,  39 => 8,  34 => 7,  24 => 5,  18 => 1,  83 => 22,  68 => 20,  57 => 15,  50 => 18,  44 => 9,  29 => 6,  26 => 2,);
    }
}
