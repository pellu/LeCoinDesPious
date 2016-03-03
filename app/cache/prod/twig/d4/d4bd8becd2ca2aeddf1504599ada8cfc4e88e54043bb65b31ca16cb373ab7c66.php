<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_335f5d8ccec8c2836e90fe158aaae3166406ded8fd0603105a2f30266dd814c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_080c9f6e7e169aa26224fef11a785f24685f4c0621cdbf62763d04ad9c94d284 = $this->env->getExtension("native_profiler");
        $__internal_080c9f6e7e169aa26224fef11a785f24685f4c0621cdbf62763d04ad9c94d284->enter($__internal_080c9f6e7e169aa26224fef11a785f24685f4c0621cdbf62763d04ad9c94d284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080c9f6e7e169aa26224fef11a785f24685f4c0621cdbf62763d04ad9c94d284->leave($__internal_080c9f6e7e169aa26224fef11a785f24685f4c0621cdbf62763d04ad9c94d284_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3c9f934d8453a2d0924aee52c8753682f758bc42fa682a4cc307f18f9b5e99c = $this->env->getExtension("native_profiler");
        $__internal_f3c9f934d8453a2d0924aee52c8753682f758bc42fa682a4cc307f18f9b5e99c->enter($__internal_f3c9f934d8453a2d0924aee52c8753682f758bc42fa682a4cc307f18f9b5e99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f3c9f934d8453a2d0924aee52c8753682f758bc42fa682a4cc307f18f9b5e99c->leave($__internal_f3c9f934d8453a2d0924aee52c8753682f758bc42fa682a4cc307f18f9b5e99c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
