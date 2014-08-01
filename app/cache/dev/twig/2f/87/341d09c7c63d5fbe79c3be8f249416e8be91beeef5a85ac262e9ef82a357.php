<?php

/* IntraAdminBundle:Admin:interface.html.twig */
class __TwigTemplate_2f87341d09c7c63d5fbe79c3be8f249416e8be91beeef5a85ac262e9ef82a357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraAdminBundle::layout.html.twig";
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
<ul class=\"nav nav-tabs\" id=\"adminTab\">
  <li class=\"active\"><a href=\"#tickets\" data-toggle=\"tab\">Tickets</a></li>
  <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
  <li><a href=\"#categories\" data-toggle=\"tab\">Categories</a></li>
  <li><a href=\"#modules\" data-toggle=\"tab\">Modules</a></li>
</ul>

<div class=\"tab-content\">

  <div class=\"tab-pane active\" id=\"tickets\">
  \t<h4>Tickets non attribué</h4>

  \t<div class=\"table-responsive\">
\t \t<table class=\"table table-hover\">
\t \t\t<tr><th>Titre</th><th>Priorité</th><th>Date de soumission</th><th>Auteur</th></tr>

\t\t  ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 26
            echo "\t\t  \t";
            if ((null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method"))) {
                // line 27
                echo "
\t\t\t\t    ";
                // line 28
                if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En cours")) {
                    // line 29
                    echo "\t\t\t\t    \t<tr class=\"info\">
\t\t\t\t    ";
                } else {
                    // line 31
                    echo "\t\t\t\t  \t\t<tr class=\"warning\">
\t\t\t\t  \t";
                }
                // line 33
                echo "\t\t\t\t  \t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_ticket_read", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method")) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"), 0, 25) . "...")) : ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"))), "html", null, true);
                echo "</a></td>
\t\t\t\t  \t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getPriorite", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t  \t<td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
                echo "</td>
\t\t\t\t  \t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAuteur", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t  \t</tr>

\t\t\t";
            }
            // line 40
            echo "\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
  \t\t</table>
\t</div>


  \t<h4>Tickets</h4>
  \t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("intra_admin_tickets");
        echo "\">Voir tout les tickets</a>

  \t<div class=\"table-responsive\">
\t \t<table class=\"table table-hover\">
\t \t\t<tr><th>Titre</th><th>Priorité</th><th>Date de soumission</th><th>Auteur</th></tr>

\t\t  ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 54
            echo "\t\t  \t";
            if ((!(null === $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method")))) {
                // line 55
                echo "\t\t  \t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAdmin", array(), "method"), "getId", array(), "method") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getId", array(), "method"))) {
                    // line 56
                    echo "
\t\t\t\t    ";
                    // line 57
                    if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getEtat", array(), "method") == "En cours")) {
                        // line 58
                        echo "\t\t\t\t    \t<tr class=\"info\">
\t\t\t\t    ";
                    } else {
                        // line 60
                        echo "\t\t\t\t  \t\t<tr class=\"warning\">
\t\t\t\t  \t";
                    }
                    // line 62
                    echo "\t\t\t\t  \t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_ticket_read", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getId", array(), "method"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method")) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"), 0, 25) . "...")) : ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getTitre", array(), "method"))), "html", null, true);
                    echo "</a></td>
\t\t\t\t  \t<td>";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getPriorite", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t  \t<td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getDatetime", array(), "method"), "Y-m-d h:m"), "html", null, true);
                    echo "</td>
\t\t\t\t  \t<td>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "getAuteur", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t  \t</tr>

\t\t\t\t";
                }
                // line 69
                echo "\t\t\t";
            }
            // line 70
            echo "\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
  \t\t</table>
\t</div>

