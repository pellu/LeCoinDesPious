<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1593d92ebd802f700f14140110ffb42b3107b81ebe8aa8ed3877c871682692e9 extends Twig_Template
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
        $__internal_f42877fa9357d13ece53f7d46162cdbfa932ab4714cd826597162b9f5e7d7384 = $this->env->getExtension("native_profiler");
        $__internal_f42877fa9357d13ece53f7d46162cdbfa932ab4714cd826597162b9f5e7d7384->enter($__internal_f42877fa9357d13ece53f7d46162cdbfa932ab4714cd826597162b9f5e7d7384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_f42877fa9357d13ece53f7d46162cdbfa932ab4714cd826597162b9f5e7d7384->leave($__internal_f42877fa9357d13ece53f7d46162cdbfa932ab4714cd826597162b9f5e7d7384_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
