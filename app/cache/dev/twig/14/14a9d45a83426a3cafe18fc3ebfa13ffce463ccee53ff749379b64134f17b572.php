<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_af705a023c278fc9bb770d854bb9be0d22bc45e6bde146a1e37344a6fdefa3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo "

    ";
        // line 4
        $this->loadTemplate("::header.html.twig", "@User/Security/login.html.twig", 4)->display($context);
        // line 5
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
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <label id=\"checkbox\" for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/></label>

                    <input type=\"submit\" id=\"login\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    <label for=\"checkbox\"><i><a href=\"\">Mot de passe perdu ?</a></i></label>
                </fieldset>
            </fieldset>
        </form><div class=\"clear\"> </div>
    ";
        // line 29
        $this->loadTemplate("::footer.html.twig", "@User/Security/login.html.twig", 29)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  70 => 24,  65 => 22,  59 => 19,  54 => 17,  50 => 16,  45 => 14,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
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
/*         </form><div class="clear"> </div>*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
