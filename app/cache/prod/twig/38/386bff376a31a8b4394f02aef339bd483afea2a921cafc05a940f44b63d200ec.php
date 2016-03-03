<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_293a48abc4b0d56a1379a1beed9f333820380ce83cf9e25e84806ce319eb2d2d extends Twig_Template
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
        $__internal_24ed22a62670bf1eb121361e29a27a00dc366a1ae2c5e076fa80b8bc85322326 = $this->env->getExtension("native_profiler");
        $__internal_24ed22a62670bf1eb121361e29a27a00dc366a1ae2c5e076fa80b8bc85322326->enter($__internal_24ed22a62670bf1eb121361e29a27a00dc366a1ae2c5e076fa80b8bc85322326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_24ed22a62670bf1eb121361e29a27a00dc366a1ae2c5e076fa80b8bc85322326->leave($__internal_24ed22a62670bf1eb121361e29a27a00dc366a1ae2c5e076fa80b8bc85322326_prof);

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
