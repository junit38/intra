<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0c95c1e38bbf8443011ad7cc2bd27812085a11c6e11badc2f514cc5757fcc428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntraUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'intramain_body' => array($this, 'block_intramain_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntraUserBundle::layout.html.twig";
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
        echo " - Connexion
";
    }

    // line 7
    public function block_intramain_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"form-group\">
    <label for=\"username\" class=\"col-sm-2 control-label\">Login :</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
      </div>
    </div>  
    <div class=\"form-group\">
    <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe :</label>
      <div class=\"col-sm-10\">
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\"> Remember me
          </label>
        </div>
      </div>
    </div>   
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
        <button type=\"submit\" class=\"btn btn-default\" value=\"Connexion\">Sign in</button>
      </div>
    </div>

  </form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  56 => 13,  53 => 12,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
