<?php

/* IntraAnnuaireBundle::layout.html.twig */
class __TwigTemplate_21592ee3373d84d63f2bddc43572bb92119ef89d5e963610fd93f376e7eca98f extends Twig_Template
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
        echo "   Annuaire - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Annuaire</h2>
  
  <hr>

  <div class=\"btn-group\">
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "a"));
        echo "\">a</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "b"));
        echo "\">b</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "c"));
        echo "\">c</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "d"));
        echo "\">d</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "e"));
        echo "\">e</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "f"));
        echo "\">f</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "g"));
        echo "\">g</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "h"));
        echo "\">h</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "i"));
        echo "\">i</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "j"));
        echo "\">j</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "k"));
        echo "\">k</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "l"));
        echo "\">l</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "m"));
        echo "\">m</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "n"));
        echo "\">n</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "o"));
        echo "\">o</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "p"));
        echo "\">p</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "q"));
        echo "\">q</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "r"));
        echo "\">r</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "s"));
        echo "\">s</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "t"));
        echo "\">t</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "u"));
        echo "\">u</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "v"));
        echo "\">v</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "w"));
        echo "\">w</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "x"));
        echo "\">x</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "y"));
        echo "\">y</a></button>
\t  <button type=\"button\" class=\"btn btn-default\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("intra_annuaire_search", array("letter" => "z"));
        echo "\">z</a></button>

  </div>

  <hr>

  ";
        // line 45
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 45
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 46
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraAnnuaireBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  167 => 45,  160 => 45,  127 => 33,  100 => 31,  58 => 14,  81 => 20,  77 => 19,  65 => 16,  34 => 7,  76 => 32,  134 => 47,  124 => 34,  114 => 9,  97 => 45,  70 => 29,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 28,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 15,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 39,  142 => 59,  138 => 48,  136 => 56,  121 => 33,  117 => 44,  105 => 6,  91 => 24,  62 => 13,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 28,  69 => 17,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 36,  131 => 34,  123 => 32,  120 => 40,  115 => 30,  111 => 29,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 22,  74 => 14,  66 => 26,  55 => 15,  52 => 16,  50 => 10,  43 => 8,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 58,  149 => 51,  147 => 38,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 27,  99 => 26,  95 => 25,  92 => 21,  86 => 28,  82 => 24,  80 => 19,  73 => 19,  64 => 14,  60 => 14,  57 => 23,  54 => 22,  51 => 14,  48 => 12,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
