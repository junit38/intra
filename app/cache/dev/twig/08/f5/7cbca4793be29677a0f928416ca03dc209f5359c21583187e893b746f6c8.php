<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_08f57cbca4793be29677a0f928416ca03dc209f5359c21583187e893b746f6c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  255 => 101,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  403 => 136,  391 => 133,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  350 => 327,  347 => 119,  333 => 115,  328 => 139,  324 => 112,  313 => 110,  308 => 287,  274 => 110,  234 => 90,  210 => 77,  155 => 47,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  671 => 465,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  293 => 120,  271 => 190,  251 => 182,  249 => 92,  462 => 202,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  394 => 134,  380 => 158,  373 => 156,  361 => 152,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  256 => 96,  248 => 97,  213 => 78,  197 => 69,  194 => 68,  191 => 67,  185 => 75,  172 => 57,  165 => 83,  148 => 50,  218 => 83,  215 => 82,  202 => 94,  198 => 74,  190 => 69,  181 => 65,  153 => 77,  137 => 47,  110 => 38,  152 => 46,  129 => 42,  104 => 31,  118 => 49,  90 => 27,  680 => 330,  676 => 467,  668 => 464,  660 => 464,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 444,  626 => 443,  621 => 293,  609 => 287,  606 => 449,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 427,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 198,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 135,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 339,  353 => 328,  349 => 152,  339 => 145,  335 => 134,  330 => 142,  326 => 138,  321 => 135,  318 => 137,  304 => 128,  300 => 121,  292 => 121,  280 => 194,  276 => 111,  272 => 112,  266 => 110,  259 => 103,  242 => 100,  237 => 91,  233 => 87,  212 => 91,  192 => 78,  188 => 90,  186 => 72,  180 => 70,  126 => 53,  113 => 40,  84 => 25,  281 => 114,  265 => 105,  262 => 93,  239 => 99,  236 => 84,  232 => 88,  228 => 80,  226 => 84,  223 => 78,  216 => 79,  211 => 74,  207 => 76,  200 => 72,  178 => 59,  174 => 74,  161 => 58,  150 => 55,  170 => 84,  167 => 71,  160 => 57,  127 => 35,  100 => 36,  58 => 15,  81 => 24,  77 => 25,  65 => 17,  34 => 4,  76 => 28,  134 => 39,  124 => 77,  114 => 36,  97 => 30,  70 => 19,  53 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 165,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 101,  314 => 136,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 101,  241 => 93,  229 => 87,  220 => 81,  214 => 75,  177 => 69,  169 => 60,  140 => 49,  132 => 51,  128 => 42,  107 => 37,  61 => 23,  273 => 101,  269 => 107,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 94,  221 => 80,  219 => 77,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 37,  135 => 46,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 13,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 39,  142 => 47,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 57,  131 => 34,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 63,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 33,  99 => 23,  95 => 39,  92 => 31,  86 => 26,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
