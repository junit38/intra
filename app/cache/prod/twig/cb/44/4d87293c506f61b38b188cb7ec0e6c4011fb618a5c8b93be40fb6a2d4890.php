<?php

/* IntraForumBundle:Thread:voir.html.twig */
class __TwigTemplate_cb444d87293c506f61b38b188cb7ec0e6c4011fb618a5c8b93be40fb6a2d4890 extends Twig_Template
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
        if (array_key_exists("thread", $context)) {
            // line 5
            echo "  \t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"), "html", null, true);
            echo " - 
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 12
        echo "
\t";
        // line 13
        if (array_key_exists("thread", $context)) {
            // line 14
            echo "
\t\t<div class=\"panel panel-info\">
\t\t  <div class=\"panel-heading\"><h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getSujet", array(), "method"), "html", null, true);
            echo "</h4></div>
\t\t  <div class=\"panel-body\">
\t\t    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getAuteur", array(), "method"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getDateActivite", array(), "method"), "Y-m-d h:m"), "html", null, true);
            echo "
\t\t  </div>
\t\t</div>

\t\t";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 23
                echo "
\t\t<div class=\"list-group\">
\t\t\t<div class=\"list-group-item\">
\t\t    <p class=\"list-group-item-heading\">";
                // line 26
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getContenu", array(), "method"), "html", null, true));
                echo "

\t\t    ";
                // line 28
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 29
                    echo "\t\t    \t<form class=\"pull-right\" action=\"";
                    echo $this->env->getExtension('routing')->getPath("intra_forum_remove_commentaire");
                    echo "\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"_id_thread\" name =\"_id_thread\" value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t";
                }
                // line 37
                echo "
\t\t    </p>
\t\t    <small class=\"list-group-item-text\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getAuteur", array(), "method"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getDateCreation", array(), "method"), "Y-m-d h:m"), "html", null, true);
                echo "
\t\t    </small>
\t\t    \t<button class=\"btn btn-default btn-xs\" data-toggle=\"collapse\" data-target=\"#";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getId", array(), "method"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-plus\">Commenter</span></button>
\t\t    </div>

\t\t    ";
                // line 44
                if ((!twig_test_empty($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getCommentaires", array(), "method")))) {
                    // line 45
                    echo "\t\t    \t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getCommentaires", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                        // line 46
                        echo "\t\t    \t\t<div class=\"list-group-item\">
\t\t\t\t    <p class=\"list-group-item-heading\">";
                        // line 47
                        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getContenu", array(), "method"), "html", null, true));
                        echo "

\t\t\t\t    ";
                        // line 49
                        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                            // line 50
                            echo "\t\t\t\t    \t<form class=\"pull-right\" action=\"";
                            echo $this->env->getExtension('routing')->getPath("intra_forum_remove_commentaire");
                            echo "\" method=\"POST\">
\t\t\t\t    \t\t<input type=\"hidden\" id=\"_id_thread\" name =\"_id_thread\" value=\"";
                            // line 51
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                            // line 52
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getId", array(), "method"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
                        }
                        // line 58
                        echo "
\t\t\t\t    </p>
\t\t\t\t    <small class=\"list-group-item-text\">";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getAuteur", array(), "method"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getDateCreation", array(), "method"), "Y-m-d h:m"), "html", null, true);
                        echo "
\t\t\t\t    </small>
\t\t\t\t    </div>
\t\t    \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t    ";
                }
                // line 65
                echo "
\t\t</div>

\t\t\t<div id=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getId", array(), "method"), "html", null, true);
                echo "\" class=\"collapse\">
\t\t\t    <form role=\"form\" action=";
                // line 69
                echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_commentaire_commentaire");
                echo " method=\"POST\" 
\t\t\t\tonsubmit=\"return (this._content.value.length > 0)\">
\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t  \t<textarea class=\"form-control\" rows=\"4\" id=\"_content\" name=\"_content\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"_id_commentaire\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"_id_thread\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Commenter</button>
\t\t\t\t</form>
\t\t\t\t<hr>
\t\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t<form role=\"form\" action=";
            // line 83
            echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_commentaire");
            echo " method=\"POST\" 
\t\tonsubmit=\"return (this._content.value.length > 0)\">
\t\t\t <div class=\"form-group\">
\t\t\t  \t<label for=\"_content\">Message</label>
\t\t\t  \t<textarea class=\"form-control\" rows=\"4\" id=\"_content\" name=\"_content\"></textarea>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_id_thread\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Répondre</button>
\t\t</form>

\t";
        }
        // line 94
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntraForumBundle:Thread:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 94,  227 => 89,  218 => 83,  215 => 82,  202 => 75,  198 => 74,  190 => 69,  186 => 68,  181 => 65,  178 => 64,  166 => 60,  162 => 58,  153 => 52,  149 => 51,  144 => 50,  142 => 49,  137 => 47,  134 => 46,  129 => 45,  127 => 44,  121 => 41,  114 => 39,  110 => 37,  101 => 31,  97 => 30,  92 => 29,  90 => 28,  85 => 26,  80 => 23,  76 => 22,  67 => 18,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  44 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
