<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a4dbbae8af4b7e7a947bc0fdeeeae44c5867039cdea27bffdd44a5c1d601a384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
Hello World! La connexion fonctionne

<img src=\"http://piwee.net/wp-content/uploads/2016/01/1-blague-developpeur-classe-css-2.jpg\" style=\"width:300px;\">

<a href=\"javascript:history.go(-1)\">Retour à la seule page développée</a>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*     {% endif %}*/
/* */
/* Hello World! La connexion fonctionne*/
/* */
/* <img src="http://piwee.net/wp-content/uploads/2016/01/1-blague-developpeur-classe-css-2.jpg" style="width:300px;">*/
/* */
/* <a href="javascript:history.go(-1)">Retour à la seule page développée</a>*/
/* */
/* {% endblock fos_user_content %}*/
