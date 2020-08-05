<?php

/* homedoc.html */
class __TwigTemplate_ef6c3ced260754d855c9e85c742aafac extends Twig_Template
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
        echo "<div class=\"title\">beranda</div>
";
        // line 5
        if (isset($context["ct"])) { $_ct_ = $context["ct"]; } else { $_ct_ = null; }
        echo $this->getAttribute($_ct_, "getBeranda", array(), "method");
        echo "
<div class=\"top10div\">
    <img src=\"";
        // line 7
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "assets/img/top10dok.png\" />
  \t<br />\t\t
    ";
        // line 9
        if (isset($context["topdoks"])) { $_topdoks_ = $context["topdoks"]; } else { $_topdoks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_topdoks_);
        foreach ($context['_seq'] as $context["_key"] => $context["topdok"]) {
            echo "\t\t
    <span class=\"doktitle10\"><a href=\"";
            // line 10
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
            // line 11
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
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "homedoc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  62 => 11,  51 => 10,  44 => 9,  38 => 7,  32 => 5,  29 => 4,  26 => 3,);
    }
}
