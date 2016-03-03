<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_eda845720bdfb1eb4f4145b741dca85a4fa0d0d150f2f8534aa426188a18b88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ad05c2b5a17d412dd266b714734dc04eb9a06c2f8a43e10584630a7ec0fc4e79 = $this->env->getExtension("native_profiler");
        $__internal_ad05c2b5a17d412dd266b714734dc04eb9a06c2f8a43e10584630a7ec0fc4e79->enter($__internal_ad05c2b5a17d412dd266b714734dc04eb9a06c2f8a43e10584630a7ec0fc4e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad05c2b5a17d412dd266b714734dc04eb9a06c2f8a43e10584630a7ec0fc4e79->leave($__internal_ad05c2b5a17d412dd266b714734dc04eb9a06c2f8a43e10584630a7ec0fc4e79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b15e3cf840cf0e0a27565bcd5bcb6a3a51b28eccba2849aa041c9257acae92a = $this->env->getExtension("native_profiler");
        $__internal_6b15e3cf840cf0e0a27565bcd5bcb6a3a51b28eccba2849aa041c9257acae92a->enter($__internal_6b15e3cf840cf0e0a27565bcd5bcb6a3a51b28eccba2849aa041c9257acae92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6b15e3cf840cf0e0a27565bcd5bcb6a3a51b28eccba2849aa041c9257acae92a->leave($__internal_6b15e3cf840cf0e0a27565bcd5bcb6a3a51b28eccba2849aa041c9257acae92a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
