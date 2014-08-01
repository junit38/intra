<?php

/* IntraModuleBundle::layout.html.twig */
class __TwigTemplate_731702713dd50984a80c6b441dac14a1b6bd7231271ce8e8a7df614e1b755ecf extends Twig_Template
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
        echo "   Modules - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Modules</h2>
  
  <ol class=\"breadcrumb\">
\t  <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intra_module");
        echo "\">Modules</a></li>
\t  \t";
        // line 13
        if (array_key_exists("module", $context)) {
            // line 14
            echo "        ";
            if (array_key_exists("activite", $context)) {
                // line 15
                echo "\t\t  \t  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_module_voir_module", array("id" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getid", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getName", array(), "method"), "html", null, true);
                echo "</a></li>
          <li class=\"active\"> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : null), "getName", array(), "method"), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 18
                echo "          <li class=\"active\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getName", array(), "method"), "html", null, true);
                echo "</li>
        ";
            }
            // line 20
            echo "\t \t";
        }
        // line 21
        echo "  </ol>

  <hr>

  ";
        // line 25
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 25
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 26
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraModuleBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  92 => 25,  87 => 27,  85 => 25,  70 => 18,  58 => 15,  55 => 14,  53 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  79 => 21,  76 => 20,  69 => 19,  65 => 16,  63 => 16,  56 => 15,  51 => 14,  49 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
