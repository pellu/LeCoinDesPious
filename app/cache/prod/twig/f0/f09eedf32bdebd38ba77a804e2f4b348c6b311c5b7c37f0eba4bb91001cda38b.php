<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_996778465c91efccefa0e0387f0f56b8237538352df5c909c2a8b38e552ff1c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9c304e80bb53b2b96a36d8df8d8f28ee05b85c91bccbc770a8f0f8dc435657ba = $this->env->getExtension("native_profiler");
        $__internal_9c304e80bb53b2b96a36d8df8d8f28ee05b85c91bccbc770a8f0f8dc435657ba->enter($__internal_9c304e80bb53b2b96a36d8df8d8f28ee05b85c91bccbc770a8f0f8dc435657ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c304e80bb53b2b96a36d8df8d8f28ee05b85c91bccbc770a8f0f8dc435657ba->leave($__internal_9c304e80bb53b2b96a36d8df8d8f28ee05b85c91bccbc770a8f0f8dc435657ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64aab1b5b01a82816edab199d61aaaeda9141a0b8d207aa1fec5c995a3fea9b8 = $this->env->getExtension("native_profiler");
        $__internal_64aab1b5b01a82816edab199d61aaaeda9141a0b8d207aa1fec5c995a3fea9b8->enter($__internal_64aab1b5b01a82816edab199d61aaaeda9141a0b8d207aa1fec5c995a3fea9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_64aab1b5b01a82816edab199d61aaaeda9141a0b8d207aa1fec5c995a3fea9b8->leave($__internal_64aab1b5b01a82816edab199d61aaaeda9141a0b8d207aa1fec5c995a3fea9b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
