<?php

/* tpl/menuoperatoredoc.html */
class __TwigTemplate_e22ebb942bd37fe28b2d3bc528ecf267 extends Twig_Template
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
    <span class=\"listitle\" style=\"margin:0 0;\">Navigasi User</span>
    <h3 class=\"menuheader expandable\">Operator Akses klik disini</h3>
    <ul class=\"categoryitems\">
    \t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/listdok\">Dokumen Group</a></li>
        <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/listdokpribadi\">Dokumen Pribadi</a></li>
        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/listdokpublik\">Dokumen Publik</a></li>
      \t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/dok/form\">Upload Dokumen</a></li>
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/dokumenreport\">Dokumen User</a></li> 
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/dokumenlogreport\">Dokumen User Log</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/gantipass\">Ganti Password</a></li>
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/home/logout\">Logout</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "tpl/menuoperatoredoc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  23 => 5,  17 => 1,);
    }
}
