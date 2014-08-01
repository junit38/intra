<?php

/* IntraAdminBundle::layout.html.twig */
class __TwigTemplate_af0f8f16eb9a19616a24c144a45f1cba82f992b33e9e093c0ef05c4417a2d929 extends Twig_Template
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
        echo "   Administration - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Administration</h2>
  
  <hr>

  ";
        // line 13
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 15
        echo "
";
    }

    // line 13
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  52 => 15,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  453 => 202,  449 => 200,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  413 => 181,  401 => 175,  397 => 174,  387 => 167,  383 => 166,  379 => 165,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  362 => 159,  353 => 153,  349 => 152,  339 => 145,  335 => 144,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  314 => 136,  304 => 128,  300 => 126,  298 => 125,  292 => 121,  283 => 117,  280 => 116,  276 => 114,  272 => 112,  269 => 111,  266 => 110,  259 => 106,  254 => 105,  247 => 101,  242 => 100,  239 => 99,  237 => 98,  233 => 96,  224 => 94,  220 => 93,  216 => 92,  212 => 91,  208 => 89,  204 => 88,  192 => 78,  188 => 76,  186 => 75,  180 => 71,  174 => 70,  171 => 69,  164 => 65,  160 => 64,  156 => 63,  149 => 62,  145 => 60,  141 => 58,  139 => 57,  136 => 56,  133 => 55,  130 => 54,  126 => 53,  117 => 47,  109 => 41,  103 => 40,  96 => 36,  92 => 35,  88 => 34,  81 => 33,  77 => 31,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  61 => 25,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
