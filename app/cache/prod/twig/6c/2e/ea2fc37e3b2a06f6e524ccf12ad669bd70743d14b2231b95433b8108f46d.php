<?php

/* IntraForumBundle::layout.html.twig */
class __TwigTemplate_6c2eea2fc37e3b2a06f6e524ccf12ad669bd70743d14b2231b95433b8108f46d extends Twig_Template
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
        echo "\t";
        if (array_key_exists("categorie", $context)) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
            echo " - 
\t";
        }
        // line 7
        echo "   Forum - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  <h2>Forum</h2>
  
  <ol class=\"breadcrumb\">
\t  <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("intra_forum");
        echo "\">Categories</a></li>
\t  \t";
        // line 16
        if (array_key_exists("categorie", $context)) {
            // line 17
            echo "\t\t  \t";
            if ($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getSurCategorie", array(), "method")) {
                // line 18
                echo "\t\t  \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getSurCategorie", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getSurCategorie", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t  \t";
            }
            // line 20
            echo "
\t\t  \t";
            // line 21
            if (array_key_exists("thread", $context)) {
                // line 22
                echo "\t\t  \t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t  \t\t<li class=\"active\">";
                // line 23
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method")) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"), 0, 25) . "...")) : ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"))), "html", null, true);
                echo "</li>
\t\t \t";
            } else {
                // line 25
                echo "\t\t \t\t<li class=\"active\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
                echo "</li>
\t\t \t";
            }
            // line 27
            echo "\t \t";
        }
        // line 28
        echo "  </ol>

  <hr>

  ";
        // line 32
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 34
        echo "
";
    }

    // line 32
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  109 => 34,  107 => 32,  101 => 28,  98 => 27,  92 => 25,  87 => 23,  67 => 18,  64 => 17,  62 => 16,  52 => 11,  49 => 10,  36 => 5,  33 => 4,  30 => 3,  99 => 25,  96 => 24,  85 => 22,  80 => 22,  78 => 21,  75 => 20,  72 => 18,  66 => 17,  58 => 15,  55 => 14,  50 => 13,  48 => 12,  42 => 7,  39 => 7,  32 => 4,  29 => 3,);
    }
}
