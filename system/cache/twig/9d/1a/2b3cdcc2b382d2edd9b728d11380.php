<?php

/* disposisifrm.html */
class __TwigTemplate_9d1a2b3cdcc2b382d2edd9b728d11380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tpl/headerblank.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tpl/headerblank.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"title\">Disposisi</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\" id=\"form1\">
<table width=\"95%\" border=\"0\" align=\"center\">
  
  <tr>
    <td width=\"9%\" nowrap=\"nowrap\">No Surat</td>
    <td width=\"1%\" nowrap=\"nowrap\">:</td>
    <td width=\"90%\" nowrap=\"nowrap\">";
        // line 12
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "no_surat"), "html", null, true);
        echo "      </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Asal Surat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 17
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "asal_surat"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Sifat</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 22
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "nama_sifat"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Jenis Arsip</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 27
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "nama_jenis"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Info Lampiran</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 32
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "lampiran"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td nowrap=\"nowrap\">Tanggal Klarifikasi</td>
    <td nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 37
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tanggal_klarifikasi"), "html", null, true);
        echo " </td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Tunjuk Silang</td>
    <td valign=\"top\" nowrap=\"nowrap\">&nbsp;</td>
    <td nowrap=\"nowrap\">";
        // line 43
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tunjuk_silang"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Jadwal Penyusutan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 48
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "jadwal_penyusutan"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Tempat Penyimpanan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 53
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "tempat_penyimpanan"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Indeks</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 58
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "indeks"), "html", null, true);
        echo " </td>
  </tr>
  
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Catatan</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 64
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "catatan"), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td valign=\"top\" nowrap=\"nowrap\">Perihal</td>
    <td valign=\"top\" nowrap=\"nowrap\">:</td>
    <td nowrap=\"nowrap\">";
        // line 69
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "hal"), "html", null, true);
        echo " </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tanggal Disposisi </td>
    <td>:</td>
    <td><input name=\"tanggal_disposisi\" type=\"text\" id=\"tanggal_disposisi\" size=\"10\" class=\"required\" />
        <input type=\"hidden\" name=\"id_surat\" id=\"id_surat\" value=\"";
        // line 81
        if (isset($context["surat"])) { $_surat_ = $context["surat"]; } else { $_surat_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_surat_, "id_surat"), "html", null, true);
        echo "\" /></td>
  </tr>
  <tr>
    <td>Waktu Penyelesaian surat </td>
    <td>:</td>
    <td><input name=\"tanggal_penyelesaian\" type=\"text\" id=\"tanggal_penyelesaian\" size=\"10\" class=\"required\" /></td>
  </tr>
  <tr>
    <td>Aksi</td>
    <td>:</td>
    <td><select name=\"aksi\" id=\"aksi\">
      
     ";
        // line 93
        if (isset($context["aksi"])) { $_aksi_ = $context["aksi"]; } else { $_aksi_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_aksi_);
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 94
            echo "      
      <option value=\"";
            // line 95
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "getId", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "getNamaAksi", array(), "method"), "html", null, true);
            echo " </option>
      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
        echo "      
    
    </select>    </td>
  </tr>
  ";
        // line 102
        if (isset($context["levelJabatan"])) { $_levelJabatan_ = $context["levelJabatan"]; } else { $_levelJabatan_ = null; }
        if (($_levelJabatan_ == 3)) {
            // line 103
            echo "  <tr>
    <td valign=\"top\">Staff</td>
    <td valign=\"top\">:</td>
    <td><ul>
      ";
            // line 107
            $context["id"] = 0;
            // line 108
            echo "      ";
            if (isset($context["staff"])) { $_staff_ = $context["staff"]; } else { $_staff_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_staff_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                // line 109
                echo "      ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                $context["id"] = $this->getAttribute($_loop_, "index");
                // line 110
                echo "      <li style=\"list-style:none\">
            <input type=\"checkbox\" value=\"";
                // line 111
                if (isset($context["st"])) { $_st_ = $context["st"]; } else { $_st_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_st_, "id_staff"), "html", null, true);
                echo "\" id=\"idstaff";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" name=\"idstaff";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" />
        ";
                // line 112
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo ". ";
                if (isset($context["st"])) { $_st_ = $context["st"]; } else { $_st_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_st_, "nama"), "html", null, true);
                echo "</li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 114
            echo "     
      </ul></td>
  </tr>
  ";
        } else {
            // line 118
            echo "  <tr>
    <td valign=\"top\">Alamat Aksi</td>
    <td valign=\"top\">:</td>
    <td><ul>
      ";
            // line 122
            $context["id"] = 0;
            // line 123
            echo "      ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                // line 124
                echo "      ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                $context["id"] = $this->getAttribute($_loop_, "index");
                // line 125
                echo "      <li style=\"list-style:none\">
            <input type=\"checkbox\" value=\"";
                // line 126
                if (isset($context["grp"])) { $_grp_ = $context["grp"]; } else { $_grp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_grp_, "getId", array(), "method"), "html", null, true);
                echo "\" id=\"idgroup";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" name=\"idgroup";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "\" />
        ";
                // line 127
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo ". ";
                if (isset($context["grp"])) { $_grp_ = $context["grp"]; } else { $_grp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_grp_, "getNamaGroup", array(), "method"), "html", null, true);
                echo "</li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 129
            echo "      </ul></td>
  </tr>
  ";
        }
        // line 132
        echo "   <input type=\"hidden\" name=\"total\" id=\"total\" value=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" />
  <tr>
    <td valign=\"top\">Keterangan </td>
    <td valign=\"top\">:</td>
    <td><textarea name=\"keterangan\" id=\"keterangan\" cols=\"100\" rows=\"15\"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=\"submit\" name=\"button\" id=\"button\" value=\"Simpan\" />
      <input type=\"reset\" name=\"button3\" id=\"button3\" value=\"Batal\" class=\"button\" onclick=\"jQuery('#id').val(''); jQuery('#groupRow').hide();\" /></td>
  </tr>
</table>
</form>
<script language=\"javascript\">
base_url=jQuery(\"#base_url\").val();
</script>
<script>
\tvar popup = null;
\tfunction open_pop(){
\t\tpopup = window.open('";
        // line 152
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/surat/listsurat','','height=800px,width=1024px');
\t}
\tfunction close_pop(){
\t\tpopup.close()
\t}
\tjQuery(\"#tanggal\").datepicker({ dateFormat: 'yy-mm-dd' });
\tjQuery(\"#tanggal_disposisi\").datepicker({ dateFormat: 'yy-mm-dd' });
\tjQuery(\"#tanggal_penyelesaian\").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
";
    }

    public function getTemplateName()
    {
        return "disposisifrm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 152,  343 => 132,  338 => 129,  318 => 127,  307 => 126,  304 => 125,  300 => 124,  281 => 123,  279 => 122,  273 => 118,  267 => 114,  247 => 112,  236 => 111,  233 => 110,  229 => 109,  210 => 108,  208 => 107,  202 => 103,  199 => 102,  193 => 98,  180 => 95,  177 => 94,  172 => 93,  156 => 81,  140 => 69,  131 => 64,  121 => 58,  112 => 53,  103 => 48,  94 => 43,  84 => 37,  75 => 32,  66 => 27,  57 => 22,  48 => 17,  39 => 12,  29 => 4,  26 => 3,);
    }
}
