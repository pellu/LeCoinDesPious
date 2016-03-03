<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_e2ae37bcc9a4e2b34fb5cb5960f7ba82fef1862db7faf6acaccc072030468b6a extends Twig_Template
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
        $__internal_417cc9a1e62c771291c8fad7ec3b11e24f35804b23a14921831b0d3199e0aeac = $this->env->getExtension("native_profiler");
        $__internal_417cc9a1e62c771291c8fad7ec3b11e24f35804b23a14921831b0d3199e0aeac->enter($__internal_417cc9a1e62c771291c8fad7ec3b11e24f35804b23a14921831b0d3199e0aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_417cc9a1e62c771291c8fad7ec3b11e24f35804b23a14921831b0d3199e0aeac->leave($__internal_417cc9a1e62c771291c8fad7ec3b11e24f35804b23a14921831b0d3199e0aeac_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_090be0fc39df0ae4ba18f888693366e8967450979b2c4f42a2ce22b9f7e167e7 = $this->env->getExtension("native_profiler");
        $__internal_090be0fc39df0ae4ba18f888693366e8967450979b2c4f42a2ce22b9f7e167e7->enter($__internal_090be0fc39df0ae4ba18f888693366e8967450979b2c4f42a2ce22b9f7e167e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Security/login.html.twig", 2)->display($context);
        // line 3
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
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <label id=\"checkbox\" for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/></label>

                    <input type=\"submit\" id=\"login\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    <label for=\"checkbox\"><i><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a></i></label>
                </fieldset>
            </fieldset>
        </form><div class=\"clear\"> </div>
    ";
        // line 27
        $this->loadTemplate("::footer.html.twig", "@User/Security/login.html.twig", 27)->display($context);
        
        $__internal_090be0fc39df0ae4ba18f888693366e8967450979b2c4f42a2ce22b9f7e167e7->leave($__internal_090be0fc39df0ae4ba18f888693366e8967450979b2c4f42a2ce22b9f7e167e7_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  80 => 23,  76 => 22,  71 => 20,  65 => 17,  60 => 15,  56 => 14,  51 => 12,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
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
/*                     <label for="checkbox"><i><a href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié</a></i></label>*/
/*                 </fieldset>*/
/*             </fieldset>*/
/*         </form><div class="clear"> </div>*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
