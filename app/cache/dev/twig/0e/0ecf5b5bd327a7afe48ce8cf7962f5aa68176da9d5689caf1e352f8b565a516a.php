<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_982413f7e1f1deeeeaff8ad88221f88af25710b3e075cac0e6f3f692f6191337 extends Twig_Template
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
        $__internal_5bffb25e4d8cf72dad61283716785b60bc3ec8d8fa6aca6846132d941f03d02a = $this->env->getExtension("native_profiler");
        $__internal_5bffb25e4d8cf72dad61283716785b60bc3ec8d8fa6aca6846132d941f03d02a->enter($__internal_5bffb25e4d8cf72dad61283716785b60bc3ec8d8fa6aca6846132d941f03d02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <div class=\"avatar\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "webProfilePicturePath", array()), "html", null, true);
        echo "\" alt=\"Image de profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\"></div>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chaîne Youtube", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "youtube", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Twitter", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page Facebook", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chaîne Twitch", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitch", array()), "html", null, true);
        echo "</p>

</div>
";
        
        $__internal_5bffb25e4d8cf72dad61283716785b60bc3ec8d8fa6aca6846132d941f03d02a->leave($__internal_5bffb25e4d8cf72dad61283716785b60bc3ec8d8fa6aca6846132d941f03d02a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  49 => 6,  43 => 5,  37 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <div class="avatar"><img src="{{ user.webProfilePicturePath }}" alt="Image de profil de {{ user.username }}"></div>*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/*     <p>{{ 'Chaîne Youtube'|trans({}, 'FOSUserBundle') }}: {{ user.youtube }}</p>*/
/*     <p>{{ 'Twitter'|trans({}, 'FOSUserBundle') }}: {{ user.twitter }}</p>*/
/*     <p>{{ 'Page Facebook'|trans({}, 'FOSUserBundle') }}: {{ user.facebook }}</p>*/
/*     <p>{{ 'Chaîne Twitch'|trans({}, 'FOSUserBundle') }}: {{ user.twitch }}</p>*/
/* */
/* </div>*/
/* */
