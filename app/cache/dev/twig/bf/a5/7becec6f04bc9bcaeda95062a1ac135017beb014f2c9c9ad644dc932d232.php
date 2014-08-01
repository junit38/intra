<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_bfa57becec6f04bc9bcaeda95062a1ac135017beb014f2c9c9ad644dc932d232 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  256 => 96,  248 => 94,  213 => 78,  197 => 71,  194 => 70,  191 => 77,  185 => 75,  172 => 62,  165 => 60,  148 => 50,  218 => 83,  215 => 82,  202 => 75,  198 => 74,  190 => 69,  181 => 65,  153 => 69,  137 => 47,  110 => 36,  152 => 52,  129 => 42,  104 => 42,  118 => 49,  90 => 27,  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 198,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 172,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  353 => 153,  349 => 152,  339 => 145,  335 => 134,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  304 => 128,  300 => 121,  292 => 121,  280 => 116,  276 => 114,  272 => 112,  266 => 110,  259 => 106,  242 => 100,  237 => 98,  233 => 87,  212 => 91,  192 => 78,  188 => 76,  186 => 68,  180 => 71,  126 => 53,  113 => 48,  84 => 24,  281 => 106,  265 => 96,  262 => 98,  239 => 99,  236 => 84,  232 => 82,  228 => 80,  226 => 84,  223 => 78,  216 => 79,  211 => 74,  207 => 75,  200 => 72,  178 => 64,  174 => 74,  161 => 54,  150 => 55,  170 => 46,  167 => 71,  160 => 57,  127 => 44,  100 => 30,  58 => 14,  81 => 23,  77 => 31,  65 => 17,  34 => 7,  76 => 31,  134 => 54,  124 => 77,  114 => 39,  97 => 30,  70 => 19,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 181,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 165,  374 => 116,  368 => 112,  365 => 111,  362 => 159,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 136,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 117,  278 => 106,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 101,  241 => 90,  229 => 85,  220 => 81,  214 => 75,  177 => 65,  169 => 60,  140 => 49,  132 => 51,  128 => 45,  107 => 32,  61 => 15,  273 => 101,  269 => 111,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 89,  224 => 94,  221 => 77,  219 => 77,  217 => 75,  208 => 89,  204 => 78,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 40,  102 => 41,  71 => 19,  67 => 24,  63 => 16,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 27,  56 => 15,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 25,  78 => 22,  46 => 13,  27 => 3,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 73,  166 => 60,  163 => 55,  158 => 53,  156 => 58,  151 => 39,  142 => 47,  138 => 56,  136 => 43,  121 => 50,  117 => 73,  105 => 34,  91 => 27,  62 => 16,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 22,  72 => 18,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 93,  157 => 56,  145 => 60,  139 => 57,  131 => 34,  123 => 42,  120 => 37,  115 => 38,  111 => 47,  108 => 36,  101 => 31,  98 => 27,  96 => 37,  83 => 33,  74 => 14,  66 => 17,  55 => 16,  52 => 12,  50 => 11,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 48,  141 => 51,  133 => 45,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 37,  109 => 34,  106 => 36,  103 => 33,  99 => 31,  95 => 26,  92 => 25,  86 => 26,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 14,  54 => 13,  51 => 14,  48 => 12,  45 => 10,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
