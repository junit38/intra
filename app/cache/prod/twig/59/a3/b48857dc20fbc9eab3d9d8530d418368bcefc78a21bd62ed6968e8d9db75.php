<?php

/* IntraForumBundle:Forum:index.html.twig */
class __TwigTemplate_59a3b48857dc20fbc9eab3d9d8530d418368bcefc78a21bd62ed6968e8d9db75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraForumBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraForumBundle::layout.html.twig";
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
        echo "\t<h4>Liste des catégories</h4>

\t<div class=\"list-group\">

\t";
        // line 12
        if (array_key_exists("categories", $context)) {
            // line 13
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 14
                echo "\t\t\t";
                if ((null === $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getSurCategorie"))) {
                    // line 15
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                // line 17
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t";
        }
        // line 19
        echo "
\t";
        // line 20
        if (array_key_exists("sous_categories", $context)) {
            // line 21
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sous_categories"]) ? $context["sous_categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 22
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"list-group-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
                echo "</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        }
        // line 25
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle:Forum:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  85 => 22,  80 => 21,  78 => 20,  75 => 19,  72 => 18,  66 => 17,  58 => 15,  55 => 14,  50 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
