<?php

/* IntraUserBundle:Security:login.html.twig */
class __TwigTemplate_0c95c1e38bbf8443011ad7cc2bd27812085a11c6e11badc2f514cc5757fcc428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 7
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
    <label for=\"username\" class=\"col-sm-2 control-label\">Login :</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
      </div>
    </div>  
    <div class=\"form-group\">
    <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe :</label>
      <div class=\"col-sm-10\">
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
      </div>
    </div>   
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
        <button type=\"submit\" class=\"btn btn-default\" value=\"Connexion\">Sign in</button>
      </div>
    </div>

  </form>

";
    }

    public function getTemplateName()
    {
        return "IntraUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  76 => 32,  134 => 47,  124 => 34,  114 => 9,  97 => 45,  70 => 29,  53 => 12,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 28,  63 => 17,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 35,  75 => 17,  68 => 15,  56 => 13,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  121 => 33,  117 => 44,  105 => 6,  91 => 27,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 10,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 46,  123 => 47,  120 => 40,  115 => 43,  111 => 8,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 15,  52 => 15,  50 => 13,  43 => 15,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 14,  57 => 23,  54 => 22,  51 => 13,  48 => 13,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 10,);
    }
}
