<?php

/* IntraTicketBundle:Ticket:read.html.twig */
class __TwigTemplate_02b1f0ec7bcca11bd6ff64131f537dfff8c29aff4c2b603120c1ac9b7e47c9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraTicketBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraTicketBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (array_key_exists("ticket", $context)) {
            // line 5
            echo "  \t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"), "html", null, true);
            echo " - 
  ";
        }
        // line 7
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 11
        echo "
\t\t  ";
        // line 12
        if (array_key_exists("ticket", $context)) {
            // line 13
            echo "
\t\t  \t";
            // line 14
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En attente")) {
                // line 15
                echo "\t\t  \t\t<div class=\"panel panel-warning\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En cours")) {
                // line 17
                echo "\t\t  \t\t<div class=\"panel panel-info\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Résolut")) {
                // line 19
                echo "\t\t  \t\t<div class=\"panel panel-success\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Fermé")) {
                // line 21
                echo "\t\t  \t\t<div class=\"panel panel-default\">
\t\t\t";
            }
            // line 23
            echo "\t\t\t  <div class=\"panel-heading\">
\t\t\t    <h3 class=\"panel-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"), "html", null, true);
            echo "</h3>
\t\t\t  </div>
\t\t\t  <div class=\"panel-body\">
\t\t\t    ";
            // line 27
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getContenu", array(), "method"), "html", null, true));
            echo "
\t\t\t    <br/>
\t\t\t    <small>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
            echo "</small>
\t\t\t  </div>
\t\t\t  <div class=\"panel-footer\">
\t\t\t  \t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getPriorite", array(), "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method"), "html", null, true);
            echo "
\t\t\t  \t";
            // line 33
            if ((!(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method")))) {
                echo " 
\t\t\t  \t\t- Attribué: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method"), "html", null, true);
                echo "
\t\t\t  \t";
            }
            // line 36
            echo "\t\t\t  </div>
\t\t\t</div>

\t\t\t\t<form role=\"form\" action=";
            // line 39
            echo $this->env->getExtension('routing')->getPath("intra_ticket_changestate");
            echo " method=\"POST\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  \t<label for=\"etat\">Etat</label>
\t\t\t\t    <select class=\"form-control\" id=\"etat\" name=\"_etat\" onchange=\"this.form.submit()\">
\t\t\t\t\t  <option ";
            // line 43
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En attente")) {
                echo " selected=\"true\"";
            }
            echo ">En attente</option>
\t\t\t\t\t  <option ";
            // line 44
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En cours")) {
                echo " selected=\"true\"";
            }
            echo ">En cours</option>
\t\t\t\t\t  <option ";
            // line 45
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Résolut")) {
                echo " selected=\"true\"";
            }
            echo ">Résolut</option>
\t\t\t\t\t  <option ";
            // line 46
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Fermé")) {
                echo " selected=\"true\"";
            }
            echo ">Fermé</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t  <input type=\"hidden\" name=\"_id\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t</form>

\t\t\t";
            // line 52
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "
\t\t\t  ";
                // line 54
                if (array_key_exists("admins", $context)) {
                    // line 55
                    echo "
\t\t\t\t<form role=\"form\" action=";
                    // line 56
                    echo $this->env->getExtension('routing')->getPath("intra_ticket_changeadmin");
                    echo " method=\"POST\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  \t<label for=\"admin\">Attribuer à</label>
\t\t\t\t    <select class=\"form-control\" id=\"admin\" name=\"_admin_id\" onchange=\"this.form.submit()\">
\t\t\t\t    \t<option value=\"0\">Aucun</option>
\t\t\t\t\t  \t";
                    // line 61
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 62
                        echo "\t\t\t\t\t\t\t<option ";
                        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method") == (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))) {
                            echo " selected=\"true\" ";
                        }
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getId", array(), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "username"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t</option>
\t\t\t\t\t  \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t  <input type=\"hidden\" name=\"_id\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t</form>

\t\t\t  ";
                }
                // line 72
                echo "
\t\t\t";
            }
            // line 74
            echo "
\t\t\t";
            // line 75
            if (array_key_exists("replys", $context)) {
                // line 76
                echo "
\t\t\t";
                // line 77
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["replys"]) ? $context["replys"] : $this->getContext($context, "replys")));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 78
                    echo "
\t\t\t\t";
                    // line 79
                    if (($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "getAuteur", array(), "method") == $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAuteur", array(), "method"))) {
                        // line 80
                        echo "\t\t  \t\t\t<div class=\"panel panel-default\">
\t\t  \t\t";
                    } else {
                        // line 82
                        echo "\t\t  \t\t\t<div class=\"panel panel-info\">
\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t    <strong>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "getAuteur", array(), "method"), "html", null, true);
                    echo "</strong> - <small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
                    echo "</small>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t    ";
                    // line 88
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "getContenu", array(), "method"), "html", null, true));
                    echo "
\t\t\t\t  </div>
\t\t\t\t</div>

\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
\t\t\t";
            }
            // line 95
            echo "
\t\t\t<form role=\"form\" action=";
            // line 96
            echo $this->env->getExtension('routing')->getPath("intra_ticket_reply");
            echo " method=\"POST\" >
\t\t\t  <div class=\"form-group\">
\t\t\t  \t<label for=\"contenu\">Message</label>
\t\t\t  \t<textarea class=\"form-control\" rows=\"6\" id=\"contenu\" name=\"_content\"></textarea>
\t\t\t  </div>
\t\t\t  <input type=\"hidden\" name=\"_id\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t  <button type=\"submit\" class=\"btn btn-default\">Repondre</button>
\t\t\t</form>

\t\t  ";
        }
        // line 106
        echo "
  \t\t</table>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "IntraTicketBundle:Ticket:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 106,  265 => 96,  262 => 95,  239 => 85,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 76,  211 => 74,  207 => 72,  200 => 68,  178 => 62,  174 => 61,  161 => 54,  150 => 49,  170 => 46,  167 => 45,  160 => 45,  127 => 33,  100 => 31,  58 => 14,  81 => 20,  77 => 23,  65 => 17,  34 => 7,  76 => 32,  134 => 47,  124 => 43,  114 => 9,  97 => 32,  70 => 29,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 88,  241 => 77,  229 => 73,  220 => 70,  214 => 75,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 34,  61 => 15,  273 => 101,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 77,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 19,  67 => 18,  63 => 17,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 15,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 61,  166 => 56,  163 => 55,  158 => 53,  156 => 52,  151 => 39,  142 => 46,  138 => 48,  136 => 45,  121 => 33,  117 => 39,  105 => 6,  91 => 29,  62 => 13,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 28,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 36,  131 => 34,  123 => 32,  120 => 40,  115 => 30,  111 => 29,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 22,  74 => 14,  66 => 26,  55 => 15,  52 => 15,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 58,  149 => 51,  147 => 38,  144 => 49,  141 => 48,  133 => 55,  130 => 44,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 33,  99 => 26,  95 => 25,  92 => 21,  86 => 27,  82 => 24,  80 => 24,  73 => 21,  64 => 14,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
