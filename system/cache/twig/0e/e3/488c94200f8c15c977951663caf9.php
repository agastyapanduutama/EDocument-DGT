<?php

/* listdokumenpribadi.html */
class __TwigTemplate_0ee3488c94200f8c15c977951663caf9 extends Twig_Template
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
        echo "<div class=\"title\">list dokumen Pribadi ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gr"]) ? $context["gr"] : null), "getNamaGroup", array(), "method"), "html", null, true);
        echo "</div>
<div class=\"top10div\">
    <br />\t\t
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hasil"]) ? $context["hasil"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["topdok"]) {
            echo "\t\t
    <span class=\"doktitle10\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/dok/detailview/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topdok"]) ? $context["topdok"] : null), "id_dokumen"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topdok"]) ? $context["topdok"] : null), "judul"), "html", null, true);
            echo "</a></span>
    <div class=\"dokdesc10\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topdok"]) ? $context["topdok"] : null), "singkatdesk"), "html", null, true);
            echo "... <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/dok/detailview/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topdok"]) ? $context["topdok"] : null), "id_dokumen"), "html", null, true);
            echo "\">[detail]</a></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topdok'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "listdokumenpribadi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  50 => 9,  42 => 8,  36 => 7,  29 => 4,  26 => 3,);
    }
}
