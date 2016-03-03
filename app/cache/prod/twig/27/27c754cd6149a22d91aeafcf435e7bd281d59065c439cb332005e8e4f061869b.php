<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c11bae8905c901af0586d4b8e09cda7c661a5a9d2d844baa94c4551911fff599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_25af450be370ef53711cd208213bd2b9a57f3d2f663f3e3024444f774bb99b0b = $this->env->getExtension("native_profiler");
        $__internal_25af450be370ef53711cd208213bd2b9a57f3d2f663f3e3024444f774bb99b0b->enter($__internal_25af450be370ef53711cd208213bd2b9a57f3d2f663f3e3024444f774bb99b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25af450be370ef53711cd208213bd2b9a57f3d2f663f3e3024444f774bb99b0b->leave($__internal_25af450be370ef53711cd208213bd2b9a57f3d2f663f3e3024444f774bb99b0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ef2895b03888b44da5c2e861d71cbb131345f0f20e9ec0164151d26aac91b4c = $this->env->getExtension("native_profiler");
        $__internal_6ef2895b03888b44da5c2e861d71cbb131345f0f20e9ec0164151d26aac91b4c->enter($__internal_6ef2895b03888b44da5c2e861d71cbb131345f0f20e9ec0164151d26aac91b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_6ef2895b03888b44da5c2e861d71cbb131345f0f20e9ec0164151d26aac91b4c->leave($__internal_6ef2895b03888b44da5c2e861d71cbb131345f0f20e9ec0164151d26aac91b4c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
