<?php

/* IntraForumBundle::layout.html.twig */
class __TwigTemplate_6c2eea2fc37e3b2a06f6e524ccf12ad669bd70743d14b2231b95433b8108f46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if (array_key_exists("categorie", $context)) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
            echo " - 
\t";
        }
        // line 7
        echo "   Forum - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  <h2>Forum</h2>
  
  <ol class=\"breadcrumb\">
\t  <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("intra_forum");
        echo "\">Categories</a></li>
\t  \t";
        // line 16
        if (array_key_exists("categorie", $context)) {
            // line 17
            echo "\t\t  \t";
            if ($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSurCategorie", array(), "method")) {
                // line 18
                echo "\t\t  \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSurCategorie", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSurCategorie", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t  \t";
            }
            // line 20
            echo "
\t\t  \t";
            // line 21
            if (array_key_exists("thread", $context)) {
                // line 22
                echo "\t\t  \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t  \t\t<li class=\"active\">";
                // line 23
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method")) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"), 0, 25) . "...")) : ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"))), "html", null, true);
                echo "</li>
\t\t \t";
            } else {
                // line 25
                echo "\t\t \t\t<li class=\"active\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                echo "</li>
\t\t \t";
            }
            // line 27
            echo "\t \t";
        }
        // line 28
        echo "  </ol>

  <hr>

  ";
        // line 32
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 34
        echo "
";
    }

    // line 32
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  90 => 29,  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 200,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 175,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  353 => 153,  349 => 152,  339 => 145,  335 => 144,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  304 => 128,  300 => 126,  292 => 121,  280 => 116,  276 => 114,  272 => 112,  266 => 110,  259 => 106,  242 => 100,  237 => 98,  233 => 96,  212 => 91,  192 => 78,  188 => 76,  186 => 75,  180 => 71,  126 => 53,  113 => 37,  84 => 28,  281 => 106,  265 => 96,  262 => 95,  239 => 99,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 92,  211 => 74,  207 => 72,  200 => 68,  178 => 62,  174 => 70,  161 => 54,  150 => 49,  170 => 46,  167 => 45,  160 => 64,  127 => 42,  100 => 31,  58 => 15,  81 => 33,  77 => 31,  65 => 19,  34 => 7,  76 => 24,  134 => 47,  124 => 43,  114 => 32,  97 => 32,  70 => 21,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 202,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 181,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 167,  384 => 121,  381 => 120,  379 => 165,  374 => 116,  368 => 112,  365 => 111,  362 => 159,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 136,  312 => 98,  309 => 97,  305 => 95,  298 => 125,  294 => 90,  285 => 89,  283 => 117,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 101,  241 => 77,  229 => 73,  220 => 93,  214 => 75,  177 => 65,  169 => 60,  140 => 49,  132 => 51,  128 => 45,  107 => 32,  61 => 25,  273 => 101,  269 => 111,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 77,  217 => 75,  208 => 89,  204 => 88,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 22,  67 => 18,  63 => 19,  59 => 14,  38 => 8,  94 => 30,  89 => 20,  85 => 25,  75 => 20,  68 => 27,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 21,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 69,  166 => 56,  163 => 55,  158 => 53,  156 => 63,  151 => 39,  142 => 46,  138 => 48,  136 => 56,  121 => 33,  117 => 33,  105 => 34,  91 => 29,  62 => 16,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 22,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 60,  139 => 57,  131 => 34,  123 => 41,  120 => 40,  115 => 38,  111 => 36,  108 => 36,  101 => 28,  98 => 27,  96 => 36,  83 => 28,  74 => 14,  66 => 26,  55 => 15,  52 => 11,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 65,  162 => 47,  154 => 58,  149 => 62,  147 => 38,  144 => 49,  141 => 58,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 33,  99 => 32,  95 => 31,  92 => 25,  86 => 27,  82 => 24,  80 => 22,  73 => 29,  64 => 17,  60 => 14,  57 => 13,  54 => 13,  51 => 12,  48 => 10,  45 => 9,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
