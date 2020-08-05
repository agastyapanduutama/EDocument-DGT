<?php

/* runningtext.html */
class __TwigTemplate_abb032dae82da75a7ec01fd13c2c60d5 extends Twig_Template
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
        echo "<script>
jQuery(document).ready(function(){
\tjQuery(\"#form1\").validate();
});
</script>
<div class=\"title\">running text</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  <tr>
    <td width=\"9%\" valign=\"top\">Running Text</td>
    <td width=\"1%\" valign=\"top\">:</td>
    <td width=\"90%\"><textarea name=\"runningtext\" id=\"runningtext\" cols=\"70\" rows=\"3\" class=\"required\">";
        // line 15
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "getRunningText"), "html", null, true);
        echo "</textarea>
      <input name=\"id\" type=\"hidden\" id=\"id\" value=\"1\" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\"></td>
  </tr>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "runningtext.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  29 => 4,  26 => 3,);
    }
}