\t";
        // line 75
        if (twig_test_empty((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")))) {
            // line 76
            echo "  \t\t<p>Aucun ticket en attente</p>
  \t";
        }
        // line 78
        echo "
  </div>

  <div class=\"tab-pane\" id=\"users\">
\t<h4>Liste des utilisateurs</h4>
  \t
  \t<div class=\"table-responsive\">
\t \t<table class=\"table table-hover\">
\t \t\t<tr><th>Login</th><th>Email</th><th>Roles</th><th>Etat</th></tr>

\t\t  ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 89
            echo "\t\t    
\t\t  \t<tr>
\t\t\t  \t<td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t  \t<td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t  \t<td>";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRoles", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 94
                echo "\t\t\t  \t\t\t";
                echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
                echo "
\t\t\t  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t  \t</td>
\t\t\t  \t<td>
\t\t\t  \t\t";
            // line 98
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_ADMIN"), "method") && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) || (!$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_ADMIN"), "method")))) {
                // line 99
                echo "\t\t\t\t  \t\t";
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isEnabled", array(), "method")) {
                    // line 100
                    echo "\t\t\t\t  \t\t\t<form action=\"";
                    echo $this->env->getExtension('routing')->getPath("user_update");
                    echo "\" method=\"POST\">
\t\t\t\t\t\t  \t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t  \t<button type=\"submit\" class=\"btn btn-default btn-xs\">Actif</button>
\t\t\t\t\t\t  \t</form>
\t\t\t\t  \t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t  \t\t\t<form action=\"";
                    echo $this->env->getExtension('routing')->getPath("user_update");
                    echo "\" method=\"POST\">
\t\t\t\t\t\t  \t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t  \t<button type=\"submit\" class=\"btn btn-default btn-xs\">Inactif</button>
\t\t\t\t\t\t  \t</form>
\t\t\t\t  \t\t";
                }
                // line 110
                echo "\t\t\t\t  \t";
            } else {
                // line 111
                echo "\t\t\t\t  \t\t";
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isEnabled", array(), "method")) {
                    // line 112
                    echo "\t\t\t\t  \t\t\tActif
\t\t\t\t  \t\t";
                } else {
                    // line 114
                    echo "\t\t\t\t  \t\t\tInactif
\t\t\t\t  \t\t";
                }
                // line 116
                echo "\t\t\t\t  \t";
            }
            // line 117
            echo "\t\t\t  \t</td>
\t\t  \t</tr>

\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
  \t\t</table>
\t</div>

\t";
        // line 125
        if (twig_test_empty((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")))) {
            // line 126
            echo "  \t\t<p>Aucun utilisateur</p>
  \t";
        }
        // line 128
        echo "
  </div>

  <div class=\"tab-pane\" id=\"categories\">
\t<h4>Liste des categories du Forum</h4>

\t\t<div class=\"panel-group\" id=\"accordion\">

\t\t\t";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 137
            echo "\t\t\t\t";
            if ((null === $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSurCategorie"))) {
                // line 138
                echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t          ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                echo "\t\t\t\t          
\t\t\t\t        </a>
\t\t\t\t        <form class=\"pull-right\" action=\"";
                // line 144
                echo $this->env->getExtension('routing')->getPath("intra_forum_remove_categorie");
                echo "\" method=\"POST\">
\t\t\t\t\t\t  \t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t  \t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t  \t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t  \t</button>
\t\t\t\t\t  \t</form>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs pull-right\" data-toggle=\"modal\" data-target=\"#Formulaire_modifier_categorie\" 
\t\t\t\t\t\t\tonclick=\"
\t\t\t\t\t\t\tdocument.getElementById('_modification_id').value = '";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                echo "';
\t\t\t\t\t\t\tdocument.getElementById('_modification_name').value = '";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                echo "'
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t      </h4>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t        ";
                // line 161
                if ((!twig_test_empty($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSousCategories", array(), "method")))) {
                    // line 162
                    echo "\t\t\t\t      \t\t<ul class=\"list-group\">
\t\t\t\t        \t";
                    // line 163
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getSousCategories", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                        // line 164
                        echo "\t\t\t\t      \t\t\t
\t\t\t\t\t      \t\t<li class=\"list-group-item\">";
                        // line 165
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t<form class=\"pull-right\" action=\"";
                        // line 166
                        echo $this->env->getExtension('routing')->getPath("intra_forum_remove_categorie");
                        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                        // line 167
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs pull-right\" data-toggle=\"modal\" data-target=\"#Formulaire_modifier_categorie\" 
\t\t\t\t\t\t\t\t\tonclick=\"
\t\t\t\t\t\t\t\t\tdocument.getElementById('_modification_id').value = '";
                        // line 174
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getId", array(), "method"), "html", null, true);
                        echo "';
\t\t\t\t\t\t\t\t\tdocument.getElementById('_modification_name').value = '";
                        // line 175
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "getName", array(), "method"), "html", null, true);
                        echo "'
\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t  \t</li>
\t\t\t\t      \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "\t\t\t\t      \t\t</ul>
\t\t\t\t        ";
                }
                // line 183
                echo "\t\t\t\t        <form action=\"";
                echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_categorie");
                echo "\" method=\"POST\" onsubmit=\"return (this._name.value.length > 0)\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label for=\"name\">Ajouter une sous-catégorie</label>
\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_sur_categorie_id\" value=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "GetId", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"_name\" name=\"_name\" placeholder=\"Nom de la catégorie\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Ajouter</button>
\t\t\t\t\t\t</form>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t  \t";
            }
            // line 195
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "
\t\t</div>

\t";
        // line 199
        if (twig_test_empty((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))) {
            // line 200
            echo "  \t\t<p>Aucune categorie</p>
  \t";
        }
        // line 202
        echo "
  \t<form action=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("intra_forum_ajouter_categorie");
        echo "\" method=\"POST\" onsubmit=\"return (this._name.value.length > 0)\">
\t\t<div class=\"form-group\">
\t\t    <label for=\"name\">Ajouter une catégorie</label>
\t\t    <input type=\"hidden\" id=\"_sur_categorie_id\" name =\"_sur_categorie_id\" value=\"0\">
\t\t    <input type=\"text\" class=\"form-control\" id=\"_name\" name=\"_name\" placeholder=\"Nom de la catégorie\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-default\">Ajouter</button>
\t</form>

\t<div class=\"modal fade\" id=\"Formulaire_modifier_categorie\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Modifier le nom de la catégorie</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        <form action=\"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("intra_forum_modify_categorie");
        echo "\" method=\"POST\" id=\"_formulaire_categorie\" onsubmit=\"return (this._modification_name.value.length > 0)\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <label for=\"name\">Catégorie</label>
\t\t\t\t    <input type=\"hidden\" id=\"_modification_id\" name =\"_modification_id\" value=\"0\">
\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"_modification_name\" name=\"_modification_name\" placeholder=\"Nom de la catégorie\">
\t\t\t\t</div>
\t      </div>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t        <button type=\"button submit\" class=\"btn btn-primary\">Modifier</button>
\t        </form>
\t      </div>
\t    </div>
\t  </div>
\t</div>

  </div>


  <div class=\"tab-pane\" id=\"modules\">
\t<h4>Liste des modules</h4>

\t\t<div class=\"panel-group\" id=\"accordion\">

\t\t\t";
        // line 244
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 245
            echo "\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t          ";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getName", array(), "method"), "html", null, true);
            echo "
\t\t\t\t        </a>
\t\t\t\t        <form class=\"pull-right\" action=\"";
            // line 251
            echo $this->env->getExtension('routing')->getPath("intra_module_remove_module");
            echo "\" method=\"POST\">
\t\t\t\t\t\t  \t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getId", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t  \t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t  \t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t  \t</button>
\t\t\t\t\t  \t</form>
\t\t\t\t\t  \t<span class=\"badge\">";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getValeure", array(), "method"), "html", null, true);
            echo " crédits</span>
\t\t\t\t      </h4>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getId", array(), "method"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t      \t<p><strong>Début:</strong> ";
            // line 262
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getDateDebutModule", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t      \t<p><strong>Fin:</strong> ";
            // line 263
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getDateFinModule", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</p>
\t\t\t\t      \t<small>Inscription du ";
            // line 264
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getDateDebutInscription", array(), "method"), "d-m-Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getDateFinInscription", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</small>
\t\t\t\t      \t<br>
\t\t\t\t      \t<a href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_module_inscrit_module", array("id" => $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getId", array(), "method"))), "html", null, true);
            echo "\">Voir les inscrits</a>
