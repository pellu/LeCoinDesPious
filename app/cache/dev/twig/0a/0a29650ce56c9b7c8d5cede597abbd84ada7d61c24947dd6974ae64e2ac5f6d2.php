<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_3d44eb9e4c69a255717ba09f208aab467172fb6967645ee99c16999693068d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form id=\"loginForm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    <fieldset>
        <style>
            input#remember_me{
                margin-top: -18px;
                margin-left: 50px;
            }
        </style>
        <fieldset>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </fieldset>
    </fieldset>
</form>
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  34 => 10,  19 => 1,);
    }
}
/* <form id="loginForm" action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*     <fieldset>*/
/*         <style>*/
/*             input#remember_me{*/
/*                 margin-top: -18px;*/
/*                 margin-left: 50px;*/
/*             }*/
/*         </style>*/
/*         <fieldset>*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*         </fieldset>*/
/*     </fieldset>*/
/* </form>*/
/* <div class="clear"></div>*/
