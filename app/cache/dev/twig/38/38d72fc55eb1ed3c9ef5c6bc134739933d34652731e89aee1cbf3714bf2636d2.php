<?php

/* @User/Default/index.html.twig~ */
class __TwigTemplate_cec8e24781cc69fbae8ac58738701dc5358483386735759857b5ee70898a310f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Default/index.html.twig~", 1);
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            <li>Bonjour, ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
            echo "</li>
        ";
        } else {
            // line 12
            echo "            


Hello World! La connexion fonctionne

<img src=\"http://piwee.net/wp-content/uploads/2016/01/1-blague-developpeur-classe-css-2.jpg\" style=\"width:300px;\">

<a href=\"http://localhost/LeCoinDesPious/web/logout\">Se déconnecter</a>
";
        }
        // line 21
        echo "

    ";
        // line 23
        $this->loadTemplate("::header.html.twig", "@User/Default/index.html.twig~", 23)->display($context);
        // line 24
        echo "    ";
        $this->loadTemplate("::contenutest.html.twig", "@User/Default/index.html.twig~", 24)->display($context);
        // line 25
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Default/index.html.twig~", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  71 => 24,  69 => 23,  65 => 21,  54 => 12,  49 => 10,  44 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*             <li>Bonjour, {{ app.user }}</li>*/
/*         {% else %}*/
/*             */
/* */
/* */
/* Hello World! La connexion fonctionne*/
/* */
/* <img src="http://piwee.net/wp-content/uploads/2016/01/1-blague-developpeur-classe-css-2.jpg" style="width:300px;">*/
/* */
/* <a href="http://localhost/LeCoinDesPious/web/logout">Se déconnecter</a>*/
/* {% endif %}*/
/* */
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "::contenutest.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
