<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4a2f0b40a1b4fb5e99874159c69cdd6c29c0070d1f5c29a5823e256b15a683c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_aedbaf2facf0ce466626e0b3e08f03562f4123c20bd693ef153be9031d0678ed = $this->env->getExtension("native_profiler");
        $__internal_aedbaf2facf0ce466626e0b3e08f03562f4123c20bd693ef153be9031d0678ed->enter($__internal_aedbaf2facf0ce466626e0b3e08f03562f4123c20bd693ef153be9031d0678ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedbaf2facf0ce466626e0b3e08f03562f4123c20bd693ef153be9031d0678ed->leave($__internal_aedbaf2facf0ce466626e0b3e08f03562f4123c20bd693ef153be9031d0678ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0716b4baa28ecc5f46a2edfcf61246a9c4152e63448475a37bdd5f64cfc64c66 = $this->env->getExtension("native_profiler");
        $__internal_0716b4baa28ecc5f46a2edfcf61246a9c4152e63448475a37bdd5f64cfc64c66->enter($__internal_0716b4baa28ecc5f46a2edfcf61246a9c4152e63448475a37bdd5f64cfc64c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0716b4baa28ecc5f46a2edfcf61246a9c4152e63448475a37bdd5f64cfc64c66->leave($__internal_0716b4baa28ecc5f46a2edfcf61246a9c4152e63448475a37bdd5f64cfc64c66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
