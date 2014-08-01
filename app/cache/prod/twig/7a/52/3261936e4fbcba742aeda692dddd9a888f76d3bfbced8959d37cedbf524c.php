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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_profile", array("login" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"))), "html", null, true);
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
        return array (  76 => 32,  67 => 28,  54 => 22,  49 => 20,  19 => 1,  138 => 48,  134 => 47,  131 => 46,  128 => 45,  124 => 34,  121 => 33,  114 => 9,  111 => 8,  105 => 6,  99 => 50,  97 => 45,  85 => 35,  83 => 33,  78 => 30,  72 => 28,  70 => 29,  66 => 26,  57 => 23,  43 => 15,  37 => 11,  35 => 8,  30 => 10,  23 => 1,  71 => 16,  68 => 15,  64 => 14,  61 => 26,  51 => 13,  44 => 18,  41 => 17,  34 => 4,  31 => 3,  63 => 17,  56 => 17,  53 => 22,  47 => 10,  45 => 9,  42 => 8,  39 => 16,  32 => 4,  29 => 3,);
    }
}
