<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_2781ade0bfa007a3b2325abe092df00a6e8da2531821f11e647e93207846aedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_3347d33b4ba50e81101c683c453cf802f5912971584a974b920b12849d4916f6 = $this->env->getExtension("native_profiler");
        $__internal_3347d33b4ba50e81101c683c453cf802f5912971584a974b920b12849d4916f6->enter($__internal_3347d33b4ba50e81101c683c453cf802f5912971584a974b920b12849d4916f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3347d33b4ba50e81101c683c453cf802f5912971584a974b920b12849d4916f6->leave($__internal_3347d33b4ba50e81101c683c453cf802f5912971584a974b920b12849d4916f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfaac48f8fdeb67f41569f7e8cbca6fb0b8c82b8d495283d14f54c507bfb44b3 = $this->env->getExtension("native_profiler");
        $__internal_dfaac48f8fdeb67f41569f7e8cbca6fb0b8c82b8d495283d14f54c507bfb44b3->enter($__internal_dfaac48f8fdeb67f41569f7e8cbca6fb0b8c82b8d495283d14f54c507bfb44b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_dfaac48f8fdeb67f41569f7e8cbca6fb0b8c82b8d495283d14f54c507bfb44b3->leave($__internal_dfaac48f8fdeb67f41569f7e8cbca6fb0b8c82b8d495283d14f54c507bfb44b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
