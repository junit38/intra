<?php

/* IntraForumBundle:Forum:voir.html.twig */
class __TwigTemplate_5d5935a40beb5efc4f59815cb61f8270d845240bbd92e804295f9b04fa89c0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraForumBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  \t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        if (array_key_exists("categorie", $context)) {
            // line 10
            echo "
\t\t";
            // line 11
            if (array_key_exists("sous_categories", $context)) {
                // line 12
                echo "\t\t\t<h4>Liste des sous-catégories</h4>
\t\t\t<div class=\"list-group\">
\t\t\t";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sous_categories"]) ? $context["sous_categories"] : $this->getContext($context, "sous_categories")));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 15
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t</div>
\t\t";
            }
            // line 19
            echo "
\t\t<div class=\"panel panel-default\">
\t\t  <div class=\"panel-heading\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
            echo "</div>
\t\t  <div class=\"panel-body\">
\t\t    <span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_formulaire_thread", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"))), "html", null, true);
            echo "\"> Ajouter un Thread</a>
\t\t  </div>
\t\t</div>

\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 28
                echo "
\t\t<div class=\"list-group\">
\t\t  <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_thread", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"list-group-item\">
\t\t    <h4 class=\"list-group-item-heading\">
\t\t    ";
                // line 32
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"), 0, 50) . "...")) : ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"))), "html", null, true);
                echo "

\t\t    ";
                // line 34
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 35
                    echo "\t\t    \t<form class=\"pull-right\" action=\"";
                    echo $this->env->getExtension('routing')->getPath("intra_forum_remove_thread");
                    echo "\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id_categorie\" name =\"_id_categorie\" value=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t";
                }
                // line 43
                echo "
\t\t    </h4>
\t\t    <p class=\"list-group-item-text\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getAuteur", array(), "method"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getDateActivite", array(), "method"), "Y-m-d h:m"), "html", null, true);
                echo "
\t\t    </p>
\t\t  </a>
\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
\t\t";
            // line 52
            if (twig_test_empty((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))) {
                // line 53
                echo "\t\t<p>Aucun thread pour cette catégorie</p>
\t\t";
            }
            // line 55
            echo "
\t";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle:Forum:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  129 => 43,  104 => 32,  118 => 39,  90 => 29,  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 200,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 175,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  353 => 153,  349 => 152,  339 => 145,  335 => 144,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  304 => 128,  300 => 126,  292 => 121,  280 => 116,  276 => 114,  272 => 112,  266 => 110,  259 => 106,  242 => 100,  237 => 98,  233 => 96,  212 => 91,  192 => 78,  188 => 76,  186 => 75,  180 => 71,  126 => 53,  113 => 37,  84 => 23,  281 => 106,  265 => 96,  262 => 95,  239 => 99,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 92,  211 => 74,  207 => 72,  200 => 68,  178 => 62,  174 => 70,  161 => 54,  150 => 52,  170 => 46,  167 => 45,  160 => 57,  127 => 42,  100 => 31,  58 => 15,  81 => 33,  77 => 31,  65 => 19,  34 => 7,  76 => 24,  134 => 47,  124 => 43,  114 => 32,  97 => 32,  70 => 21,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 202,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 181,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 167,  384 => 121,  381 => 120,  379 => 165,  374 => 116,  368 => 112,  365 => 111,  362 => 159,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 136,  312 => 98,  309 => 97,  305 => 95,  298 => 125,  294 => 90,  285 => 89,  283 => 117,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 101,  241 => 77,  229 => 73,  220 => 93,  214 => 75,  177 => 65,  169 => 60,  140 => 49,  132 => 51,  128 => 45,  107 => 32,  61 => 25,  273 => 101,  269 => 111,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 77,  217 => 75,  208 => 89,  204 => 88,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 17,  67 => 18,  63 => 19,  59 => 14,  38 => 8,  94 => 30,  89 => 20,  85 => 22,  75 => 19,  68 => 27,  56 => 14,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 20,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 69,  166 => 56,  163 => 55,  158 => 53,  156 => 55,  151 => 39,  142 => 46,  138 => 48,  136 => 56,  121 => 33,  117 => 33,  105 => 34,  91 => 27,  62 => 16,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 18,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 60,  139 => 57,  131 => 34,  123 => 41,  120 => 37,  115 => 38,  111 => 35,  108 => 36,  101 => 28,  98 => 27,  96 => 24,  83 => 28,  74 => 14,  66 => 17,  55 => 14,  52 => 12,  50 => 11,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 65,  162 => 47,  154 => 58,  149 => 62,  147 => 51,  144 => 49,  141 => 58,  133 => 45,  130 => 54,  125 => 44,  122 => 43,  116 => 36,  112 => 36,  109 => 34,  106 => 36,  103 => 33,  99 => 30,  95 => 28,  92 => 25,  86 => 27,  82 => 24,  80 => 21,  73 => 29,  64 => 17,  60 => 15,  57 => 13,  54 => 13,  51 => 12,  48 => 12,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
