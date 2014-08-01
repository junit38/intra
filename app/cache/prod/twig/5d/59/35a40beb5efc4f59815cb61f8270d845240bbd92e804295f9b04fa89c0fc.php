<?php

/* IntraForumBundle:Forum:voir.html.twig */
class __TwigTemplate_5d5935a40beb5efc4f59815cb61f8270d845240bbd92e804295f9b04fa89c0fc extends Twig_Template
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
        echo "  \t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        if (array_key_exists("categorie", $context)) {
            // line 10
            echo "
\t\t";
            // line 11
            if (array_key_exists("sous_categories", $context)) {
                // line 12
                echo "\t\t\t<h4>Liste des sous-catégories</h4>
\t\t\t<div class=\"list-group\">
\t\t\t";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sous_categories"]) ? $context["sous_categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 15
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t</div>
\t\t";
            }
            // line 19
            echo "
\t\t<div class=\"panel panel-default\">
\t\t  <div class=\"panel-heading\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getName", array(), "method"), "html", null, true);
            echo "</div>
\t\t  <div class=\"panel-body\">
\t\t    <span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_formulaire_thread", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\"> Ajouter un Thread</a>
\t\t  </div>
\t\t</div>

\t\t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 28
                echo "
\t\t<div class=\"list-group\">
\t\t  <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_forum_voir_thread", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"list-group-item\">
\t\t    <h4 class=\"list-group-item-heading\">
\t\t    ";
                // line 32
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"), 0, 50) . "...")) : ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"))), "html", null, true);
                echo "

\t\t    ";
                // line 34
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 35
                    echo "\t\t    \t<form class=\"pull-right\" action=\"";
                    echo $this->env->getExtension('routing')->getPath("intra_forum_remove_thread");
                    echo "\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id_categorie\" name =\"_id_categorie\" value=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t";
                }
                // line 43
                echo "
\t\t    </h4>
\t\t    <p class=\"list-group-item-text\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getAuteur", array(), "method"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getDateActivite", array(), "method"), "Y-m-d h:m"), "html", null, true);
                echo "
\t\t    </p>
\t\t  </a>
\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
\t\t";
            // line 52
            if (twig_test_empty((isset($context["threads"]) ? $context["threads"] : null))) {
                // line 53
                echo "\t\t<p>Aucun thread pour cette catégorie</p>
\t\t";
            }
            // line 55
            echo "
\t";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle:Forum:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  156 => 55,  152 => 53,  150 => 52,  147 => 51,  133 => 45,  129 => 43,  120 => 37,  116 => 36,  111 => 35,  109 => 34,  104 => 32,  99 => 30,  95 => 28,  91 => 27,  84 => 23,  79 => 21,  75 => 19,  71 => 17,  60 => 15,  56 => 14,  52 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
