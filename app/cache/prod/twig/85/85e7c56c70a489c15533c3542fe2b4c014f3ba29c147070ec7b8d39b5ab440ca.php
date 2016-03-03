<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f88e78dd92713e224bfc70802d6d6c7d9876514e0ef85a7a623ff32797e6d816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_917105037193aa620412134164386ec159f6fb5e69c77169ac88bf68343d084e = $this->env->getExtension("native_profiler");
        $__internal_917105037193aa620412134164386ec159f6fb5e69c77169ac88bf68343d084e->enter($__internal_917105037193aa620412134164386ec159f6fb5e69c77169ac88bf68343d084e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917105037193aa620412134164386ec159f6fb5e69c77169ac88bf68343d084e->leave($__internal_917105037193aa620412134164386ec159f6fb5e69c77169ac88bf68343d084e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a857ef53ace93465011a443f59480faac1b8701f217055c22b1accbf525fa33a = $this->env->getExtension("native_profiler");
        $__internal_a857ef53ace93465011a443f59480faac1b8701f217055c22b1accbf525fa33a->enter($__internal_a857ef53ace93465011a443f59480faac1b8701f217055c22b1accbf525fa33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a857ef53ace93465011a443f59480faac1b8701f217055c22b1accbf525fa33a->leave($__internal_a857ef53ace93465011a443f59480faac1b8701f217055c22b1accbf525fa33a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
