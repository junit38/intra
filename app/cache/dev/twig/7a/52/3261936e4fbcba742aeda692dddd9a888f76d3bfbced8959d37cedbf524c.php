<?php

/* IntraMainBundle:Accueil:menu.html.twig */
class __TwigTemplate_7a523261936e4fbcba742aeda692dddd9a888f76d3bfbced8959d37cedbf524c extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("intra_main_homepage");
        echo "\">Intra </a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

      <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 17
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("login" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
            echo "\">Profile</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a></li>
          </ul>
        </li>
      ";
        } else {
            // line 26
            echo "      <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
      ";
        }
        // line 28
        echo "        
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-off\"></span></a></li>
      </ul>

      <form class=\"navbar-form navbar-right\" role=\"search\" method=\"GET\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("user_search");
        echo "\" onsubmit=\"return checkSearch(this)\">
        <div class=\"form-group\">
          <input type=\"text\" name=\"_q\" id = \"_q\" class=\"form-control\" placeholder=\"Recherche\" data-container=\"body\" data-toggle=\"popover\" data-placement=\"bottom\" data-content=\"La recherche nescessite 3 caractères minimum\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\"></span></button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "IntraMainBundle:Accueil:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  134 => 47,  124 => 34,  114 => 9,  97 => 45,  70 => 29,  53 => 22,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 28,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 35,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  27 => 4,  44 => 18,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  121 => 33,  117 => 44,  105 => 6,  91 => 27,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 9,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 46,  123 => 47,  120 => 40,  115 => 43,  111 => 8,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 15,  52 => 15,  50 => 13,  43 => 15,  41 => 17,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 50,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 14,  57 => 23,  54 => 22,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 16,  36 => 5,  33 => 4,  30 => 10,);
    }
}
