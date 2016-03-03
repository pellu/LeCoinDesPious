<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c44bc613804f54be8dfdf8147be7e64155bd37d6b9c2c8710826d95806263577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fd4708f7eff2ec6feb7ceee7f03fc52baf11fb07509a7ea0c1ada92e0d51e7f0 = $this->env->getExtension("native_profiler");
        $__internal_fd4708f7eff2ec6feb7ceee7f03fc52baf11fb07509a7ea0c1ada92e0d51e7f0->enter($__internal_fd4708f7eff2ec6feb7ceee7f03fc52baf11fb07509a7ea0c1ada92e0d51e7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4708f7eff2ec6feb7ceee7f03fc52baf11fb07509a7ea0c1ada92e0d51e7f0->leave($__internal_fd4708f7eff2ec6feb7ceee7f03fc52baf11fb07509a7ea0c1ada92e0d51e7f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_458292142c6fd31bf1ae3d2a55f87f7ee0015df4455a115de3d1833d8d3326ce = $this->env->getExtension("native_profiler");
        $__internal_458292142c6fd31bf1ae3d2a55f87f7ee0015df4455a115de3d1833d8d3326ce->enter($__internal_458292142c6fd31bf1ae3d2a55f87f7ee0015df4455a115de3d1833d8d3326ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_458292142c6fd31bf1ae3d2a55f87f7ee0015df4455a115de3d1833d8d3326ce->leave($__internal_458292142c6fd31bf1ae3d2a55f87f7ee0015df4455a115de3d1833d8d3326ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
