<?php

/* IntraAnnuaireBundle:Annuaire:annuaire.html.twig */
class __TwigTemplate_6b4078a8e81b648c205b2200d0ba07e619fafa9c883d198039b59fbd61e83bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraAnnuaireBundle::layout.html.twig";
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 10
            echo "
  <div class=\"col-sm-6 col-md-2\">
  \t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"))), "html", null, true);
            echo "\">
    <div class=\"thumbnail\">
      <img src=\"https://cdn.42.fr/userprofil/profilview/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"), "html", null, true);
            echo ".jpg\" class=\"img-responsive img-thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
            echo "\">
      <div class=\"caption\">
        <p align=\"center\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
            echo "</p>
      \t<p align=\"center\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"), "html", null, true);
            echo "</p>
      </div>
    </div>
    </a>
  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        // line 25
        if (array_key_exists("users2", $context)) {
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users2"]) ? $context["users2"] : $this->getContext($context, "users2")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 27
                echo "
  <div class=\"col-sm-6 col-md-2\">
    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"))), "html", null, true);
                echo "\">
    <div class=\"thumbnail\">
      <img src=\"https://cdn.42.fr/userprofil/profilview/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"), "html", null, true);
                echo ".jpg\" class=\"img-responsive img-thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
                echo "\">
      <div class=\"caption\">
        <p align=\"center\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method"), "html", null, true);
                echo "</p>
        <p align=\"center\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getLogin", array(), "method"), "html", null, true);
                echo "</p>
      </div>
    </div>
    </a>
  </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "IntraAnnuaireBundle:Annuaire:annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  58 => 14,  81 => 20,  77 => 19,  65 => 16,  34 => 7,  76 => 32,  134 => 47,  124 => 34,  114 => 9,  97 => 45,  70 => 29,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 33,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 28,  63 => 17,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 15,  56 => 13,  87 => 26,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  121 => 33,  117 => 44,  105 => 6,  91 => 27,  62 => 13,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 28,  69 => 17,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 46,  123 => 47,  120 => 40,  115 => 43,  111 => 34,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 13,  52 => 16,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 50,  95 => 29,  92 => 21,  86 => 28,  82 => 24,  80 => 19,  73 => 19,  64 => 14,  60 => 14,  57 => 23,  54 => 22,  51 => 13,  48 => 12,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
