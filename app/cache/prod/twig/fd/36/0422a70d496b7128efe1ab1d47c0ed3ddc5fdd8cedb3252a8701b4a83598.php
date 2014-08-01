<?php

/* IntraModuleBundle:Module:index.html.twig */
class __TwigTemplate_fd360422a70d496b7128efe1ab1d47c0ed3ddc5fdd8cedb3252a8701b4a83598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraModuleBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraModuleBundle::layout.html.twig";
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
\t<h4>Liste des modules</h4>

\t<div class=\"list-group\">

\t";
        // line 13
        if (array_key_exists("modules", $context)) {
            // line 14
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 15
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_module_voir_module", array("id" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getName", array(), "method"), "html", null, true);
                echo "
\t\t\t\t";
                // line 16
                if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getInscrit", array(), "method"), "contains", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")), "method")) {
                    // line 17
                    echo "\t\t\t\t<span class=\"badge pull-right\">inscrit</span>
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t";
        }
        // line 22
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "IntraModuleBundle:Module:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  76 => 21,  69 => 19,  65 => 17,  63 => 16,  56 => 15,  51 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
