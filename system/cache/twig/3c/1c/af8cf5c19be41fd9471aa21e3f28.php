<?php

/* detailnews.html */
class __TwigTemplate_3c1caf8cf5c19be41fd9471aa21e3f28 extends Twig_Template
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
        echo "<div class=\"title\">";
        if (isset($context["detail"])) { $_detail_ = $context["detail"]; } else { $_detail_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_detail_, "getJudul", array(), "method"), "html", null, true);
        echo "</div>
";
        // line 5
        if (isset($context["detail"])) { $_detail_ = $context["detail"]; } else { $_detail_ = null; }
        echo $this->getAttribute($_detail_, "getDeskripsi", array(), "method");
        echo "
<br />
<br />
<a href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/home/listberita\" style=\"text-decoration:none; color:#666666;\">&raquo; Berita Lainnya</a>
<br /><br />
";
    }

    public function getTemplateName()
    {
        return "detailnews.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  35 => 5,  29 => 4,  26 => 3,);
    }
}
