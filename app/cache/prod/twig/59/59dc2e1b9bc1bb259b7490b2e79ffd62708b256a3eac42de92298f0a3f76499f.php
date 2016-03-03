<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_48d2746889e30917618be313bae20f0e634589b5e145781b85a78e3c39b9d470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8458343fb71d99ceda04e2476536b107a5f4380afed5cc783145f53fc53e99cc = $this->env->getExtension("native_profiler");
        $__internal_8458343fb71d99ceda04e2476536b107a5f4380afed5cc783145f53fc53e99cc->enter($__internal_8458343fb71d99ceda04e2476536b107a5f4380afed5cc783145f53fc53e99cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8458343fb71d99ceda04e2476536b107a5f4380afed5cc783145f53fc53e99cc->leave($__internal_8458343fb71d99ceda04e2476536b107a5f4380afed5cc783145f53fc53e99cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b19551e122873f47f55954dde0670dc9cede879a4d8ee61c86a69c9ce12101dd = $this->env->getExtension("native_profiler");
        $__internal_b19551e122873f47f55954dde0670dc9cede879a4d8ee61c86a69c9ce12101dd->enter($__internal_b19551e122873f47f55954dde0670dc9cede879a4d8ee61c86a69c9ce12101dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b19551e122873f47f55954dde0670dc9cede879a4d8ee61c86a69c9ce12101dd->leave($__internal_b19551e122873f47f55954dde0670dc9cede879a4d8ee61c86a69c9ce12101dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
