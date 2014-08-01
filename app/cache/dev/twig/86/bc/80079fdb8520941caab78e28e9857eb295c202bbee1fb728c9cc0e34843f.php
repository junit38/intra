<?php

/* IntraTicketBundle:Ticket:view.html.twig */
class __TwigTemplate_86bc80079fdb8520941caab78e28e9857eb295c202bbee1fb728c9cc0e34843f extends Twig_Template
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
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if (twig_test_empty((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")))) {
            // line 10
            echo "  \t<p>Vous n'avez soumis aucun ticket</p>
  ";
        }
        // line 12
        echo "
  <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("intra_ticket_create");
        echo "\">Soumettre un ticket</a>

  \t<div class=\"table-responsive\">
\t \t<table class=\"table table-hover\">
\t \t\t<tr><th>Titre</th><th>Priorité</th><th>Date de soumission</th><th>Etat</th></tr>

\t\t  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 20
            echo "\t\t    
\t\t  \t";
            // line 21
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En attente")) {
                // line 22
                echo "\t\t  \t\t<tr class=\"warning\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En cours")) {
                // line 24
                echo "\t\t  \t\t<tr class=\"info\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Résolut")) {
                // line 26
                echo "\t\t  \t\t<tr class=\"success\">
\t\t  \t";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "Fermé")) {
                // line 28
                echo "\t\t  \t\t<tr>
\t\t  \t";
            }
            // line 30
            echo "\t\t  \t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_ticket_read", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method")) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"), 0, 25) . "...")) : ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"))), "html", null, true);
            echo "</a></td>
\t\t  \t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getPriorite", array(), "method"), "html", null, true);
            echo "</td>
\t\t  \t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getDatetime", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t  \t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method"), "html", null, true);
            echo "</td>
\t\t  \t</tr>

\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
  \t\t</table>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "IntraTicketBundle:Ticket:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  84 => 28,  281 => 106,  265 => 96,  262 => 95,  239 => 85,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 76,  211 => 74,  207 => 72,  200 => 68,  178 => 62,  174 => 61,  161 => 54,  150 => 49,  170 => 46,  167 => 45,  160 => 45,  127 => 33,  100 => 31,  58 => 14,  81 => 20,  77 => 23,  65 => 17,  34 => 7,  76 => 24,  134 => 47,  124 => 43,  114 => 9,  97 => 32,  70 => 21,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 88,  241 => 77,  229 => 73,  220 => 70,  214 => 75,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 34,  61 => 15,  273 => 101,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 77,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 15,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 30,  78 => 30,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 61,  166 => 56,  163 => 55,  158 => 53,  156 => 52,  151 => 39,  142 => 46,  138 => 48,  136 => 45,  121 => 33,  117 => 39,  105 => 6,  91 => 29,  62 => 13,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 22,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 36,  131 => 34,  123 => 32,  120 => 40,  115 => 30,  111 => 29,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 22,  74 => 14,  66 => 26,  55 => 15,  52 => 15,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 58,  149 => 51,  147 => 38,  144 => 49,  141 => 48,  133 => 55,  130 => 44,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 33,  99 => 32,  95 => 31,  92 => 21,  86 => 27,  82 => 24,  80 => 26,  73 => 21,  64 => 14,  60 => 14,  57 => 13,  54 => 13,  51 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
