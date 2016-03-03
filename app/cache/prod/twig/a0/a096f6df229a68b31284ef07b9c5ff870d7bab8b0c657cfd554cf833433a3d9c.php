<?php

/* @User/Registration/register_content.html.twig */
class __TwigTemplate_030666ec9dfa738c05a6ae425cff75bfd6c0445500e371f8519cad1ea9a1dad0 extends Twig_Template
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
        $__internal_712a907f0ad02a4729ebc31e28e500cbc59a39400fab854b961dc4d0c438e996 = $this->env->getExtension("native_profiler");
        $__internal_712a907f0ad02a4729ebc31e28e500cbc59a39400fab854b961dc4d0c438e996->enter($__internal_712a907f0ad02a4729ebc31e28e500cbc59a39400fab854b961dc4d0c438e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        // line 1
        echo "<form id=\"loginForm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form><div class=\"clear\"> </div>";
        
        $__internal_712a907f0ad02a4729ebc31e28e500cbc59a39400fab854b961dc4d0c438e996->leave($__internal_712a907f0ad02a4729ebc31e28e500cbc59a39400fab854b961dc4d0c438e996_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form id="loginForm" action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form><div class="clear"> </div>*/
