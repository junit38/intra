<?php

/* IntraForumBundle:Thread:voir.html.twig */
class __TwigTemplate_cb444d87293c506f61b38b188cb7ec0e6c4011fb618a5c8b93be40fb6a2d4890 extends Twig_Template
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
        echo "  ";
        if (array_key_exists("thread", $context)) {
            // line 5
            echo "  \t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"), "html", null, true);
            echo " - 
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 12
        echo "
\t";
        // line 13
        if (array_key_exists("thread", $context)) {
            // line 14
            echo "
\t\t<div class=\"panel panel-info\">
\t\t  <div class=\"panel-heading\"><h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getSujet", array(), "method"), "html", null, true);
            echo "</h4></div>
\t\t  <div class=\"panel-body\">
\t\t    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getAuteur", array(), "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getDateActivite", array(), "method"), "Y-m-d h:m"), "html", null, true);
            echo "
\t\t  </div>
\t\t</div>

\t\t";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 23
                echo "
\t\t<div class=\"list-group\">
\t\t\t<div class=\"list-group-item\">
\t\t    <p class=\"list-group-item-heading\">";
                // line 26
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getContenu", array(), "method"), "html", null, true));
                echo "

\t\t    ";
                // line 28
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 29
                    echo "\t\t    \t<form class=\"pull-right\" action=\"";
                    echo $this->env->getExtension('routing')->getPath("intra_forum_remove_commentaire");
                    echo "\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id_thread\" name =\"_id_thread\" value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t";
                }
                // line 37
                echo "
\t\t    </p>
\t\t    <small class=\"list-group-item-text\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getAuteur", array(), "method"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getDateCreation", array(), "method"), "Y-m-d h:m"), "html", null, true);
                echo "
\t\t    </small>
\t\t    \t<button class=\"btn btn-default btn-xs\" data-toggle=\"collapse\" data-target=\"#";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getId", array(), "method"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-plus\">Commenter</span></button>
\t\t    </div>

\t\t    ";
                // line 44
                if ((!twig_test_empty($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getCommentaires", array(), "method")))) {
                    // line 45
                    echo "\t\t    \t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getCommentaires", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                        // line 46
                        echo "\t\t    \t\t<div class=\"list-group-item\">
\t\t\t\t    <p class=\"list-group-item-heading\">";
                        // line 47
                        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getContenu", array(), "method"), "html", null, true));
                        echo "

\t\t\t\t    ";
                        // line 49
                        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                            // line 50
                            echo "\t\t\t\t    \t<form class=\"pull-right\" action=\"";
                            echo $this->env->getExtension('routing')->getPath("intra_forum_remove_commentaire");
                            echo "\" method=\"POST\">
\t\t\t\t    \t\t<input type=\"hidden\" id=\"_id_thread\" name =\"_id_thread\" value=\"";
                            // line 51
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                            // line 52
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getId", array(), "method"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
                        }
                        // line 58
                        echo "
\t\t\t\t    </p>
\t\t\t\t    <small class=\"list-group-item-text\">";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getAuteur", array(), "method"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getDateCreation", array(), "method"), "Y-m-d h:m"), "html", null, true);
                        echo "
\t\t\t\t    </small>
\t\t\t\t    </div>
\t\t    \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t    ";
                }
                // line 65
                echo "
\t\t</div>

\t\t\t<div id=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getId", array(), "method"), "html", null, true);
                echo "\" class=\"collapse\">
\t\t\t    <form role=\"form\" action=";
                // line 69
                echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_commentaire_commentaire");
                echo " method=\"POST\" 
\t\t\t\tonsubmit=\"return (this._content.value.length > 0)\">
\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t  \t<textarea class=\"form-control\" rows=\"4\" id=\"_content\" name=\"_content\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"_id_commentaire\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"_id_thread\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Commenter</button>
\t\t\t\t</form>
\t\t\t\t<hr>
\t\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t<form role=\"form\" action=";
            // line 83
            echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_commentaire");
            echo " method=\"POST\" 
\t\tonsubmit=\"return (this._content.value.length > 0)\">
\t\t\t <div class=\"form-group\">
\t\t\t  \t<label for=\"_content\">Message</label>
\t\t\t  \t<textarea class=\"form-control\" rows=\"4\" id=\"_content\" name=\"_content\"></textarea>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_id_thread\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Répondre</button>
\t\t</form>

\t";
        }
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle:Thread:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 83,  215 => 82,  202 => 75,  198 => 74,  190 => 69,  181 => 65,  153 => 52,  137 => 47,  110 => 37,  152 => 53,  129 => 45,  104 => 32,  118 => 39,  90 => 28,  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 200,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 175,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  353 => 153,  349 => 152,  339 => 145,  335 => 144,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  304 => 128,  300 => 126,  292 => 121,  280 => 116,  276 => 114,  272 => 112,  266 => 110,  259 => 106,  242 => 100,  237 => 98,  233 => 96,  212 => 91,  192 => 78,  188 => 76,  186 => 68,  180 => 71,  126 => 53,  113 => 37,  84 => 23,  281 => 106,  265 => 96,  262 => 95,  239 => 99,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 92,  211 => 74,  207 => 72,  200 => 68,  178 => 64,  174 => 70,  161 => 54,  150 => 52,  170 => 46,  167 => 45,  160 => 57,  127 => 44,  100 => 31,  58 => 14,  81 => 33,  77 => 31,  65 => 19,  34 => 7,  76 => 22,  134 => 46,  124 => 43,  114 => 39,  97 => 30,  70 => 21,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 202,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 181,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 167,  384 => 121,  381 => 120,  379 => 165,  374 => 116,  368 => 112,  365 => 111,  362 => 159,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 136,  312 => 98,  309 => 97,  305 => 95,  298 => 125,  294 => 90,  285 => 89,  283 => 117,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 101,  241 => 77,  229 => 73,  220 => 93,  214 => 75,  177 => 65,  169 => 60,  140 => 49,  132 => 51,  128 => 45,  107 => 32,  61 => 25,  273 => 101,  269 => 111,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 89,  224 => 94,  221 => 77,  219 => 77,  217 => 75,  208 => 89,  204 => 88,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 17,  67 => 18,  63 => 19,  59 => 14,  38 => 8,  94 => 30,  89 => 20,  85 => 26,  75 => 19,  68 => 27,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 20,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 69,  166 => 60,  163 => 55,  158 => 53,  156 => 55,  151 => 39,  142 => 49,  138 => 48,  136 => 56,  121 => 41,  117 => 33,  105 => 34,  91 => 27,  62 => 16,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 18,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 60,  139 => 57,  131 => 34,  123 => 41,  120 => 37,  115 => 38,  111 => 35,  108 => 36,  101 => 31,  98 => 27,  96 => 24,  83 => 28,  74 => 14,  66 => 17,  55 => 14,  52 => 12,  50 => 11,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 65,  162 => 58,  154 => 58,  149 => 51,  147 => 51,  144 => 50,  141 => 58,  133 => 45,  130 => 54,  125 => 44,  122 => 43,  116 => 36,  112 => 36,  109 => 34,  106 => 36,  103 => 33,  99 => 30,  95 => 28,  92 => 29,  86 => 27,  82 => 24,  80 => 23,  73 => 29,  64 => 17,  60 => 15,  57 => 13,  54 => 13,  51 => 12,  48 => 12,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
