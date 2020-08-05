<?php

/* gantipassfrm.html */
class __TwigTemplate_88b3bdc7e6373fac7c93679e4e0453c8 extends Twig_Template
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
\tjQuery(\"#form1\").validate({
\t  rules: {
\t\tpass1: \"required\",
\t\tpass2: {
\t\t  equalTo: \"#pass1\"
\t\t}
\t  }
\t});\t
});
</script>
<div class=\"title\">ganti password</div>
<form action=\"\" method=\"post\" name=\"form1\" id=\"form1\">
<table width=\"100%\" border=\"0\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">Kata Sandi Lama</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\"><input name=\"pass0\" type=\"password\" class=\"required\" id=\"pass0\" size=\"20\" />
*
  <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["iduser"]) ? $context["iduser"] : null), "html", null, true);
        echo "\" /></td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">&nbsp;</td>
    <td nowrap=\"nowrap\">&nbsp;</td>
    <td nowrap=\"nowrap\">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Katasandi</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"pass1\" type=\"password\" class=\"required\" id=\"pass1\" size=\"20\" /> 
      *</td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Kata Sandi (Ulang)</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\"><input name=\"pass2\" type=\"password\" class=\"required\" id=\"pass2\" size=\"20\" /> 
      *</td>
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
        return "gantipassfrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 25,  29 => 4,  26 => 3,);
    }
}
