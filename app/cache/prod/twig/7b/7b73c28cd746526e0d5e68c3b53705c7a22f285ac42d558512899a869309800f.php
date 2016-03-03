<?php

/* @User/Resetting/reset_content.html.twig */
class __TwigTemplate_3419e1622ecd46b148ba2f47e0b3851f3b6e85076c36576933c9c10522182d4b extends Twig_Template
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
        $__internal_4279350b2f0459124f31b64c7aafb15bd767c7ecb4aa59009b017f5376955455 = $this->env->getExtension("native_profiler");
        $__internal_4279350b2f0459124f31b64c7aafb15bd767c7ecb4aa59009b017f5376955455->enter($__internal_4279350b2f0459124f31b64c7aafb15bd767c7ecb4aa59009b017f5376955455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_4279350b2f0459124f31b64c7aafb15bd767c7ecb4aa59009b017f5376955455->leave($__internal_4279350b2f0459124f31b64c7aafb15bd767c7ecb4aa59009b017f5376955455_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset_content.html.twig";
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
/* <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
