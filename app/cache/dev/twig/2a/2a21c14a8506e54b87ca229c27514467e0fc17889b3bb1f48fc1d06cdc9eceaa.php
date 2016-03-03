<?php

/* @User/Security/login.html.twig~ */
class __TwigTemplate_9cb055df8aee9aa079432c1bfcc2cf75bc18b2e249908d7a6afef38eeb663688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Security/login.html.twig~", 1);
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
        $this->loadTemplate("::header.html.twig", "@User/Security/login.html.twig~", 8)->display($context);
        // line 9
        echo "        <form id=\"loginForm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <fieldset>
                <style>
                    input#remember_me{
                        margin-top: -18px;
                        margin-left: 50px;
                    }
                </style>
                <fieldset>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <label id=\"checkbox\" for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/></label>

                    <input type=\"submit\" id=\"login\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    <label for=\"checkbox\"><i><a href=\"\">Mot de passe perdu ?</a></i></label>
                </fieldset>
            </fieldset>
        </form>
    ";
        // line 33
        $this->loadTemplate("::footer.html.twig", "@User/Security/login.html.twig~", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  82 => 28,  77 => 26,  71 => 23,  66 => 21,  62 => 20,  57 => 18,  44 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*         <form id="loginForm" action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <fieldset>*/
/*                 <style>*/
/*                     input#remember_me{*/
/*                         margin-top: -18px;*/
/*                         margin-left: 50px;*/
/*                     }*/
/*                 </style>*/
/*                 <fieldset>*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*                     <label id="checkbox" for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}<input type="checkbox" id="remember_me" name="_remember_me" value="on"/></label>*/
/* */
/*                     <input type="submit" id="login" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}">*/
/*                     <label for="checkbox"><i><a href="">Mot de passe perdu ?</a></i></label>*/
/*                 </fieldset>*/
/*             </fieldset>*/
/*         </form>*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
