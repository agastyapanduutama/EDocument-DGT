<?php

/* contoh.html */
class __TwigTemplate_4650766ad038f99163b4609f738c4be7 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/style.min.css\">

Based on <a href=\"https://www.jstree.com/\">jsTree</a>.
<hr />
<form action=\"#\" method=\"post\" >
    <div id=\"jstree\">
    </div>
    <input type=\"\" name=\"jsfields\" id=\"myText\" value=\"\" />

    <!-- <a href=\"\" onclick=\"UwU()\">aws</a> -->

    <button type=\"submit\" onclick=\"UwU()\">uwu</button>
</form>
<p>Selected items:</p>
<ul id=\"keluarna\">
</ul>

<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/tree/jstree.js\"></script>

<script>
    \$('#jstree').jstree({
        'plugins': ['checkbox', 'wholerow'],
        'core': {
            'data': [
                
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group") > 0)) {
                // line 28
                echo "                
                ";
                // line 29
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "level") == 1)) {
                    // line 30
                    echo "                    {
                        'id': ' ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                    echo " ',
                        'parent': '#',
                        'text': ' ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "level"), "html", null, true);
                    echo " '
                    },
                ";
                }
                // line 36
                echo "
                ";
                // line 37
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "level") == 2)) {
                    // line 38
                    echo "                    {
                        'id': ' ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id_group"), "html", null, true);
                    echo " ',
                        'parent': ' ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "parent"), "html", null, true);
                    echo " ',
                        'text': ' ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "nama_group"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "level"), "html", null, true);
                    echo " '
                    },
                ";
                }
                // line 44
                echo "                
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "                ],
            'animation': false,
            //'expand_selected_onload': true,
            'themes': {
                'icons': false,
            }
        },
        'search': {
            'show_only_matches': true,
            'show_only_matches_children': true
        }
    })


    \$('#jstree').on('changed.jstree', function (e, data) {
        var objects = data.instance.get_selected(true)
        var leaves = \$.grep(objects, function (o) {
            return data.instance.is_leaf(o)
        })
        var list = \$('#keluarna')
        var listna = [];
        
        list.empty()
        \$.each(leaves, function (i, o) {
            \$('<li/>').text(o.text).appendTo(list)
        })

        var uwu = \$(\"#keluarna\").jstree(\"get_selected\").text();
       
        var replaced = uwu.split('  ').join(',');

        document.getElementById(\"myText\").value = replaced;
        console.log(replaced);
    })


</script>
";
    }

    public function getTemplateName()
    {
        return "contoh.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  105 => 44,  97 => 41,  93 => 40,  89 => 39,  86 => 38,  84 => 37,  81 => 36,  71 => 33,  66 => 31,  63 => 30,  61 => 29,  58 => 28,  53 => 27,  42 => 19,  38 => 18,  17 => 1,);
    }
}
