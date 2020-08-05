<?php

/* listberita.html */
class __TwigTemplate_6448d3ce98654def24f5dc523a3ec956 extends Twig_Template
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
        echo "<div class=\"title\">list berita</div>
<div class=\"top10div\">
    <br />\t\t
    ";
        // line 7
        if (isset($context["hasil"])) { $_hasil_ = $context["hasil"]; } else { $_hasil_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_hasil_);
        foreach ($context['_seq'] as $context["_key"] => $context["topdok"]) {
            echo "\t\t
    <span class=\"doktitle10\"><a href=\"";
            // line 8
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/contentmaster/newsview/";
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "id_news"), "html", null, true);
            echo "\">";
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "judul"), "html", null, true);
            echo "</a></span>
    <br />
    <span style=\"color:#999999; padding-left:10px;\"><em>Tgl Publikasi : ";
            // line 10
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "tgl_publikasi"), "html", null, true);
            echo "</em></span>
    <br /><span style=\"color:#999999; padding-left:10px;\"><em>Narasumber : ";
            // line 11
            if (isset($context["topdok"])) { $_topdok_ = $context["topdok"]; } else { $_topdok_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_topdok_, "penulis"), "html", null, true);
            echo "</em></span>
    <br />
    <br />

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topdok'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "listberita.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  58 => 11,  53 => 10,  41 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
