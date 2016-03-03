<?php

/* @User/Group/new.html.twig */
class __TwigTemplate_02df291cf8541ccee6b86d2bfb613785c197c7b92542cf3ad626130c0dd6636f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/new.html.twig", 1);
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
        $__internal_dbd137b52a20249123caaebf52e47acefe1681cc580eba5e8a9e95ce2fc55e86 = $this->env->getExtension("native_profiler");
        $__internal_dbd137b52a20249123caaebf52e47acefe1681cc580eba5e8a9e95ce2fc55e86->enter($__internal_dbd137b52a20249123caaebf52e47acefe1681cc580eba5e8a9e95ce2fc55e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd137b52a20249123caaebf52e47acefe1681cc580eba5e8a9e95ce2fc55e86->leave($__internal_dbd137b52a20249123caaebf52e47acefe1681cc580eba5e8a9e95ce2fc55e86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72816a64ca421f9fb50d1c9852ea7b49c9dae62872ea0f8ef3b2651ddcdb2e78 = $this->env->getExtension("native_profiler");
        $__internal_72816a64ca421f9fb50d1c9852ea7b49c9dae62872ea0f8ef3b2651ddcdb2e78->enter($__internal_72816a64ca421f9fb50d1c9852ea7b49c9dae62872ea0f8ef3b2651ddcdb2e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@User/Group/new.html.twig", 4)->display($context);
        
        $__internal_72816a64ca421f9fb50d1c9852ea7b49c9dae62872ea0f8ef3b2651ddcdb2e78->leave($__internal_72816a64ca421f9fb50d1c9852ea7b49c9dae62872ea0f8ef3b2651ddcdb2e78_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