\t\t\t\t      \t<hr>
\t\t\t\t        ";
            // line 268
            if ((!twig_test_empty($this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getActivites", array(), "method")))) {
                // line 269
                echo "\t\t\t\t        \t<h4>Activités</h4>
\t\t\t\t      \t\t<ul class=\"list-group\">
\t\t\t\t        \t";
                // line 271
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getActivites", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                    echo "\t
\t\t\t\t\t      \t\t<li class=\"list-group-item\">
\t\t\t\t\t      \t\t\t";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "getName", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t<form class=\"pull-right\" action=\"";
                    // line 274
                    echo $this->env->getExtension('routing')->getPath("intra_module_remove_activite");
                    echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"_id\" name =\"_id\" value=\"";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "getId", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t      \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "\t\t\t\t      \t\t</ul>
\t\t\t\t      \t";
            } else {
                // line 284
                echo "\t\t\t\t      \t\t<p>Aucune activité pour ce module</p>
\t\t\t\t        ";
            }
            // line 286
            echo "\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">
\t\t\t\t\t\t\t<a href=\"";
            // line 287
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intra_module_formulaire_activite", array("id" => $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "getId", array(), "method"))), "html", null, true);
            echo "\">Ajouter</a>
\t\t\t\t\t\t\t</button>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "
\t\t</div>

\t";
        // line 296
        if (twig_test_empty((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")))) {
            // line 297
            echo "  \t\t<p>Aucun module</p>
  \t";
        }
        // line 299
        echo "
\t\t<button class=\"btn btn-default\"><a href=\"";
        // line 300
        echo $this->env->getExtension('routing')->getPath("intra_module_formulaire_module");
        echo "\">Ajouter</a></button>

  </div>

</div>


\t";
        // line 307
        if (array_key_exists("page", $context)) {
            // line 308
            echo "
\t\t";
            // line 309
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "categorie")) {
                // line 310
                echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\twindow.onload = function() {
\t\t\t\t\t\$('#adminTab a[href=\"#categories\"]').tab('show')
\t\t\t\t}
\t\t\t</script>
\t\t";
            } elseif (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "utilisateur")) {
                // line 316
                echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\twindow.onload = function() {
\t\t\t\t\t\$('#adminTab a[href=\"#users\"]').tab('show')
\t\t\t\t}
\t\t\t</script>
\t\t";
            } elseif (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "modules")) {
                // line 322
                echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\twindow.onload = function() {
\t\t\t\t\t\$('#adminTab a[href=\"#modules\"]').tab('show')
\t\t\t\t}
\t\t\t</script>
\t\t";
            }
            // line 328
            echo "
\t";
        }
        // line 330
        echo "
