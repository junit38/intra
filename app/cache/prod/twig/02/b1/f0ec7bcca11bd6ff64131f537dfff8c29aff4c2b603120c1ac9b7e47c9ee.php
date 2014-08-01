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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getTitre", array(), "method"), "html", null, true);
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
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "En attente")) {
                // line 15
                echo "\t\t  \t\t<div class=\"panel panel-warning\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "En cours")) {
                // line 17
                echo "\t\t  \t\t<div class=\"panel panel-info\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "Résolut")) {
                // line 19
                echo "\t\t  \t\t<div class=\"panel panel-success\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "Fermé")) {
                // line 21
                echo "\t\t  \t\t<div class=\"panel panel-default\">
\t\t\t";
            }
            // line 23
            echo "\t\t\t  <div class=\"panel-heading\">
\t\t\t    <h3 class=\"panel-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getTitre", array(), "method"), "html", null, true);
            echo "</h3>
\t\t\t  </div>
\t\t\t  <div class=\"panel-body\">
\t\t\t    ";
            // line 27
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getContenu", array(), "method"), "html", null, true));
            echo "
\t\t\t    <br/>
\t\t\t    <small>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
            echo "</small>
\t\t\t  </div>
\t\t\t  <div class=\"panel-footer\">
\t\t\t  \t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getPriorite", array(), "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method"), "html", null, true);
            echo "
\t\t\t  \t";
            // line 33
            if ((!(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getAdmin", array(), "method")))) {
                echo " 
\t\t\t  \t\t- Attribué: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getAdmin", array(), "method"), "html", null, true);
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
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "En attente")) {
                echo " selected=\"true\"";
            }
            echo ">En attente</option>
\t\t\t\t\t  <option ";
            // line 44
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "En cours")) {
                echo " selected=\"true\"";
            }
            echo ">En cours</option>
\t\t\t\t\t  <option ";
            // line 45
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "Résolut")) {
                echo " selected=\"true\"";
            }
            echo ">Résolut</option>
\t\t\t\t\t  <option ";
            // line 46
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getEtat", array(), "method") == "Fermé")) {
                echo " selected=\"true\"";
            }
            echo ">Fermé</option>
\t\t\t\t\t</select>
\t\t\t\t  </div>
\t\t\t\t  <input type=\"hidden\" name=\"_id\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getId", array(), "method"), "html", null, true);
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 62
                        echo "\t\t\t\t\t\t\t<option ";
                        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getAdmin", array(), "method") == (isset($context["admin"]) ? $context["admin"] : null))) {
                            echo " selected=\"true\" ";
                        }
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getId", array(), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "username"), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getId", array(), "method"), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable((isset($context["replys"]) ? $context["replys"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 78
                    echo "
\t\t\t\t";
                    // line 79
                    if (($this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "getAuteur", array(), "method") == $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getAuteur", array(), "method"))) {
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "getAuteur", array(), "method"), "html", null, true);
                    echo "</strong> - <small>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
                    echo "</small>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t    ";
                    // line 88
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "getContenu", array(), "method"), "html", null, true));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "getId", array(), "method"), "html", null, true);
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
        return array (  281 => 106,  273 => 101,  265 => 96,  262 => 95,  258 => 93,  247 => 88,  239 => 85,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  219 => 77,  216 => 76,  214 => 75,  211 => 74,  207 => 72,  200 => 68,  196 => 66,  187 => 63,  178 => 62,  174 => 61,  166 => 56,  163 => 55,  161 => 54,  158 => 53,  156 => 52,  150 => 49,  142 => 46,  136 => 45,  130 => 44,  124 => 43,  117 => 39,  112 => 36,  107 => 34,  103 => 33,  97 => 32,  91 => 29,  86 => 27,  80 => 24,  77 => 23,  73 => 21,  69 => 19,  65 => 17,  61 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
