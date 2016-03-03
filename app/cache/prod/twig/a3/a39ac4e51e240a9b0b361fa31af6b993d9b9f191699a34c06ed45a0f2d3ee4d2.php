<?php

/* @User/Security/login.html.twig~ */
class __TwigTemplate_7032efe9b30713b2942bcd163adfa47ead35d1e11bd5a77258424ac478cd4b63 extends Twig_Template
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
        $__internal_462d616882947d06619958f44bdd77e58ac769604c2df066bce7820e5f4d3931 = $this->env->getExtension("native_profiler");
        $__internal_462d616882947d06619958f44bdd77e58ac769604c2df066bce7820e5f4d3931->enter($__internal_462d616882947d06619958f44bdd77e58ac769604c2df066bce7820e5f4d3931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462d616882947d06619958f44bdd77e58ac769604c2df066bce7820e5f4d3931->leave($__internal_462d616882947d06619958f44bdd77e58ac769604c2df066bce7820e5f4d3931_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62b38874e0fc35dd1549872738cd036f09089152effd5eee1c05acf4ae187d3d = $this->env->getExtension("native_profiler");
        $__internal_62b38874e0fc35dd1549872738cd036f09089152effd5eee1c05acf4ae187d3d->enter($__internal_62b38874e0fc35dd1549872738cd036f09089152effd5eee1c05acf4ae187d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_62b38874e0fc35dd1549872738cd036f09089152effd5eee1c05acf4ae187d3d->leave($__internal_62b38874e0fc35dd1549872738cd036f09089152effd5eee1c05acf4ae187d3d_prof);

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
        return array (  99 => 33,  91 => 28,  86 => 26,  80 => 23,  75 => 21,  71 => 20,  66 => 18,  53 => 9,  51 => 8,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
