<?php

/* homelet.html */
class __TwigTemplate_0a2f4094387f030ad8afabe891fa2523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headereletbaru.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headereletbaru.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"title\">beranda e-letter</div>
<div>Aplikasi&nbsp;<em>e-Letter</em>&nbsp;merupakan salah satu aplikasi dalam kelompok Administrasi dan Manajemen pada blok fungsi e-Gov. Aplikasi ini dirancang untuk dapat mengelola administrasi surat menyurat yang ada dalam lembaga.</span><br />
</div>
<div>
<span lang=\"SV\">
<p>Dengan diimplementasikannya aplikasi ini, diperoleh manfaat sebagai berikut :</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mendukung kebijakan perkantoran elektronis guna menuju&nbsp;<em>e-Government</em>.</p>
<ul>
  <li>Dengan melaksanakan implementasi aplikasi persuratan maka sebagian fungsi perkantoran elektronis sudah terakomodasi. Fungsi-fungsi yang disediakan antara lain :</li>
  <li>Aplikasi dan sistem berbasis web</li>
  <li>Penyajian informasi surat secara mudah dan tepat guna</li>
  <li>Surat elektronis</li>
  <li>Folder elektronis</li>
  <li>Disposisi surat dalam lingkungan intranet</li>
</ul>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Efisiensi dan Efektivitas Pekerjaan</p>
<p>Pekerjaan yang terkait dengan persuaratan dan disposisinya dapat dilakukan secara elektronik dengan melibatkan beberapa orang sesuai dengan aliran kerjanya sehingga sehingga dapat meningkatkan produktivitas kerja</p>
<br />
<p>&nbsp;</p>
<div class=\"top10div\">
    <img src=\"";
        // line 23
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/top10news.png\" />
  \t<br />\t\t
    ";
        // line 25
        if (isset($context["topdoks"])) { $_topdoks_ = $context["topdoks"]; } else { $_topdoks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_topdoks_);
        foreach ($context['_seq'] as $context["_key"] => $context["topdok"]) {
            echo "\t\t
    <span class=\"doktitle10\"><a href=\"";
            // line 26
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/dok/detailview/";
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "id_dokumen"), "html", null, true);
            echo "\">";
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "judul"), "html", null, true);
            echo "</a></span>
    <div class=\"dokdesc10\">";
            // line 27
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "singkatdesk"), "html", null, true);
            echo "... <a href=\"";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/dok/detailview/";
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "id_dokumen"), "html", null, true);
            echo "\">[detail]</a></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topdok'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "homelet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  75 => 27,  64 => 26,  57 => 25,  51 => 23,  29 => 3,  26 => 2,);
    }
}
