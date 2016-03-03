<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_49491f94934cafd37e9d629e4efc3d5f704349e71cf12cce9d9d5ab8ca654525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_b692c467cb5ca740d136778ba946d8b606721853bec3cae74949d086bad0a212 = $this->env->getExtension("native_profiler");
        $__internal_b692c467cb5ca740d136778ba946d8b606721853bec3cae74949d086bad0a212->enter($__internal_b692c467cb5ca740d136778ba946d8b606721853bec3cae74949d086bad0a212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b692c467cb5ca740d136778ba946d8b606721853bec3cae74949d086bad0a212->leave($__internal_b692c467cb5ca740d136778ba946d8b606721853bec3cae74949d086bad0a212_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d338517b9094f6ab98843bad9312dda0218c0be88ff45e8eb61af6c31ba01f1f = $this->env->getExtension("native_profiler");
        $__internal_d338517b9094f6ab98843bad9312dda0218c0be88ff45e8eb61af6c31ba01f1f->enter($__internal_d338517b9094f6ab98843bad9312dda0218c0be88ff45e8eb61af6c31ba01f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d338517b9094f6ab98843bad9312dda0218c0be88ff45e8eb61af6c31ba01f1f->leave($__internal_d338517b9094f6ab98843bad9312dda0218c0be88ff45e8eb61af6c31ba01f1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
