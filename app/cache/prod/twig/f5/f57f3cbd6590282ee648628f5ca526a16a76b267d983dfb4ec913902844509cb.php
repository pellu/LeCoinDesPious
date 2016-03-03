<?php

/* @User/Group/show.html.twig */
class __TwigTemplate_fb201911fbd597c1d8fe92d66d12e7a58e68ce5bc68c527125b8c5d56501f56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/show.html.twig", 1);
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
        $__internal_0cd530ea0564e29d411893bd84be62f6b981b60cf35cdc809378f8f77cb6e87f = $this->env->getExtension("native_profiler");
        $__internal_0cd530ea0564e29d411893bd84be62f6b981b60cf35cdc809378f8f77cb6e87f->enter($__internal_0cd530ea0564e29d411893bd84be62f6b981b60cf35cdc809378f8f77cb6e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd530ea0564e29d411893bd84be62f6b981b60cf35cdc809378f8f77cb6e87f->leave($__internal_0cd530ea0564e29d411893bd84be62f6b981b60cf35cdc809378f8f77cb6e87f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dab91b2b943d9109f9b14e3f1f0d3c62a8d513e5196cebbca46fda325d5019c = $this->env->getExtension("native_profiler");
        $__internal_9dab91b2b943d9109f9b14e3f1f0d3c62a8d513e5196cebbca46fda325d5019c->enter($__internal_9dab91b2b943d9109f9b14e3f1f0d3c62a8d513e5196cebbca46fda325d5019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@User/Group/show.html.twig", 4)->display($context);
        
        $__internal_9dab91b2b943d9109f9b14e3f1f0d3c62a8d513e5196cebbca46fda325d5019c->leave($__internal_9dab91b2b943d9109f9b14e3f1f0d3c62a8d513e5196cebbca46fda325d5019c_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