";
    }

    public function getTemplateName()
    {
        return "IntraAdminBundle:Admin:interface.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 330,  676 => 328,  668 => 322,  660 => 316,  652 => 310,  650 => 309,  647 => 308,  645 => 307,  635 => 300,  632 => 299,  628 => 297,  626 => 296,  621 => 293,  609 => 287,  606 => 286,  602 => 284,  598 => 282,  585 => 275,  581 => 274,  577 => 273,  570 => 271,  566 => 269,  564 => 268,  559 => 266,  552 => 264,  548 => 263,  544 => 262,  539 => 260,  533 => 257,  525 => 252,  521 => 251,  516 => 249,  512 => 248,  507 => 245,  503 => 244,  476 => 220,  456 => 203,  449 => 200,  447 => 199,  442 => 196,  436 => 195,  424 => 186,  417 => 183,  401 => 175,  397 => 174,  383 => 166,  376 => 164,  372 => 163,  369 => 162,  367 => 161,  353 => 153,  349 => 152,  339 => 145,  335 => 144,  330 => 142,  326 => 141,  321 => 138,  318 => 137,  304 => 128,  300 => 126,  292 => 121,  280 => 116,  276 => 114,  272 => 112,  266 => 110,  259 => 106,  242 => 100,  237 => 98,  233 => 96,  212 => 91,  192 => 78,  188 => 76,  186 => 75,  180 => 71,  126 => 53,  113 => 37,  84 => 28,  281 => 106,  265 => 96,  262 => 95,  239 => 99,  236 => 84,  232 => 82,  228 => 80,  226 => 79,  223 => 78,  216 => 92,  211 => 74,  207 => 72,  200 => 68,  178 => 62,  174 => 70,  161 => 54,  150 => 49,  170 => 46,  167 => 45,  160 => 64,  127 => 33,  100 => 31,  58 => 14,  81 => 33,  77 => 31,  65 => 26,  34 => 7,  76 => 24,  134 => 47,  124 => 43,  114 => 9,  97 => 32,  70 => 21,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 202,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 181,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 167,  384 => 121,  381 => 120,  379 => 165,  374 => 116,  368 => 112,  365 => 111,  362 => 159,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 136,  312 => 98,  309 => 97,  305 => 95,  298 => 125,  294 => 90,  285 => 89,  283 => 117,  278 => 86,  268 => 85,  264 => 84,  258 => 93,  252 => 80,  247 => 101,  241 => 77,  229 => 73,  220 => 93,  214 => 75,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  107 => 34,  61 => 25,  273 => 101,  269 => 111,  254 => 105,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 77,  217 => 75,  208 => 89,  204 => 88,  179 => 69,  159 => 61,  143 => 37,  135 => 35,  119 => 31,  102 => 32,  71 => 28,  67 => 20,  63 => 19,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 20,  68 => 27,  56 => 13,  87 => 23,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 30,  46 => 7,  27 => 5,  44 => 8,  31 => 4,  28 => 4,  201 => 92,  196 => 66,  183 => 82,  171 => 69,  166 => 56,  163 => 55,  158 => 53,  156 => 63,  151 => 39,  142 => 46,  138 => 48,  136 => 56,  121 => 33,  117 => 47,  105 => 6,  91 => 29,  62 => 13,  49 => 10,  24 => 7,  25 => 3,  19 => 2,  79 => 21,  72 => 22,  69 => 19,  47 => 10,  40 => 7,  37 => 11,  22 => 3,  246 => 90,  157 => 56,  145 => 60,  139 => 57,  131 => 34,  123 => 32,  120 => 40,  115 => 30,  111 => 29,  108 => 36,  101 => 32,  98 => 31,  96 => 36,  83 => 22,  74 => 14,  66 => 26,  55 => 15,  52 => 15,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 63,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 65,  162 => 47,  154 => 58,  149 => 62,  147 => 38,  144 => 49,  141 => 58,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 41,  112 => 36,  109 => 41,  106 => 36,  103 => 40,  99 => 32,  95 => 31,  92 => 35,  86 => 27,  82 => 24,  80 => 26,  73 => 29,  64 => 14,  60 => 14,  57 => 13,  54 => 13,  51 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
