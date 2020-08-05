<?php

/* homeerep.html */
class __TwigTemplate_6bc2351aef0a6b4d5ae9e71b142b2fc9 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"title\">beranda e-reporting</div>
<p><img style=\"float: left;\" src=\"/esdm/assets/tnymce/uploaded/erepshort.png\" alt=\"\" />
<p>Aplikasi e-Reporting bermanfaat sebagai :</p>
<ul><li>Reporting System e-Reportingdikembangkan dalam bentuk online sehingga informasi yang ditampilkan dapat diketahui kapanpun dan dimanapun Anda berada, </li>
  <li>Informasi direpresentasikan dalam bentuk-bentuk yang menarik.  Berbeda dengan sistem pelaporan berbasis dokumen, pemanfaatan teknologi informasi dapat memberikan informasi menjadi lebih mudah untuk dianalisa dan dapat memicu respon cepat untuk pengambilan keputusan terkait dengan informasi yang disajikan tanpa mengurangi kualitas dan kuantitas data.</li>
  <li>Aplikasi ini memungkinkan Anda untuk memantau surver pekerjaan dalam hal pengembangan energi baru terbarukan.</li>
  <li>Aplikasi didesain dengan antarmuka yang menarik dan mudah digunakan.</li>
  <li>Reporting System e-Reportingdapat membantu dalam proses evaluasi lebih lanjut secara detail. Data yang telah tersimpan dapat direview secara mendetail.</li>
  <li>Akses mandiri untuk perusahaan pihak ke 3 yang berguna melakukan pengisian survey pekerjaan.</li>
</ul>
</p>

<div class=\"top10div\">
    <img src=\"";
        // line 16
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/top10news.png\" />
  \t<br />\t\t
    ";
        // line 18
        if (isset($context["topdoks"])) { $_topdoks_ = $context["topdoks"]; } else { $_topdoks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_topdoks_);
        foreach ($context['_seq'] as $context["_key"] => $context["topdok"]) {
            echo "\t\t
    <span class=\"doktitle10\"><a href=\"";
            // line 19
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
            // line 20
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
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "homeerep.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  68 => 20,  57 => 19,  50 => 18,  44 => 16,  29 => 3,  26 => 2,);
    }
}
