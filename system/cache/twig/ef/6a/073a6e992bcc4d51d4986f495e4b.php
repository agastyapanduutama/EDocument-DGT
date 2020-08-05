<?php

/* tpl/menuadminedoc.html */
class __TwigTemplate_ef6a073a6e992bcc4d51d4986f495e4b extends Twig_Template
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
    <span class=\"listitle\" style=\"margin:0 0;\">Navigasi E-Document</span>
    <h3 class=\"menuheader expandable\">Pengolahan Data</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/usergroup/form\">Data Group Pemakai</a></li>
        <!-- <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/subusergroup/form\">Data Sub Group Pemakai</a></li> -->
        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/pemakai/form\">Data Pemakai</a></li>
        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/katdokumen/form\">Data Kategori Dokumen</a></li>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/dok/form\">Data Dokumen</a></li>
    </ul>
    
    <!-- <h3 class=\"menuheader expandable\">Pengolahan Konten</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/contentmaster/berandaform\">Kontent Beranda</a></li>
        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/contentmaster/tentangform\">Kontent Tentang Kami</a></li>
        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/contentmaster/kontakform\">Kontent Kontak Kami</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Berita dan Media</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/newsmaster/form\">Berita</a></li>
        <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/contentmaster/runningtextform\">Running Text</a></li>              
        <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/linkmaster/form\">Eksternal Link</a></li>
    </ul> -->
    
    <h3 class=\"menuheader expandable\">Laporan</h3>
    <ul class=\"categoryitems\">
    \t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/listdok\">List Dokumen</a></li>
        <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/groupreport\">Daftar Group Pemakai</a></li>
        <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/userreport\">Daftar Pemakai</a></li>
        <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/dokumenreport\">Daftar Dokumen</a></li> 
        <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/dokumenlogreport\">Dokumen Log</a></li>
    </ul>
    
    <h3 class=\"menuheader expandable\">Utilitas</h3>
    <ul class=\"categoryitems\">
        <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/gantipass\">Ganti Password</a></li>
        <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/logout\">Logout</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "tpl/menuadminedoc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  103 => 37,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  71 => 23,  67 => 22,  63 => 21,  55 => 16,  51 => 15,  47 => 14,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  23 => 5,  17 => 1,);
    }
}
