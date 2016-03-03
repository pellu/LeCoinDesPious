<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_1ab299eb18850153e7a5eab1d537edb9de20b4b0f010a4e715b52532f09cc7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_29df260f8928f4abae2fcad8a83a5a2e622e5aae7f5fe54e3894677f0a2b88e2 = $this->env->getExtension("native_profiler");
        $__internal_29df260f8928f4abae2fcad8a83a5a2e622e5aae7f5fe54e3894677f0a2b88e2->enter($__internal_29df260f8928f4abae2fcad8a83a5a2e622e5aae7f5fe54e3894677f0a2b88e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29df260f8928f4abae2fcad8a83a5a2e622e5aae7f5fe54e3894677f0a2b88e2->leave($__internal_29df260f8928f4abae2fcad8a83a5a2e622e5aae7f5fe54e3894677f0a2b88e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8d227c3459d6ee7680e27b0e9da47d1737d75c765dad70e3c12afc60e8879ec = $this->env->getExtension("native_profiler");
        $__internal_c8d227c3459d6ee7680e27b0e9da47d1737d75c765dad70e3c12afc60e8879ec->enter($__internal_c8d227c3459d6ee7680e27b0e9da47d1737d75c765dad70e3c12afc60e8879ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c8d227c3459d6ee7680e27b0e9da47d1737d75c765dad70e3c12afc60e8879ec->leave($__internal_c8d227c3459d6ee7680e27b0e9da47d1737d75c765dad70e3c12afc60e8879ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
