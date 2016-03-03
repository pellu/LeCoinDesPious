<?php

/* @User/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_e3d2d4b3329e8708646edc36a2c4a12a85d2e42539ba5b33d8bff3584c8e0b82 extends Twig_Template
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
        $__internal_0c3432010fab25ac3caa77b54be8300ee903606a932bc803040f8c2a2bdcdf05 = $this->env->getExtension("native_profiler");
        $__internal_0c3432010fab25ac3caa77b54be8300ee903606a932bc803040f8c2a2bdcdf05->enter($__internal_0c3432010fab25ac3caa77b54be8300ee903606a932bc803040f8c2a2bdcdf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo "<form id=\"loginForm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </fieldset>
    </fieldset>
</form>
<div class=\"clear\"></div>";
        
        $__internal_0c3432010fab25ac3caa77b54be8300ee903606a932bc803040f8c2a2bdcdf05->leave($__internal_0c3432010fab25ac3caa77b54be8300ee903606a932bc803040f8c2a2bdcdf05_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword_content.html.twig";
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
