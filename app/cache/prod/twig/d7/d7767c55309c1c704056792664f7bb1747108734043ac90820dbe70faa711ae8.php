<?php

/* @User/Default/index.html.twig~ */
class __TwigTemplate_bdd09ae1dcad31f7766d2957396c1dd5849a2a3ff543546b57f63dc10cfbbb64 extends Twig_Template
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
        $__internal_87b22b4ede415d81cd4f4a671d940314d71e98a17e2f28e778127ea6fcba26ad = $this->env->getExtension("native_profiler");
        $__internal_87b22b4ede415d81cd4f4a671d940314d71e98a17e2f28e778127ea6fcba26ad->enter($__internal_87b22b4ede415d81cd4f4a671d940314d71e98a17e2f28e778127ea6fcba26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b22b4ede415d81cd4f4a671d940314d71e98a17e2f28e778127ea6fcba26ad->leave($__internal_87b22b4ede415d81cd4f4a671d940314d71e98a17e2f28e778127ea6fcba26ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92f31cd92fcb6687a71d4413eb00ba9e80eb29044f134b845d118c42fc0319b8 = $this->env->getExtension("native_profiler");
        $__internal_92f31cd92fcb6687a71d4413eb00ba9e80eb29044f134b845d118c42fc0319b8->enter($__internal_92f31cd92fcb6687a71d4413eb00ba9e80eb29044f134b845d118c42fc0319b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
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
        
        $__internal_92f31cd92fcb6687a71d4413eb00ba9e80eb29044f134b845d118c42fc0319b8->leave($__internal_92f31cd92fcb6687a71d4413eb00ba9e80eb29044f134b845d118c42fc0319b8_prof);

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
        return array (  83 => 25,  80 => 24,  78 => 23,  74 => 21,  63 => 12,  58 => 10,  53 => 9,  51 => 8,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
