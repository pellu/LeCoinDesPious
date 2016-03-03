<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_db7845c47ac2f1c72334c49bc4e34b7fb23596f4462ca0c067dbd141d2aca32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fe69892ce89de2f89b14a07c1f2ed3c9de0d7f4af0c4c051c148c48e7f95d6c7 = $this->env->getExtension("native_profiler");
        $__internal_fe69892ce89de2f89b14a07c1f2ed3c9de0d7f4af0c4c051c148c48e7f95d6c7->enter($__internal_fe69892ce89de2f89b14a07c1f2ed3c9de0d7f4af0c4c051c148c48e7f95d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe69892ce89de2f89b14a07c1f2ed3c9de0d7f4af0c4c051c148c48e7f95d6c7->leave($__internal_fe69892ce89de2f89b14a07c1f2ed3c9de0d7f4af0c4c051c148c48e7f95d6c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad55a75551b0c6a19746538f2d6841f41efb2811064c42cf2d92a8a6115a2d95 = $this->env->getExtension("native_profiler");
        $__internal_ad55a75551b0c6a19746538f2d6841f41efb2811064c42cf2d92a8a6115a2d95->enter($__internal_ad55a75551b0c6a19746538f2d6841f41efb2811064c42cf2d92a8a6115a2d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ad55a75551b0c6a19746538f2d6841f41efb2811064c42cf2d92a8a6115a2d95->leave($__internal_ad55a75551b0c6a19746538f2d6841f41efb2811064c42cf2d92a8a6115a2d95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
