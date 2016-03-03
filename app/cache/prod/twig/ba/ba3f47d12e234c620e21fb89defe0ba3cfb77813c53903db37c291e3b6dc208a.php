<?php

/* @User/Profile/edit_content.html.twig */
class __TwigTemplate_b0df2893dbfdd362103f99e0e591a4c5db62b96d2f0c67f8c507b1eb453206e7 extends Twig_Template
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
        $__internal_a5852aa2c942b9b13e5a681d0e27e1e7c71a923e64d2b22202ff4ac61a022818 = $this->env->getExtension("native_profiler");
        $__internal_a5852aa2c942b9b13e5a681d0e27e1e7c71a923e64d2b22202ff4ac61a022818->enter($__internal_a5852aa2c942b9b13e5a681d0e27e1e7c71a923e64d2b22202ff4ac61a022818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </fieldset>
    </fieldset>
</form>
<div class=\"clear\"></div>";
        
        $__internal_a5852aa2c942b9b13e5a681d0e27e1e7c71a923e64d2b22202ff4ac61a022818->leave($__internal_a5852aa2c942b9b13e5a681d0e27e1e7c71a923e64d2b22202ff4ac61a022818_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 10,  22 => 1,);
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
