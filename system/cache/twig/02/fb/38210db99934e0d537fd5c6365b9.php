<?php

/* logrpt.html */
class __TwigTemplate_02fb38210db99934e0d537fd5c6365b9 extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/menuset.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery1.8.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jqueryvalidation.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/accordion.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/i18n/grid.locale-en.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/js/jquery.jqGrid.fluid.js\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/themes/redmond/jquery-ui-1.7.1.custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/jqgrid/themes/redmond/ui.jqgrid.css\" />

<div class=\"title\">log dokumen terbaca</div>
<table width=\"1000\" border=\"0\" id=\"ListData\"></table>
<div id=\"pager\"></div>
<div></div>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
function load_grid(){
\tjQuery(\"#ListData\").jqGrid({
\t\turl: '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/report/viewlog/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dok"]) ? $context["dok"] : null), "id_dokumen"), "html", null, true);
        echo "',
\t\tdatatype: \"json\",
\t\tmtype : \"post\",
\t\t
\t\tcolNames:['','','','Pembaca','IP Address','Tgl Baca'],
\t\tcolModel:[
\t\t\t{name:'id_log',index:'id_log',key:true, width:50,hidden:true},
\t\t\t{name:'id_dokumen',index:'id_dokumen', width:90, hidden:true},
\t\t\t{name:'id_user',index:'id_user', width:170, hidden:true},
\t\t\t{name:'pembaca',index:'pembaca', width:160},
\t\t\t{name:'ip_address',index:'ip_address', width:160},
\t\t\t{name:'tgl_baca',index:'tgl_baca', width:160},
\t\t],\t\t
\t\tpager: jQuery('#pager'),
\t\trowNum:20,
\t\trowList:[0,2,5],
\t\tviewrecords: true,
\t\tsortorder: \"desc\",
\t\tcaption: \"Daftar Log\",
\t\theight:230,
\t\twidth:500\t
\t});
\t
\treturn false;
}
load_grid();
</script>
";
    }

    public function getTemplateName()
    {
        return "logrpt.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  17 => 1,);
    }
}
