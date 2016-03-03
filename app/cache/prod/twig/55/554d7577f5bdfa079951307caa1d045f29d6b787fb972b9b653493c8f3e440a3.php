<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_a8df1d6a7e5704cc933b654be186a9de724756787e5a85acbeb56aaa0da75b12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6654b8f08066fc42da388da2db333f2547b1110c1ee1afffca8219dceb487ddf = $this->env->getExtension("native_profiler");
        $__internal_6654b8f08066fc42da388da2db333f2547b1110c1ee1afffca8219dceb487ddf->enter($__internal_6654b8f08066fc42da388da2db333f2547b1110c1ee1afffca8219dceb487ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6654b8f08066fc42da388da2db333f2547b1110c1ee1afffca8219dceb487ddf->leave($__internal_6654b8f08066fc42da388da2db333f2547b1110c1ee1afffca8219dceb487ddf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f847028cb3be58aa05054eaa6a7d4486e4a7e53e204a06be63ea85c9fd742215 = $this->env->getExtension("native_profiler");
        $__internal_f847028cb3be58aa05054eaa6a7d4486e4a7e53e204a06be63ea85c9fd742215->enter($__internal_f847028cb3be58aa05054eaa6a7d4486e4a7e53e204a06be63ea85c9fd742215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f847028cb3be58aa05054eaa6a7d4486e4a7e53e204a06be63ea85c9fd742215->leave($__internal_f847028cb3be58aa05054eaa6a7d4486e4a7e53e204a06be63ea85c9fd742215_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
