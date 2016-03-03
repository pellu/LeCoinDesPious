<?php

/* @User/Group/list.html.twig */
class __TwigTemplate_02fe1514013151f34e468e466610b1b88224ecf2408aa5eae91c3d7508cfecb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/list.html.twig", 1);
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
        $__internal_2eca9dbeb9e1630e4cf7edb5b3f002f5425b74a11e92990590ce80136a9367ff = $this->env->getExtension("native_profiler");
        $__internal_2eca9dbeb9e1630e4cf7edb5b3f002f5425b74a11e92990590ce80136a9367ff->enter($__internal_2eca9dbeb9e1630e4cf7edb5b3f002f5425b74a11e92990590ce80136a9367ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eca9dbeb9e1630e4cf7edb5b3f002f5425b74a11e92990590ce80136a9367ff->leave($__internal_2eca9dbeb9e1630e4cf7edb5b3f002f5425b74a11e92990590ce80136a9367ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89a0099670702aa303a118218d0c00e44fdc94da1b6f6e085d16d9c5cba188a8 = $this->env->getExtension("native_profiler");
        $__internal_89a0099670702aa303a118218d0c00e44fdc94da1b6f6e085d16d9c5cba188a8->enter($__internal_89a0099670702aa303a118218d0c00e44fdc94da1b6f6e085d16d9c5cba188a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@User/Group/list.html.twig", 4)->display($context);
        
        $__internal_89a0099670702aa303a118218d0c00e44fdc94da1b6f6e085d16d9c5cba188a8->leave($__internal_89a0099670702aa303a118218d0c00e44fdc94da1b6f6e085d16d9c5cba188a8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
