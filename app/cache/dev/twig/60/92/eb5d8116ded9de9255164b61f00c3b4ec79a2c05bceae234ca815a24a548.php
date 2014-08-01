<?php

/* IntraUserBundle:User:user.html.twig */
class __TwigTemplate_6092eb5d8116ded9de9255164b61f00c3b4ec79a2c05bceae234ca815a24a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraUserBundle::layout.html.twig";
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
        echo twig_escape_filter($this->env, (isset($context["cn"]) ? $context["cn"] : $this->getContext($context, "cn")), "html", null, true);
        echo " - Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h1>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["cn"]) ? $context["cn"] : $this->getContext($context, "cn")), "html", null, true);
        echo "</h1>
  
  <hr>

  ";
        // line 13
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 13
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"picture\">
    <img src=\"https://cdn.42.fr/userprofil/profilview/";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo ".jpg\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["cn"]) ? $context["cn"] : $this->getContext($context, "cn")), "html", null, true);
        echo "\">
  </div>
  <hr>
  <div class=\"infos\">
    <p><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo " </p>
    <span class=\"glyphicon glyphicon-pencil\"><a href=\"mailto:";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</a>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "IntraUserBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 19,  65 => 14,  34 => 4,  76 => 32,  134 => 47,  124 => 34,  114 => 9,  97 => 45,  70 => 29,  53 => 12,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 28,  63 => 17,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 35,  75 => 17,  68 => 15,  56 => 13,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  121 => 33,  117 => 44,  105 => 6,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 10,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 46,  123 => 47,  120 => 40,  115 => 43,  111 => 8,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 13,  52 => 16,  50 => 13,  43 => 8,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 14,  57 => 23,  54 => 22,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}