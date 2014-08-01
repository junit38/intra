<?php

/* IntraTicketBundle::layout.html.twig */
class __TwigTemplate_370aa1f4911ed0ed4dbb5b0764aad062fc7c6493498b62b7be59de3d0044e91a extends Twig_Template
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
        echo "   Ticket - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Tickets</h2>
  
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
        return "IntraTicketBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  52 => 15,  50 => 13,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  281 => 106,  273 => 101,  265 => 96,  262 => 95,  258 => 93,  247 => 88,  239 => 85,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  219 => 77,  216 => 76,  214 => 75,  211 => 74,  207 => 72,  200 => 68,  196 => 66,  187 => 63,  178 => 62,  174 => 61,  166 => 56,  163 => 55,  161 => 54,  158 => 53,  156 => 52,  150 => 49,  142 => 46,  136 => 45,  130 => 44,  124 => 43,  117 => 39,  112 => 36,  107 => 34,  103 => 33,  97 => 32,  91 => 29,  86 => 27,  80 => 24,  77 => 23,  73 => 21,  69 => 19,  65 => 17,  61 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  48 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
