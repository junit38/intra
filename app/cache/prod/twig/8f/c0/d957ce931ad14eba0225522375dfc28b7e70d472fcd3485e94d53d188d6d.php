<?php

/* IntraUserBundle::layout.html.twig */
class __TwigTemplate_8fc0d957ce931ad14eba0225522375dfc28b7e70d472fcd3485e94d53d188d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'intramain_body' => array($this, 'block_intramain_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "   Compte - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Compte</h2>
  
  <hr>

  ";
        // line 13
        $this->displayBlock('intramain_body', $context, $blocks);
        // line 15
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 13
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 14
        echo "  ";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "IntraUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  64 => 14,  61 => 13,  51 => 13,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  63 => 17,  56 => 17,  53 => 15,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
