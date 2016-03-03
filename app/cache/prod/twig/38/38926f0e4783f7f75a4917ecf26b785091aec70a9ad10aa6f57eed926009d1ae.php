<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5d6e4f61846cbb6b27208fecc37bd2f334eafa439a148b8c1af0bd3918460aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_18b2acdc1f6740f4d2c5dc14a10b909ec92a4bb0711295a11bfb73bd53b70315 = $this->env->getExtension("native_profiler");
        $__internal_18b2acdc1f6740f4d2c5dc14a10b909ec92a4bb0711295a11bfb73bd53b70315->enter($__internal_18b2acdc1f6740f4d2c5dc14a10b909ec92a4bb0711295a11bfb73bd53b70315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b2acdc1f6740f4d2c5dc14a10b909ec92a4bb0711295a11bfb73bd53b70315->leave($__internal_18b2acdc1f6740f4d2c5dc14a10b909ec92a4bb0711295a11bfb73bd53b70315_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4622eded38cdb667577347e0ee49c48013b826a2370cf38a763e13c7624ea942 = $this->env->getExtension("native_profiler");
        $__internal_4622eded38cdb667577347e0ee49c48013b826a2370cf38a763e13c7624ea942->enter($__internal_4622eded38cdb667577347e0ee49c48013b826a2370cf38a763e13c7624ea942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4622eded38cdb667577347e0ee49c48013b826a2370cf38a763e13c7624ea942->leave($__internal_4622eded38cdb667577347e0ee49c48013b826a2370cf38a763e13c7624ea942_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
