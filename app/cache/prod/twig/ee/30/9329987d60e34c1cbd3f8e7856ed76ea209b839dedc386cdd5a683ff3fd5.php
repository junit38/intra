<?php

/* ::layout.html.twig */
class __TwigTemplate_ee309329987d60e34c1cbd3f8e7856ed76ea209b839dedc386cdd5a683ff3fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>

  <body>

    ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IntraMainBundle:Main:menu"));
        echo "

    <div class=\"container\">
      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
          <h3>Menu</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intra_forum");
        echo "\">Forum</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("intra_annuaire");
        echo "\">Annuaire</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("intra_module");
        echo "\">Modules</a></li>
            <li><a href=\"#\">Notes</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("intra_ticket_view");
        echo "\">Tickets</a></li>
            ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("intra_admin_interface");
            echo "\">Administration</a></li>
            ";
        }
        // line 30
        echo "          </ul>
        </div>
        <div id=\"content\" class=\"col-md-9\">
          ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p align=\"center\">The site is powered by the Team '2 girls 3 men' 2014</p>
      </footer>
    </div>

  ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Intra";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "          ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/intrajs.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  134 => 47,  131 => 46,  128 => 45,  124 => 34,  121 => 33,  114 => 9,  111 => 8,  105 => 6,  99 => 50,  97 => 45,  85 => 35,  83 => 33,  78 => 30,  72 => 28,  70 => 27,  66 => 26,  57 => 23,  43 => 15,  37 => 11,  35 => 8,  30 => 6,  23 => 1,  71 => 16,  68 => 15,  64 => 14,  61 => 24,  51 => 13,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  63 => 17,  56 => 17,  53 => 22,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
