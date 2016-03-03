<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_46f3dc8205258ca38042e18fb1158bb5dd3e59d3a5c4110a7939d66efcae5b07 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </fieldset>
    </fieldset>
</form>
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     <fieldset>*/
/*         <style>*/
/*             input#remember_me{*/
/*                 margin-top: -18px;*/
/*                 margin-left: 50px;*/
/*             }*/
/*         </style>*/
/*         <fieldset>*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*         </fieldset>*/
/*     </fieldset>*/
/* </form>*/
/* <div class="clear"></div>*/
